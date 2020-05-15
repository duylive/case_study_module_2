<style>
    body {
        background-color: burlywood;
    }
</style>
<p>
    <a href="index.php" class="btn btn-default">Return</a>
</p>
<h1 style="color: red"><?php echo $gun->name; ?></h1>
<hr>
<p style="color: #5900a6">Series Numbers: <?php echo $gun->series; ?></p>
<hr>
<p style="color: green">Brand: <?php echo $gun->brand; ?></p>
<hr>
<p style="color:blueviolet">Details: <?php echo $gun->content; ?></p>
<hr>
<p style="color:orangered">Country Origin: <?php echo $gun->origin; ?></p>
<hr>
<p style="color:orangered">Price: <?php echo $gun->price; ?></p>
<hr>
<td>Status: <?php echo $gun->status ?></td>
<hr>
<p style="color:orangered">Type: <?php echo $gun->type_id; ?></p>



