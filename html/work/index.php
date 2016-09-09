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
        <title>Work by Aaron Stockdill</title>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
        ?>
        <link rel="stylesheet" href="/css/master.css" media="screen">
        <link rel="stylesheet" href="/css/600.css" media="screen and (max-width: 600px)">
        <link rel="stylesheet" href="/css/print.css" media="print">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A collection of work that I have made.
"/>
    </head>
    <body>

<?php
date_default_timezone_set('Pacific/Auckland');
$rootdir = realpath(dirname(__FILE__));
$filedir = $rootdir."/../../dynamic/";
define('FILE_DIR', $filedir);

function list_files($type, $display) {
    $files = scandir(FILE_DIR);
    $count = 0;
    foreach ($files as $f) {
        if ($f[0] == ".") {
            // pass
        } else {
            $parts = explode(".", $f);
            $title = $parts[0];
            $date = $parts[1];
            $extension = pathinfo($f, PATHINFO_EXTENSION);
            if ($extension == $type) {
                $count += 1;
                echo $display($f);
            }
        }
    }
    if ($count == 0) {
        echo "<p>There is no content yet.</p>";
    }
}

function parsebib($filename) {
    $bibtex = file_get_contents(FILE_DIR."/".$filename);
    $bibjson = preg_replace("/(\w+)\s*=\s*\{/", "\"$1\": \"", $bibtex);
    $bibjson = preg_replace("/\}(?=\s*[,\}])/", "\"", $bibjson);
    $bibjson = preg_replace("/@(\w+)\s*\{([^,]*)/", "{\"$1\": \"$2\"", $bibjson, 1);
    $bibjson = preg_replace("/,\}/", "}", $bibjson, 1);
    $bibobj = json_decode($bibjson);
    return $bibobj;
}
?>

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
        <a href='/contact/'>
            <span lang="EN">Contact Details</span>
            <span lang="FR">Détails du Contact</span>
        </a>
        <a href="/AaronStockdill.pdf" target="_blank">Curriculum Vit&aelig;</a>
    </nav>

    <!-- <h1 lang="EN">Work</h1> -->
    <!-- <h1 lang="FR">Ouvrage</h1> -->
    <ul class='submenu'>
        <li><a href="#Publications">Publications</a></li>
        <li><a href="#Writing">Writing</a></li>
        <li><a href="#Talks">Talks</a></li>
        <li><a href="#GitHub">GitHub</a></li>
    </ul>

    <p lang="FR">
        Ce contenu ne sont pas disponibles en français.
    </p>

    <h1 id="Publications">Publications</h1>
<?php
list_files("bib", function ($f) {
    $fname = basename($f, ".bib");
    $details = parsebib($fname.".bib");
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/dynamic.php?id=$fname&amp;type=pdf'>";
    $result .= "<span class='authors'>".$details->{"Author"}."</span>. ";
    $result .= "<span class='title'>\"".$details->{"Title"}.".\"</span> ";
    $result .= "<span class='journal'>".$details->{"Journal"}.".</span> ";
    $result .= "<span class='date'>".$details->{"Month"}." ".$details->{"Year"}.".</span>";
    $result .= "</a>";
    $result .= "<a class='bibtex' href='/work/dynamic.php?id=$fname&amp;type=bib'>BibTeX</a></div>";
    return $result;
});
?>

    <h1 id="Writing">Writing</h1>
<?php
list_files("md", function ($f) {
    $parts = explode(".", $f);
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/dynamic.php?id=$parts[0].$parts[1]&amp;type=md'>".$parts[0]."</a>";
    $result .= "<span class='date'>".$parts[1]."</span></div>";
    return $result;
});
?>

    <h1 id="Talks">Talks</h1>
<?php
list_files("talk", function ($f) {
    $parts = explode(".", $f);
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/dynamic.php?id=$parts[0].$parts[1]&amp;type=talk'>".$parts[0]."</a>";
    $result .= "<span class='date'>".$parts[1]."</span></div>";
    return $result;
});
?>

<h1 id="GitHub">GitHub</h1>
<p>I infrequently put projects on GitHub, but you are welcome to view what is available there: <a href='https://github.com/aaronstockdill'> Aaron Stockdill on GitHub</a>.</p>

</div>

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
