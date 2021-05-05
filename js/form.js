$(document).ready(function () {
    $('form').submit(function () {
        // Событие отправки с формы
        let form_data = $(this).serialize(); // Собираем данные из полей
        $.ajax({
            type: 'POST', // Метод отправки
            url: '../post/sendform.php', // Путь к PHP обработчику sendform.php
            data: form_data,
            success: function () {
                $('.popup-send-form').addClass('active');
            },
        });
        event.preventDefault();
    });
});
