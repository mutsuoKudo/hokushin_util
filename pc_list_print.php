<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ＰＣリスト　プリント用</title>
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="キーワード">
        <meta name="description" content="紹介文">
        <link rel="stylesheet" href="css/sp.css">
        <link rel="stylesheet" href="css/pc.css">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->

    </HEAD>
    <BODY link="#99CCFF" alink="#9900FF" vlink="#FF9900">

        <h2 align='center' style='color:#ff6347;'>ホクシンシステム　ＰＣリスト（<?php print($groom = $_GET["shiteiroom"]); ?>）</h2>


        <?php
        include_once('lib/db_main.php');
//全案件取得
        $db = new db;
        $query = "SELECT * FROM pc_list";
        $pc_list = $db->get_all($query);
        $i = 0;
        print("<table rules='all' align='center' border='2'  frame='box' bordercolor='#009933' bgcolor='Azure' style='font-size:small;width:888px;'>");
        print("<tr align='center' bgcolor='LightGreen'>");
        print("<th bgcolor='' colspan='3'>識別情報</th>");
        print("<th bgcolor='#66cc99' colspan='2'>ソフトウェア情報</th>");
        print("<th bgcolor='#A7B99F' colspan='8'>所在情報等</th>");
        print("</tr>");
        print("<tr align='center' bgcolor='PaleTurquoise'>");
        print("<th width='20' bgcolor=''>NO.</th>");
        print("<th width='40' bgcolor=''>ﾒｰｶｰ</th>");
        print("<th width='60' bgcolor=''>型番</th>");
        print("<th width='70' bgcolor=''>OS</th>");
        print("<th width='58' bgcolor=''>オフィス</th>");
        print("<th width='41' bgcolor=''>状態</th>");
        print("<th width='120' bgcolor=''>使用場所</th>");
        print("<th width='72' bgcolor=''>使用者</th>");
        print("<th width='84' bgcolor=''>購入日</th>");
        print("<th width='60' bgcolor=''>価格</th>");
        print("<th bgcolor='' width='96'>運用期間</th>");
        print("<th bgcolor=''>備考</th>");
        print("</tr>");
        foreach ($pc_list as $row) {
            $i = $i + 1;
            if ($i > 10) {
                $i = 1;
                print("<tr align='center' bgcolor='PaleTurquoise'>");
                print("<th bgcolor=''>NO.</th>");
                print("<th bgcolor=''>ﾒｰｶｰ</th>");
                print("<th bgcolor=''>型番</th>");
                print("<th bgcolor=''>OS</th>");
                print("<th bgcolor=''>オフィス</th>");
                print("<th bgcolor=''>状態</th>");
                print("<th bgcolor=''>使用場所</th>");
                print("<th bgcolor=''>使用者</th>");
                print("<th bgcolor=''>購入日</th>");
                print("<th bgcolor=''>価格</th>");
                print("<th bgcolor=''>運用期間</th>");
                print("<th bgcolor=''>備考</th>");
                print("</tr>");
            }

            print("<tr align='center'>");
            ?> 
        <td bgcolor=''onclick="alert('<?php echo("serial no.=" . $row[12]); ?>')"><?php print($row[0]); ?></td>
        <?php
        print("<td >" . $row[1] . "</td>");
        if ($row[2] == "") {
            print("<td bgcolor=''>" . $row[2] . "</td>");
        } else {
            print("<td bgcolor=''><a href='" . $row[2] . "'>" . $row[2] . "</a></td>");
        }
        print("<td bgcolor=''>" . $row[3] . "</td>");
        print("<td>" . $row[4] . "</td>");
        if ($row[5] == "待機") {
            print("<td bgcolor='silver'>" . $row[5] . "</td>");
        } else if ($row[5] == "故障") {
            print("<td bgcolor='lightpink'>" . $row[5] . "</td>");
        } else {
            print("<td bgcolor=''>" . $row[5] . "</td>");
        }
        print("<td bgcolor=''>" . $row[6] . "</td>");
        print("<td>" . $row[7] . "</td>");
        print("<td bgcolor=''>" . $row[8] . "</td>");
        print("<td bgcolor=''>" . $row[9] . "</td>");
        print("<td bgcolor=''>" . $row[10] . "</td>");
        if (strlen($row[11]) > 15) {
            $mendan_comment = substr($row[11], 0, 15) . "･･･";
        } else {
            $mendan_comment = $row[11];
        }
        ?> 
        <td bgcolor='' onclick="alert('<?php echo($row[11]); ?>')"><?php echo $mendan_comment; ?></td>
        <?php
        print("</tr>\n");
    }



    mysql_free_result($res);

    print("</table>");
    ?>


</BODY>
</HTML>

