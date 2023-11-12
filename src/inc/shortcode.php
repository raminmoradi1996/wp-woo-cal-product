<?php

namespace STZCPW\inc;

use STZCPW\inc\info_stz;

if (!defined('ABSPATH')) {
    die;
}

class shortcode extends info_stz
{

    function __construct($array)
    {
        foreach ($array as $item) {
            add_shortcode($item, [$this, $item]);
        }
    }


}
