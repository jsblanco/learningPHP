<?php
try {
    if (isset($_GET['message'])){
        echo '<h1>'.$_GET['message'].'</h1>';
    } else {
    throw new Exception('Param "message" is missing');
    }
} catch (Exception $e) {
    echo "Hubo un error: <b>".$e->getMessage().'</b><br>';
} finally {
    echo 'All processes completed';
}
