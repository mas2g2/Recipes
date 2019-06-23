$(function(){
	$('#no_match').hide();
	if($.cookie("Signup")){
			$(".signup").show();
		        $(".login").hide();
	}
	else{
		$(".login").show();
		$(".signup").hide();
	}
	if(!$.cookie("Signup"))	$(".signup").hide();

	$("#LogIn").click(function(){
		$(".login").show();
		$(".signup").hide();
		$.cookie("Signup", null, { path: '/' });
	});
	$("#SignUp").click(function(){
		$(".signup").show();
		$(".login").hide();
	});
	$("#btn").click(function(){
		if($('#pass').val() != $('#confirm').val())
		{
			$('#no_match').show();
			alert("Password Must Match");
		}
		else
		{

		}
	});
	$("#home").click(function(){
		$(".home").show();
		$(".add_recipe").hide();
		$(".account").hide();
		$("#home").addClass('active');
		$('#add_recipe').removeClass('active');
		$('#account').removeClass('active');
	});
	$("#add_recipe").click(function(){
		$(".home").hide();
		$(".add_recipe").show();
		$(".account").hide();
		$("#home").removeClass('active');
		$('#add_recipe').addClass('active');
		$('#account').removeClass('active');
	});
	$("#account").click(function(){
		$(".home").hide();
		$(".add_recipe").hide();
		$(".account").show();
		$("#home").removeClass('active');
		$('#add_recipe').removeClass('active');
		$('#account').addClass('active');
	});
	$("#Favorite").click(function(){
		$.cookie("favorite",$("#recp").text());
	});
});

function loadHome(){
	$(".home").show();
	$(".add_recipe").hide();
	$(".account").hide();
	loadParams();
}

$.urlParam = function(name)
{
	var results = new RegExp('[\?&]'+name+'=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}

function loadParams()
{
	var i = 0;
	size = 5;
	var htmlStr = "";
	for(i = 0; i < size; i++)
	{
		console.log($.urlParam('image'+i));
		imageURL = $.urlParam('image'+i);
		recipe = $.urlParam('recipe'+i);
		recipe = recipe.replace(/%20/g," ");
		recipe = recipe.replace(/%27/g," ");
		console.log(recipe);
		favorite = "<button type=\"submit\"onclick='addFavorite(\"Favorite"+i+"\")' id='Favorite"+i+"'>Favorite</button>";
		htmlElement = "<form method=\"get\" action=\"update_db.php\"><div id=\"item\"><img src=\""+imageURL+"\"> <b id='Favorite"+i+"'>"+recipe+"</b>			"+favorite+"</br></div></form>";
		//$('div#recipes').append(htmlElement);
		recipe_id = "#"+recipe;
		$("#Favorite"+i).click(function(){
			alert("Hello");
			/*
			cookie_text = $(recipe_id).text();
			$.cookie("favorite",cookie_text);*/
		});
		htmlStr += htmlElement;
	}
	$('div#recipes').html(htmlStr);
}
function addFavorite(name)
{
	cookie_text = $("b#"+name).text();
	$.cookie("Favorite",cookie_text);
}
