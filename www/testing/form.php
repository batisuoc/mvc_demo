<?php
require '../libs/Form.php';

if (isset($_REQUEST["run"])) {
    $form = new Form();
    $form->post("name")
        ->post("age")
        ->post("gender");
    print_r($form);
}
?>
<form method="post" action="?run">
    Name <input type="text" name="name" />
    Age <input type="text" name="age" />
    Gender
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <input type="submit" />
</form>