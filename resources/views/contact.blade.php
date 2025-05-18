<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
 <title>Blitz Tech</title>
</head>
<body class="bg-gray-50 text-gray-800">
<!-- Header -->
<header class="fixed inset-x-0 top-0 z-50 bg-white shadow-sm">
  <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
    <!-- Logo -->
    <div class="flex justify-start">
  <img src="{{ asset('images/clients/logo.png') }}" class="h-16 object-contain" alt="Pertamina">
</div>

    <!-- Toggle Button -->
    <button id="menu-toggle" class="lg:hidden text-indigo-600 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Menu Items -->
    <ul id="menu" class="hidden lg:flex flex-col lg:flex-row absolute lg:static top-full left-0 w-full lg:w-auto bg-white lg:bg-transparent px-6 lg:px-0 py-4 lg:py-0 space-y-4 lg:space-y-0 lg:space-x-8 font-medium shadow-md lg:shadow-none">
  <li><a href="{{ url('/') }}" class="block hover:text-indigo-600">Home</a></li>
  <li><a href="{{ url('/about') }}" class="block hover:text-indigo-600">About</a></li>
  <li><a href="{{ url('/ourservice') }}" class="block hover:text-indigo-600">Our Service</a></li>
  <li><a href="{{ url('/contact') }}" class="block hover:text-indigo-600">Contact</a></li>
</ul>
  </nav>
</header>

<!-- JavaScript -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
  });
</script>


  <!-- Contact Page -->
  <section class="pt-32 pb-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
      <p class="text-lg text-gray-600 mb-10">
        Kami siap membantu Anda melalui berbagai saluran berikut.
      </p>

      <!-- Sosial Media -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
        <!-- WhatsApp -->
        <a href="https://wa.me/6285715910571" target="_blank"
          class="flex items-center gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md">
          <i class="fab fa-whatsapp text-green-500 text-4xl"></i>
          <div>
            <h3 class="font-semibold">WhatsApp</h3>
            <p class="text-sm text-gray-600">+625715910571</p>
          </div>
        </a>

        <!-- Instagram
        <a href="https://instagram.com/namatoko" target="_blank"
          class="flex items-center gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md">
          <i class="fab fa-instagram text-pink-500 text-4xl"></i>
          <div>
            <h3 class="font-semibold">Instagram</h3>
            <p class="text-sm text-gray-600">@Blitz Tech</p>
          </div>
        </a>

        Facebook
        <a href="https://facebook.com/namatoko" target="_blank"
          class="flex items-center gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md">
          <i class="fab fa-facebook-f text-blue-600 text-4xl"></i>
          <div>
            <h3 class="font-semibold">Facebook</h3>
            <p class="text-sm text-gray-600">@Blitz Tech</p>
          </div>
        </a>

        TikTok
        <a href="https://tiktok.com/@namatoko" target="_blank"
          class="flex items-center gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md">
          <i class="fab fa-tiktok text-black text-4xl"></i>
          <div>
            <h3 class="font-semibold">TikTok</h3>
            <p class="text-sm text-gray-600">@Blitz Tech</p>
          </div>
        </a>

        <!-- Email -->
        <!-- <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow">
          <i class="fas fa-envelope text-red-500 text-4xl"></i>
          <div>
            <h3 class="font-semibold">Email</h3>
            <p class="text-sm text-gray-600">@Blitz Tech</p>
          </div>
        </div> -->

        <!-- Jam Operasional -->
        <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow">
          <i class="fas fa-clock text-indigo-600 text-4xl"></i>
          <div>
            <h3 class="font-semibold">Jam Operasional</h3>
            <p class="text-sm text-gray-600">Senin - Minggu: 24 Jam</p>
          </div>
        </div>
      </div> 

      <!-- Lokasi -->
      <div class="mt-16">
        <h2 class="text-2xl font-semibold mb-4">Lokasi Kami</h2>
        <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg">
          <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.152752169235!2d106.7770942757595!3d-6.24337096122452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f112bca19027%3A0x2cc3e1f0324bb3b4!2sJl.%20Pondok%20Pinang%20V%20No.89%2C%20Pondok%20Pinang%2C%20Kec.%20Kby.%20Lama%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012310!5e0!3m2!1sid!2sid!4v1715930502757!5m2!1sid!2sid" 
  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>

        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
      <p>&copy; 2025 Blitz Tech. All rights reserved.</p>
      <div class="mt-4 md:mt-0 space-x-4">
        <a href="#" class="hover:text-indigo-400">Privacy</a>
        <a href="#" class="hover:text-indigo-400">Terms</a>
        <a href="#" class="hover:text-indigo-400">Contact</a>
      </div>
    </div>
  </footer>
</body>

</html>