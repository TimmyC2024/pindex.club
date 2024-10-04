<?php 

$connection = require_once './assets/php/Connection.php';
$database = 'p10';
// mysqli_select_db( $connection, $database);
$barcodes = $connection->getBarcodes();
$barcode = $connection->getBarcode(152419);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index.css">
 
    <script> window.name = "p10" </script>
    <?php include_once './assets/php/host.php' ?>
   
    <!-- https://favicon.io/favicon-generator/ -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
 
    <title>p10</title>

</head>
<body>
    
<!--  -->
    <?php include_once './assets/php/header.php';?>

    <h1>P-index = 10+</h1>

    <table>
        <tr>
            <th>Barcode</th>
            <th>Name</th>
            <th>P-index</th>
            <th>Number for next</th>
            <th>Last checked</th>
            <th>Next check</th>
            <th>Notes</th>
        </tr>
        <?php foreach ($barcodes as $barcode): ?>
            <tr>
                <td><?php echo $barcode['pindex']?></td>
                <td><?php echo $barcode['barcode']?></td>
                <td><?php echo $barcode['name']?></td>
                <td><?php echo $barcode['number for next']?></td>
                <td><?php echo $barcode['last checked']?></td>
                <td><?php echo $barcode['next check']?></td>
                <td><?php echo $barcode['notes']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>