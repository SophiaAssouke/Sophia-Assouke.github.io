<?php
// Path to the document you want to download
$file = 'PortfolioWebsite\CV_ASSOUKE-Sophia.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set headers to indicate a file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    // Clear the output buffer
    flush();
    
    // Read the file and send it to the output buffer
    readfile($file);
    
    // Exit to ensure no further output is sent
    exit;
} else {
    echo "File does not exist.";
}
?>
