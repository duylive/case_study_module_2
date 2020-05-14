<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            padding: 8px;
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="index.php">home</a></li>
    <li><a href="index_2.php?page=add">add new assassin</a></li>
    <li><a href="index_2.php?page=search">search</a></li>
    <li><a href="#about">About</a></li>
</ul>
<h2>HTML Table</h2>

<table>
    <tr>
        <th>num</th>
        <th>name</th>
        <th>image</th>
        <th>text</th>
        <th>price</th>
    </tr>
    <?php foreach ($result as $key => $person):?>
    <tr>
        <td><?php echo $key?></td>
        <td><?php echo $person['name']?></td>
        <td><img src="<?php echo $person['image']?>" alt=""></td>
        <td><?php echo $person['text']?></td>
        <td><?php echo $person['price']?></td>
        <td>
            <a href="index_2.php?page=delete&id=<?php echo $person['id']?>">delete</a>
            <a href="index_2.php?page=update&id=<?php echo $person['id']?>">update</a>

        </td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>
