<?php
require '../admin/picbed/admin.php';
$path = '../img/picbed-images';
$res = getImages($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图床</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="../css/animate.css" rel="stylesheet" media="all" type="text/css">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/pics.css" rel="stylesheet">
    <link href="../css/imgstryle.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body id="top">
<div class="page">
    <header>
        <div class="pp-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container"><a href="#"><img src="../images/favicon.png"></a><a class="navbar-brand"
                                                                                           href="#">Photo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="../index.html">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="container pp-section">
                <div class="row">
                    <div class="col-md-9 col-sm-12 px-0">
                        <h1 class="h3">用于技术文章的图片提供</h1>
                    </div>
                </div>
            </div>
            <div class="container px-0 py-4">
                <div class="pp-category-filter">
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-primary pp-filter-button" href="#"
                               data-filter="all">All</a>
                            <a class="btn btn-outline-primary pp-filter-button" href="#"
                               data-filter="data-structure">DataStructure</a>
                            <a class="btn btn-outline-primary pp-filter-button" href="#"
                               data-filter="java">Java</a>
                            <a class="btn btn-outline-primary pp-filter-button"
                               href="#" data-filter="python">Python</a>
                            <a class="btn btn-outline-primary pp-filter-button" href="#"
                               data-filter="android">Android</a>
                            <a class="btn btn-outline-primary pp-filter-button" href="#"
                               data-filter="other">Other</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <div class="pp-gallery">
                    <div class="card-columns">
                        <?php
                        foreach ($res as $k=>$v){
                            foreach($res[$k] as $item){
                                $name=reImgSrcSuffix($item);
                        echo <<<EOF
                        <div class="card margin-8 shadow" data-groups="[&quot;$k&quot;]">
                            <figure class="pp-effect"><img class="img-fluid"
                                                           src="$path/$k/$item"
                                                           alt="$name"/>
                                <figcaption>
                                    <div class="h4">$name</div>
                                    <p>$k</p>
                                </figcaption>
                            </figure></div>
EOF;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/pics.js"></script>
<script src="../js/include.js"></script>
<include src="../common/footer.html"></include>
</body>
</html>
