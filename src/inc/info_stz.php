<?php

namespace STZCPW\inc;

use STZCPW\inc\menu;
use STZCPW\inc\ajax;
use STZCPW\inc\shortcode;
use STZCPW\inc\woocommerce\woocommerce;

if (!defined('ABSPATH')) {
    die;
}

class info_stz
{


    // url file plugin 
    public $STZ_FILE =  __FILE__;
    // url directory plugin  
    public $STZ_DIR =  __DIR__;



    public $NamePlugin = "wp-woo-cal-product";

    public function __construct()
    {
        // add menu 
        new menu();

        new woocommerce();

        // style 
        add_action('admin_enqueue_scripts', [$this, "STZ_STYLE"]);
        add_action('wp_enqueue_scripts', [$this, "STZ_STYLE"]);

        add_action('admin_enqueue_scripts', [$this, "STZ_SCRIPT"]);
        add_action('wp_enqueue_scripts', [$this, "STZ_SCRIPT"]);


        // // ajax 
        $this->STZ_AJAX();

        // short code 
        $this->STZ_SHORTCODE();
    }


    // url plugin 
    public function STZ_URL($dir)
    {
        return plugins_url("$this->NamePlugin/$dir");
    }

    // View template plugin 
    public static function STZ_VIEW($page, $param = [])
    {
        $path = plugin_dir_path(__FILE__);
        $view = str_replace('inc', 'template', $path);
        $param = $param;
        include($view . $page);
    }

    public function STZ_STYLE()
    {

        $array = ['cpw-style', 'bootstrap', 'cpw-single-product', 'component/tooltip', 'component/table'];
        foreach ($array as $item) {
            wp_enqueue_style("$item", $this->STZ_URL("src/asset/css/$item.css"), 2, 307);
        }
    }


    public function STZ_SCRIPT()
    {
        $array = ['cpw-script', 'cpw-single-product', 'component/file', 'cpw-settings', 'gende/create-gende', 'gende/list-gende', 'gende/edit-gende', 'component/table'];
        foreach ($array as $item) {
            wp_enqueue_script("$item-script", $this->STZ_URL("src/asset/js/$item.js"), 2, 307);
        }
    }

    public function STZ_AJAX()
    {
        $array = ['SET_UPLOAD_FILE', 'stz_cpw_ajax_gende', 'stz_cpw_add_to_cart_item'];
        new ajax($array);
    }

    public function STZ_SHORTCODE()
    {
        $array = [];
        new shortcode($array);
    }
}
