jQuery(document).ready(($) => {

    // close modal 
    $('.stz-cpw-close-modal,.stz-cpw-opt-modal').on('click', () => {
        $('.stz-cpw-body-modal').hide()
    })

    // open modal 
    $('#stz-cpw-btn-modal').on('click', () => {
        $('.stz-cpw-body-modal').show()
    })


})