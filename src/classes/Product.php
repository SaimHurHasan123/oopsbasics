<?php
namespace App;
// include("../products.php");
class Product
{
    public  $id;
    public $image;
    public  $name;
    public  $price;
    public function __construct()
    {
        $this->id= 0;
        $this->image="";
        $this->name = "";
        $this->price=0;
    }

    public function displayProducts()
    {
        global $arr;
		foreach ($arr as $i) {
			echo '<div id="' . $i['id'] . '" class="product">
					<img src="./images/' . $i['image'] . '">
					<h3 class="title"><a href="#">Product ' . $i['id'] . '</a></h3>
					<span>Price: $' . $i["price"] . '</span>
					<a class="add-to-cart" href="./products.php?id=' . $i["id"] . '&action=add">Add To Cart</a>
				</div>';
		}
    }
    
}