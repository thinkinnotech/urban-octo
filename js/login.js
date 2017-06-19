/**
 * Created by Manish on 20/06/2017.
 */

$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#loginForm").submit(function(e){
        $.ajax({
            url: loginUrl,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(){
                if($("#username").val() == '' || $("#password").val() == ''){
                    $("div.warningInLogin > span").html("Please Input Username and Password.");
                    $("div.warningInLogin").fadeIn().fadeOut(3000);
                    return false;
                } else {
                    $("button.btn-block").html("Signing In..");
                }
            },
            data: {
                username: $("#username").val(),
                password: $("#password").val(),
            },
            success: function(data) {
                if(data.result == 'Success'){
                    $("button.btn-block").html("Redirecting....");
                    window.location.href = adminUrl;
                } else {
                    $("div.errorInLogin > span").html("Invalid Username or Password.");
                    $("div.errorInLogin").fadeIn().fadeOut(3000);
                }
            },
            error: function() {
                $("button.btn-block").html("Sign In");
                $("div.errorInLogin > span").html("Some Error Occurred in Server, Please Try Again Later");
                $("div.errorInLogin").fadeIn().fadeOut(5000);
            },
        });
        e.preventDefault();
    })
})