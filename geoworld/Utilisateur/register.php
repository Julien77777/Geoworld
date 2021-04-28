<?php
include("DB_Utilisateur.php");

$Name = filter_input(INPUT_POST, 'Name');
$Password = filter_input(INPUT_POST, 'Password');
$Categorie = filter_input(INPUT_POST, 'Categorie');
if (!empty($Categorie)){
if (!empty($Name)){
if (!empty($Password)){
    
// Create connection
session_start();


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO registration (Name, Password, Categorie)
values ('$Name','$Password','$Categorie')";
if ($db->query($sql)){
echo "New record is inserted sucessfully";
}

else{
echo "Error: ". $sql ."
". $db->error;
}
$db->close();
}

}
else{
echo "Password should not be empty";
die();
}

}
else{
echo "Username should not be empty";
die();
}

}
else{
echo "Categorie should not be empty";
die();
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1><a href = "logout.php">Retour au site Geoworld</a></h2>
</body>
</html>

