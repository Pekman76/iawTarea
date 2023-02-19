<!DOCTYPE html>
<html>
    <head>
        <title>Acceso</title>
    </head>

    <body>

		<h1>Para acceder introduzca su usuario y contraseña.</h1>
   <?php
    
    session_start();
       if(!isset($_POST['user']) || !isset($_POST['passwd']))
       {
        $_SESSION['cont'] = 1;
        echo "<p>Va a realizar el intento ".$_SESSION['cont']." de 3.</p>";
        }
        else{
      
            if(($_POST['user'] == "birt" and $_POST['passwd'] == "birt") and ($_SESSION['cont'] < 3)){
                setcookie('user', $_POST['user']);
                setcookie('passwd', $_POST['passwd']);
                header('Location: principal.php');
           
            }
        elseif($_SESSION['cont'] >= 3){
            echo "<p>No le quedan más intentos.</p>";
            echo "<script language='javascript'>alert('Ha usado los 3 intentos permitidos. Cierre el navegador y vuelva a entrar para volver a intentarlo.');
        </script>";
        }

        else{
            echo "<p>Usuario o contraseña incorrectos.</p>";
            $_SESSION['cont'] ++;
            echo "<p>Va a realizar el intento  ".$_SESSION['cont']." de 3.</p>";
           
        }
        }
    
        ?>

	<form action="index.php" method="post">
			
		<strong>Usuario</strong>
			<input type="text" name="user"><br /><br />
				
		<strong>Contraseña</strong>
			<input type="password" name="passwd"><br /><br />
			
        <input type="submit" value="Enviar"><input type="reset" value="Borrar datos"><br />
				
	</form>
       
    </body>
</html> 

    