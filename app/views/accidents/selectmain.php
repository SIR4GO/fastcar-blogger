<?php


//var_dump($this->arr_title);
//var_dump($this->arr_summary);
//var_dump($this->arr_pages);

?>


<link rel="stylesheet" type="text/css" href="/public/css/departmain.css">

<div class="body">



    <?php  for( $i = count($this->arr_title) - 1 ; $i >=  0  ; $i--  )  { ?>

        <div class="box">
            <img  src=" <?=  $this->iconmain_array[$i] ?>" alt="some thing">
            <div class="content">
                <a style="color: black ; text-decoration: none" href="/accidents/select/<?= $this->arr_pages[$i] ?>">   <h2 class=" h1 title"> <?= $this->arr_title[$i] ?>     </h2> </a>

                <p class="lead" >
                    <a style="color:#345366 ; text-decoration: none" href="/accidents/select/<?= $this->arr_pages[$i] ?>"> <?= $this->arr_summary[$i] ?> </a>
                </p>
            </div>
        </div>
    <?php } ?>

</div>
