<?php
$phpArray= array("hà nội", "đà nẵng", "hồ chí minh");
class student{
    public $name;
    public $age;
    public $location;
    public function __construct($name,$age,$location)
    {
        $this->name=$name;
        $this->age=$age;
        $this->location=$location;
    }
}
$manh= new student("Trần Văn Mạnh", "21", " Thanh Hóa");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($manh);
echo "</pre>";

$phpJson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($manh);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";