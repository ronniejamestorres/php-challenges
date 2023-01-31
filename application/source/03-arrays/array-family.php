<?php

$family = array ('Edgardo','Nena','Desiree','Emilio');
echo"<pre>";
print_r($family);
echo"</pre>";
?>

<?php

$recipe = array ('boneless chicken','soy sauce','white vinegar','onion and garlic','sugar','green onion','bay leaves','peppercorns');
echo"<pre>";
print_r($recipe);
echo"</pre>";
?>

<?php

$movies = array (
    '1982'=>'Blade Runner',
    '2001'=>'The Matrix',
    '2003'=>'The Lord of The Rings',
    array
    ('x', 'y', 'z')
);
echo"<pre>";
print_r($movies);
echo"</pre>";
?>

<?php
$him = array(
    'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
);

echo '<pre>';
print_r($him);
echo '</pre>';
?>

Create an array  $web_development containing a 'frontend' and a 'backend' key. Assign an empty array to each key.

<?php

$hobbies = array("reading", "hiking", "cooking","fighting","movies");
$mother = array("name" => "Jane Smith", "age" => 55, "hobbies" => array("gardening", "knitting", "traveling"));
$taxidermy = array("wolf","cat","bear","eagle","fox");

$me = array("name" => "Ronnie James","lastname" => "Torres", "age" => "N/A", "hobbies" => $hobbies, "mother" => $mother, "taxidermy" => $taxidermy);
$mother_hobbies_count = sizeof($me['mother']);
$me_hobbies_count = sizeof($me['hobbies']);

$soulmate = array("name" => "Jane","lastname" => "Doe", "age" => "N/A", "hobbies" => array("reading","movies","traveling","hiking"), "mother" => array("name" => "Mary Doe", "age" => 50, "hobbies" => array("cooking","sewing")), "taxidermy" => array("wolf","cat","bear","eagle","fox"));

$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

$possible_hobbies_via_intersection = array_unique($possible_hobbies_via_intersection);
$possible_hobbies_via_merge = array_unique($possible_hobbies_via_merge);

$total_hobbies_count = $mother_hobbies_count + $me_hobbies_count;

$web_development = array('frontend' => array(), 'backend' => array());

array_push($web_development['frontend'], 'xhtml');
array_push($web_development['backend'], 'Ruby on Rails');
array_push($web_development['frontend'], 'CSS');
array_push($web_development['frontend'], 'Flash');
array_push($web_development['frontend'], 'JavaScript');

$key = array_search('xhtml', $web_development['frontend']);
$web_development['frontend'][$key] = 'html';

$key = array_search('Flash', $web_development['frontend']);
unset($web_development['frontend'][$key]);



echo '<pre>';
print_r($me);
echo '</pre>';

echo '<pre>';
print_r($soulmate);
echo '</pre>';

echo '<pre>';
print_r($total_hobbies_count);
echo '</pre>';

echo '<pre>';
print_r($mother_hobbies_count);
echo '</pre>';

echo '<pre>';
print_r($me_hobbies_count);
echo '</pre>';



echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

echo '<pre>';
print_r($web_development);
echo '</pre>';

?>