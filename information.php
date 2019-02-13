<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>週報閲覧</title>
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
                                $("#ajax2_1").load("ajax/report_list/report_list_ajax.php?shiteiroom=1月&shiteimonth=1")
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
                                $("#ajax2_2").load("ajax/report_list/report_list_ajax.php?shiteiroom=2月&shiteimonth=2")
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
                                $("#ajax2_3").load("ajax/report_list/report_list_ajax.php?shiteiroom=3月&shiteimonth=3")
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
                                $("#ajax2_4").load("ajax/report_list/report_list_ajax.php?shiteiroom=4月&shiteimonth=4")
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
                                $("#ajax2_5").load("ajax/report_list/report_list_ajax.php?shiteiroom=5月&shiteimonth=5")
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
                                $("#ajax2_6").load("ajax/report_list/report_list_ajax.php?shiteiroom=6月&shiteimonth=6")
                            },
                            function () {
                                $("#ajax1_6").css("color", "goldenrod");
                                $("#ajax2_6").remove();
                            }
                    );
                    $("#ajax1_7").clickToggle(
                            function () {
                                $("#ajax1_7").css("color", "olive");
                                $("#ajax3").before("<p id='ajax2_7'></p>");
                                $("#ajax2_7").load("ajax/report_list/report_list_ajax.php?shiteiroom=7月&shiteimonth=7")
                            },
                            function () {
                                $("#ajax1_7").css("color", "goldenrod");
                                $("#ajax2_7").remove();
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
                    #ajax1_７{
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
                    #ajax2_7{
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
            <div id="header_inner"></div>
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
                  <a href="index.php">HOME</a> &gt; 週報閲覧のページ
                </div>
                
                
                <!-- 週報リスト (takahashi) -->
                <h2 class="page_title">週報リスト</h2>

                
                　<select name="year_button" size="1">
                      <option value="2015">2015年</option>
                    　<option value="2016">2016年</option>
                      <option value="2017">2017年</option>
                      <option value="2018">2018年</option>
                      <option value="2019">2019年</option>
                      <option value="2020">2020年</option>
                    </select>
                    
                　　<select name="month_button" size="1">
                      <option value="1">1月</option>
                    　<option value="2">2月</option>
                      <option value="3">3月</option>
                      <option value="4">4月</option>
                      <option value="5">5月</option>
                      <option value="6">6月</option>
                      <option value="7">7月</option>
                      <option value="8">8月</option>
                      <option value="9">9月</option>
                    　<option value="10">10月</option>
                      <option value="11">11月</option>
                      <option value="12">12月</option>
                    </select>
                    
                    <button class="pclist_button pclist_button_color1" id="ajax1_1">表示</button>
                    <!-- ↑valueの数字によってidのajaxの数字を変えたい！  --!>             
                    


                      <p id="ajax2"></p>
                      
                      
                      <hr class="line" id="ajax3">
              </SECTION>
              <section>
            
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
