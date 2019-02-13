<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>週報リスト</title>
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="キーワード">
        <meta name="description" content="紹介文">
        <link rel="stylesheet" href="../../css/sp.css">
        <link rel="stylesheet" href="../../css/pc.css">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->
        <?php
//        var_dump($_GET['shiteiroom']);
//        var_dump($_GET['shiteinumber']);
        require('../../lib/jQueryadd.php');
        ?>
        <script><!--
            function chgpic_apear(pic_name) {
                    $('#phot1').css("visibility", "visible");
                    $('#r_photo').attr("src", pic_name);
            }
            function pic_hidden() {
                $('#phot1').css("visibility", "hidden");
                }
                /-->
       >
                        function win_open_add() {
                            window.open("report_list_ajax.php","",""); 
                        }

                        function win_open_delete() {
                            window.open("information.php","",""); 
                        }

                
                </script>	
            <style>
                        <!-- 
                        form{
                            display:inline;
                        }
                        -->
                    </style>
                </head>

                <body>

                    <?php
                    include_once('../../lib/db_main.php');
//全案件取得
                    $db = new db;
                    $query = "SELECT ";
                    $query = $query . "si.shain_mei AS name ";
                    $query = $query . ",si.shain_cd AS shain_cd "; 
                    /* $query = $query . ",si.shaion_mei_romaji AS r_name "; */
                    $query = $query . " FROM shain si";
                    /*何月のレポートを持ってくるか判定するところ
                    if ($_GET['shiteimonth'] != "") {
                        $query = $query . " WHERE  = "(レポート名の月の部分を入れる？？) . $_GET['shiteimonth'];
                    } */
                    $query = $query . " ORDER BY si.shain_cd";

                    //var_dump($query);
                    $shain = $db->get_all($query);
                   //var_dump($shain[0]['shain_cd']);

                    $i = 0;
                    print('<div class="scrool">');
                    print('<table class="pc_table">');
                    print('<tr>');
                    print('<th colspan="33" class="top_cell_color2">$_GET["shiteimonth"]</th>');
                    
                    print('</tr>');

                    print('<tr class="middle_cell_color">');
                    print('<th class="top_cell_color1" width="250px">名前</th>');
                    print('<th class="top_cell_color1" width="105px">操作</th>');
             
                    $y = 2019; /*表示する西暦（year_buttonのvalue?）が入力されるようにする*/
                    $m = 3;
                    /* $m = $_GET['shiteimonth'];    表示する月が入力されるようにする */
                    $d = 1;
                    while (checkdate($m, $d, $y)) {
                    print('<th width="80px">' . $d . '</th>');
                    $d++;

                    
                    }
                    print('</tr>');
                    
                    foreach ($shain as $row) {
                       //var_dump($row);
                        $i = $i + 1;
                        if ($i > 10) {
                            $i = 1;
                            print('<tr class="middle_cell_color">');
                            print('<th class="top_cell_color1" width="250px">名前</th>');
                            print('<th class="top_cell_color1" width="105px">操作</th>');

                            $y = 2019;  /*表示する西暦が入力されるようにする*/
                            $m = 3;
                            /* $m = $_GET['shiteimonth'];    表示する月が入力されるようにする */
                            $d = 1;
                            while (checkdate($m, $d, $y)) {
                                print('<th width="100px">' . $d .  '</th>');
                                $d++;
                                }
                              print('</tr>');
                            }

  
                        print('<tr>');
                        print('<td onclick="alert(\'shain_cd.=' . $row['shain_cd'] . '\')">' . $row['name'] . '</td>');
                        
                        print('<td><form><input type="button" value="追加" onClick="win_open_add()"></form>
                        　　　　　<form><input type="button" value="削除" onClick="win_open_delete()"></form></td>');

                  

                        /* print('<td><button width="100px">追加</button><button width="100px">削除</button></td>'); */
                        
                        
                        for ($r_num =1; $r_num<=31; $r_num++) { 
                        /*foreach ($shain as $row) { */

                        print("<td><a href=''>○</a></td>");

                        /*print("<td ><a href='" . $row['report'] . "' target=\'_blank\'>○</a></td>");
                        ↑　$row[]のなかにURLの入ったカラムを入れる？？(reportは仮名)
                        　　※データが入っているときと入っていない時の条件分岐*/

                        }

                    }


                    print("</table>");
                    print('</div>');

                    ?>
        </body>
    </html>

