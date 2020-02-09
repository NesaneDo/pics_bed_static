<?php
/**
 * Created by PhpStorm.
 * User: Rondo
 * Date: 2020/2/5
 * Time: 16:37
 */


/**
 * @param $path
 * @return array
 */
function getImages($path){
    $list = array_diff(scandir($path), ['.', '..']);
    $res = [];
    foreach ($list as $v) {
        $pathNew=$path . '/' . $v;
        if (is_dir($pathNew)) {
            $res[$v] = array_diff(scandir($pathNew), ['.', '..']);
        }
    }
    return $res;
}

/**
 * @param $src
 * @return string|string[]|null
 */
function reImgSrcSuffix($src)
{
    $arr=['/.jpg/','/.png/','/.gif/'];
    return preg_replace($arr, '', $src);
}