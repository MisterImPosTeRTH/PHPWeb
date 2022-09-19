<?php
session_start();
$servername="localhost";
$username="root";
$password="Pop@27032545";
$dbname="shop";
$per_page=2;
if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;
else $start_page=0;
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
$sql="SELECT * FROM product";
$result=mysqli_query($con,$sql);
$numrow=mysqli_num_rows($result);
echo "<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>";
$sql="SELECT * FROM product LIMIT $start_page,$per_page";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table style=\"text-align: center\" border=1><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>";
    echo $row["description"]."</td><td>".$row["price"]."</td>";
    echo "<td><img src=\"PerfectPics\\".$row["image"]."\" alt=\"".$row["image"]."\"></td></tr>";
    }
    echo "</table>";
}else{
    echo "0 results";
}
if($start_page/2-1 >= 0)
    echo "<button onclick=\"document.location='show_product.php?page=".($start_page/2-1)."'\" type='button'><i class=\"fas fa-angle-double-left fa-2x\"></i></button>";
if($start_page/2+1 <= $numrow/$per_page-1)
    echo "<button onclick=\"document.location='show_product.php?page=".($start_page/2+1)."'\" type='button'><i class=\"fas fa-angle-double-right fa-2x\"></i></button>";
echo "<div>";
    for($i=0;$i<ceil($numrow/$per_page);$i++)
    echo "<a href='show_product.php?page=$i'>[".($i+1)."]</a>";
echo "</div>";
echo "<br>".($start_page+1)."-".($start_page+2)."/".$numrow." Records<br>";
echo "".($start_page/2+1)."/".$numrow/$per_page." Pages<br>";
?>