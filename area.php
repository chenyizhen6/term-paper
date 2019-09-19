<?php
    // 初始化curl
    $curl = curl_init();

    // 識別發出請求的軟體/瀏覽器類型
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

    // 預設為ture，要驗證https ssl憑證
    // 如果來源是https網站時，沒有做其他設定會錯誤
    // 所以設為false來接受任何憑證
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // 將curl回傳的資料以字串接收，而不是直接顯示
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_URL, "http://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=DyplMIk3U1hf");

    $result = curl_exec($curl);

    // 關閉curl
    curl_close($curl);

    // json文字轉陣列，如果設為false的話則轉為物件
    $json = json_decode($result, true);
    ?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>浪大家看見愛 X 浪浪的流浪動物之家 | 全國公立動物收容所</title>

    <!-- FAVIOCN -->
    <link rel="shortcut icon" href="./img/dog.png" type="image/x-icon">

    <!-- 網站META -->
    <!-- 說明最好要設，讓Google搜尋能抓到網站說明 -->
    <meta name="keywords" content="流浪動物,動物領養,動物收容中心,毛小孩,浪浪之家,貓狗認領養">
    <meta name="description" content="流浪動物之家">
    <meta name="author" content="泰山PHP網頁設計班-學員04陳怡蓁">

    <!-- FACEBOOK META -->
    <meta property="og:title" content="浪大家看見愛 X 浪浪的流浪動物之家">
    <meta property="og:image" content="./img/cute dog.jpeg">
    <meta property="og:description" content="請以認養代替購買，給流浪動物一個溫暖的家。毛小孩的心聲:「愛我就不要棄養我。」">
    <meta property="og:site_name" content="流浪動物之家">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/stray.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap4.min.css">

    <!-- PWA -->
    <link rel="manifest" href="manifest.json">
</head>

<body>
<!-- style="background-image: url(./img/cute-colorful-kitten-pow-pattern-design_1017-14710.jpg)" -->

<!-- background - snow --> 
<div id="particles-js"></div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="./index.html">
                <img src="./img/dog.png" width="30" height="30" class="d-inline-block align-top" alt="回首頁" title="回首頁">
                浪大家看見愛 X 浪浪的流浪動物之家>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./foster.html">
                            <img src="./img/pet care2.png" alt="logo" style="width:30px; height: 30px;"> 動物認領養
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./shop.html">
                            <img src="./img/goods.png" alt="logo" style="width:30px; height: 30px;"> 愛心商品義賣專區
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        	<img src="./img/data.png" alt="logo" style="width:30px; height: 30px;">動物保護相關資源
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="hov">
						  <a class="dropdown-item active" href="./area.php">
						  <img src="./img/dog rail.png" alt="logo" style="width:18px; height:18px;">&nbsp全國公立動物收容所
                          </a>
                          <a class="dropdown-item" href="./data.php">
                            <img src="./img/dog count.png" alt="logo" style="width:25px; height:25px;">&nbsp98~104年全國流浪犬數量統計
                          </a>
                          <a class="dropdown-item" href="./video.html">
                            <img src="./img/video music.png" alt="logo" style="width:22px; height:22px;">&nbsp影音專區
                          </a>
                          <a class="dropdown-item" href="./connect.html">
                            <img src="./img/035 connect icon.png" alt="logo" style="width:18px; height:18px;">&nbsp&nbsp好站連結
                          </a>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page">
        <div class="container-fluid" id="loading">
            <div class="row h-100">
                <div class="col-12 text-center align-self-center">
                    <img src="./img/foot.svg" alt="" width="300" height="300">
                    <p class="text-dark">請稍待片刻...</p>
                </div>
            </div>
        </div>
        <div class="container" id="content" style="margin-top: 70px; margin-bottom: 64px;">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
                <div class="col-12 text-center text-light bounceIn wow my-2">
                    <h1 class=" font-weight-bold" id="bgcb">~全國公立動物收容所~</h1>
                </div>
                <hr class="hr-dark fadeInRight wow">
                
<!-- Taiwan map svg -->
<div class="content container">
	<div class="row">
		<div class="col-12">

            <div  class="col-12 text-danger font-weight-bold bounce wow">
                <i class="fas fa-map-marker-alt text-danger" id="accept">&nbsp全國公立動物收容所分布圖:
				</i>
			</div>
				<div class="col-12 col-md-6 my-3 flash wow" id="intro">(※溫馨提醒:點擊地圖會顯示各處收容所的詳細資料喔~)
				</div>
                <br>&nbsp;
            
        
<!-- Generator: Adobe Illustrator 23.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0  -->
<svg version="1.1"
	 id="svg2606" inkscape:output_extension="org.inkscape.output.svg.inkscape" inkscape:version="0.46" sodipodi:docname="Taiwan_ROC_political_division_map.svg" sodipodi:version="0.32" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 850 1200"
	 style="enable-background:new 0 0 850 1200;" xml:space="preserve">
<style type="text/css">
	.btn-more{fill:#FF5A5A;stroke:#FFFFFF;}
	.st1{fill:#FF5A5A;stroke:#FFFFFF;}
	.btn-more4{fill:#B323E8;stroke:#FFFFFF;}
	.btn-more2{fill:#FFF929;stroke:#FFFFFF;}
	.btn-more3{fill:#3EB6FF;stroke:#FFFFFF;}
    .btn-more1{fill:#219B10;stroke:#FFFFFF;}
    
	
svg {
    height: 100vh;
}

path:hover {
	fill:#DC143C;
	transform: translate(-8px,-8px);
	transition: all 0.5s;
	cursor:url("location-png-gps-2.png")25 25, auto;
}
</style>
<path class="btn-more" id="path3699" title="新北市" sodipodi:nodetypes="cssssssssssssssssssssssssscssssssssssssssssssssssssscssssssssssssssscsssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssscssssssssssssssssssssssscsssssssssssssssssscssssssssssssssssscssssssssssssssssscsssssssssssssssssssssscssssssssssssssssssssssssssssssssssscssssssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssscssssssssssssssssssssssscssscssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssc" class="st0" d="
	M775.2,145.2l-3.7-0.7l-2.5,0.2l-6.3,2.3l-5.4,0.4l-6.8,4.8l-1.4,1.6h-2.9l-2.3-0.9l-5.2-0.4l-1.8,1.4l-0.5,2.1l-0.9,1.8l4.1,5.9
	l-1.4,4.3l-5.9,3.9l-5.4-0.4l-2.3,0.4l-3,2.5l-2.5,3.2l0.5,2.3l-0.2,2.1l-1.4,1.8l-0.2,2.1l0.2,1.3l-2.5,0.5l-1.8,0.9l-7.5-1.1
	l-2.3,0.4l-2,1.1l-2.7,3.2l-4.8,2.6l-0.5,1.7l-1.8,1.6l-1.1,1.8l-2.1,0.7l-0.7,2l-1.6-1.8l-3.6,1.8l-10.5,1.3l1.4,1.3l-0.5,2.1
	l-2.3,1.8l-2.5-0.7l-1.8,1.1l-2.1,0.5l-0.9,2l0.2,2.5l-0.4,2.3l-2,1.6l0.4,2.5l1.4,1.4l0.7,2.1v2.7l-1.4,4.3l-2.3,0.4l-1.6,1.3
	l-1.1,1.6l-2.1,0.7l-2.7,0.2l-5.9,3.2l-0.5,2.5l-5.2,3.4l-4.6,0.7l-2.3,1.4l-4.8-0.3l-1.5-0.6l-0.5-5l-2-1.4l-1.4-2l-2.5-0.7
	l-0.2-1.8L619,234l0.5-2l-3.2-3l-2-5v-1.1l-0.9-1.8l-0.4-2.3l1.1-2l3.2-2.7l1.1-1.6l1.6-1.1v-2.7l-2.3-0.7l-0.9-2.5l-0.2-2.5
	l-1.6-1.8l-1.6-0.9l-2.9-2.9l-0.7-2l-1.4-1.4l-0.4-0.9l-1.3-0.7l-5.4,0.4l-2,1.1l-2.7,0.2l-2.9-0.7l-1.8-1.1l-1.6-1.6L589,192
	l-2.5-0.4l0.2-2.1l4.6-0.9l1.6-1.3l-2.5-1.6l-0.2-0.2l-0.4-2.1l1.3-1.6l-3.4-5.2l-4.5-2.7l-0.9-4.3l0.9-2l1.3-1.4l2.1-1.4l-1.6-1.3
	l-2.1-0.2l-1.3-2.3l0.9-2l1.4-1.4l0.5-5l-1.1-2l0.5-2.1l1.8-0.9l11.3,0.4l2.9-2l2-3.6l2.1-0.7l1.6-1.1l-0.2-2.1l-2.1-1.6l2-0.7
	l2-1.3l0.9-1.6l-2.3-1.6l-1.3-1.4l-0.4-2.3l0.9-1.8v-0.7l-0.5-2.3l-1.8-2.1l-1.3-0.9h-5.4L591,119l-2-1.8l0.5-3.6l-9.3-4.5l-5-0.5
	L574,107l-1.3-0.4l-1.8-2.5l1-1.4l2.4-2.3l12-0.1l1.3-0.9l5.2-1.6l4.2-2.8l1.5-0.4l2.8-1.7l1.6-0.5l3.7-3.5l0.6-2.4l1.1-1h1.9
	l5.8,3.8l2.3,2.3l0.7,1.8l0.1,1.8l2,2.7l0.3,1.6l0.8,1.7l0.3,1.6l0.9-0.8l-0.3-7.6l-2.2-4.4l-1-1.3l-1.4-1l-1.5-2.6l-3.5-1.7
	l-1.9-0.1l-3.4-3.2l-0.3-1.1l1.1,0.1l1.9-0.5l2-3.9l0.3-1.9l2.1-2.2l1.3-0.8l0.9-1.3l0.3-1.9l1.3-2.5l0.4-1.5l1-1.1l0.1-1.8l1.3-1
	l3.7,0.5l0.6-0.1l3.5-7.4l1.7-0.5l1.4-1l3.4-0.9l1.4-1.1l0.3-1.8l0.6-0.6l0.6,1.6l5.1-0.8l1.1-0.8v-1.9l1.1-0.8l1.9,2h6.1l0.5-1.5
	l1-1.1l1.3-0.2l0.4,0.1l1.3,0.8l1,1.1l1.4,0.9h1.9l1.4,0.8l1.8,2.3l3.2,1l3.7,5.2l1.1,1l0.7,1.3l0.4,1.8l-0.5,3.8l2,2L678,65h2
	l0.6,1.3l-1.3,1.3l0.3,1.3l4.9,5.1l6.3-0.4l4.5-3.9l0.4,1.1l-1.3,1.1l-1.4,0.8l-1,1.1l1.1,1l0.3,0.8l-2.9,1.4l-0.7,1.5l0.5,1.3
	l1.6,1.1l1.5,0.5l2.9,2.1l-1.5,1.1l-2,0.7l-1.1,1.6l-2.3,0.5l-1.3,1.6l-4.1,1.8l-2.5,0.2l-2,0.7l-1.8,1.3l-4.8,0.5v2.7l1.1,2
	l2.3,0.7l1.4,1.6l0.2,2.5l3,6.8l2.3,1.6l1.6,2.1l2.3,0.5l1.4-1.3v2l1.6,1.8l7,1.8l5.4,4.6l5.2,0.4l4.6-2.3l2.5-0.2l1.1-1.8l0.7-2.1
	l-4.6-4.5v-4.8l-0.5-2.1l2.3-0.5l2.9-3l2.5,0.5l1.8,1.3l0.9,0.2l1.8-2.9l1.4-1.4l0.9-2.1l0-1.2l1.8,0l1.6-0.6h1.9l-0.6,0.6l-0.8,1.3
	l-0.4,1.6l1,1.3h1.6l1.3-1.3l1.4-0.8l2.9,0.9l4.4,0.1l1.4,0.6l1.5-0.6l5.9,1.3h1.9l3.4-1.2l1-1l1.7-0.4l1.8,0.1v1.9l-1.3,0.8
	l-0.8,1.3l0.6,0.9l1,0.9l0.6,1.3l-0.4,1.5l-1.5,1l-1.5,4.5l1.3,3l4.2,4.2l0.3,0.6l-1.4,1l0.6,0.8v5.7l0.4,1.4l4.9,4l4,0.4l1.7-1.1
	l0.8-0.8l1.8-0.1l1.5,0.3l0.9,1l1.4,0.5l1.2,2.2l1.1-1l1.4-0.1l1.9,2l-0.1,1.5l-0.7,1.4l-1.9,0.2l-0.8,1.3l-2.8,1.3l-0.8,1.1
	l-1.8,0.1l-0.8,1.5L775.2,145.2L775.2,145.2z"/>
<defs>
	
	
		<inkscape:perspective  id="perspective2614" inkscape:persp3d-origin="372.04724 : 350.78739 : 1" inkscape:vp_x="0 : 526.18109 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_z="744.09448 : 526.18109 : 1" sodipodi:type="inkscape:persp3d">
		</inkscape:perspective>
</defs>
<sodipodi:namedview  bordercolor="#666666" borderopacity="1.0" gridtolerance="10000" guidetolerance="10" id="base" inkscape:current-layer="layer1" inkscape:cx="631.21444" inkscape:cy="434.79035" inkscape:document-units="px" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:window-height="683" inkscape:window-width="676" inkscape:window-x="66" inkscape:window-y="68" inkscape:zoom="0.24748737" objecttolerance="10" pagecolor="#ffffff" showgrid="false">
	</sodipodi:namedview>
<path id="path2464" class="st1" d="M56,588.4v1.4V588.4L56,588.4z"/>
<path id="path2466" class="st1" d="M73.8,581.9l0.7-2.5l2-0.7l-0.9,1.4l-0.5,2.3L73.8,581.9L73.8,581.9z"/>
<path id="path2468" class="st1" d="M82.6,575l2.3-0.4l-0.5,1.8L82.6,575L82.6,575z"/>
<path class="btn-more4" id="path2470" title="澎湖縣" class="st1" d="M40.1,622.6l-0.2,2.5l2.1-0.9L40.1,622.6L40.1,622.6z"/>
<path class="btn-more4" id="path2472" title="澎湖縣" class="st2" d="M43.8,628.9l-4.3,2.3l-1.6-0.7l0.4,2.3l5.4-0.4l4.1-2.5l-0.4-1.3l-2.5-0.4L43.8,628.9L43.8,628.9
	z"/>
<path class="btn-more4" id="path2474" title="澎湖縣" class="st2" d="M36.9,583.5l-0.6,1.2l-0.2,0.8l0.8,0.9l-1.5,1.4l0.4,1.1l1.1,0.5l0.8,0.7L38,591l-0.9,0.4
	l-0.7,2.1l0.4,1.2l-1.2,0.4h-1.3l-1.1,0.7l0.4,1L35,597l1.8,2.3v1.3l-0.5,1.1l-1,0.7l-0.7,0.9l-1,0.7l-1,0.3l-1.8-1.6l-1.3,0.4
	l-0.9,0.7l-0.6,1l-1.5,1.3l-0.6,0.9l0.9,0.5h1.3l0.6-0.8h4l0.7-0.6l0.9-0.4l2.6,0.4l1.2,0.5h1.3l1.2-0.5l-0.4-1.2l-0.7-0.9l-0.4-1
	l-0.1-1.3l1.5-1.4l-1.2-2.9l3.7-3.3l-0.4-0.9l-1-0.7l-0.2-1.2l0.6-2.1l-0.5-1.2l-0.6-0.8l-0.3-1.1l0.4-1l1-0.6h2.7l2.3-0.6l1-0.6
	l0.2-1.3l-0.7-0.6l-1.1,1l-1.1,0.3l-1.3-0.6l-2.1-2.4l0.3-1.2l-0.4-1l-1.1,0.1l-0.8,0.7l-2.2,4.1L36.9,583.5L36.9,583.5z"/>
<path class="btn-more4" id="path2476" title="澎湖縣" class="st2" d="M51.7,573.1l-1,1l0.1,1.2l3,2.1l0.6,1.1l0.6-0.6l0.9-2.1l0.9-0.6l2.8,0.1l0.5,1.2v1.3l0.7,0.8
	l0.4,1l2.2,2.3L64,583l0.9,0.2l0.8-1l0.2-1.3l2.2-1.3l1.3-0.2l-0.1-1.2l-1.3-1.2l-0.5-0.8l0.8-1.4l-1.4-0.1l-1.7-3.1l-0.7-0.2
	l-0.8,0.5l-2.1-0.6l-0.3-1.1l-1.3-0.2l-1.3,0.5l-0.5,1.1l-1.3,0.3l-2.3-0.3l-1.1-0.5l-0.3-0.6L51.7,573.1L51.7,573.1z"/>
<path class="btn-more4" id="path2478" title="澎湖縣" class="st1" d="M63.9,584.5l-1.4,1.9l1.8,1.7h1.3l1-0.6l0.1-1.3l1.7-2.1l-0.8-0.5h-1.3l-1.3,0.3L63.9,584.5
	L63.9,584.5z"/>
<path class="btn-more4" id="path2480" title="澎湖縣" class="st1" d="M67.2,588.4l-1.2,0.5l-0.4,1l0.4,1.1l1.1,0.5h1.3l1.3-0.3l0.4-1.2l-0.6-0.9l-1.2-0.6L67.2,588.4
	L67.2,588.4z"/>
<path class="btn-more4" id="path2482" title="澎湖縣" sodipodi:nodetypes="csssssssssssssssssssssssssssssssssssssssssssssssssssscsssscsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssssssssssc" class="st2" d="
	M60.2,597.3l-2.9,2.5l-1.2,0.4h-1.3l0.6,1.2v1.3l-0.3,1.3l-1.8,1.5l-0.2,1.3l1,0.5l2.4-1.1l1-0.7l1.4,0.1l0.9,0.6l0.8,0.9L58,610
	l-1.3,0.2l-2.7-0.4l1.5,1.7l2.1,0.9l1.6-0.2l1.2-0.7l4,0.1l0.8,1.1l0.4,1.2l-1.3,2.1l-0.2,0.7l1.2,0.8l-0.1,1l-1.1,1.1l-1.2-0.1
	l-0.8-0.7l-1.1-0.5l-1.3,0.2l-1.6,3.4l-1.5,1.6l0.6,1.1l2.6,0.3l1.4-0.2l1.8-0.6l1.5-0.1l1.6,1.8l1.2-0.3l0.2-1.2l1.1-1l0.1-1.3
	l0.4-1.3L68,620l-0.2-1l0.9-1l0.6-1.2l4.5-3.5l1.2-0.2l2.2-2.8l0.4-1.1l1-0.8l6.2-0.2l1.9-0.9l0.8,0.6l0.3,1.3l0.6,1.2l1.1,0.7
	l1.3-0.3l1-0.5H93l0.5-0.8l-3.1-3.3l-0.8-2.9l0.4-1.1V601l-0.5-1.2l-2.4-2.6l-0.6-2.1l-0.7,0.8l-0.4,2.5l-1.3-0.2l-0.6-1.3l-0.8-0.9
	l0.4-0.8l0.7-0.5l-1.7-1.6l-1.2-0.4l-0.8,0.8l-1.7,3.1l-1-0.2l-0.9,0.3l-1.5,1.5l-0.3,1.1l-0.7,0.2l-0.1-4l1-2.1l-1.5,0.2l-0.8,0.5
	l-5.2,0.9l-0.8,0.6l0.1,1.3l0.7,1v1.3l-0.5,0.9l-1.3,0.4l-0.8,1v2.8l-0.7,0.8l-1.3-0.6l-1-0.9l0.2-1.8l-1.4-0.2l-0.2-1.3l0.7-1.2
	l0.1-0.8L60.2,597.3L60.2,597.3z"/>
<path id="path2484" class="st1" d="M49.9,610.1l-0.5,1.3l-1,0.4L48,613l0.1,2.6l1.5,0.7l0.4,0.7l0.9,0.8l0.4-0.9l-0.7-0.9l1.2-1.1
	l-0.7-0.8l-0.3-2.9l-0.9-0.7"/>
<path class="btn-more4" id="path2486" title="澎湖縣" class="st1" d="M52.2,618.2v1.4l4.4,0.1l0.5-0.8l-0.7-0.9l-1.1-0.8l-0.5-0.8l-0.3,1L52.2,618.2L52.2,618.2z"/>
<path class="btn-more4" id="path2488" title="澎湖縣" class="st2" d="M67.4,546.7l-1.9,3.2l0.4,1.6l1.3,0.5l1.1-1.8l1.3-1l1.6,0.3l1.3-0.6l1.1-1.1l-4.2-2.9l-1,0.1
	L67.4,546.7L67.4,546.7z"/>
<path id="path2490" class="st1" d="M-19.8,656.2l-1.4,3.2l1.4,0.9l1.6-0.4l1.4-0.9v-1.3l-2.3-1.8L-19.8,656.2L-19.8,656.2z"/>
<path class="btn-more4" id="path2492" title="澎湖縣" class="st2" d="M31.8,661.2l0.9,1.9v8.7l-0.4,1.6l-1.5,0.6l0.9,1.3l5.6,0.1l0.4-0.9l-0.6-1.4l0.6-1.3l1.6-0.5
	l1.3,1.4l1.3,0.9l1.5-0.5l0.9-1H46l1.1-0.8l-0.5-1.6l-0.8-1.3l-1.6,0.6l-2,2.3l-4.5-2.7l-0.5-1.4v-3.8l-1,0.3l-1.9-0.1L31.8,661.2
	L31.8,661.2z"/>
<path id="path2494" class="st1" d="M41.7,701.6l0.3,1.9l1.6,0.1l-1-1.4L41.7,701.6L41.7,701.6z"/>
<path id="path2496" class="st1" d="M45.3,704.4l-0.5,2l-1,1.4l1.6-0.5l1.8-2.3L45.3,704.4L45.3,704.4z"/>
<path id="path2523" class="st1" d="M765.9,189.2l1.5,0.9l1.3-0.1l0.3-1.6l1.8-0.1l1.8,0.3l0.5,1.6l1.6,1l-0.6,1l-1.6,0.6l-3.7-0.1
	l-2-1.9L765.9,189.2L765.9,189.2z"/>
<g id="g4330" transform="translate(4.6145365,50.433747)">
	<path class="btn-more4" id="path2643" title="金門縣" class="st2" d="M59.4,280.7l-0.8,0.6L58,282l-2.5-0.4l-0.9,0.5l-0.5,1v2.8l-0.5,0.9l-0.1,1.3l-0.8,0.6h-1.4
		l-0.9,0.5l0.3,1.4l0.6,0.9l-0.5,1l-0.8,0.8l-1,0.4h-0.4l0.6,1.1l2.6,0.2l0.5,1.2l1.3-0.1l2-2.7l1.1-0.3l1.2,0.3l0.6,0.8l1-0.5
		l0.6-0.9l-0.1-1.3l0.6-0.9l2.7-0.1l1.2-0.4l0.6-0.7l1.5-4.2l-0.2-1.2l-3-1.8l-0.7-0.8l-0.9-0.5l-1.3-0.3L59.4,280.7L59.4,280.7z"/>
	<path class="btn-more4" id= "path2645" title="金門縣" class="st2" d="M31.8,299.2l0.5,1.1l0.6,0.9l-0.4,0.7l1.4,0.1l0.9,0.5l0.8-0.6l-0.2-0.6l-1.4-0.1l-0.6-2.1
		L31.8,299.2L31.8,299.2z"/>
	<path id="path2647" class="st2" d="M30.4,303l-0.6,0.8l2.3,0.6l0.7-0.6L30.4,303L30.4,303z"/>
	
		<path class="btn-more4" id="path2651" title="金門縣" sodipodi:nodetypes="csssssssssssssssssssssssscsssssssssssssssssssscssssssssssscssssssssssssssssssssscssssssssscsssssssssssssssssscsssssscsssssssssscsssssssssssscsssssssssssssscsssssssssssscssssssssssssssc" class="st2" d="
		M118.5,262.8l-0.4-1.3l-0.6-0.9v-1.4l-0.6-0.8l0.6-0.6h-1.2l0.1-0.7l-0.9-0.1l-0.7,0.2l-0.4-0.6l-1.6,1.7l-0.5-0.9l0.9-0.6
		l-0.8-0.6l-0.9,0.6l-0.6,0.8l1,0.8l0.7,1l-0.4,1.1l-1.2,0.2l-1.7,1.2l-1.2,0.2L107,262l-0.5,0.3l-0.3,0.9l0.5,0.7l0.1,1.3l1.3-1.4
		l1,0.5h1.4l-0.1,0.7H109l0.9,0.8l0.5,0.9l-0.8,0.6v1.4l-0.9-0.3l-1.2-1.7l-0.7-0.6l-0.2,0.9l0.6,0.9v0.3l-0.9,1l-0.9,0.6l-0.6,0.8
		l-0.9,0.5h-1.4l1.3,1.2l-0.4,0.5l0.6,2.4l-0.3,0.7H103l-1.7,1.4l-0.6,0.9l-8.1-1.1l-10.8-7.8l-1.2-0.3l-0.4-0.3l-0.6,0.7l-1.3,0.2
		l-2.1,2.1l-1.2,0.2l-2,3.8l2.2,1.3l1.2,0.3l-0.2-0.9l-0.7-0.8l0.9-0.5l2.8,0.1l0.5-1.1l0.9-0.6l0.7,0.8l-0.1,1.7l-0.7,0.7l-2.4,0.5
		l-0.5,1.2v1.8l0.4,0.3l0.7,1.2l0.7,2.4v2.8l0.2,0.7l1.6,0.2l0.6,0.7l-0.1,1.3l-1,0.4l-0.6-1.7l-0.5,0.9l-2.2,0.3l-0.1,2.3l-0.8,0.6
		l-4,0.1l-0.6-0.5l0.1-1.3l-0.8,1.7l-1.1-0.2l-0.3,0.9l1,0.7l0.9,0.4l1.7,2.2l1.5,1.2l0.6,1L78,299l1,0.5l0.6,1.1l1.3,0.5l1.5,0.2
		l2,1.3l0.5-0.8l1.6-0.3l0.4-1l0.7-0.6l0.6-2.4l3-4.3l0.7-0.6l0.6-0.9l0.8-0.6l0.2-0.5l1.2-0.2l0.8-0.6l1.2-0.3l0.7-0.6l0.9-0.5
		l1.3-0.1l2-0.8l7.9-0.6l1.5,0.6l1.7,1.4l0.9,0.5h1.4l2.3,0.9l2.4,2.4l-0.1,1.1l-0.6,0.8l-0.8,0.6l-0.6,0.2l1.1,0.5h1.4l1-0.4
		l0.8-0.6l1.2-0.3l0.6-0.9l2.3-0.6l0.4-1l-0.5-0.8l0.3-1l0.8-0.4l1.4,0.3l0.6-0.7l0.4-0.8l-1.4-1.7l-0.2-1l1.8-1.1l1-0.1l0.6,0.6
		l1-0.8l-0.4-0.8l0.1-0.9l0.5-0.7l-0.9-0.5h-1.4l-0.3-0.7l-0.7-0.7l-0.7-3.4v-2.2l1.5-0.9l0.4-1.1l-0.6-0.7l-2,0.7l-0.9-0.3
		l-0.5-0.9l-0.6-2.3l0.2-1.2l-0.6-0.6l-0.9-0.5l-0.2-3.4L118.5,262.8L118.5,262.8z"/>
	<path id="path2655" class="st2" d="M120.8,257.8l-1.1,0.4l0.5,0.5h1.4L120.8,257.8L120.8,257.8z"/>
	<path id="path2657" class="st2" d="M127.2,293l-0.6,0.6l1.3-0.1L127.2,293L127.2,293z"/>
</g>
<g id="g4313" transform="translate(13.831957,20.350481)">
	<path class="btn-more4" id="path2675" title="連江縣" sodipodi:nodetypes="csssssssssssc" class="st2" d="M10.9,116l-0.4,4.4l0.8,4.8l-0.8,2.8l6.4,0.8l4.8-1.2
		l6.4-5.2l-2.8-3.6l-3.2,2.8l-4.4,0.8l-2.4-3.2L10.9,116L10.9,116z"/>
	<path class="btn-more4" id="path2677" title="連江縣" class="st2" d="M30.4,118.4l1.2,2.4L30.4,118.4L30.4,118.4z"/>
	<path class="btn-more4" id="path2679" title="連江縣" sodipodi:nodetypes="cssssssssssssc" class="st2" d="M28.8,100.5l0.4,9.5l0.8-4.4l3.2-2l4.8-0.4l3.6-2.4
		l2.8,3.2l0.8-2l-3.6-6L28.8,100.5L28.8,100.5z"/>
	<path class="btn-more4" id="path2681" title="連江縣" sodipodi:nodetypes="csssc" class="st2" d="M35.1,79.9l-2.4,4.8l1.7,0.7l1.9-1.5L35.1,79.9L35.1,79.9z"/>
	<path id="path2687" class="st2" d="M202.9,45.5l-2.4,2.1l0.2,0.7l4.2,0.3l-0.2-1.2L202.9,45.5L202.9,45.5z"/>
</g>
<g id="g4342" transform="translate(920.81618,114.6225)">
	<path id="path4338" class="st1" d="M-718.9,173l-0.5,2.5l1.4,1.4l1.6,0.7V175l-1.3-1.4L-718.9,173L-718.9,173z"/>
	<path id="path4340" class="st1" d="M-711.9,177.3l-1.3,2.1l1.8,1.1l1.8-1.3l-1.3-1.4L-711.9,177.3L-711.9,177.3z"/>
</g>
<path id="path3635" class="btn-more"  title="基隆市" sodipodi:nodetypes="ccssssssssscssssssssssssssssssssssssssscssssssssssssssssssssssssssscssssssssssssssssssssssscsss" class="st0" d="
	M726.4,97.4l0.1-1.2l-1.1-1.1l0.5-3.4l-1.8,0.1l-2.4,1.5l-2.2-2l-1.9-0.2l-0.9-0.6v-2.1l-1.6-0.4l-0.8,1.4l-1.5,0.4l-0.4-1.5h-1.3
	l0.5,1.5l1.4,2l-1.8,2.3l-2.8,2l-1.3,0.1l2.3-2.2l-0.8-1.4v-3.2l-1.5-0.1l-1.4-0.8l-1.8-0.3l-2-2h-3.9l-1.1-0.8l0.3-1.4l-0.4-0.9
	l-1.8,1.2l-2,0.7l-1.1,1.6l-2.3,0.5l-1.3,1.6l-4.1,1.8l-2.5,0.2l-2,0.7l-1.8,1.3l-4.8,0.5v2.7l1.1,2l2.3,0.7l1.4,1.6l0.2,2.5l3,6.8
	l2.3,1.6l1.6,2.1l2.3,0.5l1.4-1.3v2l1.6,1.8l7,1.8l5.4,4.6l5.2,0.4l4.6-2.3l2.5-0.2l1.1-1.8l0.7-2.1l-4.6-4.5v-4.8l-0.5-2.1l2.3-0.5
	l2.9-3l2.5,0.5l1.8,1.3l0.9,0.2l1.8-2.9l1.4-1.4L726.4,97.4L726.4,97.4z"/>
<path class="btn-more" id="path2707" title="桃園市" sodipodi:nodetypes="csssssssssssssssssssssssscssssssssssssssssscssssssssssscssssssssssssssssssssssssssssssssssscssssssssssssssssscssssssssssssssscsssssssssssssssssssssssssssscssscssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssscsssscssssssssssssssssscssssssssssssssssscsssssssssssssssssscssssssssssssssssssssssscsssssssssssssssssssssssssssssssc" class="st0" d="
	M629.3,246.6l-0.5,1.2l-1.6,0.5l-3.5,0.3l-1.3,0.8l-1.8,2.4l-0.6,5.1l-2.3,3l-0.4,1.5l-0.6,1.3l-0.4,1.5l-3.4,5.3l-0.3,1.6h-1.8
	l-1.4,0.6l-1.1,0.9l-1.5,1.9l-0.8,0.5l-1.8,0.4l-3.7-0.5l-1.5-0.9l-1.3-1.9h-0.9l-0.8-1l-0.5-1.5l-1.4-0.5V265l0.8-1.4l0.4-1.8
	l-1.5-0.8l-1.6-0.3l-1.3-0.8l-0.1-3.8l1-1l0.1-1.9l0.5-1.5l-0.3-1.9l-1.6-0.8h-1.9l-0.6-1.3l-0.3-1.8l-0.8-1.3l-1.1-0.9l-2.3-2.9
	l-2.9-1.4l-3,1l-1.4-0.5v-3.8l1.1-1.1l0.6-1.3v-3.8l-2.1-0.4l0.1-4.4l0.5-1.4l0.9-1.3l0.4-1.6l-1.3-1.3l-0.6-1.5l-1.8-0.4l-1.3-1.3
	l-1.4-0.5l-1.8-0.1l-0.5-0.8H569l-1.6-0.9l-1-1.3l-1.5-0.9l-0.4-0.6l-0.1-1.1l-0.9-2.4l-1.5-0.6l-2.1-0.4v-1.9l-1.5-0.5l-3.9,1.8
	h-1.6l-5.7-4.5l-1.4-0.6l-1.1-1.1l-2-0.8v-1.4l-1.9-0.3l-1.8-0.6l-3.5-2.8l-0.6-0.9l-3-1.9l0.4-1.6l1.8-2.8l-0.5-5.6l-1.4-1l-11.7-1
	l-0.8-1.5l-0.3-1.9l1-0.9l-1.4-0.8l-1.3,0.9l-1.6,0.6l-1.9,0.1l-1.6-1.3l-2-0.6h-1.9l-1.3-1.4l-3-1.1l0.1-3.7l0.6-1.5l-1.1-3
	l-0.1-1.8l-1.8-0.1l-2.1-2.1l-3.7-0.3l-4.3,1.3l-2.3-1.5l-4.3,2.5l-3.1-0.8l0.5-0.8l1.3-1l3-4l0.6-1.4l1.3-1.3l1.3-0.8l1.8-1.9v-3.7
	l-0.9-1.3l0.1-1.8l3-3.8l1-2.9l1.1-0.9l2.4-3.5l4.7-4.1l3.9-1.8l1.6-0.3l1.2-1.2l1.5-0.5l2.5-1.6l1.3-1.4l1.7-1l1.8-0.5l2.8-2.2
	l1.5-0.6h2l12.1-3.2l1.5-1.3l3.5-1.6l3.7-3.7l1.7-1l2.1-0.1l8.3-3.4h1.9l1-1l3.5-0.8l1.5,0.5l2.5,2l2.4,0.1l0.8,1.9l1.3,1.4l1.3,0.4
	l1.3,1.6l5,0.5l9.3,4.5l-0.5,3.6l2,1.8l5.2,1.3h5.4l1.3,0.9l1.8,2.1l0.5,2.3v0.7l-0.9,1.8l0.4,2.3l1.3,1.4l2.3,1.6l-0.9,1.6l-2,1.3
	l-2,0.7l2.1,1.6l0.2,2.1l-1.6,1.1l-2.1,0.7l-2,3.6l-2.9,2l-11.3-0.4l-1.8,0.9l-0.5,2.1l1.1,2l-0.5,5l-1.4,1.4l-0.9,2l1.3,2.3
	l2.1,0.2l1.6,1.3l-2.1,1.4l-1.3,1.4l-0.9,2l0.9,4.3l4.5,2.7l3.4,5.2l-1.3,1.6l0.4,2.1l2.7,1.8l-1.6,1.3l-4.6,0.9l-0.2,2.1l2.5,0.4
	l1.6-1.3l1.6,1.6l1.8,1.1l2.9,0.7l2.7-0.2l2-1.1l5.4-0.4l1.3,0.7l0.4,0.9l1.4,1.4l0.7,2l2.9,2.9l1.6,0.9l1.6,1.8l0.2,2.5l0.9,2.5
	l2.3,0.7v2.7l-1.6,1.1l-1.1,1.6l-3.2,2.7l-1.1,2l0.4,2.3l0.9,1.8v1.1l2,5l3.2,3l-0.5,2l2.5,1.1l0.2,1.8l2.5,0.7l1.4,2l2,1.4l0.5,5
	L629.3,246.6L629.3,246.6z"/>
<path id="path3690" class="btn-more" title="宜蘭縣" sodipodi:nodetypes="csssssssssssssssssssssssscsssssscsssssssssssssscsssssssssssssssssscsssssssssssssssssssssssssssscsssssssssssssssssssssssssssssssssssssscsssscsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssscssssssssssssscsssssssssssscssssssssssssssscsssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssscssssssssssssssssssssssssscssssssssssssssscssssssssssssssssssssssssssssssc" class="st0" d="
	M629.2,246.6l-0.5,1.2l-1.6,0.5l-3.5,0.3l-1.3,0.8l-1.8,2.4l-0.6,5.1l-2.3,3l-0.4,1.5l-0.6,1.3l-0.4,1.5l-3.4,5.3l-0.3,1.6h-1.8
	l-1.4,0.6l-1.1,0.9l-0.4,0.7l-0.9,0.9l0.1,0.6l1.1,0.8l0.6,1.4l0.1,1.8l0.5,1.4l-1.3,1.1l-0.5,0.3l-0.5,0.8L606,283l-1.4,1.5
	l-0.4,1.6l0.6,1.3l0.1,7.3l-0.8,1.8l-1.1,1.4l-1.4,1l-1.6,2.5l-1.8,1.4l-0.5,1.3l-1.4-0.1l-3.4,4.9l-1.3,0.8l-1.9-0.4l-1.4,2.8
	l-1.4,0.8l-1.1,2.9l-0.9,1.1l-1.5,1.3l-1.3,2.5l0.1,1.6l-0.7,1l1.4,1.7l0.9,1.8l0.5,2.1l-0.9,7.1l2.7,2.7l2,0.7h4.8l4.1,7l1.8,0.9
	l2.7-0.4l1.3-1.6l1.6-1.3l2.3-0.4l1.8-0.9l7.1-0.9l2.1,1.1l1.1,1.8l1.6,1.1l1.3,2.1l12,7.7h8.1l3,1.3l4,0.5l8.1,5.6l8.3,1l3-0.8
	l-3-2.5l0.8-3l3.3-0.8l2.3-1.5l2.3,1l2-1.8l-0.8-1.5l-2-1.8l0.3-3.3l2-0.8l4.3,3.8l4.8,1.5l4.5,3.5l9.1,3.8l7.3,0.5l8.1,4l4.1,0.5
	l-0.2-4l-0.8-1.3l0.1-3.7l2.5-4.8l0.4-1.5l1.5-2.5l0.5-10.9l0.5-1.6l0.9-1.2v-2.1l1-3.5l1.8-2.4l0.5-1.8l2.7-1.6l1-1.2l1.3-2.6
	l0.1-1.8l4.5-4.3l4.6-1.9h1.9l0.5-0.3l-1.4-0.8l-1-1L740,307v-1.9l-2.5-1.5l-0.5-4.9l1.8-1.1l0.9-1.3l3.3-0.6l2.8-1.8l1.7-0.4
	l0.5-1.7l-0.1-1.5l-0.6-1.8l-0.1-1.8l-0.8-1.1l-0.3-3.5l0.8-1.1l-0.9-1.4l0.7-1.5h1.9l-0.3-1.4l-1-0.9l-0.3-0.5l1.5-0.7l-1.3,0.3
	l-1.8-0.7l-0.1-1.3l-2.4-2.2l0.4-1.6l1.8-0.1l1.5,0.9l0.3,1.8l1.8-0.1l1.5-0.8l-3.7-3.7l-3-1l-0.4-0.8l-0.5-0.2l-1.6-2.3l-0.1-1.3
	l-3.7-9.1l-0.1-3.8l-0.8-1.1l0.4-0.6v-2l-0.5-1.7l0.5-10.2l-2.9-3.2l-0.9-1.5v-1.7l-1.4-1.6l-0.6-3.4l0.1-1.8l-1-1l0.5-14l0.7-2.2
	V201l1.3-2.8l-0.3-3.7l1-3l0.1-1.8l2.4-5.2l0.3-1.8l1.3-2.2l1.5-0.8l1-2.9l0.9-1.1l1.4-0.5l3.8-4.4l1.3-0.6l3.2-3.7l0.3-3.5l0.5-1.5
	l2.8-1.6l1.5-0.4l1.5-2.2l1.2-0.9l1.2-0.6l2.5-3.5l0.3-1.9l1.8-1l1.8-0.3l1.2-0.5l1.1-1.1l1.7-0.3l1.3-0.8l1.9-0.1l2.7-1.2l-3.6-0.7
	l-2.5,0.2l-6.3,2.3l-5.4,0.4l-6.8,4.8l-1.4,1.6h-2.9l-2.3-0.9l-5.2-0.4l-1.8,1.4l-0.5,2.1l-0.9,1.8l4.1,5.9l-1.4,4.3l-5.9,3.9
	l-5.4-0.4l-2.3,0.4l-3,2.5l-2.5,3.2l0.5,2.3l-0.2,2.1l-1.4,1.8l-0.2,2.1l0.2,1.3l-2.5,0.5l-1.8,0.9l-7.5-1.1l-2.3,0.4l-2,1.1
	l-2.7,3.2l-4.8,2.6l-0.5,1.7l-1.8,1.6l-1.1,1.8l-2.1,0.7l-0.7,2l-1.6-1.8l-3.6,1.8l-10.5,1.3l1.4,1.3l-0.5,2.1l-2.3,1.8l-2.5-0.7
	l-1.8,1.1l-2.1,0.5l-0.9,2l0.2,2.5l-0.4,2.3l-2,1.6l0.4,2.5l1.4,1.4l0.7,2.1v2.7l-1.4,4.3l-2.3,0.4l-1.6,1.3l-1.1,1.6l-2.1,0.7
	l-2.7,0.2l-5.9,3.2l-0.5,2.5l-5.2,3.4l-4.6,0.7l-2.3,1.4L629.2,246.6L629.2,246.6z"/>
<path id="path2531" class="btn-more"  title="台北市" class="st0" d="M629.5,92.2l-1.3,2.7l-1.3,1.3l-0.4,0.7l-1.3,1.4v2.7l-1.8,1.1l-0.4,2.3l0.7,2.3l1.8,1.3l5.7,0.7
	l3.6,3.4l1.4,2.7l0.2,8.2l-2.7,3.7l-1.8,1.6l-0.9,2l0.5,5.2l1.1,2.1l2.1-0.2l2-1.1l1.3-1.8l1.3-0.2l2.9,1.3l1.6,1.3l0.7,2v2.7
	l1.3,2.1l2.3,1.6l2.5,0.2l1.1,4.3l3.8,2.5l10,1.1l2.1-0.9h2.9l0.2-1.8l-4.8-2.3l-0.4-2.5l0.2-2.1l-1.3-4.1v-2.3l1.3-2l1.8-1.1l5,0.4
	l1.6-1.1l2.1-0.5l6.8,0.4l0.5-1.4l-1.6-0.7l-2.3,0.7l-3.9-1.8l-4.8-3.6l-0.9-2l1.3-1.6l-0.4-2l-1.4-1.4l1.1-1.3l2.3-4.8l-0.5-4.6
	l-7.7-6.6l0.5-2.3l1.4-1.6l-0.5-1.8l-2.9-2.5l-1.1-1.6l-0.2-5.2l-2.9-2.9v-2.7l0.7-2V77l-4.6,0.4l-2-3.6l-1.4-1.6l-2.5,3.9l-2,0.9
	l-0.9,2l-3.8,2.1l-0.9,2.3l-1.6,1.1l-2.5,0.2l-2,0.9l-3,3.6l-0.9,2.3L629.5,92.2L629.5,92.2z"/>
<path  class="btn-more" id="path2732" title="新竹市" sodipodi:nodetypes="csssssssssssscsssssssssssssssscsssssssssssssssssscssssssssssssssssssscssssssscscsssssssssssssssssscc" class="st0" d="
	M451.5,226.7l0.2,1.1l1.3,0.6h2l1.4-0.5l1.1-0.9l1.4,0.5l1.9,2.3l0.5,1.6v1.5l4.9,1.3l0.7-0.5l2-2.4l0.4-3.7l1.3-2.9l1.6-0.4l1-1.5
	l1.5-0.6l1.1-0.9l0.5-1.5l0.9-1.4l5.4-1.3l-0.5-1.4l1.1-1.8l1.5-0.5h1.9l7.1,7.2l1.5-1v-3.8l-3.3-11.1l-1.9-2.6l-3.4-2.9l-3.7-0.4
	l-0.1-0.6l-0.5-1l-1.4-0.9h-1.9l-7.7-1.9l-1.9-2.7l-0.5-1.4l-1.6-1.2l-1,0.8l-1.5,0.6l-5.1,7l-1.3,1.1l0.6,3l-0.3,1l0.5,0.5l1.9,0.1
	l0.3,1.6l-0.8,1.5l-0.4,3.5l-0.8,1.1l-0.1,3.9l-1.9,2.5l-0.5,1.5l1.4,1.1l-0.8,1l-0.6,1.8l-2.3,2.2l-1.8,1L451.5,226.7L451.5,226.7z
	"/>
<path class="btn-more" id="path2726" title="新竹縣" sodipodi:nodetypes="cssssssssssscssssssssssssssssssssssssssssssssssssssssssscsssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssscsssssssssssssssssscssssssssssssssssssscsssssssscssssssssssscssscsssssssssssssssssssssssssssscssssssssssssssscssssssssssssssssscssssssssssssssssssssssssssssssssssscssssssssssscssssssssssssssssscsssssscsssssssssssssscssssssssssssssssssc" class="st0" d="
	M581.5,323.2l-1.7,0.9l-0.6,1.4l-1.3,0.8l-5.8-0.1l-1.3,0.6l-5.7-0.1l-0.9-1l-0.1-2.1l0.3-1.3l-0.6-0.8v-3.8l-0.9-1.3l-1.5-0.9
	l-1.1-1.3l-0.6-1.5l-2.1-2.4l-0.6-1.5l-1.5-0.8l-0.8-1.1l-1.6-0.9l-0.5-1.3l0.3-2.9l-1.1-1.5l-3.7-0.3l-1.5,0.5l-2.7,1.8h-4.3
	l-1.4,0.8h-1.9l-1.3-1.1l-7.6-0.4l-1.4,0.5l-1.5-0.4h-1.9l-2.1,1.9l-3.4,1.4l-3.4-0.8h-5.9v-2.1l-0.9-1.9v-2l0.8-1.5l2.1-2.3
	l0.5-1.5l-0.1-1.9l-1.5-2.9l-2.7-2.1l2-3.3l1.1-4.2l1.1-1.4l0.1-1.8l0.9-1.3l0.4-1.6l-1.4-0.8l-1.1-3.4l-1.9-0.5l-1.4-3.2l-0.9-0.4
	l-2,0.5l-1.5,0.9l-2.4-1.9l-0.9-1.5l-1.6-0.4L495,261l-2-3.2l-1.8-0.3l-1.8-0.8l-0.1-1.8l-1.1-1.3l-1.8-0.3l-3.3-2.1l-0.9-1.5
	l-1.4-1.4l-1.6-2.9l-0.3-1.8l-2-0.8l0.4-1.3l0.9-1.4l0.3-1.6l1-1.3l-1.4-0.8l0.9-1.1l-3.5,0.3l-1.3,1l-1.5,0.6l-0.9-1.1h-2.9
	l-1.5-0.8l-1-1.2l2.5-3.1l0.4-3.7l1.3-2.9l1.6-0.4l1-1.5l1.5-0.6l1.1-0.9l0.5-1.5l0.9-1.4l5.4-1.3l-0.5-1.4l1.1-1.8l1.5-0.5h1.9
	l7.1,7.2l1.5-1v-3.8l-3.3-11.1l-1.9-2.7l-3.4-2.9l-3.7-0.4l-0.1-0.6l-0.5-1l-1.4-0.9h-1.9l-7.7-1.9l-1.9-2.7l-0.5-1.4l-1.6-1.3
	l0.6-1.5l2-2.5l0.5-1.8l1-0.9l0.6-3.4l5.6-6.9l-0.8-1.5l-0.4-1.9l5.5-7.9l3.1,0.8l4.3-2.5l2.3,1.5l4.3-1.3l3.7,0.3l2.1,2.1l1.8,0.1
	l0.1,1.8l1.1,3l-0.6,1.5l-0.1,3.7l3,1.1l1.3,1.4h1.9l2,0.6l1.6,1.3l1.9-0.1l1.6-0.6l1.3-0.9l1.4,0.8l-1,0.9l0.3,1.9l0.8,1.5l11.7,1
	l1.4,1l0.5,5.6L532,190l-0.4,1.6l3,1.9l0.6,0.9l3.5,2.8l1.8,0.6l1.9,0.3v1.4l2,0.8l8.2,6.3h1.6l3.9-1.8l1.5,0.5v1.9l2.1,0.4l1.5,0.6
	l0.9,2.4l0.1,1.1l0.4,0.6l1.5,0.9l1,1.3l1.6,0.9h0.3l0.5,0.8l1.8,0.1l1.4,0.5l1.3,1.3l1.8,0.4l0.6,1.5l1.3,1.3l-0.4,1.6l-0.9,1.3
	l-0.5,1.4l-0.1,4.4l2.1,0.4v3.8l-0.6,1.3l-1.1,1.1v3.8l1.4,0.5l3-1l2.9,1.4l2.3,2.9l1.1,0.9l0.8,1.3l0.3,1.8l0.6,1.3h1.9l1.6,0.8
	l0.3,1.9l-0.5,1.5l-0.1,1.9l-1,1l0.1,3.8l1.3,0.8l1.6,0.3l1.5,0.8l-0.4,1.8l-0.8,1.4v3.9l1.4,0.5l0.5,1.5l0.8,1h0.9l1.3,1.9l1.5,0.9
	l3.7,0.5l2.6-0.7l1.4,1l0.6,1.4l0.1,1.8l0.5,1.4l-1.3,1.1l-0.5,0.3l-0.5,0.8L606,283l-1.4,1.5l-0.4,1.6l0.6,1.3l0.1,7.3l-0.8,1.8
	l-1.1,1.4l-1.4,1l-1.6,2.5l-1.8,1.4l-0.5,1.3l-1.4-0.1l-3.4,4.9l-1.3,0.8l-1.9-0.4l-1.4,2.8l-1.4,0.8l-1.1,2.9l-0.9,1.1l-1.5,1.3
	l-1.3,2.5l-0.1,1.8L581.5,323.2"/>
<path class="btn-more3" id="path2781" title="苗栗縣" class="st4" d="M467.4,235.6l1.5,0.8h2.9l0.9,1.1l1.5-0.6l1.3-1l3.5-0.3l-0.9,1.1l1.4,0.8l-1,1.3l-0.3,1.6
	l-0.9,1.4l-0.4,1.3l2,0.8l0.3,1.8l1.6,2.9l1.4,1.4l0.9,1.5l3.3,2.1l1.8,0.3l1.1,1.3l0.1,1.8l1.8,0.8l1.8,0.3l2,3.2l1.3,0.9l1.6,0.4
	l0.9,1.5l2.4,1.9l1.5-0.9l2-0.5l0.9,0.4l1.4,3.2l1.9,0.5l1.1,3.4l1.4,0.8l-0.4,1.6l-0.9,1.3l-0.1,1.8l-1.1,1.4l-1.1,4.2l-2,3.3
	l2.7,2.1l1.5,2.9l0.1,1.9l-0.5,1.5l-2.1,2.3l-0.8,1.5v2l0.9,1.9v2.1h5.9l3.4,0.8l3.4-1.4l2.1-1.9h1.9l1.5,0.4l1.4-0.5l7.6,0.4
	l1.3,1.1h1.9l1.4-0.8h4.3l2.7-1.8l1.5-0.5l3.7,0.3l1.1,1.5l-0.3,2.9l0.5,1.3l1.6,0.9l0.8,1.1l1.5,0.8l0.6,1.5l2.1,2.4l0.6,1.5
	l1.1,1.3l1.5,0.9l0.9,1.3v3.8l0.6,0.8l-0.3,1.3l0.1,3.9l-1.8,0.9l-2,1.6l-1.4,1.8l-0.2,2.5l-3.4,5.5v2.7l-2.1,0.5h-2.7l-1.8-2.5
	l0.9-1.4l-2.7-1.1l-2,0.9l-0.7,2.1l-1.3,1.8l-2.3,0.7l-4.8,6.8l-2,0.7h-5.4l-1.8,1.3l-0.7,2l-0.7,0.2l-2,2.1l-0.4,2.5l-2.1,0.5
	l-3.4,2.9l-2.1,0.5l-5-0.5L506,364l-5.4,6.8l-2.7,0.2l-2-1.1l-3.2-3l-0.4-2.5l-1.8-1.3l-2.7-3.9l-1.6,0.4h-2.7l-2-0.9l-5-0.4
	l-6.1-2.1l-4.8-0.2l-2.1,0.9l-1.4,1.4v2.7l0.9,2l0.4,5l-0.9,2l-1.8,1.4l-2.1,0.7l-10.4-0.4l-2,0.9H441l-5.2-1.6l-3.2-3l-1.1-2
	l-1.6-1.3l-11.3-2.1l-3.4-2.9l-2.5-0.7l-1.4-2l-3.6-2l-1.4-1.6l-2.1-0.7l-1.3-1.6l-0.9-0.4l-3-0.4l-1.3-1.8l-3.2-2.1l-7.5-9.6h-0.4
	l-0.9-1.8l-4.5-1.8l-2.3-3.8l-0.4-2l-3.8-4.7l1.6-0.7l3.8-3.2l3-3.9l0.6-1.4l5.2-6.8l1.3-3.2l1.4-1.9l9.5-28.2l2.3-2.9l0.1-0.8
	l1.2-1.3l3.2-0.8l2.7,2.3l1.1,1.7l0.4-1.5l-0.4-2l2.7-1.6h1.4l1,0.3l-0.1-1.7l-1.7-0.8l-1.5-1.1l1-0.9l0.6-3.3l3-5.3l1.7-0.3l2-2.4
	l5.6-0.3l4.4-2h2.4l3.9,1.4l1,1l2.3,0.5l1.3-0.8l-0.8-1l-1.9-0.3l-1.5-0.7l-0.8-1.6l-1.8-0.3l0.1-1.8l1-1.1l1.5-0.8l5.5-4.7l0.5-1.6
	l0.9-1.2l0.4-1.5v-1.9l1.3-2.8l1.3-1.1l0.9-1.3l1.9-0.8l0.5,1l1.3,0.6h2l1.4-0.5l1.1-0.9l1.4,0.5l1.9,2.3l0.5,1.6v1.5l4,1.1
	L467.4,235.6L467.4,235.6z"/>
<path class="btn-more3" id="path2785" title="彰化縣" sodipodi:nodetypes="cssssssssssssssssssssssssssscsssssscssssssssssssssssssssssssssssssssscsssscsscssssssssssssscsssssssssscssssssssssssscsssssssscssssssssssssssssscsssssssssssssscsssssssssssssssscssssssssssssssscssssssssssssscssssssssssssssc" class="st4" d="
	M264,520.7l6.3,2.3l3.8,0.3l5.8,1.8l16.2-0.8l2.8-1l14.6,0.3l2.5-1.3l5.1,2.8l0.8,1.3l4.3,0.5l8.1,4l6.3,1.5l7.3-0.3l3-0.8l30.6,5.1
	l5.8-1.8l2-1.8l1.3-2.5V527l-2-0.5l-2.5,1.3h-3.3l-2.5-1.3l-7.3-7.8l0.3-2.3l1.3-2.5l-1.8-2l1.5-2.5l0.5-3.3l1.3-2.5l1.3-9.6
	l-0.5-2.8l0.5-2.3l-1-5.6l1.5-2.3l2-1.8l1.3-2.5l0.3-3.5l-1.3-2.8l-1.8-2l-0.5-0.3l0.3-3.8h7.6l4-2.3l-5.8-4.8l-1.1,0.7l-3.6,0.4
	l-1.6-1.4l-2.5-0.2l-1.4-7l0.9-2V445l-1.8-1.4l-1.6-2.1v-5.4l-0.4-0.9L369,434h-2.5l-7.5-2.1l-2.7-0.2l-2-1.1l-2.1-0.5l-1.6-1.3
	l-2-0.9l-1.4-2.3h-0.5l-1.8-1.3l-1.3-1.6l0.2-2.5l1.3-1.6l-3.2-3.4l-0.4-2.7l-1.1-2.7l-0.4-2.3l-2.1-3.4l-4.4-2l-1.5,0.4l0.5,1.5
	l0.7,0.9l-1.5,0.8l-3.3,4.2l0,0.1l-2.7,4.3l-1.3,0.8l-5.6,0.1l0.3,1.5l1.5,1.3l-0.1,3.7l-1,0.9l-0.6,1.4l-0.4,1.8l-0.9,1.3l-0.1,3.8
	l-0.1,0.4l-1,1.5v1.9l0.6,1.3l-0.3,1.9l-1.4,1.3l-3,1.2l-0.8,1.8l-2.3,2.4l-0.3,3.5l-0.6,1.4l-2.7,0.5l-1.4,1.1l-1.6,0.3l-2.4,1.8
	l-1.4,0.5l-0.4,1.6l-4.1,3l-0.8,3v2.2l-0.9,1.5l-0.3,1.6l-1.3,0.9l-0.6,3.3l-2.4,0.2l-1.9-0.4l-1.4,1.2l-1,4.9l0.4,1.2h3.8v0.9
	l-4.8,7.2l-0.3-0.1l-0.4,2l-0.9,1.1l-0.4,1.5l-1,1l-1.3,4.8l-2.1,2.4l-0.5,1.8l-1.9,2.5l-0.6,1.5l-0.9,1l-0.3,2.2l-1.3,0.7l-1.1,1
	l-1.4,0.8l-0.9,1.3l-1.4,0.8v1.4l0.9,1.3l-0.7,0.5h-1.9l-0.9,1.3l-0.3,3.7l-0.4,1"/>
<path class="btn-more3" id="path2792" title="台中市" sodipodi:nodetypes="cssssssssssssscsssssssssscssssssssssssscssscsssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssscsssssssssssscssssssssssssssssssssssssssscsssssssssssssssssssssssssssscsssssssssscssssssssssssssssssssssssssscssssssssssssssssssssssssssssssscsssssssssssssssssssssssscsssssssssssssssssssscscsssssssssccssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssssssssc" class="st4" d="
	M333.5,402.2l4.4,2l2.1,3.4l0.4,2.3l1.1,2.7l0.4,2.7l3.2,3.4l-1.3,1.6l-0.2,2.5l1.3,1.6l1.8,1.3h0.5l1.4,2.3l2,0.9l1.6,1.3l2.1,0.5
	l2,1.1l10.2,2.3h2.5l1.6,1.3l0.4,0.9v5.4l1.6,2.1l1.8,1.4v2.9l-0.9,2l1.4,7l2.5,0.2l1.6,1.4l3.6-0.4l1.1-0.7l5.7,4.8l8.9,3.2
	l2.1-0.5h5.4l2.5,0.5l1.8,1.6l2.1-0.2l4.3-1.4l6.4-7l3.8-9.8l3.2-3.2l4.5-1.3l1.3-1.6l-0.4-6.6l3.8-7.5l1.6-1.1l2.3,0.7l1.1,1.6
	l4.6,0.9l1.6,1.4v5.4l1.1,0.5l0.7-1.6l1.4-1.3l0.9-1.8l1.1-4.3l1.6,1.4l0.4,0.5l2.9,1.4l2.5,0.4l2.5-0.5l6.1-5.2l2.3-0.4l1.4,1.3
	l2.3,0.5l5.2-0.2l1.8-1.1l2.7-2.7l2-6.3l1.4-1.4l2.5-0.5l4.3,0.5l1.6-1.1h4.1l3.9-2l1.3-2l2-1.3l1.3-1.6l1.8-1.1l1.3-2l0.5-2.1
	l1.8-0.9l10.5-0.2l1.4-1.3l1.3-2l0.7-2l2.5-0.2l1.3-1.6l1.6-1.1l2,0.9l1.3,1.4l4.3,1.3l0.9-1.8l1.8-1.1h2.7l4.1-1.8l1.6,1.1l2.5,0.9
	l2-0.7l1.3-2.1l0.5-2.1l2.3-3.8h0.9l3.2,2.3l1.1,1.6l4.6,1.1h2.7l1.1-1.6l4.8,0.5l1.3,1.3l6.4,1.8l1.8-1.4l0.9-1.8l-0.2-2.5l3.8-1.6
	l1.1-1.6l2.7,0.2l1.4-1.3l0.5-2.3l-0.9-4.6l1.3-2l2.3-0.9l1.6-1.1l1.8-4.1l1.4-1.6h2.7l1.8-1.3l1.4-1.8l2.1-4.3l0.7-7.3l0.9-2
	l2.3-1.3l1.3-1.5l-1.3-2.1l-1.6-1.1l-1.1-1.8l-2.1-1.1l-7.1,0.9l-1.8,0.9l-2.3,0.4l-1.6,1.3l-1.3,1.6l-2.7,0.4l-1.8-0.9l-4.1-7h-4.8
	l-2-0.7l-2.7-2.7l0.9-7.1l-0.5-2.1l-0.9-1.8l-1.3-1.4l-0.4-0.2l-1.7,0.9l-0.6,1.4l-1.3,0.8l-5.8-0.1l-1.3,0.6l-6.5-0.2l-0.1,0.8
	l-1.8,0.9l-2,1.6l-1.4,1.8l-0.2,2.5l-3.4,5.5v2.7l-2.1,0.5h-2.7l-1.8-2.5l0.9-1.4l-2.7-1.1l-2,0.9l-0.7,2.1l-1.3,1.8l-2.3,0.7
	l-4.8,6.8l-2,0.7h-5.4l-1.8,1.3l-0.7,2l-0.7,0.2l-2,2.1l-0.4,2.5l-2.1,0.5l-3.4,2.9l-2.1,0.5l-5-0.5L506,364l-5.4,6.8l-2.7,0.2
	l-2-1.1l-3.2-3l-0.4-2.5l-1.8-1.3l-2.7-3.9l-1.6,0.4h-2.7l-2-0.9l-5-0.4l-6.1-2.1l-4.8-0.2l-2.1,0.9l-1.4,1.4v2.7l0.9,2l0.4,5
	l-0.9,2l-1.8,1.4l-2.1,0.7l-10.4-0.4l-2,0.9H441l-5.2-1.6l-3.2-3l-1.1-2l-1.6-1.3l-11.3-2.1l-3.4-2.9l-2.5-0.7l-1.4-2l-3.6-2
	l-1.4-1.6l-2.1-0.7l-1.3-1.6l-0.9-0.4l-3-0.4l-1.3-1.8l-3.2-2.1l-7.5-9.6h-0.4l-0.9-1.8l-4.5-1.8l-2.3-3.8l-0.4-2l-3.6-4.7l-1.7,0.4
	l-0.3,2.3l-9.1,12.6l-1.9,4.7l0.3,3.8l-0.1,0.5l-1.3,1.6l-0.5,1.4l-2.8,1.3l-1,1.8l-4.7,3.2l0.1,1.4l0.5,1.2l0.1,2.1l-0.9,1
	l-2.4-0.8l2.8,1.3l0.5,1.3l-1,1.4l-0.9,0.8l-2.3-2.9l-0.9,0.5l-1.1,1.3l-2.2,1.2l0.1,1.8l-0.8,1.3l-2.8,1.6l-0.9,1.4l4.2,5.7
	l-0.1,1.6l-0.9,1.3l-0.4,1.5l-1-1.9l0.2-1.6l-1.5,1.6l-1.5-0.1l-0.4-1.9l0.9-1.8l-0.1-1.8l-1.3,1.3l-2.3,6.4l1.6,1.3l0.6,1.4
	l0.6,0.5l0.1-0.3l1.8,1.1v1.9l-0.6,1.5l-3.9,5.7l-1.2,0.9l-1.5,3.8L333.5,402.2L333.5,402.2z"/>
<path class="btn-more3" id="path2812" title="雲林縣" sodipodi:nodetypes="csssssssssssssssssscssssssssssssssscsssssscssssssssssssssssssssssssssscssssssssssssscsssssssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssc" class="st4" d="
	M405.4,594.2v-3l-2.3-2l-3.3-0.5l-1,2.8l-2.8,0.5l-3.3-0.8l-0.8,3l-3,0.5l-3.5-0.3l-2.3-1.5l-1.5-2.8l-0.8-3l-4.8,3.5l-0.3-7.3
	l2-5.8l0.3-0.3l1.8-4l0.5-3.3l-0.3-3.5l-1.5-2.5l-0.3-7.3l0.8-3l2.8,0.5l0.5-7.1l-5.1-10.9l-20.7-3l-3.8-1.5l-2-0.3l-10.4,1
	l-14.4-5.6l-4.3-0.5l-0.8-1.3l-5.1-2.8l-2.5,1.3l-14.6-0.3l-7.6,2l-11.4-0.3l-5.8-1.8l-3.8-0.3l-6.4-2.2l-3.9,0.1l-1.3-0.7l-1.4-0.3
	l-0.5,1.5l-1.8,0.1l-6.1,10.8l-0.1,0.7l-2.2-0.1l-1.3,0.8l-2,2.4l-0.6,1.6l-0.3,3.8l-1,1.2l-0.3,1.6l1.7,2.4l-0.3,1.8l-1.7,2.4
	l-3.2,0.1l-0.4,1.5v1.9l-2.2,1.2v2.4l-0.1-0.1l-0.5,0.3l-0.4,1.6v1.9l0.5,1.4l1.9,0.1l1.4,2l-2.3,2.8l-1.4,2.8l-0.4,1.5l-1.9,3.2
	l-1,3.5l-1.3,1.9l-2.6,7.4l0.3,7.5l-0.4,1.5l0.1,1.4l1.8,0.9l-0.1,1.7l-1.5,0.6l-2.2,1.6l0.5,2.2l1.1,0.6l1.5,0.3l0.1,1.9l-1,1.3
	v3.8l1.3,0.9l2,2.8l1.4,1.1l-1.3,0.8l-0.9,1.7l-1.8,0.1l-0.5-1.4l-1-0.9l-1.5,0.9l-2.2,2.5l3.9,0.1l5.8,2.3h3.8l1.5,2.3h3.8l2.8-1.3
	l6.3,2.3l3.8,0.5l2.3-1.8l1.8-2.3l0.3-3.5l-0.8-3l2-2h3.3v3.3l3.5,1.3l1-2.8l4.8-2.8l0.8-3.5l1.8-2l6.3-2.5l2.8,1.5l1.8-6.1l1.5-2.5
	l4,0.3l2.5-1.3l1-3l5.8-1.8l1-2.8l2.3-1.8l1.8-2.3l2.8,1.3l2.3,1.8l2.8,1l5.8-2.3h7.6l5.3-2.8l5.1,1.3l1.5,5.1l4.3,3.5l1.5,2.3
	l2.5,1.5l3.5,0.3l2.3,1.8l3,1l13.9,1.5l2.8-1.5l1.8-2l5.6,0.3l-0.5,3.8l2,3.3l2-2l3.3-0.8l2,2l3-0.3l2.8-1l3.5,0.3l2.8,1.5l3.5,0.5
	l1.3-2.5v-3.5l-0.8-3l-1.5-2.3L405.4,594.2L405.4,594.2z"/>
<path class="btn-more3" id="path2425" title="南投縣" sodipodi:nodetypes="csssssssssssssscsssssssssssssssssscsssssssssscsssssssssssssssssssssscsscsssscsssssssssssssssscssssssssssssssssssssssssssscssssssssssssssssssssscssssssssssscsssssssssssscssssssscsssssssssssscsssssssssssscssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssssccsssscsssssssssssssssssssssssssssssssssz" class="st4" d="
	M377.4,536.1l5.1,10.9l-0.5,7.1l-2.8-0.5l-0.8,3l0.3,7.3l1.5,2.5l0.3,3.5l-1.5,6.1l-0.8,1.3l-0.3,0.3l-2,5.8l0.3,7.3l4.8-3.5l0.8,3
	l1.5,2.8l2.3,1.5l3.5,0.3l3-0.5l0.8-3l3.3,0.8l2.8-0.5l1-2.8l3.3,0.5l2.3,2l0.1,3l6.5-0.7l11.6,4.3h3.8l3.3,0.8l1.3,2.5l0.3,8.6
	l-0.8,3.3l-2.8,2.3v3.8l1.5,2.5l2.3,2l0.5,7.3l2.5,5.8l2,2.3l11.4,1.3l5.6-2.3l11.1,1l2.8,1l11.9,0.8l6.3,2.3h0.5l2.5,1.8l1.3,6.3
	l1,0.5l1.3-1.3l3-0.8l3-2l3-0.8l0.8-3.5l-1-3l-2.3-1.8l1.8-2l0.8-3.3l2-2.3l2.3-1.5l0.8-3l2.3-1.5l3.5,0.3l2.8-1.3h3.8l1.3-0.5
	l2.5,1.5l3,0.8l4.8-4v-7.6l0.8-3l2.3-1.5l-2.3-6.3l2.5-1.3l3.8,1l2.8-1.3l1.5-2.3l3.3-1.5l4.5-0.3l3.8-8.3l1.3-10.4l1.3-2.5v-3.8
	l2-5.6v-9.3l-2.5-2.3l-0.3-3.5l0.8-2.8l-8.1-5.8l0.3-3.5l3.3-0.8l3-2.3v-1.5l-0.8-3l0.5-3.5l2.3-1.5l1-3.3l0.3-3.8l1-3l2-2.5
	l0.3-3.8l2.3-2.3l3-0.8l-0.5-5.6l-1.8-3l4.3-3.8l-0.3-3l-1-3.3v-3.8l0.8-2v-7.6l-2-2.5l-1-0.3v-3.5l6.1-12.9l0.3-7.3l2.3-2.3
	l2.5-1.3l1.5-2.5l2.5-1.3l2-3.5l0.8-2.5l0.3-3.5l-1.5-2.3l-3.5-0.5l-1-2.8l-1.8-2l-3.8-1.3l-0.8-1l-0.3-6.3l2.8-6.6l3-0.8l2-1.8
	l2.8-1.3l3.8-3.8h3.8l1.5-2.3l-1.7-5.6l-1.4-0.8l-4.8-1.1l-1.3-1.3l-4.8-0.5l-1.1,1.6l-5.2-0.4l-2.1-0.7l-1.1-1.6l-3.2-2.3h-0.9
	l-2.3,3.8l-0.5,2.1l-1.3,2.1l-2,0.7l-2.5-0.9l-1.6-1.1l-4.1,1.8h-2.7l-1.8,1.1l-0.9,1.8l-4.3-1.3l-1.3-1.4l-2-0.9l-1.6,1.1l-1.3,1.6
	l-2.5,0.2l-0.7,2l-1.3,2l-1.4,1.3l-10.5,0.2l-1.8,0.9l-0.5,2.1l-1.3,2l-1.8,1.1l-1.3,1.6l-2,1.3l-1.3,2l-3.9,2h-4.1l-1.6,1.1
	l-4.3-0.5l-2.5,0.5l-1.4,1.4l-2,6.3l-2.7,2.7l-1.8,1.1l-5.2,0.2l-2.3-0.5l-1.4-1.3l-2.3,0.4l-6.1,5.2l-2.5,0.5l-2.5-0.4l-2.9-1.4
	l-0.4-0.5l-1.6-1.4l-1.1,4.3l-0.9,1.8l-1.4,1.3l-0.7,1.6l-1.1-0.5V432l-1.6-1.4l-4.6-0.9l-1.1-1.6l-2.3-0.7l-1.6,1.1l-3.8,7.5
	l0.4,6.6l-1.3,1.6l-4.5,1.3l-3.2,3.2l-3.8,9.8l-6.4,7l-4.3,1.4l-2.1,0.2l-1.8-1.6l-2.5-0.5h-5.4l-2.1,0.5l-9-3.3l-3.9,2.3h-7.6
	l-0.3,3.8l0.5,0.3l1.8,2l1.3,2.8l-0.3,3.5l-1.3,2.5l-2,1.8l-1.5,2.3l1,5.6l-0.5,2.3l0.5,2.8l-1.3,9.6l-1.3,2.5l-0.5,3.3l-1.5,2.5
	l1.8,2l-1.3,2.5l-0.3,2.3l7.3,7.8l2.5,1.3h3.3l2.5-1.3l2,0.5v3.3l-1.3,2.5l-2,1.8l-5.8,1.8L377.4,536.1L377.4,536.1z"/>
<path class="btn-more3" id="path2907" title="嘉義縣" sodipodi:nodetypes="csssssssssssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssssssssssssssssscsssssssssscsssssssssssssssssssssscsssssssssssssscssssssssssssssscssssssssssssssssssscssssscssssssssssssssssssssssscsssssssssssssscsssssssssscssssssssssssssscssssssscssssssc" class="st4" d="
	M229.7,689.4l-0.2-1.7l-1.6-0.6h-3.8l-0.4-1.5l0.2-5.1l3-6.9l1.4,0.1l3.7-1.5l1.3-5l1-1.7l-0.3-3.5l-0.6-0.9l-1.4,1.3l-1.3-1
	l-0.8-1.5l-0.1-1.9l1-3.2v-1.7l-1.5-0.4l0.1-1.8l2.2-4.2h-1.7l-1.6-0.9l-0.4-2l0.8-1.5v-2l0.9-1.1l0.5-1.8l0.8-1.4v-1.9l-1.4-0.6
	l-5.7,0.4l-1.8-0.6l-0.9-1.5l0.4-9.1l1.6-0.9l3.9,0.1l5.8,2.3h3.8l1.5,2.3h3.8l2.8-1.3l6.3,2.3l3.8,0.5l2.3-1.8l1.8-2.3l0.3-3.5
	l-0.8-3l2-2h3.3v3.3l3.5,1.3l1-2.8l4.8-2.8l0.8-3.5l1.8-2l6.3-2.5l2.8,1.5l1.8-6.1l1.5-2.5l4,0.3l2.5-1.3l1-3l5.8-1.8l1-2.8l2.3-1.8
	l1.8-2.3l2.8,1.3l2.3,1.8l2.8,1l5.8-2.3h7.6l5.3-2.8l5.1,1.3l1.5,5.1l4.3,3.5l1.5,2.3l2.5,1.5l3.5,0.3l2.3,1.8l3,1l13.9,1.5l2.8-1.5
	l1.8-2l5.6,0.3l-0.5,3.8l2,3.3l2-2l3.3-0.8l2,2l3-0.3l2.8-1l3.5,0.3l2.8,1.5l3.5,0.5l1.3-2.5v-3.5l-0.8-3l-1.5-2.3l1.6-2.4l6.4-0.6
	l11.6,4.3h3.8l3.3,0.8l1.3,2.5l0.3,8.6l-0.8,3.3l-2.8,2.3v3.8l1.5,2.5l2.3,2l0.5,7.3l2.5,5.8l2,2.3l11.4,1.3l5.6-2.3l11.1,1l2.8,1
	l8.5,0.2l-1.2,0.3l-2.5,1.3l-6.6,1l-2.3,1.5l-6.3,1.3l-4.3,3.5l-1.5,2.5l-2.8,1.3l-2.3,1.8l-3.3,0.5l-2.3,2.5l-1.8,4.3l-1.8,1.5
	l-1,2.8l-1.8,2l-0.3,3.5l-2.8,1h-3.8l-2,2l-1.5,2.5l-4,4l-7.1,0.5l-2.3,5.8l-5.1,2.5l-1,2.8l-6.6,0.5l-1.3,6.6l-8.1-0.3l-2.3-2
	l-7.8-0.3l-1.3,11.6l1.3,2.8l2,2.5v3.8l-2,1.8l-2.5-1.3l-6.3,1.3l-3-1l-3.5-2.5l-3.8,5.6l-3,0.8l-3.3-0.3l-4.3-3l-6.1-1.8l-1-2.5
	l3.3-4.8l-0.8-2.5l-2-3.3l-0.5-2.5l1.3-2.5l-1-2.8l-0.3-3.5l1.5-2.8l2.3-1.8l0.3-3l-1-2.8l-3.5-0.3l-3.8-1.3l-1-2.3l2.5-1.8
	l-0.3-3.3l-7.8-0.5v-3.3l2.5-1.8l1.5-2.3l-2-1.8l-2.3,1.3l-3-0.8l-2.5-2l-3.3-1l-1.8-2.3l-3.8-1l-0.3,0.5l-2.3,1.5l-3.3,0.3l-2-2
	l-3.3,0.5l-5.3,2.5H293l-6.1,3.5l-0.3,0.3l-1.5,2.5l-6.3-0.3l0.3,3l-7.1,0.5l-0.5,3.3l-1.3,2.5l-1.8,1.5l-2.5-1.5l-2,2l1,2.8
	l-0.5,1.8l-9.6,4.8l-0.8,3l-3.3,4.8l-3,1.3l-4.5-1.3l-1.3-2v2.8l-2.5-0.3l-2.3-2l-1-3l-3.8-0.8L229.7,689.4L229.7,689.4z"/>
<path class="btn-more2" id="path2905" title="台南市" sodipodi:nodetypes="cssssscssssssssssssssssssssssscsssssssssssssscsssssssssscssssssssssssssscssssssscsssssscsssssssssssssssssssssssssscssssssssssssssssssscsssscssssssssssssssssssssssssssssssssscsscssssssssssssssssssssssssscsssssssssssssscscssssssssscsssssssssssssssscssssssssssssssssssssssscssssssscsssssssssc" class="st3" d="
	M380.4,719.2l-1,0.8l-2.5-1.3l-6.3,1.3l-3-1l-3.5-2.5l-3.8,5.6l-3,0.8l-3.3-0.3l-4.3-3l-6.1-1.8l-1-2.5l3.3-4.8l-0.8-2.5l-2-3.3
	l-0.5-2.5l1.3-2.5l-1-2.8l-0.3-3.5l1.5-2.8l2.3-1.8l0.3-3l-1-2.8l-3.5-0.3l-3.8-1.3l-1-2.3l2.5-1.8l-0.3-3.3l-7.8-0.5v-3.3l2.5-1.8
	l1.5-2.3l-2-1.8l-2.3,1.3l-3-0.8l-2.5-2l-3.3-1l-1.8-2.3l-3.8-1l-0.3,0.5l-2.3,1.5l-3.3,0.3l-2-2l-3.3,0.5l-5.3,2.5H293l-6.1,3.5
	l-0.3,0.3l-1.5,2.5l-6.3-0.3l0.3,3l-7.1,0.5l-0.5,3.3l-1.3,2.5l-1.8,1.5l-2.5-1.5l-2,2l1,2.8l-0.5,1.8l-9.6,4.8l-0.8,3l-3.3,4.8
	l-3,1.3l-4.5-1.3l-1.3-2v2.8l-2.5-0.3l-2.3-2l-1-3l-3.8-0.8l-2.8-1.8l-0.8-1l-7.2-1.3l-3.9,6.8l0.6,1.3l1,0.1l-0.6,1.9l-1.3,0.9
	l-0.3,1.8l2.8,1.7l1.2,0.3l1.6-0.5l-2.2,3.2l-3.4,1.3l-0.9,1.3l0.3,1.8l0.8,1.5l-2.5,2.4l-0.4,1.7l-0.8,1.4l-2.4-0.6l-0.6,1.3
	l-0.8,3.4l0.1,3.8l-4.9,9.2l-0.5,3.5l-1.5,2.5l1.1-1.4l1.5-0.6l1.5-0.1l0.6,8l1.2,0.9l1.5,0.6l-0.9,5.3l-3.3,1.4h-0.3l-3.5,1.2
	l-3.2,2.9l-3.3,1.5l-0.3,3.5l0.3,0.5l0.3,3.7l0.8,0.9h1.9l-0.1,5.9l0.8,2.4l2.1,2.5l0.3,0.8l1.9-0.7l1.3-0.9l1.1-1.2l1.5-2.8
	l5.6-6.3l3-2l19.9-1.8l1,1l0.8,3l6.8-0.3l0.5,2.8l3,0.5l2.5-1.3l6.3,2.8l1.5,2.5l-2,2.5l-3.3,1.3l-5.3,7.6l3.8,2.5l7.3,9.3l-3.3,8.3
	h-3.8l-2.8,1.3l-0.3,3.5l-2.8,0.5l-4.5,8.3l8.5,3.1l2.5-1.3l1.8,1l3.8,4h3.5l0.5-0.8l2.8,1.3l2,0.3l1.5-2l17.9,4l3.8-0.3l6.3-5.8
	l1.8-2.5l3-1l3.5-0.3l2.5,1.5h3l1.5-6.3l1.5-0.8l1-1.3l0.5-3.3l3.8-8.8l3-0.8l1-3l0.3-3.5l5.6-0.3l0.3-3.5l9.1-6.6l3.5-5.6l10.4-7.1
	l2.3-2.5l3.8-2.3l0.5-3l0.3-0.3l1.3-0.8l0.5-3.5l1.3-2.5l0.3-3.5l5.6-6.8l1.8-0.3l8.1-10.9l0.3-3.8l4-5.1l0.8-3l-2.3-1.8
	L380.4,719.2L380.4,719.2z"/>
<path class="btn-more2" id="path2891" title="高雄市" sodipodi:nodetypes="cssssssssscssssssscssssssssssssssssssssssscsssssssssssssssscssssssssscscsscscsssssssssssssssssssssssssssssssssssssssssssssccssssssscssssscsssccssscscsscssscsssssscsssssssssscsssssssssssscsssssssssscsssssssssscsssssssssssscssssssssscssscssssssssscsssssssssssssssssssssssccsssssssssssssssssssssscssssssssssscsssssssssssscsscssssssssssssssssscsssscsscsssssssssssssscssssssssssssssscsssssssssssssssssssc" class="st3" d="
	M380.3,719.3l0.3,0.4l2.3,1.8l-0.8,3l-4,5.1l-0.3,3.8l-8.1,10.9l-1.8,0.3l-5.6,6.8l-0.3,3.5l-1.3,2.5l-0.5,3.5l-1.3,0.8l-0.3,0.3
	l-0.5,3L342,776.8l-3.5,5.6l-9.1,6.6l-0.3,3.5l-5.6,0.3l-0.3,3.5l-1,3l-3,0.8l-3.8,8.8l-0.5,3.3l-1,1.3l-1.5,0.8l-1.5,6.3h-3
	l-2.5-1.5l-3.5,0.3l-3,1l-8.1,8.3l-3.8,0.3l-10.1-3.3l-7.8-0.8l-1.5,2l-2-0.3l-2.8-1.3l-0.5,0.8h-3.5l-3.8-4l-1.8-1l-2.5,1.3
	l-8.4-3.2l-1.7,0.7l-3.2,3l1.2,1.4l0.8,4.2l3,6.3v1.9h0.7l0.3-1.6l0.6-1.3l1.9-0.1l2.1,5.1l-0.3,1.6l-1.9,0.3l-1.4-0.9l-0.8-1.3
	l-0.4,0.9l0.1,1.8l0.8,2.3l0.1,1.8l1.8,3.4v1.4l8.9,21.1l0.2,1.8l1.5,3.4l1.4,1.8l3.1,6.6l2.9-2.9l8.2-2.1l3.2,2.1l2.1-1.4l3.9-0.7
	l1.1-4.3l1.4-1.8l2.1,5l-0.7,4.6l-2.1,3.2l-1.1,4.3l-2.9,1.8l2.1,3.9l4.6,4.3l-1.8,3.6v1.1l4.6,2.5l-1.8,7.5l-1.4,2.9l-3.2,1.1
	l0.7,1.8l2.9,0.4v1.8l-4.6,1.4v3.6l4.6-0.4l4.6,0.7l5-0.4l2.5,1.4l3.2,3.9l1.8,3.6v5l-8.9,8.6l-1.5,3.3l6.8,5.6l1.8,0.8l2.8,2.5
	l5.4,1.6l0.3-0.6l-0.9-14.5l0.9-2.9l0.9-1.1l1.8,0.4l2.5-2.2l2-5.8l0.3-3.5l1.8-6.1V924l-3.5-4.3l0.3-18.2l2-6.1l1.8-2.3l1.8-6.8
	l-0.3-4.5l0.8-1.3l-0.3-15.2l1.3-2.8l0.5-3.3l1.3-2.5l1.5-9.8l2.5-1.3l1.8,0.8l4.5,0.3l1.5,2.3h3.8l2.8-1.3l6.1,1.5l3.5-0.3l2.3-1.8
	l2.5-3.3l0.3-1.3l4-3.3l1.3-0.5l6.6-4.5l3.5-0.3l2.8-2l3-0.8l3,1.3l1.8,2v3.8l2.8,1.3h2.8l1-1l3-0.8l3.3-4.8l3-0.8h3.8l8.6,5.3
	l6.3,7.6l2.8,1.5l2.8-1.5l1.8-2.3l5.1-2.5l1.5-2.3h3.3l1,0.3l2.5,1.3l0.3,1.3l2.3-0.8l4.5,3l0.7-6.8l-2.9-3.9l-5.4-0.4l-2.9-8.6
	l0.4-5l-1.4-1.4l-1.8-3.9v-5.4l1.1-4.3l10-12.9l0.7-1.8V785l6.4-4.6l-1.4-4.3l-2.5-2.5l1.8-4.3l3.6-3.9l-1.1-22.5l3.2-2.1l2.1-5
	l3.6-1.8l-1.1-3.9v-3.9l1.4-3.9l-0.4-1.8l-1.1-0.7l2.9-3.6l3.6-1.4l6.8-5.7l5-6.4h3.9l7.9-2.1l2.9-2.9l8.5-3.6l0.8-3l-0.3-3.5
	l-15.4-10.6l-3-0.8l1-3.5l1.8-2.5l3.3-1l-0.5-2.3l1.5-2.3l3.3-0.5l1.5-2.3v-7.1l-2.3-1.5l-0.6-1.7l-0.9-0.3l-1.3-6.3L487,643h-0.5
	l-9.9-2.8l-1,0.3l-2.5,1.3l-6.6,1l-2.3,1.5l-6.3,1.3l-4.3,3.5l-1.5,2.5l-2.8,1.3l-2.3,1.8l-3.3,0.5l-2.3,2.5l-1.8,4.3l-1.8,1.5
	l-1,2.8l-1.8,2l-0.3,3.5l-2.8,1h-3.8l-2,2l-1.5,2.5l-4,4l-7.1,0.5l-2.3,5.8l-5.1,2.5l-1,2.8l-6.6,0.5l-1.3,6.6l-8.1-0.3l-2.3-2
	l-7.8-0.3l-1.3,11.6l1.3,2.8l2,2.5v3.8L380.3,719.3L380.3,719.3z"/>
<path class="btn-more3" id="path2417" title="台中市" sodipodi:nodetypes="csssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssc" class="st4" d="
	M366.9,396.8l-2,7.1v3.8l-5.1,10.4l1.8,3l2.8,1l3.5,4.5l2.8,1l2,1.8l3,0.8l5.8-1l1.3,3.3l3.3-0.3l1.8-2l2.5-1.3l6.3-1.5l2.5-1.3
	l0.8-3v-3.3l-2.8-1l-1.8-2.3l2.3-1.5l3.3,0.5l2.8,1.3h7.1l6.3-1.5l1.8-2h7.6l0.3-11.1l-2.3-1.5l-2.8-1l-4.3-3.3h-3.5l-4,4.8
	l-2.3,1.5l-6.1,1.8l-3.5,0.3l-2.5-1.3l-1.5-2.3h-7.1l-2.3-1.5h-3l-2.5,1.8l-5.6-1.8l-2.8-1.8L366.9,396.8L366.9,396.8z"/>
<path class="btn-more3" id="path2421" title="嘉義市" sodipodi:nodetypes="cssssssssssssssssssssssssssssssssssc" class="st4" d="M302.5,630.6l0.5,3.3l3,3l-2,4.5
	l10.1,1.5l1,2.8l2,2.8l2.5,1.3l2.5-1.5l1.3-2.5l4.5-3.5l2,1.8l4.5,1.5l0.8-2.5l3.5-4.3l-2-2l-0.8-3l-3-0.8l-1.3-2.5l-2.3-1.5l-2.8,1
	l-2-1.8l-1.8-2.5l-2.5-1.3l-3,0.8l-7.1,5.1l-3-0.8L302.5,630.6L302.5,630.6z"/>
<path  class="btn-more2" id="path2899"  title="台南市" sodipodi:nodetypes="cssssscssssssssssscssssssssssssssssssssssssssssscsscsssssssssssssscsssssssssssssssssssssssssc" class="st3" d="
	M206.3,776l0.3,1.6l-0.3,1.8l4.7,2.8l0.9,0.3l1.8,1.6l3.2,1.7l3.9,4.2l1.5,0.8l5.3,4.9l0.1,0.5l3.4,3.3l2.4,3.7l1.6-0.4l2.3-2.1
	l1.4-0.8l-1,2.2l-0.9,1.1v1.3l3.3,0.9l-1.7,1.4l-1.9-0.1l-1-1.4l-0.9-0.5l0.8,1.9l1.2,1.5l0.5,1.7l-0.5,9.6l-0.5,1.4l1,2l1.3-0.8
	l2-2l1.5-0.6l4.5-8.3l2.8-0.5l0.3-3.5l2.8-1.3h3.8l3.3-8.3l-7.3-9.3l-3.8-2.5l5.3-7.6l3.3-1.3l2-2.5l-1.5-2.5l-6.3-2.8l-2.5,1.3
	l-3-0.5l-0.5-2.8l-6.8,0.3l-0.8-3l-1-1l-20,1.8l-3,2l-5.6,6.3L206.3,776L206.3,776z"/>
<path  class="btn-more2" id="path2887" title="高雄市" sodipodi:nodetypes="cssssssssssscssssssssssssscsssssssssssssssssscsssssscssssssscssssscsssccssscscsscssscssssssc" class="st3" d="
	M292.8,953.7l-1.5-0.8l-3.9-3.3l-0.6-1.4l-2.3-2.5l-1.4-0.8l-3.3-3.5l-0.6-0.1l-3.3,0.1l-1.6-0.4v-0.6l0.5-0.7l2.7-0.5l-2.8-4.5
	l-1-1l-0.7-1.4l-1-1.1l-1.1-0.8l-1.3-1.8l-0.6-1.4l-2.7-2.6l-1.3-3.4l-1.5-0.8l-0.8-1.1l1.1-0.8l0.1-1.9l-0.9-1v-1.9l-0.9-1.4
	l-2.8-2.5l-0.5-1.8l0.5-1.6l0.3-4.2l4-3.9l-2.5-6.1l3.9,3.9l2.1-2.5l-4.5-5.6l-1.7-3.8l2.9-2.9l8.2-2.1l3.2,2.1l2.1-1.4l3.9-0.7
	l1.1-4.3l1.4-1.8l2.1,5l-0.7,4.6l-2.1,3.2l-1.1,4.3l-2.9,1.8l2.1,3.9l4.6,4.3l-1.8,3.6v1.1l4.6,2.5l-1.8,7.5l-1.4,2.9l-3.2,1.1
	l0.7,1.8l2.9,0.4v1.8l-4.6,1.4v3.6l4.6-0.4l4.6,0.7l5-0.4l2.5,1.4l3.2,3.9l1.8,3.6v5l-8.9,8.6L292.8,953.7L292.8,953.7z"/>
<path class="btn-more2"id="path2861" title="屏東縣" sodipodi:nodetypes="csssssssssscssssscssssssssssscssscsssssssscssssssssssssssssscssssscssssssscscsssssssssssssssssssssssccssssssssssssssssssssssscssssssssscssscssssssssscsssssssssssscsssssssssscsssssssssscsssssssssssssssssssssssssssssssscssssssssscsssssssssssssssssscsssssssssssssssssscsssssssssscssssssssssssscssssssssssssssscsssssssssssssssssssssssssssssssssssscsssssssssssssssssssscsssssssssssssssssssssssssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssc" class="st3" d="
	M454.6,1041l-3,1l-2,1.8l-3.3,1.3l-2.8-4.8l-3-0.8h-4l-1.3-2.8l-2.8-1l-2.3-1.5l-4.3,0.3l-0.5-2.3l0.8-3.3l1.8-1l-2.8-1l-1-2.5
	l-4.8-2.8l1.8-2.3l2.5-1.3l-0.3-7.6l-2.5-1.5l-1.3-2.5h-2.8l-3.8-4l-3.5-1.8l4.8-14.6l6.6-1l1.3-2.8l-0.8-3.3l-2.8-2l-2.5-5.3
	l-4-2.5l-0.3-3l-1-3l4.3-3.3v-3.8l-4-8.1l-0.5-4.3l-1.8-1l-1-3l0.5-3.5l2.8-5.1l-1.3-2.8l1.5-2.3l1-2.8l-0.3-3.5l1-2.5l2-2l0.8-3
	l1.8-2l0.3-1l4-5.6l0.3-3.5l1.8-2.3l0.3-2.5l3.3,0.5l3.5-1.8l6.1-1.3l3-6.3l11.1-0.5l2-2.3l0.3-3.5l1.8-2l0.5-9.9l2-2l-1-2.3v-3.8
	l-1-3.3l-2.5-1.3l-3.3-0.3l-2.8-2.5l-0.8-1.5l-1-8.3l-3.8-2.5l-2.3,0.8l-0.3-1.3l-2.5-1.3l-1-0.3h-3.3l-1.5,2.3l-5.1,2.5l-1.8,2.3
	l-2.8,1.5l-2.8-1.5l-6.3-7.6l-8.6-5.3h-3.8l-3,0.8l-3.3,4.8l-3,0.8l-1,1h-2.8l-2.8-1.3v-3.8l-1.8-2l-3-1.3l-3,0.8l-2.8,2l-3.5,0.3
	l-6.6,4.5l-1.3,0.5l-4,3.3l-0.3,1.3l-2.5,3.3l-2.3,1.8l-3.5,0.3l-6.1-1.5l-2.8,1.3h-3.8l-1.5-2.3l-4.5-0.3l-1.8-0.8l-2.5,1.3
	l-1.5,9.8l-1.3,2.5l-0.5,3.3l-1.3,2.8l0.3,15.2l-0.8,1.3l0.3,4.5l-1.8,6.8l-1.8,2.3l-2,6.1l-0.3,18.2l3.5,4.3l-2.8,16.4l-1.3,2.8
	l-2.5,2.2l-0.2,1.8l-0.8,1.1l-0.1,3.8l-0.5,1.3l0.8,1.8l0.1,9.1l2.9,0.3l2,1.9l-0.1,1.8l-0.9,0.3l1.8,2.4l5,3.7l0.9,1.3l1.4,0.6
	l0.6,0.1l-0.2,0l0.2,0.4l3,1.3l1.2,1.3l1.5,1l2.9,1l1.1,1l1.5,0.8l1,0.9l1.7,0.8l1.1,1l9.6,5.2l1.1,1.4l1.7,0.5l10.8,8.7l0.9,1.3
	l2,5.4l-0.4,0.8l5.4,3.7l5.8,7.3l0.5,1.5v4.8l1.8,2.9l0.8,3.4l-0.1,1.8l-0.5,1.5l0.1,1.5l4,3.4l0.9,1.3l1.3,1l0.8,1.3l1,3.5l3.3,3.4
	l-0.9,1.8v1.9l0.4,1.8l1.2,1.3l1.6,4.9l0.1,5.6l1,3.3v1.9l0.7,1.3l0.5,2.2l1.3,1.1l0.8,1.3l0.3,1.8l1.4,1.4l0.3,3.6l0.8,1.3
	l-0.1,1.9l-0.8,1.3l-5.2,1.5l0.3,1.7l1.8,0.4l0.5,1.3l-0.1,0.6l0.4,1.6l0.6,1.3l-0.6,1.3l-0.9,1l-2.5,1.5l-0.3,1.6l1,1.2l-3.8,3.5
	v3.7l1.5,0.9v1.9l1.3,1.1l-0.4,1.5l3.9,3.4l0.4,1.4l1.3,1.3l0.8,1.3l0.5,2.5l-0.9,3l0.1,5.9l-1.1,2.7l0.9,1.1l1.8,0.3l0.9,3.3l1,1.7
	l3.9,0.4l1.5-2.4l1.1-0.9l0.3-1.7l-0.8-3.2l0.6-1.4l1.4-0.6l2-2.2l1.3-0.6h1.9l0.5,1.4l4.2,2.9l0.5,0.1l2.3-0.1l1.6,0.4l0.6,1.3
	l1.5,0.4l1.4,0.9l1.9,0.6l1.9,0.1l3.8,3.8l0.1,1.8l1.9,0.6l0.9,0.8l0.6,1.3l0.1,1.8l2.7,2.5h1.9l1.3-0.9l-0.3-1.7l-1-0.9l-0.4-1.6
	l0.1-1.8l-0.5-1.4l-4.9-7.5v-7.3l0.5-1.4l-0.6-1.4l0.5-3l1-0.4l0.1-1.7l3.4-0.5l1.7-0.6l0.6-1.3l1.5-0.4l1.3-1l0.5-1.5l0.1-1.8
	l0.9-1l1.8-0.1l0.4-3.4l3.7-2.4l0.4-1.4l-2-2.5l-0.1-9.3l-1.2-1.7v-1.9l2.7-4.5l1-1.1v-1.5l-1.5-0.6l-2-2.2l-0.6-1.6l-0.3-4.8
	l0.3-0.7l0.9-0.1l0.5-0.6l0.7-0.5l0.3-0.7l-0.9-1.4l0.1-3.7l-0.8-1.3l0.3-0.6l0.5-0.6l0.3-0.6l0.2-0.8l-0.2-0.8v-1.9l-0.3-1
	l-0.4-0.6l0.1-1.1l-0.6-0.8l-0.3-0.8l0.2-1.6l1.4-1.2l0.4-0.6l0.2-0.7l0.1-1.8l-0.3-0.8v-0.7l0.2-0.5l-0.9-1l0.8-3.3l1-1.1l0.5-1.4
	l-1-1.2l-0.2-0.9"/>
<path class="btn-more1" id="path2843" title="花蓮縣"  sodipodi:nodetypes="csssssssssssscsssscssssssscsssssssssssssssssssssssssssssscsssssscssssssscsssssssssscsssssscsscssssssssssssssssscsssssssssssssssscssssssssssssssssssssssssssscssssssssssssssssssssscssssssssssscsssssssssssscssssssscsssssssssssscssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssccsssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssc" class="st5" d="
	M634.8,653.2l-3.4-0.9l-2.3-1.8l-3-0.8h-3.8l-2.8,1l-4.3,3.5l-7.3,13.1l-0.3,0.3l0.5,4.5l2,2.3l3.3,1.8v0.3L601.4,695l-0.5,8.8
	l-1.8,2.3l-2.3,1.5l-1.3,2.5l-1.5,6.1l-2.3,1.8v3.8l-1.5,2.8l-0.3,2.8l-3,5.8l-4.3,3.5l-1,2.8l0.8,3.5v11.4l-1,2.8l-9.8,1.5
	l-2.5,1.8l-2-0.3l-0.3-3.5l-1.8-3.3l-2-1.8l-4.5-0.3l-1-0.8l-1.8-2.3l-3-1l-2.5-1.5V743l-3.8-5.3v-4.3l-1.3-2.8l-1.8-2.3l-5.1-3.3
	l-5.3,2.5l-0.5,1.3h-1l-2.8-1.3l-1.3-2.5l-3.5-4l-3.5-0.3l-5.3-3.3h-4.3l-1.3-2.5l-0.8-0.8l-3.8-9.1l0.3-3.8l-3.8-4.8l-0.8-2.5
	l0.8-3l-0.3-3.5l-15.4-10.6l-3-0.8l1-3.5l1.8-2.5l3.3-1l-0.5-2.3l1.5-2.3l3.3-0.5l1.5-2.3v-7.1l-2.3-1.5l-0.5-1.6l1.3-1.1l3-0.8l3-2
	l3-0.8l0.8-3.5l-1-3l-2.3-1.8l1.8-2l0.8-3.3l2-2.3l2.3-1.5l0.8-3l2.3-1.5l3.5,0.3l2.8-1.3h3.8l1.3-0.5l2.5,1.5l3,0.8l4.8-4v-7.6
	l0.8-3l2.3-1.5l-2.3-6.3l2.5-1.3l3.8,1l2.8-1.3l1.5-2.3l3.3-1.5l4.5-0.3l3.8-8.3l1.3-10.4l1.3-2.5v-3.8l2-5.6v-9.3l-2.5-2.3
	l-0.3-3.5l0.8-2.8l-8.1-5.8l0.3-3.5l3.3-0.8l3-2.3v-1.5l-0.8-3l0.5-3.5l2.3-1.5l1-3.3l0.3-3.8l1-3l2-2.5l0.3-3.8l2.3-2.3l3-0.8
	l-0.5-5.6l-1.8-3l4.3-3.8l-0.3-3l-1-3.3v-3.8l0.8-2v-7.6l-2-2.5l-1-0.3v-3.5l6.1-12.9l0.3-7.3l2.3-2.3l2.5-1.3l1.5-2.5l2.5-1.3
	l2-3.5l0.8-2.5l0.3-3.5l-1.5-2.3l-3.5-0.5l-1-2.8l-1.8-2l-3.8-1.3l-0.8-1l-0.3-6.3l2.8-6.6l3-0.8l2-1.8l2.8-1.3l3.8-3.8h3.8l1.5-2.3
	l-1.8-5.6l2-1.5l0.9-1.8l-0.2-2.5l3.8-1.6l1.1-1.6l2.7,0.2l1.4-1.3l0.5-2.3l-0.9-4.6l1.3-2l2.3-0.9l1.6-1.1l1.8-4.1l1.4-1.6h2.7
	l1.8-1.3l1.4-1.8l2.1-4.3l0.7-7.3l0.9-2l2.3-1.3l1.3-1.5l12,7.7h8.1l3,1.3l4,0.5l8.1,5.6l8.3,1l3-0.8l-3-2.5l0.8-3l3.3-0.8l2.3-1.5
	l2.3,1l2-1.8l-0.8-1.5l-2-1.8l0.3-3.3l2-0.8l4.3,3.8l4.8,1.5l4.5,3.5l9.1,3.8l7.3,0.5l8.1,4l4.2,0.5l-0.1,1.3l-0.6,1.3l-1.5,0.7
	l-0.9,1.5l-2.3,2l-2.7,3.9l-0.1,5.6l-1.2,0.9l-1.1,2.7l-1.5,0.6l-0.8,1.9l-0.3,0.1l-3.5,0.4l-3,5.4l-1.3,1l-1.7,0.3l-3.3,2.9
	l-1.5,0.4l-0.9,1.1l-1.3,0.8l-3.9,5.3l-1,3.3v5.7l2.4,4.3l-0.8,0.8l-0.5,5.2l-0.3,0.5l-0.4-0.3l-1.4,2.4l-1.4,0.5l-3.2,3.7l-1.5,0.8
	l-4.3,4.7l-0.6,1.4l0.1,11.9l0.6,1.3l0.5,3.3l7.2,7.5v1.9l-1,3.4l-1.4-0.4l-0.4,1.7l0.7,1.3l-1.5,0.5l-1.1,2.5h1.6l-0.8,3l-1.9,0.1
	l-0.8-1.1H672l-1,0.9l-0.6,1.7l-1.1,1.1l-1,3l1.4,3l0.1,5.6l-1,3.4l-0.1,5.3l-0.5,1.7l-0.1,5.6l-0.6,1.3l-0.4,3.4l-1.9,4.3v1.9
	l-0.6,1.4l-0.3,1.6l-1.9,3.9l-0.3,1.8l-3.3,4.8l-0.6,2.1v10.5l0.5,1.4l-1.4,6.4l-3.5,5.4l-1.7,1.1v1.8l-0.6,1.4l-0.1,1.8l0.9,0.6
	l0.8,2.5l-0.9,1.1l-0.3,1.7l-0.6,1.3l-0.9,6.9l-0.9,1l0.1,1.3l0.8,1.2l-1,1.1l-1.5,0.6l-0.5,3.4l-1.3,1.5l-0.1,12.8l-0.9,1.8
	l-0.1,3.9l-0.9,3l-1.4,1.3l-0.4,1.7l-1.6,2.4l-0.2,1.9l-1.3,3.3l-0.1,3.7l-0.9,1.4l-0.3,2.1l0.5,0.4l0.6,1.7v3.8l1.7,2.5l-0.1,3.7
	l-0.5,1.5l-1,1.1l-1.5,0.6l-1.8,0.1l0.4,0.5l1.7,1l-0.8,1.5v1.9l-0.9,3.3v1.9l-0.6,1.5L634.8,653.2L634.8,653.2z"/>
<path class="btn-more1" id="path2856" title="台東縣" sodipodi:nodetypes="cssscsssssssscsssssssssssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssscssscssssssssssssssssssssssssssscsssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssssssscssssssssssssssssssssssssssssssscssssssssssssssssssssssssssssssssssssssssssssssssssssssscsssssssssssssssssssssssssccsssssssssscssssscssssssssssscssscsssssssscssssssssssssssssscssssscssssssscscssssssssssssssssssssssscsssssssssssssssssssssscssssssssssscsssssssssssscsssssscsssssssssscssssssscsssssscsssssssssssssssssssssssssssssscssssssscsssscssssssssssssc" class="st5" d="
	M634.7,653.3l-2.2,6.8v1.9l-1.4,0.9l-1.8,7l-0.1,5.8l-1.8,3.8l0.1,5.5l-1.1,5.6l-1.5,1H623l-1.5,0.4l-1.3,1l-1.1,3.2l-0.8,1.3
	l-1.4,1.3l-0.6,1.4l-0.1,1.7l-1.2,1.1l-0.4,4.1l-1,1.3l-2.4,9.7l0.9,1.1l0.5,1.4l-0.8,1.3l-1.5,1.2l-1.4-0.3l-0.9-1.4l-1.1,0.5l1,1
	l0.1,1.4l-3,2l0.3,7.9l1.9,3.8l0.4,1.8l-0.3,3.7l-1.4,1.4l0.1,5.4l3,3.2l-0.9,2.9l-3.7,0.1l-1.3,1l-2.2,4.2L600,762l-3.8,0.1
	l-0.9,1.2l-1.4,0.8v1.9l-0.8,1.3v1.9l-2,2.9l-1.4,4.9l-1,1.4l-0.9,5.7l-1.2,1.7l-0.3,1.6l-1.1,0.8l-1,1.1l-1,2.9l-1,1.6l-1.3,5.1
	l-0.8,0.9l-0.5,1.5v1.9l-3.3,3.4l-0.5,1.4l-1.8,0.1l-1.1,1l-0.9,1.5l-0.7,0.3l-0.3,3.2l-3.4,7.4l-2.2,2l-2.1,4.4l-0.6,3.2l-1.2,1
	l-1.5,0.4l-2.4,2.5l-0.1,3l-3.2-0.8l-1.4,0.5l-3.4,0.5l-5.8,4.8l-0.8,1.2l-0.3,1.6l0.6,1.3l1.8,2l0.4,1.3h-1.9l-0.8,1.3l0.6,1.3
	l1.3,0.7l1,1.1l-0.4,1.8l1.1,2.8l-0.5,1.7l-2.1,1.9l-1.7,0.3l-1.4,1.4l-1.3,8l-2.2,2l-2.8,1.2l-1.2,1l-0.8,1.3l-2.5,2l-0.8,1.1
	l-1.1,0.8l-1.5,0.6l-3.8,4.5l-2.7,1.5l-1.5,0.4l-1,0.9l-1.4,0.6l-1.9,0.3l-1,1l-1.8,0.1l-0.9,1.1l-2.4,1.4l-1,1l-2.7,1.3l-0.4,1.5
	l-1,1.3l-1.8,0.1l-1.1,1l-4.1,1.8l-1.1,1l-1.7,2.6l-0.9,3.2l-1.1,1.3l-0.3,1.6l-0.9,1.2l-0.1,1.8l-0.8,1.5l0.1,1.8l-0.2,0.6
	l-0.2,5.2l-0.8,1.5l-0.1,1.4l-2,2.8l-3.5,3.2l-0.9,1.3l-1.7,0.9l-0.8,1.3l-0.3,1.7l-0.9,1.3l-0.1,1.8l-0.7,1.6v1.9L477,945v2.5
	l-2.9,6.8v1.9l-0.9,0.9v3.8l-2.2,4.2l0.1,2.1l-1.3,1.7l-0.5,3.5l-0.9,1.1l-0.3,3.5l-1,1.3l-0.4,1.8l-1.9,2.5l-0.5,1.4l-0.9,1.1
	l-3.6,10.1l-0.9,1.3l-0.5,5l-2.5,2.5l-2.9,9.1v3.5l-0.6,1.4l0.3,5.4l1.3,1.7v7.8l0.9,3.2l0.1,4.6l-3.5,1.2l-2,1.8l-3.3,1.3l-2.8-4.8
	l-3-0.8h-4l-1.3-2.8l-2.8-1l-2.3-1.5l-4.3,0.3l-0.5-2.3l0.8-3.3l1.8-1l-2.8-1l-1-2.5l-4.8-2.8l1.8-2.3l2.5-1.3l-0.3-7.6l-2.5-1.5
	l-1.3-2.5h-2.8l-3.8-4l-3.5-1.8l4.8-14.6l6.6-1l1.3-2.8l-0.8-3.3l-2.8-2l-2.5-5.3l-4-2.5l-0.3-3l-1-3l4.3-3.3v-3.8l-4-8.1l-0.5-4.3
	l-1.8-1l-1-3l0.5-3.5l2.8-5.1l-1.3-2.8l1.5-2.3l1-2.8l-0.3-3.5l1-2.5l2-2l0.8-3l1.8-2l0.3-1l4-5.6l0.3-3.5l1.8-2.3l0.3-2.5l3.3,0.5
	l3.5-1.8l6.1-1.3l3-6.3l11.1-0.5l2-2.3l0.3-3.5l1.8-2l0.5-9.9l2-2l-1-2.3v-3.8l-1-3.3l-2.5-1.3l-3.3-0.3l-2.8-2.5l-0.8-1.5l-0.8-3
	v-3.8l0.5-1l0.7-6.8l-2.9-3.9l-5.4-0.4l-2.9-8.6l0.4-5l-1.4-1.4l-1.8-3.9v-5.4l1.1-4.3l10-12.9l0.7-1.8V785l6.4-4.6l-1.4-4.3
	l-2.5-2.5l1.8-4.3l3.6-3.9l-1.1-22.5l3.2-2.1l2.1-5l3.6-1.8l-1.1-3.9v-3.9l1.4-3.9l-0.4-1.8l-1.1-0.7l2.9-3.6l3.6-1.4l6.8-5.7l5-6.4
	h3.9l7.9-2.1l2.9-2.9l8.4-3.6l0.9,2.5l3.8,4.8l-0.3,3.8l3.8,9.1l0.8,0.8l1.3,2.5h4.3l5.3,3.3l3.5,0.3l3.5,4l1.3,2.5l2.8,1.3h1
	l0.5-1.3l5.3-2.5l5.1,3.3l1.8,2.3l1.3,2.8v4.3l3.8,5.3v2.8l2.5,1.5l3,1l1.8,2.3l1,0.8l4.5,0.3l2,1.8l1.8,3.3l0.3,3.5l2,0.3l2.5-1.8
	l9.8-1.5l1-2.8v-11.4l-0.8-3.5l1-2.8l4.3-3.5l3-5.8l0.3-2.8l1.5-2.8v-3.8l2.3-1.8l1.5-6.1l1.3-2.5l2.3-1.5l1.8-2.3l0.5-8.8
	l12.1-18.4v-0.3l-3.3-1.8l-2-2.3l-0.5-4.5l0.3-0.3l7.3-13.1l4.3-3.5l2.8-1h3.8l3,0.8l2.3,1.8L634.7,653.3L634.7,653.3z"/>

</svg>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
            <!-- data table - 2018~2019年全國公立動物收容所收容處理情形統計表  -->
                <div  class="col-12 text-info font-weight-bold bounce wow">
                    <i class="fas fa-file-alt text-info" id="accept">&nbsp2018~2019年全國公立動物收容所收容處理情形統計表:
                    </i>
                <br>&nbsp;
                </div>
                
                <div class="col-12">
                    <table class="table table-hover table-light table-rwd my-2 rounded" id="showtable">
                        <thead class="thead-dark rounded tr-hide">
                            <tr>
                                <th>年份</th>    
                                <th>縣市別</th>
                                <th>月份</th>
                                <th>收容數</th>
                                <th>認領養數</th>
                                <th>認領養率(%)</th>
                                <th>總認領養數</th>
                                <th>人道處理數</th>
                                <th>人道處理率(%)</th>
                                <th>本所內死亡數</th>
                                <th>本所內死亡率(%)</th>
                                <th>在養數</th>
                            </tr>
                        </thead>
                            <tbody>
                        <?php
                            for($i=0;$i<count($json);$i++){
                        ?>
                            <tr>
                                <td class="table-danger" data-th="年份"><?=$json[$i]["rpt_year"]?></td>
                                <td data-th="縣市別"><?=$json[$i]["rpt_country"]?></td>
                                <td class="table-warning" data-th="月份"><?=$json[$i]["rpt_month"]?></td>
                                <td data-th="收容數"><?=$json[$i]["accept_num"]?></td>
                                <td class="table-primary" data-th="認領養數"><?=$json[$i]["adopt_num"]?></td>
                                <td data-th="認領養率(%)"><?=$json[$i]["adopt_rate"]?></td>
                                <td class="table-info" data-th="總認領養數"><?=$json[$i]["adopt_total"]?></td> 
                                <td data-th="人道處理數"><?=$json[$i]["end_num"]?></td>
                                <td class="table-active" data-th="人道處理率(%)"><?=$json[$i]["end_rate"]?></td>
                                <td data-th="本所內死亡數"><?=$json[$i]["dead_num"]?></td>
                                <td class="table-danger" data-th="本所內死亡率"><?=$json[$i]["dead_rate"]?></td>
                                <td data-th="在養數"><?=$json[$i]["In_breed"]?></td>
                            </tr>
                        <?php
                        }
                        ?>
                            </tbody>
                    </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                </div>
          
               
                
       
               
            </div>
        </div>
    </div>
         
    <!-- 插入music -->
	<embed src="music/night-keepersshou-ye-ren-dao-shu-kai-shi-countdown.mp3" width="0" height="0"></embed>   
        
            </div>
		</div>
<!--隱藏的data - 台北Div--->
<div class="modal fade 台北市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 臺北市動物之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Taipei_Animal_Shelter_2017-05-20.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：11484 臺北市內湖區潭美街852號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:Tel:(02)8791-3254 代表號 轉 3254,3255
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●傳真Fax:(02)2791-3867
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●櫃臺專用Fax:(02)8791-3062
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務時間:週二至週日 AM10:00-12:30 PM1:30-4:00(※國定假日 &nbsp&nbsp&nbsp&nbsp無提供服務)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>
	
	
<!--隱藏的data - 新北Div--->
<div class="modal fade 新北市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-light">
                <h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 新北市公立動物收容所
				</h5>
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
                	</button>
            </div>
            <div class="modal-body">
					<h6>
						<i class="">
							<a href="https://www.ahiqo.ntpc.gov.tw/cht/index.php?" target="_blank">
						</i>&nbsp;&nbsp;●新北市政府動物保護防疫處
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/NTPCBanqiao/" target="_blank">
						</i>&nbsp;&nbsp;●新北市板橋區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/xindian.animalsfamily" target="_blank">
						</i>&nbsp;&nbsp;●新北市新店區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/pages/category/Government-Organization/%E4%B8%AD%E5%92%8C%E5%8D%80%E5%85%AC%E7%AB%8B%E5%8B%95%E7%89%A9%E4%B9%8B%E5%AE%B6-670764526426853/" target="_blank">
						</i>&nbsp;&nbsp;●新北市中和區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/Tanshuianimalshome88/" target="_blank">
						</i>&nbsp;&nbsp;●新北市淡水區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="http://www.spca.org.tw/29790334592120529289200432347824535240372638121209-shelter-volunteering.html" target="_blank">
						</i>&nbsp;&nbsp;●新北市瑞芳區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/pages/category/Organization/%E4%BA%94%E8%82%A1%E5%8B%95%E7%89%A9%E4%B9%8B%E5%AE%B6-%E5%85%8D%E8%B2%BB%E7%8B%97%E7%8B%97%E8%B2%93%E8%B2%93%E8%AA%8D%E9%A4%8A%E5%AE%B6-139346232875234/" target="_blank">
						</i>&nbsp;&nbsp;●新北市五股區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/NTPCBaliAnimalShelter/?ref=py_c" target="_blank">
						</i>&nbsp;&nbsp;●新北市八里區公立動物之家
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://www.facebook.com/Sanzhidog/" target="_blank">
						</i>&nbsp;&nbsp;●新北市三芝區公立動物之家
							</a>	
					</h6>
			</div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-secondary bg-danger" data-dismiss="modal">關閉
				</button>
            </div>
        </div>
    </div>
</div>

<!--隱藏的data - 新竹市Div--->
<div class="modal fade 新竹市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 新竹市動物收容所
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Hsinchu, city.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：300新竹市北區海濱路250號南寮里
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:03-536-8329
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●營業時間:週一 ~ 週五: 上午09:30-11:30 下午2:00-4:00
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 週六:上午10:00-12:00
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (週日及國定假日不開放)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 新竹縣Div--->
<div class="modal fade 新竹縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 新竹縣動物收容所
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Xinzhu.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：新竹縣竹北市縣政五街192號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:03-551-9548轉202
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●營業時間: 週二 ~ 週五: 08:00 ~ 16:00
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 週六（不含連假及節日）:10:00~15:00 
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (如要前往請再以電話確認)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 桃園市Div--->
<div class="modal fade 桃園市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 桃園市動物保護教育園區
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Taoyuan.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：32744 桃園市新屋區永興里三鄰大牛欄117號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:(03)486-1760
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●傳真:(03)486-1765
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●認領養犬貓、免費參觀開放時間：
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp每週二、四、六及日，10:00~12:00，13:30~15:30。
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(每週三及國定假日休園)
				</h6>
				<h6>
					<i class="">
					</i>&nbsp;&nbsp;●尋找遺失、領回、拾獲或棄養犬貓開放時間：
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp週一至週日，10:00~12:00，13:30~15:30。
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(每週三及國定假日休園)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>


	


<!--隱藏的data - 基隆Div--->
<div class="modal fade 基隆市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 基隆市寵物銀行
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Chilung .jpg" alt="" class="w-100 modal-img">
                <br><br>
				<h6><i class=""></i>&nbsp;&nbsp;●地址：基隆市七堵區大華三路45-12號瑪西里
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:Tel:(02)-2456-0148
				</h6>
				<h6><i class="">
					</i>&nbsp;&nbsp;●服務時間:
									<br>&nbsp&nbsp&nbsp&nbsp開放參訪時間: &nbsp週二～週六上午9:00~12:00 , &nbsp下午13:00~16:30
									<br>&nbsp&nbsp&nbsp&nbsp開方認養時段：週二～週五下午14:00~16:30 , 
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp週六上午9:00~12:00
									<br>&nbsp&nbsp&nbsp&nbsp中午休息時段：中午12:00~下午13:00
									<br>&nbsp&nbsp&nbsp&nbsp(國定例假日休息）
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 宜蘭Div--->
<div class="modal fade 宜蘭縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-success text-light">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 宜蘭縣流浪動物中途之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Yilan.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：宜蘭縣五結鄉成興村利寶路60號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話: &nbsp&nbsp03-9602350
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：星期一~星期五上午 10:00-12:00 
											  <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 下午：13:30-16:30
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 花蓮Div--->
<div class="modal fade 花蓮縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header" id="don">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-dark font-weight-bold">
					</i>花蓮縣流浪犬中途之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Hualien.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：973花蓮縣吉安鄉南濱路一段599號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話: 03-842 1452
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：
								<br> &nbsp&nbsp&nbsp&nbsp(1)星期一至星期六上午10: 00～12：00，下午02: 00 ～04: 00 
								<br> &nbsp&nbsp&nbsp&nbsp(2)國定假日及連續假日不開放
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary text-dark" data-dismiss="modal" id="don">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 台東Div--->
<div class="modal fade 台東縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header" id="don">
				<h5 class="modal-title">
					<i class="fas fa-map-marker-alt text-dark font-weight-bold">
					</i>臺東縣動物收容中心
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Taitung.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址：95064台東市中華路4段861巷350號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話: &nbsp 089-362011
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：上午09:30-11:30, 下午14:30-16:30(全年無休)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary text-dark" data-dismiss="modal" id="don">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 屏東Div--->
<div class="modal fade 屏東縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-warning">
				<h5 class="modal-title text-dark">
					<i class="fas fa-map-marker-alt text-dark font-weight-bold">
					</i>屏東縣公立犬貓中途之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Pingtung.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 912屏東縣內埔鄉學府路1號(位於國立屏東科技大學內)
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:  08-774 0414
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●收容所電話: 0905-981-077
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：週一至週日，ＡＭ9:00-ＰＭ5:00
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-warning text-dark" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 高雄Div--->
<div class="modal fade 高雄市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-dark">
					<i class="fas fa-map-marker-alt text-dark font-weight-bold">
					</i> 高雄市公立動物收容所
				</h5>
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
                	</button>
            </div>
            <div class="modal-body">
					<h6>
						<i class="">
							<a href="https://livestock.kcg.gov.tw/" target="_blank">
						</i>&nbsp;&nbsp;●高雄市壽山動物保護教育園區
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://livestock.kcg.gov.tw/Pets/DongwuShourong/YuanquJieshao/YuanquJieshao02.htm" target="_blank">
						</i>&nbsp;&nbsp;●高雄市燕巢動物保護關愛園區
							</a>
					</h6>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-secondary bg-warning text-dark" data-dismiss="modal">關閉
				</button>
            </div>
        </div>
    </div>
</div>

<!--隱藏的data - 台南Div--->
<div class="modal fade 台南市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-dark">
					<i class="fas fa-map-marker-alt text-dark font-weight-bold">
					</i> 臺南市公立動物收容所
				</h5>
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
                	</button>
            </div>
            <div class="modal-body">
					<h6>
						<i class="">
							<a href="https://zh-tw.facebook.com/pg/wanlidogsandcats/about/?ref=page_internal" target="_blank">
						</i>&nbsp;&nbsp;●臺南市動物之家灣裡站
							</a>
					</h6>
                	<h6>
						<i class="">
							<a href="https://zh-tw.facebook.com/pages/%E5%96%84%E5%8C%96%E6%B5%81%E6%B5%AA%E5%8B%95%E7%89%A9%E4%B9%8B%E5%AE%B6/145523335513572" target="_blank">
						</i>&nbsp;&nbsp;●臺南市動物之家善化站
							</a>
					</h6>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-secondary bg-warning text-dark" data-dismiss="modal">關閉
				</button>
            </div>
        </div>
    </div>
</div>

<!--隱藏的data - 嘉義縣Div--->
<div class="modal fade 嘉義縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i>嘉義縣流浪犬中途之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Chiayi.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 嘉義縣民雄鄉松山村後山仔37-1號(資源回收場內)
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話: 05-2724721；05-3620025
				</h6>
                	<i class="">
					</i>&nbsp;&nbsp;●開放時間：
											  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 週二 ~ 週五上午9：30至11：30
											  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp下午13：30至16：00
											  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 週六上午9：00至12：00
											  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (遇週日、週一及國定連續假日暫停開收)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 嘉義市Div--->
<div class="modal fade 嘉義市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 嘉義市流浪動物收容所
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Chiayi city in central Taiwan.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 600嘉義市東區彌陀路101號(位於環保局資源回收場內)
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務電話:   05-216 8661
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●嘉義市政府建設處: 05-2290357
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：星期一 ~ 星期日 09:00-11:30、14:00-16:30
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 雲林縣Div--->
<div class="modal fade 雲林縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 雲林縣流浪動物收容所
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Yunlin.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 64001 雲林縣斗六市雲林路二段517號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務電話:   05-5523250
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●代養場:<a href="http://yunlin5.byethost24.com/petcare/refuge.html" target="_blank"> 
									<br>&nbsp&nbsp&nbsp&nbsphttp://yunlin5.byethost24.com/petcare/refuge.html
											</a>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●代收容動物醫院:
						<a href="http://yunlin5.byethost24.com/petcare/ah.html" target="_blank"> &nbsp&nbsp&nbsp&nbsphttp://yunlin5.byethost24.com/petcare/ah.html
						</a>
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 彰化縣Div--->
<div class="modal fade 彰化縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 彰化縣流浪狗中途之家
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Changhua.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 502彰化縣芬園鄉大彰路一段875巷
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務電話:    04 859 0638
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：上午10:00-12:00, 下午14:00-16:00
									<br>&nbsp&nbsp&nbsp(◎每週星期五為消毒日，不對外開放 )
				</h6>
                
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 南投縣Div--->
<div class="modal fade 南投縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 南投縣公立動物收容所
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Nantou.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 540南投市嶺興路36之1 號  
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務電話:    049-2225440
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：上午：09：00 至 11：30 
											  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp下午：01：30至04：00(例假日除外)
				</h6>
                
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 台中市Div--->
<div class="modal fade 台中市" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 臺中市動物之家南屯園區
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Taichung.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 臺中市南屯區中台路601號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●服務電話:    04-2385-0976
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放參訪時間：
									<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp週一 、二、四、 六上午10:00-12:00, 下午13:30-16:00
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放認養時間：週一 ~ 週六上午10:00-12:00, 下午13:30-16:00
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 苗栗縣Div--->
<div class="modal fade 苗栗縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 苗栗縣生態保育教育中心
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Miaoli.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 苗栗縣銅鑼鄉朝陽村6鄰朝北55-1號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●收容所電話:    037-558228 (請於開放時間來電)
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●領養相關資訊查詢電話:    037-320049轉209
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：週日至週三上午 9:00~12:00、下午13:00~16:00
									<br>&nbsp&nbsp&nbsp&nbsp(中午休息時間及國定假日不開放,未避免白跑請事先來電洽詢再 &nbsp&nbsp&nbsp 出發)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary  bg-info" data-dismiss="modal">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!-- 外島 -->
<!--隱藏的data - 澎湖縣Div--->
<div class="modal fade 澎湖縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header" id="exn">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 澎湖縣流浪動物收容中心
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Peng-hu.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 880澎湖縣馬公市260號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●電話:     06 921 3559
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：週一至週六 9:30~12:00、下午13:30~16:00
									<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(週日及國定假日不開放)
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="exn">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 金門縣Div--->
<div class="modal fade 金門縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header" id="exn">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 金門縣動物收容中心
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Kinmen.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 金門縣金湖鎮金門縣裕民農莊20號
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●收容所電話:    082-336625
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放參訪時間：週一 ～ 週五 上午8:00~12:00、下午1:30~5:30
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="exn">關閉
				</button>
			</div>
		</div>
    </div>
</div>

<!--隱藏的data - 連江縣Div--->
<div class="modal fade 連江縣" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered"role="document">
        <div class="modal-content">
			<div class="modal-header" id="exn">
				<h5 class="modal-title text-light">
					<i class="fas fa-map-marker-alt text-light font-weight-bold">
					</i> 連江縣流浪犬收容中心
				</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                		<span aria-hidden="true">&times;</span>
					</button>
			</div>
           	<div class="modal-body">
			  <img src="./img/Lienchiang.jpg" alt="" class="w-100 modal-img">
                <br><br>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●地址: 馬祖南竿鄉復興村(近機場)
				</h6>
                <h6>
					<i class="">
					</i>&nbsp;&nbsp;●收容所電話:    0836-25003
				</h6>
            	<h6>
					<i class="">
					</i>&nbsp;&nbsp;●開放時間：週一~週五 上午8:00~12:00、下午1:30~5:30
				</h6>
            </div>
			
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="exn">關閉
				</button>
			</div>
		</div>
    </div>
</div>

	</div>
	

	<!-- footer  -->
     <div class="container-fluid bg-dark" id="footer">
        <div class="row justify-content-center">
            <div class="col-12 text-white text-center ">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-facebook-f" id="ia1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-line" id="ia2"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fab fa-youtube" id="ia3"></i></a>
                    </li>
                </ul>
            <div class=""><img src="./img/dog.png" alt="logo" style="width:35px; height: 35px;">社團法人高雄市浪浪的流浪動物之家</div>
            <div clsss="address">總辦公室：81462 高雄市仁武區八德中路108巷2號</div>
            <div class="tel">流浪犬貓相關事項詢問專線 : 07-374-8002、0983806582 </div>
                &copy;<script>let d = new Date; document.write(d.getFullYear());</script>&nbsp Design : 泰山網頁設計班 &nbsp  學員-陳怡蓁
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap4.min.js"></script>
    
   
 
    <!-- background - snow -->
    <script src="./js/particles.min.js"></script>
       <script>
            particlesJS.load('particles-js', './js/particlesjs-config (4).json', function() {
            
            });
        </script>

    <script>
        $(document).on("readystatechange", function(){
            if(document.readyState == "complete"){
                $("#loading").fadeOut(2000, function(){
                    $("#content").fadeIn(1000);
                    $("#footer").fadeIn(1000);

                    new WOW().init();
                });
            }
        })

        
        $("#showtable").DataTable({
            "language": {
                "url": "./datatables-chinese-traditional.json"
            },
            "columnDefs": [
                {
                    "targets": 3,
                    "orderable": false,
                    "searchable": false 
                }
            ]
        });

	// Taiwan map 動畫
		// 北台灣
	$(".btn-more").on("click", function(){
     let scity="."+$(this).attr("title");
	console.log(scity);
	$(scity).modal("show");
	});

		// 東部
	$(".btn-more1").on("click", function(){
     let scity="."+$(this).attr("title");
	console.log(scity);
	$(scity).modal("show");
	});

		// 南台灣
	$(".btn-more2").on("click", function(){
     let scity="."+$(this).attr("title");
	console.log(scity);
	$(scity).modal("show");
	});	

		//西半部、中台灣
	$(".btn-more3").on("click", function(){
		let scity="."+$(this).attr("title");
	$(scity).modal("show");
	});	

	//離島地區
	$(".btn-more4").on("click", function(){
		let scity="."+$(this).attr("title");
	$(scity).modal("show");
	});	
    
	
	</script>
</body>
</html>