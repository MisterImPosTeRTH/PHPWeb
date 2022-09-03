<?php
    $product = array(array(
            "id"=> "1",
            "name"=> "Taiwan Tea",
            "price"=> "45",
            "img"=> "PerfectPics/Taiwan_Tea.png"
        ), array(
            "id"=> "2",
            "name"=> "Matcha Green Tea",
            "price"=> "45",
            "img"=> "PerfectPics/Matcha_Tea.png"
        ), array(
            "id"=> "3",
            "name"=> "Thai Tea",
            "price"=> "45",
            "img"=> "PerfectPics/Thai_Tea.png"
        ), array(
            "id"=> "4",
            "name"=> "Lemon Tea",
            "price"=> "45",
            "img"=> "PerfectPics/Lemon_Tea.png"
        ), array(
            "id"=> "5",
            "name"=> "Jasmine Tea",
            "price"=> "40",
            "img"=> "PerfectPics/Jasmine_Tea.png"
        ), array(
            "id"=> "6",
            "name"=> "Cocoa",
            "price"=> "45",
            "img"=> "PerfectPics/Cocoa.png"
        ), array(
            "id"=> "7",
            "name"=> "Cocoa & Mint",
            "price"=> "45",
            "img"=> "PerfectPics/Cocoa_Mint.png"
        ), array(
            "id"=> "8",
            "name"=> "Milk",
            "price"=> "40",
            "img"=> "PerfectPics/Milk.png"
        ), array(
            "id"=> "9",
            "name"=> "Latte",
            "price"=> "45",
            "img"=> "PerfectPics/Latte.png"
        ), array(
            "id"=> "10",
            "name"=> "Cappuccino",
            "price"=> "45",
            "img"=> "PerfectPics/Cappuccino.png"
        ), array(
            "id"=> "11",
            "name"=> "Espresso",
            "price"=> "45",
            "img"=> "PerfectPics/Espresso.png"
        ), array(
            "id"=> "12",
            "name"=> "Americano",
            "price"=> "45",
            "img"=> "PerfectPics/Americano.png"
        ), array(
            "id"=> "13",
            "name"=> "Mocha",
            "price"=> "45",
            "img"=> "PerfectPics/Mocha.png"
        ), array(
            "id"=> "14",
            "name"=> "Black Orange Coffee",
            "price"=> "50",
            "img"=> "PerfectPics/Black_Orange.png"
        ), array(
            "id"=> "15",
            "name"=> "Water",
            "price"=> "10",
            "img"=> "PerfectPics/Water.png"
        )
    );
    // echo "Hello World";
    echo "<table>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>";
    foreach ($product as $value) {
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        echo "<tr>
                <td><h3 style=\"color:rgb($r,$g,$b)\">" . $value['id'] . "</h3></td>
                <td><h3 style=\"color:rgb($r,$g,$b)\">" . $value['name'] . "</h3></td>
                <td><h3 style=\"color:rgb($r,$g,$b)\">" . $value['price'] . "</h3></td>
                <td><img src=\"". $value['img']. "\" alt=\"". $value['img']."\"></td>
            </tr>";
    }
    echo "</table>";
?>