<?php


namespace STZCPW\inc;

use STZCPW\inc\info_stz;

if (!defined('ABSPATH')) {
    die;
}

class ajax extends info_stz
{

    public function __construct($array)
    {
        foreach ($array as $item) {
            add_action("wp_ajax_$item", [$this, $item]);
            add_action("wp_ajax_nopriv_$item", [$this, $item]);
        }
    }


    // set post meta data
    public function SET_UPLOAD_FILE()
    {
        $name = $_POST['name'];
        $file_name =  $_FILES[$name]['name'];
        $file_temp = $_FILES[$name]['tmp_name'];

        $image_data = file_get_contents($file_temp);
        $upload_dir = wp_upload_dir();
        $filename = basename($file_name);
        $filetype = wp_check_filetype($file_name);
        $filename = time() . '.' . $filetype['ext'];

        if (wp_mkdir_p($upload_dir['path'])) {
            $file = $upload_dir['path'] . '/' . $filename;
        } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }

        file_put_contents($file, $image_data);
        $wp_filetype = wp_check_filetype($filename, null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name($filename),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $attach_id = wp_insert_attachment($attachment, $file);
        // require_once(ABSPATH . 'wp-admin/includes/image.php');
        // $attach_data = wp_generate_attachment_metadata($attach_id, $file);
        // wp_update_attachment_metadata($attach_id, $attach_data);

        $return = array(
            'id' => $attach_id
        );

        wp_send_json($return);
        die();
    }

    // gende item 
    public function stz_cpw_ajax_gende()
    {
        $type = $_POST['type'];

        if ($type == 'add') {
            $item_gende = json_decode(stripslashes($_POST['item']), true);
            $res =  database::db_stz_add('items_gende', serialize($item_gende), '1');

            if ($res == true) {
                $result = true;
            } else {
                $result = false;
            }
        } else if ($type == 'edit') {
            $item_gende = json_decode(stripslashes($_POST['item']), true);
            $res =  database::db_stz_edit_key('items_gende', serialize($item_gende), '1');

            if ($res == true) {
                $result = true;
            } else {
                $result = false;
            }
        } else if ($type == 'remove') {
            $item = $_POST['item'];
            $res = database::db_stz_remove_id($item);

            if ($res) {
                $result = true;
            } else {
                $result = false;
            }
        }

        $return = array(
            'Result' =>  $result
        );

        wp_send_json($return);
        die();
    }

    public function stz_cpw_add_to_cart_item()
    {

        global $woocommerce;
        $custom_price = $_POST['price'];
        $product_id = $_POST['product_id'];
        $quantity = 1;
        $cart_item_data = [
            'custom_price' => $custom_price,
            'custom_discription' => $_POST['discription'],
            'custom_info' => [
                'name' => $_POST['name'],
                'width' => $_POST['width'],
                'length' => $_POST['length']
            ]
        ];

        WC()->cart->add_to_cart($product_id, $quantity, 0, [], $cart_item_data);
        WC()->cart->calculate_totals();
        WC()->cart->set_session();
        WC()->cart->maybe_set_cart_cookies();

        // wc_add_notice('1233', 'success');

        $return = array(
            'Result' =>  $_POST
        );

        wp_send_json($return);
        die();
    }
}
