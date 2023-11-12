<div class="container">
    <div class="mb-1 d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive m-1" viewBox="0 0 16 16">
            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
        </svg>
        <span class="m-1 fs-6 fw-bold">انتخاب ردیف نمایش</span>
    </div>
    <div class="form-group mb-2">
        <select class="form-control maxRows" name="state">
            <option value="5000">مشاهده همه</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="70">70</option>
            <option value="100">100</option>
        </select>

    </div>
    <div dir="ltr" class="mb-3" style="overflow: scroll;">
        <table dir='rtl' class="table table-striped table-class <?php echo $param['id-table'] ?>">
            <thead>
                <tr>
                    <?php
                    $header = $param['header-table'];

                    foreach ($header as $item) {
                    ?>
                        <th><?php echo $item ?></th>
                    <?php
                    }

                    ?>

                </tr>
            </thead>

            <tbody>

                <?php
                $body = $param['body-table'];
                foreach ($body as $item) {
                    $arr =  $item['value'];
                ?>
                    <tr>
                        <?php

                        foreach ($arr as $it) {

                        ?>
                            <th><?php echo base64_decode($it) ?></th>

                        <?php
                        }

                        ?>
                    </tr>

                <?php
                }

                ?>



            </tbody>


        </table>
    </div>


    <!--		Start Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="d-flex <?php echo $param['pagination-table'] ?> table-pagination-li ">
            <li data-page="prev" class="page-item m-1 "><a class="page-link" href="#">قبلی</a></li>
            <li data-page="next" class="page-item m-1 prev"><a class="page-link" href="#">بعدی</a></li>
        </ul>
    </nav>

</div>