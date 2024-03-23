<?php get_header() ?>

<section class="py-24 md:py-32">
  <div class="wrapper">
    <?php

    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }

    ?>
  </div>
</section>

<?php get_footer() ?>