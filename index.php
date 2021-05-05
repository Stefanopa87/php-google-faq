<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> GOOGLE FAQ </title>
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- vue -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="js/script.js"></script>

    <style>
        .box {
            color:red;
        }

        hr {
            background-color: black;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div>
                <h1><i class="fab fa-google" style="color: red;"></i> <span style="font-size: x-large;">Privacy e
                        termini</span></h1>
            </div>
        </div>
        <div class="row">
            <div>
                <h5 style="color:blue;">Domande Frequenti</h5>
                <hr style="background-color:blue; height: 3px">
            </div>
        </div>
        <hr>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="m-auto">



                    <?php                   

                       $db =[
                            [
                            'title' => "Come state implementando la recente decisione della Corte di giustizia
                            dell'Unione europea (CGUE) relativa al diritto all'oblio?",

                            'paragraphs' => [ "La recente decisione della Corte di giustizia dell'Unione europea ha
                            profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni
                            utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati
                            relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i
                            risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o
                            eccessivi.",
                            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato
                            incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo
                            valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo
                            a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le
                            informazioni.",
                            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una
                            risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il
                            tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto
                            tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono
                            informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un
                            interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad
                            esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua
                            condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto).",
                            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati
                            e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE
                            rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le
                            sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e
                            ci stiamo adoperando per predisporre una procedura conforme alla legge.",
                            "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati
                            potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei
                            dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei
                            nomi, non soltanto le pagine che sono state soggette a una rimozione."]
                            ],
                           [
                           'title' => "Perché il mio account è associato a un paese?",

                           'paragraphs' => [ "Il tuo account è associato a un paese (o territorio) nei Termini di
                           servizio per poter stabilire due cose:",
                           "La società consociata Google che offre i servizi, tratta le tue informazioni ed è
                           responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i
                           propri servizi per i consumatori tramite una delle due società seguenti:
                           Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi
                           dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
                           Google LLC, con sede negli Stati Uniti, per il resto del mondo.
                           La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi
                           locali.",
                           "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla
                           società consociata che li offre o dal paese a cui è associato il tuo account."]
                           ],
                           [
                           'title' => "Stabilire il paese associato al tuo account",

                           'paragraphs' => [ "Quando crei un nuovo Account Google, lo associamo a un paese in base a
                           dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il
                           paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso
                           più tempo nell'ultimo anno.",
                           "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti
                           trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione
                           del paese.",
                           "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo
                           potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi,
                           l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure
                           la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato
                           al tuo account sia sbagliato."]
                           ],
                           [
                           'title' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di
                           Google?",

                           'paragraphs' => [ "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente
                           disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai
                           siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i
                           contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del
                           sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se,
                           ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di
                           determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic
                           qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
                           l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di
                           Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra
                           pagina di assistenza per avere ulteriori informazioni."]
                           ],
                           [
                           'title' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca
                           vengono inviate ai siti web?",

                           'paragraphs' => [ "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google,
                           il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo
                           Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta,
                           l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai
                           inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella
                           maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL
                           referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno
                           diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o
                           le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google
                           Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero
                           ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un
                           annuncio."]
                           ],
                           
                        ];

                    //    foreach ($db as $faqs) {
                    //         foreach ($faqs as $key => $value) {

                    //             if ($key == 'title'){
                    //                 echo "<h1>" .$value. "</h1>";
                    //             }
                                    
                    //             if($key == 'paragraphs'){
                    //                 foreach ($value as $key => $paragraphs) {
                    //                     echo "<p>" . $paragraphs . "</p>";
                    //                 }
                    //             }
                    //         }
                    //    }

                    foreach ($db as $value) {
                        
                        echo "<h2>" .$value['title']. "</h2>" ;

                        $paragraphs = $value['paragraphs'];

                        foreach ($paragraphs as $paragraph) {

                            echo "<p>" .$paragraph. "</p>" ;                           
                        }  

                        echo "<hr>";
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</body>

</html>