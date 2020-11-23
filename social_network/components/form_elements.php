<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/lib/css/form_elements.css">
</head>
<body>
<form>
    <div class="form_element">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input">
        </label>
    </div>

    <div class="form_element form_element_active">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input">
        </label>
    </div>

    <div class="form_element ">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input form_element_input_status_success">
        </label>
    </div>

    <div class="form_element ">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input form_element_input_status_error">
        </label>
        <span class="form_element_caption form_element_input_status_error_message">Неправильно заполнено поле</span>
    </div>

    <div class="form_element ">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input form_element_input_status_search">
        </label>
        <span class="form_element_caption form_element_input_status_error_message">Неправильно заполнено поле</span>
    </div>

    <div class="form_element">
        <label>
            <span class="form_element_caption">Input</span>
            <input type="text" name="input" placeholder="input" class="form_element_input" readonly="readonly">
        </label>
    </div>

    <div class="form_element">
        <input type="button" class="form_element_button" value="Кнопка">
    </div>

    <div class="form_element">
        <input type="button" class="form_element_button" value="Кнопка" disabled="disabled">
    </div>

    <div class="form_element">
        <input type="button" class="form_element_button_2" value="Кнопка">
    </div>

    <div class="form_element">
        <input type="button" class="form_element_button_2" value="Кнопка" disabled="disabled">
    </div>

    <div class="form_element">
        <input type="checkbox" class="custom-checkbox" id="checkbox-1" name="checkbox_1" value="checkbox_1">
        <label for="checkbox-1">Чекбокс</label>
    </div>

    <div class="form_element">
        <input type="checkbox" class="custom-checkbox" id="checkbox-2" name="checkbox_2" value="checkbox_2" disabled="disabled">
        <label for="checkbox-2">Чекбокс</label>
    </div>

    <div class="form_element">
        <input type="radio" class="custom-radio" id="radio-1" name="radio_1" value="radio_1">
        <label for="radio-1">Радио-кнопка</label>
    </div>

    <div class="form_element">
        <input type="radio" class="custom-radio" id="radio-2" name="radio_2" value="radio_2" disabled="disabled">
        <label for="radio-2">Радио-кнопка</label>
    </div>
</form>
</body>
</html>
