$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        // Событие отправки с формы
        let form_data = $(this).serialize(); // Собираем данные из полей
        $.ajax({
            type: 'POST', // Метод отправки
            url: '../post/sendform.php', // Путь к PHP обработчику sendform.php
            data: form_data,
            success: function () {
                $('.popup-send-form').addClass('popup-active');
                $('.form-modal').toggleClass('form-active');
            },
        });
    });
});
