<?php    if(isset($_SESSION['received'])) { ?>      <? //to avoid preview after confirmed post duo to $_SESSION empty ?>
<div class="card mb-3">
    <h3 style="margin: 40px 30px 0 0" class="card-title">  <?= $_SESSION['title']  ?></h3>
    <br/>
    <img class="card-img-top img1 " src=" <?= $_SESSION['purl']  ?>"  alt="Card image cap">
    <br/>
    <div class="card-body">
        <p class="card-text">
            <br/>
            <?= $_SESSION['content']  ?>
            <br/><br/>
            <span style="color: red; font-weight: bold">   <?= $_SESSION['link1']  ?> </span>
            <br/><br/>
            <span style="color: red; font-weight: bold">  <?= $_SESSION['link2']  ?> </span>
        </p>
        <br/><br/>
        <img class="card-img-bottom img2" src=" <?= $_SESSION['iurl']?>"  alt="Card image cap">
        <br/><br/>
        <p class="card-text" style="text-align: left" ><small class="text-muted"> Last Editing at   <?= $_SESSION['date']  ?> </small></p>
    </div>
    <br/><br/>

    <form method="post">
        <input type="text" name="accept" value="yes" style="display:none">
        <input type="submit" name="ok" value="confirm" style="width: 100% ; margin-top: 40px ; color: snow ; background-color: #3395FF ; border: none ; outline: none ; height: 50px">
    </form>

    <br/>

    <form method="post">
        <input type="submit" name="reject" value="Reject" style="width: 100% ; color: snow ; background-color: #3395FF ; border: none  ; height: 50px">
    </form>


    <?php
      if(isset($_POST['ok']))
      {
          $_SESSION['ok'] = "yes";
          echo "<script type='text/javascript'>window.top.location='/postcontrol/add';</script>"; exit; // must be replaced by header
      }
      else if(isset($_POST['reject']))
      {
          $_SESSION['reject'] = "yes";
          echo "<script type='text/javascript'>window.top.location='/postcontrol/add';</script>"; exit; // must be replaced by header
      }





     ?>

</div>

<?php } ?>