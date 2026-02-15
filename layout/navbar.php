<?php
$pages = [
    'Home' => '/',
    'A very boring page' => '/a-very-boring-page.php',
]; ?>
<nav>
    <?php foreach ($pages as $name => $dest) {
        printf('<a href="%s">%s</a>', $dest, $name);
    } ?>
</nav>
