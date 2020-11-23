<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/lib/css/form_elements.css">
    <link rel="stylesheet" href="/assets/lib/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
    <div class="wrapper">
        <div class="auth_block_title">
            <div class="auth_title">TempName</div>
            <div class="auth_subtitle">Компания для отдыха в один клик!</div>
        </div>
        <div class="auth_form">
            <div class="auth_form_regist">
                <div class="auth_form_title">Регистрация</div>
                <div class="auth_form_input">
                    <form action="/" method="post">
                        <div class="form_element">
                            <label>
                                <span class="form_element_caption">Имя</span>
                                <input type="text" name="first_name" placeholder="Имя" class="form_element_input">
                            </label>
                        </div>
                        <div class="form_element">
                            <label>
                                <span class="form_element_caption">Фамилия</span>
                                <input type="text" name="last_name" placeholder="Фамилия" class="form_element_input">
                            </label>
                        </div>
                        <div class="form_element">
                            <label>
                                <span class="form_element_caption">E-mail</span>
                                <input type="email" name="email" placeholder="mail@example.ru" class="form_element_input">
                            </label>
                        </div>
                        <div class="form_element">
                            <label>
                                <span class="form_element_caption">Пароль</span>
                                <input type="password" name="password" placeholder="************" class="form_element_input">
                            </label>
                        </div>
                            <div class="form_element_button_reg">
                                <div class="form_element">
                                    <input type="button" class="form_element_button" value="Регистрация">
                                </div>
                            </div>
                    </form>
                    <div class="form_element_button_text">
                        <div class="form_element_text">Уже зарегистрированы?</div>
                        <form action="auth.php" target="_blank">
                            <div class="form_element">
                                <button class="form_element_button">Авторизация</button>
                            </div>
                        </form>
                        <div class="form_element_text_license">Продолжая, вы подтверждаете, что вы прочитали и согласны с <a href="#" class="license"> условиями использования</a> и <a href="#" class="license">политикой конфиденциальности.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>