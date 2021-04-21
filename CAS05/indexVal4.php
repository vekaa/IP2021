<?php 
$msg = '';
//$imeErr = $emailErr = $sajtErr = $komentarErr = '';

$error = array('ime'=>'', 'email'=>'', 'sajt'=>'', 'komentar'=>'');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	
	$action = isset($_GET['action'])?Provera_unosa($_GET['action']):'';
	
		
		$ime = isset($_GET['ime'])?Provera_unosa($_GET['ime']):'';
		$email = isset($_GET['email'])?Provera_unosa($_GET['email']):'';
		$sajt = isset($_GET['sajt'])?$_GET['sajt']:'';
		
		$komentar = isset($_GET['komentar'])?Provera_unosa($_GET['komentar']):'';
		$pol = isset($_GET['pol'])?Provera_unosa($_GET['pol']):'zenski';
		
		$valid = false;
	if(!empty($action) && $action=="Posalji"){
		// validacija sa jednim grupnim errorom
		/*if(!empty($ime) && !empty($email) && !empty($sajt) && !empty($komentar) && !empty($pol)){
			$valid = true;
		}else{
			$msg = 'Morate popuniti sva polja';
		}*/
		if(empty($ime)) $error['ime'] = "Morate uneti ime";
		else if(!preg_match("/^[a-zA-Z]*$/", $ime)) $error['ime'] = "Ime mora imati samo karaktere";
		
		
		if(empty($email)) $error['email'] = "Morate uneti email";
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $error['email'] = "Email nije dobrog formata";
		
		if(empty($sajt)) $error['sajt'] = "Morate uneti sajt";
		
		if(empty($komentar)) $error['komentar'] = "Morate uneti komentar";
		
		//var_dump($error);
		if($error['ime'] == '' && $error['email'] == '' && $error['sajt'] == '' && $error['komentar'] == '') $valid = true;
		
	}
}

?>
<!DOCTYPE html>
<html>
<body>
<h2>PHP primer za proveru ispravnosti forme</h2>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Ime:<input type="text" name="ime" value="<?= $ime?>"> <?= $error['ime']?><br><br>
E-mail:<input type="text" name="email" value="<?= $email?>"> <?= $error['email']?><br><br>
Website:<input type="text" name="sajt" value="<?= $sajt?>"> <?= $error['sajt']?><br><br>
Komentar:<textarea name="komentar" rows="5"   cols="40"> <?= $komentar?></textarea> <?= $error['komentar']?><br><br>
Pol: 
<input type="radio" name="pol" value="zenski"
<?php if($pol=='zenski') echo 'checked'?>
>Zenski
<input type="radio" name="pol" value="muski" 
<?php if($pol=='muski') echo 'checked'?>
>Muski
<br>
<br>
<input type="submit" name="action" value="Posalji">
<br>

<?php 
	if($valid){
		echo '<h3>Vas unos je:</h3>';
		echo '<ul>';
		echo "<li>Ime : $ime</li>";
		echo "<li>Email : $email</li>";
		echo "<li>Website : $sajt</li>";
		echo "<li>Komentar : $komentar</li>";
		echo "<li>Pol : $pol</li>";
		echo '</ul>';
	}
	
?>
</form>
</body>
</html>
<?php 
function Provera_unosa($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>