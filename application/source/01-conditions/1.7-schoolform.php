

<h3>7. "School sucks!" Exercise
</h3>

<form method="post" action="">
    <label for="student_name">Enter the student's name:</label>
    <input type="text" name="student_name">
    <br>
    <label for="grade">Enter the student's grade:</label>
    <input type="number" name="grade" min="0" max="20">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $student_name = $_POST['student_name'];
    $grade = $_POST['grade'];
    if($grade < 4) {
        echo "This work is really bad. What a dumb kid!";
    } elseif ($grade >= 5 && $grade <= 9) {
        echo "This is not sufficient. More studying is required.";
    } elseif ($grade == 10) {
        echo "barely enough!";
    } elseif ($grade >= 11 && $grade <= 14) {
        echo "Not bad!";
    } elseif ($grade >= 15 && $grade <= 18) {
        echo "Bravo, bravissimo!";
    } else {
        echo "Too good to be true : confront the cheater!";
    }
}
?>
