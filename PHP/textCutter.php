<?php
                    if($Changes>0){
                    for ($x = 1; $x <= $Changes; $x++) {
                     $position=$Jump*$x;
                      $tracker=false;
                      while(!$tracker){
                        $arr = str_split($text, 1);
                      if($text[$position]!=" "){
                       
                      $position=$position+1;
                        
                      }
                      else{
                        
                      $tracker=true;
                      }
                      }
                      
                       $text= substr_replace(  $text,  $insert, $position, 0 );
                        $Jump=$Jump+Strlen($insert);
                                                   }
                    }
?>
