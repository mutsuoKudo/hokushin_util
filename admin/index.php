<!-- bootstrapCSS4　※processor_tbl.php/processor_tblview.phpは3なのでCSS注意 -->

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>ホクシンシステム便利サイト　マスタメンテナンス</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/.3/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .bg-yellow{
                background-color:#F39E15;
            }

            .jumbotron-3rem{
                padding-top:3rem;
                padding-bottom:3rem;
            }
            .top-image{
                background-image: url("topImage.jpg")
            }
            .color-crimson{
            color:crimson;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="../css/album.css" rel="stylesheet">
    </head>
    <body>
    <header>
            <div class="collapse bg-yellow" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">マスタメンテナンスについて</h4>
                            <!-- <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p> -->
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white ">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="http://hokusys.jp/company" class="text-white">ホクシンシステム　HP</a></li>
                                <li><a href="#" class="text-white">Like on Facebook</a></li>
                                <li><a href="#" class="text-white">Email me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-yellow shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> -->
                        <strong>マスタメンテナンス</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main role="main">

            <section class="jumbotron-3rem text-center top-image">
                <div class="container">
                    <h1 class="jumbotron-heading text-muted">ホクシンシステム便利ツール<br>マスタメンテナンス</h1>
                    <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p> -->
                    <p>
                        <a href="../index.php" class="btn page-link d-inline-block text-muted">Hokushin Util</a>
                        <a href="#" class="btn page-link d-inline-block text-muted">Break Time</a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row mx-auto" style="width: 50rem;">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>部門名の追加/修正/削除</title><rect width="100%" height="100%" fill="#435d7d"/>
                                <text x="50%" y="50%" fill="#eceeef " dy=".3em">
                                <tspan x="50%" y="40%">部門名テーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>

                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="bumon/bumon_mei_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="bumon/bumon_mei.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>状態名の追加/修正/削除</title><rect width="100%" height="100%" fill="olivedrab"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">状態テーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="jyotai/jyotai_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="jyotai/jyotai_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>メーカー名の追加/修正/削除</title><rect width="100%" height="100%" fill="#435d7d"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">メーカーテーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="maker/maker_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="maker/maker_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>モデル名/詳細スペック参照先の追加/修正/削除</title><rect width="100%" height="100%" fill="olivedrab"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">モデルテーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="model/model_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="model/model_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>使用場所名称の追加/変更/削除</title><rect width="100%" height="100%" fill="#435d7d"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">使用場所テーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="room/room_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="room/room_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- プロセッサテーブル -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>ＣＰＵ名の追加/変更/削除r</title><rect width="100%" height="100%" fill="olivedrab"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">プロセッサテーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="processor/processor_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="processor/processor_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>ＯＳ名の追加/変更/削除</title><rect width="100%" height="100%" fill="#435d7d"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">ＯＳテーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="os/os_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="os/os_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Microsoft Officeの種類の追加/変更/削除</title><rect width="100%" height="100%" fill="olivedrab"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">オフィステーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <!-- +takahashi+ -->
                                            <form action="office/office_tbl_view.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            <form action="office/office_tbl.php" method="get">  
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </form>
                                            <!-- +takahashi -->
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" 
                                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>社員情報の追加/変更/削除</title><rect width="100%" height="100%" fill="#435d7d"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <tspan x="50%" y="40%">社員テーブル</tspan>
                                <tspan x="50%" y="60%">メンテナンス</tspan>
                                </text></svg>
                                <div class="card-body">
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group mx-auto">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <!-- <small class="text-muted">9 mins</small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-white bg-yellow">
            <div class="container">
                <p class="float-right">
                    <a href="#" class="text-white">Back to top</a>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
