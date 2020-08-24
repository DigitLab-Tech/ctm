<?php
namespace Cedp\Service\View;
class Service{
	public static function render($collection){
		?>
        <div id="service" class="services container">
            <div class="title container flex center vcenter">
                <div class="underline-yellow" data-aos="fade-left"><h2>Services</h2></div>
            </div>
            <div class="container flex center">
                <div class="services-container content grid center">
					<?php for($i = 0; $i < $collection->count(); $i++) : ?>
						<?php $element = $collection->getCollection()[$i] ?>
                        <div class="service container grid <?= $col = (($i + 1) % 2) == 0 ? 'to-left' : 'to-right' ?>">
                            <div class="image container flex"  data-aos="fade-up-right">
                                <img  src="<?= $element->getImage() ?>" />
                            </div>
                            <div class="info flex container center vend" data-aos="fade-up-right">
                                <div class="wrapper container flex column center">
                                    <div class="title-wrapper flex column center">
                                        <div class="title"><h3><?= $element->get('post_title') ?></h3></div>
                                        <?php if(!empty($element->getKeyWords())) : ?>
                                            <div class="subtitle"><span><?= $element->getKeyWords(' | ')?></span></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="desc flex grow center vcenter"><span><?= $element->get('post_content') ?></span></div>
                                </div>
                            </div>
                        </div>
					<?php endfor; ?>
                </div>
            </div>
        </div>
		<?php
	}
}
