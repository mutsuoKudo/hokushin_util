<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>objectNotFound</title>
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="キーワード">
        <meta name="description" content="紹介文">
        <link rel="stylesheet" href="/hokushin_util/css/sp.css">
        <link rel="stylesheet" href="/hokushin_util/css/pc.css">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->           
      </head>
      
      <body>
        <!-- メイン -->
        <main id="main">
          
          <!-- ヘッダー -->
          <header id="header">
                        <div id="header_inner">
                            <div id="h_info"><img src="/hokushin_util/img/tel_img.png" alt="information"></div>
                        </div>

                    </header>
          
          <?php
          require('tpl/header-menu.php');
          ?>
          
          <!-- メイン画像 ここから -->
          <div id="header-img">
            <img src="/hokushin_util/img/head_img_slim.png" alt="head_img_slim" class="main_photo">
          </div>
          <!-- メイン画像 ここまで -->
          <!-- ヘッダー終わり -->


          <!-- コンテンツ -->
          <!-- メインコンテンツ -->
          <article id="container">
            <section id="contents">
                <div id="pannavi">
                  <a href="/hokushin_util/index.php">HOME</a> &gt; Object Not Found
                </div>
                
                <!-- エラー404 (takahashi) -->
                <h2 class="page_title">お探しのページは見つかりませんでした(Error404)</h2>


                <section class="error_pad">

                <?php $url = $_SERVER['HTTP_REFERER']; 
                print("<p><a href= $url >こちら</a>をクリックして再度お探し下さい。</p>");
                ?>
                </section>

            </section>
            <!-- メインコンテンツ終わり -->
            
          </article>
          <!-- コンテンツ終わり -->

          <!-- フッター -->
          <?php
          require('tpl/footer.php');
          ?>
          <!-- フッター終わり -->
        
        </main>
        <!-- メイン終わり -->

      </body>
    </html>
