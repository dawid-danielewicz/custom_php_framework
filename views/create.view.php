<?php
require 'partials/header.php';
?>

<form action="/users" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Create">
</form>

<?php
require 'partials/footer.php';
?>

