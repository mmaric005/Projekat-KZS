<?php
//Kreirana je forma koja je iz prvog zadatka,čiji se podaci čuvaju u JSON formatu
if(isset($_POST['submit'])){
    $file = "data.json";
    $arr = array(
        'ime'      => $_POST['ime'],
        'email'    => $_POST['email'],
        'poruka'   => $_POST['poruka'],
        
        
    );
    $json_string = json_encode($arr);
    file_put_contents($file,$json_string);
    echo $json_string;
}
?>
<!doctype html> 
<html>
<head>
</head>
<body>
<div id="kontakt" class="kontakt" style="">
            <h1>Kontaktirajte nas</h1>
            <hr align='left'>
            <form name="form1" id="form1" method="post" action=""> 
        
            <label for="ime">Vaše ime i prezime</label>
            <input required id="ime" type="text" name="ime" placeholder="Ime i prezime" />

            
            <label for="email" >Vaš e-mail:</label>
            <input required id="email" type="email" name="email" placeholder="vašmejl@mejl.com" />
            
            <label for="poruka">Vaša poruka, pitanje ili sugestija:</label>
            <textarea required id="poruka" name= "poruka" placeholder="Poruka" rows="4"></textarea>
            <p style="text-align: center;">
                <input type="submit" name="submit" id="submit" value="Pošalji">
</p>
            </form>
        </div>
</body>
</html>