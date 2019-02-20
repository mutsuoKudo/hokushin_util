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
        var_dump('shiteiyear:');
       var_dump($_GET['shiteiyear']);
       var_dump('shiteimonth:');
       var_dump($_GET['shiteimonth']);
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

// タイムゾーンを設定
//  date_default_timezone_set('Asia/Tokyo');
// 前月・次月リンクが押された場合は、GETパラメーターから年月を取得
//if (isset($_GET['ym'])) {
//    $ym = $_GET['ym'];
//} else {
    // 今月の年月を表示
//    $ym = date('Y-m');
//}
// タイムスタンプを作成し、フォーマットをチェックする
//※timestamp使用すると現在年月が表示されなかったので削除しました（高橋）
// $timestamp = strtotime($ym . '-01');
// if ($timestamp === false) {
//     $ym = date('Y-m');
//     $timestamp = strtotime($ym . '-01');
// }
// 今日の日付 フォーマット　例）2018-07-3
//$today = date('Y-m-j');
$today = date('Y-m');

// カレンダーのタイトルを作成　例）2017年7月
$html_title = date('Y-n');

// 前月・次月の年月を取得
// 方法１：mktimeを使う mktime(hour,minute,second,month,day,year)
// $prev = date('Y/m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$prev1 = date('Y-m', mktime(0, 0, 0, date('m')-1, 1, date('Y')));
$prev2 = date('Y-m', mktime(0, 0, 0, date('m')-2, 1, date('Y')));
$prev3 = date('Y-m', mktime(0, 0, 0, date('m')-3, 1, date('Y')));
$prev4 = date('Y-m', mktime(0, 0, 0, date('m')-4, 1, date('Y')));
$prev5 = date('Y-m', mktime(0, 0, 0, date('m')-5, 1, date('Y')));
$prev6 = date('Y-m', mktime(0, 0, 0, date('m')-6, 1, date('Y')));

// $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
$next1 = date('Y-m', mktime(0, 0, 0, date('m')+1, 1, date('Y')));
$next2 = date('Y-m', mktime(0, 0, 0, date('m')+2, 1, date('Y')));
$next3 = date('Y-m', mktime(0, 0, 0, date('m')+3, 1, date('Y')));
$next4 = date('Y-m', mktime(0, 0, 0, date('m')+4, 1, date('Y')));
$next5 = date('Y-m', mktime(0, 0, 0, date('m')+5, 1, date('Y')));


include_once('../../lib/db_main.php');

//全案件取得
$db = new db;
$query = "SELECT ";
$query = $query . "si.shain_mei AS name ";
$query = $query . ",si.shain_cd AS shain_cd ";
$query = $query . " FROM shain si";
$query = $query . " WHERE si.department = 4
                    AND taishokubi IS NULL";
$query = $query . " ORDER BY si.shain_cd";

//var_dump($query);
$shain = $db->get_all($query);
//var_dump($shain[0]['shain_cd']);

$i = 0;

print('<table class="report_table">');

print('<tr class="middle_cell_color">');
print('<th class="top_cell_color1" width="90px">名前</th>');


print('<th width="85px">' . $prev6 . '</th>');
print('<th width="85px">' . $prev5 . '</th>');
print('<th width="85px">' . $prev4 . '</th>');
print('<th width="85px">' . $prev3 . '</th>');
print('<th width="85px">' . $prev2 . '</th>');
print('<th width="85px">' . $prev1 . '</th>');
print('<th width="85px" style ="background-color:greenyellow;" >' . $html_title . '</th>');
print('<th width="85px">' . $next1 . '</th>');
print('<th width="85px">' . $next2 . '</th>');
print('<th width="85px">' . $next3 . '</th>');
print('<th width="85px">' . $next4 . '</th>');
print('<th width="85px">' . $next5 . '</th>');
print('</tr>'); 


foreach ($shain as $row) {
   //var_dump($row);
    $i = $i + 1;
    if ($i > 10) {
        $i = 1;

print('<tr class="middle_cell_color">');
print('<th class="top_cell_color1" width="90px">名前</th>');

print('<th width="85px">' . $prev6 . '</th>');
print('<th width="85px">' . $prev5 . '</th>');
print('<th width="85px">' . $prev4 . '</th>');
print('<th width="85px">' . $prev3 . '</th>');
print('<th width="85px">' . $prev2 . '</th>');
print('<th width="85px">' . $prev1 . '</th>');
print('<th width="85px" style ="background-color:greenyellow;" >' . $html_title . '</th>');
print('<th width="85px">' . $next1 . '</th>');
print('<th width="85px">' . $next2 . '</th>');
print('<th width="85px">' . $next3 . '</th>');
print('<th width="85px">' . $next4 . '</th>');
print('<th width="85px">' . $next5 . '</th>');
}
    print('</tr>');

    print('<td onclick="alert(\'shain_cd.=' . $row['shain_cd'] . '\')">' . $row['name'] . '</td>');



    /* 週報リンク（1～12月）ファイルがhokushin_utilにあるとき */
    
        /* ファイル名は【社員コード_日付.png】　ex 高橋かなん2019年1月提出のファイル　2018100031-2019-01.pdf　*/
     $report_name = $row['shain_cd'] .'-'.  $prev6 . '.pdf'; 
    /* var_dump($report_name); */
    // $report_name = $row['shain_cd'] . '_2019' . $r . '.pdf'; 
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $prev5 . '.pdf';  
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");


    $report_name = $row['shain_cd'] .'-'.  $prev4 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $prev3 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $prev2 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $prev1 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $html_title . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $next1 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $next2 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $next3 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $next4 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");

    $report_name = $row['shain_cd'] .'-'.  $next5 . '.pdf';
    print("<td><a href='report/$report_name' target='_blank'>○</a></td>");
       
}


print("</table>");


?>
</body>
</html>

