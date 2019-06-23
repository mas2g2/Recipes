<?php
	$ingredients = $_GET["ingredients"];
	
	require 'vendor/autoload.php';
	$response = Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients?number=5&ranking=1&ignorePantry=false&ingredients=$ingredients",
		  array(
			      "X-RapidAPI-Host" => "spoonacular-recipe-food-nutrition-v1.p.rapidapi.com",
			          "X-RapidAPI-Key" => "660e48162bmsh637701280ecf42ap1fab39jsn914a0a54f231"
				    )
			    );
	
	$size = count($response->body);
	//header("Location: home.php?response=".serialize($response->body));
	$variables = "";
	for($i = 0; $i < $size; $i++)
	{
		if($i == 0)
		{
			$variables = $variables."image".$i."=".$response->body[$i]->image."&recipe".$i."=".$response->body[$i]->title;
		}
		//print_r($variables);
		$variables = $variables."&image".$i."=".$response->body[$i]->image."&recipe".$i."=".$response->body[$i]->title;
	}
	print_r($variables);
	header("Location: home.php?".$variables);
 	
?>
