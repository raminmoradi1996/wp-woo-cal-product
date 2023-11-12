jQuery(document).ready(($) => {

    // $('.stz-cpw-step').on('click', (e) => {
    //     $('.stz-cpw-step').removeClass('stz-cpw-step-active')
    //     $(`#${e.target.id}`).addClass('stz-cpw-step-active')

    //     $('.stz-cpw-step-item').css('display', 'none')
    //     const data_id = $(`#${e.target.id}`).attr('data_id')
    //     $(`#stz-cpw-step-item-${data_id}`).css('display', 'block')
    // })

    // process dimensions

    $('#stz-cpw-input-dimensions-length,#stz-cpw-input-dimensions-width').on('keyup', (e) => {
        const width = $('#stz-cpw-input-dimensions-width').val()
        const length = $('#stz-cpw-input-dimensions-length').val()
        let message = $('.stz-cpw-text-message-dimensions')
        let number = $(".stz-cpw-number-dimensions")

        if (width != '' && length != '') {

            const area = (width * length) / 10000


            if (width < 100 || length < 100) {
                const msg = 'لطفا مقادیر را به سانتی متر وارد نمایید'
                const element = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
                <span class="text-danger">
                ${msg}
                </span>`
                message.html(element)

                // number 
                const num = `<span>مجموع ناحیه</span>
                <span class="text-danger">-</span>
                <span class="text-info">متر مربع</span>`
                number.html(num)

                $('.stz-cpw-btn-dimensions-next').prop('disabled', true);


            } else if (area < 4) {

                const msg = 'سفارش زیر ۴ متر مربع، هزینه ۴ متر مربع محاسبه می شود'
                const element = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
                <span class="text-danger">
                ${msg}
                </span>`
                message.html(element)

                // number 
                const num = `<span>مجموع ناحیه</span>
                <span class="text-success">4</span>
                <span class="text-info">متر مربع</span>`
                number.html(num)
                $('.stz-cpw-btn-dimensions-next').prop('disabled', false);

            } else if (area >= 4 && width >= 200 || length >= 200) {
                // meesage 
                message.html('')

                // number 
                const num = `<span>مجموع ناحیه</span>
                <span class="text-success"> ${area.toFixed()} </span>
                <span class="text-info">متر مربع</span>`
                number.html(num)
                $('.stz-cpw-btn-dimensions-next').prop('disabled', false);
            }

        }

    })

    // change check box 
    $('.stz-cpw-checkbox-verify').on('change', (e) => {
        $('.stz-cpw-btn-verify').prop('disabled', !e.target.checked);
    })

    // set amount 
    $('.stz-cpw-btn-step-item').on('click', (e) => {
        let price = $(`#${e.target.id}`).attr('data_price')
        const width = $('#stz-cpw-input-dimensions-width').val()
        const length = $('#stz-cpw-input-dimensions-length').val()
        $('.stz-cpw-btn-verify').attr('data_name', $(`#${e.target.id}`).attr('data_name'))
        environment = Number((width * length) / 10000)
        price = environment < 4 ? 4 * Number(price) : environment * Number(price)
        $('.stz-cpw-btn-verify').attr('data_price', price)
        $('.stz-cpw-amount-verify').html(new Intl.NumberFormat('en-fa').format(price))
    })

    // button next step 
    const Step = (id, type) => {
        $(`.${id}`).on('click', () => {
            const data_next = $(`.${id}`).attr('data_next')
            let qt = ''
            if (type == '+') {
                qt = Number(data_next) + 1
            } else {
                qt = Number(data_next) - 1
            }

            // header 
            $('.stz-cpw-step').removeClass('stz-cpw-step-active')
            $(`#stz-cpw-step-${qt}`).addClass('stz-cpw-step-active')

            // body 
            $('.stz-cpw-step-item').css('display', 'none')
            $(`#stz-cpw-step-item-${qt}`).css('display', 'block')
        })
    }

    Step('stz-cpw-btn-step-item', '+')

    Step('stz-cpw-btn-verify-next', '+')
    Step('stz-cpw-btn-discription-next', '+')
    Step('stz-cpw-btn-item-next', '+')
    Step('stz-cpw-btn-dimensions-next', '+')

    Step('stz-cpw-btn-verify-prev', '-')
    Step('stz-cpw-btn-discription-prev', '-')
    Step('stz-cpw-btn-item-prev', '-')


    const modal = $('.stz-cpw-main-modal')
    const header = $('.stz-cpw-modal-header')
    modal.on('scroll', () => {

        if (modal.scrollTop() > (header.outerHeight())) {
            $('.stz-cpw-step-all-body').css('marginTop', `${(header.outerHeight())}px`)
            header.css('position', 'fixed')
            if (window.innerWidth > 800) {
                header.css('width', '68.5%')
            } else {
                header.css('width', '90%')
            }
            header.css('backgroundColor', '#fff')
            header.css('zIndex', '999')
        } else {
            header.css('position', 'relative')
            header.css('width', '100%')
            header.css('backgroundColor', '#fff')
            $('.stz-cpw-step-all-body').css('marginTop', '')

        }
    })


    // add to cart item 
    $('.stz-cpw-btn-verify').on('click', () => {
        const width = $('#stz-cpw-input-dimensions-width').val()
        const length = $('#stz-cpw-input-dimensions-length').val()
        const data = new FormData();
        data.append('type', 'send')
        data.append('price', $('.stz-cpw-btn-verify').attr('data_price'))
        data.append('product_id', $('.stz-cpw-btn-verify').attr('data_product_id'))
        data.append('name', $('.stz-cpw-btn-verify').attr('data_name'))
        data.append('width', width)
        data.append('length', length)
        data.append('discription', $('#stz-cpw-step-discription').val())

        $('#stz-cpw-spinner-add-to-cart').show()
        $('#stz-cpw-icon-add-to-cart').hide()

        $.ajax({
            url: `${window.location.protocol}//${window.location.hostname}/wp-admin/admin-ajax.php?action=stz_cpw_add_to_cart_item`,
            type: 'POST',
            data: data,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function () {
                $.ajax({
                    url: `${window.location.protocol}//${window.location.hostname}?wc-ajax=get_refreshed_fragments`,
                    type: 'POST',
                    data: data,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    success: function (resp) {
                        $('#stz-cpw-spinner-add-to-cart').hide()
                        $('#stz-cpw-icon-add-to-cart').show()
                        $('.stz-cpw-body-modal').hide()

                        $(document.body).trigger('added_to_cart', [resp.fragments, resp.cart_hash]);
                        $(document.body).trigger('wc_fragment_refresh');
                    }
                });
                // window.location.href = `${window.location.protocol}//${window.location.hostname}/cart`;
            }
        });


    })

})