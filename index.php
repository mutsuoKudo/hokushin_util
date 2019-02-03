<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ホクシンシステム便利サイト</title>
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

        <main id="main">

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

            <!-- メイン画像 ここから -->
            <div id="header-img">
                <img src="img/head_img_slim.png" alt="head_img_slim" class="main_photo">
            </div>
            <!-- メイン画像 ここまで -->



            <!-- ヘッダー終わり -->


            <!-- コンテンツ -->

            <!-- メインコンテンツ -->

            <article id="container">
                <section id="contents">

                    <section>

                        <h2>当サービスが選ばれている３つの特徴</h2>



                        <!-- ３コンテンツ・ボックス ここから -->

                        <div class="box">

                            <div class="box1">
                                <p><img src="img/point01.jpg" alt="point01"></p>
                                <p><span class="b_big">選ばれる特徴1</span><br>
                                    こちらにはbox1の本文や写真を掲載してください。こちらにはbox1の本文や写真を掲載してください。</p>
                            </div>

                            <div class="box2">
                                <p><img src="img/point02.jpg" alt="point02"></p>
                                <p><span class="b_big">選ばれる特徴2</span><br>
                                    こちらにはbox2の本文や写真を掲載してください。こちらにはbox2の本文や写真を掲載してください。</p>
                            </div>

                            <div class="box3">
                                <p><img src="img/point03.jpg" alt="point03"></p>
                                <p><span class="b_big">選ばれる特徴3</span><br>
                                    こちらにはbox3の本文や写真を掲載してください。こちらにはbox3の本文や写真を掲載してください。</p>
                            </div>

                        </div>

                        <!-- ３コンテンツ・ボックス ここまで -->

                        <br>

                    </section>
                    <section>

                        <h2>天賦事務所からのごあいさつ</h2>


                        <p><span class="brown_big">キャッチコピーなどのお伝えしたい要約文を記載してください。</span></p>

                        <p><img class="picture" src="img/photo_01.jpg" alt="photo">
                            こちらには、本文を掲載し、下に見出しを追加して、本文を追加していってください。そして、サイト名を入力し、一番上の１行にはサイト紹介文を記載し、一番下のコピーライト部分にサイト名などを入れてください。</p>

                        <p>「 design by tempnate 」という当サイトの著作権テキストは削除しないで下さい。表示の削除をご希望される場合は <a href="http://tempnate.com/tinyd0+index.id+5.htm" rel="nofollow" target="_blank">著作権テキスト削除サービス</a>をご検討くださいませ。</p>

                        <p>また、トップページができ上がりましたら、「よくあるご質問ページ」など１つ１つページを複製して、ファイルの名前を「faq.html」などに変更してコンテンツを作成してください。<br class="clear"></p>

                        <hr class="line">

                        <p>&nbsp;</p>

                    </section>
                    <section>

                        <h2>お問い合わせはコチラ</h2>

                        <div class="gray_bg_contact">

                            <p><img src="img/icon.gif" alt="icon"> <b>電話番号</b>： <span class="red_b">00-0000-0000</span>　<img src="img/icon.gif" alt="icon"> 

                                <b>FAX</b>： <span class="red_b">00-0000-0000</span><br>
                                ご不明な点がございましたら、まずはお気軽にご相談下さい。<br>
                                <b><a href="contact.html">→メールでのお問い合わせ</a></b></p>

                        </div>

                        <hr class="line">

                        <p>&nbsp;</p>

                        <h2 class="page_title">最新情報＆更新情報</h2>

                        <div id="news">
                            20xx.4.10 <a href="#">新サービスを開始いたしました。</a><br>
                            <hr class="line">
                            20xx.3.26 <a href="#">新サービスについてのプレスリリースをご覧ください。</a><br>
                            <hr class="line">
                            20xx.3.10 <a href="#">天賦会館でセミナーを行ないました。</a><br>
                            <hr class="line">
                            20xx.3.08 <a href="#">会社概要ページを更新しました。</a><br>
                            <hr class="line">
                        </div>


                        <p class="back"><a href="#header"><img class="scroll" src="img/pagetop.png" alt="ページトップに戻る"></a></p>

                    </section>
                </section>

                <!-- メインコンテンツ終わり -->

            </article>

            <!-- コンテンツ終わり -->

        </main>

        <!-- メイン終わり -->

        <!-- フッター -->
        <?php
        require('tpl/footer.php');
        ?>


        <!-- フッター終わり -->
    </body>
</html>
