<?php
if ($_POST['submit']) {
    $name = $_POST['first-name'];
    $gender = $_POST['name'];
    $errors = array();
    if (strlen($name) <= 0 || strlen($name) > 10) {
        $errors['name'] = 'Длина должна быть от 1 до 10 символов';
    }
    if ($gender !== 'M') {
        if ($gender !== 'F') {
            $errors['gender'] = 'M или F';
        }
    }
    print_r($errors);
}

<form action="index.php" method="post">
        <select name="category" id="">
            <option value = "1">Что-то1</option>
            <option value = "2">Что-то2</option>
        </select>
        <button type="submit" class="button" name="submit">Отправить</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            echo $_POST['category'];
        }
    ?>