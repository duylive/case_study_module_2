<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background-color: #525252;
    }

    .centered-form {
        margin-top: 60px;
    }

    .centered-form .panel {
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    }
</style>
<div class="container">
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">home</a></li>
                    <li><a href="index.php?page=add">add new</a></li>
                    <li><a href="#">about us</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="right">

        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">add new kind of weapon<small>It's free!</small></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="first_name" class="form-control input-sm"
                                                   placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="series" id="last_name"
                                                   class="form-control input-sm" placeholder=" series">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="branch" id="email" class="form-control input-sm"
                                           placeholder="branch" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="content" id="email" class="form-control input-sm"
                                           placeholder="content " required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="origin" id="email" class="form-control input-sm"
                                           placeholder="origin" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="price" id="email" class="form-control input-sm"
                                           placeholder="price " required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="status" id="email" class="form-control input-sm"
                                           placeholder="status " required>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="type_id" id="password"
                                                   class="form-control input-sm" placeholder="type_id" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="size_bullet_id" id="password_confirmation"
                                                   class="form-control input-sm" placeholder="size_bullet_id " required>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" value="add new " class="btn btn-info btn-block">
                                <a href="index.php"><button type="button" class="btn btn-dark">back</button></a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>