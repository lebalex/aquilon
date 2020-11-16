<?php
include_once 'header.php';
$search_string= getParam('search', '');
?>
<div id="account-login" class="container">
  <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><span>Результаты поиска</span></li>
      </ul>
      <div class="row">
                <div id="data_page" class="col-sm-12">

      </div>
    </div>
</div>
<script>
    var search_string='<?=$search_string?>'
</script>
<script src="/js/jsmin/SearchProduct.js"></script>
<?php
include_once 'footer.php';
?>

