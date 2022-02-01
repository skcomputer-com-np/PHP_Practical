<?php

//Date
// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// y - Represents a year (in two digits)
// l (lowercase 'L') - Represents the day of the week

echo date("Y") . "<br>";
echo date("m") . "<br>";
echo date("d") . "<br>";
echo date("Y-m-d") . "<br>";

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Year " . date("Y") . "<br>";
echo "Today is " . date("l") . "<br>";

//Time format
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

date_default_timezone_set('Asia/Kathmandu');

echo  date("h") . "<br>"; 
echo  date("i") . "<br>"; 
echo  date("s") . "<br>"; 
echo  date("h:i:sa") . "<br>"; 


//Create a Date With mktime()
//Syntax: mktime(hour, minute, second, month, day, year)
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";


//Create a Date From a String With strtotime()
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>


<!-- Asia/Aden	Asia/Almaty	Asia/Amman	Asia/Anadyr
Asia/Aqtau	Asia/Aqtobe	Asia/Ashgabat	Asia/Atyrau
Asia/Baghdad	Asia/Bahrain	Asia/Baku	Asia/Bangkok
Asia/Barnaul	Asia/Beirut	Asia/Bishkek	Asia/Brunei
Asia/Chita	Asia/Choibalsan	Asia/Colombo	Asia/Damascus
Asia/Dhaka	Asia/Dili	Asia/Dubai	Asia/Dushanbe
Asia/Famagusta	Asia/Gaza	Asia/Hebron	Asia/Ho_Chi_Minh
Asia/Hong_Kong	Asia/Hovd	Asia/Irkutsk	Asia/Jakarta
Asia/Jayapura	Asia/Jerusalem	Asia/Kabul	Asia/Kamchatka
Asia/Karachi	Asia/Kathmandu	Asia/Khandyga	Asia/Kolkata
Asia/Krasnoyarsk	Asia/Kuala_Lumpur	Asia/Kuching	Asia/Kuwait
Asia/Macau	Asia/Magadan	Asia/Makassar	Asia/Manila
Asia/Muscat	Asia/Nicosia -->