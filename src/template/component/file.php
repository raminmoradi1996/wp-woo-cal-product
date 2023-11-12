<div class="mt-2 <?php echo $param['body-id-file'] ?>">

    <!-- // file -->
    <div class='m-1 mb-3 col-md'>
        <label for="<?php echo $param['id-file'] ?>">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-square m-1" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
                <div class="m-1">
                    <label for="stz-wsp-form-file" class="form-label fw-bold">
                        <span>
                            <?php echo $param['title-label-file']; ?>
                        </span>
                    </label>
                </div>
            </div>
            <small class="mb-3 d-block text-mute"><?php echo $param['description-label-file'] ?></small>
            <div class="mb-3">
                <input class="form-control form-control-sm stz-wsp-load-file" attachment-id='<?php echo $param['default-value-file'] ?>' load_spiner="Spiner-body-<?php echo $param['id-file'] ?>" accept="<?php echo $param['accept'] ?>" id="<?php echo $param['id-file'] ?>" name="<?php echo $param['id-file'] ?>" type="file">
                <?php
                if ($param['default-value-file'] != '') {
                ?>
                    <div class="mt-3">
                        <a class="" href="<?php echo wp_get_attachment_url($param['default-value-file']) ?>" download>دانلود فایل</a>
                    </div>
                <?php
                }
                ?>

            </div>
            <div id="Spiner-body-<?php echo $param['id-file'] ?>">
                <div dir='ltr' class="progress border border-dark " style="height: 20px;">
                    <div class="progress-bar-<?php echo $param['id-file'] ?> bg-success " role="progressbar" style="width: 0;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-1" dir='ltr'>
                    <span class="text-load-<?php echo $param['id-file']; ?>  me-25">0%</span>
                </div>
            </div>

        </label>

    </div>
</div>