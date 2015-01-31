<?php

$url = $_POST['url'];
$format = $_POST['format'];
$tnimage = shell_exec("/usr/local/bin/youtube-dl -v --get-thumbnail '$url'");
$filename = shell_exec("/usr/local/bin/youtube-dl -v --restrict-filenames --get-filename -o '%(title)s-%(id)s' '$url'");
shell_exec("/usr/local/bin/youtube-dl -v --audio-format $format -x --restrict-filenames --no-mtime '$url'");
//shell_exec("/usr/local/bin/youtube-dl -v --audio-format mp3 -x --no-mtime '$url'");
//echo $x;
$filename = $filename.".".$format;
//echo "<a href='$filename' download>".$filename."</a>";
echo "<p><a href='$filename' download>$filename</a></p><br><h3><a href='index.php'>- REFRESH -</a></h3>";

?>
