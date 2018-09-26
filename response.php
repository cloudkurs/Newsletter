<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="css/css.css" />
<style>
		body{
			background: url("images/1.jpg");
			
		}
		#menu{
			text-align: center;
			color: red;
			
		}
		
		#container{
			width: 600px; 
			height: 300px; 
			background-color: white; 
			text-align: left; 
			margin-left: 400px;
			margin-top: 140px;
			opacity: 0.7;
			filter: alpha(opacity=70);
		}
		
		#form{
			margin-left: 100px;
			margin-top: 30px;
		}
</style>
</head>
 

<div id="wrapper">
    
	<div id= "container">
	<div id="menu">
        <u><h1 class="welcome">Danke für Ihre Registrierung </h1></u><br/>
        <div style="clear:both"></div>
    </div>
    
	
    <div id="form">
					<?PHP

				$anrede = $_POST["anrede"];
				$nachname = $_POST["nachname"];
				$email = $_POST["email"];
				echo "Hallo"." ".$anrede." ".$nachname." , <br/><br/>
				Danke für Ihre Registrierung mit der folgenden E-Mail Adresse: "."<strong>".$email."</strong>"."<br/><br/><br/>";
				
				echo'<form name="message" action="index.php" method="post">
					<input name="zurueck" type="submit"  id="zurueck" value="zurück" />
				</form>';

			?>
    </div>
	</div>
</div>

</body>
</html>


