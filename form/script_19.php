<?PHP
 $nom=$_POST["nom"] ;
 $sujet=$_POST["sujet"] ;
 $message=$_POST["message"] ;

IF (mail("rayckarick@gmail.com",$sujet,$message,"From: $nom")) echo "Votre message a été dûment expédié." ;
 ELSE echo "Votre serveur SMTP est mal configuré... Ce message ne peut être expédié." ;
 ?>