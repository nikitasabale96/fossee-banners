<?php
$today = date("Y-m-d H:i:s");
$hackathon_date = "2024-04-26 23:59:59.0";
$fellowship_date = "2024-04-22 23:59:59.0";
if($today<$fellowship_date){
echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

           <div class="nice-bar" style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
           <a class="nice-text" href="https://animate2024.fossee.in/" target="_blank">
               <img src="https://static.fossee.in/fossee/banners/web-bnr-animate.gif">
           </a>    
           <a class="nice-text" href="https://fossee.in/fellowship/2024" target="_blank">
               <img src="https://static.fossee.in/fossee/banners/webbnr-FSF24ap.png">
           </a>
       </div> 
       ';
        // class="nice-bar" class="nice-text"
       }
       else{
           echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
                 <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
                  <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>
       <div style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
          
           <a href="https://animate2024.fossee.in/" target="_blank">
               <img src="https://static.fossee.in/fossee/banners/web-bnr-animate.gif">
           </a>
       </div> 
       ';
       }
       ?>
