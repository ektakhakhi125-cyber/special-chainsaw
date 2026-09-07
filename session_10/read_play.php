<?php

$file = fopen("paly.txt", "r");

$content = fread($file, filesize("paly.txt"));

fclose($file);

$songs = explode("\n", $content);

echo "<h2>My Favorite Songs</h2>";
echo "<ul>";

foreach ($songs as $song) {
    if (trim($song) != "") {
        echo "<li>" . htmlspecialchars($song) . "</li>";
    }
}

echo "</ul>";

?>