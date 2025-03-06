<?php
    $file = "C:\video.mp4";
    $space = filesize($file);
    echo "Size In Megabyte Is " . round($space/1024/1024) . "<br>Size In Kilobyte Is ". round($space/1024);
?>    