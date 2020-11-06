<?php
include_once 'header.php';
?>
<div id="account-login" class="container">
  <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Личный кабинет</a></li>
      </ul>
      <div class="row">
                <div id="content" class="col-sm-12">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>Новый покупатель</h2>
            <p><strong>Регистрация</strong></p>
            <p>Зарегистрировавшись на сайте Вы сможете просматривать свои заказы, выполнять покупки быстрее, получить персональную скидку.</p>
            <a href="/register" class="btn btn-primary">Продолжить</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Вход для покупателей</h2>
            <p><strong>Я постоянный покупатель</strong></p>
            <form action="/login" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail адрес</label>
                <input type="text" name="email" value="" placeholder="E-Mail адрес" id="input-email" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Пароль</label>
                <input type="password" name="password" value="" placeholder="пароль" id="input-password" class="form-control" />
                <a href="https://livedemo00-opencart.template-help.com/opencart_prod-23526/index.php?route=account/forgotten">Забыли пароль</a></div>
              <input type="submit" value="Вход" class="btn btn-primary" />
                          </form>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>