<!DOCTYPE html>
<html>
<body>

Ciao  <?php echo $_POST["nome_proprio"]; ?><br>
Il tuo indirizzo mail è: <?php echo $_POST["indirizzo_mail"]; ?><br>
Gli sport scelti sono: <?php 
                            if(isset($_POST["Calcio_name"]) == TRUE) 
                            {
                                if($_POST["Calcio_name"] == 1)
                                {
                                     echo "Calcio ";
                                }
                            }
                            if(isset($_POST["Nuoto_name"]) == TRUE)
                            {
                                if($_POST["Nuoto_name"] == 1)
                                {
                                    echo "Nuoto"; 
                                }
                            }
                        ?>
                        <br>
La scelta effettuata da menù a tendina è: <?php echo $_POST["MenuScelta"]; ?>
</body>
</html> 