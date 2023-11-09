$(document).ready(function () {

    $('#phone').inputmask("+7 (999) 999-99-99"); // маска на номер телефона

    $("#ask_question").on("submit", function (event) {
        // Считываем поля ввода
        let name = $("#name").val().trim();
        let gender = $("[name=gender]:checked").val();
        let email = $("#email").val().trim();
        let message = $("#message").val().trim();
        let professions = $("[name=professions]").val();
        let phone = $("#phone").val().trim();
        
        function deleteMask() { // удаляем лишние символы
            phone = phone.replace(/-/g, ""); // Удаляем тире
            phone = phone.replace(/[()]/g, ""); // Удаляем скобки
            phone = phone.replace(/ /g, ""); // Удаляем пробелы
            phone = phone.replace(/[+]/g, ""); // Удаляем +
        }

        console.log(phone);
        if (name == "") {
            // валидация на отсутствие ввода
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
        } else if (professions == "") {
            $("#error_mess").text("Укажите вашу профессию");
            return false;
        } else if (phone == "") {
            $("#error_mess").text("Укажите ваш номер телефона");
            return false;
        }

        deleteMask();

        $("#error_mess").text("");

        $.ajax({
            //ajax запрос к php
            url: "/php/feedback.php",
            type: "POST",
            cache: false,
            data: {
                name: name,
                email: email,
                message: message,
                gender: gender,
                professions: professions,
                phone: phone,
            },
            dateType: "html",
            beforeSend: function () {
                $("#ask_question_btn").prop("disabled", true);
            },
            success: function (data) {
                $("#ask_question_btn").prop("disabled", false);
                $("#ask_question").trigger("reset");
                $("#error_mess").text("Мы рассмотрим ваш вопрос в ближайшее время!");
            },
        });
        event.preventDefault();
    });

});
