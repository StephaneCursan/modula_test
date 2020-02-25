<!-- Breadcrumb management -->

<div class="row mx-0 headerBreadcrumb">

    <div class="col-lg col-md col-sm px-0">

        <ul class="pl-3">

            <li class="w-100 pt-3">

                <!-- Display of the Home icon -->

                <i class="fas fa-home"></i>

                <?php

                    /* The link to the active page is disabled */

                    if ($active_page == "accueil") {
                        echo "Accueil";
                    } else {
                        echo "<a href='index.php'>Accueil</a> > Contact";
                    }

                ?>

            </li>

        </ul>

    </div>

</div>