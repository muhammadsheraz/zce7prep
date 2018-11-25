<?php
// Forget what is already in your head.

// OK, now say you have some different roles: admin, user, and guest.

// and some different permissions: read, write and delete

// Let's create some bitmasks for permissions and roles. A bitmask is a sequence of bits that can be used to manipulate or read some kind of flags. As shown below:

// flags                                bitmasks
$read = 1;                              // 0001
$write = 2;                             // 0010
$delete = 4;                            // 0100

$admin = $read | $write | $delete;      // 0001 | 0010 | 0100 => 0111
$user = $read | $write;                 // 0001 | 0010 => 0011 
$guest = $read;                         // 0001 => 0001

// Notice 1, 2, 4. This must be raised as double. Otherwise, it might give you some awkward results.

// Forget about the things commented. Those are just sequence of bits (or bitmasks) for individual permissions and roles.

// Now let's create a handy function which may be used to check a specific permission for a specific role.

function isAllowed($role, $permissison) {
    return $role & $permissison ? true : false;
}

// We are done. Let's check the $delete permission for all 3 roles:

var_dump(isAllowed($admin, $delete));  // bool(true)
var_dump(isAllowed($user, $delete));   // bool(false)
var_dump(isAllowed($guest, $delete));  // bool(false)

// So why is bitwise operation? In a word, bitwise operation is more faster, concise and maintainable. Otherwise, using bitwise operation is always efficient for complex applications.