<h1>User list</h1>

<?php while($singleUser = $allUsers->fetch_object()): ?>
    <div style="padding: 10px 20px; margin: 10px; display: inline-block; border: 1px solid darkslategrey">
        <b><?=$singleUser->name.' '.$singleUser->surname ?></b> - <?=$singleUser-> date ?> <br> <?=$singleUser-> email ?><br>
    </div>
<?php endwhile ?>