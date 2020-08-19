<?php
namespace Cedp\Team\View;
class Team{
  public static function render($collection){
      ?>
      <div id="team" class="team container grid col col m-to1">
          <div class="members container flex column center vend" data-aos="fade-up-right">
              <div class="content half grid center col col s-to1 gap">
	              <?php foreach ($collection as $member) : ?>
                      <a class="member container flex column center" href="mailto:<?= $member->get('email') ?>">
                          <div class="image container flex">
                              <img src="<?= $member->get('image') ?>" draggable="false" />
                          </div>
                          <div class="container flex between grow dgrey">
                              <div class="member-title container flex column center">
                                  <h3><?= $member->get('post_title') ?></h3>
                                  <h4><?= $member->get('title') ?></h4>
                              </div>
                              <div class="link container acolor2">
                                  <div><span class="uppercase">Contacter</span></div>
                                  <div><i class="fas fa-envelope"></i></div>
                              </div>
                          </div>
                      </a>
	              <?php endforeach; ?>
              </div>
          </div>
          <div class="container flex column vstart center" data-aos="fade-left">
              <div class="content half flex">
                  <div class="title underline-red" ><h2>Qui sommes-nous</h2></div>
              </div>
              <div class="description container flex dgrey">
                  <div class="content half fill flex center">
                      <div>
                          <h2>Besoin de renseignements?<br/> Nous sommes là afin de répondre à vos questions! </h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php
  }
}
