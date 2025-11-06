<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");

if (!isset($_GET["id"]) || $_GET["id"] == "" || $_GET["id"] < 1) {
    header('Location: ./onepage.php');
    exit;
}

$idRecherche = $_GET["id"];

$lecteur = new SplFileObject("private/details.csv", 'r');
$lecteur->setFlags(SplFileObject::READ_CSV);
$lecteur->setCsvControl(';', '"', '\\');

$nomProjet = $explications = $date = $contexte = $technologie = $lien = "";
$images = $pdfs = [];

foreach ($lecteur as $tab) {
    if ($tab && $tab[0] == $idRecherche) {
        $nomProjet = $tab[1];
        $explications = $tab[2];
        $date = $tab[3];
        $contexte = $tab[4];
        $technologie = $tab[5];
        $lien = $tab[6];
        $images = !empty($tab[7]) ? explode('|', $tab[7]) : [];
        $pdfs = !empty($tab[8]) ? explode('|', $tab[8]) : [];
        break;
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

    <main class="pagedetails">

        <h1><?= htmlspecialchars($nomProjet) ?></h1>

        <section class="details">

            <!-- Carousel uniquement si il y a des images -->
            <?php if (!empty($images)): ?>
                <div class="carousel-wrapper">
                    <button class="prev" aria-label="Image précédente">❮</button>
                    <div class="carousel-images">
                        <div class="slides">
                            <?php foreach ($images as $img): ?>
                                <img src="./images/projets/<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($img) ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <button class="next" aria-label="Image suivante">❯</button>
                </div>
            <?php endif; ?>

            <div class="informations">
                <?php if (!empty($explications)): ?>
                    <p><strong>Explications : </strong><?= htmlspecialchars($explications) ?></p>
                <?php endif; ?>

                <?php if (!empty($date)): ?>
                    <p><strong>Date : </strong><?= htmlspecialchars($date) ?></p>
                <?php endif; ?>

                <?php if (!empty($contexte)): ?>
                    <p><strong>Contexte de création : </strong><?= htmlspecialchars($contexte) ?></p>
                <?php endif; ?>

                <?php if (!empty($technologie)): ?>
                    <p><strong>Technologies utilisées : </strong><?= htmlspecialchars($technologie) ?></p>
                <?php endif; ?>

                <?php if (!empty($lien)): ?>
                    <p><a class="dossier" href="<?= htmlspecialchars($lien) ?>" target="_blank"><strong> 📃 Cliquez ici pour aller vers le projet</strong></a></p>
                <?php endif; ?>

                <?php if (!empty($pdfs)): ?>
                    <p><strong>Fichiers PDF : </strong></p>
                    <div class="pdf-buttons">
                        <?php foreach ($pdfs as $pdf): ?>
                            <?php $pdfName = pathinfo($pdf, PATHINFO_FILENAME); ?>
                            <a href="pdf/<?= htmlspecialchars($pdf) ?>" target="_blank"><?= htmlspecialchars($pdfName) ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>

            <a href="projets.php" class="retour">❮</a>

        </section>

    </main>


    <footer>
        <p><a href="mailto:lindsaychouteau@gmail.com">lindsaychouteau@gmail.com</a></p>
        <p>© 2025 - Lindsay Chouteau - Portfolio étudiante MMI</p>
    </footer>
</body>

</html>