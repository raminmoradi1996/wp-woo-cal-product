<?php

namespace STZCPW\inc;

use STZCPW\inc\info_stz;

if (!defined('ABSPATH')) {
    die;
}

class menu extends info_stz
{

    public $Menu_Name = "stz-cpw-menu";



    function __construct()
    {
        // add action menu 
        add_action('admin_menu', [$this, "add_menu"]);
        add_action('admin_add_recid', [$this, 'prefix_admin_add_recid']);
    }

    public function Tmp_Settings()
    {
        $this->STZ_VIEW('settings.php');
    }
    public function Tmp_Create_Gende()
    {
        $this->STZ_VIEW('create-gende.php');
    }
    public function Tmp_List_Gende()
    {
        $this->STZ_VIEW('isForm-Gende.php');
    }


    function add_menu()
    {

        $array_sub_menu = [
            [
                'Sort' => 1,
                'Menu' => $this->Menu_Name,
                'Id' => 'stz-cpw-create-gende',
                'Name' => 'افزودن جنس',
                'Manage' => 'manage_options',
                'Page' => "Tmp_Create_Gende"
            ],
            [
                'Sort' => 1,
                'Menu' => $this->Menu_Name,
                'Id' => 'stz-cpw-list-gende',
                'Name' => 'لیست اجناس',
                'Manage' => 'manage_options',
                'Page' => "Tmp_List_Gende"
            ],
            [
                'Sort' => 1,
                'Menu' => $this->Menu_Name,
                'Id' => 'stz-cpw-settings',
                'Name' => 'تنظیمات',
                'Manage' => 'manage_options',
                'Page' => "Tmp_Settings"
            ]
        ];


        add_menu_page(
            'تنظیمات',
            'محاسبه محصولات',
            'manage_options',
            $this->Menu_Name,
            '',
            'dashicons-analytics',
            10
        );


        $column = array_column($array_sub_menu, 'Sort');
        array_multisort($column, SORT_ASC, $array_sub_menu);

        foreach ($array_sub_menu as $item) {
            add_submenu_page(
                $item['Menu'],
                $item['Name'],
                $item['Name'],
                $item['Manage'],
                $item['Id'],
                [$this, $item['Page']]
            );
        }

        global $submenu;
        unset($submenu[$this->Menu_Name][0]);
    }
}
