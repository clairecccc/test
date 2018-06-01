<?php 

$xmlNodes=simplexml_load_file ("Programmes.xml");
$format="£%0.2f\n";

foreach($xmlNodes as $programme) {
echo "name: " . $programme->name, PHP_EOL;
echo "image path: " . $programme->imagepath, PHP_EOL;
echo "mood: " . $programme->mood, PHP_EOL;

}

	