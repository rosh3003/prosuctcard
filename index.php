<?php 
// Здесь укажите номер потока (поток предварительно нужно создать в личном кабинете вебмастера)
$stream_id='25';

// Этот код добавляем на страницу входа
session_set_cookie_params(60*60*24*15);
session_start(); 
$_SESSION['code']=md5($stream_id.date('d.m.Y H:i:s'));
$subid = array_values($_GET);
$data = [
    'click' => 'landing',
    'stream' => $stream_id,
    'code'=> $_SESSION['code'],
    'ip'=> $_SERVER['REMOTE_ADDR'],
    'useragent'=> $_SERVER['HTTP_USER_AGENT'],
    'subid1'=> (isset($subid[0])) ? htmlspecialchars($subid[0]) : '',
    'subid2'=> (isset($subid[1])) ? htmlspecialchars($subid[1]) : '',
    'subid3'=> (isset($subid[2])) ? htmlspecialchars($subid[2]) : '',
    'subid4'=> (isset($subid[3])) ? htmlspecialchars($subid[3]) : '',
    'subid5'=> (isset($subid[4])) ? htmlspecialchars($subid[4]) : '',
    'subid6'=> (isset($subid[5])) ? htmlspecialchars($subid[5]) : '',
    'subid7'=> (isset($subid[6])) ? htmlspecialchars($subid[6]) : '',
    'subid8'=> (isset($subid[7])) ? htmlspecialchars($subid[7]) : ''
    ];    
// Передаем клик в статистику
$curl_url = 'https://haridd.uz/?'.http_build_query($data);
$ch = curl_init ();
curl_setopt ($ch , CURLOPT_URL , $curl_url);
curl_setopt ($ch , CURLOPT_RETURNTRANSFER , 1 ); 
$content = curl_exec($ch); 
curl_close($ch);
?>

<?php
$land=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EMS Trainer</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/dependencyLibs/inputmask.dependencyLib.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>

  <body>

    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-sm justify-content-center mainNav">
        <a href="#" id="list"><i class="bi bi-card-checklist"></i> Katalog</a>
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Topish" id="search">
            <button class="btn btn-primary" type="submit">
              <a href=""><i class="bi bi-search" style="color:#fff;"></i></a>
            </button>
          </div>
        </form>
      </nav>
    </header>

    <!-- Main-->
    <div class="container">
      <div class="row">
        <div class="col-sm-5 padding-cols-1" align="center">
          <!-- Carousel -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/1.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="img/2.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="img/5.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="img/4.png" class="d-block w-100">
              </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <i class="bi bi-chevron-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>
        <br><br>
        </div>
        <div class="col-sm-7 padding-cols-2">
          <div class="row">
            <div class="col-sm-4 col-6">
              <p class="info"><img src="img/5.svg">&nbsp4.9 <span style="color: #999;">(256 baho)</span></p>
            </div>
            <div class="col-sm-3 col-6">
              <p class="info"><span class="count">928</span> ta buyurtma</p>
            </div>
          </div>
          <h4 style="margin-bottom: 25px;">Tana, orqa, oyoqlar uchun universal EMS massajchisi</h4>
          <div class="row">
            <div class="col-sm-3 col-5">
              <p class="info">Sotuvchi:</p>
              <p class="info">Yetkazib berish:</p>
            </div>
            <div class="col-sm-3 col-6">
              <p class="info">Sale Shop</p>
              <p class="info">1-3 kun, bepul</p>
            </div>
          </div>
          <hr style="margin-bottom:25px;">
          <p style="font-size: 16px; margin-bottom: 10px"  class="info">Rang:</p>
          <img src="img/1.png" class="color" style="margin-bottom:5px">
          <br><br>
          <p style="font-size: 16px; margin-bottom: 10px;"  class="info">Yangi narx:</p>
          <h5 style="margin-bottom:30px">
            <b style="color: #6A5ACD; font-size: 24px;">189 000 so'm</b>
            &nbsp
            <b><span style="color:#999; text-decoration: line-through; font-size: 16px;">270 000 so'm</span></b>
          </h5>
          <p class="remainderBlock">
            Sotuvda:&nbsp
            <b><span class="remainder">30</span></b>
            dona bor
          </p>
          <p class="hideBr"></p>
          <p class="timerBlock">
            Vaqtinchalik chegirma:&nbsp
            <i class="bi bi-stopwatch"></i>
            <span class="timer"></span>
          </p>
          <h5 class="sale">
            Imkoniyatni boy bermang:&nbsp
            <p class="hideBr"></p>
            <b>
              <span style="background-color: yellow; padding: 8px 10px 8px 10px; border-radius: 6px;">Chegirma 30%</span>
              &nbsp
              <span style="background-color: yellow; padding: 8px 10px 8px 10px; border-radius: 6px;">Aksiya: 1 + 1 = 3</span>
            </b>
          </h5>
          <br>
          <h5 style="font-size: 16px;" class="info">Mahsulot haqida qisqacha:</h5>
          <ul class="shortDis">
            <li class="info">Qon aylanishini yaxshilaydi</li>
            <li class="info">Uyqusizlik bilan kurashishga yordam beradi</li>
            <li class="info">8 rejim</li>
            <li class="info">19 intensivlik darajasi</li>
            <li class="info">Stress va charchoqni bartaraf etishga yordam beradi</li>
            <li class="info">Og'riq va kramplarni boshqarishga yordam beradi</li>
            <li class="info">Yilni o'lcham va foydalanish qulayligi</li>
          </ul>        
          <br>
          <button type="button" class="btn btn-primary order" data-bs-toggle="modal" data-bs-target="#myModal">Buyurtma berish</button>
          <br><br>
          <h5 class="quantity"><i class="bi bi-bag-check"></i>&nbsp Bu haftada <b><span class="q">30</span></b> kishi sotib oldi</h5>
        </div>
      </div>

      <br><br><br><br>

      <!-- Active buttons -->
      <div id="activeButtons">
        <button onclick="myFunction1()" class="btn-1 activeBtn" id="desBtn">Mahsulot tavsifi</button>
        <button onclick="myFunction2()" class="btn-1" id="insBtn">Ko'rsatma</button>
        <button onclick="myFunction3()" class="btn-1" id="comBtn">Sharhlar <span style="color: #999;">(8)</button>
      </div>

      <!-- Desctiption -->
      <div class="wrapper active" id="description">
        <h5 class="titleCom">Mahsulot tavsifi:</h5>
        <hr class="feedLine">
        <p class="feedText">
          Mushaklarni mustahkamlash va tasalli beruvchi massaj uchun qulay va arzon yechim qidiryapsizmi? Tana mushaklari stimulyatori bilan tanishish - sport zaliga bormasdan ham mushaklaringizni mashq qilish va yoqimli his-tuyg'ularni olishning eng zo'r usuli. <br><br>
          Mushak stimulyatori mushaklarni kuchaytirish va massajni ta'minlash uchun mo'ljallangan, ayniqsa, noqulaylik paydo bo'lgan bo'yin va orqa sohalarda. U ishlayotganda, siz o'z biznesingizni hech qanday noqulayliksiz bemalol davom ettirishingiz mumkin. Natijaga mushaklarning qisqarishini rag'batlantiradigan elektr impulslari orqali erishiladi.
        </p>
        <hr class="feedLine">
        <p class="feedText">
          Elektron yurak stimulyatori USB zaryadlash orqali quvvatlanadi, bu uni istalgan joyda ishlatish uchun qulay qiladi.
          <br><br>
          Bu tananing har qanday hududidan kuchlanishni engillashtirishga yordam beradi va yoqimli massajni ta'minlaydi. 8 ta ish rejimi va 1 dan 19 gacha bo'lgan turli intensivlik darajalari bilan siz uni ehtiyojlaringizga mos ravishda sozlashingiz mumkin.
          <br><br>
          Xavfsiz past chastotali impulslar tufayli stimulyator mushaklarga xavfsiz va qulay tarzda samarali ta'sir ko'rsatadi. Ixcham qurilma undan ish kunida yoki sayohat paytida ham foydalanish imkonini beradi.
          <br><br>
          Sport zaliga borish uchun vaqt va pulni behuda sarflamang - tana uchun mushak stimulyatorini tanlang va siz uchun qulay vaqt va joyda mushaklarni kuchaytirish va bo'shashtiruvchi massajdan bahramand bo'ling.
        </p>
      </div>

      <!-- Instruction -->
      <div class="wrapper" id="instruction">
        <h5 class="titleCom">Qo'llash tartibi:</h5>
        <hr class="feedLine">
        <ul> 
          <li class="feedText">Xostni yamoqqa ulash uchun tugmalardan foydalaning</li>
          <li class="feedText">Jel plastinkasidan himoya shaffof plyonkani olib tashlang</li>
          <li class="feedText">Yamoqni jel tomoni bilan tananing kerakli joyiga joylashtiring massaj</li>
          <li class="feedText">Massajni yoqing, kerakli ish rejimini tanlang</li>
          <li class="feedText">Istalgan massaj intensivligini o'rnating</li>
        </ul>
      </div>

      <!-- Feedback -->
      <div class="wrapper" id="comments">
        <h5 class="titleCom">Barcha sharhlar: <span style="color: #999;">(8 ta sharh)</span></h5>
        <hr class="feedLine">
        <h5 class="feedName">Dilfuza</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          16 iyul, 2023
        </p>
        <p class="feedText">Bu massaj apparati mening tirish va oyoqlarim sohatini yanada yaxshilash uchun eng ajoyib vosita! Ishonchli va samimiy, menga har doim ham yoqdi!!!👍👍👍</p>
        <hr class="feedLine">
        <h5 class="feedName">Zuhra</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg" style="opacity: 0.5;">
          &nbsp
          11 iyul, 2023
        </p>
        <p class="feedText">Men bu massajer bilan tanamning barcha ko'prikli nuqsonlarini olib tashladi! Ko'rinishi ham oddiy va qulay. Men mohir kafedramizda uni tavsiya etaman.</p>
        <hr class="feedLine">
        <h5 class="feedName">Aliya</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          7 iyul, 2023
        </p>
        <p class="feedText">Ajoyib, menga juda yoqdi!!!😍</p>
        <hr class="feedLine">
        <h5 class="feedName">Kamron</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          4 iyul, 2023
        </p>
        <p class="feedText">Yagona so'z bilan: hayrat qilish uchun mo'ljallangan! Mog'ul o'ynaydi, charchashuvimni kamaytirdi va yomon otlar sirini ovqatlandirishga yordam beradi😍😍😍</p>
        <hr class="feedLine">
        <h5 class="feedName">Bobur</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          30 iyun, 2023
        </p>
        <p class="feedText">Bu massajli quritgich erta dam olishim va yuqori darajada rag'batlantirishim uchun juda yaxshi xizmat ko'rsatdi. Unda mavjud har bir funktsiya orqali o'z ichki chiroyli asrimni topdim!👍</p>
        <hr class="feedLine">
        <h5 class="feedName">Robiya</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          21 iyun, 2023
        </p>
        <p class="feedText">Sifati zo'r. Ajoyib massaj qiladi!</p>
        <hr class="feedLine">
        <h5 class="feedName">Fatima</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg" style="opacity: 0.5;">
          &nbsp
          14 iyun, 2023
        </p>
        <p class="feedText">Uning uzunligi va o'z holatiga tegishli imkoniyatlari bilan bu massajer men uchun eng yaxshi erda ekanini ko'rdim. Uni o'zimga va oilamga ham tavsiya qilaman.</p>
        <hr class="feedLine">
        <h5 class="feedName">Ruslan</h5>
        <p class="feedDate"> 
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          <img src="img/5.svg">
          &nbsp
          1 iyun, 2023
        </p>
        <p class="feedText">Mening qodirli masajni ko'rsatadigan urug'! Uni ishlatish oson, qulay va natijalar xuddi shu holatda! Manzilga tezkor yetib borish oson ekanligi uchun ham xursandman!!!👍🔥</p>
      </div>
    </div>

    <!-- Mobile Nav -->
    <nav class="navbar navbar-expand-sm fixed-bottom mobNav">
      <div class="container-fluid">
        <div style="position: block;"> 
          <span style="font-size: 10px;">Chegirmali narx:</span>
          <br>
          <b style="color:#6A5ACD;">189 000 so'm</b>
        </div>
        <button type="button" class="btn btn-primary mobileButton" data-bs-toggle="modal" data-bs-target="#myModal">Buyurtma berish</button>
      </div>
    </nav>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Buyurtma berish</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form action="send.php" method="POST">
                <input type="hidden" name="land" value="<?=rawurldecode($land);?>">
                <input type="hidden" id="phone1" name="phone">
                <input type="hidden" value="{subid}" name="subid" />
                <input type="hidden" value="{fbpix}" name="pixel" />
                <input type="hidden" value="{web}" name="web" />
                <input type="hidden" value="<?php if (isset($_GET['fbpix'])) {echo $_GET['fbpix'];} ?>" name="fbpix" />
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Ismingiz:</label>
                  <input type="name" class="form-control" id="name" placeholder="Ismingizni kiriting" name="name" required>
                </div>
                <div class="mb-3 mt-3">
                  <label for="number" class="form-label">Telefon raqamingiz:</label>
                  <input type="tel" name="phone" class="form-control" id="phone-num1" value="+998" required>   
                </div>
                <br>
                <button type="submit" class="btn btn-primary" id="submitButton" style="width:100%;" disabled>Yuborish</button>
              </form>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="footerText">
              ООО "Sale Shop" <br>
              ИНН 1037739895753 <br>   
              г. Ташкент, ул.Нукусская, д.26 <br>
              Пн-Вс: 09:00-21:00 <br>
              Без выходных и праздников
            </p>
          </div>
          <div class="col-sm-6">
            <p class="footerIcons">
              <a href="https://t.me/level_shop1" class="footerIcons"><i class="bi bi-telegram"></i></a>
              <a href="https://instagram.com/_level_shop?igshid=1khu89djyi7rs" class="footerIcons"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/levelshopuz" class="footerIcons"><i class="bi bi-facebook"></i></a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Active buttons JS -->
    <script>
      function myFunction1() {
        var element1 = document.getElementById("description");
        element1.classList.add("active");
        var element2 = document.getElementById("comments");
        element2.classList.remove("active");
        var element2 = document.getElementById("instruction");
        element2.classList.remove("active");

        var element3 = document.getElementById("desBtn");
        element3.classList.add("activeBtn");
        var element4 = document.getElementById("comBtn");
        element4.classList.remove("activeBtn");
        var element4 = document.getElementById("insBtn");
        element4.classList.remove("activeBtn");
      }
      function myFunction2() {
        var element1 = document.getElementById("description");
        element1.classList.remove("active");
        var element2 = document.getElementById("comments");
        element2.classList.remove("active");
        var element2 = document.getElementById("instruction");
        element2.classList.add("active");

        var element3 = document.getElementById("desBtn");
        element3.classList.remove("activeBtn");
        var element4 = document.getElementById("comBtn");
        element4.classList.remove("activeBtn");
        var element4 = document.getElementById("insBtn");
        element4.classList.add("activeBtn");
      }
      function myFunction3() {
        var element1 = document.getElementById("description");
        element1.classList.remove("active");
        var element2 = document.getElementById("comments");
        element2.classList.add("active");
        var element2 = document.getElementById("instruction");
        element2.classList.remove("active");

        var element3 = document.getElementById("desBtn");
        element3.classList.remove("activeBtn");
        var element4 = document.getElementById("comBtn");
        element4.classList.add("activeBtn");
        var element4 = document.getElementById("insBtn");
        element4.classList.remove("activeBtn");
      }  
    </script>

    <!-- Random values JS-->
    <script>
      window.onload = function() {
        var currentValue1 = parseInt(document.querySelector('span.q').innerText);
        var storedValue1 = parseInt(localStorage.getItem('quantityValue1'));
        var randomValue = Math.floor(Math.random() * 5) + 1;
        if (storedValue1 >= 200) {
          var storedValue1 = 0;
        }
        if (storedValue1) {     
          var newValue1 = storedValue1 + randomValue;
        } 
        else {
          var newValue1 = currentValue1 + randomValue;
        }
        localStorage.setItem('quantityValue1', newValue1);
        document.querySelector('span.q').innerText = newValue1.toString();

        var currentValue2 = parseInt(document.querySelector('span.remainder').innerText);
        var storedValue2 = parseInt(localStorage.getItem('quantityValue2'));
        if (storedValue2 <= 0) {
          var storedValue2 = 0;
        }
        if (storedValue2) {     
          var newValue2 = storedValue2 - randomValue;
        } 
        else {
          var newValue2 = currentValue2 - randomValue;
        }
        localStorage.setItem('quantityValue2', newValue2);
        document.querySelector('span.remainder').innerText = newValue2.toString();

        var currentValue3 = parseInt(document.querySelector('span.count').innerText);
        var storedValue3 = parseInt(localStorage.getItem('quantityValue3'));
        if (storedValue3) {     
          var newValue3 = storedValue3 + randomValue;
        } 
        else {
          var newValue3 = currentValue3 + randomValue;
        }
        localStorage.setItem('quantityValue3', newValue3);
        document.querySelector('span.count').innerText = newValue3.toString();
      }
    </script>

    <!-- Timer -->
    <script>
      function addLeadingZero(number) {
        return number < 10 ? "0" + number : number;
      }
      function updateTimer() {
        const now = new Date();
        const endOfDay = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
        const timeRemaining = new Date(endOfDay - now); 
        const hours = addLeadingZero(timeRemaining.getUTCHours());
        const minutes = addLeadingZero(timeRemaining.getUTCMinutes());
        const seconds = addLeadingZero(timeRemaining.getUTCSeconds());
        const timerElement = document.querySelector("span.timer");
        timerElement.textContent = hours + " : " + minutes + " : " + seconds;
        setTimeout(updateTimer, 1000);
      }
      updateTimer();
    </script>

    <!-- Mask JS -->
    <script>
      const phoneInput = document.getElementById("phone-num1");
      const submitButton = document.getElementById("submitButton");
      phoneInput.addEventListener("input", function() {
        const inputValue = phoneInput.value;
        const sanitizedValue = inputValue.replace(/[^\d+]/g, "").substring(0, 13);
        if (sanitizedValue !== inputValue) {
          phoneInput.value = sanitizedValue;
        } 
        if (sanitizedValue.length === 13) {
          submitButton.removeAttribute("disabled");
        } else {
          submitButton.setAttribute("disabled", true);
        }
      });
    </script>

  </body>
</html>