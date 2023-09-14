<?php
require_once('php/init/laptop.php');
// READ FILE
$myfile = fopen("database.txt", "a+") or die("Unable to open file!");

// Proper Viewing of Array
echo "<pre>";

// LOOP throught the file
$laptopCount = 0;
$laptop = [];
while(!feof($myfile)) {
   
    // GETS EVERY LINE
    $line =  fgets($myfile);
    // GET THE SEPARATOR of "," OUTPUT as ARRAY
    $data =  str_getcsv($line, ",");
    
    // OUTPUT THE ARRAY
    // print_r($data);

    // echo $data[0] . "<br>";
    
        $laptop[$laptopCount] = new Laptop($data['0'], $data['1'], $data['2'], $data['3'], $data['4']);
        $laptopCount = $laptopCount+1;

    
    // $acerPred = new Laptop('Acer Predator', 'Black', 'ACER', '59,999.00');
}

fclose($myfile);

    print_r($laptop);
    die();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="" alt="" srcset="">
  <?php 
    foreach($laptop as $item)
    {
    echo '<img src="' .  $laptop[0]->imgLink  . '" alt="">';
    }
  ?>
</body>
</html>