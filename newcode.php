<?php
// 1. Variable declaration and Data Types
$siteName = "My Tech Blog";
$isLoggedIn = true;
$articleCount = 4;

// 2. An Associative Array
$user = [
    "username" => "alice_dev",
    "role"     => "admin",
    "email"    => "alice@example.com"
];

// 3. A Custom Function with type hinting
function greetUser(array $userData): string {
    if ($userData["role"] === "admin") {
        return "Welcome back, Administrator " . $userData["username"] . "!<br>";
    } else {
        return "Hello, " . $userData["username"] . "!<br>";
    }
}

// Output a greeting using the function
echo greetUser($user);

// 4. Conditional Statement
if ($isLoggedIn && $articleCount > 0) {
    echo "Welcome to " . $siteName . ". You have " . $articleCount . " unread articles.<br>";
} else {
    echo "Please log in to view your articles.<br>";
}

// 5. Index Array & Loop
$categories = ["Programming", "Design", "DevOps", "Security"];

echo "<h3>Blog Categories:</h3>";
echo "<ul>";
foreach ($categories as $category) {
    echo "<li>" . htmlspecialchars($category) . "</li>";
}
echo "</ul>";
?>