<?php
    $destino="duvanriverar@gmail.com";
    $nombre=$_POST["nombre"];
     $correo=$_POST["correo"];
     $telefono=$_POST["telefono"];
      $asunto=$_POST["asunto"];
       $contenido=$_POST["contenido"];
       $todo= "Nombre: ".$nombre ."\nCorreo:" .$correo.  "\nTelefono:" .$telefono. "\nAsunto:" .$asunto. "\nMensaje:" .$contenido;
       mail($destino,$asunto,$todo);
       header("Location:index.html")
?>