<!-- Horizontal menu management -->

<nav class="bg-dark">

    <ul class="nav pl-3 headerMenu">

        <li class="nav-item py-2 pr-2">

            <?php

                /* The link to the active page is disabled */

                if ($active_page == "accueil") {
                    echo "Accueil";
                } else {
                    echo "<a href='index.php'>Accueil</a>";
                }

            ?>

        </li>

        <li class="nav-item py-2 pl-2">

            <?php

                /* The link to the active page is disabled */

                if ($active_page == "contact") {
                    echo "Contact";
                } else {
                    echo "<a href='contact.php'>Contact</a>";
                }

            ?>

        </li>

    </ul>

</nav>