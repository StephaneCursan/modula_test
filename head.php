<!DOCTYPE html>

<html lang="fr">

    <head>

        <!-- Character encoding for the HTML document -->
        <meta charset="UTF-8">
        <!-- Gives the browser instructions on how to control the page's dimensions and scaling -->
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
        <!-- Defines which Internet Explorer version the webpage should be rendered as -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Title of the webpage -->
        <title>

            <?php

                if ($active_page == "accueil") {
                    echo "L'AAGEF-FFI de la Gironde | Les Résistants espagnols en Gironde 1939-1945";
                } else {
                    echo "Contact | L'AAGEF-FFI de la Gironde";
                }

            ?>

        </title>

        <!-- Favicon management -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="asset('assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="454545">
        <meta name="msapplication-TileColor" content="#9f00a7">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body class="bg-light">