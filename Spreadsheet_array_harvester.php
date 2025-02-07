// Puts the next sheets data after the previous in a separate array
$reader = new SpreadsheetReader($targetDir);

// Get the list of sheets
 $sheets = $reader->Sheets();

$merge = [];

// Loop through the first two sheets
for ($sheetIndex = 0; $sheetIndex <= 1; $sheetIndex++) {
    if (isset($sheets[$sheetIndex])) { // Check if the sheet exists
        $reader->ChangeSheet($sheetIndex); // Change to the current sheet
        foreach ($reader as $row) {
            $merge[] = $row; // Add each row to the merged array
        }
    }
}

// Print the merged data
print_r($merge);