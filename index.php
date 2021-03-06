<?php
    $text = "L'elioconcentrato o estratto di pomodoro, in siciliano astratto o strattu, è una salsa di pomodoro concentrata ottenuta con la tecnica della concentrazione attraverso l'esposizione solare.
    È una produzione tipica siciliana, come tale è stata ufficialmente inserita nella lista dei prodotti agroalimentari tradizionali italiani (P.A.T) del Ministero delle politiche agricole alimentari e forestali (Mipaaf).
    L'elioconcentrato è prodotto nelle province di Agrigento, Messina, Palermo, Ragusa e Trapani. Il primo passo della produzione consiste nella bollitura dei pomodori al fine di restringere il sugo. Ottenuta la passata di pomodoro, essa viene setacciata, e posta su ripiani di legno o piatti e vassoi di maiolica chiamati sperlonghe. La passata adagiata sui ripiani viene lasciata quindi sotto il sole coperta solo da un velo di tessuto per evitare che gli insetti vi finiscano sopra. Nelle preparazioni casalinghe, l'elioconcentrato viene messo tradizionalmente in vasi di terracotta, o più spesso in vasi di vetro. Il contenuto infine viene ricoperto con una foglia d'alloro e, prima di tappare, sigillato con uno strato d'olio.
    È un processo di concentrazione del sugo di pomodoro totalmente naturale che sfrutta il clima assolato della Sicilia. Durante il processo di essiccazione il sugo viene più volte girato e mescolato. Viene aggiunto il sale secondo necessità. Il processo di essiccazione assolutamente naturale e non aggressivo nei tempi e nelle temperature permette al prodotto di giungere ad un livello di qualità non raggiungibile dalle produzioni industriali. Prima dell'uso, come tutti i concentrati di pomodoro, deve essere diluito in acqua.";
    $badWordLower = strtolower($_GET['censura']);
    $badWordUpper = strtoupper($_GET['censura']);
    $badWordCapitalize = ucwords($_GET['censura']);
    $textCensored = str_replace(array($badWordLower, $badWordCapitalize, $badWordUpper), '<strong style="background-color: red; vertical-align: middle">***</strong>', $text);
    $textCensoredLeangth = strlen(str_replace('<strong style="background-color: red; vertical-align: middle">***</strong>', '', $textCensored));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form>
        <h1><?php echo str_replace(array($badWordLower, $badWordCapitalize, $badWordUpper), '<strong style="background-color: red; vertical-align: middle">***</strong>', 'Elioconcentrato'); ?></h1>
        <input type="text" id="censura" name="censura" placeholder="Termine da censurare">
        <button type="submit">Censura</button>
        <p>
            <?php echo $textCensored; ?>
        </p>
        <div>
            <strong>Lunghezza testo:</strong> <?php echo $textCensoredLeangth; ?>
        </div>
    </form>
</body>

</html>