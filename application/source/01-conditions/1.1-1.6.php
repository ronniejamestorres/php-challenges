<h3>1. Clean your room!
	</h3>
	<?php 
// 1.2 Clean your room Exercise, improved
$room_is_filthy = true;
// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values


if( $room_filthiness = $possible_states[0]  ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
	$room_is_filthy = false;
} else if( $room_filthiness = $possible_states[5]  ){
	echo "Yuk, Room is dirty : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>


</br>
<h3>2. Display a different greeting message depending on the time of the day.</h3>

<?php 
$now = date('h:i:s'); // How to get the current time in PHP ? Google is your friend ;-)
echo "Current time: ".$now. "<br>" ;
// Test the value of $now and display the right message according to the specifications.

if ($now >= '05:00' && $now < '09:00') {
	echo "Good morning!";
} elseif ($now >= '09:01' && $now < '12:00') {
	echo "Good day!";
} elseif ($now >= '12:01' && $now < '16:00') {
	echo "Good afternoon!";
} elseif ($now >= '16:01' && $now < '21:00') {
	echo "Good evening!";
} elseif ($now >= '21:01' || $now < '04:59') {
	echo "Good night!";
}
?>

<h3>3. Display a different greeting according to the user's age.
</h3>
<h3>3. Display a different greeting according to the user's age and gender.</h3>
<h3>4. Display a different greeting according to the user's age, gender and mothertongue.</h3>

<?php
// 3. "Different greetings according to age" Exercise

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['english'];
    if($age < 12){
        if($english == "yes"){
            echo "Hello " . ($gender == "female" ? "Girl!" : "Boy!");
        }else {
            echo "Aloha " . ($gender == "female" ? "Girl!" : "Boy!");
        }
    } elseif($age >= 12 && $age < 18){
        if($english == "yes"){
            echo "Hello " . ($gender == "female" ? "Teenage Girl!" : "Teenage Boy!");
        }else {
            echo "Aloha " . ($gender == "female" ? "Teenage Girl!" : "Teenage Boy!");
        }
    } elseif($age >= 18 && $age <= 115){
        if($english == "yes"){
            echo "Hello " . ($gender == "female" ? "Miss" : "Mister") . " Adult!";
        }else {
            echo "Aloha " . ($gender == "female" ? "Miss" : "Mister") . " Adult!";
        }
    } else {
        if($english == "yes"){
            echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }else {
            echo "Aloha! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }
    }
}
// Form 
?>
<form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age">
    <br>
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value="male">Man
    <input type="radio" name="gender" value="female">Woman
    <br>
    <label for="english">Do you speak English?</label>
    <input type="radio" name="english" value="yes">Yes
    <input type="radio" name="english" value="no">No
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<h3>5. The Girl Soccer team
</h3>
<h3>6. Achieve the same, without the ELSE.
</h3>

<form method="post" action="">
    <label for="name">Enter your name:</label>
    <input type="text" name="name">
    <br>
    <label for="age">Enter your age:</label>
    <input type="number" name="age">
    <br>
    <label for="gender">Are you a girl?</label>
    <input type="radio" name="gender" value="female">Yes
    <input type="radio" name="gender" value="male">No
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $message = "Sorry, you don't fit the criteria.";
    if($gender == "female" && $age >= 21 && $age <= 40){
       $message = "Welcome to the team, ". $name . "!";
    } 
    echo $message;
}
?>