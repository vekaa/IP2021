<?php 
    class Post{

        function __construct($topicID, $text, $createTime, $owner)
        {
            $this->topicID = $topicID;
            $this->text = $text;
            $this->createTime = $createTime;
            $this->owner = $owner;
        }
    }
    ?>