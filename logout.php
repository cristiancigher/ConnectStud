<?php
/**
 * Created by PhpStorm.
 * User: Cristian.Cigher
 * Date: 22/06/2016
 * Time: 20:19
 */
session_start();
session_destroy();

header('Location: index.php');

?>