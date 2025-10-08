
<?php
// Cookie ka naam
$cookie_name = "visit_count";

// Check karte hain agar cookie already set hai ya nahi
if (isset($_COOKIE[$cookie_name])) {
    // Agar cookie already exist karti hai to usko increment karenge
    $visit_count = $_COOKIE[$cookie_name] + 1;
} else {
    // Agar pehli baar aaye hain to count 1 rakhenge
    $visit_count = 1;
}

// Cookie ko update karna (expiry time set karenge 1 month ke liye)
setcookie($cookie_name, $visit_count, time() + (30 * 24 * 60 * 60));

// Ab message display karenge
if ($visit_count == 1) {
    echo "This is your first visit!";
} else {
    echo "You have visited " . $visit_count ." times. ";
}
?>
