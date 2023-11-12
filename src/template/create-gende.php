<?php

use STZCPW\inc\template;

?>

<div class="wrap">

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
        </svg>
        <h1 class="mb-3">ایجاد ایتم جنس ها</h1>
    </div>


    <!-- // body item  -->
    <div class="mt-4 ">

        <!-- exp item  -->
        <div class="m-1 " style="width: fit-content;">

            <!-- // name gende  -->
            <div class="mt-1">
                <?php
                template::Input('stz-cpw-name-item-gende', 'نام جنس را وارد نمایید', "id='stz-cpw-name-item-gende' class='form-control' placeholder='نام'");
                ?>
            </div>

            <!-- // price gende  -->
            <div class="mt-1">
                <?php
                template::InputNumber('stz-cpw-price-item-gende', 'قیمت با تخفیف را وارد نمایید', "id='stz-cpw-price-item-gende' class='form-control' placeholder='قیمت با تخفیف'");
                ?>
            </div>


            <!-- // price gende  -->
            <div class="mt-1">
                <?php
                template::InputNumber('stz-cpw-persent-item-gende', 'قیمت جنس را وارد نمایید', "id='stz-cpw-persent-item-gende' class='form-control' placeholder='قیمت'");
                ?>
            </div>

            <!-- // discription gende  -->
            <div class="mt-1">
                <?php
                template::Texteara('stz-cpw-discription-item-gende', 'توضیحات', "id='stz-cpw-discription-item-gende' class='form-control' style='width:300px;height:200px' placeholder='لطفا توضیحات را با فاصله از هم جدا نمایید'");
                ?>
            </div>

            <!-- // image gende  -->
            <div class="mt-1">
                <?php
                template::file('', 'تصویر جنس را وارد نمایید ', 'stz-cpw-image-item-gende', '', '', 'image/png,image/jpg,image/jpeg');
                ?>
            </div>

            <!-- // message  -->
            <div class="mt-2">
                <?php
                template::Alert('', "id='stz-cpw-message-gende' class='fw-bolde text-success'");
                template::Alert('', "id='stz-cpw-errror-gende' class='fw-bolde  text-danger'");
                ?>

            </div>

            <!-- // button update  -->
            <div class="mt-3 text-white">
                <?php
                template::Button("id='stz-cpw-btn-add-item-gende' class='btn btn-info'", 'افزودن', 'stz-cpw-sppinner-btn-add-item-gende');
                ?>
            </div>

        </div>

    </div>



</div>