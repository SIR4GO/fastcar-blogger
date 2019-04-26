<?php

   $file2 = fopen(DATA_PATH , "r");

   $type_array = array();
   $title_array  = array();
   $page_array = array();
   $iconside_array = array();



   $counter = 0;
   while (! feof($file2))
   {
       $record = fgets($file2);
       $any = explode("||" , $record);
      // var_dump($record);
       if($record == false ||  count($any) != 7)  // duo to last record empty to solve problem undefined index
       {                                          // if line free in data file if no 5 fields continue and not set data to  arrays and not inject date to sidebar
           continue;
       }
       else
       {
           $info = explode("||" , $record);

           $type_array[$counter] = preg_replace('/\s+/', '', trim($info[0]));
           $title_array[$counter] = $info[1];
           //var_dump($title_array);
           $page_array[$counter] = preg_replace('/\s+/', '', trim($info[3]));

           $checkUrl = preg_replace('/\s+/', '', trim($info[5]));

           $iconside_array[$counter] = $checkUrl;

           // check by get-image-size  take more time to do that so we comment it.

//           if( $size = @getimagesize($checkUrl))  // to prevent  warning message
//           { // url right
//               if ($size[0] == 100 && $size[1] == 100 )
//                      $iconside_array[$counter] = $checkUrl;
//               else // if size not suit
//                   $iconside_array[$counter] = "/public/photo/side4.png";
//
//
//           }
//           else
//           {
//               $iconside_array[$counter] = "/public/photo/side2.jpg"; // if url of photo not valid
//           }//

           $counter++;

       }


   }


   $randArr = array();
   $key =0;
?>



<div class="container">
    <div class="row">
        <div class="col-md-3   sidebar rtl ">
                <div class="fb-page  "
                     data-href="https://www.facebook.com/teachingdrive/"
                     data-width="300"
                     data-hide-cover="false"
                     data-show-facepile="true" style="margin-bottom: 50px ;">
                </div>


            <h1>المنشورات السابقة</h1>
            <?php  for($k = 0 ; $k < 11 ; $k++  )  { ?>
                 <?php
                     while (true)
                     {
                         $key = rand(0 , count($title_array) - 1);


                         if( array_key_exists("$key" , $randArr)  ) // if found not take it for show
                         {

                             continue;
                         }
                         else  // if not found  take it and put it arr
                         {

                             $randArr["$key"] = "newKey";
                             //var_dump($randArr);
                             break;
                         }
                     }
                 ?>  <!-- To choose 8 keys random from array_title -->

                <div class="cup">

                    <img  src=" <?= $iconside_array[$key] ?> " >
                    <div  style="width: 58%; height: 100% ;">
                          <a  href="/<?= $type_array[$key] . "/" . "select" . "/" . $page_array[$key]  ?>"> <p ><?= $title_array[$key] ?></p>  </a>
                    </div>

                </div>
                <hr >

            <?php } //var_dump($randArr) ?>
        </div>
        <div class="col-md-9  view rtl  ">


