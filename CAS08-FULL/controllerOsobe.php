<?php
/*  require_once 'NekaKlasa.php';
    require_once 'NekaSimuliranaBaza.php'; 
    ...*/
    require_once 'Osoba.php';
    require_once 'Baza.php';

$action = isset($_REQUEST["action"])? $_REQUEST["action"] : ""; //provera da li je setovana akcija


if ($_SERVER['REQUEST_METHOD']=="POST"){
    //akcije za unos i izmenu
    if ($action == 'Unesi') {
        //echo $action;
        
        $ime = isset($_POST['ime'])? $_POST['ime'] : "";
        $prezime = isset($_POST['prezime'])? $_POST['prezime'] : "";
        $godiste = isset($_POST['godiste'])? $_POST['godiste'] : "";
        //validacija
        $osoba = new Osoba(++$_SESSION['id'], $ime, $prezime, $godiste);
        insert($osoba);
        $osobe = $_SESSION['osobe'];
        include 'prikazOsoba.php';
    } elseif ($action == 'Izmeni') {
        // $podatak = isset($_POST["podatak"])? test_input($_POST["podatak"]) : ""; //provera da li su setovani podaci
        //...
        $id = isset($_POST['id'])? $_POST['id'] : "";
        $ime = isset($_POST['ime'])? $_POST['ime'] : "";
        $prezime = isset($_POST['prezime'])? $_POST['prezime'] : "";
        $godiste = isset($_POST['godiste'])? $_POST['godiste'] : "";
        //validacija
        $osoba = new Osoba($id, $ime, $prezime, $godiste);
        editById($id,$osoba);
        $osobe = $_SESSION['osobe'];
        include 'prikazOsoba.php';
    } 
    
} elseif ($_SERVER['REQUEST_METHOD']=="GET"){
    //akcije za prikaz i brisanje
    if ($action == 'all') {
        $osobe = $_SESSION['osobe'];
        include 'prikazOsoba.php';
        //...
    } elseif ($action == 'Izbrisi'){
        $id = isset($_GET['id'])?$_GET['id'] : "";
        //Provera id, ako ne postoji redirekcija!!!!!!!!!!!404,index
        deleteById($id);
        $osobe = $_SESSION['osobe'];
        include 'prikazOsoba.php';
        //...
    }elseif ($action == 'Izmeni'){
        $id = isset($_GET['id'])?$_GET['id'] : "";
        //Provera id, ako ne postoji redirekcija!!!!!!!!!!!404,index
        $osoba = getById($id);
        include 'editOsoba.php';
    }
    
} else {
    //...
    header("Location: index.php"); //opciono
    die();
}

//funkcija za preradu unetih podataka
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function deleteById($id){
    if(count($_SESSION['osobe']) > 0){
        for ($i=0; $i < count($_SESSION['osobe']); $i++) { 
            if($_SESSION['osobe'][$i]->id == $id){
                unset($_SESSION['osobe'][$i]);
                $_SESSION['osobe'] = array_values($_SESSION['osobe']);//PRESLAGANJE KLJUCEV NIZA!!!!
                break;
            }
        }
    }
}

function insert($osoba){
    $_SESSION['osobe'][] = $osoba;
}

function getById($id){
    for ($i=0; $i < count($_SESSION['osobe']); $i++) { 
        if($_SESSION['osobe'][$i]->id == $id){
            return $osoba = $_SESSION['osobe'][$i];
            break;
        }
    }    
}

function editById($id, $osoba){
    for ($i=0; $i < count($_SESSION['osobe']); $i++) { 
        if($_SESSION['osobe'][$i]->id == $id){
            $_SESSION['osobe'][$i]->ime = $osoba->ime;
            $_SESSION['osobe'][$i]->prezime = $osoba->prezime;
            $_SESSION['osobe'][$i]->godiste = $osoba->godiste;
            break;
        }
    }
}
?>