<?php
class Course {
    const name ="Welcome to IsDB-BISEW IT Scholarship Programme "."<br>";

    public static function courseList(){
        echo "Here you will get information of trainee.";
    }
}

echo Course::courseList();
echo "<br>";
echo Course::name;
?>