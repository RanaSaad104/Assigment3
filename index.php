<?php 
    $formTitle = "Assignment";
    require_once "head.php";
    
?>
<body>
   

<div class="container">
<div class="row justify-content-center">
   <div class="col-sm-6">
      <div class="display-4">
        User Registration Form
      </div>
      <form action="process.php" method="POST" >

        <div class="form-group">
          <label for="First_Name">
           First Name:
          </label>
        <input type="text" name="Firstname" class="form-control"></div>

        <div class="form-group">
          <label for="User_Name">
          User Name:
          </label>
        <input type="text" name="lastname" class="form-control"></div>  

        <div class="form-group">
          <label for="email">
            Email
          </label>
        <input type="email" class="form-control"></div>

        <div class="form-group">
           <label for="password">Password: </label>
           <input type="password" name="password" id="password" class="form-control" ></div>


           <div class="form-group">
                <label for="adress">Present Address: </label>
                <input type="text" name="psaddress" id="psaddress" class="form-control">  </div>   


          <div class="form-group">
                <label for="adress">Permenant Address: </label>
                <input type="text" name="praddress" id="praddress" class="form-control">  </div> 

         <div class="form-group">
                <label for="cnic">CNIC: </label>
                <input type="number" name="cnic" id="cnic" maxlength="15"  class="form-control"></div> 

         <div class="form-group">
                 <label for="dob">Date of Birth: </label>
                  <input type="date" name="dob" id="dob" class="form-control">  </div>       


        <input type="submit" name="submit" id ="submit" value="Register" class="btn btn-success">
        </form>
        </div>
    </div>
  </div>

  <?php
           require_once "script.php";
    ?> 

 </body>
</html>