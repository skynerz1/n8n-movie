<?php
include 'includes/header.php';
include 'load.php';

$channels = [

    [
        'name' => 'ام بي سي 1',
        'image' => 'https://shahid.mbc.net/mediaObject/a7dcf0c9-1178-4cb9-a490-a8313975e37c?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=1' 
    ],
    [
        'name' => 'ام بي سي 2',
        'image' => 'https://shahid.mbc.net/mediaObject/0fc148ad-de25-4bf6-8fc8-5f8f97a52e2d?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=2'
    ],
    [
        'name' => 'ام بي سي 3',
        'image' => 'https://shahid.mbc.net/mediaObject/05162db8-9f01-4aeb-95e8-52aba8baf609',
        'url' => 'server-live.php?id=3'
    ],
    [
        'name' => 'ام بي سي 4',
        'image' => 'https://shahid.mbc.net/mediaObject/e4658f69-3cac-4522-a6db-ff399c4f48f1?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=4'
    ],
    [
        'name' => 'ام بي سي 5',
        'image' => 'https://shahid.mbc.net/mediaObject/94786999-8a35-4e25-abc6-93680bd3b457?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=5'
    ],
    [
        'name' => 'ام بي سي بوليود',
        'image' => 'https://shahid.mbc.net/mediaObject/ce2f5296-90ea-48f2-a997-125df5d73b42?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=6'
    ],
    [
                    'name' => 'ام بي سي مصر',
                    'image' => 'https://shahid.mbc.net/mediaObject/2c600ff4-bd00-4b99-b94d-b178a7366247?height=129&width=230&croppingPoint=&version=1&type=avif',
                    'url' => 'server-live.php?id=7'
                ],
                [
                    'name' => '2 ام بي سي مصر',
                    'image' => 'https://shahid.mbc.net/mediaObject/997486ba-a0e4-4d75-8575-6dd2e341adee?height=129&width=230&croppingPoint=&version=1&type=avif',
                    'url' => 'server-live.php?id=25'
                ],
                [
                    'name' => 'ام بي سي مصر دراما',
                    'image' => 'https://shahid.mbc.net/mediaObject/8c152402-a127-4bcf-89a8-4aaf6ac000ff?height=129&width=230&croppingPoint=&version=1&type=avif',
                    'url' => 'server-live.php?id=26'
                ],
                [
                    'name' => 'ام بي سي دراما',
                    'image' => 'https://shahid.mbc.net/mediaObject/4bac4257-39fa-4e00-b91e-befdcff0091a?height=129&width=230&croppingPoint=&version=1&type=avif%22%20alt=%22MBC%202',
                    'url' => 'server-live.php?id=24'
                ],
                [
                    'name' => 'ام بي سي قيمنق',
                    'image' => 'https://shahid.mbc.net/mediaObject/dee97619-f135-409c-88a4-470a41018a5e?height=129&width=230&croppingPoint=&version=1&type=avif',
                    'url' => 'server-live.php?id=27'
                ],
               [
                    'name' => 'شاهد : أفلام',
                    'image' => 'https://shahid.mbc.net/mediaObject/e63c71af-6e93-43f6-8713-21ab41b46ead?height=129&width=230&croppingPoint=&version=1&type=avif',
                    'url' => 'server-live.php?id=28'
                ],
                [
                 
                'name' => 'شاهد : باب الحاره',
                'image' => 'https://shahid.mbc.net/mediaObject/2d38f35a-a36c-4fb7-ac80-d639bda10cd5?height=129&width=230&croppingPoint=&version=1&type=avif',
                'url' => 'server-live.php?id=29'
                ],
                [

                'name' => 'شاهد : مرايا',
                'image' => 'https://shahid.mbc.net/mediaObject/60a952c2-cfe6-4c21-bc51-11108e17fef3?height=129&width=230&croppingPoint=&version=1&type=avif',
                'url' => 'server-live.php?id=30'
                ],
                [

                'name' => 'شاهد : افلام اكشن',
                'image' => 'https://shahid.mbc.net/mediaObject/d1a30edd-509d-49dd-8706-4adac4c51ffc?height=129&width=230&croppingPoint=&version=1&type=avif',
                'url' => 'server-live.php?id=31'
                ],
                [

                'name' => 'شاهد : افلام اثاره',
                'image' => 'https://shahid.mbc.net/mediaObject/9c15e63b-2780-4617-92c7-24ac142920a2?height=129&width=230&croppingPoint=&version=1&type=avif',
                'url' => 'server-live.php?id=32'
                ],
    [
        'name' => 'ssc 1',
        'image' => 'https://shahid.mbc.net/mediaObject/8abc6233-1ef2-443b-8de6-d401a60aa025?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=18'
    ],
    [
        'name' => 'bein sport 1',
        'image' => 'https://play-lh.googleusercontent.com/BDUySDHFzY4JcRzQpLsIHiZKLvIEmVL5N30qc-DWwVhwN3dJqV0J4BKE6XH9EOw_ygQ',
        'url' => 'server-live.php?id=19'
    ],                [
        'name' => 'ريال مدريد',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStqDmOsCegryFEhcARKy82qGAK_q1_HRFH4IwoLUHp8c_Fi3B55nW3FdFZxa5X4xjyeSo&usqp=CAU',
        'url' => 'server-live.php?id=23'
    ],
    [
        'name' => 'سبيستون',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTsuYYAbLWXDmf678ip7wKmr1zvj3PlhOnig&s',
        'url' => 'server-live.php?id=19'
    ], 
    [
        'name' => 'روتانا خليجيه',
        'image' => 'https://cdna.artstation.com/p/assets/images/images/013/847/096/large/ali-hazime-60-rotana-kh-ramadan-bumpers-04.jpg?1541359241',
        'url' => 'server-live.php?id=17'
    ], 
    [
        'name' => 'وناسه',
        'image' => 'https://shahid.mbc.net/mediaObject/97613919-40eb-4032-9dcb-e940e08ae761?height=129&width=230&croppingPoint=&version=1&type=avif',
        'url' => 'server-live.php?id=16'
    ], 
    [
        'name' => 'رؤيا',
        'image' => 'https://jordandir.com/images/screenshots/1711030162.webp',
        'url' => 'server-live.php?id=13'
    ],
    [
        'name' => 'قطر 1',
        'image' => 'https://yt3.googleusercontent.com/pcLGQIWlrO000zyC8SEZzOmm3iZmDAmMQSNRTG28toSt9p-QX88NuiEc4GCmfXk8EwH3twcb=s900-c-k-c0x00ffffff-no-rj',
        'url' => 'server-live.php?id=8'
    ],
    [
        'name' => 'سما دبي',
        'image' => 'https://admango.cdn.mangomolo.com/analytics/uploads/71/5fb0fc1d19.png',
        'url' => 'server-live.php?id=14'
    ],
    [
        'name' => 'دبي',
        'image' => 'https://admango.cdn.mangomolo.com/analytics/uploads/71/659cd942e4.png',
        'url' => 'server-live.php?id=15'
    ],
    [
        'name' => 'عمان-تيفي',
        'image' => 'https://www.klma.org/wp-content/uploads/2021/04/oman-tv-live-nilesat.jpg',
        'url' => 'server-live.php?id=21'
    ],
    [
        'name' => 'البحرين',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk1M66wi3shj5YXhO6Cv9rf3B-ZXSLBEC2Tg&s',
        'url' => 'server-live.php?id=20'
    ],
    [
        'name' => 'الجزيره',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9hF9gGUDglabva3DrXaW7yGedHdx0nQoFztnuMXjBeNjCbEch9JM-omyLGH5xyLPeuRI&usqp=CAU',
        'url' => 'server-live.php?id=9'
    ],
    [
        'name' => 'العربي',
        'image' => 'https://yt3.googleusercontent.com/dirOUBiyFLsQqf58hs78w2NRbQu2u3SfXr77jlH6y1mDwh4TpEtI5CXzhpCy8Aw7tz6CgveWbw=s900-c-k-c0x00ffffff-no-rj',
        'url' => 'server-live.php?id=10'
    ],
    [
        'name' => 'الاخباريه',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/%D8%A7%D9%84%D9%82%D9%86%D8%A7.png',
        'url' => 'server-live.php?id=11'
    ],
    [
        'name' => 'الحدث',
        'image' => 'https://yt3.googleusercontent.com/ehhpuQeVHO0g3kIPkmwrw1x0fLqDk7RyWH733oe4wcKb_1jBEMvGt4WVlQEEzcTCL6zq01K5HQ=s900-c-k-c0x00ffffff-no-rj',
        'url' => 'server-live.php?id=12'
    ],



];

$categories = [
    [
        'name' => 'الكل',
        'image' => 'https://flagsapi.com/SA/flat/64.png',
        'channels' => $channels,
    ],
    [
        'name' => 'قنوات MBC',
        'image' => 'https://shahid.mbc.net/mediaObject/a7dcf0c9-1178-4cb9-a490-a8313975e37c?height=129',
        'channels' => array_filter($channels, fn($c) => strpos($c['name'], 'ام بي سي') !== false),
    ],
    [
        'name' => 'قنوات شاهد',
        'image' => 'https://shahid.mbc.net/mediaObject/shahidlogo/light/Shahid_logo_light/original/Shahid_logo_light.png?height=178&width=auto&croppingPoint=mc&type=webp',
        'channels' => array_filter($channels, fn($c) => strpos($c['name'], 'شاهد') !== false),
    ],
    [
        'name' => 'رياضية',
        'image' => 'https://cdn-icons-png.flaticon.com/512/833/833314.png',
        'channels' => array_filter($channels, fn($c) => strpos($c['name'], 'bein') !== false || strpos($c['name'], 'ssc') !== false),
    ],
];

$search = isset($_GET['search']) ? trim($_GET['search']) : null;
$current = isset($_GET['category']) ? (int)$_GET['category'] : null;
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>قنوات</title>
<style>
    body {
        background: #111;
        color: #fff;
        font-family: 'Arial', sans-serif;
        padding: 20px;
        margin: 0;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .CH1-grid {
        display: grid;
        gap: 14px;
    }

    .CH1-grid.categories {
        grid-template-columns: repeat(2, 1fr);
    }

    .CH1-grid.channels {
        grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
    }

    .CH1-card {
        background: none;
        border-radius: 16px;
        text-align: center;
    }

    .CH1-card img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 18px;
        margin-bottom: 6px;
    }

    .CH1-card .name {
        font-size: 15px;
        font-weight: bold;
    }

    .CH1-card .count {
        font-size: 13px;
        color: #aaa;
    }

    .CH1-back-button {
        background-color: #333;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 12px;
        margin-bottom: 20px;
        cursor: pointer;
        display: inline-block;
    }

    .CH1-back-button:hover {
        background-color: #444;
    }

    @media (max-width: 600px) {
        body {
            padding: 12px;
        }

        .CH1-grid.categories,
        .CH1-grid.channels {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .CH1-card img {
            width: 75px;
            height: 75px;
            border-radius: 14px;
        }

        .CH1-card .name {
            font-size: 12px;
        }

        .CH1-card .count {
            font-size: 10px;
        }

        .CH1-back-button {
            padding: 6px 10px;
            font-size: 13px;
        }
    }
</style>
</head>
<body>

<?php
if ($search !== null) {
    $filtered = array_filter($channels, fn($c) => stripos($c['name'], $search) !== false);
    echo '<button class="CH1-back-button" onclick="history.back()">← رجوع</button>';
    echo '<div class="CH1-grid channels">';
    if (empty($filtered)) {
        echo '<p>لا توجد نتائج.</p>';
    } else {
        foreach ($filtered as $channel) {
            echo '<a href="' . htmlspecialchars($channel['url']) . '">
                    <div class="CH1-card">
                        <img src="' . htmlspecialchars($channel['image']) . '" alt="' . htmlspecialchars($channel['name']) . '">
                        <div class="name">' . htmlspecialchars($channel['name']) . '</div>
                    </div>
                  </a>';
        }
    }
    echo '</div>';
} elseif ($current === null || !isset($categories[$current])) {
    echo '<div class="CH1-grid categories">';
    foreach ($categories as $key => $cat) {
        echo '<a href="?category=' . $key . '">
                <div class="CH1-card">
                    <img src="' . htmlspecialchars($cat['image']) . '" alt="' . htmlspecialchars($cat['name']) . '">
                    <div class="name">' . htmlspecialchars($cat['name']) . '</div>
                    <div class="count">' . count($cat['channels']) . ' قناة</div>
                </div>
              </a>';
    }
    echo '</div>';
} else {
    echo '<button class="CH1-back-button" onclick="
        if (document.referrer) {
            window.location.href = document.referrer + (document.referrer.includes(\'?\') ? \'&\' : \'?\') + \'_t=\' + new Date().getTime();
        } else {
            history.back();
        }
    ">← رجوع</button>';



    echo '<div class="CH1-grid channels">';
    foreach ($categories[$current]['channels'] as $channel) {
        echo '<a href="' . htmlspecialchars($channel['url']) . '">
                <div class="CH1-card">
                    <img src="' . htmlspecialchars($channel['image']) . '" alt="' . htmlspecialchars($channel['name']) . '">
                    <div class="name">' . htmlspecialchars($channel['name']) . '</div>
                </div>
              </a>';
    }
    echo '</div>';
}
?>

</body>
</html>
