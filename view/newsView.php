<?php  



function viewTmp($key, $value) {
  echo("
    <div class=" . "wrp__viewblock" . ">
      <div class=" . "wrp__viewhdr". ">
        <span>
  ");
          if($key == 'header') {
            echo ($value);
          }
  echo("
        </span>
      </div>
      
      <div class=" . "wrp__viewtext" . ">
  ");
      if($key == 'text') {
        echo ($value);
      }
  echo("
      </div>
      
      <div class=" . "wrp__viewavtar" . ">
  ");
      if($key == 'avtor') {
        echo ("<span>$value</span>");
      }
  echo("        
      </div>
    </div>
  ");  
} 


