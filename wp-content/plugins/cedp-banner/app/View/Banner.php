<?php
namespace Cedp\Banner\View;
class Banner{
  public static function render($collection){
      ?>
      <style>
          .banner .image.container{
              grid-template-columns: 1fr [text]1fr;
              grid-template-rows: 50% 50%;
              max-height: 80vh;
          }

          .banner .text{
              grid-column: text;
              max-width: 400px;
              align-self: center;
              justify-self: center;
              padding:1rem 1rem 0 1rem;
              background: rgba(0,0,0,0.5);
          }

          .banner .text h2{
              color: white;
              text-transform: uppercase;
              margin: 0;
          }

          .banner .text a{
              color:white;
              text-decoration: unset;
              font-family: var(--primary-font-familly-light);
              font-size: 1rem;
              white-space: nowrap;
              padding: 1rem 0;
          }

          .banner .text i{
            padding-top: 2px;
              transition: all 0.3s ease;
          }

          .banner .text a:hover i{
              padding-left: 15px;
              transform: scale(1.2);
          }

          @media (max-width: 991px){
              .banner .image.container{
                  grid-template-columns: 1fr [text]2fr;
              }
          }

          @media (max-width: 576px){
              .banner .image.container{
                  grid-template-columns: [text]1fr;
              }
          }
      </style>

      <div class="banner container stretch">
          <?php foreach ($collection as $element) : ?>
              <div class="image container grid" style="background-image: url(<?= $element->getImage()['url'] ?>); height:<?= $element->getImage()['height'] ?>px" >
                  <div class="text" data-aos="fade-left">
                      <h2><?= $element->get('post_content') ?></h2>
                      <a class="flex start vcenter" href="#service"><span>Voir nos services</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
              </div>
          <?php endforeach;?>
      </div>
      <?php
  }
}
