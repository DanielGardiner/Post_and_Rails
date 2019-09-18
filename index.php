<?php
require ('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<br>

<div>
    <h2>Calculate number of posts and rails, given length:</h2>
    <form action="index.php" method="post">
        <label for="length">Length of desired post in cm</label>
        <input type="text" name="length" id="length">
        <input type="submit">
    </form>
    <p>Result: <?php echo howManyPostsAndRails(560); ?></p>
</div>

<br>

<div>
    <h2>Calculate length, given number of posts and rails</h2>
    <form action="functions.php" method="post">
        <label for="posts">Number of posts</label>
        <input type="text" name="posts" id ="posts">
        <label for="rails">Number of rails</label>
        <input type="text" name="rails" id ="rails">
        <input type="submit">
    </form>
    <p>Result: </p>
</div>

<br><br><br><br><br>

<div>
    <h2>Rules</h2>
    <h3>Overview:</h3>
    <p>Create a PHP application that can calculate the amount of posts and railings required to build a fence of a certain length or that will calculate the length of a fence when you provide the amount of posts and railings.</p>

    <h3>Requirements:</h3>
    <ul>
        <li>Must be built using PHP</li>
        <li>Must have a basic user interface for specifying amount of posts and railings and length of fence</li>
        <li>Must have a minimal front end, no CSS and as little HTML as possible</li>
        <li>Must be able to calculate the length of a fence when provided the amount of posts and the amount of railings</li>
        <li>Must be able to calculate the amount of posts and railings needed when provided the length of fence required</li>
        <li>All fences must start and end with a post and must contain at least 1 railing</li>
        <li>Railings must have a post between them to connect them, posts cannot sit next to other posts</li>
        <li>When calculating the amount of posts and railings needed to cover a certain length fence, the result must span at least the length required, no less</li>
        <li>Fence length results must be displayed in meters with no more than 2 decimal places</li>
        <li>Code must be Unit Tested!</li>
        <li>Code must use functions or OOP (classes)</li>
    </ul>

    <h3>Specification</h3>
    <ul>
        <li>A railing is 1.5m long</li>
        <li>A post is 10cm wide</li>
    </ul>
</div>
</body>
</html>