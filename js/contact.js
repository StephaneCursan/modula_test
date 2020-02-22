$(document).ready(function() {

    $('.contact-form form input[type="text"], .contact-form form textarea').on('focus', function() {
        $('.contact-form form input[type="text"], .contact-form form textarea').removeClass('input-error');
    });
    $('contact-form form').submit(function (e) {
        e.preventDefault();
        $('.contact-form form input[type="text"], .contact-form form textarea').removeClass('input-error');

        var postdata = $('.contact-form form').serialize();

        $.ajax({
            url: 'contact.php',
            type: 'POST',
            data: postdata,
            dataType: 'json',
            success: function (json) {
                if (json.nameForm != '') {
                    $('.contact-form form .contact-name').addClass('input-error');
                }
                if (json.firstnameForm != '') {
                    $('.contact-form form .contact-firstname').addClass('input-error');
                }
                if (json.emailForm != '') {
                    $('.contact-form form .contact-email').addClass('input-error');
                }                
                if (json.messageForm != '') {
                    $('.contact-form form textarea').addClass('input-error');
                }
                if (json.captchaForm == '') {
                    $('.contact-form form .contact-captcha').addClass('input-error');
                }
                if (json.nameForm == '' && json.firstnameForm == '' && json.emailForm == '' && json.messageForm == '' && json.captchaForm == '') {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form').append('<p>Votre message a été envoyé avec succès</p>');
                    });
                }
            }
        });
    });
});