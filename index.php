<?php

function generate($num1, $num2){
    if(isset($_POST['generate'])){
        $num = random_int($num1, $num2);
        echo $num;
    }
}

if(isset($_POST['num1']) && $_POST['num2']){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
} else {
    $num1 = null;
    $num2 = null;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
    <link rel='stylesheet' href='style.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class='text-center'>
    <h1><?php generate($num1, $num2);?></h1>
    <h3>Press to Generate Random Number</h3>
    <form method="post">
        <label for='num1'><strong>Beginning Number: </strong></label>
        <input type="text" name="num1" value='<?php echo $num1;?>';
        <label for='num2'><strong>Ending Number: </strong></label>
        <input type="text" name="num2" value='<?php echo $num2;?>'><br>
    <button type="submit" name='generate' class='btn btn-primary'>Generate</button>
    </form>
</div>
    
</body>
</html>