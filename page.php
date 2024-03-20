<?php get_header() ?>

<section class="mt-24">
  <div class="wrapper">
    <h1 class="text-5xl font-semibold text-center text-red-500">
      page
    </h1>
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