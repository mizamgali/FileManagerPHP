<?php
    $file = '../'.$_GET['file'];

    if(is_dir($file))
        rmdir($file);
    else
        unlink($file);

    header("Location: ../index.php?path=".substr($_GET['file'], 0, strrpos($_GET['file'], '/')));
?>