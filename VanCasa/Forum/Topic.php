<?php 
    class Topic{

        function __construct($title, $createTime, $owner)
        {
            $this->title = $title;
            $this->createTime = $createTime;
            $this->owner = $owner;
        }
    }
    ?>