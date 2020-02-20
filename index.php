<!DOCTYPE html>
<html class="w-mod-js w-mod-no-touch w-mod-video w-mod-no-ios wf-opensans-n3-active wf-opensans-i3-active wf-opensans-n4-active wf-opensans-i4-active wf-opensans-n6-active wf-opensans-i6-active wf-opensans-n7-active wf-opensans-i7-active wf-opensans-n8-active wf-opensans-i8-active wf-petitformalscript-n4-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Article Rewriter</title>  
  <meta content="width=device-width, initial-scale=1" name="viewport"><meta content="Webflow" name="generator">
  <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">		
		$(document).ready(function(){
			$("#formSubmit").submit(function() {
				$.ajax({
					type: "POST",
					url: "ajax.php",
					data: $("#formSubmit").serialize(),
					beforeSend: function(XMLHttpRequest){
						var overlay = $('<div id="overlay"></div>');
						overlay.appendTo(document.body);
						$("#loading").css('display','inline');
						$('#results').empty();	
					}, 
					success: function(data){
						$("#loading").css('display','none');
						$('#results').append(data);
						$("#overlay").remove();	
						$('html, body').animate({scrollTop: $("#textarea").offset().top}, 300);		
					}
				});
		
				return false;
			});
			
		});

		
  </script>   
  </head>
  <body>
  <div class="bars-wrapper w-clearfix"><div class="bar"></div><div class="_2 bar"></div><div class="_3 bar"></div><div class="_4 bar"></div><div class="_5 bar"></div><div class="_6 bar"></div><div class="bar"></div></div>
  <div class="header-section"><div class="container w-container">
  <h1>Article Rewriter</h1><p class="subtitle">Instantly turn your existing content into a unique version</p>
  <div class="sign-up-form w-form">
  <form class="w-clearfix" id="formSubmit" data-name="Signup Form" name="wf-form-signup-form" data-sticky="stickyID0" action="index.php" method="post">
	<textarea class="field w-input" name="article" rows="10" placeholder="Type or paste article here..." required></textarea>

<input type="submit" value="Rewrite" class="button w-button">	
</form>
<div style="display:none;" id="loading" align="center">
	<h3>Please wait the article is being rewritten...</h3>
</div>
<div id="results"></div>
</div></div></div><div class="social-section">
<div class="w-container">
<h2>Rewrite your articles - free and automatic!</h2>
<div class="refer">
Use the buttons below to share.
</div><div class="share-wrapper">
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>

</div></div></div><div class="footer-section"><div class="w-container"><div class="w-row"><div class="w-col w-col-6 w-col-small-6"><div class="copyright">&copy;. All right reserved.&nbsp;</div></div></div></div></div>
</body></html>