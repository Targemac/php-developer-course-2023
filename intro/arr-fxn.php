<?php

$users = ["john", "mary", "jane", null, false, "kemi"];


// isset() would consider false and nul to be the sae thing as not found
if (isset($users[3])) {
    echo "user found";
}

// array_key_exists checks to see the itme exists at location
if (array_key_exists(3, $users)) {
    echo "user found: " . 3;
}

// ---------------------

// array_filter filters out false and null values of the array
$users = array_filter($users);

echo "<pre>";
print_r($users);
echo "</pre>";

// ---------------------

// filter out mary
$users = array_filter($users, fn ($user) => $user !== "mary");
echo "<pre>";
print_r($users);
echo "</pre>";

// --------------------

// re-indexing the index
$users = array_values($users);
echo "<pre>";
print_r($users);
echo "</pre>";

// --------------------

// making adjustments to members of an array
$users = array_map(fn ($user) => strtoupper($user), $users);
echo "<pre>";
print_r($users);
echo "</pre>";

// --------------------

// merging arrays
$users = array_merge($users, ["jessica", "tina", "abdul"]);
echo "<pre>";
print_r($users);
echo "</pre>";

// --------------------
$users = array_map(fn ($user) => strtoupper($user), $users);

// sorting arrays
sort($users);
echo "<pre>";
print_r($users);
echo "</pre>";