<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        .container {
            height: 1000px;
            width: 1000px;
            margin: auto;
        }

        .right {
            height: 70%;
            width: 20%;
            float: left;
        }

        .left {
            height: 70%;
            width: 80%;
            float: left;
        }

        .navigation {
            margin-left: 1px;
            height: 700px;
            width: 130px;
            background-color:;
            font-family: monospace;
            font-size: 2em;
            color:;
        }

        .navlist a:hover {
            color: hotpink;
        }


        .navlist {
            border: solid;
            border-color: black;
            border-radius: .3em .3em .3em .3em;
            height: 200px;
            width: 200px;
            display: block;
            margin-bottom: 3px;
            padding-left: 0px;
            padding-right: 14px;
        }

        .navlist ul li {
            float: left;
        }

        .navlist li {
            list-style-type: none;
        }

        .navlist li a {
            color: black;
            display: block;
            border-bottom: solid black;
            text-align: center;
            text-decoration: none;
            height: 27px;
            width: 190px;
            float: left;
            padding: 12px;
        }

        .navlist a:hover {
            background-color: black;
        }


        /*Login Button*/
        #logup {
            float: right;
            height: 50px;
            width: 170px;
        }

        body {
            font: normal medium/1.4 sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #eee;
        }

        tbody tr:nth-child(odd) {
            background: #ccc;
        }
    </style>

</head>
<body>

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
                </ul>
            </div>
        </nav>
    </div>
    <div class="right">
        <form action="index.php?page=search">
            <input type="text" name="key" placeholder="searching key">
            <input type="submit" placeholder="search">
        </form>
    </div>
    <div class="left">
        <table class="simple_zebra">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>series</th>
                <th>branch</th>
                <th>price</th>
                <th>status</th>
                <th>size_bullet_id</th>
                <th rowspan="3">function</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($guns as $key => $gun): ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $gun['name'] ?></td>
                    <td><?php echo $gun['series'] ?></td>
                    <td><?php echo $gun['branch'] ?></td>
                    <td><?php echo $gun['price'] ?></td>
                    <td><?php echo $gun['status'] ?></td>
                    <td><?php echo $gun['size_bullet_id'] ?></td>
                    <td><a href="./index.php?page=edit&id=<?php echo $gun['id'] ?>">update</a></td>
                    <td><a href="./index.php?page=delete&id=<?php echo $gun['id'] ?>">delete</a></td>
                    <td><a href="./index.php?page=view&id=<?php echo $gun['id'] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>