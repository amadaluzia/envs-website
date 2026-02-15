<?php
$pages = [
    'Home' => '/',
    'Anti-Devuan Propaganda' => '/fuck-devuan.php',
]; ?>
<nav>
    <?php foreach ($pages as $name => $dest) {
        printf('<a href="%s">%s</a>', $dest, $name);
    } ?>
</nav>
