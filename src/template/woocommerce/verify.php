<?php

use STZCPW\inc\template;

?>

<div class="p-3">

    <!-- // lable discription  -->
    <div class="mt-3 d-flex m-3">
        <div class="m-1">
            <?php
            template::Label('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark bi bi-patch-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
          </svg>', 'تایید نهایی سایز', 'text-dark');
            ?>
        </div>

        <div class="m-1">
            <?php
            template::Tooltip('تیک تایید را بزنید')
            ?>
        </div>

    </div>

    <div class="m-3 d-flex">
        <div class="mt-1 m-1">
            <input type="checkbox" class="stz-cpw-checkbox-verify" style="width: 20px;height: 20px;" />
        </div>
        <div class="mt-1 m-1">
            <span>عرض و ارتفاع را به صورت صحیح و به هر کدام 5cm اضافه کردم</span>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center flex-wrap mt-4 m-2">

        <div class="col-sm-5 m-1 mt-4 d-flex justify-content-start align-items-center">
            <!-- // button verify    -->
            <button disabled data_product_id="<?php global $product;
                                                echo $product->get_id(); ?>" class="btn bg-success rounded  stz-cpw-btn-verify">
                <div class="d-flex justify-content-center align-items-center text-white ">
                    <div class="">
                        <div id="stz-cpw-spinner-add-to-cart" class="m-1 spinner-border spinner-border-sm" role="status">
                            <span class="sr-only"></span>
                        </div>
                        <div id="stz-cpw-icon-add-to-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="m-1" style="font-size:14px">افزودن به سبد خرید</div>
                </div>
            </button>
        </div>

        <div class="col-sm-5 m-1 mt-4 d-flex justify-content-start align-items-center ">
            <span class="text-primary m-1" style="font-size: 20px;">قیمت نهایی : </span>
            <span class="text-success m-1" style="font-size: 20px;"><span class="stz-cpw-amount-verify"></span> تومان</span>
        </div>

    </div>

    <!-- // button preve -->
    <div class="d-flex justify-content-start align-items-center flex-wrap mt-5">

        <!-- // button next    -->
        <button class="btn bg-info rounded stz-cpw-btn-verify-prev" data_next='4'>
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