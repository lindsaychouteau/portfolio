<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");

if (isset($_GET["nom"]) && isset($_GET["adresseMail"]) && isset($_GET["message"])) {
    if (($_GET["nom"] != "") && ($_GET["adresseMail"] != "") && ($_GET["message"] != "")) {
        echo ($_GET["nom"] . " " . $_GET["adresseMail"] . " " . $_GET["message"]);

        require(__DIR__ . "/src/PHPMailer.php");                                // Ajoute le fichier contenant le code de la classe PHPMailer
        require(__DIR__ . "/src/SMTP.php");                                     // le code de la classe SMTP
        require(__DIR__ . "/src/Exception.php");                                // le code de la classe Exception
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        // Configuration du serveur SMTP
        $mail->SMTPDebug = 0;                                                   // Active/désactive les messages de mise au point
        $mail->isSMTP();                                                        // Utilise le protocole SMTP
        $mail->Host = "smtp.gmail.com";                                         // Configure le nom du serveur SMTP
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;    // Active le cryptage sécurisé TLS
        $mail->Port = 465;                                                      // Configure le numéro de port
        $mail->SMTPAuth = true;                                                 // Active le mode authentification
        $mail->Username = "i2400974.univ@gmail.com";                            // Identifiant du compte SMTP
        $mail->Password = "wods izhk dmyw mbvc";                                // Mot de passe du compte SMTP
        // Destinataires
        $mail->setFrom("i2400974.univ@gmail.com", "Mailer");
        $mail->addAddress("lindsaychouteau@gmail.com", "Lindsay Chouteau");
        $mail->addAddress("lilycht06@gmail.com", "Lindsay Chouteau");              // Ajout du destinataire
        $mail->addAddress($_GET["adresseMail"], "destinataire du formulaire");   // Ajout du destinataire
        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = "Confirmation d'envoi du message";
        $mail->Body = "Bonjour " . $_GET["nom"] . ".<br>Votre message suivant : <br>" . $_GET["message"] . " <br>a bien été envoyé.<br>Je vous réponds au plus vite.<br>Cordialement<br>Lindsay Chouteau";
        $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
        if ($mail->send() != false) {
            echo (" Le message électronique a été transmis.\n");
        } else {
            echo (" Le message électronique n'a pas été transmis.\n");
            echo ("Mailer Error: " . $mail->ErrorInfo);
        }
?>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Étudiante en BUT multimédia où j'apprends le web design et le développement web, découvrez qui je suis, mes compétences ainsi que quelques uns de mes projets.">
    <link rel="shortcut icon" href="./icones/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="script.js" type="module"></script>
    <title>Portfolio Lindsay Chouteau</title>
</head>

<body>
    <header>
        <nav aria-label="Navigation principale">
            <ul class="menu-desktop">
                <li><a href="index.html">MOI</a></li>
                <li><a href="projets.php">MES PROJETS</a></li>
                <li><a href="contact.php">ME CONTACTER</a></li>
                <li><button id="toggleMode-desktop"></button></li>
            </ul>

            <ul class="menu-mobile">
                <li>
                    <button id="toggleMode-mobile"></button>
                </li>
                <li>
                    <a href="index.html">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1">
                                <path stroke-linejoin="round" d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z" />
                                <circle cx="12" cy="7" r="3" />
                            </g>
                        </svg>
                        <span>Moi</span>
                    </a>
                </li>
                <li>
                    <a href="projets.php">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4.616 21q-.691 0-1.153-.462T3 19.385V8.615q0-.69.463-1.152T4.615 7h4.27l2.55-2.55q.242-.242.565-.242t.566.242L15.116 7h4.269q.69 0 1.153.463T21 8.616v10.769q0 .69-.462 1.153T19.385 21zm0-1h14.769q.23 0 .423-.192t.192-.424V8.616q0-.231-.192-.424T19.385 8H4.615q-.23 0-.423.192T4 8.616v10.769q0 .23.192.423t.423.192m6.597-2.961l-1.427-1.725q-.131-.143-.314-.143q-.182 0-.313.162l-1.154 1.52q-.162.213-.05.43t.354.217h7.538q.243 0 .354-.217t-.03-.43l-2.02-2.713q-.13-.161-.323-.161q-.192 0-.323.162zM16.923 13q.471 0 .793-.322t.322-.793t-.322-.794t-.793-.322t-.793.322t-.322.793t.322.794t.793.322m-6.784-6h3.723L12 5.139zM4 20V8z" />
                        </svg>
                        <span>Mes projets</span>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4.616 19q-.691 0-1.153-.462T3 17.384V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zM12 12.116L4 6.885v10.5q0 .269.173.442t.443.173h14.769q.269 0 .442-.173t.173-.443v-10.5zM12 11l7.692-5H4.308zM4 6.885V6v11.385q0 .269.173.442t.443.173H4z" />
                        </svg>
                        <span>Me contacter</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><span>C</span>ONTACTEZ-MOI</h1>
            <p class="soustitre">Je réponds au plus vite !</p>

        <section id="contact">
            <form action="contact.php" method="get">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" minlength="2" maxlength="30" required autocomplete="name">
                </div>
                <div>
                    <label for="email">Mail</label>
                    <input type="email" id="email" name="adresseMail" required autocomplete="email">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="submit-btn" value="Envoyer">
                    <span class="sr-only">Envoyer</span>
                </button>
            </form>
        </section>
    </main>

    <footer>
        <p><a href="mailto:lindsaychouteau@gmail.com">lindsaychouteau@gmail.com</a></p>
        <p>© 2025 - Lindsay Chouteau - Portfolio étudiante MMI</p>
    </footer>
</body>

</html>