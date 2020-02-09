<?php
/**
 * Created by PhpStorm.
 * User: Rondo
 * Date: 2020/2/5
 * Time: 17:27
 */

$arr=['/.jpg/','/.png/','/.gif/'];

$test=preg_replace($arr, '', 'asdfasdf.png');
var_dump($test);