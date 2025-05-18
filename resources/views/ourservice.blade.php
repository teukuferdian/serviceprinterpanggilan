
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Blitz Tech</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-white text-gray-900">

  <!-- Navbar sesuai versi awal -->
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
  <!-- <li><a href="{{ url('/about') }}" class="block hover:text-indigo-600">About</a></li> -->
  <li><a href="{{ url('/ourservice') }}" class="block hover:text-indigo-600">Our Service</a></li>
  <!-- <li><a href="{{ url('/contact') }}" class="block hover:text-indigo-600">Contact</a></li> -->
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

  </header>

  <!-- Hero Section -->
  <section class="pt-32 pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h1 class="text-4xl sm:text-5xl font-bold mb-4">
        Layanan Perbaikan & Sparepart Terpercaya
      </h1>
      <p class="text-lg text-gray-600 max-w-xl mx-auto mb-10">
        Solusi lengkap untuk kebutuhan perbaikan laptop, printer, dan komputer Anda.
      </p>
    </div>
  </section>

  
  <!-- Services -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6 grid gap-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    <!-- Perbaikan Laptop -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">laptop</span>
      <h3 class="text-xl font-semibold mb-2">Perbaikan Laptop</h3>
      <p class="text-gray-600 text-sm mb-4">Perbaikan berbagai masalah laptop, dari software hingga hardware.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Perbaikan Printer -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">print</span>
      <h3 class="text-xl font-semibold mb-2">Perbaikan Printer</h3>
      <p class="text-gray-600 text-sm mb-4">Jasa service printer dengan teknisi ahli dan bergaransi.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Sparepart Komputer -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">memory</span>
      <h3 class="text-xl font-semibold mb-2">Sparepart Komputer</h3>
      <p class="text-gray-600 text-sm mb-4">Kami menyediakan sparepart original dan berkualitas tinggi.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- CCTV -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">videocam</span>
      <h3 class="text-xl font-semibold mb-2">CCTV</h3>
      <p class="text-gray-600 text-sm mb-4">Kami menyediakan CCTV berkualitas tinggi dan pemasangan profesional.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Komputer Desktop -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">desktop_windows</span>
      <h3 class="text-xl font-semibold mb-2">Komputer Desktop</h3>
      <p class="text-gray-600 text-sm mb-4">Penyediaan dan perbaikan komputer desktop berbagai merek dan tipe.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Mesin Fotocopy -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">copy_all</span>
      <h3 class="text-xl font-semibold mb-2">Mesin Fotocopy</h3>
      <p class="text-gray-600 text-sm mb-4">Service dan penjualan mesin fotocopy untuk kebutuhan kantor Anda.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Printer Dot Matrix -->
    <div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
      <span class="material-icons text-indigo-600 text-6xl mb-4">dns</span>
      <h3 class="text-xl font-semibold mb-2">Printer Dot Matrix</h3>
      <p class="text-gray-600 text-sm mb-4">Layanan service khusus untuk printer dot matrix dan suku cadangnya.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

    <!-- Pembuatan Website Company Profile -->
<div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
  <span class="material-icons text-indigo-600 text-6xl mb-4">web</span>
  <h3 class="text-xl font-semibold mb-2">Pembuatan Website</h3>
  <p class="text-gray-600 text-sm mb-4">Jasa pembuatan website company profile profesional untuk bisnis Anda.</p>
  <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
    Hubungi Kami
  </a>
</div>

<!-- Isi Ulang Tinta Printer -->
<div class="p-6 border rounded-xl shadow hover:shadow-lg transition-all text-center">
 <span class="material-icons text-indigo-600 text-6xl mb-4">local_printshop</span>

  <h3 class="text-xl font-semibold mb-2">Pusat isi Ulang Tinta / Toner Printer </h3>
  <p class="text-gray-600 text-sm mb-4">Layanan isi ulang tinta printer cepat, hemat, dan bergaransi.</p>
  <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
    Hubungi Kami
  </a>
</div>



  </div>
</section>


  <!-- WhatsApp & Scroll -->
  <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 items-end">
    
    <!-- Scroll Up -->
    <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="bg-white p-2 rounded-full shadow hover:bg-gray-100" title="Kembali ke atas">
      <span class="material-icons text-gray-700">arrow_upward</span>
    </button>

    <!-- WhatsApp -->
    <a href="https://wa.me/6285715910571" target="_blank" title="Hubungi via WhatsApp"
       class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
      <span class="material-icons">whatsapp</span>
      WhatsApp
    </a>
  </div>

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
