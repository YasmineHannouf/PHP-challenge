<?php

$courseTitle = "Rust, the language of no bugs";
$enrolledStudents = 20;
$coursePrice = 30;
$courseDiscount = true;

echo "Course title: " . $courseTitle . "<br>";
echo "Enrolled Students: " . $enrolledStudents . "<br>";
echo "Course price: " . $coursePrice . " $ USD<br>";
echo "Course on discount: " . ($courseDiscount ? "Yes" : "No") . "<br>";

?>