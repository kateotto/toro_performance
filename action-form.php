<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $check = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

?>

<html>
<head><title>FORMULARZ</title></head>
<body>
    <?php 
         if(preg_match($check, $email))
         {
         echo 'Podano prawidłowy adres e-mail'; 
         ?>
         <br/>  <br/>
         <a>NAME: </a>
         <?php 
         
            if($name == "") echo "Błąd! Brak danych!";
            else echo $name;
         ?>
         <br/><br/>
         <a>EMAIL: </a>
          <?php
          
          echo $email;
          ?>
           <br/><br/>
         <a>MESSAGE: </a>
          <?php
          if ($msg == "") echo "Bład! Wiadomość nie może być pusta!";
          else echo $msg;
          
          
         }
    else echo 'Adres e-mail nieprawidłowy';
    
    
    ?>
</body>
</html>
