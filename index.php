<?php
include_once 'header.php';
$categ_id = getParam('categ_id', -1);
$product_id = getParam('product', -1);

?>

<div id="product-category-lebalex">


</div>
  

    <script>
      ;
      (function($) {
        $(window).load(function() {
          var o = $('.sf-menu');
          o.superfish();
          /*o.find('li a').each(function() {
            if ($(location).attr('href').indexOf($(this).attr('href')) >= 0) {
              $(this).addClass('active');
              return;
            }
          })*/
          /*if (o.parents('aside').length) {
            var width = $('.container').outerWidth() - $('aside').outerWidth();
            o.find('.sf-mega').each(function() {
              $(this).width(width);
            })
          }*/
        });
      })(jQuery);
    </script>





<script>
  var categ_id = '<?= $categ_id ?>'
  var product_id = '<?= $product_id ?>'
</script>
<script src="/js/jsmin/CatalogList.js"></script>


<?php
include_once 'footer.php';
?>