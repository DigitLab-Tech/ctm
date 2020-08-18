<?php
namespace Cedp\Menu\View;
class Menu{
  public static function render($collection){
      ?>
      <div class="items container flex ">
          <?php foreach ($collection as $menuItem) : ?>
              <div class="item container" onclick="closeMenu()"><a href="<?= $menuItem->get('link')['url'] ?>"><?= $menuItem->get('link')['title'] ?></a></div>
          <?php endforeach ; ?>
      </div>
      <div class="toggle container">
          <input id="menuToggleInput" type="checkbox" onclick="toggleMenu()" />
          <span></span>
          <span></span>
          <span></span>
          <ul></ul>
      </div>
    <?php
  }
}
