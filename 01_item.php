<?php 
	if(!empty($_GET['itemnumber'])) 
	{
		$itemnumber = $_GET['itemnumber'];
	}

	else 
	{
		echo "Please see item number.";
		return;
	}

	$xml = @simplexml_load_file('item.xml');
	{

		$item_found = false;
		foreach($xml->children() as $item)
		{
			if($item-> id == $itemnumber)
			$name = $item->title;
			$price = $item->price;
			$item_found = true;
		}
	}

		if($product_found)
		{
			echo"Number:". $itemnumber."<br>";

			echo"Name:". $name."<br>";

			echo"Price:". $price."<br>";
		}

		else
		{
			echo"Please enter product number"
		}

		else 
		{
			echo "XML file not found";
		}
?>
