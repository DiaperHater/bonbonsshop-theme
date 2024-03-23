<?php get_header() ?>

<section class="pt-32 pb-12 sm:pt-40">
  <div class="wrapper">
    <!-- Heading -->
    <h2 class="mb-12 section-heading">
      <?= get_the_title() ?>
    </h2>

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