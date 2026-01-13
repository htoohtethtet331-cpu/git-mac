<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 

trait javascript {
    function msg1(){
        echo "console";
    }
}

trait python {
    function msg2(){
        echo "print";
    }
}
class programming {
    use javascript;
    use python;
}
$program = new programming();

 $program->msg1();
 $program->msg2();

?>
</body>
</html>