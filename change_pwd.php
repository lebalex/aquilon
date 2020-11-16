<?php


include_once 'header.php';
$id = getParam('id', -1);
$pwd = getParam('pwd', '');


?>


<div id="account-login" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/login">Личный кабинет</a></li>
        <li><span>Смена пароля</span></li>
    </ul>
    <div id="data_page">




    </div>



</div>
<script>
    var pwd = '<?= $pwd ?>'
    var id = '<?= $id ?>'
</script>

<script src="/js/jsmin/ChangePwd.js"></script>



<?php
include_once 'footer.php';
?>