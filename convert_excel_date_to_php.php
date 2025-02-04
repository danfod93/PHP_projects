$unixDate = ($excelDate - 25569) * 86400;
$phpDate = date('Y-m-d H:i:s', $unixDate);