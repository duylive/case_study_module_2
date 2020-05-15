<style>
    body {
        background-color:burlywood;
    }
</style>
<h2 style="color:green;">List guns</h2>
<a href="./index.php?page=add">Create new guns</a>
<table class="table">
    <thead>
    <tr>
        <th style="color:red;">Numerical Order</th>
        <th style="color:orangered;">Name's gun</th>
        <th style="color:purple;">Number series</th>
        <th style="color:yellowgreen;">Brand</th>
        <th style="color:yellow">Data details</th>
        <th style="color:green">Origin</th>
        <th style="color:blue">Price</th>
        <th>Status</th>
        <th>Type</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($guns as $key => $gun): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $gun->name ?></td>
        <td><?php echo $gun->series ?></td>
        <td><?php echo $gun->brand ?></td>
        <td><a href="./index.php?page=view&id=<?php echo $gun->id; ?>" class="btn btn-sm">Data details</td>
        <td><?php echo $gun->origin ?></td>
        <td><?php echo $gun->price ?></td>
        <td><?php echo $gun->status ?></td>
        <td><?php echo $gun->type_id ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $gun->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $gun->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>

