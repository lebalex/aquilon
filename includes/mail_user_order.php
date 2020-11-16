<html>

<head>
    </style>
</head>

<body style="background-color: silver;">


    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <table style="background-color: snow;font-size: 12px;font-family: Verdana, Arial, Helvetica, sans-serif;margin: 10px auto 15px auto; padding: 10px;" border="0" width="700" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <div style="padding-top: 10px;padding-bottom: 10px;">Ваш заказ в Аквилон</div>
                            </td>
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
                                <h4><?=$titles?></h4>
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
                                        <td>Комментарий к заказу:</td>
                                        <td><?= $description ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div style="padding-top: 10px;">
                                    <div>
                                        <h4>Заказ №<?= $order_number ?></h4>
                                    </div>
                                    <table border="1" cellspacing="0" cellpadding="10">
                                        <tr>
                                            <th style="text-align: left;">Наименование</th>
                                            <th style="text-align: left;">Арт</th>
                                            <th style="text-align: left;">Кол-во</th>
                                            <th style="text-align: left;">Цена</th>
                                        </tr>
                                        <?php $sum = 0;
                                        foreach ($items as $item) : ?>
                                            <tr>
                                                <td><?= $item->name ?></td>
                                                <td><?= $item->art ?></td>
                                                <td><?= $item->count ?></td>
                                                <td><?= $item->coast ?></td>
                                            </tr>
                                        <?php
                                            $sum += ($item->count * $item->coast);
                                        endforeach; ?>
                                        <?php foreach ($items_array as $item) : ?>
                                            <tr>
                                                <td><?= $item['name'] ?></td>
                                                <td><?= $item['art'] ?></td>
                                                <td><?= $item['count'] ?></td>
                                                <td><?= $item['coast'] ?></td>
                                            </tr>
                                        <?php
                                            $sum += ($item['count'] * $item['coast']);
                                        endforeach; ?>
                                    </table>

                                    <div>
                                        <h4>Итого: <?= $sum ?></h4>
                                    </div>

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