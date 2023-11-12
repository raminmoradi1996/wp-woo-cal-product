<?php


namespace STZCPW\inc\woocommerce;

use STZCPW\inc\info_stz;
use STZCPW\inc\woocommerce\single_product;

if (!defined('ABSPATH')) {
    die;
}

class woocommerce extends info_stz
{

    public function __construct()
    {
        // single product 
        new single_product;
    }
}
