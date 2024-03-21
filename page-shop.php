<?php get_header() ?>

<!-- HomeHero -->
<section class="pt-40 pb-12 bg-linen lg:pt-52 lg:pb-24">
  <div class="wrapper lg:max-w-6xl">
    <!-- Columns -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-6">
      <!-- Column -->
      <div class="lg:col-span-8 xl:col-span-7">
        <!-- Heading -->
        <h2 class="section-heading">
          Подарочные наборы
          <br>к 8 марта
        </h2>
        <!-- Image (mobile only) -->
        <figure class="mt-24 w-[280px] aspect-[5/7] relative mx-auto group lg:hidden">
          <span class="absolute inset-0 duration-200 border-2 border-new-york-pink/20 rounded-2xl -rotate-6 group-hover:rotate-0"></span>
          <img src="<?= get_template_directory_uri() ?>/assets/images/bonbons-hero-image.webp" alt="Кондитерская BonBons г. Солигорск" class="absolute inset-0 object-cover object-center w-full h-full duration-200 rounded-2xl rotate-6 group-hover:rotate-0">
        </figure>
        <!-- Subheading -->
        <p class="mt-12 text-2xl text-zinc-500 lg:mt-40">
          Любимые десерты
          <br>для любимых людей
        </p>
        <!-- GoDownBottun -->
        <a href="#products" class="grid w-24 mx-auto mt-12 font-bold tracking-wide text-center text-white rounded-full aspect-square bg-new-york-pink place-items-center sm:mx-0 lg:w-44 lg:text-2xl">
          ВЫБРАТЬ
          <br>НАБОР
        </a>
      </div>
      <!-- Column -->
      <div class="lg:col-span-4 xl:col-span-5">
        <!-- Image (desktop only) -->
        <figure class="hidden w-full aspect-[5/7] relative group ml-auto lg:block">
          <span class="absolute inset-0 duration-200 border-2 border-new-york-pink/20 rounded-2xl -rotate-6 group-hover:rotate-0"></span>
          <img src="<?= get_template_directory_uri() ?>/assets/images/bonbons-hero-image.webp" alt="Кондитерская BonBons г. Солигорск" class="absolute inset-0 object-cover object-center w-full h-full duration-200 rounded-2xl rotate-6 group-hover:rotate-0">
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- Products -->
<section id="products" class="pt-32 pb-24">
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