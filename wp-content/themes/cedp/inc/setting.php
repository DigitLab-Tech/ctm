<?php

class CedpSettings {
	static $menuData = [
		'pageTitle'  => 'CEDP',
		'menuTitle'  => 'cedp',
		'capability' => 'manage_options',
		'slug'       => 'cedp',
		'callback'   => 'renderOptionsPage'
	];
	static $sectionData = 	[
	        'general' => [
		        'title'    => 'General',
		        'callback' => '',
		        'page'     => 'cedp'
            ],
            'home_page' => [
	            'title'    => 'Home Page',
	            'callback' => '',
	            'page'     => 'cedp'
            ],
	        'contact' => [
		        'title'    => 'Contact',
		        'callback' => '',
		        'page'     => 'cedp'
	        ],
	        'footer' => [
		        'title'    => 'Footer',
		        'callback' => '',
		        'page'     => 'cedp'
	        ]
	];
	static $settingData = 	[
		'cedp_punch_line'       => [
			'option' => [
				'group'    => 'cedp_general',
				'type'     => 'string',
				'callback' => 'sanitize_textarea_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Punch line',
				'page'     => 'cedp',
				'section'  => 'general',
				'type'     => 'textarea',
			]
		],
		'cedp_vanta_background' => [
			'option' => [
				'group'    => 'cedp_general',
				'type'     => 'boolean',
				'callback' => '',
				'default'  => false
			],
			'field'  => [
				'title'    => 'Vanta Background',
				'page'     => 'cedp',
				'section'  => 'general',
				'type'     => 'checkbox',
			]
		],
		'cedp_home_show_banner' => [
			'option' => [
				'group'    => 'cedp_home',
				'type'     => 'boolean',
				'callback' => '',
				'default'  => false
			],
			'field'  => [
				'title'    => 'Show Banner',
				'page'     => 'cedp',
				'section'  => 'home_page',
				'type'     => 'checkbox',
			]
		],
		'cedp_home_show_service' => [
			'option' => [
				'group'    => 'cedp_home',
				'type'     => 'boolean',
				'callback' => '',
				'default'  => false
			],
			'field'  => [
				'title'    => 'Show Services',
				'page'     => 'cedp',
				'section'  => 'home_page',
				'type'     => 'checkbox',
			]
		],
		'cedp_home_show_contact' => [
			'option' => [
				'group'    => 'cedp_home',
				'type'     => 'boolean',
				'callback' => '',
				'default'  => false
			],
			'field'  => [
				'title'    => 'Show Contact',
				'page'     => 'cedp',
				'section'  => 'home_page',
				'type'     => 'checkbox',
			]
		],
		'cedp_copyright'       => [
			'option' => [
				'group'    => 'cedp_general',
				'type'     => 'string',
				'callback' => 'sanitize_textarea_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Copyright',
				'page'     => 'cedp',
				'section'  => 'footer',
				'type'     => 'textarea',
			]
		],
		'cedp_footer_logo'       => [
			'option' => [
				'group'    => 'cedp_general',
				'type'     => 'string',
				'callback' => '',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Logo',
				'page'     => 'cedp',
				'section'  => 'footer',
				'type'     => 'imageuploader',
			]
		],
		'cedp_contact_address'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Adresse',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_city'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_textarea_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'City',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_province'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Province',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_country'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Pays',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_zipcode'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Code Postal',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_email'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Courriel',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
		'cedp_contact_phone'       => [
			'option' => [
				'group'    => 'cedp_contact',
				'type'     => 'string',
				'callback' => 'sanitize_text_field',
				'default'  => null
			],
			'field'  => [
				'title'    => 'Téléphone',
				'page'     => 'cedp',
				'section'  => 'contact',
				'type'     => 'text',
			]
		],
	];

	static function initOptionPage() {
		self::registerSettings();
		self::addMenu();
		self::addSections();
		self::AddFields();
	}

	static function registerSettings() {
		foreach ( self::$settingData as $k => $v ) {
		    $option = $v['option'];
			register_setting(
				$option['group'],
				$k,
				[
					'type'     => $option['type'],
					'callback' => $option['callback'],
					'default'  => $option['default']
				]
			);
		}
	}

	static function addMenu() {
		add_menu_page(
			self::$menuData['pageTitle'],
			self::$menuData['menuTitle'],
			self::$menuData['capability'],
			self::$menuData['slug'],
			[ 'CedpSettings', self::$menuData['callback'] ]
		);
	}

	static function addSections() {
	    foreach (self::$sectionData as $k => $v){
		    add_settings_section(
			    $k,
			    $v['title'],
			    $v['callback'],
			    $v['page']
		    );
        }
	}

	static function addFields() {
		foreach ( self::$settingData as $k => $v ) {
		    $field = $v['field'];
		    add_settings_field(
		            $k,
                    $field['title'],
                    ['CedpSettings', 'render'.ucfirst($field['type'])],
                    $field['page'],
                    $field['section'],
                    ['name' => $k, 'type' => $field['type']]
            );
        }
	}

	static function renderOptionsPage() {
		?>
        <div class="wrap">
            <h1>CEDP Theme Options</h1>
            <form method="post">
				<?php
				do_settings_sections( 'cedp' );
				submit_button();
				?>
            </form>
        </div>
		<?php
	}

	static function renderText( $arg ) {
		?>
        <input type="text" name="<?= $arg['name'] ?>" value="<?= get_option($arg['name'], '') ?>" />
		<?php
	}

	static function renderTextarea( $arg ) {
	    ?>
		<textarea name="<?= $arg['name'] ?>" style="width:400px; height:200px"><?= get_option($arg['name'], '') ?></textarea>
        <?php
	}

	static function renderCheckbox( $arg ) {
		?>
        <input type="checkbox" name="<?= $arg['name'] ?>" <?php checked( 1,  get_option($arg['name'], '') ) ?> />
		<?php
	}

	static function renderImageuploader( $arg ) {
		?>
        <input type="text" name="<?= $arg['name'] ?>" readonly />
        <button onclick="event.preventDefault(); openFileUploader()">upload</button>
		<?php
	}

	static function save() {
		foreach ( self::$settingData as $k => $v ) {
		    $option = $v['option'];
		    $field = $v['field'];
		    $value = '';

		    switch ($field['type']){
                case 'textarea':
                    if(isset($_POST[$k])){
	                    $value = str_replace( '\\', '', $_POST[$k] );
                    }
                    break;
                case 'checkbox':
	                $value = isset($_POST[$k]);
	                break;
                default:
                    $value = $_POST[$k];
                    break;
            }
			if ( ! add_option( $k, $value ) ) {
				update_option( $k, $value );
			}
        }
	}
}

add_action( 'admin_menu', [ 'CedpSettings', 'initOptionPage' ] );
if(count($_POST) > 0 && isset($_POST['submit'])){
    CedpSettings::save();
}
