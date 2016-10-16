<?php
if(isset($_COOKIE["style"])) {
    $theme = $_COOKIE["style"];
} else {
    $theme = "white";
    setcookie("style", "white", time() + 365);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aaron Stockdill</title>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
        ?>
        <link rel="stylesheet" href="/css/master.css" media="screen">
        <link rel="stylesheet" href="/css/600.css" media="screen and (max-width: 600px)">
        <link rel="stylesheet" href="/css/print.css" media="print">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Passionate Computer Science BSc(Hons) student at the University of Canterbury. Particularly interested in Artificial Intelligence and Machine Learning.
"/>
    </head>
    <body>
<div class="welcome">
    <div class='left'>
        <h1>Aaron<br />Stockdill</h1>
    </div><div class='right first'>
        <nav>
            <a href="/bio/">
                <span lang="EN">About</span>
                <span lang="FR">Biographie</span>
            </a>

            <a href="/work/">
                <span lang="EN">Works</span>
                <span lang="FR">Ouvrages</span>
            </a>

            <a href="/contact/">
                <span lang="EN">Contact Details</span>
                <span lang="FR">Détails du Contact</span>
            </a>
            <a href="/AaronStockdill.pdf" target="_blank">Curriculum Vit&aelig;</a>
        </nav>
    </div>
    <div class="left">
        <p lang="EN">Honours Student at the University of Canterbury</p>
        <p lang="FR">Étudiant du Baccalauréat en Sciences (avec distinction)<br />à University of Canterbury</p>
    </div><div class="right">
        <span id='email-holder'><noscript>Email obfuscated. Please enable JavaScript.</noscript></span>
    </div>
</div>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "http://schema.org/Person",
  "givenName": "Aaron",
  "familyName": "Stockdill",
  "description": "Computer Science BSc(Hons) student at the University of Canterbury.",
  "email": "aaronstockdill@me.com",
  "gender": "http://schema.org/Male"
}
</script>
        <footer>
            <span class='selector help-button'>
                <a onclick="show_help()" class='active'>
                    <span>&nbsp;&nbsp;&nbsp;?</span>
                </a>
                <a onclick="show_help()">
                    <span>Help</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="white-button" class='theme-button active' onclick='switch_theme("white")'>
                    <span lang='EN'>light</span>
                    <span lang='FR'>blanc</span>
                </a>
                <a id="black-button" class='theme-button' onclick='switch_theme("black")'>
                    <span lang='EN'>dark</span>
                    <span lang='FR'>noir</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="EN-button" class='lang-button active' onclick='switch_language("EN")'>
                    EN
                </a>
                <a id="FR-button" class='lang-button' onclick='switch_language("FR")'>
                    FR
                </a>
            </span>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="/js/preferences.js" charset="utf-8"></script>
        <script src="/js/email.js" charset="utf-8"></script>
        <script src="/js/mousetrap.js" charset="utf-8"></script>
        <script src="/js/keybindings.js" charset="utf-8"></script>
        <?php
            if (strpos($_SERVER['SERVER_NAME'],
                       'aaron.stockdill.nz') !== false) {
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-79422930-1', 'auto');
            ga('send', 'pageview');
        </script>
        <?php
        }
        ?>
    </body>
</html>
