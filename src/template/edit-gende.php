<?php

use STZCPW\inc\database;
use STZCPW\inc\template;


$item_get_id = $_GET['item'];

$item_gende = database::db_stz_get_key('items_gende', "id='$item_get_id'");

if (!$item_gende) {
    header("Location: admin.php?page=stz-cpw-list-gende");
    die();
}


foreach ($item_gende as $item) {
    $item_id = $item->id;
    $stz_value = unserialize($item->stz_value);
}
?>

<div class="wrap">

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
        </svg>
        <h1 class="mb-3">ویرایش ایتم ( <?php echo $stz_value['name'] ?> )</h1>
    </div>


    <!-- // body item  -->
    <div class="mt-4 ">

        <!-- exp item  -->
        <div class="m-1 " style="width: fit-content;">

            <!-- // name gende  -->
            <div class="mt-1">
                <?php
                $name = $stz_value['name'];
                template::Input('stz-cpw-name-item-gende', 'نام جنس را وارد نمایید', "id='stz-cpw-name-item-gende' class='form-control' placeholder='نام' value='$name'");
                ?>
            </div>

            <!-- // price gende  -->
            <div class="mt-1">
                <?php
                $persent = $stz_value['price'];
                template::InputNumber('stz-cpw-price-item-gende', 'قیمت با تخفیف را وارد نمایید', "id='stz-cpw-price-item-gende' class='form-control' placeholder='قیمت با تخفیف' value=$persent");
                ?>
            </div>


            <!-- // price gende  -->
            <div class="mt-1">
                <?php
                $price = $stz_value['persent'];
                template::InputNumber('stz-cpw-persent-item-gende', 'قیمت جنس را وارد نمایید', "id='stz-cpw-persent-item-gende' class='form-control' placeholder='قیمت' value='$price'");
                ?>
            </div>

            <!-- // discription gende  -->
            <div class="mt-1">
                <?php
                $discription = $stz_value['discription'];
                template::Texteara('stz-cpw-discription-item-gende', 'توضیحات', "id='stz-cpw-discription-item-gende' class='form-control' style='width:300px;height:200px' placeholder='لطفا توضیحات را با فاصله از هم جدا نمایید'", $discription);
                ?>
            </div>

            <!-- // image gende  -->
            <div class="mt-1">
                <?php
                $image = $stz_value['image'];
                template::file('', 'تصویر جنس را وارد نمایید ', 'stz-cpw-image-item-gende', $image, '', 'image/png,image/jpg,image/jpeg');
                ?>
            </div>

            <!-- // message  -->
            <div class="mt-2">
                <?php
                template::Alert('', "id='stz-cpw-message-gende' class='fw-bolde text-success'");
                template::Alert('', "id='stz-cpw-errror-gende' class='fw-bolde  text-danger'");
                ?>

            </div>

            <div class="d-flex">

                <!-- // button update  -->
                <div class="mt-3 m-1 text-white">
                    <?php
                    template::Button("id='stz-cpw-btn-edit-item-gende' class='btn btn-info'", 'ویرایش', 'stz-cpw-sppinner-btn-edit-item-gende');
                    ?>
                </div>

                <!-- // button remove item  -->
                <div class="mt-3 m-1 text-white">
                    <?php
                    template::Button("id='stz-cpw-btn-remove-item-gende' item='$item_id' class='btn btn-danger'", 'حذف', 'stz-cpw-sppinner-btn-remove-item-gende');
                    ?>
                </div>
            </div>

        </div>

    </div>



</div>