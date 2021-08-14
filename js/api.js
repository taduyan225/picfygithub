//validate sign up space
$().ready(function() {
    var validator = $('#form_signup').validate({
        rules: {
            first_name: "required",
            last_name: "required",
            birthday: "required",
            password: "required",
            email: "required"
        },
        messages: {
            first_name: "please enter your first name",
            last_name: "please enter your last name",
            birthday: "please enter your birthday",
            email: "please enter your email",
            password: "please enter your password"
        }
    });

    $(".close").click(function() {
        validator.resetForm();
    });
});

//validate email 
$(document).ready(function() {
    $("#btn").hide();
    $("#email").keyup(function() {
        if (validateEmail()) {
            $("#email").css("border", "2px solid green");
            $("#emailMsg").html("<p class='text-success'>Email Khả dụng</p>");
        } else {
            $("#email").css("border", "2px solid red");
            $("#emailMsg").html("<p class='text-danger'>Email Không khả dụng</p>");
        }
        buttonState();
    });
});

function buttonState() {
    if (validateEmail()) {
        $("#btn").show();
    } else {
        $("#btn").hide();
    }
}

function validateEmail() {
    var email = $("#email").val();
    var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if (reg.test(email)) {
        return true;
    } else {
        return false;
    }
}

function signup() {
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var birthday = $('#birthday').val();
    var gender = document.querySelector('input[name = "gender"]:checked').value;
    var email = $('#email').val();
    var password = $('#password').val();

    if ($("#form_signup").valid()) {
        if (validateEmail()) {
            $.ajax({
                url: "http://localhost:8080/taan/picfy/config/signup.php",
                type: "POST",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    email: email,
                    password: password,
                    gender: gender,
                    birthday: birthday
                },
                success: function(data, status) {
                    $("#myModa-signup").modal("hide");
                    $(".gradient").fadeOut();
                    $(".scroll").fadeOut();

                    $("html, body").animate({
                        scrollTop: $(
                            'html, body').get(0).scrollHeight / 2.8
                    }, 1000);
                }
            });
        }
    }
}

$().ready(function() {
    var validator = $('#form_login').validate({
        rules: {
            password_signin: "required",
            email_signin: "required"
        },
        messages: {
            email_signin: "please enter your email",
            password_signin: "please enter your password"
        }
    });
    $(".close").click(function() {
        validator.resetForm();
    });
});

function login() {
    var email = $('#email_signin').val();
    var password = $('#password_signin').val();

    if ($('#form_login').valid()) {
        $.ajax({
            url: "http://localhost:8080/taan/picfy/config/signin.php",
            method: "POST",
            data: {
                login: 1,
                email_signin: email,
                password_signin: password
            },
            success: function(response) {
                // console.log(response);
                $("#response").html(response);
                if (response.indexOf('success') >= 0)
                    window.location = "manage.php";
            },
            dataType: 'text'
        });
    }
}

//login_bottom
$().ready(function() {
    var validator = $('#form_bottom').validate({
        rules: {
            password_bottom: "required",
            email_bottom: "required"
        },
        messages: {
            email_bottom: "please enter your email",
            password_bottom: "please enter your password"
        }
    });
    $(".up-scroll").click(function() {
        validator.resetForm();
    });
});

function loginBot() {
    var email = $('#email_bottom').val();
    var password = $('#password_bottom').val();

    if ($('#form_bottom').valid()) {
        $.ajax({
            url: "http://localhost:8080/taan/picfy/config/signinbot.php",
            method: "POST",
            data: {
                login: 1,
                email_bottom: email,
                password_bottom: password
            },
            success: function(response) {
                // console.log(response);
                $("#response_bottom").html(response);
                if (response.indexOf('success') >= 0)
                    window.location = "manage.php";
            },
            dataType: 'text'
        });
    }
}

function preback() {
    window.history.forward();
}
setTimeout("preback()", 0);
window.onunload = function() { null };