<?php

namespace STZCPW\inc;

use STZCPW\inc\info_stz;

if (!defined('ABSPATH')) {
    die;
}

class template extends info_stz
{

    function __construct()
    {
    }

    public static function Button($attr_btn, $title_btn, $spinner_id)
    {
        self::STZ_VIEW('component/button.php', ['attr-btn' => $attr_btn, 'title-btn' => $title_btn, 'spinner-id' => $spinner_id]);
    }

    public static function Input($id_label, $title_label, $attr_input)
    {
        self::STZ_VIEW('component/input.php', ['attr-input' => $attr_input, 'id_label' => $id_label, 'title-label' => $title_label]);
    }

    public static function InputNumber($id_label, $title_label, $attr_input)
    {
        self::STZ_VIEW('component/input-number.php', ['attr-input' => $attr_input, 'id_label' => $id_label, 'title-label' => $title_label]);
    }

    public static function Texteara($id_label, $title_label, $attr_texteara, $defval_texteara = '')
    {
        self::STZ_VIEW('component/texteara.php', ['attr-texteara' => $attr_texteara, 'id_label' => $id_label, 'title-label' => $title_label, 'defval-texteara' => $defval_texteara]);
    }

    public static function Label($icon_label, $title_label, $style_title_label = null)
    {
        self::STZ_VIEW('component/label.php', ['title-label' => $title_label, 'icon-label' => $icon_label, 'style-title-label' => $style_title_label]);
    }

    public static function Alert($attr_body_alert, $attr_text_alert)
    {
        self::STZ_VIEW('component/alert.php', ['attr-body-alert' => $attr_body_alert, 'attr-text-alert' => $attr_text_alert]);
    }


    public static function Table($id_table, $pagination_table, $header_table, $body_table)
    {
        self::STZ_VIEW('component/table.php', ['id-table' => $id_table, 'pagination-table' => $pagination_table, 'header-table' => $header_table, 'body-table' => $body_table]);
    }

    public static function Select($id_select, $item_select, $text_label, $item_selected = '', $isMulti = false)
    {
        self::STZ_VIEW('component/select.php', ['id-select' => $id_select, 'item-select' => $item_select, 'text-label' => $text_label, 'item-selected' => $item_selected, 'isMulti' => $isMulti]);
    }

    public static function File($body_id_file, $title_label_fileّ, $id_file, $default_value_file = '', $description_tabel_file = '', $accept = '')
    {
        self::STZ_VIEW('component/file.php', ['body-id-file' => $body_id_file, 'title-label-file' => $title_label_fileّ, 'id-file' => $id_file, 'default-value-file' => $default_value_file, 'description-label-file' => $description_tabel_file, 'accept' => $accept]);
    }


    public static function Modal($body_modal)
    {
        self::STZ_VIEW('component/modal.php', ['body-modal' => $body_modal]);
    }

    public static function Tooltip($message)
    {
        self::STZ_VIEW('component/tooltip.php', ['message' => $message]);
    }
}
