<?php

/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php  require_once 'inc/manager-db.php';
    $continent = $_GET['continent'];
    $desPays = getCountriesByContinent($continent);
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?PHP echo $continent;?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>Region</th>
         </tr>
       <?php foreach ($desPays as $pays): ?>
          <tr>
            <td> <?php echo $pays->Name ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->Region ?></td>
          </tr>
          <?PHP endforeach; ?>
          


     </table>
    </div>
    
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
