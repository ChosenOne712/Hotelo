<?php
$servername = "localhost";
$username = "root";
$password = "Must1422$";
$database = "HOTELOO";
// Create connection
// $conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->ping()) {
    echo "Our connection is ok!\n"; 
  } else {
    echo "Error: %s\n", $mysqli->error; 
  }
function getData(){
    $Data = array();
    $Data[1] =$_POST['FirstName'];
    $Data[2] =$_POST['LastName'];
    $Data[3] =$_POST['NationalID'];
    $Data[4] =$_POST['Email'];
    $Data[5] =$_POST['password'];
    return $Data;
}
if(isset($_POST['Insert'])){
    echo "fbesht";
    $info = getData();
    $gET = "SELECT * FROM Customers";
    $Insert = "INSERT INTO [Customers]([FirstName]
    ,[LastName]
    ,[NationalID]
    ,[Email]
    ,[password])
    VALUES('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]');";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Styles.css"> 

<link rel="stylesheet" href="StylesRegister.css"> 
<title>Register</title>
</head>

</head>
<!---->
    <header>

        <a href="AboutTheWebsite.html" class="logo" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hoteloo </a>
        <nav class="navigation">
            <a href="Serveices.html" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Serveices</a>
            <a href="logIn.html" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">LogIn</a>
            <a href="ContactUs.html" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact Us</a>
        </nav>

    </header>
</body>
<form method="POST">
    <section class="mainRegister">
        <div>
        <h2 align = "center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            Register
        </h2>
        <h3>
            <input name="FirstName" type="text" class="centerF" placeholder="First Name / الاسم الاول">
            <input name="LastName" type="text" class="centerF" placeholder="Last Name /اسم العائلة ">
            <input name="NationalID" type="password  not hidden" class="centerF" placeholder="National ID /الهوية الوطنية">
            <input name="Email" type="email" class="centerF" placeholder="E-Mail / البريد الالكتروني">
            <input name="password" type="password" class="centerF" placeholder="Password / كلمة السر">
            <input name="Insert" type="submit">
        </h3>

    </div>
    </section>

</form>

</html>