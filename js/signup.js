$(document).ready(function ()
{
    $("#signup-form").submit(function (event)
    {
        event.preventDefault();
        var name = $("#inputName").val();
        var emails = $("#inputEmail1").val();
        var phone = $("#inputPhone").val();
        var pwd1 = $("#inputPassword1").val();
        var pwd2 = $("#inputPassword2").val();
        var submit = $("#signup-btn").val();
        $(".form-message").load("..inc-signup.php",
        {
            name: name,
            emails: emails,
            phone: phone,
            pwd1: pwd1,
            pwd2: pwd2,
            submit: submit
        });
    });
});