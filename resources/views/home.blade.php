
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blitz Tech</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .gradient-bg {
      background: linear-gradient(to right, #667eea, #764ba2);
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Header Navigasi -->
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


  <!-- Hero Section -->
  <section class="relative bg-cover bg-center bg-no-repeat pt-36 pb-24 text-white" style="background-image: url('{{ asset('images/clients/bg.jpg') }}');">
  <div class="absolute inset-0 bg-black/60"></div> <!-- Overlay gelap agar teks tetap terbaca -->

  <div class="relative max-w-3xl mx-auto px-6 text-center">
    <h1 class="text-5xl font-extrabold">Selamat Datang di Layanan Kami</h1>
    <p class="mt-6 text-xl">
      Kami menyediakan solusi lengkap untuk kebutuhan perangkat teknologi Anda.<br>
      <strong class="text-yellow-300">JASA SERVICE SEJABODETABEK</strong>
    </p>

    <div class="mt-8 flex justify-center gap-4 flex-wrap">
      <a href="https://wa.me/6285715910571" target="_blank"
         class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
        Hubungi Kami
      </a>
      <a href="https://wa.me/6285715910571" target="_blank"
         class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
        Konsultasi
      </a>
    </div>
  </div>
</section>



<!-- About Section -->
<section class="pt-28 pb-16 text-center bg-gray-100">
  <h2 class="text-3xl sm:text-5xl font-bold">Mengapa Memilih Kami?</h2>
  <p class="mt-4 text-lg text-gray-600">Lebih dari 9 tahun pengalaman, layanan cepat dan terpercaya</p>
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

<!-- Features -->
<section class="max-w-7xl mx-auto grid gap-10 px-6 pb-20 lg:grid-cols-3">
  <!-- Teknisi Profesional -->
  <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-12 h-12 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
    <h3 class="text-xl font-semibold mb-2">Teknisi Profesional</h3>
    <p class="text-gray-600">Lebih dari 9 tahun pengalaman di bidang servis perangkat komputer, laptop, dan printer.</p>
  </div>

  <!-- Pengerjaan Cepat -->
  <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-12 h-12 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
    </svg>
    <h3 class="text-xl font-semibold mb-2">Pengerjaan Cepat</h3>
    <p class="text-gray-600">Pengerjaan dapat selesai di hari yang sama tanpa mengorbankan kualitas.</p>
  </div>

  <!-- Sparepart Berkualitas -->
  <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-12 h-12 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3a.75.75 0 01.75.75v1.005a7.49 7.49 0 012.5 0V3.75a.75.75 0 011.5 0v1.59a7.5 7.5 0 011.715 1.013l1.128-1.128a.75.75 0 111.061 1.06l-1.128 1.128a7.5 7.5 0 011.012 1.716h1.59a.75.75 0 010 1.5h-1.005a7.49 7.49 0 010 2.5H20.25a.75.75 0 010 1.5h-1.59a7.5 7.5 0 01-1.012 1.716l1.128 1.128a.75.75 0 11-1.061 1.06l-1.128-1.128a7.5 7.5 0 01-1.715 1.013v1.59a.75.75 0 01-1.5 0v-1.005a7.49 7.49 0 01-2.5 0v1.005a.75.75 0 01-1.5 0v-1.59a7.5 7.5 0 01-1.716-1.012l-1.128 1.128a.75.75 0 11-1.06-1.061l1.128-1.128A7.5 7.5 0 014.75 13.5H3.75a.75.75 0 010-1.5h1.005a7.49 7.49 0 010-2.5H3.75a.75.75 0 010-1.5h1.59a7.5 7.5 0 011.012-1.716L5.223 5.472a.75.75 0 111.06-1.061l1.128 1.128A7.5 7.5 0 019.75 4.755V3.75A.75.75 0 019.75 3z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
    </svg>
    <h3 class="text-xl font-semibold mb-2">Sparepart Berkualitas</h3>
    <p class="text-gray-600">Menggunakan sparepart original dan bergaransi untuk ketahanan jangka panjang.</p>
  </div>
</section>



  <!-- Our Services -->
 <section id="services" class="pt-32 pb-20 bg-white text-center">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-4xl sm:text-5xl font-bold mb-4">Layanan Perbaikan & Sparepart Terpercaya</h2>
    <p class="text-lg text-gray-600 max-w-xl mx-auto mb-10">
      Solusi lengkap untuk kebutuhan perbaikan laptop, printer, dan komputer Anda.
    </p>
    <!-- <a href="/ourservice" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">
      View More
    </a> -->
  </div>

  <!-- Daftar Layanan -->
  <div class="max-w-7xl mx-auto px-6 mt-16 grid gap-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

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

    <!-- Pembuatan Website -->
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
      <h3 class="text-xl font-semibold mb-2">Pusat Isi Ulang Tinta / Toner Printer</h3>
      <p class="text-gray-600 text-sm mb-4">Layanan isi ulang tinta printer cepat, hemat, dan bergaransi.</p>
      <a href="https://wa.me/6285715910571" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full text-sm">
        Hubungi Kami
      </a>
    </div>

  </div>
</section>


  <!-- Klien Kami -->
  <section class="py-20 px-4 bg-gray-100">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-10">Klien Kami</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center justify-center">
      
      <!-- Pertamina -->
      <img src="{{ asset('images/clients/pertamina.jpeg') }}" class="h-16 mx-auto object-contain" alt="Pertamina">

      
      <!-- Telkom Indonesia -->
      <img src="{{ asset('images/clients/telkom-indonesia.jpg') }}" class="h-16 mx-auto object-contain" alt="Telkom indonesia">
      
      <!-- Garuda Indonesia -->
      <img src="{{ asset('images/clients/Garuda.jpg') }}" class="h-16 mx-auto object-contain" alt="Garuda">
      
      <!-- Indofood -->
      <img src="{{ asset('images/clients/Indofood.png') }}" class="h-16 mx-auto object-contain" alt="Pertamina">
      
      <!-- BCA -->
      <img src="{{ asset('images/clients/BCA.jpg') }}" class="h-16 mx-auto object-contain" alt="Pertamina">

      <!-- Shopee -->
      <img src="{{ asset('images/clients/Shopee-logo.jpg') }}" class="h-16 mx-auto object-contain" alt="Pertamina">
      
      <!-- Tokopedia -->
      <img src="{{ asset('images/clients/tokopedia.png') }}" class="h-16 mx-auto object-contain" alt="Pertamina">
      <!-- ASUS -->
      <img src="{{ asset('images/clients/BPJS.png') }}" class="h-16 mx-auto object-contain" alt="Pertamina">
      
      
      <!-- ASUS -->
      <img src="{{ asset('images/clients/BNI.png') }}" class="h-16 mx-auto object-contain" alt="Pertamina">

      <!-- Lenovo -->
      <img src="{{ asset('images/clients/ojk.png') }}" class="h-16 mx-auto object-contain" alt="Pertamina">

    </div>
  </div>
</section>

<!-- Ulasan Pelanggan -->
<section class="bg-white py-20 px-4">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-12">Apa Kata Klien Kami?</h2>
    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
      
      <!-- ULASAN -->
      @foreach ([
        ['img' => 'indo1.png', 'nama' => 'Riko Setiawan', 'profesi' => 'Mahasiswa', 'ulasan' => 'Printer saya awalnya rusak , setelah diperbaiki oleh teknisi Blitz, sekarang kembali normal. Terima kasih!'],
        ['img' => 'indo2.jpeg', 'nama' => 'Joko Anwar', 'profesi' => 'Guru SD', 'ulasan' => 'Teknisi Blitz Tech sangat profesional dan memberikan solusi terbaik untuk laptop saya yang lemot.'],
        ['img' => 'indo3.jpeg', 'nama' => 'Galih Permana', 'profesi' => 'Fotografer', 'ulasan' => 'Saya kira data saya hilang, tapi Blitz Tech berhasil recovery semuanya. Terima kasih banyak!'],
        ['img' => 'indo4.jpeg', 'nama' => 'Muhammad Ahmad', 'profesi' => 'Pegawai Bank', 'ulasan' => 'Sangat puas dengan hasil servisnya. Laptop saya kini tidak cepat panas lagi.'],
        ['img' => 'indo5.jpg', 'nama' => 'Wahyu Nugroho', 'profesi' => 'Desainer Grafis', 'ulasan' => 'Blitz Tech selalu jadi andalan saya kalau laptop bermasalah. Servis cepat dan harga jujur.'],
        ['img' => 'indo6.jpeg', 'nama' => 'Dian Ayu Lestari', 'profesi' => 'Owner Online Shop', 'ulasan' => 'Sudah dua kali servis di Blitz Tech, selalu puas dengan hasil dan pelayanannya. Highly recommended!'],
      ] as $client)
        <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition">
          <p class="text-gray-600 italic mb-4">“{{ $client['ulasan'] }}”</p>
          <div class="flex items-center space-x-4 mt-4">
            <img src="{{ asset('images/clients/' . $client['img']) }}" class="w-12 h-12 rounded-full object-cover" alt="{{ $client['nama'] }}">
            <div class="text-left">
              <p class="font-semibold text-gray-800">{{ $client['nama'] }}</p>
              <p class="text-sm text-gray-500">{{ $client['profesi'] }}</p>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>




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


  <!-- Kontak -->
  <section id="contact" class="py-20 px-6 bg-gradient-to-tr from-indigo-600 to-blue-500 text-white text-center">
    <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
    <p class="mb-6 text-lg">Untuk konsultasi atau perbaikan, hubungi kami melalui WhatsApp.</p>
    <a href="https://wa.me/6285715910571" target="_blank" class="bg-white text-green-600 font-medium px-6 py-3 rounded-full shadow hover:bg-gray-100 transition">
      Chat via WhatsApp
    </a>
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

  <!-- Scroll to Top Button -->
  <div class="fixed bottom-6 right-6 z-50">
    <button onclick="scrollToTop()" class="bg-white border shadow-md p-3 rounded-full hover:bg-gray-100 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
      </svg>
    </button>
  </div>

  <script>
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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


</body>
</html>
