<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas pertemuan 5 linktree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* =====body===== */
    body {
      background-color: #c9bbb0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 2rem 1rem;
    }

    /* =====card utama===== */
    .card-lt {
      width: 100%;
      max-width: 28rem;
      border-radius: 1.8rem;
      padding: 1.5rem 1.2rem 2rem;
      position: relative;
      overflow: hidden;
      background-image: url("assets/img/silk-bg.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

      box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.08);
    }

    /* =====header===== */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .header-right {
      display: flex;
      gap: 0.6rem;
    }

    .h-circle {
      width: 2.2rem;
      height: 2.2rem;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 0.9rem;
      color: #5d4a42;
      position: relative;
      cursor: pointer;
    }

    /* =====profile===== */
    .profile {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .profile img {
      width: 5rem;
      height: 5rem;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 0.8rem;
      border: 0.15rem solid rgba(93, 74, 66, 0.25);
    }

    .profile h4 {
      font-family: "Open Sans", sans-serif;
      font-weight: 600;
      font-size: 1.2rem;
      color: #5d4a42;
      margin-bottom: 0.3rem;
    }

    .profile p {
      font-family: "Open Sans", sans-serif;
      font-size: 0.85rem;
      font-weight: 500;
      color: #7a645a;
      margin-bottom: 1rem;
    }

    /* =====sosmed===== */
    .sosmed a {
      color: #5d4a42;
      font-size: 1.2rem;
      margin: 0 0.4rem;
      transition: transform 0.2s;
      display: inline-block;
    }

    .sosmed a:hover {
      transform: scale(1.2);
    }

    /* =====tombol link===== */
    .tombol-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.6rem 0.9rem;
      border-radius: 999rem;
      border: 0.08rem solid rgba(93, 74, 66, 0.35);
      background: rgba(255, 255, 255, 0.22);
      color: #5d4a42;
      margin-bottom: 0.7rem;
      text-decoration: none;
      transition: background 0.2s;
      outline: none;
    }

    .tombol-link:hover,
    .tombol-link:focus {
      background: rgba(150, 120, 105, 0.3);
      color: #5d4a42;
      text-decoration: none;
      outline: none;
    }

    /* =====lingkaran ikon di tombol===== */
    .icon-circle {
      width: 2.4rem;
      height: 2.4rem;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.85);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      flex-shrink: 0;
      border: 0.06rem solid rgba(93, 74, 66, 0.2);
      margin-right: 0.8rem;
    }

    .icon-circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .icon-circle span {
      font-size: 1rem;
    }

    /* =====teks tombol===== */
    .link-text {
      flex-grow: 1;
      font-size: 0.8rem;
      font-weight: 500;
      text-align: center;
    }

    /* =====titik tiga===== */
    .dots {
      font-size: 1rem;
      opacity: 0.8;
    }

    /* =====footer===== */
    .footer {
      text-align: center;
      margin-top: 1.8rem;
      font-size: 0.72rem;
      color: #7a645a;
    }
  </style>
</head>

<body>
  <!-- =====card utama===== -->
  <div class="card-lt">

    <!-- =====header===== -->
    <div class="header">
      <div class="h-circle">✱</div>
      <div class="header-right">
        <div class="h-circle">
          <i class="fa-regular fa-bell"></i>
          <span class="badge-dot"></span>
        </div>
        <div class="h-circle">
          <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:0.75rem;"></i>
        </div>
      </div>
    </div>

    <!-- =====profile===== -->
    <div class="profile">
      <img src="https://pbs.twimg.com/profile_images/1973288506475827201/0JIdT2ie.jpg" alt="Dear Me Beauty">
      <h4>Dear Me Beauty</h4>
      <p>#MakingBeautyBetter #LocalsBetterTogether</p>

      <!-- =====sosmed===== -->
      <div class="sosmed">
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- =====links===== -->
    <div class="links">

      <!-- Shopee -->
      <div class="tombol-link">
        <div class="icon-circle">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiazvZAd4rnjUXakUnVZGcwi8I8qXMlL9bfA&s" alt="Shopee">
        </div>
        <span class="link-text">Order at Shopee</span>
        <span class="dots">⋮</span>
      </div>

      <!-- TikTok Shop -->
      <div class="tombol-link">
        <div class="icon-circle">
          <img src="https://i.pinimg.com/736x/7e/13/eb/7e13eb80f38bd66715091004ee7038d0.jpg" alt="TikTok">
        </div>
        <span class="link-text">Order at TikTok Shop</span>
        <span class="dots">⋮</span>
      </div>

      <!-- Find Your Perfect Shade -->
      <div class="tombol-link">
        <div class="icon-circle">
          <i class="fa-regular fa-face-smile"></i>
        </div>
        <span class="link-text">Find Your Perfect Shade (Swatch &amp; Color Guide)</span>
        <span class="dots">⋮</span>
      </div>

      <!-- Outlets -->
      <div class="tombol-link">
        <div class="icon-circle">
          <i class="fa-solid fa-store"></i>
        </div>
        <span class="link-text">Outlets</span>
        <span class="dots">⋮</span>
      </div>

      <!-- DearMeSquad -->
      <div class="tombol-link">
        <div class="icon-circle">
          <i class="fa-solid fa-users"></i>
        </div>
        <span class="link-text">Let's join our #DearMeSquad</span>
        <span class="dots">⋮</span>
      </div>

    </div>

    <!-- =====footer===== -->
    <div class="footer">
      Cookie Preferences • Report • Privacy • More from Linktree
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
