<?php

use STZCPW\inc\template;

?>
<div class="m-3">

    <!-- // lable dimesstions  -->
    <div class="mt-3 d-flex">
        <div class="m-1">
            <?php
            template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark bi bi-aspect-ratio" viewBox="0 0 16 16">
    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
    <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
  </svg>', 'ابعاد خود را وارد نمایید', 'text-dark');
            ?>
            <small class="mx-4 fw-bold text-muted">ارسال به سراسر کشور رایگان</small>
        </div>

        <div class="m-1">
            <?php
            template::Tooltip('عرض و ارتفاع دیوار را وارد نمایید')
            ?>

        </div>


    </div>

    <div class="mt-3">

        <!-- // width  -->
        <div class="cpw-dimensions d-flex justify-content-center align-items-center flex-wrap">

            <!-- // lable width  -->
            <div class="m-3">
                <?php
                template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="cpw-rotate-widht bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
              </svg>', 'عرض دیوار (5 سانتی متر اضافه بگیرید)');
                ?>
            </div>
            <!-- // input width  -->
            <div class="m-3">
                <span>cm</span>
                <input type="text" dir='ltr' id="stz-cpw-input-dimensions-width" class="btn" />
            </div>

            <div class="m-3">
                <?php
                $le = "5cm";
                template::Tooltip("چپ تا راست دیوار + $le");
                ?>
            </div>

        </div>

        <!-- // length  -->
        <div class="cpw-dimensions d-flex justify-content-center align-items-center flex-wrap">

            <!-- // lable length  -->
            <div class="m-3">
                <?php
                template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="cpw-rotate-length bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
              </svg>', 'ارتفاع دیوار (5 سانتی متر اضافه بگیرید)');
                ?>
            </div>
            <!-- // input length  -->
            <div class="m-3">
                <span>cm</span>
                <input dir='ltr' type="text" id="stz-cpw-input-dimensions-length" class="btn" />
            </div>
            <div class="m-3">
                <?php
                $le = "5cm";
                template::Tooltip("بالا تا پایین دیوار + $le");
                ?>
            </div>

        </div>


        <!-- // process -->

        <div class="d-flex justify-content-center align-items-center flex-wrap">

            <!-- // text message   -->
            <div class="m-3 text-start stz-cpw-text-message-dimensions">
            </div>
            <!-- // number   -->
            <div class="m-3 stz-cpw-number-dimensions ">
            </div>

        </div>


        <!-- // button  -->

        <div class="d-flex justify-content-end align-items-center flex-wrap mt-3">

            <!-- // button next    -->
            <button disabled class="btn bg-info rounded stz-cpw-btn-dimensions-next" data_next='1'>
                <div class="d-flex justify-content-center align-items-center text-white">
                    <div style="font-size:14px">مرحله بعد</div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                        </svg>
                    </div>
                </div>
            </button>
        </div>

    </div>




</div>