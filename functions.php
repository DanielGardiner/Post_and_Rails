<?php

/*
 * Calculate number of posts and rails to create a fence, given the desired length of the fence
 *
 * @param int $length the desired fence length
 *
 * @return string returns a description of the required posts and rails, and total fence length
 */
function howManyPostsAndRails(int $length): string {

    $numBaseRails = 1;
    $numBasePosts = 2;

    if ($length < 170){
        $numAdditionalRails = 0;
        $numAdditionalPosts = 0;
        $railText = "rail";
    } else {
        $numAdditionalRails = ceil(($length - 170) / 160);
        $numAdditionalPosts = $numAdditionalRails;
        $railText = "rails";
    }

    $totalRails = $numBaseRails + $numAdditionalRails;
    $totalPosts = $numBasePosts + $numAdditionalPosts;
    $totalLength = $totalPosts * 10 + $totalRails * 150;

    return "You would need $totalRails $railText, and $totalPosts posts to build a fence of at least $length cm, the fence 
            would be $totalLength cm long.";

}

/*
 * Calculates the length of a fence, given the number of posts and rails
 *
 * @param int $numPosts number of posts
 * @param int $numRails number of rails
 *
 * @return string returns a description of the resulting fence length
 */
function lengthOfFence(int $numPosts, int $numRails): string {

    if($numPosts - $numRails !== 1) {
        return('ERROR: The number of posts must be 1 more than the number of rails.');
    }

    $totalLength = $numPosts * 10 + $numRails * 150;
    return "The total length of a fence with $numPosts posts and $numRails rails will be $totalLength cm.";

}



//echo howManyPostsAndRails(1);
//
//echo nl2br("\n\n");
//
//echo howManyPostsAndRails(320);
//
//echo nl2br("\n\n");
//
//echo lengthOfFence(2, 1);
//
//echo nl2br("\n\n");
//
//echo lengthOfFence(2, 2);







