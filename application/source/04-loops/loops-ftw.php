<?php 
$names= array('John', 'jeanne', 'joan', 'emile');
echo '<pre>';
var_dump($names);
echo '</pre>';
foreach ($names as $key=> $value){
	$names[$key] = ucfirst($value);
}
echo '<pre>';
var_dump($names );
echo '</pre>';
?>


<h3>Using foreach, build a loop that displays each element of the array
Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a <.br> to go to the next line. The result should be :</h3>
    <br>
<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
	if($pronoun == "He/She"){
		echo $pronoun . " codes<br>";
	}else{
		echo $pronoun . " code<br>";
	}
}
?>

<h1>While loop</h1>


 <?php
$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}
?>

<h1>For loop</h1>

<?php
for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
}
?>

<h1>Write a script that prints the numbers from 1 to 120 using  while 
</h1>

<?php
$number = 1;
while ($number <= 120) {
    echo $number . "<br>";
    $number++;
}
?>

<h1>Write a script that prints the numbers from 1 to 120 using  for 
</h1>

<?php
for ($number = 1; $number <= 120; $number++) {
    echo $number . "<br>";
}
?>

<h1>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
</h1>

<?php
$characters = array("Harry", "Hermione", "Ron", "Gandalf", "Bilbo", "Frodo", "Sam", "Pippin", "Merry", "Aragorn", "Legolas", "Gimli", "Boromir", "Dumbledore", "Snape", "Voldemort", "Luke", "Leia", "Han", "Chewbacca", "Obi-Wan", "Yoda", "Padmé", "Anakin", "Thor", "Iron Man", "Hulk", "Captain America", "Black Widow", "Hawkeye", "Spider-Man", "Wolverine", "Storm");

foreach ($characters as $character) {
    echo $character . "<br>";
}
?>

<h1>Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form</h1>

<?php
$countries = array("BE"=>"Belgium", "CA"=>"Canada", "MX"=>"Mexico", "FR"=>"France", "DE"=>"Germany", "IT"=>"Italy", "ES"=>"Spain", "JP"=>"Japan", "CN"=>"China", "AU"=>"Australia");
?>

<form action="submit-form.php" method="post">
    <label for="countries">Select a country:</label>
    <select name="countries" id="countries">
        <?php
        foreach ($countries as $code => $country) {
            echo "<option value='$code'>$country</option>";
        }
        ?>
    </select>
    <input type="submit" value="Submit">
</form>
