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
                <th>image</th>
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
                    <td><a href="index.php?page=edit?id=<?php echo $gun['id'] ?>">update</a></td>
                    <td><a href="index.php?page=delete?id=<?php echo $gun['id'] ?>">delete</a></td>
                    <td><a href="index.php?page=view?id=<?php echo $gun['id'] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="footer"></div>
</div>