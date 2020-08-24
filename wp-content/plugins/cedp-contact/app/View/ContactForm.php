<?php
namespace Cedp\Contact\View;

class ContactForm {
	public static function render( $data = [] ) {
		?>
        <div id="contact" class="contact container grid col col m-to1">
            <div class="info container flex column center vend grey">
                <div class="content half fill flex center grey" data-aos="fade-right">
                    <div class="title underline-yellow">
                        <h2>Nous Joindre</h2>
                    </div>
                </div>
                <div class="detail container flex vend dgrey">
                    <div class="container flex vcenter end">
                        <div class="content half fill flex column center vcenter">
                            <a class="white flex column" data-aos="fade-right" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=<?= urlencode(($address = get_option('cedp_contact_address', '')).','.($city = get_option('cedp_contact_city', '')).','.($zipcode = get_option('cedp_contact_zipcode', '')).','.($province = get_option('cedp_contact_province', ''))) ?>">
                                <div><h3>Nos Bureaux</h3></div>
                                <div><span><?= $address ?>,</span></div>
                                <div><span><?= $city ?>, (<?= $province ?>),</span></div>
                                <div><span><?= $zipcode.', '. get_option('cedp_contact_country', '') ?></span></div>
                                <div class="flex vcenter"><h3 class="white">Itinéraire</h3> <i class="fas fa-long-arrow-alt-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form container flex start dgrey">
                <div class="content flex half fill vcenter center">
                    <div class="form-container" data-aos="fade-up-left">
                        <div class="wrapper">
                            <div class="form-header">
                                <div class="msg-container">
                                </div>
                            </div>
                            <div class="form-body">
                                <form id="contactform">
                                    <div class="input-container">
                                        <input type="text" id="name" name="name" placeholder="Nom" data-validation="required"/>
                                        <div class="msg-container"></div>
                                    </div>
                                    <div class="input-container">
                                        <input type="text" id="email" name="email" placeholder="Courriel"
                                               data-validation="email required"/>
                                        <div class="msg-container"></div>
                                    </div>
                                    <div class="input-container">
                                        <input type="text" id="phone" name="phone" placeholder="Téléphone"
                                               data-validation="phone"/>
                                        <div class="msg-container"></div>
                                    </div>
                                    <div class="input-container">
                                        <input type="text" id="activity" placeholder="Secteur d'activité" name="activity"/>
                                        <div class="msg-container"></div>
                                    </div>
                                    <div class="input-container">
                                        <textarea id="subject" name="subject" placeholder="Parlez-nous de vous"></textarea>
                                        <div class="msg-container"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-footer">
                                <div class="input-container">
                                    <input type="button" id="submit-contact" onclick="submitContact(this)" class="right"
                                           value="Envoyer"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
	}
}

?>
