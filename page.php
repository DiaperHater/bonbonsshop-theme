<?php get_header() ?>

<section class="py-24 md:py-32">
  <div class="wrapper">
    <div class="max-w-3xl mx-auto prose prose-lg prose-h2:text-new-york-pink">

      <?php

      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_content();
        }
      }

      ?>
    </div>
  </div>
</section>

<?php get_footer() ?>