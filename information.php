<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ホームページ・タイトル</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="キーワード">
<meta name="description" content="紹介文">
<link rel="stylesheet" href="css/sp.css">
<link rel="stylesheet" href="css/pc.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body>

<!-- メイン -->

<div id="main">


<!-- ヘッダー -->

<header id="header">

<!-- <h1>こちらには、メインキーワードや紹介文を入れてください</h1> -->

  <div id="header_inner">
   <!-- <div id="h_logo"><h2><a href="index.html"><img src="img/logo.png" alt="サイト・タイトル"></a></h2></div> -->
   <div id="h_info"><img src="img/tel_img.png" alt="information"></div>
  </div>

</header>

<?php
require('tpl/header-menu.php');
?>


<p>現在作成中です</p>

<!-- メイン画像 ここから -->
<!-- <div id="header-img">
<img src="img/head_img_slim.png" alt="head_img_slim" class="main_photo">
</div> -->
<!-- メイン画像 ここまで -->




<!-- ヘッダー終わり -->


<!-- コンテンツ -->

<!-- メインコンテンツ -->

<!-- <div id="container">
  <div id="contents">


<div id="pannavi">
<a href="index.php">HOME</a> &gt; 業務内容ページ
</div>




<h2 class="page_title">業務内容ページ</h2>




<h2>業務内容1　（画像の回り込み方法１）</h2>

<p><img class="picture" src="img/photo_01.jpg" alt="photo">
画像の横にテキストを回り込みで指定しています。imgタグの中に（ class="picture" ）を入れると、画像の横にテキストを回り込ませる事ができます。</p>

<p>テキストの最後に（ br class="clear" ）というタグを入れると、テキストの回り込みを解除できます。これを入れないと下↓の見出しがずれます。<br class="clear"></p>

<p>&nbsp;</p>





<h2>業務内容2　（画像の回り込み方法２）</h2>

<p><img src="img/photo_01.jpg" align="left" hspace="15" vspace="5" alt="photo">
テキストを回り込ませる２つ目の方法は、画像を掲載するHTMLソースの中に、回り込み指定を追加して掲載する方法です。</p>

<p>下記は、画像を掲載するためのHTMLソースの例です。align と記載して、回り込ませる指定をしています。</p>

<p>（ img src="画像ファイル" align="left" hspace="15" vspace="5" ）</p>

<p>&nbsp;</p>





<h2>業務内容3</h2>

<table>
<tr>
<td class="t00">
  <table class="t01">
  <tr>
   <td class="head">業務内容・タイトル１</td>
  </tr>
  <tr>
   <td class="t01"><img class="picture" src="img/photo_02.jpg" alt="photo">２列のレイアウトです。ホームページビルダーなどで、配置したい所にご利用ください。<br class="clear"></td>
  </tr>
  </table>
</td>
<td>
  <table class="t01">
  <tr>
   <td class="head">業務内容・タイトル２</td>
  </tr>
  <tr>
   <td class="t01"><img class="picture" src="img/photo_02.jpg" alt="photo">テーブルタグで指定しています。画像も入れ替えてください。画像は110px x 100pxです。<br class="clear"></td>
  </tr>
  </table>
</td>

</tr>
</table>

<p>&nbsp;</p>





<h2>業務内容4</h2>

<h3>小見出しタイトル</h3>

<p>ホームページ作成ソフトをご利用の際は、この見出し↑の前後をコピーして、下に貼り付けで増やしていってください。</p>

<hr class="line">

<p>&nbsp;</p>







<h2>お問い合わせはコチラ</h2>

<div class="gray_bg_contact">

<p><img src="img/icon.gif" alt="icon"> <b>電話番号</b>： <span class="red_b">00-0000-0000</span>　<img src="img/icon.gif" alt="icon"> <b>FAX</b>： <span class="red_b">00-0000-0000</span><br>
ご不明な点がございましたら、まずはお気軽にご相談下さい。<br>
<b><a href="contact.html">→メールでのお問い合わせ</a></b></p>

</div>






<hr class="line">

<p class="back"><a href="#header"><img class="scroll" src="img/pagetop.png" alt="ページトップに戻る"></a></p>

<br>


  </div> -->

<!-- メインコンテンツ終わり -->

<!-- </div> -->

<!-- コンテンツ終わり -->




<!-- フッター -->
<?php
require('tpl/footer.php');
?>


<!-- フッター終わり -->

<!-- </div> -->

<!-- メイン終わり -->

</body>
</html>
