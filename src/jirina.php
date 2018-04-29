<?php
mb_internal_encoding("UTF-8");
$hlaska = '';
if (isset($_GET['uspech']))
        $hlaska = 'Email byl ĂşspÄ›ĹˇnÄ› odeslĂˇn, brzy VĂˇm odpovĂ­m. JiĹ™ina.';
if ($_POST)
{ 
    if (isset($_POST['jmeno'])&& $_POST['jmeno']&&
            isset($_POST['email'])&& $_POST['email']&&
            isset($_POST['zprava'])&& $_POST['zprava']&&
            isset($_POST['rok'])&& $_POST['rok'] == date('Y'))
    {  
$hlavicka = 'From:' . $_POST['email'];
$hlavicka .= "\nMIME-Version: 1.0\n";
$hlavicka .="Content-Type: text/html; charset=\"utf-8\"\n";
$adresa = 'jirina.trojankova@seznam.cz';
$predmet = 'NovĂˇ zprĂˇva z mailformu Jirina';
$uspech = mb_send_mail($adresa, $predmet, $_POST['zprava'], $hlavicka);
if ($uspech)
{
        
        header('Location: index.php?stranka=kontakt&uspech=ano');
        exit;

}
else

    $hlaska = 'Email se nepodaĹ™ilo odeslat. Zkontrolujte adresu.';
    }
else 
    
    $hlaska = 'FormulĂˇĹ™ nenĂ­ sprĂˇvnÄ› vyplnÄ›nĂ˝!'   ; 

}

?>


<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css.css" type="text/css" />
        <title>Dovednosti</title> 
    <body>
       
       <p>MĹŻĹľete mÄ› kontaktovat pomocĂ­ formulĂˇĹ™e:</p>

       <?php
           if ($hlaska)
                echo('<p><b>' . htmlspecialchars($hlaska) . '</b></p>');
           $jmeno = (isset($_POST['jmeno'])) ? $_POST['jmeno'] : '';
           $email = (isset($_POST['email'])) ? $_POST['email'] : '';
           $zprava = (isset($_POST['zprava'])) ? $_POST['zprava'] : '';
           ?>
       <form method="POST">
           <table>
               <tr>
                   <td>VaĹˇe jmĂ©no</td>
                   <td><input name="jmeno" type="text" value="<?= htmlspecialchars($jmeno) ?>" /></td>
                   
               </tr>
               <tr>
                   <td>VĂˇĹˇ e-mail</td>
                   <td><input name="email" type="email" value="<?=htmlspecialchars($email) ?>" /></td>
               </tr>
                <tr>
                   <td>AktuĂˇlnĂ­ rok</td>
                   <td><input name="rok" type="number" /></td>
               </tr>
           </table>
           <textarea name="zprava"><?= htmlspecialchars($zprava) ?></textarea><br />
           
           <input type="submit" value="Odeslat" />
           
       </form>
           <p>Tento formulĂˇĹ™ jsem vytvoĹ™ila v PHP. S podporou ITnetwork.cz.</p>
    </body>
</html>
