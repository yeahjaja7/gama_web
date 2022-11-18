<?php 

session_start();
session_destroy();
echo '
		    <script>
		    alert(".: HAS CERRADO LA SESIÓN CORRECTAMENTE :.");
		    window.location="../../index.php";
		    </script> ';
?>