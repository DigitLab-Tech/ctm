<?php
  $headline = get_option('cedp_punch_line', '');
  if(!empty($headline)){
    add_action('cedp_render_headline', 'cedp_render_headline');
  }

  function cedp_render_headline(){
    $headline = get_option('cedp_punch_line', ''); ?>
    <?php if(!empty($headline)) : ?>
      <div class='headline-container' data-aos="fade-down" data-aos-once="true">
        <div class='content' data-aos="fade-down" data-aos-once="true">
            <div><h1><?= $headline ?></h1></div>
        </div>
      </div>
    <?php endif; ?><?php
  }
?>
