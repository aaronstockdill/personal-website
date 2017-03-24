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
        <title>About Aaron Stockdill</title>
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
        <meta name="description" content="Everything (plus a bit more) that you want to know about me. A Computer Science tutor at the University of Canterbury.
"/>
    </head>
    <body>

<div class='container'>
    <nav>
        <a href='/'>
            <span lang="EN">Home</span>
            <span lang="FR">Accueil</span>
        </a>

        <a href='/bio/' class='active'>
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

    <h1 lang="EN">About Me</h1>
    <h1 lang="FR">Biographie</h1>

    <p lang="EN">In 2016, I finished studying towards a Bachelor of Science with Honours in Computer Science at the University of Canterbury in Christchurch, New Zealand. The title of my dissertation was &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware.&rdquo; In 2015 I completed my final year of a BSc in Computer Science and Mathematics, and in 2017 will commence study towards a PhD in Computer Science.</p>
    <p lang="FR">En 2016, j'ai fini étudier vers un Baccalauréat en Sciences avec distinction en les Sciences Informatiques à l'University of Canterbury en Christchurch, Nouvelle Zélande. Le titre de ma thèse etait &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). En 2015, j'ai fini l'année dernière de BSc en les Sciences Informatiques et les Mathematiques, et en 2017 je vais commencer l'étudier vers un doctorat en les Sciences Informatiques.</p>

    <p lang="EN">My interests lie with anything that can make the world better. This primarily manifests as education: I teach mathematics to high school students, and computer science to university students. I also work with Potato Softworks to help businesses and organisations get an online prescence with affordable websites. Personally, I am passionate about Artifical Intelligence, as is reflected in my Honours research.</p>
    <p lang="FR">Mes intérêts se trouvent avec tout ce qui peut rendre le monde meilleur. Cette principalement manifeste comme éducation: j'enseigne les mathematiques aux étudiantes de l'école secondaire, et les sciences informatiques aux étudiantes universitaires. Je travaille aussi avec Potato Softworks pour aider les entreprises petites et les organisations obtenir des sites Webs abordables. Personnellement, je suis passionné au sujet de l'Intelligence Artificielle, comme cela est reflété dans mes recherches.</p>




    <h1 lang="EN">Education</h1>
    <h1 lang="FR">Éducation</h1>

    <h2 lang="EN">Bachelor of Science with First Class Honours, 2016</h2>
    <h2 lang="FR">Baccalauréat en Sciences avec Félicitations, 2016</h2>
    <p lang="EN">Studied in the &lsquo;Honours year&rsquo; of a BSc(Hons), working on my research project with Dr Kourosh Neshatian. My report was called &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&rdquo;. My final GPA was 8.9 out of 9.</p>
    <p lang="FR">J'ai étudier vers un Baccalauréat en Sciences avec Distinction, travaille sur mon project de recherche avec Dr Kourosh Neshatian. Le titre de ma thèse etait &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). Ma GPA dernière etait 8.9 sur 9.</p>

    <h2 lang="EN">Bachelor of Science, 2013-2015</h2>
    <h2 lang="FR">Baccalauréat en Sciences, 2013-2015</h2>
    <p lang="EN">Double major in Computer Science and Mathematics. I finished with an average GPA of 8.83 out of 9. </p>
    <p lang="FR">Baccalauréat en Sciences avec spécialisation en les informatiques et les mathematiques. J'ai fini avec une moyenne GPA de 8.83 sur 9. </p>






    <h1 lang="EN">Awards &amp; Honours</h1>
    <h1 lang="FR">Prix et Distinctions</h1>

    <h2 class='award-year'>2016</h2>

    <div class="award">
        <h3>Graduating BSc(Hons) Computer Science Student of the Year</h3>
        <p lang="EN">Awarded for academic achievement throughout my undergraduate and honours study at the University of Canterbury.</p>
        <p lang="FR">Décerné pour la réussite académique tout au long de ma étudie au l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3>G B Battersby-Trimble Scholarship in Computer Science</h3>
        <p lang="EN">Awarded for academic merit, broad knowledge outside of computer science, and research of benefit to New Zealand.</p>
        <p lang="FR">Décerné pour la mérite academique, vaste connaissance en dehors de les sciences informatiques, et recherche qu'il aura de grand avantage à Nouvelle Zélande.</p>
    </div>

    <div class="award">
        <h3 lang="EN">Finalist for the Sir Paul Callaghan Award</h3>
        <h3 lang="FR">Finaliste pour le prix de Sir Paul Callaghan</h3>
        <p lang="EN">Awarded for innovation and STEM communication.</p>
        <p lang="FR">Décerné pour l'innovation et la communication de les sciences.</p>
    </div>

    <div class="award">
        <h3>Freemasons University Scholarship</h3>
        <p lang="EN">Awarded for academic merit, community involvement, and leadership potential.</p>
        <p lang="FR">Décerné pour la mérite académique, implication de la communauté, et potentiel de leadership.</p>
    </div>

    <div class="award">
        <h3>University of Canterbury Senior Scholarship</h3>
        <p lang="EN">Awarded on the basis of academic merit from 200 and 300 level courses.</p>
        <p lang="FR">Décerné pour la mérite académique dans cours à niveau 200 et 300.</p>
    </div>

    <h2 class='award-year'>2015</h2>

    <div class="award">
        <h3>Graduating BSc Computer Science Student of the Year</h3>
        <p lang="EN">Awarded for academic achievement throughout my undergraduate study at the University of Canterbury.</p>
        <p lang="FR">Décerné pour la réussite académique tout au long de ma étudie au l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3>Page Memorial Prize</h3>
        <p lang="EN">Awarded for academic achievement in Level 300 Mathematics at the University of Canterbury.</p>
        <p lang="FR">Décerné pour la réussite académique dans cours en mathematiques à niveau 300 au l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3>Allied Telesis Labs Scholarship in Computer Science</h3>
        <p lang="EN">Awarded through the University of Canterbury.</p>
        <p lang="FR">Décerné par l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3 lang="EN">Mathematics and Statistics Scholarship, First Tier</h3>
        <h3 lang="FR">Mathematics and Statistics Scholarship, Premiere Niveau</h3>
        <p lang="EN">Awarded by the University of Canterbury. </p>
        <p lang="FR">Décerné par l'University of Canterbury.</p>
    </div>

    <h2 class='award-year'>2014</h2>

    <div class="award">
        <h3>Member of the Golden Key International Honour Society</h3>
        <p lang="EN">A member of the University of Canterbury chapter. </p>
        <p lang="FR">Je suis un membre du chaptre au l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3 lang="EN">Mathematics and Statistics Scholarship, Second Tier</h3>
        <h3 lang="FR">Mathematics and Statistics Scholarship, Deuxieme Niveau</h3>
        <p lang="EN">Awarded by the University of Canterbury. </p>
        <p lang="FR">Décerné par l'University of Canterbury.</p>
    </div>

    <h2 class='award-year'>2013</h2>

    <div class="award">
        <h3>Dean's Congratulations</h3>
        <p lang="EN">Received in recognition of Academic Achievement from Associate Professor Catherine Moran, Dean of Science at the University of Canterbury.</p>
        <p lang="FR">Reçu en reconnaisssance de la réussite scolaire de Professeur Agrégé Catherine Moran, Doyen des Sciences à l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3>Peter Bryant Memorial Prize</h3>
        <p lang="EN">Awarded for First Place in 100-Level Mathematics at the University of Canterbury.</p>
        <p lang="FR">Décerné à l'étudiant qui la plus élevée atteinte en mathematiques à niveau 300 au l'University of Canterbury.</p>
    </div>

    <div class="award">
        <h3>Computer Science High Achievers Scholarship</h3>
        <p lang="EN">Awarded to high achieving students commencing a degree in Computer Science at the University of Canterbury.</p>
        <p lang="FR">Décerné aux étudiants obtenant élevés commençant un diplôme en sciences informatiques à l'Université de Canterbury.</p>
    </div>


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

