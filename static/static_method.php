<?php
class Wdpf{
    public static $topic = "HTML-CSS-JS-PHP-MYSQL-LARAVEL";

    public function topicName(){
        return self::$topic;
    }

    public static function show(){
        return "Course topic is discuss here.";
    }

    public static function details(){
        return self::show();
    }
}
class Wdpf2 extends Wdpf{
    public static $topics = "HTML-CSS-JS-PHP-MYSQL-LARAVEL";

    public function topicName2(){
        return self::$topic;
    }

    public static function shows(){
        return "Course WDPF topic is discuss here.";
    }

    public static function details2(){
        return self::show();
    }
}

$info = new Wdpf();
echo $info-> topicName2();
echo "<br>";
// echo Student::studentValue(); //it will show error cause the function is not static
echo Wdpf2::details();

?>