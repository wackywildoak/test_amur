$("#ask_question_btn").on("click", function() {
    let name = $('#name').val().trim();
    let gender = $('[name=gender]:checked').val();
    let email = $('#email').val().trim();
    let message = $('#message').val().trim();
    let professions = $('[name=professions]').val();

    console.log(professions);
    if (name == "") { // валидация
        $("#error_mess").text("Введите ваше имя"); 
        return false;
    } else if (email == "") {
        $("#error_mess").text("Введите адрес вашей почты");
        return false;
    } else if (message.length < 10) {
        $("#error_mess").text("В вопросе должно быть не менее 10 символов");
        return false;
    } else if (gender == "") {
        $("#error_mess").text("Укажите пол");
        return false;
    }  else if (professions = "") {
        $("#error_mess").text("Укажите вашу профессию");
        return false;
    }
    
    $("#error_mess").text("");

    $.ajax({ //ajax запрос к php
        url: "/php/feedback.php",
        type: "POST",
        cache: false,
        data: {'name': name, 'email': email, 'message': message, 'gender': gender, 'professions': professions},
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