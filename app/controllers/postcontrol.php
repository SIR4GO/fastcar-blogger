<?php


namespace PHPMVC\controllers;


class postcontrol extends Abstract_
{
    private $PostType ;
    private $PostTitle ;
    private $PhotoUrl ;
    private $PostContent ;
    private $PostFinish ;
    private $PostSign ;
    private $PostDate ;
    private $Footerimage ;
    private $Reserved = "select";
    private $pageNum ;
    private $PageName ;
    private $PostUrl ;
    private $DataFilePath;
    private $date;
    private $iconSidebar;
    private $iconMain;
    private $PostSummary;
    private $password;
    private $orignalPassword ="eng159357";

    function __construct()
    {
        $this->pageNum = rand(0,10000);
        $this->PageName =  $this->Reserved  . $this->pageNum ;  // ready page name
        $this->DataFilePath =   $_SERVER['DOCUMENT_ROOT'] . "/". "files" . "/". "data.txt";
        $this->date = date('d/m/Y  h/i/s');

    }

    public function addAction()
    {
         $this->_view();


       //var_dump($_SESSION);

        if(isset($_POST['submit']) || isset($_SESSION['ok']) || isset($_SESSION['reject'] ))
        {

            //var_dump($_POST)	;
            if(isset($_POST['submit']))
            {
                $this->PostType = filter_input(INPUT_POST , "post" , FILTER_SANITIZE_STRING);

                $this->PostTitle = filter_input(INPUT_POST , "title" , FILTER_SANITIZE_STRING);
                $this->PostTitle = str_replace('<' , "" ,$this->PostTitle);

                $this->PhotoUrl = filter_input(INPUT_POST , "url" , FILTER_SANITIZE_URL);

                $this->PostContent = filter_input(INPUT_POST , "content" , FILTER_SANITIZE_STRING);
                $this->PostContent =  str_replace('=' , "" ,$this->PostContent);
                $this->PostContent =   nl2br( $this->PostContent);

                $this->PostSummary =  filter_input(INPUT_POST , "summary" , FILTER_SANITIZE_STRING);

                $this->PostFinish = filter_input(INPUT_POST , "finish" , FILTER_SANITIZE_URL);

                $this->PostSign = filter_input(INPUT_POST , "sign" , FILTER_SANITIZE_URL);

                $this->Footerimage = filter_input(INPUT_POST , "footerimage" , FILTER_SANITIZE_URL);


                $this->iconSidebar = filter_input(INPUT_POST , "iconside" , FILTER_SANITIZE_URL);
                $this->iconMain = filter_input(INPUT_POST , "iconmain" , FILTER_SANITIZE_URL);


                $this->PostDate = filter_input(INPUT_POST , "date" , FILTER_SANITIZE_STRING);
                $this->PostDate =  str_replace('<' , "" , $this->PostDate);

                $this->PostUrl =  DS . $this->PostType . DS . $this->Reserved . DS . $this->pageNum  ;


                $this->password = filter_input(INPUT_POST , "password" , FILTER_SANITIZE_STRING);


                $this->check_authority_confirm_data();


            }


                    // if post confirmed
              if(isset($_SESSION['ok']))
              {

                  $Path2 = VIEW_PATH . DS . $_SESSION['type'] . DS . $this->PageName . ".php";

                  while(file_exists($Path2))  // to prevent duplication  may make error
                  {
                      $Path2 = VIEW_PATH . DS . $_SESSION['type']  . DS . $this->PageName .  rand(0,10000) . ".php";
                  }
                  // We Write file before transfer it
                  $connec = fopen( $Path2  , "w");
                  $pool = fwrite($connec,
                      '<div class="card mb-3">' . "\r\n"
                      . '         <h3 style="margin: 40px 30px 40px 0 " class="card-title">' .  $_SESSION['title']  . ' </h3>' . "\r\n"
                      . '                              <br/>'   . "\r\n"

                      . '        <img class="card-img-top img1 " src=" '  .$_SESSION['purl']  . '" ' . ' alt="Card image cap">' . "\r\n"
                      . '                             <br/> '   . "\r\n"
                      . '        <div class="card-body"> ' . "\r\n"

                      . '             <p class="card-text">' . "\r\n"

                      . '                              <br/> '   . "\r\n"

                      .                         $_SESSION['content']  .   "\r\n"

                      . '                              <br/><br/>'  . "\r\n"

                      . '                   <span style="color: blue; font-weight: bold">  ' . '<a target="_blank" href="' .  $_SESSION['link1']  . '">'.  $_SESSION['link1'] . '</a>' . '  </span>  '   . "\r\n"

                      . '                              <br/><br/>'   . "\r\n"

                      . '                   <span style="color: blue; font-weight: bold">  ' . '<a target="_blank" href="' .  $_SESSION['link2']  . '">'.  $_SESSION['link2'] . '</a>'  .  '  </span>  '   . "\r\n"

                      . '              </p> '  . "\r\n"

                      . '                             <br/><br/> '  . "\r\n"

                      . '              <img class="card-img-bottom img2" src=" '  . $_SESSION['iurl'] . '" ' . ' alt="Card image cap">' . "\r\n"

                      . '                             <br/><br/>  '  . "\r\n"

                      . '              <p class="card-text" style="text-align: left" ><small class="text-muted">  ' . "Last Editing at  " .  $_SESSION['date']  .  ' </small></p>'  . "\r\n"

                      . '         </div> ' . "\r\n"

                      . '      </div>'



                  );

                  fclose($connec);
                  // Write record in file

                  $connection = fopen($this->DataFilePath , "a");

                  //var_dump($this->PostTitle);
                  $check = fwrite($connection ,
                      $_SESSION['type'] . "||" . $_SESSION['title'] ."||" . $_SESSION['summary']
                      . "||". $this->pageNum . "||" . $_SESSION['date'] . "||" .$_SESSION['iconside']
                      . "||" . $_SESSION['iconmain'] . "\r\n" );


                  fclose($connection);

                  $post_path = "/" . $_SESSION['type'] . "/" . $this->Reserved . "/" . $this->pageNum ;
                  echo "<div class='edit'> 
                              <a target='_blank' href='$post_path'>Confirmed Done , Go to Post </a>
 
                         </div>";
                  $this->Session_rest();  // clear session

              }
              else if(isset($_SESSION['reject']))
              {
                  $this->Session_rest();  // clear session
                  echo "<div class='edit'> 
                              <a target='_blank' href='/site/main'> Post rejected , Go to Main </a>
                         </div>";

              }

        }


    }


    public function SetDataToSession()
    {
        $_SESSION['type'] = $this->PostType ;

        $_SESSION['title'] = $this->PostTitle;
        $_SESSION['purl'] =  $this->PhotoUrl ;

        $_SESSION['content'] = $this->PostContent ;

        $_SESSION['summary'] = $this->PostSummary ;
        $_SESSION['link1'] = $this->PostFinish ;
        $_SESSION['link2'] = $this->PostSign ;

        $_SESSION['iurl'] = $this->Footerimage;

        $_SESSION['date'] = $this->PostDate;

        $_SESSION['received'] = "done";  // to allow preview


           // $_SESSION['iconside'] = $this->iconSidebar;

           if( $size = @getimagesize($this->iconSidebar))  // to prevent  warning message
           { // url right
               if ($size[0] == 100 && $size[1] == 100 )
                   $_SESSION['iconside'] = $this->iconSidebar;
               else // if size not suit
                   $_SESSION['iconside'] = "/public/photo/side4.png";


           }
           else
           {
               $_SESSION['iconside'] = "/public/photo/side2.jpg"; // if url of photo not valid
           }//


        //$_SESSION['iconmain'] = $this->iconMain;

        if( $pix = @getimagesize($this->iconMain))  // to prevent  warning message
        { // url right
            if ($pix[0] == 300 && $pix[1] == 200 )
                $_SESSION['iconmain'] = $this->iconMain;
            else // if size not suit
                $_SESSION['iconmain'] = "/public/photo/main1.jpg";


        }
        else
        {
            $_SESSION['iconmain'] = "/public/photo/main2.jpg"; // if url of photo not valid
        }//


    }

    public function Session_rest()
    {
        session_unset();
    }               // مدام اضطر يعمل بوست سيشن هيحصلها ريست بعد ميعمل كونفيرم ل بوست يعني فاضية بعد الاستعمال علي طول

    public function check_authority_confirm_data()
    {
        if($this->password == $this->orignalPassword)  // right go to preview
        {
            $this->SetDataToSession();  // _self to avoid preview after confirmed post duo to $_SESSion empty
            echo "<div class='edit'> 
                              <a target='_self' href='/site/preview'>Go to preview </a>  
                         </div>";

        }
        else
        {
            echo "<script type='text/javascript'>window.top.location='/site/authority';</script>"; exit; // must be replaced by header
        }
    }

}
?>