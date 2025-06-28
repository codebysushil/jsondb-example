<?php

require("vendor/autoload.php");

use Json\Database\JsonDB;

// Create DB instance
$db = new JsonDB(__DIR__ . '/data');

// Insert
$id = $db->insert('users', [
    'name' => 'Alice',
    'email' => 'alice@example.com'
]);

// Find
//$user = $db->find('users')->find($id);

// Update
//$db->update('users', )->update($id, ['email' => 'new@example.com']);

// Delete
//$db->collection('users')->delete($id);
