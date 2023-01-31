<h3>10. Ternary exercises</h3>
<form method="GET">
    <label for="species">Are you a human, a cat or a unicorn?</label>
    <select name="species" id="species">
        <option value="human">Human</option>
        <option value="cat">Cat</option>
        <option value="unicorn">Unicorn</option>
    </select>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['species'])) {
    $species = $_GET['species'];
    $gif = ($species == 'human') ? '<img src="human.gif" alt="human">' : (($species == 'cat') ? '<img src="cat.gif" alt="cat">' : '<img src="unicorn.gif" alt="unicorn">');
    echo $gif;
}
?>
