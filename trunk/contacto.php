<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex" />
    <title>.:Consultora Informática:.</title>
    <link rel="stylesheet" type="text/css" href="global.css" />
    <link rel="stylesheet" type="text/css" href="css/inner-pages.css" />
    <link rel="stylesheet" type="text/css" href="css/flexcrollstyles.css" />
    <link rel="shortcut icon" href="images/logo-small.png">
	<style type="text/css" id="page-css">
        #main-section img.b5 {
            height: auto !important;
        }
    </style>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/innerpage-scripts.js"></script>
    <script type='text/javascript' src="js/flexcroll.js"></script>
	<script type="text/javascript" id="sourcecode">
        $(function()
        {
            $currentpageclass = 'b5';
        });
    </script>
    <noscript>
    
    </noscript>
    <!-- Elementos necesarios para el envio de mail -->
	<?php
        // YOUR EMAIL ADDRESS
        define ("MYEMAIL","test@cbi.com.py"); // YOU MUST ENTER YOUR EMAIL HERE
    
    function show_form()
    {
        $txt  = "<p class=\"title\" align=\"center\"><b>Por favor ingrese sus datos para contactarnos.</b></p>";
        $txt .= "<form name=\"f2email\" action=\"".$_SERVER['PHP_SELF']."\" method=\"POST\">";
        $txt .= "<table align=\"center\">";
        $txt .= "<tr><td>Nombre:</td><td><input type=\"text\" name=\"name\" /></td></tr>";
        $txt .= "<tr><td>Email:</td><td><input type=\"text\" name=\"email\" /></td></tr>";
        $txt .= "<tr><td>Sujeto:</td><td><input type=\"text\" name=\"subject\" size=\"40\" /></td></tr>";
        $txt .= "<tr><td colspan=\"2\">Mensaje:</td></tr>";
        $txt .= "<tr><td colspan=\"2\"><textarea name=\"comment\" style=\"width:98%;margin-right:5px\" rows=\"5\" cols=\"60\"></textarea></td></tr>";
        $txt .= "<tr><td colspan=\"2\" align=\"right\">";
        $txt .= "<input type=\"button\" name=\"send\" value=\"Enviar\" 
                    onclick=\"js_validate(document.forms['f2email']); return false;\" /></td></tr>";
        $txt .= "</table>";
        $txt .= "<input type=\"hidden\" name=\"submitted\" value=\"submitted\" />";
        $txt .= "</form>";
        return($txt);
    }
    function treat_submission()
    {
		@require_once "Mail.php";
		
		$from = "CBI <no-reply@cbi.com.py>";
		$to1 = "info@cbi.com.py";
		$to2 = $_POST['email'];
		$subject = $_POST['subject'];
		$body =  "Alguien escribió en el formulario de contacto." . "\n" . "Remitente: ". $_POST['name'] . "\n" . "Email de la persona: " . $_POST['email'] . "\n\n" . "Mensaje: " . $_POST['comment'];
		
		$host = "ssl://just50.justhost.com";
		$port = "465";
		$username = "no-reply+cbi.com.py";
		$password = "8nSaK1STShry";
		
		/* Acá enviamos lo que nos escribió la persona a info@cbi.com.py */
		
		$headers = array (	'From' => $from,
							'To' => $to1,
							'Subject' => $subject);
		$smtp = @Mail::factory('smtp',
		array (	'host' => $host,
				'port' => $port,
				'auth' => true,
				'username' => $username,
				'password' => $password));
		
		$mail = @$smtp->send($to1, $headers, $body);
		
		/*if (@PEAR::isError($mail)) {
			echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo("<p>Message 1 successfully sent!</p>");
		}*/
		
		/* Acá respondemos un mensaje automatizado a la persona */
		
		$headers2 = array (	'From' => $from,
							'To' => $to2,
							'Subject' => "Gracias por contactarnos.");
		$smtp2 = @Mail::factory('smtp',
		array (	'host' => $host,
				'port' => $port,
				'auth' => true,
				'username' => $username,
				'password' => $password));
		
		$mail2 = @$smtp2->send($to2, $headers2, "Gracias por su mensaje. En breve nos pondremos en contacto con usted.");
		
		/*if (@PEAR::isError($mail)) {
			echo("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo("<p>Message 2 successfully sent!</p>");
		}*/
		
		echo('<p id="gracias">Gracias por contactarnos!</p>');
				
    }
    ?>
    <script type='text/javascript' language='JavaScript'>
    function showform(theForm)
    {
        var txt = "Form name: " + theForm.name + "\r\n";
        txt += "theForm.elements.length = "+theForm.elements.length+"\r\n";
        for (var i=0; i<theForm.elements.length; i++)
            txt += theForm.elements[i].name + " = " + theForm.elements[i].value + "\r\n";
        //alert(txt);
    }
    function js_validate(theForm)
    {
        showform(theForm); // remove when you don't need it
        // Check for name
        var name = theForm.elements['name'].value;
        if (name == "")
        {
            alert ("You must enter your name");
            theForm.elements['name'].focus();
            return true;
        }
        // Check email address
        var email = theForm.elements['email'].value;
        if (echeck(email))
        {
            alert ("You must enter a valid email address");
            theForm.elements['email'].focus();
            return true;
        }
        // Check if subject is not blank
        var sbj = theForm.elements['subject'].value;
        if (sbj == "")
        {
            alert ("You must enter a subject");
            theForm.elements['subject'].focus();
            return true;
        }
        // Check if comment is not blank
        var comt = theForm.elements['comment'].value;
        if (comt == "")
        {
            alert ("You must enter a comment");
            theForm.elements['comment'].focus();
            return true;
        }
        theForm.submit();	// form is ok, we can submit it!
    }
    // === EMAIL VALIDATION =================================================================================================================================
    function echeck(str) 
    {
        var at="@"
        var dot="."
        var lat=str.indexOf(at)
        var lstr=str.length
        var ldot=str.indexOf(dot)
        if (str.indexOf(at)==-1)
           return(true);
        if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
            return(true);
        if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
            return(true);
        if (str.indexOf(at,(lat+1))!=-1)
            return(true);
        if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
            return(true);
        if (str.indexOf(dot,(lat+2))==-1)
            return(true);
        if (str.indexOf(" ")!=-1)
            return(true);
        return (false);					
    }
    </script>    
</head>
<body>
    <div id="upper_bar"></div>
    <div id="wrap">
        <div id="content">
            <div id="logo"><a class="transition-out" href="index.php"><img src="images/logo.png" width="160" height="80"/></a></div>
            <div id="main-section"><a class="transition b1" href="empresa.php"><img class="claro b1" src="images/boton-claro.png" width="196" height="143"/></a>
                <a class="transition b2" href="servicios.php"><img class="oscuro b2" src="images/boton-oscuro.png" width="170" height="115"/></a>
                <a class="transition b3" href="proyectos.php"><img class="claro b3" src="images/boton-claro.png" width="198" height="145"/></a>
                <a class="transition b4" href="clientes.php"><img class="oscuro b4" src="images/boton-oscuro.png" width="198" height="145"/></a>
                <a class="transition b5" href="contacto.php"><img class="claro b5" src="images/boton-contacto.png" width="198" height="145"/></a>
            </div>
            <div id="text-area" class="flexcroll">
            	<div id="info_contacto">
                    <h2>Datos de Contacto</h2>
                    <p>14 de Mayo 911 esq. Piribebuy</p>                   
                    
                    <p>Asunción, Paraguay<br>
                    + 595 21 493 869</p>
                    
                    <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=-25.285789,-57.640109&amp;num=1&amp;ie=UTF8&amp;t=m&amp;ll=-25.285757,-57.640114&amp;spn=0.005821,0.006437&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=-25.285789,-57.640109&amp;num=1&amp;ie=UTF8&amp;t=m&amp;ll=-25.285757,-57.640114&amp;spn=0.005821,0.006437&amp;z=16&amp;source=embed" target="_blank" style="text-align:left">Ver mapa grande</a></small>
                    
                </div>
                <div id="form_contacto">
					<?php
                        if (isset($_POST['submitted']))
                        {
                            echo (treat_submission());
                            unset ($_POST['submitted']);
                        }
                        else
                            echo (show_form());									
                    ?>
                </div>
                <div style="clear:both"></div>
            </div>
            <div id="social-icons">
                <a target="_blank" href="http://twitter.com/#!/CBI_py"><img class="twitter" src="images/icon_tw-black.png" width="32" height="32"/></a><a target="_blank" href="http://www.facebook.com/CBInformatica"><img class="facebook" src="images/icon_fb-black.png" width="32" height="32"/></a>
            </div>
            <div id="footer">
                <div id="footer_text">
                    <p>C.B. Solutions S.R.L - Todos los derechos reservados
                    <br>
                    <a href="contacto.php" >Contacto</a>
                    </p>    
                </div>            
            </div>
        </div>
    </div>
	<div id="lower_bar"></div>
</body>
</html>
