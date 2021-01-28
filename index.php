<?php 
// Creare una variabile con un paragrafo di testo.
// Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
$text = "L'assioma di Murphy, in senso stretto e in questa formulazione presunta originale, riassume intuitivamente un fatto statistico-matematico noto a chiunque abbia a che fare, ad esempio, con la prevenzione e la sicurezza: per quanto sia improbabile che si verifichi un certo evento, entro un numero elevato di occasioni (concettualmente tendente all'infinito) questo finirà molto probabilmente per verificarsi. In effetti la stessa teoria della probabilità afferma che il fatto che un evento sia improbabile non vuol dire che esso non possa verificarsi già nel corso dei primi tentativi, e che non possa poi ripetersi a distanza di breve tempo (legge di mancanza di memoria della probabilità).
Tuttavia il senso che assumono le Leggi di Murphy successivamente diffuse, del tutto ironico e paradossale, è diverso: in queste si afferma infatti che l'evento considerato inizialmente improbabile, alla prova dei fatti si verifica spesso o addirittura sempre, ovverosia al primo tentativo o esperimento. In questo si riassume l'effetto ironico delle frasi, ove quasi sempre l'evento in oggetto è considerato inizialmente improbabile proprio perché è un evento spiacevole e sgradito dal quale si tenta di proteggersi, ma che nei fatti si verifica nonostante la opposta valutazione iniziale che era sbagliata ma apparentemente non tale (per ragioni di soggettività della valutazione).
Pertanto queste leggi sono affermazioni caricaturali sulla realtà, che distorcono tanto la reale frequenza o probabilità di un fatto (dichiarandolo più probabile di quanto non sia veramente), tanto le valutazioni preventive operabili sul fatto stesso (confondendo la sgradevolezza e l'indesiderabilità di un fatto con la sua probabilità, che viene presunta essere alta in modo del tutto ingiustificato). ";

$badword = $_GET["badword"];

$newText = str_replace($badword, '<strong>***</strong>', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <style>strong{color: red;}</style>
</head>
<body style="background: #f7f7f7; font-family: Arial;">
    <div class="container" style="width: 80%; margin: auto;">
        <h1>La legge di Murphy</h1>
        <p style="line-height: 1.5; text-align: justify;"><?php echo $text;?></p>
        
        <form action="index.php">
            <input name="badword" type="text">
            <input value="Send badword" type="submit">
        </form>
        
        <h3>La badword "<?php echo $badword;?>" viene sostituita con: <strong>***</strong></h3>
        <p style="line-height: 1.5; text-align: justify;"><?php echo $newText;?></p>

    </div>
</body>
</html>

