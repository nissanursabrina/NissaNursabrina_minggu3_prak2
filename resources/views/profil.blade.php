<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profil</title>
  <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
  <link href="{{ asset('blog/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog/css/templatemo-xtra-blog.css') }}" rel="stylesheet">
  <!--
    
TemplateMo 553 Xtra Blog
https://templatemo.com/tm-553-xtra-blog
-->
</head>

<body>
  <header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
      <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="tm-site-header">
        <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
        <h1 class="text-center">My Blog</h1>
      </div>
      <nav class="tm-nav" id="tm-nav">
        <ul>
          <li class="tm-nav-item"><a href="http://127.0.0.1:8000/home" class="tm-nav-link">
              <i class="fas fa-home"></i>
              MyBeautifulBlog
            </a></li>
        </ul>
      </nav>
      <p class="tm-mb-80 pr-5 text-white">
      If you've ever wondered whether you should have a blog of your own, please do it. I know there's something you're passionate about, whether it's makeup, fashion, fitness, or whatever else you're in love with. Follow your creative dreams. You never know where they could take you!
      </p>
    </div>
  </header>
  <div class="container-fluid">
    <main class="tm-main">
      <!-- Search form -->
      <div class="row tm-row">
        <div class="col-12">
          <form method="GET" class="form-inline tm-mb-80 tm-search-form">
            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
            <button class="tm-search-button" type="submit">
              <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="row tm-row tm-mb-45">
        <div class="col-12">
          <hr class="tm-hr-primary tm-mb-55">
        </div>
      </div>
      <div class="row tm-row tm-mb-40">
        <div class="col-12">
          <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Tentang Blog Ini</h2>
            <p>
            <h1>Hay everyone</h1>
            Namaku Nissa Nursabrina, dari kecil aku bermimpi menjadi seorang partner dari para suksesor. 
            Mungkin terdengar lucu, tapi itulah cita-citaku. Jadi mulai saat ini, aku mencoba untuk menambah 
            skill untuk mencapai cita-citaku. Sekarang umurku 19 tahun, aku semester 3 dari Politeknik Negeri Malang.
            Pilihan jurusan adalah kemauanku sendiri, karena impian itu harus dijalani dari jalan yang berliku
            menggunakan kaki kita sendiri. Semoga perkenalan ini tidak membosankan, terimakasih sudah membaca. :3<br>
            </p>
          </div>
        </div>
      </div>
      <div class="row tm-row tm-mb-120">
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Sosial Media</h2>
            <p class="mb-0 tm-line-height-short">
              <li>Instagram: @nissanursabrina__</li>
              <li>WhatsApp : 085707503180</li>
            </p>
          </div>
        </div>
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Biodata</h2>
            <p class="mb-0 tm-line-height-short">
            <ol>
              <li>Nama : Nissa Nursabrina</li>
              <li>TTL : Kediri, 10 Januari 2002</li>
              <li>Jenis Kelamin: Perempuan </li>
              <li>Alamat : Wates, Kediri</li>
            </ol>
            </p>
          </div>
        </div>
        <div class="col-lg-4 tm-about-col">
          <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60">
              <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
            </div>
            <h2 class="mb-3 tm-color-primary tm-post-title">Pendidikan</h2>
            <p class="mb-0 tm-line-height-short">
            <ul>
              <li>SMA Negeri 1 Wates --> lulusan 2020</li>
              <li>Politeknik Negeri Malang --> Sekarang</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
        <div class="col-md-6 col-12 tm-color-gray tm-copyright">
          Copyright 2021 Nissa Nursabrina
        </div>
      </footer>
    </main>
  </div>
  <script src="{{ asset('custom/js/jquery.min.js') }}"></script>
  <script src="{{ asset('custom/js/templatemo-script.js') }}"></script>
</body>

</html>