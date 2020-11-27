<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email){
            $this->Name1 = $Name;
            $this->Username1 = $Username;
            $this->Email1 = $Email;
        }

        function addFriend(){
            echo  $this->Name1, " Added a friend."; 
        }
        function postStatus(){
            echo  $this->Name1, " Posted a status."; 
        }
    }

    $me = new User("Eudes Augustine Silerio", "eudesaugustine", "silerioeudesaugustine@gmail.com");
    $me->addFriend();
    echo "<br>";
    $me->postStatus();
?>