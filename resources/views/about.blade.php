
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Blitz Tech</title>
  @vite('resources/css/app.css')
  <link rel="icon" href="/favicon.ico" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <meta name="description" content="Teknisi handal dengan pengalaman lebih dari 9 tahun. Servis cepat, garansi, dan sparepart berkualitas." />
</head>
<body class="bg-white text-gray-900">
  <!-- Header -->
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


  <!-- Hero Section -->
  <section class="pt-28 pb-16 text-center bg-gray-50">
    <h1 class="text-3xl sm:text-5xl font-bold">Mengapa Memilih Kami?</h1>
    <p class="mt-4 text-lg text-gray-600">Lebih dari 9 tahun pengalaman, layanan cepat dan terpercaya</p>
  </section>

  <!-- Features -->
  <section class="max-w-7xl mx-auto grid gap-10 px-6 pb-20 lg:grid-cols-3">
    <!-- Card 1 -->
    <div class="rounded-xl border border-gray-200 p-8 shadow hover:shadow-lg transition">
      <svg class="h-12 w-12 text-indigo-600 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-3.3 0-6 2.7-6 6h12c0-3.3-2.7-6-6-6z" /></svg>
      <h3 class="text-xl font-semibold mb-2">Teknisi Profesional</h3>
      <p class="text-gray-600">Lebih dari 9 tahun pengalaman di bidang servis perangkat komputer, laptop, dan printer.</p>
    </div>
    <!-- Card 2 -->
    <div class="rounded-xl border border-gray-200 p-8 shadow hover:shadow-lg transition">
      <svg class="h-12 w-12 text-indigo-600 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v2H4zm0 14h16v2H4zM4 9h16v6H4z" /></svg>
      <h3 class="text-xl font-semibold mb-2">Pengerjaan Cepat</h3>
      <p class="text-gray-600">Pengerjaan dapat selesai di hari yang sama tanpa mengorbankan kualitas.</p>
    </div>
    <!-- Card 3 -->
    <div class="rounded-xl border border-gray-200 p-8 shadow hover:shadow-lg transition">
      <svg class="h-12 w-12 text-indigo-600 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" /></svg>
      <h3 class="text-xl font-semibold mb-2">Sparepart Berkualitas</h3>
      <p class="text-gray-600">Menggunakan sparepart original dan bergaransi untuk ketahanan jangka panjang.</p>
    </div>
  </section>
  <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base/7 text-gray-600">Berpengalaman selama</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">9+ Years</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base/7 text-gray-600">Service Complete</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">9.999+</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base/7 text-gray-600">Client</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">5.000+</dd>
      </div>
    </dl>
  </div>
</div>

  

  <!-- CTA Section -->
  <section class="bg-indigo-600 py-12 text-white text-center">
    <h2 class="text-2xl sm:text-3xl font-semibold mb-4">Siap memperbaiki perangkat Anda hari ini?</h2>
    <a href="https://wa.me/6285715910571" class="inline-block mt-4 bg-white text-indigo-600 font-semibold px-6 py-3 rounded-full hover:bg-gray-100 transition">Hubungi via WhatsApp</a>
  </section>

  <!-- Floating Buttons -->
  <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50">
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Scroll ke atas" class="bg-white shadow rounded-full p-2 hover:bg-gray-100">
      <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" /></svg>
    </button>
    <a href="https://wa.me/6285715910571" target="_blank" title="Chat via WhatsApp" class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow">
      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20.52 3.48a12.18 12.18 0 00-17.24 0 12.07 12.07 0 00-2.8 12.74l-1.42 5.26a1 1 0 001.22 1.21l5.26-1.42a12.1 12.1 0 0012.74-2.8 12.18 12.18 0 000-17.24zm-5.4 13.46c-.45.44-1.2.96-2.36.96a9.33 9.33 0 01-4.13-1.17 10.43 10.43 0 01-3.62-3.62c-.82-1.3-.98-2.4-1.17-4.13-.1-1.16.52-1.91.96-2.36a.82.82 0 01.57-.24c.17 0 .33.03.48.08l2.47 1a.83.83 0 01.47.5c.07.18.1.38.04.58l-.6 2.11c-.04.15 0 .3.1.4l2.83 2.83a.45.45 0 00.4.1l2.11-.6a.83.83 0 01.58.04c.2.07.36.2.5.47l1 2.47c.1.22.14.46.08.69a.82.82 0 01-.25.57z"/>
      </svg>
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
