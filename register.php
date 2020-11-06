<?php
include_once 'header.php';
?>

<div id="account-register" class="container">
  <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Личный кабинет</a></li>
        <li><a href="/register">Регистрация</a></li>
      </ul>
    <div class="row">
                <div id="content" class="col-sm-12">
      <h1>Регистрация покупателя</h1>

      <form action="https://livedemo00-opencart.template-help.com/opencart_prod-23526/index.php?route=account/register" 
        method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Ваши персональные данные</legend>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">Имя</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="Имя" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Фамилия</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Фамилия" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Телефон</label>
            <div class="col-sm-10">
              <input type="tel" name="telephone" value="" placeholder="телефон" id="input-telephone" class="form-control" />
               </div>
          </div>
                  </fieldset>
        <fieldset>
          <legend>Пароль</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Пароль</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="пароль" id="input-password" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Повторите пароль</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="повторите пароль" id="input-confirm" class="form-control" />
               </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Новости</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label">Подписка</label>
            <div class="col-sm-10">               <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" />
                подписаться</label>
              <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" checked="checked" />
                нет</label>
               </div>
          </div>
        </fieldset>
        
                <div class="buttons">
          <div class="pull-right">Я согласен на обработку персональных данных! <a href="information_id=3" class="agree"><b>Правила обработки</b></a>
                        <input type="checkbox" name="agree" value="1" />
                        &nbsp;
            <input type="submit" value="Продолжить" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>