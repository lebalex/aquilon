<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background-color: silver;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <table style="background-color: snow;font-size: 12px;font-family: Verdana, Arial, Helvetica, sans-serif;margin: 10px auto 15px auto; padding: 10px;" border="0" width="700" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                        <tr>
                            <td><div style="padding-top: 10px;padding-bottom: 10px;">вы зарегистрировались на сайте Аквилон</div></td>
                        </tr>
                        <tr>
                            <td>
                                <h3>
                                    <a href="https://www.aquilon.ru">Аквилон</a>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Ваши регистрационные данные</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>

                                    <tr>
                                        <td>Имя:</td>
                                        <td><?= $name ?></td>
                                    </tr>
                                    <tr>
                                        <td>email:</td>
                                        <td><?= $email ?></td>
                                    </tr>
                                    <tr>
                                        <td>Телефон:</td>
                                        <td><?= $phone ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ваш пароль:</td>
                                        <td><?= $password ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div style="padding-top: 10px;">

                                    Вы можете сменить пароль пройдя по этой ссылке <a href="http://aquilon.lebalex.xyz/change_pwd/<?= $insert_id_user ?>/<?= $pwd_hash ?>">сменить пароль</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="padding-top: 10px;">
                                    <h5>+7-950-105-13-50</h5>
                                    <h5><a href="mailto:aquilon2015@mail.ru">aquilon2015@mail.ru</a></h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="padding-top: 10px; padding-bottom: 40px;">
                                    С уважением, сотрудники Аквилон
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>




</body>

</html>