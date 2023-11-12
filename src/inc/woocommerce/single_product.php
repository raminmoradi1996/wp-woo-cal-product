<?php


namespace STZCPW\inc\woocommerce;

use STZCPW\inc\info_stz;
use STZCPW\inc\woocommerce\woocommerce;

if (!defined('ABSPATH')) {
    die;
}

class single_product extends woocommerce
{

    public function __construct()
    {
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        add_action('woocommerce_single_product_summary', [$this, 'Custom_Single_Product_Page'], 30);
    }

    public  function Custom_Single_Product_Page()
    {
        info_stz::STZ_VIEW('woocommerce/single-product.php');
    }
}
