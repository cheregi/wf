<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 2/28/2019
 * Time: 10:50 AM
 */
$FileToWrite ="FileToWrite.txt";
$fp=fopen($FileToWrite, 'w');
fwrite($fp, '111111111');
fwrite($fp, '23');
fclose($fp);
