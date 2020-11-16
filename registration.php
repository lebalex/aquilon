<?php
include_once 'header.php'
?>

<div id="accountregister" class="container">
  <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Личный кабинет</a></li>
        <li><span>Регистрация</span></li>
      </ul>
      <div id="account-register">
      </div>








</div>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfIitEZAAAAAJQRx8lSEiZJqeF56fvMlLBv4Exv"></script>
                    <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute('6LfIitEZAAAAAJQRx8lSEiZJqeF56fvMlLBv4Exv', {
                                    action: 'registration'
                                })
                                .then(function(token) {
                                    if (token) {
                                        document.getElementById('token').value = token;
                                    }
                                });
                        });
                    </script>
</section>
<script src="/js/jsmin/Registration.js"></script>


<?php
include_once 'agreement.php';
include_once 'footer.php';
?>
