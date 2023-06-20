<?php



$total_kumpul=0;
$total_target=40000000;


$query1 ="SELECT nominal from masjid ";

$result=mysqli_query($conn,$query1);

while ($row=mysqli_fetch_array($result)) {
    $total_kumpul +=$row['nominal'];
};

$format_target=number_format($total_target,0,',','.');

$format_total=number_format($total_kumpul,0,',',',');

$pers=round(($total_kumpul / $total_target)*100);

?>