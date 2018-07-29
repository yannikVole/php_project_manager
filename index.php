<?php
require_once 'app/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Start your project here-->
<div class="container">
    <header>
        <h1 class="mb-3 mt-3">Project Manager v<?php echo APP_VERSION;?></h1>
    </header>
    <hr>
    <div class="row">
            <button class="btn btn-outline-blue col-sm-2 m-auto" onclick="toggleHidden(event)" data-target="new-project-name"><i class="fa fa-plus"></i></button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <input type="text" id="new-project-name" class="form-control mt-3 hidden">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <h2>Projects...</h2>
            <ul class="list-group">
                <?php getProjectDirs();?>
            </ul>
        </div>
    </div>
</div>
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom JavaScript -->
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
