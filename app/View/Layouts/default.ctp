
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <!--Responsive WebDesign-->
  <meta name="viewport" content="width=device-width, inital-scale=1.0" />
  <?php echo $this->fetch('meta'); ?>
  <title><?php echo $this->fetch('title'); ?></title>
  <?php echo $this->Html->css('main'); ?>
  <?php echo $this->Html->css('/fa/css/font-awesome.css'); ?>
  <?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Neucha|Bonbon&subset=latin,cyrillic'); ?>
  <!--Favicon-->
  <link rel="shortcut icon"" href="img/lst.png" type="image/png">

</head>
<body>
    <!--wrapper-->
    <div class="wrapper">
    <!--header-->
    <div class="header">
      <img src="img/logo.png">
      <div class="container"></div>
      <input type="checkbox" id="focus">
        <label for="focus" class="om">
          <span class="icons">
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
          </span>
        </label>
      <div class="top-menu">
      <label for="focus" class="om exit">
        <i class="fa fa-angle-double-right"></i>
      </label>
        <ul>
          <li><a href="/" >О нас</a></li>
          <li><a href="detskiy-sad" >Детский сад</a></li>
          <li><a href="centr-razvitiya" >Центр развития </a></li>
          <li><a href="contacts" >Контакты</a></li>
          <li><a href="ceny" >Цены</a></li>
        </ul>
      </div>
      <div class="info-header">
        Одна из самых больших удач в жизни человека - Счастливое Детство
        <div class="contacts">
          Kievstar <a class="phones" href="tel:+380964063518">(096) 406-35-18</a><br/>
          Vodafone <a class="phones" href="tel:+380991727286">(099) 172-72-86</a><br/>
          Life     <a class="phones" href="tel:+380933670440">(093) 367-04-40</a>
        </div>
      </div>
        <!--btns for loc.
        <div class="btns">
          <a href="#">UK</a>
          <a href="#">RU</a>
          <a href="#">EN</a>
        </div>
        btns for loc. end-->
    </div>
    <!--header end-->
       <!--wrap-->
       <div class="wrap">
      <!--sidebar-->
      <input type="checkbox" id="checker">
        <label for="checker" class="nav">
          <span class="icons">
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
            <i class="icon-bar"></i>
          </span>
        </label>
      <div class="sidebar">
         <input type="checkbox" id="checker">
        <label for="checker" class="close">
          <i class="fa fa-angle-double-left"></i>
        </label>
        <ul>
          <li><a href="/">О нас</a></li>
          <!-- <li><a href="kindergarten.html" >Детский сад - Программа</a></li> -->
          <li><a href="detskiy-sad" >Детский сад</a></li>
          <!-- <li><a href="no-full.html" >Сад короткого дня</a></li> -->
          <li><a href="centr-razvitiya" >Центр развития</a></li>
          <li><a href="contacts" >Контакты</a></li>
          <li><a href="angliyskiy" >Английский</a></li>
          <li><a href="gruppy" >Группы</a></li>
          <li><a href="rasporiadok-dnia" >Распорядок дня</a></li>
          <!-- <li><a href="objects.html" >Предметы</a></li> -->
          <li><a href="metodiki" >Методики</a></li>
          <li><a href="vospitateli" >Воспитатели</a></li>
          <!-- <li><a href="tvorchestvo.html" >Творчество</a></li> -->
          <li><a href="menu" >Меню</a></li>
          <li><a href="ceny" >Цены</a></li>
        </ul>
      </div>
      <!--sidebar end-->

      <!--content-->
      <div class="content">
        <?php echo $this->fetch('content'); ?>
      </div>
      <!--content end-->
      </div>
       <!--wrap end-->

       <!--footer-->
       <div class="footer">
         <img src="img/der-foot.png" class="img-x">
         <input type="checkbox" id="ken">
        <label for="ken" class="lux">
                    <img src="img/top.png">
        </label>
         <div class="for-flex-x">
               <input type="checkbox" id="ken">
        <label for="ken" class="lux">
                    <img src="img/down-64.png">
        </label>
        <div class="container-s"></div>
             <div class="f-content">
                 <ul class="footer-links">
                     <li><a href="sitemap.html">Карта Сайта HTML</a></li>
                 </ul>
             </div>
             <div class="s-content">
                 <ul class="footer-links">
                     <li><a href="sitemap.xml">Карта Сайта XML</a></li>
                 </ul>
             </div>
             <div class="t-content">
                 <ul class="footer-links">
                     <li></li>
                 </ul>
             </div>
         </div>
       </div>
       <!--footer end-->
    </div>
    <!--wrapper end-->

  <!-- Google.Analytics -->
  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-34817801-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter40972139 = new Ya.Metrika({
                      id:40972139,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true
                  });
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/watch.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/40972139" style="position:absolute; left:-9999px;" alt="" />
    </div>
  </noscript>
</body>
</html>
