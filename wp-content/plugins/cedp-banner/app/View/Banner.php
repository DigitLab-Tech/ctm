<?php
namespace Cedp\Banner\View;
class Banner{
  public static function render($collection){
      ?>
      <div class="banner container stretch">
          <?php foreach ($collection as $element) : ?>
            <div class="image container" style="background-image: url(<?= $element->getImage()['url'] ?>); min-height:<?= $element->getImage()['height'] ?>px" />
          <?php endforeach;?>
      </div>
      <?php
  }
}
