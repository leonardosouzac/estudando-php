<?php
// o php tem controle total sobre html, js.. pois ele roda antes de todas essas coisas funcionarem
#$js = "<script>alert('oi')</script>";
$elsejs = "<script>alert('morreu mas passa bem')</script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $js; ?></h1>
</body>
</html>

<?php 
// misturando html, php, js
$phpativo = "não"; ?>
<?php if ($phpativo == "sim"){ ?>
    <h1> Está ativo </h1>
<?php }else{ ?>
    <h2> <?php echo $elsejs; ?> </h2>
<?php } ?>