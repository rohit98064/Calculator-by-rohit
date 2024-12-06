<?php
// Assuming the video file is in the same directory as this script
$filename = 'Pushpa 2.mkv';

// Check if the file exists
if (file_exists($filename)) {
    // Set the appropriate headers for download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));

    // Read the file and output it to the browser
    readfile($filename);
} else {
    echo "File not found.";
}
