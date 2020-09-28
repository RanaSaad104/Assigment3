<?php
require_once "Database/connection.php";
   

//Form Submission Code
if(isset($_POST['submit'])){
    //Code to handle form
    
    //code for valdating the form
    $errors = [];

    //First Name validation
    if(empty($_POST['Firstname'])){
        $errors[] = "First Name cannot be empty";
    }
    else{
        $Firstname = trim($_POST['Firstname']);
    }

    //User Name validation
    if(empty($_POST['lastname'])){
        $errors[] = "User Name cannot be empty";
    }
    else{
        $lastname = trim($_POST['lastname']);
    }

    //Email Validation
    if(empty($_POST['email'])){
        $errors[] = "Email cannot be empty";
    }
    else{
        $email = trim($_POST['email']);
    }

    //Password Validation
    if(empty($_POST['password'])){
        $errors[] = "Password cannot be empty";
    }
    else{
        $password = $_POST['password'];
    }

    //Present Address validation
    if(empty($_POST['psaddress'])){
        $errors[] = "Peresent address cannot be empty";
    }
    else{
        $psaddress = trim($_POST['psaddress']);
    }

     //Prmanent Address validation
     if(empty($_POST['praddress'])){
        $errors[] = "Parmanent address cannot be empty";
    }
    else{
        $praddress = trim($_POST['praddress']);
    }

     //CNIC validation
     if(empty($_POST['cnic'])){
        $errors[] = "CNIC Number cannot be empty";
    }
    else{
        $cnic = trim($_POST['cnic']);
    }

    //Date of Birth
    if(empty($_POST['dob'])){
        $errors[] = "Date of Birth cannot be empty";
    }
    else{
        $dob = trim($_POST['dob']);
    }

    

    //if there are no errors
    if(empty($errors)){
        //Insert the record in the database
        $dbc    = db_connect();
        $sql = "INSERT INTO details VALUES(NULL,'$Firstname','$lastname','$email', '$password','$psaddress'.'$praddress','$cnic','$dob')";
        $result = mysqli_query($dbc,$sql);
        if($result){
            echo "<div class = 'alert alert-success'> Data Entered Successfully </div>";
        }
        else{
            echo "<div class = 'alert alert-danger'> Data Cannot be Entered due to error </div>";   
        }
        db_close($dbc);
    }
    else{
        //Display the errors
        foreach($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
    }
}
else{
    //Form is not submitted
    //code
     echo "<div class = 'alert alert-danger'>Form is not submitted </div>";
}
?>