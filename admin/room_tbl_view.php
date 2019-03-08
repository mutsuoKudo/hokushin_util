<!-- bootstrapCSS3　※index.phpは4なのでCSS注意 -->

<!-- <?php
 include_once('../lib/db_main.php');

     $dbh = new PDO(DB_HOST, DB_USER,DB_PASS);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
     $page = 1;
     // var_dump($_GET['page']);
     if (isset($_GET['page'])) {
         $page = $_GET['page'];
     }
 
     $sql = 'SELECT COUNT(*) from room_tbl';
     $stmt = $dbh->query($sql);
     
     $st = $stmt->fetchColumn();
//  var_dump($st);
     $page = max($page, 1);
     $maxPage = ceil($st / 8);
     var_dump($maxPage);
     $page = min($page, $maxPage);
     $start = ($page - 1) * 8;

 ?> -->


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>RoomTable View</title>

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }
        .row{
		    margin-top:40px;
		    padding: 0 10px;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}

        /* takahashi++ */
        .bg-green{
            background-color:olivedrab !important;
           
        }
        .border-color-white{
            border-color:white !important; 
        }

        .font-varela{
            font-family: "Varela Round" !important;
            font-weight: 700 !important;
        }
        .font24{
            margin-top:0;
            margin-bottom:0;
            font-size: 24px !important;
            color:inherit;    
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }	
        .pagination li.active a, .pagination li.active a.page-link {
            background: #03A9F4;
        }
        .pagination li.active a:hover {        
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .bg-yellow{
                background-color:#F39E15;
        }
        .color-crimson{
            color:crimson;
        }
        .text-white{
                color:white !important;
        }
        .float-right{
                float:right;
        }
        .footer{
            padding-top:3rem;
            padding-bottom:5rem;
        }
    </style>

    <script>
    /**
*   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
*   but will likely encounter performance issues on larger tables.
*
*		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
*		$(input-element).filterTable()
*		
*	The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
*/
(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
    </script>
</head>
<body>

<?php
        include_once('../lib/db_main.php');

        //全案件取得
        $db = new db;
        $query = "SELECT ";
        $query = $query . "rt.id AS id ";
        $query = $query . ",rt.name AS name ";
        $query = $query . ",rt.short_name AS short_name ";
        $query = $query . " FROM room_tbl rt";
        $query = $query . " ORDER BY rt.id";
        $query = $query . " LIMIT " . $start . ",8" ;
        // var_dump($query);
        $room_tbl = $db->get_all($query);
        //var_dump($processor_tbl[0]['id']);
        
  ?>  
    <div class="container">
        <!-- <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1> -->
    	<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel border-color-white">
					<div class="panel-heading bg-green text-white">
						<h3 class="font-24"><span class="font-varela">Room</span>Table</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Search Filter" data-container="body">
								<i class="glyphicon glyphicon-filter" class="text-white"></i>
							</span>
						</div>
					</div>
				    <div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search Filter" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th class="col-md-2 text-center">id</th>
								<th class="col-md-2">略称</th>
								<th class="col-md-4">正式名称</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        foreach ($room_tbl as $row ) {
                            // var_dump($row);
                            print("<tr>");
                            print("<td class='text-center'>" . $row['id'] . "</td>");
                            print("<td>" . $row['name'] . "</td>");
                            print("<td>" . $row['short_name'] . "</td>");
                            print("</tr>");
                        }
                        ?>
						</tbody>
					</table>
                     <!-- ページャー -->
                    <div class="clearfix">
                        <ul class="pagination">
                        <?php
                        if ($page > 1) {
                            ?>
                            <li class="page-item"><a href="room_tbl_view.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
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
                            <li class="page-item"><a href="room_tbl_view.php?page=<?php print($page + 1); ?>">次のページへ</a></li>
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
		</div>
	</div>
    <footer class="text-white bg-yellow footer">
            <div class="container">
                <p class="float-right">
                    <a href="#" class="text-white">Back to top</a>
                    <br>
                    <a href="index.php" class="text-white">Back to home</a>
                </p>
                <!-- <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="https://getbootstrap.com/" class="color-crimson">Visit the homepage</a>
                 or read our <a href="/docs/4.3/getting-started/introduction/" class="color-crimson">getting started guide</a>.</p> -->
            </div>
</body>
</html>