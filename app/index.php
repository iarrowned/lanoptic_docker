<?php
require_once "./config/bootstrap.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Подбор сотрудников в компанию Лан-Оптик</title>
</head>
<body>
<style>
    form {
        display: flex;
        width: 500px;
        height: 500px;
        flex-direction: column;
        margin: 0 auto;
    }
    h1 {
        text-align: center;
    }
    .input_group {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 20px;
    }
    input, select {
        height: 30px;
    }
    textarea {
        height: 200px;
    }
</style>
<h1>Подбор сотрудников в компанию Лан-Оптик</h1>
<form action="/ajax/send.php" method="post">
    <div class="input_group">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="input_group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="input_group">
        <label for="phone">Телефон:</label>
        <input type="tel" id="phone" name="phone">
    </div>
    <div class="input_group">
        <label for="position">Желаемая должность:</label>
        <select id="position" name="position">
            <option value="Менеджер по продажам">Менеджер по продажам</option>
            <option value="Монтажник связи">Монтажник связи</option>
            <option value="Системный администратор">Системный администратор</option>
        </select>
    </div>
    <div class="input_group">
        <label for="resume">Резюме:</label>
        <textarea id="resume" name="resume"></textarea>
    </div>

    <input type="submit" value="Отправить">
</form>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Предотвращаем отправку формы

        const formData = new FormData(this);

        // Преобразуем FormData в объект
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        console.log(data);

        // Отправляем данные через AJAX
        fetch('/ajax/send.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(result => {
                console.log('Success:', result);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
</body>
</html>
