<?php get_header() ?>

<?php

$me = "valery";
?>

<section class="max-w-4xl px-12 mx-auto mt-24" x-data="{ open: false }">
  <h1 class="text-5xl font-semibold text-center text-red-500">
    <span x-show="open">Bonbonsshoptheme is in da house!</span>
  </h1>
  <img @click="open = !open" @click.outside="open = false" src=" <?= get_template_directory_uri() ?>/assets/images/me.jpg" alt="Me" class="max-w-xl mx-auto mt-12 rounded-lg">
</section>

<?php get_footer() ?>