<pre>
<?php
require "Video.php";
require "Gafanhoto.php";
// $v = array();
$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PPH");
$v[2] = new Video("Aula 15 de HTML5");

print_r($v);

$user[0] = new Gafanhoto("Will", 31, "M", "willferr");
$user[1] = new Gafanhoto("carlos", 31, "M", "carlferr");
print_r($user);
?>
</pre>