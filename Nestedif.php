<?php
$age = 20;
$citizen = true;

if ($age >= 18) {
    if ($citizen == true) {
        echo "You can vote in India.";
    } else {
        echo "You must be an Indian citizen to vote.";
    }
} else {
    echo "You are underage.";
}
?>
