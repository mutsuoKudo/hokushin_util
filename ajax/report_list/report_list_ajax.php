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
                /--></script>	
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
                    $query = $query . ",si.shaion_mei_romaji AS r_name ";
                    $query = $query . " FROM shain si";
                    /*何月のレポートを持ってくるか判定するところ 
                    if ($_GET['shiteiroom'] != "1月") {
                        $query = $query . " WHERE si.department = " . $_GET['shiteimonth'];
                    } */
                    $query = $query . " ORDER BY si.shain_cd";

                    //var_dump($query);
                    $shain = $db->get_all($query);
                   //var_dump($shain[0]['shain_cd']);

                    $i = 0;
                    print('<div class="scrool">');
                    print('<table class="pc_table">');
                    print('<tr>');
                    print('<th colspan="1" class="top_cell_color1">名前</th>');
                    print('<th colspan="31" class="top_cell_color2">$_GET["shiteimonth"]</th>');
                    
                    print('</tr>');

                    print('<tr class="middle_cell_color">');
                    print('<th width="200px"></th>');
             
                    $y = 2019;
                    $m = 3;
                    $d = 1;
                    while (checkdate($m, $d, $y)) {
                    print('<th width="100px">'. $d .  '</th>');
                    $d++;
                    }
                    print('</tr>');
                    
                    foreach ($shain as $row) {
                       //var_dump($row);
                        $i = $i + 1;
                        if ($i > 10) {
                            $i = 1;
                            print('<tr class="middle_cell_color">');
                            print('<th width="200px"></th>');

                            $y = 2019;
                            $m = 3;
                            $d = 1;
                            while (checkdate($m, $d, $y)) {
                                print('<th width="100px">' . $d .  '</th>');
                                $d++;
                                }
                              print('</tr>');
                            }

  
                        print('<tr>');
                        print('<td onclick="alert(\'shain_cd.=' . $row['shain_cd'] . '\')">' . $row['name'] . '</td>');
                        
                        
                        for ($r_num =1; $r_num<=31; $r_num++) { 
                        //foreach ($shain as $row) {

                        print("<td>○</td>");
                        //print("<td ><a href='" . $row['report'] . "' target=\'_blank\'>○</a></td>");
                        //↑　$row[]のなかにURLの入ったカラムを入れる(reportは仮名)

                        }
                    }






//print('<td onclick="alert(\'serial no.=' . $row['serial_no'] . '\')">' . $row['id'] . '</td>');
                        print("</tr>\n");
                    
//	mysql_free_result($res);
//
print("</table>");

print('</div>');
//	$sql2 = "SELECT count(id) FROM pc_tbl";
//	$res2 = mysql_query( $sql2 );
//	$row2 = mysql_fetch_array( $res2 ); 	
////	print($row2[0]);
//	$youso = $row2[0];
                    ?>

<!--	<div style="position: relative; left:390px; top:-<?php print($youso * 26 + 174) ?>px; visibility:hidden;" id="phot1">
        <img src="" id="r_photo">
        </div>-->

                </body>
            </html>
