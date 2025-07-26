<?php
include 'includes/header.php';

// دالة لعمل طلب GET للAPI مع البحث
function fetchSearchResults($query) {
$encodedQuery = rawurlencode($query);

    $url = "https://app.arabypros.com/api/search/{$encodedQuery}/0/4F5A9C3D9A86FA54EACEDDD635185/d506abfd-9fe2-4b71-b979-feff21bcad13/";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response === false) {
        return [];
    }
    $data = json_decode($response, true);
    if (!$data || !isset($data['posters'])) {
        return [];
    }

    $filtered = [];
    foreach ($data['posters'] as $item) {
        if (isset($item['type']) && strtolower($item['type']) === 'serie') {
            $filtered[] = $item;
        }
    }

    file_put_contents('search_results.json', json_encode(['posters' => $filtered], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));


    return $filtered;
}

// تعريف المصفوفة الثابتة للكاتيجوريز (مسلسلات)
$seriesCategories = [
    [
        'name' => 'مسلسلات الكل',
        'url' => 'cat.php?category=series&type=created',
        'image' => 'https://image.tmdb.org/t/p/w500/fHE2BtkXt62KTXtYbJsjQGzp8D4.jpg',
        'count' => '10050+'
    ],
    [
        'name' => 'مسلسلات عربية',
        'url' => 'cat.php?category=series&type=created&classification=all&genre=مسلسلات%20عربية',
        'image' => 'https://image.tmdb.org/t/p/w500/9yGEmo0JL9VvRlOg9GwBUaYjZ7V.jpg',
        'count' => '2300+'
    ],
    [
        'name' => 'مسلسلات أجنبية',
        'url' => 'cat.php?category=series&type=created&classification=all&genre=مسلسلات%20أجنبية',
        'image' => 'https://image.tmdb.org/t/p/w500/q8oMpXPEAUJJ0KztsRs5K51T2lo.jpg',
        'count' => '3440+'
    ],
    [
        'name' => 'مسلسلات تركية',
        'url' => 'cat.php?category=series&type=created&classification=all&genre=مسلسلات%20تركية',
        'image' => 'https://image.tmdb.org/t/p/w500/8KdwDFFQwtVDEDEqePR3Ble8h1S.jpg',
        'count' => '3200+'
    ],
    [
        'name' => 'مسلسلات آسيوية',
        'url' => 'cat.php?category=series&type=created&classification=all&genre=مسلسلات%20آسيوية',
        'image' => 'https://image.tmdb.org/t/p/w500/fHE2BtkXt62KTXtYbJsjQGzp8D4.jpg',
        'count' => '4500+'
    ],
    [
        'name' => 'مسلسلات نتفلكس',
        'url' => 'browser.php?platform=netflix&page=1&type=ser',
        'image' => 'https://image.tmdb.org/t/p/w500/iH3jOYJr5ZXYJZqHqMoUMaVIUUK.jpg',
        'count' => '20+'
    ],
    [
        'name' => 'مسلسلات شاهد',
        'url' => 'browser.php?platform=shahid&page=1&type=ser',
        'image' => 'https://image.tmdb.org/t/p/w500/132NXjSXMPJnUz57ym6M7Rw0q9X.jpg',
        'count' => '30+'
    ],
    [
        'name' => 'مسلسلات osn',
        'url' => 'browser.php?platform=osn&page=1&type=ser',
        'image' => 'https://image.tmdb.org/t/p/w500/t9XkeE7HzOsdQcDDDapDYh8Rrmt.jpg',
        'count' => '30+'
    ],
    [
        'name' => 'مسلسلات اطفال',
        'url' => 'browser.php?platform=kids&page=1&type=ser',
        'image' => 'https://image.tmdb.org/t/p/w500/b3cvx3qFkzQ3YjVWrrwIHA4RCgH.jpg',
        'count' => '7+'
    ],
    [
        'name' => 'مسلسلات رمضان 2025 كلها',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2025',
        'image' => 'https://image.tmdb.org/t/p/w500/thyjoTwA67uBrL7C8Ir25QhHLGY.jpg',
        'count' => '130+'
    ],
    [
        'name' => 'مسلسلات رمضان 2025 خليجي',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2025&subtype=khaleeji',
        'image' => 'https://image.tmdb.org/t/p/w500/odbPi4ljQtsnzxxQWa2FcWgALe7.jpg',
        'count' => '56+'
    ],
    [
        'name' => 'مسلسلات رمضان 2025 عربي',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2025&subtype=araby',
        'image' => 'https://image.tmdb.org/t/p/w500/thyjoTwA67uBrL7C8Ir25QhHLGY.jpg',
        'count' => '70+'
    ],
    [
        'name' => 'مسلسلات رمضان 2024 كلها',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2024',
        'image' => 'https://image.tmdb.org/t/p/w500/tVFcPn4U5tklSrmnornYGDBX7ui.jpg',
        'count' => '165+'
    ],
    [
        'name' => 'مسلسلات رمضان 2024 خليجي',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2024&subtype=khaleeji',
        'image' => 'https://image.tmdb.org/t/p/w500/tVFcPn4U5tklSrmnornYGDBX7ui.jpg',
        'count' => '76+'
    ],
    [
        'name' => 'مسلسلات رمضان 2024 عربي',
        'url' => 'cat.php?category=series&type=ramadan&ramadan_year=2024&subtype=araby',
        'image' => 'https://image.tmdb.org/t/p/w500/nWKN6GOsf7wlawVjWPGCgSDMi1F.jpg',
        'count' => '60+'
    ],
    [
        'name' => 'مسلسلات جديدة دراما',
        'url' => 'cat.php?category=series&type=created&classification=دراما&genre=all',
        'image' => 'https://image.tmdb.org/t/p/w500/4zOZzlSjHjUJgc2Gp20iFfpkRBV.jpg',
        'count' => '250+'
    ],
];
$currentUrl = $_SERVER['REQUEST_URI'];
foreach ($seriesCategories as &$cat) {
    $cat['url'] .= (strpos($cat['url'], '?') === false ? '?' : '&') . 'ref=' . urlencode($currentUrl);
}
unset($cat);

$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';

if ($searchQuery !== '') {
    $filteredCategories = fetchSearchResults($searchQuery);
} else {
    $filteredCategories = $seriesCategories;
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>مسلسلات</title>
<style>
  html, body {
      margin: 0;
      padding: 0 20px 20px 20px;
      background: #111;
      color: #fff;
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
      box-sizing: border-box;
      width: 100%;
  }
  @media (max-width: 1024px) {
      body {
          padding-top: 60px;
      }
  }
  .CH1-grid {
      display: grid;
      gap: 14px;
      grid-template-columns: repeat(2, 1fr);
      margin-bottom: 80px;
      width: 100%;
      max-width: 100%;
      padding: 0;
      box-sizing: border-box;
  }
  *, *::before, *::after {
      box-sizing: border-box;
  }
  @media (max-width: 600px) {
      body {
          padding-left: 20px;
          padding-right: 20px;
      }
      .CH1-grid {
          grid-template-columns: repeat(2, 1fr);
          justify-content: center;
          gap: 10px;
          max-width: 320px;
          margin: 0 auto;
          margin-bottom: 40px;
      }
      .CH1-card img {
          max-width: 120px;
      }
      .CH1-card {
          padding: 8px 4px;
      }
      .CH1-card .name {
          font-size: 14px;
      }
      .CH1-card .count {
          font-size: 12px;
      }
  }
  .CH1-card {
      background: #222;
      border-radius: 16px;
      text-align: center;
      padding: 10px 5px;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
  }
  .CH1-card:hover,
  .CH1-card:focus {
      border-color: #4CAF50;
      box-shadow: 0 0 10px #4CAF50;
  }
  .CH1-card img {
      width: 100%;
      max-width: 140px;
      height: auto;
      border-radius: 12px;
      margin-bottom: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.7);
      object-fit: cover;
  }
  .CH1-card .name {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 4px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      width: 100%;
  }
  .CH1-card .count {
      font-size: 13px;
      color: #aaa;
  }
  a {
      text-decoration: none;
      color: inherit;
      display: flex;
      flex-direction: column;
      align-items: center;
      outline: none;
  }
  .back-button {
      display: inline-block;
      margin: 20px auto;
      padding: 8px 16px;
      background-color: #4caf50;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      text-align: center;
      max-width: 120px;
      font-weight: bold;
      user-select: none;
  }
  .back-button:hover {
      background-color: #45a049;
  }
</style>
</head>
<body>

<?php if ($searchQuery !== ''): ?>
    <div style="text-align:center;">
        <a href="?" class="back-button" aria-label="عودة إلى الصفحة الرئيسية">رجوع</a>
    </div>
<?php endif; ?>

<div class="CH1-grid">
    <?php if ($searchQuery !== ''): ?>
        <?php if (count($filteredCategories) > 0): ?>
            <?php foreach ($filteredCategories as $item): ?>
                <?php
                    $title = isset($item['title']) ? $item['title'] : 'مسلسل بدون عنوان';
                    $img = isset($item['image']) ? $item['image'] : 'https://via.placeholder.com/140x200?text=No+Image';
                    $id = isset($item['id']) ? $item['id'] : 0;
                    $link = "series.php?id=" . urlencode($id);
                ?>
                <a href="<?= htmlspecialchars($link) ?>" tabindex="0" aria-label="<?= htmlspecialchars($title) ?>">
                    <div class="CH1-card" role="link">
                        <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>">
                        <div class="name"><?= htmlspecialchars($title) ?></div>
                        <div class="count">مسلسل</div>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align:center; color:#f44336;">لم يتم العثور على نتائج للبحث "<?= htmlspecialchars($searchQuery) ?>"</p>
        <?php endif; ?>
    <?php else: ?>
        <?php foreach ($filteredCategories as $cat): ?>
            <a href="<?= htmlspecialchars($cat['url']) ?>" tabindex="0" aria-label="<?= htmlspecialchars($cat['name']) ?>">
                <div class="CH1-card" role="link">
                    <img src="<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <div class="name"><?= htmlspecialchars($cat['name']) ?></div>
                    <div class="count"><?= htmlspecialchars($cat['count']) ?> مسلسل</div>
                </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>
