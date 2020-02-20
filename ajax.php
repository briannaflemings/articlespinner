<?php
error_reporting(0);
set_time_limit(0);

include("dictionary.php");

$article	=	trim(strip_tags($_POST["article"]));

?>

<?php



if($article == ""){
	echo '<h3>Please enter article!</h3>';
}else{
	
	 $artarray = $article;
	 $step1 = array("(", ")", "[", "]", "?", ".", ",", "|", "\$", "*", "+", "^","{", "}");
	 $artarray = str_replace($step1," ",$artarray);
	 $artarray = str_replace("  "," ",$artarray);
	 $words_artarray = explode(" ",$artarray);

		if (sizeof($words_artarray)>0)
		{
		for($i=0;$i<sizeof($words_artarray);$i++)
			{
			$to_be_replaced = $words_artarray[$i];
			$to_be_replaced = str_replace(" ","",$to_be_replaced);

			if(($to_be_replaced!="")&&(strlen($to_be_replaced)>=4))
				{

				$to_be_replaced = " ".$to_be_replaced." ";
				$to_be_replaced_with = $dic[$to_be_replaced];
				if(($to_be_replaced!="")&&($to_be_replaced!=" ")&&($to_be_replaced_with!=""))
					{
					$article = str_replace($to_be_replaced,$to_be_replaced_with,$article);
					$article = str_replace(" ".ucfirst(trim($to_be_replaced))." "," ".ucfirst(trim($to_be_replaced_with))." ",$article);
					}
				}
			}
		}

	$article = str_replace("\'","'",$article);
	$article = str_replace('\"','"',$article);
	echo '<textarea class="field w-input" id="textarea" rows="10">'.$article.'</textarea>';
}
		

?>