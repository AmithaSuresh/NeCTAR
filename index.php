<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
include('Components/head.php');
include('Components/header.php');
include('pages/firstPage.php');
//include('model/news.php');


echo $head
     .$header
    .$firstPage_1;
    Featured();
   //echo $query;
   
  
echo $firstPage_2
    .$firstPage_3;

    headlines();

echo $firstPage_4;
event();

echo $firstPage_5;

$Details = mysqli_query($con,"SELECT * from `details`");
$resut1 = mysqli_fetch_array($Details);
if($resut1 == true)
{
testrimo();
}


echo $messageHead;
Message();


 
 echo $firstPage_6
    .$footer
    .$connection;

 ?>