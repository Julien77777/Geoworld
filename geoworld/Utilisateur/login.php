<?php
    include("DB_Utilisateur.php");
    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Name = mysqli_real_escape_string($db,$_POST['Name']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      $Categorie = mysqli_real_escape_string($db,$_POST['Categorie']); 

      $sql = "SELECT id FROM registration WHERE Name = '$Name' and Password = '$Password' and Categorie = 'Eleve' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $Name and $Password, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $Name;
         header("location: /Geoworld/homeUtilisateur.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo ($error);
      }
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Name = mysqli_real_escape_string($db,$_POST['Name']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      $Categorie = mysqli_real_escape_string($db,$_POST['Categorie']); 

      $sql = "SELECT id FROM registration WHERE Name = '$Name' and Password = '$Password' and Categorie = 'Admin' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $Name and $Password, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $Name;
         header("location: welcomeA.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo ($error);
      }
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Name = mysqli_real_escape_string($db,$_POST['Name']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      $Categorie = mysqli_real_escape_string($db,$_POST['Categorie']); 

      $sql = "SELECT id FROM registration WHERE Name = '$Name' and Password = '$Password' and Categorie = 'Enseignant' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $Name and $Password, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $Name;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo ($error);
      }
   }

   
?>