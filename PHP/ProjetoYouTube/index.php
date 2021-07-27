<pre>
<?php
require_once "Video.php";
require_once "Gafanhoto.php";
require_once "Visualizacao.php";
// $v = array();
$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PPH");
$v[2] = new Video("Aula 15 de HTML5");
print_r($v);

$user[0] = new Gafanhoto("Will", 31, "M", "willferr");
$user[1] = new Gafanhoto("carlos", 31, "M", "carlferr");
print_r($user);

$vis[0] = new Visualizacao($user[0], $v[1]);
$vis[1] = new Visualizacao($user[1], $v[1]);
$vis[2] = new Visualizacao($user[1], $v[2]);
$vis[0]->avaliar();
$vis[1]->avaliarPor(85);
$vis[0]->avaliarPor(85);
$vis[2]->avaliar();
print_r($vis);

?>
</pre>