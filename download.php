<?php

function sanitize($value) {
    $value = $value ?? '';
    $value = preg_replace('/[^a-zA-Z0-9\/\.\(\)\s\-\_;]/', '', $value);
    $value = substr($value, 0, 255);
    return $value;
}

if (isset($_GET['file'])) {
    $fileName = basename($_GET['file']);
    $fileName = sanitize($fileName);
    $file = 'download/' . $fileName;
    if (!empty($fileName) && file_exists($file) && is_file($file))  {

        // log
        $browser = sanitize($_SERVER['HTTP_USER_AGENT']);
        $language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $languageParts = explode(',', $language);
        $language = reset($languageParts);
        $language = sanitize($language);
        $filePath = 'download/download.log';
        $existingContent = file_exists($filePath) ? file_get_contents($filePath) : '';

        // don't log china's bot access
        if ($language !== 'zh-CN') {
            file_put_contents($filePath, date('Y-m-d H:i:s') . ' | ' . $fileName . ' | ' .  $language . ' | ' . $browser . PHP_EOL . $existingContent) ;
        }

        // return wav with header to ensure download instead of media playback
        $fileParts = explode('.', $fileName);
        if (strtolower(end($fileParts)) === 'wav') {
            header('Content-type: application/wav');
            header("Content-Disposition: attachment; filename=\"$fileName\"");
            header('Content-Length: ' . filesize($file));
            header('Pragma: no-cache');
            readfile($file);
        } else {
            header("Location: https://www.toxz.de/download/$fileName");
        }

    } else {
        http_response_code(404);
        echo "File not found.";
    }
}