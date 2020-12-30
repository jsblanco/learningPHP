<h1>Note list</h1>

<?php while($singleNote = $notes->fetch_object()): ?>
<div style="padding: 10px 20px; margin: 10px; display: inline-block; border: 1px solid darkslategrey">
    <b><?=$singleNote->title ?></b> - <?=$singleNote-> date ?> <br> <?=$singleNote-> description ?><br>
</div>
<?php endwhile ?>
