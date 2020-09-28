<?php
    require_once "credentials.php";
    function db_connect(){
        $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB_NAME);
        if(!$conn){
            echo mysqli_connect_error();
            exit();
        }
        return $conn;
    }

    function db_close($conn){
        if(isset($conn)){
            mysqli_close($conn);
        }
    }



?>