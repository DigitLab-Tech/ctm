<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open();	?>
		<header id="header" class="header" role="banner">
			<script type="text/javascript">
				window.onscroll = function() {stick()};
				var header = document.getElementById('header');
				var sticky = header.offsetTop;

				function stick(){
					if (window.pageYOffset > sticky) {
						header.classList.add("sticky");
					} else {
						header.classList.remove("sticky");
					}
				}

				function toggleMenu(){
					var menuToggleInput = document.getElementById('menuToggleInput');
					var menu = document.getElementById('menu');
					if(menuToggleInput.checked){
						menu.classList.add('active');
					}
					else{
						menu.classList.remove('active');
					}
				}
			</script>

			<div class="header-logo">
				<?php	twentytwenty_site_logo();?>
			</div>
			<div class="header-menu">
				  <div id="menuToggle">
				    <input id="menuToggleInput" type="checkbox" onclick="toggleMenu()" />
				    <span></span>
				    <span></span>
				    <span></span>
						<ul></ul>
				  </div>
			</div>
		</header>
		<div id="vanta-bg">
			<nav id='menu'>
				<ul>
					<li>services</li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</nav>
			<script>
				VANTA.NET({
					el: "#vanta-bg",
					mouseControls: true,
					touchControls: true,
					minHeight: 200.00,
					minWidth: 200.00,
					scale: 1.00,
					scaleMobile: 1.00,
					color: 0x88ca4e,
					backgroundColor: 0xffffff,
					points: 20.00,
					maxDistance: 14.00,
					spacing: 16.00,
					showDots: false
				})
			</script>
