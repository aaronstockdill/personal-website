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
        <!--<link rel="stylesheet" href="/css/master.css" media="screen">-->
        <style>
            *{box-sizing:border-box}.hide{display:none!important}body,html{font-family:-apple-system,Helvetica,Arial,sans-serif;min-height:100%;height:100%;font-weight:300;margin:0;padding:0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease}.borked-email{direction:rtl;unicode-bidi:bidi-override;text-align:left}.welcome{position:relative;top:50%;-webkit-transform:translateY(-80%);transform:translateY(-80%)}.welcome .left,.welcome .right{display:inline-block;position:relative;margin:0 auto;padding-bottom:1rem;vertical-align:top}.welcome .left{text-align:right;padding-right:1rem;padding-top:0;width:55%}.welcome .right{border-left-width:1px;border-left-style:solid;padding-top:0;padding-left:1rem;width:45%}.welcome .right.first{top:6rem}.welcome h1{font-size:5rem;margin:0;margin-top:5rem;line-height:5rem}.welcome p{margin:0;padding-bottom:0}.welcome .email{padding:0 .25rem;display:block;width:12rem;text-decoration:none;-webkit-transition:color .2s ease;transition:color .2s ease}.welcome nav{position:relative;height:10rem}.welcome nav a{width:12rem;display:block;text-decoration:none;padding:.25rem;-webkit-transition:color .2s ease;transition:color .2s ease}@media (max-height:500px){.welcome{-webkit-transform:none;transform:none;top:0}}.container{max-width:700px;width:100%;margin:0 auto;padding:2rem;line-height:1.3em}.container h1{font-size:4rem;line-height:.75em;margin-top:4rem;margin-bottom:1.5rem}.container nav{height:1.3rem;overflow:hidden;font-size:.85rem}.container nav:hover{width:100%;-webkit-transition:all 0s ease .75s;transition:all 0s ease .75s}.container nav a{text-decoration:none;padding-right:1rem;-webkit-transition:color .2s ease;transition:color .2s ease}.container hr{border:none;height:2rem}.container h2{font-weight:400;margin-top:2rem;margin-bottom:.2rem;line-height:1em}.container h2.award-year{margin-bottom:-1em}.container p{margin-top:.5rem}.container img{display:block;margin:auto;max-width:100%}.container .award{padding-left:5rem}.container .award h3{margin-top:0;margin-bottom:.3rem;font-weight:400}.container .award p{margin-top:0;margin-bottom:1.5rem}.container .contact-table{margin-bottom:2rem}.container .contact-table .label,.container .contact-table .value{display:inline-block;padding:.2rem}.container .contact-table .label{width:5rem;text-align:right;padding-right:1rem;font-weight:400}.container .back-to-works{display:inline-block;padding-top:1rem;text-decoration:none}.container .submenu{height:1.3rem;list-style:none;margin:1rem 0 0 0;padding:0}.container .submenu li{display:inline-block}.container .submenu a{text-decoration:none;padding-right:1rem;-webkit-transition:color .2s ease;transition:color .2s ease;font-size:.85rem}.container .dynamic-link{margin:.3rem auto 1.5rem auto}.container .dynamic-link:first-of-type{margin-top:1rem}.container .dynamic-link a{text-decoration:none;display:inline-block;margin-right:1rem}.container .dynamic-link a:hover{text-decoration:underline}.container .dynamic-link .bibtex,.container .dynamic-link .date{font-size:.7rem;font-style:italic;line-height:.7rem}.container .dynamic-link .journal,.container .dynamic-link .orig{font-size:.7rem;line-height:.7rem}img+em{text-align:right;width:100%;display:inline-block}footer{position:fixed;bottom:0;left:0;right:0;padding:5px;text-align:right;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease}footer .details{float:left}footer .separator{display:inline-block;width:1rem}footer .selector{display:inline-block;height:1.2rem;overflow-y:hidden;width:2.5rem;position:relative;text-align:center;-webkit-transition:height .2s ease;transition:height .2s ease}footer .selector a{display:block;position:absolute;top:1.2rem;text-align:center;opacity:.5;text-decoration:none;cursor:pointer;-webkit-transition:top .2s ease;transition:top .2s ease}footer .selector a.active{top:0;opacity:1}footer .selector:hover{height:2.4rem}.error{max-width:800px;width:100%}.error h1{margin-bottom:0}.error h2{margin-top:.5rem}.error a{display:block;margin-top:2rem}.help{overflow-y:auto;display:block;z-index:1000;position:fixed;top:0;left:0;right:0;bottom:0}.help .help-box{padding:3rem;padding-bottom:4rem;margin:10%;position:relative}.help .help-box h1{text-align:center}.help .help-box dl{display:inline-block;width:33%;vertical-align:top;text-align:center}.help .help-box dl dt{font-weight:400;padding-bottom:.2rem}.help .help-box dl dd{margin-left:0}.help .help-box .close-help{cursor:pointer;position:absolute;bottom:3rem;right:3rem;border-bottom:1px solid transparent}.help .help-box .close-help:hover{border-bottom-width:1px;border-bottom-style:solid}
        </style>
        <!-- <link rel="stylesheet" href="/css/600.css" media="screen and (max-width: 600px)"> -->
        <style media="screen and (max-width: 600px)">
            body,html{padding-bottom:2rem}.welcome{top:0;-webkit-transform:none;transform:none;padding-bottom:2rem}.welcome .left,.welcome .right{display:block;margin:0;padding:1rem;text-align:center;width:100%;border:none;top:0}.welcome .left.first,.welcome .right.first{top:0}.welcome .email,.welcome .phone,.welcome nav a,.welcome p{margin:0 auto}.container{padding-left:.5rem;padding-right:.5rem}.container h1{font-size:3rem}.container nav{overflow-x:auto;white-space:nowrap}footer .selector.help-button{display:none}@media screen and (max-width:350px){.welcome h1{font-size:4.5rem}.container h2.award-year{width:1em;-webkit-transform:rotate(-90deg) translateX(-1.4em);transform:rotate(-90deg) translateX(-1.4em)}.container .award{padding-left:2rem}}
        </style>
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

function list_files($type, $display, $sort) {
    $files = scandir(FILE_DIR);
    $count = 0;
    $filtered_files = array();
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
                array_push($filtered_files, $f);
            }
        }
    }
    uasort($filtered_files, $sort);
    foreach ($filtered_files as $f) {
        echo $display($f);
    }
    if ($count == 0) {
        echo "<p>There is no content yet.</p>";
    }
}

function parsebib($filename) {
    $bibtex = file_get_contents(FILE_DIR."/".$filename);
    $bibjson = preg_replace("/^%(.*)$/m", "", $bibtex);
    $bibjson = preg_replace("/((\w|-)+)\s*=\s*\{/", "\"$1\": \"", $bibjson);
    $bibjson = preg_replace("/\}(?=\s*[,\}])/", "\"", $bibjson);
    $bibjson = preg_replace("/@(\w+)\s*\{([^,]*)/", "{\"$1\": \"$2\"", $bibjson, 1);
    $bibjson = preg_replace("/,\}/", "}", $bibjson, 1);
    $bibobj = json_decode($bibjson);
    $found = preg_match("/^%copyright (.*)$/m", $bibtex, $matches);
    if ($found === 1) {
        $bibobj->{"Copyright"} = $matches[1];
    }
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
        <a href="/work/" class='active'>
            <span lang="EN">Works</span>
            <span lang="FR">Ouvrages</span>
        </a>
        <a href='/contact/'>
            <span lang="EN">Contact Details</span>
            <span lang="FR">Détails du Contact</span>
        </a>
        <a href="/AaronStockdill.pdf" target="_blank">Curriculum Vit&aelig;</a>
    </nav>

    <ul class='submenu'>
        <li><a href="#Publications">Publications</a></li>
        <li><a href="#Writing">Writing</a></li>
        <li><a href="#Talks">Talks</a></li>
        <li><a href="https://github.com/aaronstockdill">GitHub</a></li>
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
    $result .= "<span class='title'>\"".$details->{"Title"}.".\"</span></a><br />";
    if ($details->{"Journal"}) {
        $result .= "<span class='journal'>".$details->{"Journal"}.".</span> ";
    } else if ($details->{"Booktitle"}) {
        $result .= "<span class='journal'>".$details->{"Booktitle"}.".</span> ";
    }
    $result .= "<span class='date'>".$details->{"Month"}." ".$details->{"Year"}.".</span><br />";
    if ($details->{"Copyright"}) {
        $result .= "<span class='orig'>".$details->{"Copyright"}."</span><br />";
    }
    $result .= "<a class='bibtex' href='/work/dynamic.php?id=$fname&amp;type=bib'>Download BibTeX</a>";
    $result .="</div>";
    return $result;
}, function ($f, $g) {
    $fname = basename($f, ".bib");
    $gname = basename($g, ".bib");
    $details1 = parsebib($fname.".bib");
    $details2 = parsebib($gname.".bib");
    $month_num = array(
        "January" => "01",
        "February" => "02",
        "March" => "03",
        "April" => "04",
        "May" => "05",
        "June" => "06",
        "July" => "07",
        "August" => "08",
        "September" => "09",
        "October" => "10",
        "November" => "11",
        "December" => "12",
    );
    $d1 = $details1->{"Year"}."-".$month_num[$details1->{"Month"}];
    $d2 = $details2->{"Year"}."-".$month_num[$details2->{"Month"}];
    if ($d1 == $d2) {
        return 0;
    }
    return ($d1 < $d2) ? 1 : -1;
});
?>

    <h1 id="Writing">Writing</h1>
<?php
list_files("md", function ($f) {
    $parts = explode(".", $f);
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/writing/".str_replace('-', '/', $parts[1])."/$parts[0]/'>".$parts[0]."</a>";
    $result .= "<span class='date'>".$parts[1]."</span></div>";
    return $result;
}, function ($f, $g) {
    $parts1 = explode(".", $f);
    $parts2 = explode(".", $g);
    if ($parts1[1] == $parts2[1]) {
        return 0;
    }
    return ($parts1[1] < $parts2[1]) ? 1 : -1;
});
?>

    <h1 id="Talks">Talks</h1>
<?php
list_files("talk", function ($f) {
    $parts = explode(".", $f);
    $result = "<div class='dynamic-link'>";
    $result .= "<a href='/work/talk/".str_replace('-', '/', $parts[1])."/$parts[0]/'>".$parts[0]."</a>";
    $result .= "<span class='date'>".$parts[1]."</span></div>";
    return $result;
}, function ($f, $g) {
    $parts1 = explode(".", $f);
    $parts2 = explode(".", $g);
    if ($parts1[1] == $parts2[1]) {
        return 0;
    }
    return ($parts1[1] < $parts2[1]) ? 1 : -1;
});
?>

<h1 id="GitHub">GitHub</h1>
<p>I infrequently put projects on GitHub, but you are welcome to view what is available there: <a href='https://github.com/aaronstockdill'> Aaron Stockdill on GitHub</a>.</p>

</div>

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
        <link rel="stylesheet" href="/css/print.css" media="print">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="/js/preferences.js" charset="utf-8" async></script>
        <script src="/js/email.js" charset="utf-8" defer></script>
        <script src="/js/mousetrap.js" charset="utf-8" defer></script>
        <script src="/js/keybindings.js" charset="utf-8" defer></script>
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

