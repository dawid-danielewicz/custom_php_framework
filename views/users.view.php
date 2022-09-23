<?php

require 'views/partials/header.php';

?>

<?php foreach($users as $user) : ?>
    <p><?= $user->name ?></p>
<?php endforeach; ?>

<?php
require 'views/partials/footer.php';
?>
