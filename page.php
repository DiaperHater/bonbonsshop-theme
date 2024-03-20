<?php get_header() ?>

<section class="max-w-xs min-[420px]:max-w-xl px-4 mx-auto mt-24 lg:max-w-5xl md:px-8 lg:px-12">
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
</section>

<?php get_footer() ?>