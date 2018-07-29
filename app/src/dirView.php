<?php
/**
 * Created by PhpStorm.
 * User: yanni
 * Date: 7/28/2018
 * Time: 2:10 PM
 */

function getProjectDirs(){
    $dirs = array_filter(glob(PROJECTS_ROOT.'\\*',GLOB_ONLYDIR));
    foreach ($dirs as $dir){
        echo "<a class='list-group-item' href='#'><i class=\"fa fa-folder-o\"></i> $dir <span class='float-sm-right'>Last modified: ". date ("F d Y H:i:s.", filemtime($dir))."</span></a>";
    }
}