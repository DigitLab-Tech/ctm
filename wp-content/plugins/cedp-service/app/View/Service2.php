<?php
namespace Cedp\Service\View;
class Service2{
	public static function render($collection){
		?>
        <style>
            .service .image img{
                max-width: 400px;
                width: 100%;
            }

            .service .info{
                width: 66%;
            }

            .service .desc .content {
                padding:1rem;
            }

            .service .title .content{
                padding: 0 1rem;
                background: var(--accent-color-1);
                transform: translateY(25%);
            }

            .service .image{
                width:34%;
            }


            .service:nth-child(even) .image{
                order:1;
                justify-content: flex-end;
            }

            .service:nth-child(even) .image .content{
                order:1;
                justify-content: flex-end;
            }

            .service:nth-child(even) .info{
                order:2;
                align-items: start;
            }

            .service:nth-child(even) .info > .container{
                justify-content: start;
            }

            .service:nth-child(even) .title > .content{
                background: var(--accent-color-2);
            }

            .service .desc{
                background: var(--light-gray);
                min-height: 50%;
            }

            .service .desc span{
                line-height: 1.4rem;
                color:white;
            }

            .service .title h3{
                color: white;
                line-height: 2rem;
                font-weight: normal;
            }

            .service:nth-child(even) .desc{
                background: var(--dark-gray);
            }


            .service. image{
                grid-column: image;
                grid-row: 1/2;
            }

        </style>
        <div id="service" class="services container">
            <div class="title container flex center vcenter">
                <div class="underline-yellow" data-aos="fade-left"><h2>Services</h2></div>
            </div>
            <div class="services-container container flex column center vcenter">
                <?php for($i = 0; $i < $collection->count(); $i++) : ?>
                    <?php $element = $collection->getCollection()[$i] ?>
                    <div class="service container flex">
                        <div class="info flex column center">
                            <div class="title container flex end vcenter">
                                <div class="content two-3 flex"><h3><?= $element->get('post_title') ?></h3></div>
                            </div>
                            <div class="desc container flex end vcenter">
                                <div class="content two-3 flex"><span><?= $element->get('post_content') ?></span></div>
                            </div>
                        </div>
                        <div class="image flex">
                            <div class="content one-3 flex">
                                <img src="<?= $element->getImage() ?>" />
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
		<?php
	}
}
