$("#ask_question_btn").on("click", function() {
    let name = $('#name').val().trim();
    let email = $('#email').val().trim();
    let message = $('#message').val().trim();

    if (name == "") {
        $("#error_mess").text("Введите ваше имя");
        return false;
    } else if (email == "") {
        $("#error_mess").text("Введите адрес вашей почты");
        return false;
    } else if (message.length < 10) {
        $("#error_mess").text("В вопросе должно быть не менее 10 символов");
        return false;
    }

    $("#error_mess").text("");

    $.ajax({
        url: "/php/feedback.php",
        type: "POST",
        cache: false,
        data: {'name': name, 'email': email, 'message': message},
        dateType: 'html',
        beforeSend: function () {
            $("#ask_question_btn").prop("disabled", true);
        },
        success: function () {
            
            $("#ask_question_btn").prop("disabled", false);
            $('#ask_question').trigger('reset');
            $("#error_mess").text("Мы рассмотрим ваш вопрос в ближайшее время!");
        }
    

    });
});