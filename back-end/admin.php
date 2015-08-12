<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Back End</title>
<script src="../jquery-1.11.0.min.js"></script>
<script>
//	
	$(document).ready(function()
	{
		$("div#contentForm").each(function(index,element){
				$(this).hide();
		})
		$("div#contentForm").eq(0).show();
		
		$("a#list").click(function()
		{
		//	
			var index = jQuery.inArray(this,$("a#list"));
		//	window.location.reload();
			$("div#contentForm").each(function(index,element){
				$(this).hide();
			})
			$("div#contentForm").eq(index).show();
			
		})
	})
//	)
</script>
<style type="text/css">
* {
	font-family:Arial, Helvetica, sans-serif;
}
ul {
	width = 800px;
}
ul li{
	list-style:none;
	margin-left:80px;
	float:left;
}
form {
	margin-top:40px;
	text-align:center;
	clear:left;
}
textarea{
	width:800px;
	height:300px;	
}
</style>
</head>


<body>
<?php
	require "../headerList.php";
	if(isset($_POST['Content'])) 
	{
		update_config('content.php','string'.$_POST['elementID'].'Content',$_POST['Content'],'string');
	}
	else
	{
		//$ModifyingElement = $headerListElement;
    }	
	echo "<ul>";
	foreach ($HeaderList as $headerListElement)
	{
		echo "<li><a id='list'>$headerListElement->stringTitle</a></li>";
	}
	echo "</ul>";
	echo "<br/>";
		
	foreach ($HeaderList as $headerListElement)
	{
		//echo "<li><a id='list' onclick='changeElement()'>$headerListElement->stringTitle</a></li>";
		echo "<div id='contentForm'>";
		foreach ($headerListElement->arrayContent as $elementContent)
		{
			//echo htmlspecialchars($elementContent->stringContent);
			echo "<form action='' method='post'>";
			echo "<a id='title'>$elementContent->stringTitle</a><br />";
			echo "<textarea name='Content'>";echo htmlspecialchars($elementContent->stringContent); echo"</textarea>";
			echo "<input type='submit' value='Submit'>";
			echo "<input name='elementID' style='display:none' value=$elementContent->stringID>";
			echo "</form>";
		} 
		echo "</div>";		
	}
?>

</body>
</html>