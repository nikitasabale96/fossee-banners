<?php
$today = date("Y-m-d H:i:s");
$hackathon_date = "2025-02-5 23:59:59.0";
$autumn_date = "2025-10-27 23:59:59.0";
$oshw_hackathon_date = "2026-03-16 23:59:59.0";
$semester_internship_date = "2026-02-03 23:59:59.0";
if($today<$oshw_hackathon_date){
echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

           <div class="nice-bar" style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">

           <a class="nice-text" href="https://oshw26.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/oshwWebbnr.gif">
           </a>

           <a class="nice-text" href="https://fossee.in/semester-internship/2026" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/SliWebBnrV1.gif">
           </a>

          
          <!-- <a class="nice-text" href="https://esim-hackathon-2025.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/webbnr-04.gif">
           </a> -->
            
           
           
           
       </div> 
       ';
}
          else{
                    echo '
                    <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

              <div style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
   
           <a href="https://oshw26.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/oshwWebbnr.gif">
           </a>

                  </div>';
                              
          
        // class="nice-bar" class="nice-text"
       }
          
       

   
       ?>
