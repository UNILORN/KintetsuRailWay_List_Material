<?php
  require __DIR__."/function.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css" media="screen" title="no title" charset="utf-8">
    <script src="./jquery.sublimeSlideshow.js" ></script>
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="./javascript.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5,minimum-scale=0.5, maximum-scale=0.5, user-scalable=yes">
    <title></title>
  </head>
  <body>

    <div class="background-train"></div>

    <nav>
      <div class="nav-wrapper">
       <a href="#" class="brand-logo homebutton">
         <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
           <i class="material-icons">list</i>
         </button>
       </a>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="#" class="Vehicle">Vehicle</a></li>
         <li><a href="#" class="Route">Route Map</a></li>
       </ul>
      </div>
    </nav>

    <div class="mdl-layout__drawer">
      <a href="#" class="clearmenu">
        <i class="material-icons">clear</i>
      </a>
        <span class="mdl-layout-title">KintetsuRailWay</span>
        <div class="mdl-navigation">
          <a class="mdl-navigation__link Vehicle" href="#">Vehicle</a>
          <a class="mdl-navigation__link Route" href="#">Route Map</a>
        </div>
    </div>

<!-- モーダルウインドウ -->

  <div id="modal-content">
	   <p><a id="modal-close" class="button-link">閉じる</a></p>
  </div>

    <main class="mdl-layout__content maincontents">
      <?php
    printCard("a","50000系 Shimakaze",
      "平成２５年の伊勢神宮式年遷宮にあわせて、
      当社沿線の最重要観光拠点である伊勢志摩地域の活性化を推進するための次世代新型特急車として登場しました。"
    );

    printCard("b","16000系 ACE",
      "当社の都市間輸送、観光輸送にも対応した特急ネットワークの輸送の主力を担う新型汎用特急車両。
      基本編成は4両と2両で、既存の22000系等の汎用特急と自在に連結でき、
      旅客需要に応じて編成長を組み替えることができる。"
    );

    printCard("c","7020系",
      "７０２０系は２００６年３月のけいはんな線開業に先立ち、
      ２００４年１２月より運転開始しました。
      鉄道車両初の通商産業省グッドデザイン商品に選定された既存車両７０００系を基本に、
      車いすスペースや新型高性能制御装置などや地球環境にやさしい設備を充実させ、
      最新技術を用いて開発しました。"
    );

    printCard("d","シリーズ21",
      "2000年（平成12年）3月に奈良線、京都線で開始した通勤車両「シリーズ２１」は、
      「人にやさしい・地球にやさしい」をキーワードに、バリアフリー、
      環境問題、資源問題に配慮した21世紀のスタンダード車両を目指しました。"
    );

    printCard("e","1020系",
      "平成3年、
      1230系を基本にMc-T-M-Tcの4両とした1020系が5編成登場しました。
      1020系は4両編成としても補助電源装置や電動空気圧縮機の集約化を行なわず、
      2両を1ユニットとして各々に機器を分散配置し、
      機器故障時等の運転に対する冗長系を持たせています。"
    );

    printCard("f","5800系",
      "平成9年7月に運用を開始した5800系通勤車Ｌ／Ｃカーは、
      21世紀の輸送 サービスを目指し近鉄が独自に開発したデュアルシートの新造車両。
      オフピーク時 にはクロスシートで運行。
      ピーク時には乗降時分を短縮し立席を確保して混雑緩和 を図るためロングシートで運行。
      居住性と乗車効率を両立させた通勤車両です。
      平成10年の鉄道友の会ローレル賞受賞。"
    );

    printCard("g","3200系",
      "昭和61年に投入した3200系は、
      車体に大型押し出しアルミ型材を使用して軽量化と製作コストの低減を図り、
      制御装置にそれまでの経験を生かした量産型のVVVFインバータを採用するなど、
      その後の近鉄通勤車の基本となりました。"
    );
      ?>
    </main>


    <div class="routeimage">
      <?php

      $count = 1;
      for ($i = 1;$i <= 6;$i++){
        for($j = 1;$j <= 6;$j++,$count++){
          $moji = '<img src="http://www.kintetsu.co.jp/railway/rosen/images/japan/ekitan_dia_japan_'.str_pad($count, 2, 0, STR_PAD_LEFT).'.png" alt="" />';
          echo $moji;
        }
        echo '<br>';
      }

      ?>
    </div>

  </body>
</html>
