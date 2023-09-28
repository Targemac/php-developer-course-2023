<?php

// see file currently in new directory
$directory = scandir(__DIR__);

echo "<pre>";
print_r($directory);
echo "</pre>";

// create a new directory
mkdir("test-file");

// delete a directory
rmdir("test-file");

// ckeck if file exists
if (file_exists("example.txt")) {
    echo "file found";

    // check file size
    echo filesize("example.txt");
} else {
    touch("example.txt");
    echo "file created";

    // check file size
    echo filesize("example.txt");

    // write to a file
    file_put_contents("example.txt", "Hello bro!");

    // clear cache
    clearstatcache();

    // re-read file size again
    echo filesize("example.txt");

    // get contents of a file
    echo file_get_contents("example.txt");
}
