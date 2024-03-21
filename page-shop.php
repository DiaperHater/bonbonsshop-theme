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
<section id="products" class="pt-32 pb-12">
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

<!-- Info -->
<section id="animated-bg" class="py-24">
  <div class="wrapper">
    <p class="text-2xl font-semibold tracking-wider text-zinc-700">
      Пожалуйста, обратите внимание, мы осуществляем бронь наборов по предварительной 100% предоплате. После оформления заказа вы автоматически будете перенаправлены на страницу платежной системы.
    </p>
    <p class="mt-6 text-2xl font-semibold tracking-wider text-zinc-700">
      Если у вас возникнут любые трудности с оплатой заказа, свяжитесь с нами по телефону <a href="tel:+375257377530" class="hover:text-rosy-brown">+375 (25) 737-75-30</a>. При отмене заказа, предоплата не возвращается.
    </p>
  </div>
</section>
<script src="<?= get_template_directory_uri() ?>/assets/js/three.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/vanta.birds.min.js"></script>
<script>
  VANTA.BIRDS({
    el: "#animated-bg",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    backgroundColor: 0xffffff,
    color1: 0xcd3f3f,
    color2: 0xca7575,
    birdSize: 1.70,
    wingSpan: 24.00,
    quantity: 4.00
  })
</script>

<!-- DeliveryInfo -->
<section class="py-24">
  <div class="wrapper">
    <!-- Heading -->
    <h2 class="section-heading">
      Доставка
    </h2>
    <!-- Text -->
    <p class="mt-8 text-2xl text-zinc-500">
      Вы можете самостоятельно забрать свой набор у <a href="#contacts" class="hover:text-rosy-brown text-new-york-pink">нас</a> или заказать доставку до
      адреса
      <br>Доставка наборов работает с 10:00 до 20:00
    </p>
    <!-- Items -->
    <ul class="mt-12">
      <li class="flex items-center justify-between p-6 mt-6 border-4 border-opacity-50 rounded-2xl border-new-york-pink">
        <span class="w-4/12 mr-4 text-xl font-bold md:text-3xl text-new-york-pink/90">
          5 Рублей
        </span>
        <span class="w-8/12 text-lg font-semibold md:text-2xl text-zinc-700">
          По городу Солигорску
        </span>
      </li>
      <li class="flex items-center justify-between p-6 mt-6 border-4 border-opacity-50 rounded-2xl border-new-york-pink">
        <span class="w-4/12 mr-4 text-xl font-bold md:text-3xl text-new-york-pink/90">
          10 Рублей
        </span>
        <span class="w-8/12 text-lg font-semibold md:text-2xl text-zinc-700">
          Поместье
        </span>
      </li>
      <li class="flex items-center justify-between p-6 mt-6 border-4 border-opacity-50 rounded-2xl border-new-york-pink">
        <span class="w-4/12 mr-4 text-xl font-bold md:text-3xl text-new-york-pink/90">
          15 Рублей
        </span>
        <span class="w-8/12 text-lg font-semibold md:text-2xl text-zinc-700">
          Старобин
        </span>
      </li>
      <li class="flex items-center justify-between p-6 mt-6 border-4 border-opacity-50 rounded-2xl border-new-york-pink">
        <span class="w-4/12 mr-4 text-xl font-bold md:text-3xl text-new-york-pink/90">

        </span>
        <span class="w-8/12 text-lg font-semibold md:text-2xl text-zinc-700">
          Другие районы и пригород рассчитываются индивидуально
        </span>
      </li>
    </ul>
  </div>
</section>

<?php get_footer() ?>