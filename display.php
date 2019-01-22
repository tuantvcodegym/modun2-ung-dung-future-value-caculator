<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 250px;
            border: 1px solid #ccc;
            margin: auto;
        }
        h2{
            text-align: center;
            color: darkslateblue;
        }
    </style>
</head>
<body>
<?php
$mony = $_POST["txt"];
$laisuot = $_POST["txt2"];
$year = $_POST["txt3"];
$giatrituonglai = $mony+($mony*($laisuot/100)*$year);
?>
<table>
    <h2>Future Value Calculator</h2>
    <tr>
        <td>Investment Amount:</td>
        <td><?php echo $mony ?></td>
    </tr>
    <tr>
        <td>Yearly Interest Rate:</td>
        <td><?php echo $laisuot ?></td>
    </tr>
    <tr>
        <td>Number of Years:</td>
        <td><?php echo $year ?></td>
    </tr>
    <tr>
        <td>Future Value:</td>
        <td><?php echo $giatrituonglai ?></td>
    </tr>
</table>


</body>
</html>