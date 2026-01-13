
   
    <?php 
class drink{
    
function set_drink($name){
    $this->name = $name;
}

function get_name(){
     echo $this->name;
}
 const constant = "hello I am a ";

  function cons(){
    echo self::constant;
  }
}

class juice  extends drink{
    
function stawberry (){
    return "cegrittes";
}
}
$nomimono = new juice();

$nomimono->$name = "Htoo";
var_dump($nomimono->name = "juice");
echo $nomimono->stawberry();


?>