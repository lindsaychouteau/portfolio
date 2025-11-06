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
        <h1><span>M</span>ES PROJETS</h1>
        <p class="soustitre">De nouveaux sont à venir...</p>

        <section class="projects"></section>
        <div class="projects-grid">

            <article class="project">
                <a href="details.php?id=1"><img src="images/econest.webp" alt="Projet EcoNest"></a>
                <div class="text-content">
                    <a href="details.php?id=1">
                        <h3>EcoNest</h3>
                    </a>
                    <p class="description">Concevoir un produit et sa communication. Travail en équipe de 3 autour de la création et la promotion d’un produit fictif écologique.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=2"><img src="images/artexplore.webp" alt="Projet ArtExplore"></a>
                <div class="text-content">
                    <a href="details.php?id=2">
                        <h3>ArtExplore</h3>
                    </a>
                    <p class="description">Travail de marketing et de communication autour de la création d'une application qui recense les lieux liés à l'art en France.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=3"><img src="images/geeklife.webp" alt="Projet GeekLife"></a>
                <div class="text-content">
                    <a href="details.php?id=3">
                        <h3>GeekLife (Projet fictif)</h3>
                    </a>
                    <p class="description">Création d'une affiche promotionnelle fictive pour un festival autour de l'univers geek.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=4"><img src="images/sonarium.webp" alt="Projet Sonarium"></a>
                <div class="text-content">
                    <a href="details.php?id=4">
                        <h3>Sonarium</h3>
                    </a>
                    <p class="description">Conception d'un site de jeu ludique autour des sons.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=5"><img src="images/teazen.webp" alt="Projet Teazen"></a>
                <div class="text-content">
                    <a href="details.php?id=5">
                        <h3>Teazen</h3>
                    </a>
                    <p class="description">Création d'une marque de boisson.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=6"><img src="images/peanuts.webp" alt="Projet Peanuts"></a>
                <div class="text-content">
                    <a href="details.php?id=6">
                        <h3>Peanuts</h3>
                    </a>
                    <p class="description">Création d'une affiche et d'un flyer autour de l'univers des Peanuts.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=7"><img src="images/chaumont.webp" alt="Projet Chaumont"></a>
                <div class="text-content">
                    <a href="details.php?id=7">
                        <h3>Chaumont</h3>
                    </a>
                    <p class="description">Réalisation d'un flyer sur le domaine du Chaumont.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=8"><img src="images/mascotte.webp" alt="Projet Mascotte"></a>
                <div class="text-content">
                    <a href="details.php?id=8">
                        <h3>Mascotte</h3>
                    </a>
                    <p class="description">Création d'une mascotte à partir de mes qualités et d'un animal totem.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=9"><img src="images/frontieres.webp" alt="Projet Aux Frontières du Réel"></a>
                <div class="text-content">
                    <a href="details.php?id=9">
                        <h3>Aux Frontières du Réel</h3>
                    </a>
                    <p class="description">Réalisation d'une vidéo promotionnelle de 30s pour une exposition d'art fictive.</p>
                </div>
            </article>

            <article class="project">
                <a href="details.php?id=10"><img src="images/gamop.webp" alt="Projet Gamop"></a>
                <div class="text-content">
                    <a href="details.php?id=10">
                        <h3>Gamop</h3>
                    </a>
                    <p class="description">Écriture d'un cahier des charges pour la création d'une application de vente de jeux vidéo.</p>
                </div>
            </article>

        </div>      

        <button class="crea"><a class="crealien" href="projetsperso.php">Découvrez aussi mes projets personnels...</a></button>
        </section>

    </main>

    <footer>
        <p><a href="mailto:lindsaychouteau@gmail.com">lindsaychouteau@gmail.com</a></p>
        <p>© 2025 - Lindsay Chouteau - Portfolio étudiante MMI</p>
    </footer>
</body>

</html>