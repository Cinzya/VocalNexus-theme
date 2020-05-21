<!DOCTYPE html>
<html lang="de">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<div class="container">
    <header class="site-header">
        <h1><a href="">VocalNexus</a></h1>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'headerMenuLocation'
            ));
            ?>
        </nav>
        <div class="radio-button"><a href="https://japanradio.de/">Schalt ein!</a></div>
    </header>
    <main>
