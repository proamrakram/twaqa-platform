// const { type } = require('jquery');

$(function () {

    $('.latest-news .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        dots:false,
        nav: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        navText: [$('.owl-carousel').data('angle-right'), $('.owl-carousel').data('angle-left')],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
            }
        }
    })

    $('.courses .owl-carousel, .teachers .owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        responsiveClass:true,
        dots:false,
        nav: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 3500,
        stagePadding: 50,
        autoplayHoverPause: true,
        // navText: [$('.owl-carousel').data('angle-right'), $('.owl-carousel').data('angle-left')],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    })
    
    
    $('.testimonsails .owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        responsiveClass:true,
        dots:true,
        nav: false,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 3500,
        center:true,
        stagePadding: 50,
        autoplayHoverPause: true,
        // navText: [$('.owl-carousel').data('angle-right'), $('.owl-carousel').data('angle-left')],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    }) 

    $('.page-videos .owl-carousel').owlCarousel({
        loop:true,
        margin:25,
        responsiveClass:true,
        dots:false,
        nav: true,
        rtl: true,
        autoplay: true,
        autoplayTimeout: 3500,
        stagePadding: 50,
        autoplayHoverPause: true,
        // navText: [$('.owl-carousel').data('angle-right'), $('.owl-carousel').data('angle-left')],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
            }
        }
    })     
    
    // 
    
    
    const players_vid = Array.from(document.querySelectorAll('.playerTwaqaVid')).map((p) => new Plyr(p));

    $(document).on('click', '.page-videos .box-video .play-vid', function () {
    

        let idVid =  $(this).data('id-vid')
            parentBox = $(this).closest('.box-video');

            // parentBox.find('.content').fadeOut();


            // parentBox.find('.playerTwaqaVid').attr('data-plyr-embed-id', idVid);

            // parentBox.find('.vid').fadeIn();

            // console.log(idVid)

        
    });    
    
    // Form Edit 
    $(document).on('click', '.profile-data-user-boxes .icon-edit', function () {
    

        let input =  $(this).closest('.box').find('.form-input');

        input.addClass('edit').removeAttr('disabled');
        
        $(this).siblings('button').show();
        $('.reset-password i').show();
        
    });

    $(document).on('click', '.edit-img-profile', function () {
    
        $('.uploade-new-img').fadeIn();
        
    });

    
    $(document).on('keyup', '.std-age input', function () {
        
        $val = $(this).val();

        $valNumber =isNumber($val);

        if( $valNumber && $val > 20)
        {
             $('.your-job').show();
             $('.your-father-job').hide();
        } else {
            $('.your-father-job').show();
            $('.your-job').hide();
        }
      
        
    });

    $('.std-age input').each(function() {
        $val = $(this).val();

        if(  $val > 20)
        {
             $('.your-job').show();
             $('.your-father-job').hide();
        } else {
            $('.your-father-job').show();
            $('.your-job').hide();
        }        
        
    }); 
 
    function isNumber(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    $(document).on('click', '.icon-edit-repeater', function () {
    

        let input =  $(this).closest('.repeater-edit').find('.form-input');

        input.addClass('edit').removeAttr('disabled');
        
        $(this).siblings('button').show();
        
    });

    // Show create form
    $(document).on('click', '.show-create-form', function () {
    
        $(this).closest('.profile-data-user-boxes').find('.create-form').slideToggle();
        $(this).fadeOut();
        
    });

    // Show Password As Text
    $(document).on('click', '.reset-password i', function () {
        
        $(this).toggleClass('fa-eye-slash fa-eye');
        
        if($(this).siblings('input').attr('type') == 'password') {
            $(this).siblings('input').attr('type', 'text');
        } else {
            $(this).siblings('input').attr('type', 'password');
        }
      
    });
    
    // Show Input Insert url
    $(document).on('change', '.upload-media', function () {
        
       let $class = $(this).val();

        $(this).siblings(".hide-box").hide();

        $(this).siblings("." + $class).show();
       
      
    });


    // Wehn Click Fill Form Std
    // 
    $(document).on('click', '.fill-form-std', function () {
        
       let boxData  = $(this).closest('.std-lessong-desc'),
           title    = boxData.data('title'),
           type     = boxData.data('type'),
           user     = boxData.find('.std-user').html(),
           formData = $('#enterStdForm');
           
           
           formData.find('.title-lesson').html(title);
           formData.find('.title-type').html(type);
           formData.find('.std-user').html(user);

        $('.select2').select2({
            dropdownParent: $('#enterStdForm'),
            width: '100%'
        });

       
     });

     // Wehn Click Get data forms
     $(document).on('click', '.data-form-modal', function (e) {
        
        let boxData  = $(this),
            titleLesson = boxData.data('title-lesson'),
            typeLesson  = boxData.data('type'),
            userURL     = boxData.data('user-url'),
            userName    = boxData.data('user-name'),
            userImage   = boxData.data('user-img'),

            pastFromSora   = boxData.data('past-form-sora'),
            pastFormNumb   = boxData.data('past-form-number'),
            pastToSora     = boxData.data('past-to-sora'),
            PastToNumb     = boxData.data('past-to-number'),
            pastDegree     = boxData.data('past-degree'),

            pastSoonFromSora   = boxData.data('past-soon-form-sora'),
            pastSoonFormNumb   = boxData.data('past-soon-form-number'),
            pastSoonToSora     = boxData.data('past-soon-to-sora'),
            PastSoonToNumb     = boxData.data('past-soon-to-number'),
            pastSoonDegree     = boxData.data('past-soon-degree'), 
            
            
            saveLastFromSora   = boxData.data('save-last-form-sora'),
            saveLastFormNumb   = boxData.data('save-last-form-number'),
            saveLastToSora     = boxData.data('save-last-to-sora'),
            saveLastToNumb     = boxData.data('save-last-to-number'),
            saveLastDegree     = boxData.data('save-last-degree'),  

            saveNewFromSora   = boxData.data('save-new-form-sora'),
            saveNewFormNumb   = boxData.data('save-new-form-number'),
            saveNewToSora     = boxData.data('save-new-to-sora'),
            saveNewToNumb     = boxData.data('save-new-to-number'),

            pastSoonNextFromSora   = boxData.data('pastsoon-next-form-sora'),
            pastSoonNextFormNumb   = boxData.data('pastsoon-next-form-number'),
            pastSoonNextToSora     = boxData.data('pastsoon-next-to-sora'),
            pastSoonNextToNumb     = boxData.data('pastsoon-next-to-number'),

            pastNextFromSora   = boxData.data('past-next-form-sora'),
            pastNextFormNumb   = boxData.data('past-next-form-number'),
            pastNextToSora     = boxData.data('past-next-to-sora'),
            pastNextToNumb     = boxData.data('past-next-to-number'),
                       

            formData = $('#formsModal');
            
            
            formData.find('.title-lesson').html(titleLesson);
            formData.find('.title-type').html(typeLesson);
            formData.find('.std-user').find('a').text(userName);
            formData.find('.std-user').find('a').attr('href', userURL);
            formData.find('.std-user').find('img').attr('src', userImage);

            formData.find('.past-form-sora').text(pastFromSora);
            formData.find('.past-form-number').text(pastFormNumb);
            formData.find('.past-to-sora').text(pastToSora);
            formData.find('.past-to-number').text(PastToNumb);
            formData.find('.past-degree').text(pastDegree);

            formData.find('.past-soon-form-sora').text(pastSoonFromSora);
            formData.find('.past-soon-form-number').text(pastSoonFormNumb);
            formData.find('.past-soon-to-sora').text(pastSoonToSora);
            formData.find('.past-soon-to-number').text(PastSoonToNumb);
            formData.find('.past-soon-degree').text(pastSoonDegree);     

            formData.find('.save-last-form-sora').text(saveLastFromSora);
            formData.find('.save-last-form-number').text(saveLastFormNumb);
            formData.find('.save-last-to-sora').text(saveLastToSora);
            formData.find('.save-last-to-number').text(saveLastToNumb);
            formData.find('.save-last-degree').text(saveLastDegree); 

            formData.find('.save-new-form-sora').text(saveNewFromSora);
            formData.find('.save-new-form-number').text(saveNewFormNumb);
            formData.find('.save-new-to-sora').text(saveNewToSora);
            formData.find('.save-new-to-number').text(saveNewToNumb);

            formData.find('.pastsoon-next-form-sora').text(pastSoonNextFromSora);
            formData.find('.pastsoon-next-form-number').text(pastSoonNextFormNumb);
            formData.find('.pastsoon-next-to-sora').text(pastSoonNextToSora);
            formData.find('.pastsoon-next-to-number').text(pastSoonNextToNumb);

            formData.find('.past-next-form-sora').text(pastNextFromSora);
            formData.find('.past-next-form-number').text(pastNextFormNumb);
            formData.find('.past-next-to-sora').text(pastNextToSora);
            formData.find('.past-next-to-number').text(pastNextToNumb);

        e.preventDefault();
      });
 


    //   Edit Image
    $('.img-user input').change(function(){
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              selectedImage = e.target.result;
              $('.img-user img').attr('src', selectedImage);
          };
          reader.readAsDataURL(this.files[0]);
        }
      });    
 

    // Active Current Page 
    var window_location_href = window.location.href;
    window_location_href = window_location_href.endsWith('/') ? window_location_href.substr(0, window_location_href.length - 1) : window_location_href;
    var pgurl = window_location_href.substr(window_location_href.lastIndexOf("/") + 1);

    $(".menu-items  a").each(function() {
        var thisPage = $(this).attr("href");
        thisPage = thisPage.endsWith('/') ? thisPage.substr(0, thisPage.length - 1) : thisPage;
        thisPage = thisPage.substr(thisPage.lastIndexOf("/") + 1);
        if (thisPage == pgurl)
            $(this).addClass("active").closest('.col').siblings().find('a').removeClass('active');
    });
  

    $('.select2').select2({width: '100%'})

    Scrollbar.initAll(); 


    $('.page').closest('body').addClass('bgGray');



    $('[data-toggle="datepicker"]').datepicker({
        language: 'ar-AE'
    });

    // Open Menu Link On Mobile
    // $('bars-side-user')
    $(document).on('click', '.bars-side-user', function () {
        $('.sidebar-links-user').slideToggle();
    });

    //data-plyr-embed-id=""
    $(document).on('click', '.btn-show-vid', function () {

        let title = $(this).closest('.box-content-vid').find('.title').html(),
            vidoeID    = $(this).data('vid-id'),
            typeContent    = $(this).data('type-content');


        $('#vidInfoTeacher').find('.modal-title').html(title);

        if(typeContent === 'pdf') {

            $('#vidInfoTeacher').find('.content').html(`<object data="${vidoeID}#toolbar=1&amp;navpanes=0&amp;scrollbar=1&amp;page=1&amp;view=FitH" type="application/pdf" width="100%" height="100%">            `);
        } else {

            $('#vidInfoTeacher').find('.content').html(`<div id="player" data-plyr-provider="youtube" data-plyr-embed-id="${vidoeID}"></div> `);
            const playerModal = new Plyr('#player');
        }
        
    });

    const playerWatch = new Plyr('#playerTwaqa');
    // const playerWatchClass = new Plyr($('.playerTwaqa'));
    const players = Array.from(document.querySelectorAll('.playerTwaqa')).map((p) => new Plyr(p));

    const playerAudio = new Plyr('audio', {});    

    $(document).on('click','.btn-play-audio', function (e) {

        let urlAudio = $(this).data('url');

        $('.audio-player audio').attr('src', urlAudio);
        $('.audio-player').addClass('show-plyr');

        playerAudio.play()

        e.preventDefault();
    });   



    $(document).on('click','.audio-player i', function (e) {
        $('.audio-player').removeClass('show-plyr');
        playerAudio.pause()
    });   

    window.player = playerAudio;     
});


$chat = document.querySelector('.chat');
if ($chat) {
    const smallDevice = window.matchMedia("(max-width: 767px)");
    const largeScreen = window.matchMedia("(max-width: 1199px)");
    smallDevice.addEventListener("change", handleDeviceChange);
    handleDeviceChange(smallDevice);

    function handleDeviceChange(e) {
        if (e.matches) chatMobile();
        else chatDesktop();
    }

    function chatMobile() {
        $chat.classList.add("chat--mobile");
    }

    function chatDesktop() {
        $chat.classList.remove("chat--mobile");
    }
    Array.from(document.querySelectorAll(".messaging-member")).forEach(e => e.addEventListener("click", function() {
        $chat.style.display = 'block';
        $chat.classList.add("chat--show");
    }))
    var chat__previous = document.querySelector('.chat__previous');
    if (chat__previous) {
        chat__previous.onclick = function() {
            $chat.classList.remove("chat--show");
        }
    }
}


// Langaute DatePicker
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(require('jquery')) :
    typeof define === 'function' && define.amd ? define(['jquery'], factory) :
    (factory(global.jQuery));
  }(this, (function ($) {
    'use strict';
  
    $.fn.datepicker.languages['ar-AE'] = {
      format: 'dd/mm/yyyy',
      days: ['الأحد', 'الأثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
      daysShort: ['أحد', 'أثنين', 'ثلاثاء', 'اربعاء', 'خميس', 'جمعة', 'سبت'],
      daysMin: ['أ', 'ث', 'ث', 'أ', 'خ', 'ج', 'س'],
      weekStart: 1,
      months: ['كانون الثاني', ' فبراير', 'مارس', 'أبريل', 'قد', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', ' اكتوبر', ' نوفمبر', 'ديسمبر'],
      monthsShort: ['كانون الثاني', ' فبراير', 'مارس', 'أبريل', 'قد', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', ' اكتوبر', ' نوفمبر', 'ديسمبر'],
    };
  })));
  

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
  