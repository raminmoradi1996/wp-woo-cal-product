<?php

use STZCPW\inc\info_stz;

$info_stz = new info_stz();

if ($_GET['action'] == 'edit') {
    $info_stz->STZ_VIEW('edit-gende.php');
} else {
    $info_stz->STZ_VIEW('list-gende.php');
}
