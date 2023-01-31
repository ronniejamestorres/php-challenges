<?php
$name = "Maurice";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Jesus";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p> Hello $name!</p>";
echo '<hr>';
?>  

<h3>It works just fine. But is it DRY ? Not at all. </h3>


<?php
//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");
?>  

<h3>So : what are functions ?</h3>


<?php

$stro = 'This is going to be shuffled !';
$stro = str_shuffle($stro);
 
echo $stro;
echo '<hr>'
?>  




<?php


$str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";

$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}
?>  


<h3>Custom functions</h3>

<h3>Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
</h3>
<?php

function capitalizeFirstLetter($string) {
    return strtoupper($string);
}

$name = "émile";
echo mb_strtoupper($name);
// Output: Émile


?>  

<h3>Use the native function allowing you to display the current year.
</h3>


<?php
echo date("Y");
// Output: 2023 (assuming current date is 2023)
?>

<h3>Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
</h3>



<?php
echo date("Y-m-d H:i:s");
// Output: 2023-01-29 08:41:34 (assuming current date and time is 2023-01-29 08:41:34)
?>



<h3>Create a "Sum" function that takes 2 numbers and returns their sum.

</h3>
<h3>Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is not a number."

</h3>


<?php

function sum($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Error: argument is not a number.";
    }
    return $a + $b;
}

$result = sum(5, "hello");
echo $result;
// Output: Error: argument is not a number.
?>

<h3>Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
Example: "In code we trust!" should return: ICWT).</h3>

<?php
function acronym($str) {
    $words = explode(" ", $str);
    $acronym = "";
    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]);
    }
    return $acronym;
}

$result = acronym("In code we trust!");
echo $result;
// Output: ICWT
?>


<h3>Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".</h3>

<?php

//function replaceAEWithAE($str) {
//    return str_replace(["a", "e"], ["æ", "æ"], $str);
//}

//$testCases = [
//    "caecotrophie",
//    "chaenichthys",
//    "microsphaera",
//    "sphaerotheca"
//];

//foreach ($testCases as $testCase) {
//    echo replaceAEWithAE($testCase) . "\n";
//}

?>

<h3>Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca
</h3>



<?php

function replaceAEWithAE($str) {
  return str_replace("æ", "ae", $str);
}

$testCases = [
  "cæcotrophie",
  "chænichthys",
  "microsphæra",
  "sphærotheca"
];

foreach ($testCases as $testCase) {
  echo replaceAEWithAE($testCase) . "\n";
  echo '<hr>';
}

?>

<h1>Exercises</h1>

<h3>Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :</h3>

<h3>Improve that function by giving the default class the value of "info". Look into the documentation documentation php.
</h3>

<?php
function feedback($message, $css_class="info") {
    return "<div class='$css_class'>$message</div>";
  }
  
  echo feedback("Incorrect email address", "error");
  
  
?>

<h3>Create a random words generator, that generates 2 words: one whose length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", then the two generated words, and underneath, a button with the text "Generate").</h3>

<?php

function generateWords() {
  $word1 = generateWord(1, 5);
  $word2 = generateWord(7, 15);

  return "$word1 $word2";
}

function generateWord($minLength, $maxLength) {
  $alphabet = "abcdefghijklmnopqrstuvwxyz";
  $alphabetLength = strlen($alphabet);
  $wordLength = rand($minLength, $maxLength);

  $word = "";
  for ($i = 0; $i < $wordLength; $i++) {
    $word .= $alphabet[rand(0, $alphabetLength - 1)];
  }

  return $word;
}

echo generateWords();

?>

<h3>De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
</h3>

<?php

$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$lowercaseString = strtolower($string);

echo $lowercaseString;
echo '<hr>';

?>

<h3>In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :</h3>
<?php

function calculate_cone_volume($radius, $height) {
  return $radius * $radius * pi() * $height * (1/3);
}

$volume = calculate_cone_volume(5, 2);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';

$volume = calculate_cone_volume(3, 4);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';

?>



<?php

?>  