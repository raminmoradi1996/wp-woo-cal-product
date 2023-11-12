<?php

namespace STZCPW\inc;

if (!defined('ABSPATH')) {
    die;
}

class notice extends info_stz
{

    public  function __construct()
    {
        add_action('admin_notices', [$this, 'admin_send_notice']);
    }

    // set token 
    public function admin_send_notice()
    {

    }
}
