<?php 

class javascript {
    function msg1(){
        return "console";
    }
}

class python {
    function msg2(){
        return "print";
    }
}
class programming {
    use javascript;
    use python;
}
$program = new programming();

echo $program->msg1();

?>