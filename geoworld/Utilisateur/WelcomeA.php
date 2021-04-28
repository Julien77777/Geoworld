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

    <table class="table table-bordered">
 <caption>Membres de Geoworld</caption>
<tr>
    
    <th><p class="text-error"><?php ?></p></th>
    <th><p class="text-error">Prénom</p></th>
    <th><p class="text-error">Nom</p></th>
   
    </tr>
<tr>
    
</tr>
    <h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>
