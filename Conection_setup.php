<?php
//Step 1: Set connection variables

$server = "localhost";

$username = "root";

$password = "";

//Step 2: Create a database connection.

$con = mysqli_connect($server, $username, $password);

//Step 3: Check for the connection success 

if(!$con){echo "Success connecting to the db";}

//You can check with the connection by going to the front-end and clicking on the button. If the connection is successful, it will echo the message.

//Step 4: Collection post variables  Now the data that the user will enter in the front end needs to be stored inside the table, make sure you know the name of columns of the table and the input name tag for easy doing of this.

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//Here in variable $sql paste the insert query that you copied from the database. We assign the variables with the input attribute name. “Insert into database_name.table_name” At first is the table attribute name then we the PHP variables declared by you.

//Step 5: Execute the query 

if($con->query($sql) == true){
    echo "Successfully inserted";}

//    Step 6: Close the connection.

$con->close();







?>