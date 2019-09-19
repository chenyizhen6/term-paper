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
    <title>浪大家看見愛 X 浪浪的流浪動物之家 | 98~104年全國流浪犬數量</title>

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

<body style="background-image: url(./img/data background sleep.jpg)">
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
                          <a class="dropdown-item" href="./area.php">
                            <img src="./img/dog rail.png" alt="logo" style="width:18px; height:18px;">&nbsp全國公立動物收容所
                          </a>
                          <a class="dropdown-item active" href="./data.php">
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
                <div class="col-12 text-center text-primary bounce wow my-2">
                    <h2 class=" font-weight-bold"><i class="fas fa-paw text-primary" id="accept">
                    </i>&nbsp98~104年全國各直轄市、縣(市)遊蕩街狗(流浪犬)估計數量:
                    </h2>
                </div>
				
				<hr class="hr-dark fadeInRight wow">
                

            <!-- 繪圖資料1 -->  
                <div  class="col-12  font-weight-bold ">
                    
                <br>&nbsp;
                </div class="citysize col-12 col-sm-6">
                <canvas id="chart" width="300" height="200"></canvas>
                </div>
               
    <!-- 插入music -->
	<embed src="music/night-keepersshou-ye-ren-dao-shu-kai-shi-countdown.mp3" width="0" height="0"></embed>      
               
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
    
    <!-- 繪圖資料2 -->
    
    <script src="./js/Chart.min.js"></script>
    <script>
        /*
            getContext()，取得canvas的繪圖參數
        */
        let ctx = document.getElementById("chart").getContext("2d"); 
        let myLineChart = new Chart(ctx, {
            type: "line",
        data: {
            /* 資料區間名稱*/
            labels: ["88年", "93年", "98年", "103~104年"],
             /* 資料組 */
             datasets:[
                    {
                         /* 名稱 */
                        label: "全國遊蕩街狗估計數量",
                        /* 資料 */
                         data: [613959, 120476, 86244, 128472],
                        // 線的顏色
                         borderColor: "#89CFF0",
                         // 填滿顏色
                        backgroundColor: "#DC143C",
                         /* 是否填滿*/
                         fill: true,
                         // 線的寬度
                         borderWidth: 7,
                         // 線的彎曲程度，0為直線
                 lineTension: 0
                     },
                 ]
             },
             options: {
                 /* 圖表標題*/
                 title: {
                     text: "農委會98~104年全國各直轄市、縣(市)遊蕩街狗數調查結果",
                     display: true
                 }
             }
         });
    </script>
 
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

		$(function () {


		})
		

    </script>
</body>
</html>