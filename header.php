<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START Fonts -->
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <!-- END Fonts -->

  <?php wp_head() ?>

  <title><?= get_the_title() ?></title>
</head>

<body>
  <!-- Header -->
  <header class="fixed top-0 left-0 z-50 w-full text-white backdrop-blur-sm" x-data="mobileMenu">
    <div class="wrapper">
      <!-- Inner -->
      <nav class="grid items-center grid-cols-2 py-3 lg:grid-cols-3">
        <!-- Logo -->
        <a href="/" class="mr-12 text-4xl font-bold leading-none tracking-wide hover:text-rosy-brown text-new-york-pink">
          BonBons
        </a>
        <!-- Lable -->
        <div class="hidden lg:flex lg:items-center lg:gap-x-4 lg:justify-self-center">
          <span href="#about" class="text-xl font-semibold tracking-wide text-center cursor-default text-new-york-pink">
            Кондитерская в
            <br>Солигорке
          </span>
        </div>
        <!-- Buttons -->
        <div class="flex items-center justify-self-end gap-x-4">
          <!-- Burger  -->
          <button class="burger w-[36px] flex flex-col gap-y-2 group lg:hidden" :class="open ? 'active' : ''" @click="toggle">
            <div class="w-full h-1 bg-new-york-pink rounded-lg duration-200 origin-top-right group-[.active]:-rotate-45 group-hover:bg-rosy-brown"></div>
            <div class="w-full h-1 bg-new-york-pink rounded-lg duration-200 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible group-hover:bg-rosy-brown"></div>
            <div class="w-full h-1 bg-new-york-pink rounded-lg duration-200 origin-bottom-right group-[.active]:rotate-45 group-hover:bg-rosy-brown"></div>
          </button>
          <div class="">
            <a href="tel:+375257377530" class="hidden lg:font-semibold lg:text-new-york-pink lg:block lg:text-2xl hover:text-rosy-brown">
              +375 (25) 737-75-30
            </a>
            <?php
            if (!is_cart()) {
            ?>
              <a href="/cart/" id="cart-count" class="flex mt-1 font-bold tracking-wider gap-2text-lg text-new-york-pink hover:text-rosy-brown">
                <?php
                if (!WC()->cart->is_empty()) {
                ?>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                  </svg>
                  <?= WC()->cart->get_total() ?>
                <?php
                }
                ?>
              </a>
            <?php
            }
            ?>
          </div>
        </div>
      </nav>
    </div>
    <!-- MobileMenu -->
    <nav class="mobile-menu absolute top-full w-full h-[100vh] overflow-auto bg-rosy-brown bg-opacity-90 duration-200 lg:hidden" :class="open ? 'left-0' : 'left-full'" @click="toggle">
      <div class="wrapper">
        <!-- Inner -->
        <div class="flex flex-col pb-40 gap-y-16 pt-14">
          <!-- Links -->
          <div class="flex flex-col gap-y-4">
            <span class="text-3xl font-semibold tracking-wide text-center text-white">
              Кондитерская в
              <br>Солигорке
            </span>
          </div>
          <!-- Contact -->
          <a href="tel:+375257377530" class="self-center text-2xl font-semibold">
            +375 (25) 737-75-30
          </a>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('mobileMenu', () => ({
        open: false,

        toggle() {
          this.open = !this.open
        }
      }))
    })
  </script>

  <main class="bonbonsshop">