<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DFKZ WATCH MOVIE & SERIES & CHANNEL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="styles.css">
 <style>
   /* ========== الأساسيات ========== */
   * {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
   }

   body {
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     background-color: #1c2229;
     padding-bottom: 60px; /* للبوتوم بار */
   }

   /* ========== هيدر الديسكتوب ========== */
   header.desktop-only {
     background-color: #1c2229;
     padding: 6px 30px;
     position: relative;
     z-index: 100;
     display: flex;
   }

   .header-content {
     max-width: 1200px;
     margin: auto;
     display: flex;
     justify-content: space-between;
     align-items: center;
     width: 100%;
   }

   /* اللوقو وسط */
   .logo-text {
     display: flex;
     justify-content: center;
     align-items: center;
     text-align: center;
   }

   .logo-text img {
     height: 45px;
     vertical-align: middle;
   }

   /* تنسيق روابط الناف */
   .main-nav ul.nav-list {
     display: flex;
     list-style: none;
     gap: 20px;
     flex-wrap: wrap;
   }

   .main-nav ul.nav-list li a {
     color: white;
     text-decoration: none;
     font-size: 16px;
     display: flex;
     align-items: center;
     gap: 8px;
     padding: 8px 12px;
     border-radius: 6px;
     transition: background 0.3s ease, color 0.3s ease;
   }

   .main-nav ul.nav-list li a:hover {
     background-color: #1c2229;
     color: red;
   }

   /* ========== هيدر الجوال / الآيباد ========== */
   .mobile-header {
     position: fixed;
     top: 0;
     left: 0;
     width: 100%;
     z-index: 1000;
     background-color: #1c2229;
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 10px 15px;
     border-bottom: 1px solid #333;
   }

   .mobile-header .mobile-title {
     color: white;
     font-size: 16px;
     font-weight: bold;
     margin: 0;
     flex: 1;
     text-align: center;
   }

   .header-btn {
     background: none;
     border: none;
     color: white;
     font-size: 18px;
     cursor: pointer;
     width: 35px;
   }

   .header-btn:hover {
     color: red;
   }

   /* ========== Bottom Bar للجوال والآيباد ========== */
   .bottom-nav {
     position: fixed;
     bottom: 15px;
     left: 0;
     width: 100%;
     background: #1c2229;
     display: none;
     justify-content: space-around;
     border-top: 1px solid #333;
     z-index: 999;
     padding: 6px 0;
   }

   .bottom-nav .nav-item {
     flex: 1;
     text-align: center;
     color: white;
     text-decoration: none;
     font-size: 11px;
     transition: color 0.3s ease;
   }

   .bottom-nav .nav-item i {
     display: block;
     font-size: 20px;
     margin-bottom: 3px;
   }

   .bottom-nav .nav-item:hover {
     color: red;
   }

   /* ========== البحث المنبثق للجوال ========== */
   .mobile-search-overlay {
     display: none;
     position: fixed;
     bottom: 60px;
     left: 0;
     width: 100%;
     background: #1c2229;
     padding: 10px;
     border-top: 1px solid #333;
     z-index: 1000;
   }

   .mobile-search-form {
     display: flex;
     align-items: center;
     gap: 8px;
   }

   .mobile-search-form input {
     flex: 1;
     padding: 8px 10px;
     border: none;
     border-radius: 6px;
     font-size: 14px;
     background: #2a2f36;
     color: white;
   }

   .mobile-search-form button {
     padding: 8px 12px;
     border: none;
     background-color: red;
     color: white;
     border-radius: 6px;
     cursor: pointer;
   }

   /* ========== أزرار البحث ديسكتوب ========== */
   .desktop-search-overlay {
     display: none;
     background: #1c2229;
     padding: 10px 20px;
     border-bottom: 1px solid #333;
     z-index: 999;
     position: absolute;
     top: 100%;
     left: 0;
     width: 100%;
   }

   #desktop-search-btn.active i {
     color: red !important;
   }

   .search-icon-btn {
     text-decoration: none;
     outline: none;
     box-shadow: none;
   }

   .search-icon-btn:focus {
     outline: none;
   }

   /* ========== تخصيص العرض ========== */

   /* ديسكتوب فقط (1025px وفوق) */
   @media (min-width: 1025px) {
     .desktop-only {
       display: flex !important;
     }

     .mobile-header,
     .bottom-nav,
     .mobile-only {
       display: none !important;
     }

     .header-content {
       display: flex;
       justify-content: space-between;
       align-items: center;
     }

     .search-icon-btn {
       margin-right: auto;
     }

     .logo-text {
       margin: 0 auto;
     }

     .main-nav {
       margin-left: auto;
     }

     .main-nav ul.nav-list {
       gap: 15px;
     }

     .desktop-search-overlay {
       display: none !important;
     }
   }

   /* الجوال والآيباد (أقل من 1025px) */
   @media (max-width: 1250px) {
     .desktop-only {
       display: none !important;
     }

     .mobile-header,
     .bottom-nav,
     .mobile-only {
       display: flex !important;
     }

     .desktop-search-overlay {
       display: none !important;
     }

     body {
       padding-top: 60px; /* نفس ارتفاع .mobile-header */
     }
   }

   /* تكبير اللوقو */
   .logo-text {
     padding: 30px 0;
   }

   .logo-text img {
     max-height: 130px;
     height: auto;
     width: auto;
   }

   /* للجوال والآيباد */
   @media (max-width: 991px) {
     .logo-text img {
       max-height: 150px;
     }
   }
   /* هيدر جانبي (فقط للديسكتوب) */
   .sidebar-nav {
     position: fixed;
     top: 0;
     right: 0;
     width: 70px;
     height: 100vh;
     background-color: #1c2229;
     display: flex;
     flex-direction: column;
     align-items: center;
     padding: 20px 0;
     gap: 25px;
     z-index: 999;
     transition: width 0.3s ease;
   }

   .sidebar-nav:hover {
     width: 220px;
     align-items: flex-start;
     padding-left: 15px;
   }

   .sidebar-nav .sidebar-item {
     color: white;
     text-decoration: none;
     display: flex;
     align-items: center;
     gap: 12px;
     font-size: 14px;
     transition: color 0.3s ease, background 0.3s ease;
     width: 100%;
     padding: 8px 10px;
     border-radius: 6px;
   }

   .sidebar-nav .sidebar-item:hover {
     background: #2a2f36;
     color: red;
   }

   .sidebar-nav i {
     font-size: 20px;
   }

   /* البحث الجانبي */
   /* البحث الجانبي */
   .sidebar-search-container {
     width: 100%;
     padding: 0 10px;
     margin-top: auto;
     margin-bottom: 20px;
     transition: all 0.3s ease;
     display: flex;
     justify-content: center;
   }

   .sidebar-search-form {
     width: 42px;
     transition: width 0.3s ease;
     overflow: hidden;
   }

   .sidebar-nav:hover .sidebar-search-form {
     width: 100%;
   }

   .sidebar-search-form .search-wrapper {
     position: relative;
     background: #2a2f36;
     border-radius: 30px;
     height: 42px;
     display: flex;
     align-items: center;
     padding: 0 10px;
     gap: 10px;
     transition: background 0.3s ease;
     width: 100%;
   }

   .sidebar-search-form .search-wrapper:hover {
     background: #3a3f46;
   }

   .sidebar-search-form .search-wrapper i {
     color: #ff3d3d;
     font-size: 16px;
     flex-shrink: 0;
   }

   .sidebar-search-form .search-wrapper input {
     border: none;
     outline: none;
     background: transparent;
     font-size: 14px;
     color: #fff;
     width: 100%;
     opacity: 0;
     transition: opacity 0.3s ease;
   }

   .sidebar-nav:hover .sidebar-search-form .search-wrapper input {
     opacity: 1;
   }


  </style>
</head>
<body>


  
  <!-- الهيدر الجانبي (ديسكتوب فقط) -->
  <aside class="sidebar-nav desktop-only">
    <a href="index.php" class="sidebar-item">
      <i class="fas fa-tv"></i>
      <span>مسلسلات</span>
    </a>
    <a href="movie.php" class="sidebar-item">
      <i class="fas fa-film"></i>
      <span>أفلام</span>
    </a>
    <a href="live.php" class="sidebar-item">
      <i class="fas fa-broadcast-tower"></i>
      <span>لايف</span>
    </a>
    <a href="favorites.php" class="sidebar-item">
      <i class="fas fa-heart"></i>
      <span>المفضلة</span>
    </a>
    <!-- البحث داخل الهيدر الجانبي -->
    <div class="sidebar-search-container">
      <form method="GET" action="index.php" class="sidebar-search-form">
        <input type="hidden" name="page" value="2">
        <div class="search-wrapper">
          <i class="fas fa-search"></i>
          <input type="text" name="search" placeholder="ابحث عن فيلم أو مسلسل" required />
        </div>
      </form>
    </div>

  </aside>

  
<!-- header -->
<header>
  <div class="header-content">
    <!-- Mobile/iPad Top Header -->
    <div class="mobile-header mobile-only">
      <button class="header-btn left-btn"><i class="fas fa-cog"></i></button>
      <h1 class="mobile-title" id="mobile-page-title">n8n</h1>
     <a href="#" class="header-btn right-btn" id="mobile-search-btn">
  <i class="fas fa-search"></i>
</a>

    </div>



    <!-- Logo -->
    <a href="index.php" class="logo-text">
      <img src="includes/img/n8n.png" alt="ناين Logo">
    </a>

    <!-- زر البحث بجانب اللوقو -->
    <!-- <a href="#" id="desktop-search-btn" class="desktop-only search-icon-btn" style="margin-left: 10px;">
      <i class="fas fa-search" style="color:white; font-size: 20px;"></i>
    </a> -->









    <!-- Desktop Nav -->
    <!-- <nav class="main-nav desktop-only">
      <ul class="nav-list">

  <li><a href="index.php"><i class="fas fa-home"></i> الرئيسية</a></li>
  <li><a href="movie.php"><i class="fas fa-film"></i> أفلام</a></li>
  <li><a href="index.php"><i class="fas fa-tv"></i> مسلسلات</a></li>
  <li><a href="live.php"><i class="fas fa-broadcast-tower"></i> القنوات</a></li>
</ul>

        <li><a href="favorites.php"><i class="fas fa-heart"></i> Favorites</a></li>
        <li><a href="../contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
      </ul>
    </nav> -->



  <!-- Mobile Nav -->
  <!-- Bottom Navigation (Mobile Only) -->
    <nav class="bottom-nav mobile-only">
      <a href="live.php" class="nav-item">
        <i class="fas fa-broadcast-tower"></i>
        <span>لايف</span>
      </a>
      <a href="movie.php" class="nav-item">
        <i class="fas fa-film"></i>
        <span>أفلام</span>
      </a>
      <a href="index.php" class="nav-item">
        <i class="fas fa-tv"></i>
        <span>مسلسلات</span>
      </a>
      <a href="favorites.php" class="nav-item">
        <i class="fas fa-heart"></i>
        <span>المفضلة</span>
      </a>
    </nav>


  <!-- نموذج البحث (يظهر عند الضغط على زر البحث) -->
  <div class="mobile-search-overlay" id="search-overlay">
    <form method="GET" action="index.php" class="mobile-search-form">
      <input type="hidden" name="page" value="2">
      <input type="text" name="search" placeholder="ابحث عن فيلم أو مسلسل او بث ..." required />
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
    <!-- نموذج البحث المنبثق (للديسكتوب) -->
    <div class="desktop-search-overlay" id="desktop-search-overlay">
      <form method="GET" action="index.php" class="mobile-search-form" style="padding: 10px;">
        <input type="hidden" name="page" value="2">
        <input type="text" name="search" placeholder="ابحث عن فيلم أو مسلسل او بث مباشر" required />
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>


</header>

    <script>

      // تعديل action فورم البحث حسب الصفحة

function updateSearchFormAction() {
  const path = window.location.pathname.toLowerCase();  // مثال: /1/index.php
  const urlParams = new URLSearchParams(window.location.search);
  const category = urlParams.get('category');

  // استخراج المسار الحالي (مثل: /1/)
  const currentDir = path.substring(0, path.lastIndexOf('/') + 1);

  let actionFile = '';

  if (path.includes('movie.php')) {
    actionFile = 'movie.php';
  } else if (path.includes('live.php') || (path.includes('cat.php') && category === 'channels')) {
    actionFile = 'live.php';
  } else {
    actionFile = 'index.php';
  }

  const actionUrl = currentDir + actionFile;

  document.querySelectorAll('form.mobile-search-form').forEach(form => {
    form.setAttribute('action', actionUrl);
  });
}



      // استدعاء التعديل فور تحميل الصفحة
      window.addEventListener('DOMContentLoaded', updateSearchFormAction);


      const titleElement = document.getElementById('mobile-page-title');
      const path = window.location.pathname.toLowerCase();
      const searchParams = new URLSearchParams(window.location.search);

      if (titleElement) {
        if (path.includes('movie')) {
          titleElement.textContent = 'الأفلام';
        } else if (path.includes('live.php')) {
          titleElement.textContent = 'البث المباشر';
        } else if (path.includes('favorites')) {
          titleElement.textContent = 'المفضلة';
        } else if (path.includes('index') || path.endsWith('/')) {
          titleElement.textContent = 'المسلسلات';
        } else {
          titleElement.textContent = 'ناين بلس';
        }
      }


      // إظهار/إخفاء البحث عند الضغط
      const mobileSearchBtn = document.getElementById("mobile-search-btn");
      const mobileSearchOverlay = document.getElementById("search-overlay");

      mobileSearchBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        mobileSearchOverlay.style.display = mobileSearchOverlay.style.display === "block" ? "none" : "block";
      });
      // بحث الجوال
      const toggleSearchBtn = document.getElementById("toggle-search");
      const searchOverlay = document.getElementById("search-overlay");

      toggleSearchBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        searchOverlay.style.display = searchOverlay.style.display === "block" ? "none" : "block";
      });

      // بحث الديسكتوب
      const desktopSearchBtn = document.getElementById("desktop-search-btn");
      const desktopSearchOverlay = document.getElementById("desktop-search-overlay");

      desktopSearchBtn?.addEventListener("click", (e) => {
        e.preventDefault();

        const isVisible = desktopSearchOverlay.style.display === "block";

        desktopSearchOverlay.style.display = isVisible ? "none" : "block";

        // تغيير لون الأيقونة
        if (isVisible) {
          desktopSearchBtn.classList.remove("active");
        } else {
          desktopSearchBtn.classList.add("active");
        }
      });
    </script>



</body>
</html>
