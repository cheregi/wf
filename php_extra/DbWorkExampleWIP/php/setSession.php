<?php
session_start();
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/6/2019
 * Time: 2:09 PM
 */
echo "name for session".$_GET['nameforsession'];
$_SESSION['nameforsession'] =$_GET['nameforsession'];

$_SESSION['anotherparameter'] ="something";