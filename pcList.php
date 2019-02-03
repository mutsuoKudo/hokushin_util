<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ＰＣリスト</title>
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="キーワード">
        <meta name="description" content="紹介文">
        <link rel="stylesheet" href="css/sp.css">
        <link rel="stylesheet" href="css/pc.css">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->
        <?php
        require('lib/jQueryadd.php');
        ?>

            <script><!--
            jQuery(document).ready(function ($) {
                    // ここでは、$はjQueryとして使えます。	
                    $("#ajax1_1").clickToggle(
                            function () {
                                $("#ajax1_1").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_1'></p>");
                                $("#ajax2_1").load("ajax/pc_list/pc_list_all_ajax.php")
                            },
                            function () {
                                $("#ajax1_1").css("color", "goldenrod");
                                $("#ajax2_1").remove();
                            }
                    );
                    $("#ajax1_2").clickToggle(
                            function () {
                                $("#ajax1_2").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_2'></p>");
                                $("#ajax2_2").load("ajax/pc_list/pc_list_kanribu_ajax.php")
                            },
                            function () {
                                $("#ajax1_2").css("color", "goldenrod");
                                $("#ajax2_2").remove();
                            }
                    );
                    $("#ajax1_3").clickToggle(
                            function () {
                                $("#ajax1_3").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_3'></p>");
                                $("#ajax2_3").load("ajax/pc_list/pc_list_eigyobu_ajax.php")
                            },
                            function () {
                                $("#ajax1_3").css("color", "goldenrod");
                                $("#ajax2_3").remove();
                            }
                    );
                    $("#ajax1_4").clickToggle(
                            function () {
                                $("#ajax1_4").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_4'></p>");
                                $("#ajax2_4").load("ajax/pc_list/pc_list_kaihatsubu_ajax.php")
                            },
                            function () {
                                $("#ajax1_4").css("color", "goldenrod");
                                $("#ajax2_4").remove();
                            }
                    );
                    $("#ajax1_5").clickToggle(
                            function () {
                                $("#ajax1_5").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_5'></p>");
                                $("#ajax2_5").load("ajax/pc_list/pc_list_kenshusei_ajax.php")
                            },
                            function () {
                                $("#ajax1_5").css("color", "goldenrod");
                                $("#ajax2_5").remove();
                            }
                    );
                    $("#ajax1_6").clickToggle(
                            function () {
                                $("#ajax1_6").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_6'></p>");
                                $("#ajax2_6").load("ajax/pc_list/pc_list_mochidashi_ajax.php")
                            },
                            function () {
                                $("#ajax1_6").css("color", "goldenrod");
                                $("#ajax2_6").remove();
                            }
                    );
                });
                $.fn.clickToggle = function (a, b) {
                    return this.each(function () {
                        var clicked = false;
                        $(this).on('click', function () {
                            clicked = !clicked;
                            if (clicked) {
                                return a.apply(this, arguments);
                            }
                            return b.apply(this, arguments);
                        });
                    });
                };
                //--></script>

    <style>
                    <!-- 
                    #ajax1_1{
                        color:goldenrod;
                    }
                    #ajax1_2{
                        color:goldenrod;
                    }
                    #ajax1_3{
                        color:goldenrod;
                    }
                    #ajax1_4{
                        color:goldenrod;
                    }
                    #ajax1_5{
                        color:goldenrod;
                    }
                    #ajax1_6{
                        color:goldenrod;
                    }
                    #ajax2_1{
                    }
                    #ajax2_2{
                    }
                    #ajax2_3{
                    }
                    #ajax2_4{
                    }
                    #ajax2_5{
                    }
                    #ajax2_6{
                    }			
                    #ajax3{
                    }			
                    -->	         
                </style>
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

                            <SECTION>

                                <div id="pannavi">
                                    <a href="index.php">HOME</a> &gt; PCリストのページ
                                </div>



                                <!-- PCリスト (takahashi) -->

                                <h2 class="page_title">PCリスト</h2>

                                <div>
                                    <button class="pclist_button pclist_button_color1" id="ajax1_1">全部</button>
                                    <button class="pclist_button pclist_button_color2" id="ajax1_2">管理部</button>
                                    <button class="pclist_button pclist_button_color2" id="ajax1_3">営業部</button>
                                    <button class="pclist_button pclist_button_color2" id="ajax1_4">システム開発部</button>
                                    <button class="pclist_button pclist_button_color2" id="ajax1_5">研修生</button>
                                    <button class="pclist_button pclist_button_color2" id="ajax1_6">持ち出し</button>
                                </div>

                                <p id="ajax2">
                                </p>

                                <hr class="line" id="ajax3">

                                <p>&nbsp;</p>


                            </SECTION>


                            <section>

                                <h2>お問い合わせはコチラ</h2>

                                <div class="gray_bg_contact">

                                    <p><img src="img/icon.gif" alt="icon"> <b>電話番号</b>： <span class="red_b">00-0000-0000</span>　<img src="img/icon.gif" alt="icon"> <b>FAX</b>： <span class="red_b">00-0000-0000</span><br>
                                        ご不明な点がございましたら、まずはお気軽にご相談下さい。<br>
                                        <b><a href="contact.html">→メールでのお問い合わせ</a></b></p>

                                </div>






                                <hr class="line">

                                <p class="back"><a href="#header"><img class="scroll" src="img/pagetop.png" alt="ページトップに戻る"></a></p>

                                <br>

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
