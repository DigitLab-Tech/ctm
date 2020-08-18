<?php
namespace Cedp\Service\View;
class Service{
	public static function render($collection){
		?>
        <style>
            .services{
                padding: 0.5rem 0;
            }

            .services-container{
                grid-template-columns: [left] 1fr [right] 1fr;
                gap:1rem;
                padding:0 1rem;
            }

            .services-container .to-left{
                grid-column: left;
                justify-self: end;
                align-self: center;
                transform: translateY(-50%);
            }

            .services-container .to-right{
                grid-column: right;
                justify-self: start;
                align-self: start;
            }

            .services-container img{
                max-width:450px;
            }

            .services-container .image{
                grid-row: 1/2;
                grid-column: 1/2;
            }

            .services-container .info{
                grid-row: 1/2;
                grid-column: 1/2;
            }

            .service{
                overflow: hidden;
                max-width: 450px;
                color:white
            }

            .service .info > .wrapper{
                background: linear-gradient(180deg,rgba(0,0,0,0) 16.67%,#000000 100%);
                height:6rem;
                max-width: 450px;
                overflow: hidden;
            }


            @media (max-width: 576px){
                .service-container{
                    grid-template-columns: 1fr;
                }

                .service-container .to-left,
                .service-container .to-right{
                    grid-column: 1/2;
                    justify-self: center;
                    align-self: center;
                    transform: translateY(0);
                }
            }
        </style>
        <div id="service" class="services container">
            <div class="title container flex center vcenter">
                <div class="underline-yellow"><h2 data-aos="fade-right" data-aos-delay="150" data-aos-once="true">Services</h2></div>
            </div>
            <div class="container flex center">
                <div class="services-container content grid center">
					<?php for($i = 0; $i < $collection->count(); $i++) : ?>
						<?php $element = $collection->getCollection()[$i] ?>
                        <div class="service container grid <?= (($i + 1) % 2) == 0 ? 'to-left' : 'to-right' ?>">
                            <div class="image container flex ">
                                <img  src="<?= $element->getImage() ?>" />
                            </div>
                            <div class="info flex container center vend">
                                <div class="wrapper container flex column">
                                    <div class="title"><?= $element->get('post_title') ?></div>
                                    <div class="subtitle"><?= $element->getKeyWords(' | ')?></div>
                                    <div class="desc"><?= $element->get('post_content') ?></div>
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
