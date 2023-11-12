<?php

namespace STZCPW\inc;

if (!defined('ABSPATH')) {
    die;
}

class database extends info_stz
{

    public static  $database = 'stz_cpw_woo_cal_product';

    public  function __construct()
    {
    }

    // inset || add  
    public static function db_stz_add($key, $value, $status)
    {

        global $wpdb;
        $tablename = $wpdb->prefix . self::$database;
        $data = array(
            'stz_date' => time(),
            'stz_key' => $key,
            'stz_value' => $value,
            'status' => $status,
        );
        return $wpdb->insert($tablename, $data);
    }

    public static function db_stz_get_key($key, $active = true)
    {
        global $wpdb;
        $tablename = $wpdb->prefix . self::$database;

        $list = $wpdb->get_results("SELECT * FROM $tablename where  $active && stz_key='$key' ");
        return $list;
    }


    // delete form list 
    public static function db_stz_remove_id($id)
    {
        global $wpdb;
        $tablename = $wpdb->prefix . self::$database;

        $where = [
            'id' => $id
        ];
        $query = $wpdb->delete($tablename, $where);
        return $query;
    }

    // check exiset key  
    public static function db_stz_key_exist($key)
    {
        global $wpdb;
        $tablename = $wpdb->prefix . self::$database;


        $list = $wpdb->get_results("SELECT stz_key FROM $tablename where stz_key='$key' ");
        return count($list) > 0 ? true : false;
    }

    // edit item 
    public static function db_stz_edit_key($key, $value, $status)
    {

        global $wpdb;
        $tablename = $wpdb->prefix . self::$database;
        $data = array(
            'stz_date' => time(),
            'stz_key' => $key,
            'stz_value' => $value,
            'status' => $status,
        );
        $where = [
            'stz_key' => $key
        ];
        return $wpdb->update($tablename, $data, $where);
    }
}
