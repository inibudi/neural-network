// Freelancer Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

    // Trigger for file selected
    $("#inputTrain").change(function (){
        $("#formTrain").submit();
    });
    
    // Request for train
    $('#formTrain')
        .submit(function(e){
            e.preventDefault();

            $.ajax({
                url: 'train',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false
            }).done(function(data) {
                $('.resultTrain').empty();

                $('<span/>', {
                    'class':'result',
                    'html':'Treinamento realizado <br/><br/><label>' + data.replace(/(?:\r\n|\r|\n)/g, '<br />') + '</label>'
                }).appendTo('.resultTrain');
            });
        });

    // Trigger for file selected
    $("#inputTest").change(function (){
        $("#formTest").submit();
    });

    // Request for train
    $('#formTest')
        .submit(function(e){
            e.preventDefault();

            $.ajax({
                url: 'test',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false
            }).done(function(data) {
                $('.resultTest').empty();

                $('<span/>', {
                    'class':'result',
                    'html':'Teste realizado <br/><br/><label>' + data + '</label>'
                }).appendTo('.resultTest');
            });
        });

})(jQuery); // End of use strict