
// Sort multidimensional array
usort($data, function($a, $b) {
    return $a['supplier'] - $b['supplier'];
});


// Sort multidimensional array by 2 values 
$columns_1 = array_column($data, 'supplier');
$columns_2 = array_column($data, 'id');
array_multisort($columns_1, SORT_ASC, $columns_2, SORT_ASC, $data);