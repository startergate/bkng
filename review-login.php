<!DOCTYPE html>
<?php
  session_start();
  $ihash = $_GET['ihash'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/style2.css?ver=69">
    <link rel="stylesheet" href="/bootstrap-4.0b/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="./css/bg_style.css?ver=8">
  	<link rel="stylesheet" type="text/css" href="./css/master.css">
  	<link rel="stylesheet" type="text/css" href="/Normalize.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/static/img/favicon/startergate_id/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/img/favicon/startergate_id/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/img/favicon/startergate_id/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/img/favicon/startergate_id/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/img/favicon/startergate_id/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/img/favicon/startergate_id/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/img/favicon/startergate_id/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/img/favicon/startergate_id/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/startergate_id/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/static/img/favicon/startergate_id/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/startergate_id/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon/startergate_id/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/startergate_id/favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <meta name="msapplication-TileImage" content="/static/img/favicon/startergate_id//ms-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>BKNG</title>
  </head>
  <body id="bge">
    <div class="covra">
      <div class="container">
        <div id=login>관리자 로그인</div>
        <br />
        <div id=lotext>
          <br />
          <h3 class="longer-text"><strong>BKNG에서 거래 상세 정보를 보려면 로그인하세요.</strong></h3>
          <br />
          <?php
            echo '<form id="form" action="./function/review.php?ihash='.$ihash.'" method="post">'
          ?>
            <input type="password" class="form-control" name="pw" id="form-title" placeholder="비밀번호">
            <br />
            <input type="submit" name="confirm_review_login" class="btn btn-light" value='로그인'>
          </form>
        </div>
      </div>
    </div>
    <script src="/jquery/jquery-3.3.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
