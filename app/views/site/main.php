<!doctype html>
<html lang="en">
<head>
    <?php

    //var_dump($this); here meta data ready
    $title = "تعليم قيادة السيارات - ميكانيكا السيارات";
    $description = "الموقع يساعد علي نشر التوعية في مجال تعليم القيادة , نصائج للسائقين ,ميكانيكا ,أعطال ,حوادث ,اسباب الحوادث ,أمتحانات المرور , رخصة القيادة ,قوانين المرور , مزايا وعيوب السيارات";
    $keywords = "تعليم القيادة , نصائج للسائقين ,ميكانيكا ,أعطال ,حوادث ,اسباب الحوادث ,أمتحانات المرور , رخصة القيادة ,قوانين المرور , مزايا وعيوب السيارات";
    $author = "معلم قيادة السيارات";

    if(isset($this->title) && $this->title != "" && $this->title != " ") {
        $title = $this->title;
        $description = $this->description;
        $keywords = $this->keywords;
        $author = $this->author;
    }
    ?>

    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="<?= $author ?>">
    <!-- title -->
    <title><?= $title ?></title>


    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:type" content="article">
    <!--    <meta property="og:url" content="http://www.aalamseo.com/metatag/">-->
    <meta property="og:site_name" content="رخصة القيادة">
    <meta property="fb:admins" content="M.A">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="article:publisher" content="https://www.facebook.com/teachingdrive/">


    <!-- Bootstrap and fontaws CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">

    <!--    <link href="https://fonts.googleapis.com/css?family=Amiri|Lateef" rel="stylesheet">-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113324400-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113324400-1');
    </script>


    
</head>
<body>
<!-- start header -->
<div class="header">
    <div class="overlay">
        <!-- start navbar  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary   rtl ">
            <div class="container ">
                <a class="navbar-brand" href="/site/main"><i class="fa fa-car fa-lg" aria-hidden="true"></i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  nav-modify ">
                        <li class="nav-item active">
                            <a class="nav-link" href="/site/main"> الصفحة الرائيسية <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاقسام </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/learning/select/main">تعليم القيادة</a>
                                <a class="dropdown-item" href="/advice/select/main"> نصائح للسائقين </a>
                                <a class="dropdown-item" href="/wrongs/select/main">ميكانيكا-أعطال</a>
                                <a class="dropdown-item" href="/accidents/select/main">حوادث و أسبابها</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/exams/select/main">أمتحانات المرور</a>
                                <a class="dropdown-item" href="/cars/select/main">مزايا و عيوب السيارات</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link temp " href="/site/support">ادعمنا للأستمرار</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link  temp" href="/site/about">عن الموقع والمسؤولين</a>
                        </li>

                    </ul>
                    <div class="social-icons">
                        <a target="_blank" href="https://www.youtube.com/channel/UCMrnR54kPAy0vhKJAgMUc-A?view_as=subscriber"> <i class="fa fa-youtube fa-lg" aria-hidden="true"></i> </a>
                        <a target="_blank" href="https://www.facebook.com/teachingdrive"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a>
                        <a target="_blank" href="https://mail.google.com/mail/u/1/?tab=wm#inbox"> <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i> </a>

                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar  -->

        <div class="content hide">
            <h1 class="head">تعليم القيادة </h1>
            <p class=" para rtl">
                تعليم القيادة , نصائح للسائقين , ميكانيكا-اعطال , أمتحانات المرور , مزايا و عيوب السيارات , حوادث و المخلفات
                <br/><br/>
                <span style="color: #007bff ; font-weight: bold"> شعارنا </span>" خطوة بخطوة لتصبح سائق محترف "
            </p>
            <i id="btn" class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>

        </div>
    </div>
</div>
<!-- end header -->


<!-- start body -->

<div class="row site-view">
    <div class="col-md-12 ">
        <h1> السلام عليكم في موقع تعليم القيادة </h1>
        <p> هنا سوف تعرف كل ما تحتاجه عن القيادة, أعطال السيارات
            امتحانات المرور والحصول علي الرخصة وتجديدها واكثر تابعاونا ليصلكم كل جديد
        </p>
        <div class="social-icons-body">
            <a href="https://www.facebook.com/teachingdrive"> <i class="fa fa-facebook fa-3x" style="color: blue" aria-hidden="true"></i> </a>
            <a href="https://www.youtube.com/channel/UCMrnR54kPAy0vhKJAgMUc-A?view_as=subscriber"> <i class="fa fa-youtube fa-3x" style="color: red;" aria-hidden="true"></i> </a>
            <a href="https://mail.google.com/mail/u/1/?tab=wm#inbox"> <i class="fa fa-google-plus fa-3x" style="color: red;" aria-hidden="true"></i> </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row department-section">
        <div class="col-md-12 ">
            <h1> أقسام الموقع  </h1>
        </div>

        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db6.png">
            <a href="/wrongs/select/main"><h3> ميكانيكا أعطال  </h3></a>
            <p>من خلال هذا القسم ستتعلم كيفية اصلاح سياراتك بنفسك ومعرفة اسباب الاعطال لتجنبها </p>
        </div>
        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db3.png">
            <a href="/advice/select/main"><h3> نصائح للسائقين </h3></a>
            <p>من خلال هذا القسم سنعرض نصائح هامة تفيد كل سائق </p>
        </div>
        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db2.png">
            <a href="/learning/select/main"><h3> قسم تعليم القيادة </h3></a>
            <p>من خلال هذا القسم ستتعلم اهم أساسيات القيادة للمبتدئين </p>
        </div>


        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db7.png">
            <a href="/accidents/select/main"><h3> حوادث واسبابها </h3></a>
            <p>من خلال هذا القسم سوف نتعرف علي الاخطاء الشائعة التي تؤدي للحوادث حفظكم الله   </p>
        </div>
        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db5.png">
            <a href="/cars/select/main"><h3> مزايا و عيوب السيارات  </h3></a>
            <p>من خلال هذا القسم ستتعرف علي انواع السيارات ومميزاتها وعيوبها واسعارها </p>
        </div>
        <div class="col-md-4 db col-sm-6 ">
            <img src="/public/photo/db4.png">
            <a href="/exams/select/main"><h3> أمتحانات المرور و المخلفات </h3></a>
            <p>من خلال هذا القسم ستتعرف علي اهم الاختبارات للحصول علي الرخصة و كيفية تجديدها و معرفة المخلفات للمبتدئين </p>
        </div>
    </div>

</div>

<!-- end body -->

<!-- footer Start -->
<div class="footer row">

    <div class=" col-lg-6 col-sm-6  ">
        <p class="modify" style="margin-left: 130px">Coding By Eng <span style="color: #2271e8"> Mahmoud Ahmed  </span> &reg; </p>
    </div>
    <div class=" col-lg-4 col-sm-6">
        <p class="modify " style="margin-left: 130px"> &#169; All Right <span style="color: #2271e8 "> Reserved </span></p>
    </div>


</div>
<!-- footer  end -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/public/js/jquery-3.2.1.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="/public/js/jquery.nicescroll.min.js" ></script>
<script>
       window.onload = function () {
           $('.content').removeClass('hide');
           $('.head , .para ').addClass('zoomIn animated');

           // $('html, body').animate({ scrollTop:  $(SELECTOR).offset().top - 50 }, 'slow');
           // $('html, body').animate({ scrollTop:500 }, 'slow');

           var btn = document.getElementById('btn');

           btn.onclick = function (ev) {
               $('html, body').animate({scrollTop: $('.site-view').offset().top - 50}, 'slow');

           };
       }
</script>



</body>
</html>