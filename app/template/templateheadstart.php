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
    <link rel="stylesheet" href="/public/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Harmattan|Lemonada|Mada" rel="stylesheet">

<!--    <link href="https://fonts.googleapis.com/css?family=Amiri|Lateef" rel="stylesheet">-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113324400-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113324400-1');
    </script>
