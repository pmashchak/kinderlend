<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Киндерленд - центр развития ребенка | детский сад | частный детский сад.</title>
        <link href='http://fonts.googleapis.com/css?family=Neucha|Bonbon&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <?php
           echo $this->Html->css('reset');
           echo $this->Html->css('style');
        ?>
    </head>
    <body>
      <div class="header minWidth">
        <div class="logo fleft"></div>
        <ul class="mainMenu fleft kinderFont">
          <li><a href="/" title="О нас">О нас</a></li>
          <li><a href="/kindergarden" title="Детский сад">Детский сад</a></li>
          <li><a href="/center" title="Центр развития">Центр развития</a></li>
          <li><a href="/contacts" title="Контакты">Контакты</a></li>
        </ul>
        <div class="info kinderFont">
          <p>Одна из самых больших удач в жизни человека - Счастливое Детство</p>
          <p>тел.: 096 406 35 18</p>
          <p>099 172 72 86</p>
        </div>
      </div>        
      <div class="main minWidth">
        <div class="sidebar">
          <ul class="leftMenu kinderFont">
            <li><a href="#" title="Англйский">Англйский</a></li>
            <li><a href="#" title="Творчество">Творчество</a></li>
            <li><a href="#" title="Музыка">Музыка</a></li>
            <li><a href="#" title="Логика">Логика</a></li>
          </ul>
        </div>
        <div class="content">
          <?php echo $this->fetch('content'); ?>
        </div>
      </div>
      <div class="footer minWidth">
        <div class="tree"></div>
      </div> 
    </body>
</html>