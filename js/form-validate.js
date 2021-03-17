$(document).ready(function() {
    var email_selector = ".email-wrapper";
    var password_selector = ".password-wrapper";
    var email_input_selector = ".email-wrapper input";
    var password_input_selector = ".password-wrapper input";
    var regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    $("#login").click(function(event) {
        if ($.trim($(email_input_selector).val()) === "" && $.trim($(password_input_selector).val()) === "") {
            $(email_selector).add(password_selector).attr('data','\uF06A');
            $(email_selector).add(password_selector).addClass('error');
            $(email_selector).add(password_selector).parent().addClass('has-error');
            setTimeout(function() {
                $(email_selector).add(password_selector).removeClass('error');
            }, 300);
            $(email_selector).add(password_selector).parent().css('margin-bottom', '10px');
            $(email_selector).next().text('Email cannot be empty.');
            $(password_selector).next().text('Password cannot be empty.');
        }
        else if ($.trim($(email_input_selector).val()) === "") {
            $(email_selector).attr('data','\uF06A');
            $(email_selector).addClass('error');
            $(email_selector).parent().addClass('has-error');
            setTimeout(function() {
                $(email_selector).removeClass('error');
            }, 300);
            $(email_selector).parent().css('margin-bottom', '10px');
            $(email_selector).next().text('Email cannot be empty.');
        }
        else if ($.trim($(password_input_selector).val()) === "") {
            $(password_selector).attr('data','\uF06A');
            $(password_selector).addClass('error');
            $(password_selector).parent().addClass('has-error');
            setTimeout(function() {
                $(password_selector).removeClass('error');
            }, 300);
            $(password_selector).parent().css('margin-bottom', '10px');
            $(password_selector).next().text('Password cannot be empty.');
        }
        else if ($.trim($(email_input_selector).val()) !== "" && !regex.test($.trim($(email_input_selector).val()))) {
            $(email_selector).attr('data','\uF06A');
            $(email_selector).addClass('error');
            $(email_selector).parent().addClass('has-error');
            setTimeout(function() {
                $(email_selector).removeClass('error');
            }, 300);
            $(email_selector).parent().css('margin-bottom', '10px');
            $(email_selector).next().text('Please enter a valid email address.');
        }
        else if ($.trim($(password_input_selector).val()) !== "" && $(password_input_selector).val().length < 6) {
            $(password_selector).attr('data','\uF06A');
            $(password_selector).addClass('error');
            $(password_selector).parent().addClass('has-error');
            setTimeout(function() {
                $(password_selector).removeClass('error');
            }, 300);
            $(password_selector).parent().css('margin-bottom', '10px');
            $(password_selector).next().text('Password must be at least 6 characters.');
        }
        else {
            $(".well .alert").show();
        }
        event.preventDefault();
    });

    $(email_input_selector + ", " + password_input_selector).on("input", function() {
        if ($.trim($(this).val()) !== "") {
            $(this).closest(".form-group").removeClass('has-error');
            $(this).parent().attr('data','');
            $(this).parent().next().text('');
        }
    });

    $(".alert button.close").click(function () {
        $(this).parent().fadeOut('slow');
    });
});