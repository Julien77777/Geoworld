<?php
include('Utilisateur/Session.php');
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
<?php
require_once 'inc/manager-db.php';
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <h1> Welcome <?php echo $login_session; ?> </h1>
</body>
</html>


<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>