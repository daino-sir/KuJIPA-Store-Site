
<?php

$email = filter_input (INPUT_POST, 'email');
$password = filter_input_input (INPUT_POST, 'password');

if (!empty ($email)){
if (!empty($password)){
$host ="localhost";

$dbpassword = " ";
$dbname = "kujipa";

$conn - new mysqli ($host, $dbusername ,$dbpassword, $dbname);

if (mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error() );
}
else
{
    $sql - "INSERT INTO tbl_signup (fdlEmail,fdlPassword) values ('$email', '$password')";
    if ($conn->query ($sql))
    {
        echo "New Record Inserted Succesfully";
    }
    else
    {
        echo "Error :" . $sql ." " .  $conn->error:
    } 
    $conn->close();
}
}
else
{
    echo "Email should not be empty";
    die();
}
}
else
{
    echo "Password should not be empty";
    die();
}

?>
