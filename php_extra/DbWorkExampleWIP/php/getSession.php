<?php
session_start();
//var_dump($_SESSION);
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/6/2019
 * Time: 2:15 PM
 */
echo "Current name is session".$_SESSION['nameforsession'];

echo "Current name is session".$_SESSION['anotherparameter'];
//in browser(getsession and setsession files):
//http://127.0.0.1/wf/php_extra/DbWorkExampleWIP/php/setSession.php?nameforsession=diana
//http://127.0.0.1/wf/php_extra/DbWorkExampleWIP/php/getSession.php