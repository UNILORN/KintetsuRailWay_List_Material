<?php

function printCard($alfa,$name,$text){
  $moji = '<div class="train_'.$alfa.' mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
  <h2 class="mdl-card__title-text">'.$name.'</h2>
  </div>
  <div class="mdl-card__supporting-text">
  '.$text.'
  </div>
  </div>';

  echo $moji;
}


 ?>
