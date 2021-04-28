<?php
   include('Session.php');
   


?>


<!DOCTYPE html>
<html>
<head>
    <title>Welcome </title>
</head>

<body>
    <h1>Welcome <?php echo $login_session; ?></h1> 

    <label for="lesContinent">Choose a Continent:</label>

<select id="lesContinent">
    <option value="">--Please choose an option--</option>
    <option value="North America">North America</option>
    <option value="2">Asia</option>
    <option value="3">Africa</option>
    <option value="4">Europe</option>
    <option value="5">South America</option>
    <option value="6">Oceania</option>
    <option value="7">Antarctica</option>
</select>






    <h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>

<?php 






$sqlf = "UPDATE $continent from country ";

?>