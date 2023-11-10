$(document).ready(function () {
    let errorMessageBlock = document.getElementById("error_mess");
    let errorMessage = document.getElementsByClassName("error_message");
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

        // console.log(phone);

        // валидация на отсутствие ввода
        if (name == "") {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Введите своё имя";
            return false;
        } else if (email == "") {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Введите свою почту";
            return false;
        } else if (message.length < 10) {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Сообщение должно содержать не меньше 10 символов";
            return false;
        } else if (gender == "") {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Выберите пол";
            return false;
        } else if (professions == "") {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Выберите профессию";
            return false;
        } else if (phone == "") {
            errorMessageBlock.style.display = 'block';
            errorMessage[0].textContent = "Введите номер телефона";
            return false;
        }

        deleteMask();

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
                errorMessageBlock.style.display = 'block';
                errorMessageBlock.style.backgroundColor = "#33CC00";
                errorMessage[0].textContent = "Сообщение успешно отправлено!";
                $("#ask_question_btn").prop("disabled", false);
                $("#ask_question").trigger("reset");
            },
        });
        event.preventDefault();
    });

});
