<!-- Contacts -->
<section id="contacts" class="pt-32 pb-12 border-b">
  <div class="wrapper">
    <!-- Columns -->
    <div class="lg:grid lg:grid-cols-2">
      <!-- Column -->
      <div class="">
        <h2 class="section-heading">
          Контакты
        </h2>
        <address class="mt-12 text-xl not-italic">
          Минская область, Солигорск,
          <br>Набережная улица, 4
        </address>
        <p class="mt-6 text-xl not-italic">
          Ежедневно 9:00 - 20:00
        </p>
        <a href="tel:+375257377530" class="block mt-12 text-xl text-new-york-pink">
          +375 (25) 737-75-30
        </a>
        <a href="mailto:be_sweet_shop@mail.ru" class="block mt-2 text-xl text-new-york-pink">
          be_sweet_shop@mail.ru
        </a>
        <a href="https://www.instagram.com/bonbons_pasticciere/" target="_blank" class="block mt-2 text-xl text-new-york-pink">
          @bonbons_pasticciere
        </a>
      </div>
      <!-- Column -->
      <div class="lg:w-[50vw]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9652.19596457293!2d27.5536472!3d52.7854247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d831f1397c1765%3A0xdcc2f31e759f3463!2zQmUgU3dlZXQg0JzQsNCz0LDQt9C40L0g0LTQu9GPINC60L7QvdC00LjRgtC10YDQsCDQmCDQmtC-0L3QtNC40YLQtdGA0YHQutCw0Y8gQk9OQk9OUyDQodC-0LvQuNCz0L7RgNGB0Lo!5e0!3m2!1sen!2sby!4v1710965574780!5m2!1sen!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full mt-12 lg:mt-0"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-16">
  <div class="wrapper">
    <!-- Columns -->
    <div class="sm:grid sm:grid-cols-2 sm:gap-12">
      <!-- Column -->
      <div class="">
        <!-- Logo -->
        <a href="/" class="block mb-12 mr-12 text-4xl font-bold leading-none tracking-wide hover:text-rosy-brown text-new-york-pink">
          BonBons
        </a>
        <a href="#" class="block mt-2 font-light text-zinc-400 hover:text-rosy-brown">
          Правовая информация
        </a>
        <a href="#" class="block mt-2 font-light text-zinc-400 hover:text-rosy-brown">
          Способы оплаты
        </a>
        <a href="#" class="block mt-2 font-light leading-tight text-zinc-400 hover:text-rosy-brown">
          Политика обработки
          <br>персональных данных
        </a>
        <a href="#" class="block mt-2 font-light text-zinc-400 hover:text-rosy-brown">
          Публичная оферта
        </a>
        <span class="block mt-6 font-light text-zinc-400">
          © <?= date("Y") ?> Кондитерская "BONBONS" г.&nbsp;Солигорск
        </span>
      </div>
      <!-- Column -->
      <div class="mt-12 sm:mt-0 sm:justify-self-end">
        <h3 class="text-xl font-bold text-zinc-500">
          Связаться с нами
        </h3>
        <a href="tel:+375257377530" class="block mt-2 font-light text-zinc-400 hover:text-rosy-brown">
          +375 (25) 737-75-30
        </a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</main>
</body>

</html>