<?php
include_once 'Parsedown.php';

$Parsedown = new Parsedown();
$rootdir = realpath(dirname(__FILE__));
$filedir = $rootdir."/../../dynamic/";

if(!isset($_GET['id']) || !isset($_GET['type'])) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    include($rootdir."/../404.php");
}

$id = $_GET['id'];
$type = $_GET['type'];

$filename = $filedir.$id.".".$type;
if ($type == 'md' || $type == 'talk') {
    $backtarget = ($type == 'md') ? "Writing" : "Talks";
?>

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
        <meta name="description" content=""/>
    </head>
    <body>
<div class='container'>
    <nav>
        <a href='/'>
            <span lang="EN">Home</span>
            <span lang="FR">Accueil</span>
        </a>
        <a href='/bio/'>
            <span lang="EN">About</span>
            <span lang="FR">Biographie</span>
        </a>
        <a href="/work/">
            <span lang="EN">Works</span>
            <span lang="FR">Ouvrages</span>
        </a>
        <a href='/contact/'>
            <span lang="EN">Contact Details</span>
            <span lang="FR">Détails du Contact</span>
        </a>
        <a href="/AaronStockdill.pdf" target="_blank">Curriculum Vit&aelig;</a>
    </nav>
    <a href='/work/#<?php echo $backtarget; ?>' class='back-to-works'>
        <span lang='EN'>Back to Works</span>
        <span lang='FR'>Retour à Ouvrages</span>
    </a>
<div class='writing'>
<?php
$mdfile = fopen($filename, "r") or die("Unable to open file!");
$markdown = fread($mdfile, filesize($filename));
fclose($mdfile);
echo $Parsedown->text($markdown);
?>
</div>
</div>
<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_SVG'></script>
        <footer>
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
            <!--<span class='separator'></span>
            <span class='selector'>
                <a id="EN-button" class='lang-button active' onclick='switch_language("EN")'>
                    EN
                </a>
                <a id="FR-button" class='lang-button' onclick='switch_language("FR")'>
                    FR
                </a>
            </span>-->
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="/js/preferences.js" charset="utf-8"></script>
        <script src="/js/email.js" charset="utf-8"></script>
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
<?php
} else if ($type == 'pdf') {
    header("Content-type:application/pdf");
    readfile($filename);
} else if ($type == 'jpg' || $type == 'png') {
    header("Content-type:image/".$type);
    readfile($filename);
} else if ($type == 'bib') {
    header('Content-disposition: attachment; filename='.basename($filename));
    header('Content-type: application/x-bibtex');
    readfile($filename);
} else {
    $mime = mime_content_type($filename);
    header('Content-disposition: attachment; filename='.basename($filename));
    header('Content-type: '.$mime);
    readfile($filename);
}
?>
