<?php

if (isset($_POST['submit']));
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$place = $_POST['place'];
$member = $_POST['member'];
$start = $_POST['start'];
$end = $_POST['end'];
$con = mysqli_connect("localhost:4306", "root", "", "travel");
$result = mysqli_query($con, "INSERT INTO booking(NAME,MOBILE,PLACE,MEMBER,START,END) values('$name','$mobile','$place','$member','$start','$end')");
if ($result) {
    echo 'values inserted';
} else {
    echo 'not inserted';
}
