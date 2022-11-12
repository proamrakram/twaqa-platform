$(function() {

    $(".datepickr").flatpickr();
    
    $(".datepickrTime").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    $('.repeater').repeater({
        initEmpty: false,
    
        defaultValues: {
            'text-input': 'foo'
        },
    
        show: function () {
            $(this).slideDown();
        },
    
        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });  
    
    
    // Uploade Image

    // upload-img

    $(document).on('change', '.upload-img input', function () {
        
        let inputVal = window.URL.createObjectURL(this.files[0]);

        $(this).closest('.upload-img').find('img').attr('src', inputVal)

    });
});