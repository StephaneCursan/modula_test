<?php

    $active_page = "accueil";

    include("head.php");

    include("header.php");

    include("breadcrumb.php");

    include("menu.php");

?>

<main class="container mt-5 pt-5 px-5">

    <article class="mb-5 p-5 text-justify homeText">

        <div class="row">

            <div class="col-lg text-center">

                <h2 class="font-weight-bold text-uppercase">qui sommes-nous ?</h2>

            </div>

        </div>

        <p class="pt-5 homeText_alinea">
            L’Amicale des Anciens Guérilleros Espagnols en France — Forces Françaises de l’Intérieur (AAGEF-FFI) est
            une association — de droit français — d’anciens combattants espagnols <a id="footnote1" href="#note1"
            class="homeText_footnote">[1]</a>, homologuée par le ministère des Anciens combattants. Sa déclaration a été
            publiée au Journal Officiel n<sup class="homeText_exponentText">o</sup> 64 du 22 juillet 1976, page 3711. Son
            siège social est sis 27 rue Émile Cartailhac à Toulouse (Haute-Garonne).
        <p>

        <p class="mb-2">
            Elle fédère neuf sections départementales : Ariège, Aude, Gard-Lozère, Gironde, Haute-Garonne, Hautes-
            Pyrénées, Lot, Pyrénées-Atlantiques-Landes, Pyrénées- Orientales. L’Amicale de la Gironde a son siège à
            la Maison du Combattant, 97 rue de Saint-Genès à Bordeaux.
        </p>

        <p class="mb-2 homeText_alinea">
            La Résistance espagnole en France a été largement stimulée et vertébrée par la UNE, mouvement politique
            pluraliste, lancé en 1941. Geneviève Dreyfus-Armand note avec raison : « <span class="homeText_italicText">l’UNE,
            structure de large alliance, rassemble non seulement des communistes, mais aussi des Espagnols d’autres
            horizons politiques — socialistes,républicains ou anarchistes — que la dispersion de leurs organisations
            et le silence de leurs dirigeants poussent à rejoindre la seule structure de lutte organisée contre le
            nazisme.</span> » <a id="footnote2" href="#note2" class="homeText_footnote">[2]</a>
        </p>

        <p class="mb-2">
            Fin 1941, début 1942, les comités locaux de la UNE, au fur et à mesure qu’ils se constituent, sont
            appelés à désigner des responsables pour former des groupes de guérilleros. Il s’agit alors de récolter
            armes et explosifs, organiser des sabotages, plus tard des attentats. En avril 1942, des responsables
            guérilleros de plusieurs départements se réunissent en Ariège, dans l’Aude, la Haute-Garonne, pour former
            le noyau du <span class="homeText_italicText"> XIV Cuerpo de Guerrilleros Españoles en Francia </span><a id="footnote3"
            href="#note3" class="homeText_footnote">[3]</a> qui va devenir le bras armé de la UNE en zone sud — appelée zone
            libre jusqu’au 11 novembre. En décembre 1943, l’état-major du XIVe Corps contrôle les unités espagnoles
            d’une trentaine de départements.
        </p>

        <p class="mb-2">
            Début mai 1944, le XIV<sup class="homeText_exponentText">e</sup> Corps prend le nom de <span class="homeText_italicText"> 
            Agrupación de Guerrilleros Españoles (AGE) </span><a id="footnote4" href="#note4" class="homeText_footnote">[4]</a>. 
            Elle est alors directement rattachée aux FFI. Comme FFI, les guérilleros participent partout très activement aux
            combats de la Libération.
        </p>

        <p class="mb-5 pb-5">
            En 1945, l’Amicale des Anciens FFI et Résistants Espagnols est fondée à Toulouse, présidée par Luis
            Fernández, général FFI. Elle est, hélas, honteusement interdite en 1950 et ses dirigeants pourchassés, à
            la grande satisfaction du dictateur Franco et de son pouvoir fasciste <a id="footnote5" href="#note5"
            class="homeText_footnote">[5]</a>. Il faudra attendre 1976 pour qu’elle puisse se reconstituer sous son nom actuel.
        </p>

        <div class="mb-5 homeText_footnotesSection">

            <div class="w-25 pt-2 border-top border-dark"></div>
            <p id="note1" class="mb-1">
                [1].<a href="#footnote1" class="homeText_footnote">↑</a> Affiliée à l’ANACR (Association Nationale des Anciens
                Combattants de la Résistance) et, en raison de cette appartenance, à l’UFAC (Union Française des
                Anciens Combattants et de victimes de guerre), la FIR (Fédération Internationale des Résistants), et
                la FMAC (Fédération Mondiale des Anciens Combattants)
            </p>
            <p id="note2" class="mb-1">
                [2].<a href="#footnote2" class="homeText_footnote">↑</a> Geneviève Dreyfus-Armand, <span class="homeText_italicText">
                L’Exil des Républicains espagnols en France : De la Guerre civile à la mort de Franco</span>span>,
                1999, Paris, Albin Michel, p. 163
            </p>
            <p id="note3" class="mb-1">
                [3].<a href="#footnote3" class="homeText_footnote">↑</a><span class="homeText_italicText"> XIV<sup class="homeText_exponentText">e
                </sup> Corps de Guérilleros Espagnols en France</span>
            </p>
            <p id="note4" class="mb-1">
                [4].<a href="#footnote4" class="homeText_footnote">↑</a><span class="homeText_italicText"> Groupement de Guérilleros
                Espagnols</span>
            </p>
            <p id="note5">
                [5].<a href="#footnote5" class="homeText_footnote">↑</a>Terme qu’il chercha à minimiser en le substituant par
                « franquisme »
            </p>

        </div>

        <!--- Carousel management -->

        <div id="diaporama" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="row mb-5">

                <div class="col-lg text-center">

                    <h2 class="font-weight-bold text-uppercase formTitle">ouvrons l'album photos...</h2>

                </div>

            </div>

            <!-- Display of indicators -->

            <ol class="carousel-indicators">

                <li data-target="#diaporama" data-slide-to="0" class="active"></li>
                <li data-target="#diaporama" data-slide-to="1"></li>
                <li data-target="#diaporama" data-slide-to="2"></li>

            </ol>

            <!-- Display of images -->

            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img src="images/hommage_annuel_Prayols.jpg" class="d-block w-100" alt="Hommage aux guérilleros espagnols">

                    <!-- Display of image caption -->

                    <div class="carousel-caption pt-4 pt-md-3 d-none d-md-block">
                        <h5>Monument national de Prayols (Ariège)</h5>
                        <p>Hommage aux guérilleros espagnols, le 4 juin 2016</p>
                    </div>

                </div>

                <div class="carousel-item">

                    <img src="images/monument_morts_PSanchez.jpg" class="d-block w-100" alt="Dévoilement du nom de Pablo Sánchez">

                    <!-- Display of an image caption -->

                    <div class="carousel-caption pt-4 pt-md-3 d-none d-md-block">
                        <h5>Monument aux morts de la ville de Bordeaux</h5>
                        <p>Dévoilement du nom de Pablo Sánchez, le 3 mai 2018</p>
                    </div>

                </div>

                <div class="carousel-item">

                    <img src="images/hommage_policiers_Cenon.jpg" class="d-block w-100" alt="Inauguration d'une stèle en hommage
                    aux policiers morts pour la France">

                    <!-- Display of an image caption -->

                    <div class="carousel-caption pt-4 pt-md-3 d-none d-md-block">
                        <h5>Commissariat de police de Cenon</h5>
                        <p>Inauguration d'une stèle en hommage aux policiers morts pour la France, le 12 décembre 2018.</p>
                    </div>

                </div>

            </div>

            <!-- Management of images scroll buttons -->

            <a class="carousel-control-prev" href="#diaporama" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>

            <a class="carousel-control-next" href="#diaporama" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>

        </div>

    </article>

</main>

<?php include("footer.php"); ?>