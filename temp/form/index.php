<?php
/*$number = array('34', 56, 12);
if(in_array(34,$number, false))
        echo "true";
    else 
        echo "false";
 die(); */  
  function temp(){
      $acc = 0;
      echo func_get_arg(1);
      die();
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
      //$argc
  }      
$count = temp(1,2,3,4);
echo $count;
die();

// Outputs: You deleted C:\*.*?

class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}
/*var_dump(array(<<<EOD
foobar!
EOD
));*/
/*$str = 6;
$$str =10;
echo $str; 
die();*/

function see($r){
    //global $r;
    $r=50;
}
$r = 20;
see($r);
echo $r;
die();
$foo = new foo();
$name = 'MyName';

echo "{$foo->bar[1]}<br>"; <<<FO
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
FO;
echo "<br>";
echo 'You deleted C:\\*.*?'."\$l\"d"."<br>";
// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';
echo "<hr>";
$$$$$$$str = "sds11";
$la = "sddsdsd";
echo "sdhshd \$str ww \$la";
require './src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$mustache = new Mustache_Engine(array(
   'loader' => new Mustache_Loader_FilesystemLoader('./templates'),
   'charset' => 'UTF-8',
));
 
$tpl = $mustache->loadTemplate('form');
$translate = array(
                'form_title' => 'טופס','input1_label' => 'שדה 1','input2_label' => 'רשימה',
                'input2_list' => array(array('option'=>'אופציה 1','code'=>'0','selected'=>false),
                                       array('option'=>'אופציה 2', 'code'=>'1','selected'=>true)),
                'planet' => 'World','planet' => 'World',
             ); 

echo $tpl->render($translate);
?>
