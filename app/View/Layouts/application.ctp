<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Киндерленд - центр развития ребенка | детский сад | частный детский сад.</title>
        <!-- link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" -->
        <?php
           echo $this->Html->css('reset');
           echo $this->Html->css('style');
        ?>
    </head>
    <body>
      <div class="header">
        <div class="logo fleft"></div>
        <ul class="mainMenu fleft kinderFont">
          <li><a href="#" title="О нас">О нас</a></li>
          <li><a href="#" title="Детский сад">Детский сад</a></li>
          <li><a href="#" title="Центр развития">Центр развития</a></li>
          <li><a href="#" title="Контакты">Контакты</a></li>
        </ul>
        <div class="info fright kinderFont">
          <p>Одна из самых больших удач в жизни человека - Счастливое Детство</p>
          тел.: 096 406 35 18<br/>
          099 172 72 86
        </div>
      </div>        
      <div class="main">
        <div class="sidebar fleft">
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
      <div class="footer">
        <div class="tree"></div>
      </div> 
    </body>
</html>