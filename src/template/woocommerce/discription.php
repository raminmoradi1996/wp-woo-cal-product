<?php

use STZCPW\inc\template;

?>

<div class="p-3">

    <!-- // lable discription  -->
    <div class="mt-3 d-flex m-3">
        <div class="m-1">
            <?php
            template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
          </svg>', 'توضیحات (اختیاری)', 'text-dark');
            ?>
        </div>

        <div class="m-1">
            <?php
            template::Tooltip('لطفا توضیحات خود را بنویسید')
            ?>
        </div>

    </div>

    <div class="m-3">
        <div class="mt-1">
            <textarea id="stz-cpw-step-discription" cols="30" rows="10" style="background-color: #e8e8e8;color:#000" placeholder="همچنین میتوانید طرح یا عکس های خود را برای تبدیل شدن به پوستر ، برای ما ارسال نمایید.
ارسال درخواست با شماره09357136632 (واتس اپ،تلگرام)
... تولید 1 یا 2 روز کاری
برای معرفی نصاب بعد از سفارش در واتس اپ پیغام بدید
قیمت براساس مترمربع می باشد"></textarea>
        </div>
    </div>

    <div class="d-flex " style="position: relative;">


        <!-- // button next    -->
        <button class="btn bg-info rounded stz-cpw-btn-discription-next" data_next='3' style="position: absolute;left:0">
            <div class="d-flex justify-content-center align-items-center text-white">
                <div style="font-size:14px">مرحله بعد</div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                </div>
            </div>
        </button>


        <!-- // button preve -->
        <button class="btn bg-info rounded stz-cpw-btn-discription-prev" data_next='3' style="position: absolute;right:0">
            <div class="d-flex justify-content-center align-items-center text-white">
                <div style="font-size:14px">مرحله قبل</div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </div>
            </div>
        </button>

    </div>


</div>