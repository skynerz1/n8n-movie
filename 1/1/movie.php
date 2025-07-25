<?php
include 'includes/header.php';
include 'load.php';

// دالة البحث كما هي
function fetchSearchResults($query) {
    $encodedQuery = urlencode($query);
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
        if (isset($item['type']) && strtolower($item['type']) === 'movie') {
            $filtered[] = $item;
        }
    }

file_put_contents('search_results.json', json_encode(['posters' => $filtered], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));


    return $filtered;
}

$moviesCategories = [
    // نفس البيانات عندك
    [
        'name' => 'أفلام الحديثه + الكل',
        'url' => 'cat.php?category=movies&type=created',
        'image' => 'https://image.tmdb.org/t/p/w500/5LjepL2VheteoBLeMRcciesRMYo.jpg',
        'count' => '6555+'
    ],
    [
        'name' => 'أفلام أجنبية',
        'url' => 'cat.php?category=movies&type=created&classification=all&genre=أفلام%20أجنبية',
        'image' => 'https://image.tmdb.org/t/p/w500/1m10QitDjpbZgFP1syXgVOv2pH7.jpg',
        'count' => '3200+'
    ],
    [
        'name' => 'أفلام عربية',
        'url' => 'cat.php?category=movies&type=created&classification=all&genre=أفلام%20عربية',
        'image' => 'https://image.tmdb.org/t/p/w500/lH0I94llTX2fU2ltMNNJpuRkKRu.jpg',
        'count' => '1500+'
    ],
    [
        'name' => 'أفلام آسيوية',
        'url' => 'cat.php?category=movies&type=created&classification=all&genre=أفلام%20آسيوية',
        'image' => 'https://image.tmdb.org/t/p/w500/4yIQneG9fBfuxt5o1Q6HRv12H0t.jpg',
        'count' => '1200+'
    ],
    [
        'name' => 'أفلام هندية',
        'url' => 'cat.php?category=movies&type=created&classification=all&genre=أفلام%20هندية',
        'image' => 'https://image.tmdb.org/t/p/w500/5LjepL2VheteoBLeMRcciesRMYo.jpg',
        'count' => '800+'
    ],
    [
        'name' => 'افلام نتفلكس',
        'url' => 'browser.php?platform=netflix&page=1&type=mov',
        'image' => 'https://app.arabypros.com/uploads/cache/poster_thumb/uploads/jpg/4Z3XlmD3xhjKmPofKj3wf9l3CtT.jpg',
        'count' => '+ 20'
    ],
    [
        'name' => 'افلام شاهد',
        'url' => 'browser.php?platform=shahid&page=1&type=mov',
        'image' => 'https://image.tmdb.org/t/p/w500/z0YPcVdWvxG5dmBL0QRQeB2B6Th.jpg',
        'count' => '+ 3'
    ],
    [
        'name' => 'افلام osn',
        'url' => 'browser.php?platform=osn&page=1&type=mov',
        'image' => 'https://image.tmdb.org/t/p/w500/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg',
        'count' => '+ 10'
    ],
    [
        'name' => 'افلام اطفال',
        'url' => 'https://image.tmdb.org/t/p/w500/yFHHfHcUgGAxziP1C3lLt0q2T4s.jpg',
        'image' => 'https://image.tmdb.org/t/p/w500/yFHHfHcUgGAxziP1C3lLt0q2T4s.jpg',
        'count' => '+ 20'
    ],
    [
        'name' => 'أفلام رعب',
        'url' => 'cat.php?category=movies&type=created&classification=رعب&genre=all',
        'image' => 'https://image.tmdb.org/t/p/w500/mcP7DW6cfYAUfQxS48WymHbO7z7.jpg',
        'count' => '600+'
    ],
    [
        'name' => 'أفلام دراما',
        'url' => 'cat.php?category=movies&type=created&classification=دراما&genre=all',
        'image' => 'https://image.tmdb.org/t/p/w500/gxL4Du1K7o2uilRXWLnstjiy7pH.jpg',
        'count' => '900+'
    ],
    [
        'name' => 'أفلام كوميديا',
        'url' => 'cat.php?category=movies&type=created&classification=كوميديا&genre=all',
        'image' => 'https://image.tmdb.org/t/p/w500/ooSGwWVJRp81ErEH7VmTmVwjoMc.jpg',
        'count' => '1100+'
    ],
    [
        'name' => 'أفلام إثارة',
        'url' => 'cat.php?category=movies&type=created&classification=اثارة&genre=all',
        'image' => 'https://image.tmdb.org/t/p/w500/akxdNCJQ3wh0bRLRl2p7VaICRXe.jpg',
        'count' => '700+'
    ],
    [
        'name' => 'أفلام أكثر مشاهدة',
        'url' => 'cat.php?category=movies&type=views',
        'image' => 'https://image.tmdb.org/t/p/w500/i7azEvi5NTaDzaj7dQiiJyX1BEI.jpg',
        'count' => '5000+'
    ],
    [
        'name' => 'أفلام الأحدث سنة',
        'url' => 'cat.php?category=movies&type=year',
        'image' => 'https://image.tmdb.org/t/p/w500/nwSPqhDLBx5PuOxYiV68CUyPDQS.jpg',
        'count' => '120+'
    ],
];

$currentUrl = $_SERVER['REQUEST_URI'];
foreach ($moviesCategories as &$cat) {
    $cat['url'] .= (strpos($cat['url'], '?') === false ? '?' : '&') . 'ref=' . urlencode($currentUrl);
}
unset($cat);

$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';

if ($searchQuery !== '') {
    $filteredMovies = fetchSearchResults($searchQuery);
} else {
    $filteredMovies = $moviesCategories;
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>أفلام</title>
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
        <?php if (count($filteredMovies) > 0): ?>
            <?php foreach ($filteredMovies as $item): ?>
                <?php
                    $title = isset($item['title']) ? $item['title'] : 'فيلم بدون عنوان';
                    $img = isset($item['image']) ? $item['image'] : 'https://via.placeholder.com/140x200?text=No+Image';
                    $id = isset($item['id']) ? $item['id'] : 0;
                    $link = "movie/links.php?id=" . urlencode($id);
                ?>
                <a href="<?= htmlspecialchars($link) ?>" tabindex="0" aria-label="<?= htmlspecialchars($title) ?>">
                    <div class="CH1-card" role="link">
                        <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>">
                        <div class="name"><?= htmlspecialchars($title) ?></div>
                        <div class="count">فيلم</div>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align:center; color:#f44336;">لم يتم العثور على نتائج للبحث "<?= htmlspecialchars($searchQuery) ?>"</p>
        <?php endif; ?>
    <?php else: ?>
        <?php foreach ($filteredMovies as $cat): ?>
            <a href="<?= htmlspecialchars($cat['url']) ?>" tabindex="0" aria-label="<?= htmlspecialchars($cat['name']) ?>">
                <div class="CH1-card" role="link">
                    <img src="<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <div class="name"><?= htmlspecialchars($cat['name']) ?></div>
                    <div class="count"><?= htmlspecialchars($cat['count']) ?> فيلم</div>
                </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>
