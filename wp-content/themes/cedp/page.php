<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="https://kit.fontawesome.com/648a0e746c.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>
<?php if(get_option('cedp_vanta_background')) : ?>
  <div id="vanta-bg">
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
  </div>
<?php endif ; ?>
  <div class="container flex column center vstretch">
    <header class="header sticky">
      <?php get_header(); ?>
    </header>
    <div class="container">
        <?php do_action('cedp_render_content'); ?>
    </div>
    <footer class="footer">
      <?php get_footer(); ?>
    </footer>
  </div>
    <script>
        AOS.init();
    </script>
</body>
</html>
