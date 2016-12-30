<?php
if (isset($_GET['file'])) {
    $fileName = $_GET['file'] . '.mp3';
    $file = 'beats/' . $fileName;
    if (file_exists($file) && is_readable($file))  {
        header('Content-type: application/mp3');
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        readfile($file);
    }
}