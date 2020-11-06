<?php
include_once 'header.php';
$categ_id = getParam('categ_id', -1);
$product_id = getParam('product', -1);

?>

<div id="product-category-lebalex">


</div>
  







<script>
  var categ_id = '<?= $categ_id ?>'
  var product_id = '<?= $product_id ?>'
</script>
<script src="/js/jsmin/CatalogList.js"></script>


<?php
include_once 'footer.php';
?>