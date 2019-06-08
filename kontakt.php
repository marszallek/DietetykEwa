<!doctype html>
<html lang="pl">

<head>

<meta charset="utf-8">

<title>poradnictwo dietetyczne sztum</title>
<link rel="stylesheet" type="text/css" href="_css/screen.css">
<link rel="icon" type="image/ico" href="img/favicon.ico" />

<style type="text/css">
<!--
@import url("css/center.css");
</style>

<style type="text/css">
<!--
@import url("css/center.css");
-->
</style>

<script type="text/javascript" src="js/gen_validatorv2.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="musli.js"></script>

<script type="text/javascript">
$(function(){
    $('#musli').musli( { musliPosition: "left" } );
});
</script>



</head>


<body>

<div id="wrapper">



<div id="header">



<div id="logo"><h1> <a href="index.html">Poradnictwo Dietetyczne Ewa Roman</h1> </a> </div>







<div id="menu">




  <div id="menu_content">

<ul id="mainmenu"> 
 
      <li><a href="index.html">Start</a></li> 
      <li><a href="o_mnie.html">O mnie</a></li>
      <li><a href="cennik.html">Cennik</a></li>   
      <li><a href="dla_grup.html">Dla grup</a>  </li>
      <li><a href="jak_wyglada_wizyta.html">Jak wygląda wizyta</a>  </li> 
      <li><a href="porady.html">Porady</a>  </li> 
      <li><a class="active" href="kontakt.php"><strong>Kontakt</strong></a>  </li> 
            
     
  </ul>
  
 

</div>
</div>






<div id="content">




<div id="content_kontakt">

<br>

<img src="img/kontakt.jpg" width="508" height="783" border="0"  style="float: right; margin-left: 40px; margin-top:25px" />

<br><br><br>


 

<span class="red">Poradnictwo Dietetyczne</span><br>
<span class="grey">Mgr inż. Ewa Roman – dietetyk</span><br><br>

Sztum, ul. Kopernika 3<br>
Zadzwo&#324; i um&#243;w si&#281; na wizyt&#281;: 696 040 055<br><br>

Je&#347;li nie masz mo&#380;liwo&#347;ci dojazdu do mnie - ja dojad&#281; do Ciebie.<br><br><br>


<span class="grey">Formularz kontaktowy:</span><br> <br> 
<br>


<!-- Formularz-->



<div style="float:right;width:450px; height:250px">

<?php 
	$mail_formularza_kontaktowego = "kontakt@dietetykewa.pl";

	
	
	if ($_POST['zapisz_kontakt']=='true') {
		$order = stripslashes($_REQUEST['order']);
		$imie = stripslashes($_REQUEST['imie']);
		$telefon = stripslashes($_REQUEST['telefon']);
		$email = stripslashes($_REQUEST['email']);
		$tresc = stripslashes($_REQUEST['tresc']);
		
		$imie = strip_tags($imie);
		$telefon = strip_tags($telefon);
		$email = strip_tags($email);
		$tresc = strip_tags($tresc);
		
		if(!empty($order)){
			$mail_from = $email;
			$subject = "Formularz kontaktowy ze strony www";
			$mail_to = $mail_formularza_kontaktowego;
			$mail_cc = "";
			$od_kogo = $email;
			
				$mess = '
				<html>
				<head>
				<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<style type="text/css">
				<!--
				* {
					font-family: Arial, Helvetica, sans-serif;
					font-size:12px;
					color: #000000;
				}
				body {
						font-family: Verdana, Arial, Helvetica, sans-serif;
						font-size: 12px;
						background-color: #FFFFF;
						color: #666666;
						margin-top: 5px;
						margin-bottom: 0px;	
				}
				table td,
				table th{
					padding: 5px;
					border-collapse: collapse;
					text-align: left;
				
				}
				table th{
					background-color: #cccccc;
					color: #666666;
				}
				-->
				</style>
		
				</head>
				<body>
				<table border="1" cellspacing="0" cellpadding=0">
		
				  <tr>
					<th colspan="2">Formularz kontaktowy ze strony www</th>
				  </tr>
				  <tr>
		
				  <tr>
					<td>Imi&#281; i Nazwisko</td>
					<td>'.$imie.'</td>
				  </tr>
				  <tr>
					<td>Telefon</td>
					<td>'.$telefon.'</td>
				  </tr>
					<tr>
					<td>E-mail</td>
					<td><a href="mailto:'.$email.'">'.$email.'</a></td>
				  </tr>
					<tr>
					<td>Tre&#347;&#263; zapytania</td>
					<td>'.$tresc.'</td>
				  </tr>	
				</table>
				</body>
				</html>';
				//koniec wiadomisci
				
				$headers  = "From: kontakt@dietetykewa.pl <kontakt@dietetykewa.pl>\r\n";
    			$headers .= "Reply-To: $mail_from <$mail_from>\r\n";
    			$headers .= "Return-Path: kontakt@dietetykewa.pl\r\n";
    			$headers .= "X-Mailer: PHP\n";
    			$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				
				//$headers  = "MIME-Version: 1.0\r\n";
				//$headers .= "Content-type: text/html; charset=utf-8\r\n";
				//$headers .= "From: $od_kogo <".$mail_from.">\r\n";
				//if ($mail_cc) $headers .= "Cc: ".$mail_cc."\r\n";
				

		  
				
				mail($mail_to, stripslashes($subject), $mess, $headers);
				
				echo '<div class="ok">Twoja wiadomo&#347;&#263; zosta&#322;a wys&#322;ana.</div>';
				
			
		}
		
	}


?>

			<form action="" method="post" name="zamawiam">
            <table class="clearTable" border="5" cellpadding="0" cellspacing="0">
              <tbody>
              	<tr>
                	<td class="opis">Imi&#281; i nazwisko/firma:</td>
                	<td><input name="imie" value="" class="poleForm" type="text" /></td>
                </tr>
                <tr>
                	<td class="opis">Adres e-mail:</td>
                	<td><input name="email" value="" class="poleForm" type="text" /></td>
                </tr>
                <tr>
                	<td class="opis">Telefon:</td>
                	<td><input name="telefon" value="" class="poleForm" type="text" /></td>
                </tr>
                <tr>
                	<td class="opis">Wiadomo&#347;&#263;:</td>
                	<td><textarea name="tresc" type="text" value="" class="area"></textarea></td>
                </tr>
                <tr>
                	<td class="opis">&nbsp;</td>
                	<td><input name="submit" value="wy&#347;lij" class="btn" type="submit" />
                <input name="zapisz_kontakt" value="true" type="hidden" />
                <input value="zl&#243;z zam&#243;wienie" name="order" type="hidden" /></td>
                </tr>
            </tbody></table>
            </form>
            
            <script language="JavaScript">
            var frmvalidator  = new Validator("zamawiam");
            frmvalidator.addValidation("imie","req","Podaj swoje imi&#281; i nazwisko lub nazw&#281; firmy!");
            frmvalidator.addValidation("email","req","Podaj sw&#243;j adres email!");
            frmvalidator.addValidation("email","email","To nie jest prawid&#322;owy adres e-mail!");
            frmvalidator.addValidation("telefon","req","Podaj sw&#243;j numer telefonu!");
            frmvalidator.addValidation("tresc","req","Wpisz wiadomo&#347;&#263;!");
            </script><br /><br /><br /><br /><br /><br />
</div>




<!-- Koniec forularza--> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<span class="grey">Tutaj mie&#347;ci si&#281; m&#243;j gabinet:</span><br><br>                        
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2349.3704605084204!2d19.029789899999997!3d53.925162!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4702a88119a18f63%3A0xfca4747eb1f3f0d8!2sKopernika+3!5e0!3m2!1spl!2spl!4v1401864971776" width="600" height="200" frameborder="0" style="border:0"></iframe>




 </div>
</div>


<div id="center">
<center>
 
</center>
</div>



<div id="footer">

<div id="footer_content">

<div id="footer_left"><a href="http://www.vicoli.pl/" target="_blank">Copyright © 2014 Vicoli. Wszelkie prawa zastrzeżone.</a></div>


<div id="footer_right"><a class="active" href="index.html">Start</a> &emsp; <a href="o_mnie.html">O mnie</a> &emsp; <a href="cennik.html">Cennik </a>&emsp; <a href="dla_grup.html"> Dla grup </a>  &emsp; <a href="jak_wyglada_wizyta.html"> Jak wygląda wizyta </a> &emsp; <a href="porady.html"> Porady </a> &emsp; <a href="kontakt.php"> Kontakt </a> &emsp; 
</div>
</div>
</div>


</div>




</div>





<!-- Slider Facebooka-->

<ul id="musli" class="musli musli-left">
  <li>
    <img src="icons/fb.png" />
    <div class="musli-facebook">
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FPoradnictwo-dietetyczne%2F670338396336478%3Ffref%3Dts&width&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:287px; height:290px;" allowTransparency="true"></iframe>
    
    
    </div>
  </li>
</ul>

<!-- End Slider Facebooka-->



</body>

</html>
