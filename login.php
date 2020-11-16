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
            <a href="/registration" class="btn btn-primary">Продолжить</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Вход для покупателей</h2>
            <p><strong>Я постоянный покупатель</strong></p>
            <form id="loginform" name="loginform" action="/includes/process_login.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="login">E-Mail адрес</label>
                <input type="text" name="login" value="" placeholder="E-Mail адрес" id="login" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="p">Пароль</label>
                <input type="password" name="p" value="" placeholder="пароль" id="p" class="form-control" />
                <a href="/restore_password">Забыли пароль</a></div>
              <input type="submit" value="Вход" class="btn btn-primary" />
                          </form>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
<script>
  $("#loginform").on("submit", function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function (data) {
                /*console.log(data);*/
                if (data.code === 0) {
                    localStorage.setItem('jwt', data.jwt);
                    sessionStorage.setItem("sid",data.jwt)
                    //$('.modal').modal('hide');
                    $('#count_in_favouritet').text(data.favouritet);
                    //$('#login_exit_bth').html(`<a href="/users/account"><img src="/img/core-img/user_login.svg" alt="" title="Личный кабинет - ${data.name}"></a>`);
                    //$('#exit-area').html(`<a href="/logout"  id="logoutBtn"><img src="/img/core-img/door-exit.svg" alt="">`);
                    window.location.href = "/users/account";
                } else {
                    $('#login').addClass('is-invalid');
                    $('#p').addClass('is-invalid');
                    localStorage.removeItem('jwt');
                }

            },
            error: function(xhr) { 
                localStorage.removeItem('jwt');sessionStorage.removeItem('sid');
            }
        });
    })
  </script>


<?php
include_once 'footer.php';
?>