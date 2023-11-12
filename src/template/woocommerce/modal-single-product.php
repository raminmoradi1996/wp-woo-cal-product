<?php

use STZCPW\inc\info_stz;

$step = ['dimensions', 'item', 'discription', 'verify'];
?>

<div>
    <!-- // step  -->
    <div class="stz-cpw-modal-header d-flex justify-contnet-center align-items-center p-2">
        <div class="stz-cpw-step-body">
            <?php
            $counter = 1;
            foreach ($step as $item) {
                if ($counter == 1) {
                    $active = 'stz-cpw-step-active';
                } else {
                    $active = '';
                }
            ?>
                <div id="stz-cpw-step-<?php echo $counter ?>" data_id="<?php echo $counter ?>" class="stz-cpw-step <?php echo $active ?>"><?php echo $counter ?></div>
            <?php
                $counter++;
            }
            ?>
        </div>
        <div class="stz-cpw-close-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="text-white bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </div>
    </div>
    <div class="stz-cpw-hr"></div>

    <div class="stz-cpw-step-all-body">

        <?php
        $counterPage = 1;
        foreach ($step as $item) {
            if ($counterPage == 1) {
                $active = 'stz-cpw-step-item-active';
            } else {
                $active = '';
            }
        ?>
            <div class="stz-cpw-step-item <?php echo $active ?>" id="stz-cpw-step-item-<?php echo $counterPage ?>">
                <?php
                info_stz::STZ_VIEW("woocommerce/$item.php", ['item' => $counterPage]);
                $counterPage++;
                ?>
            </div>
        <?php

        }
        ?>

    </div>

</div>