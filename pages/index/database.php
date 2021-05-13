
<?php



$email = filter_input (INPUT_POST, 'email');
$password = filter_input_input (INPUT_POST, '');

if (!empty ($email)){
if (!empty($password)){
$host ="localhost";
$dbusername ="root";
$dbpassword = " ";
$dbname = "kujipa";

$con=new mysqli($host, $dbusername ,$dbpassword, $dbname);

if (mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error() );
}
else
{
    $sql - "INSERT INTO tbl_signup (fdlEmail,fdlPassword) values ('$email', '$password')";
    if ($con->query ($sql))
    {
        echo "New Record Inserted Succesfully";
    
    }
    else
    {
        echo "Error :" . $sql ." " .  $con->error:
    } 
    $con->close();
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
