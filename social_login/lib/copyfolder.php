<?php
function copyr($source, $dest)
{
    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest);
    }

    // If the source is a symlink
    if (is_link($source)) {
        $link_dest = readlink($source);
        return symlink($link_dest, $dest);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        if ($dest !== "$source/$entry") {
            copyr("$source/$entry", "$dest/$entry");
        }
    }

    // Clean up
    $dir->close();
    return true;
}
?>
<?
//copyr("/home/public_html/blog","/home/public_html/www") ;
?>
