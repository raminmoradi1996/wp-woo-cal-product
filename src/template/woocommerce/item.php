<?php

use STZCPW\inc\database;
use STZCPW\inc\template;

$list_gende = database::db_stz_get_key('items_gende');



?>


<div class="m-3">


    <!-- // lable dimesstions  -->
    <div class="mt-3 d-flex m-3">
        <div class="m-1">
            <?php
            template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark bi bi-bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
      </svg>', 'لطفا جنس مورد نظر را انتخاب کنید', 'text-dark');
            ?>
        </div>

        <div class="m-1">
            <?php
            template::Tooltip('کاغذ با کیفیت بالا تاثیر زیادی بر کار نهایی دارد')
            ?>
        </div>


    </div>

    <div class="d-flex align-items=center flex-wrap p-3">

        <?php
        $counter = 1;
        foreach ($list_gende as $item) {
            $item_id = $item->id;
            $stz_value = unserialize($item->stz_value);

        ?>

            <div class="stz-cpw-item-cart-body mt-2 m-2">
                <div class="text-center p-3">
                    <span class="fw-bold"><?php echo $stz_value['name'] ?></span>
                </div>
                <div>
                    <img width="100%" style="height: 240px;" class="image-flouid p-2" src="<?php echo wp_get_attachment_url($stz_value['image']) ?>" />
                </div>
                <div dir="rtl" class="d-flex flex-row align-items-center justify-content-center">

                    <del style="font-size: 15px;" class="m-2 fw-bold text-muted  "><?php echo number_format($stz_value['persent']) ?></del>
                    <div class="m-1 fw-bold d-flex flex-row text-success ">
                        <span style="font-size: 16px;" class="m-1 "><?php echo number_format($stz_value['price']) ?></span>
                        <span class="m-1">تومان</span>
                    </div>
                    <span class="m-1 fw-bold text-muted " style="font-size: 15px;"> هر متر مربع</span>
                </div>
                <div class="text-end" style="margin-right: 15px;height: 240px;" dir="ltr">
                    <p style="white-space: pre-line" class="text-muted fw-bold">
                        <?php echo $stz_value['discription'] ?></p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button id="stz-cpw-btn-step-item-<?php echo $counter ?>" data_name='<?php echo $stz_value['name'] ?>' class="w-75 btn bg-success rounded text-white stz-cpw-btn-step-item" data_price="<? echo $stz_value['price']; ?>" data_next='2'>انتخاب کاغذ</button>
                </div>

            </div>
        <?php

            $counter++;
        }


        ?>
    </div>


    <div class="d-flex " style="position: relative;height: 30px;">


        <!-- // button next -->
        <!-- <button class="btn btn-info stz-cpw-btn-item-next" data_next='2' style="position: absolute;left:0">
            <div class="d-flex justify-content-center align-items-center text-white">
                <div style="font-size:14px">مرحله بعد</div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                </div>
            </div>
        </button> -->


        <!-- // button preve -->
        <button class="btn bg-info rounded stz-cpw-btn-item-prev" data_next='2' style="position: absolute;right:0">
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