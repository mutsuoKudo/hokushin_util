

<?php
include_once('../../lib/db_config.php');
try {
    $dbh = new PDO(DB_HOST, DB_USER,DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $page = 1;
    // var_dump($_GET['page']);
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $sql = 'SELECT COUNT(*) from shain';
    $stmt = $dbh->query($sql);

    $st = $stmt->fetchColumn();
    // var_dump($st);
    $page = max($page, 1);
    $maxPage = ceil($st / 5);
    $page = min($page, $maxPage);
    $start = ($page - 1) * 5;
} catch (PDOException $e) {
    echo("ERROR!" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ja" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>社員テーブル</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="../admin_tbl.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular-resource.min.js"></script>
        <script src="shain_controller.js"></script>

    </head>
    
    
    <body ng-controller="MainCtrl">
        <div class="container height750 width1200">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b> 社員</b> テーブル</h2>
                        </div>
                        <!--追加・削除ボタン-->
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i> <span>追加</span></a>
                            <!-- <a href="#addEmployeeModal" class="btn btn-success material-icons" data-toggle="modal">
                            <span>&#xE147;追加</span></a> -->

                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                            <!--<div class="btn btn-danger" id="kudo">-->
                                <i class="material-icons">&#xE15C;</i> <span>選択削除</span>
                            <!--</div>-->
                            </a>
                            <!-- <form id="form1" action="processor_tbl.php" method="POST" >
                            <input type="submit" value="&#xE15C;選択削除" name="selectDelete" class="btn btn-danger material-icons">
                            </form> -->
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!--チェックボックスALL-->
					　　<th>
                                <form class="custom-checkbox" action="shain.php" method="POST">
                                    <input type="checkbox" id="selectAll" name="selectAll" value="0" form="form1">
                                    <label for="selectAll"></label>
                                </form>
                            </th>
                            <th class="text-center" style="width:120px">id</th>
                            <th class="text-center" style="width:150px">名前</th>
                            <th class="text-center" style="width:200px">ｶﾅ</th>
                            <th class="text-center" style="width:100px">ﾛｰﾏ字</th>
                            <th class="text-center" style="width:150px">ﾒｰﾙ</th>
                            <th class="text-center" style="width:45px">性別</th>
                            <th class="text-center" style="width:45px">生年<br>月日</th>
                            <th class="text-center" style="width:45px">入社日</th>
                            <th class="text-center" style="width:45px">転籍日</th>
                            <th class="text-center" style="width:45px">退職日</th>
                            <th class="text-center" style="width:80px">部門</th>
                            <th class="text-center" style="width:75px">写真</th>
                            <th class="text-center" style="width:100px">備考</th>
                            <th class="text-center" style="width:180px">操作</th>
                        </tr>
                    </thead>

                    <tbody>						
                        <tr ng-controller="DetailCtrl" ng-repeat="shain in shains| limitTo: 5: <?php echo($start); ?>">
                            <!--チェックボックス個別-->
                            <td>
                                <form class="custom-checkbox" action="shain.php" method="POST">
                                    <input type="checkbox" class="selectCheckbox" name="options[{{shain.shain_cd}}]" value="{{shain.shain_cd}}" form="form1">
                                    <label for="checkbox{{shain.shain_cd}}"></label>
                                </form>
                            </td> 

                            <td class="text-center shain_cd">{{shain.shain_cd}}</td>
                            <td class="text-center">{{shain.shain_mei}}</td>
                            <td class="text-center">{{shain.shain_mei_kana}}</td>
                            <td class="text-center" style="word-break:break-all">{{shain.shaion_mei_romaji}}</td>
                            <td class="text-center" style="word-break:break-all">{{shain.shain_mail}}</td>
                            <td class="text-center">{{shain.gender}}</td>
                            <td class="text-center">{{shain.shain_birthday}}</td>
                            <td class="text-center">{{shain.nyushabi}}</td>
                            <td class="text-center">{{shain.tensekibi}}</td>
                            <td class="text-center">{{shain.taishokubi}}</td>
                            <td class="text-center">{{shain.department}}</td>
                            <td class="text-center">{{shain.pic}}</td>
                            <td class="text-center" style="word-break:break-all">{{shain.remarks}}</td>
                            <td class="text-center">
                                <!-- <button ng-click="update()" class="edit"> -->
                                <button a href="#editEmployeeModal" data-toggle="modal" class="edit">
                                    <i class="material-icons edit" data-toggle="tooltip" title="編集">&#xE254;</i></button>
                                <button ng-click="delete()" class="delete">
                                    <i class="material-icons" data-toggle="tooltip" title="削除">&#xE872;</i></button>
                               
                            </td>
                        </tr>
                    </tbody>		
                </table>

                <!-- ページャー -->
                <div class="clearfix">
                    <ul class="pagination">
                        <?php
                        if ($page > 1) {
                            ?>
                            <li class="page-item"><a href="shain.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
                            <?php
                        } else {
                            ?>
                            <!-- 前のページ -->
                            <?php
                        }
                        ?>

                        <?php
                        if ($page < $maxPage) {
                            ?>　　
                            <li class="page-item"><a href="shain.php?page=<?php print($page + 1); ?>">次のページへ</a></li>
                            <?php
                        } else {
                            ?>
                            <!-- 次のページ -->
                            <?php
                        }
                        ?>
                        <li class="page-item"><a href=""><?php print($page . '/' . $maxPage); ?></a></li>
                    </ul>
                </div>		
            </div>
        </div>

        <footer class="text-white bg-yellow footer width-max">
        <div class="container">
            <p class="float-right" class="text-white">
                <a href="#" class="text-white">Back to top</a>
                <br>
                <a href="../index.php" class="text-white">Back to home</a>
            </p>
        </div>
    </footer>



    <!-- Edit Modal HTML ※編集ボタンを押すとでてくる画面 -->
    <div id="editEmployeeModal" class="modal fade" ng-controller="DetailCtrl">
        <div class="container  bg-white">
            <div class="modal-header py-5 text-center">
                <h2 class="modal-title">データ編集</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form class="needs-validation" novalidate>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6 mb-2">
                                <label>ID</label>
                                <input id="id1" ng-model="shain.shain_cd" class="form-control input-lg" required >

                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-6 mb-2">
                                <label>名前</label>
                                <input ng-model="shain.shain_mei" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label>フリガナ</label>
                                <input ng-model="sh.shain_mei_kana" class="form-control input-lg" required>
                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-8 mb-2">
                                <label>ローマ字</label>
                                <input ng-model="shain.shaion_mei_romaji" class="form-control input-lg" required>
                            </div>                         
                            <div class="form-group col-md-4 mb-2">
                                <label>性別</label>
                                <input ng-model="shain.gender" class="form-control input-lg" required>
                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-8 mb-2">
                                <label>メール</label>
                                <textarea ng-model="shain.shain_mail" cols="30" rows="1" class="form-control input-lg" required></textarea>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>誕生日</label>
                                <input ng-model="shain.shain_birthday" class="form-control input-lg" required>
                            </div>
                            
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-4 mb-2">
                                <label>入社日</label>
                                <input ng-model="shain.nyushabi" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>転籍日</label>
                                <input ng-model="shain.tensekibi" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>退職日</label>
                                <input ng-model="shain.taishokubi" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="row row-top">
                            <div class="form-group col-md-4 mb-2">
                                <label>部門</label> 
                                <select ng-model="shain.department" class="form-control input-lg">
                                    <?php
                                    include_once('../sql/bumon_mei_sql.php');
                                    foreach ($bumon_mei as $row ) {
                                    print("<option value='$row[id]'>" . $row['id'] . ":"  . $row['name'] . "</option>");
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-8 mb-2">
                                <label>Pic</label>
                                <input ng-model="shain.pic" class="form-control input-lg" required>
                            </div>
                        </div>
                            
                        <div class="row row-top">
                            <div class="form-group col-md-12 mb-2">
                                <label>備考</label>
                                <textarea ng-model="shain.remarks" cols="30" rows="2" class="form-control input-lg" required></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button onclick="location.href = 'shain.php'" class="btn btn-default">キャンセル</button>
                            <button ng-click="update()" class="btn btn-success edit">更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Add Modal HTML ※追加ボタンを押すとでてくる画面 -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="container  bg-white">
            <div class="modal-header py-5 text-center">
                <h2 class="modal-title">データ追加</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form class="needs-validation" novalidate>
                    <div class="modal-body">
                        <div class="row">
                        <div class="form-group col-md-6 mb-2">
                                <label>ID</label>
                                <input ng-model="new_shain.newshain_cd" class="form-control input-lg" required >
                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-6 mb-2">
                                <label>名前</label>
                                <input ng-model="new_shain.shain_mei" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label>フリガナ</label>
                                <input ng-model="new_shain.shain_mei_kana" class="form-control input-lg" required>
                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-8 mb-2">
                                <label>ローマ字</label>
                                <input ng-model="new_shain.shaion_mei_romaji" class="form-control input-lg" required>
                            </div>                         
                            <div class="form-group col-md-4 mb-2">
                                <label>性別</label>
                                <input ng-model="new_shain.gender" class="form-control input-lg" required>
                            </div>
                        </div>
                        
                        <div class="row row-top">
                            <div class="form-group col-md-8 mb-2">
                                <label>メール</label>
                                <textarea ng-model="new_shain.shain_mail" cols="30" rows="1" class="form-control input-lg" required></textarea>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>誕生日</label>
                                 <input ng-model="new_shain.shain_birthday" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="row row-top">
                            <div class="form-group col-md-4 mb-2">
                                <label>入社日</label>
                                <input ng-model="new_shain.nyushabi" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>転籍日</label>
                                <input ng-model="new_shain.tensekibi" class="form-control input-lg" required>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label>退職日</label>
                                <input ng-model="new_shain.taishokubi" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="row row-top">
                            <div class="form-group col-md-4 mb-2">
                                <label>部門</label> 
                                <select ng-model="new_shain.department" class="form-control input-lg">
                                    <?php
                                    include_once('../sql/bumon_mei_sql.php');
                                    foreach ($bumon_mei as $row ) {
                                    print("<option value='$row[id]'>" . $row['id'] . ":"  . $row['name'] . "</option>");
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-8 mb-2">
                                <label>Pic</label>
                                <input ng-model="new_shain.pic" class="form-control input-lg" required>
                            </div>
                        </div>
                            
                        <div class="row row-top">
                            <div class="form-group col-md-12 mb-2">
                                <label>備考</label>
                                <textarea ng-model="new_shain.remarks" cols="30" rows="2" class="form-control input-lg" required></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button onclick="location.href = 'shain.php'" class="btn btn-default">キャンセル</button>
                            <!-- <button ng-click="add()" class="btn btn-success">追加</button> -->
                            <button class="btn btn-success">追加</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">データの削除</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>レコードを削除してもよろしいですか？</p>
                            <p class="text-warning"><small>この操作を元に戻すことはできません。</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" onclick="location.href = 'shain.php'" class="btn btn-default" value="キャンセル">
                            <!--                            <form id="form1" action="processor_tbl.php" method="POST">
                                                            <input type="submit" value="削除" name="selectDelete" class="btn btn-danger">
                                                        </form>-->
<!--                            <button onclick="location.href = 'processor_tbl.php?selectDelete=ok'" class="btn btn-danger">削除</button> -->
                            <button id='kanan' class="btn btn-danger">削除</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>	
        <script type="text/javascript">
            $(document).ready(function(){
            // 個別の更新・削除のツールチップ
            $('[data-toggle="tooltip"]').tooltip();
            // チェックボックス（すべて選択）の判断
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){

            if (this.checked){
            // alert("チェックきいてる");
            $(".selectCheckbox").prop("checked", true);
            } else{
            // alert("チェックなし");
            $(".selectCheckbox").prop("checked", false);
            }
            });
            checkbox.click(function(){
            if (!this.checked){
            $("#selectAll").prop("checked", false);
            }
            });
//モーダル画面上の削除確認ボタン押下事の動き
            $('#kanan').click(function () {
                //変数idに、最初に左かっこを設定
            var shain_cd = "('";
            var count = 0;
            //明細行（ヘダー行のチェックボックスは対象外）のチェックボックスを全部見て、チェックされていたら、前にカンマをつけてチェックボックスに設定された値をidに文字列連結する、ただし、最初だけは前のカンマをつけない
            $("input[type='checkbox']").filter(":checked").not("[name=selectAll]").each(function() {
            //チェックされたチェックボックスの値を取得
            var val = $(this).val();
            //in句に使えるよう整形
            if (count == 0){
            shain_cd = shain_cd + val;
            } else{
            shain_cd = shain_cd  + "'" + "," + "'" + val;
            }
            count = count + 1;
            })
            //最後に変数idに右かっこを文字列連結する
            shain_cd = shain_cd + "')";
            console.log(shain_cd);
//            ajaxでテーブル削除用phpを呼び出し、引数にidをpostで渡す
            $.ajax({
            type : 'post',
                    url : 'shain_delete.php',
                    data : {
                    'shain_cd' : shain_cd
                    },
            })
                    // ・ステータスコードは正常で、dataTypeで定義したようにパース出来たとき→今回は特に何もしないテーブルの削除対象レコードが削除されて終わり
                    .done(function (response) {
//                    alert('成功');
                    })
                    // ・サーバからステータスコード400以上が返ってきたとき
                    // ・ステータスコードは正常だが、dataTypeで定義したようにパース出来なかったとき
                    // ・通信に失敗したとき→失敗理由をalert表示
                    .fail(function () {
                    // jqXHR, textStatus, errorThrown と書くのは長いので、argumentsでまとめて渡す
                    // (PHPのfunc_get_args関数の返り値のようなもの)
//                    $('#result').val('失敗');
//                    $('#detail').val(errorHandler(arguments));
                    alert(errorHandler(arguments));
                    });
                    //モーダルを閉じて
            $('#deleteEmployeeModal').modal('hide');
            //一覧を再表示
            location.reload();
            //削除完了メッセージ表示
            alert('チェックしたレコードを削除しました。');
            });
            });
            }

            $(function(){
    $('button.edit').on("click",function(){
        alert("クリックしたよ");
        $(#id1).val($this).closest('tr').chiidren("td.shain_cd").text());
        // $(#モーダルの項目id2).val($this).closest('tr').chiidren("td.クラス名2).text());
            //   項目数の分だけ書く
    })
})
            
        </script>

    </body>
</html>                                		                            