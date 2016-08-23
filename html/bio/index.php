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
        <link rel="stylesheet" href="/css/master.css" media="screen">
        <link rel="stylesheet" href="/css/600.css" media="screen and (max-width: 600px)">
        <link rel="stylesheet" href="/css/print.css" media="print">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Everything (plus a bit more) that you want to know about me. A BSc(Hons) student at the University of Canterbury.
"/>
    </head>
    <body>
<div class='container'>
    <nav>
        <a href='/'>
            <span lang="EN">Home</span>
            <span lang="FR">Accueil</span>
        </a>
        <!--
        <a href="/work/">
            <span lang="EN">Works</span>
            <span lang="FR">Ouvrages</span>
        </a>
        -->
        <a href="/contact/">
            <span lang="EN">Contact Details</span>
            <span lang="FR">Détails du Contact</span>
        </a>
        <a href="/AaronStockdill.pdf" target="_blank">Curriculum Vit&aelig;</a>
    </nav>

    <h1 lang="EN">About Me</h1>
    <h1 lang="FR">Biographie</h1>

    <p lang="EN">I'm currently studying towards a Bachelor of Science with Honours in Computer Science at the University of Canterbury in Christchurch, New Zealand. The title of my dissertation is &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware.&rdquo; In 2015 I completed my final year of a BSc in Computer Science and Mathematics, and one day hope to study towards a PhD in Computer Science.</p>
    <p lang="FR">Actuellement, j'étudie vers un Baccalauréat en Sciences avec distinction en les Sciences Informatiques à l'University of Canterbury en Christchurch, Nouvelle Zélande. Le titre de ma thèse est &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). En 2015, j'ai fini l'année dernière de BSc en les Sciences Informatiques et les Mathematiques, et bientôt je l'espère pour étudier vers un doctorat en les Sciences Informatiques.</p>

    <p lang="EN">My interests lie with anything that can make the world better. This primarily manifests as education: I teach mathematics to high school students, and computer science to university students. I also work with Potato Softworks to help businesses and organisations get an online prescence with affordable websites. Personally, I am passionate about Artifical Intelligence, as is reflected in my Honours research.</p>
    <p lang="FR">Mes intérêts se trouvent avec tout ce qui peut rendre le monde meilleur. Cette principalement manifeste comme éducation: j'enseigne les mathematiques aux étudiantes de l'école secondaire, et les sciences informatiques aux étudiantes universitaires. Je travaille aussi avec Potato Softworks pour aider les entreprises petites et les organisations obtenir des sites Webs abordables. Personnellement, je suis passionné au sujet de l'Intelligence Artificielle, comme cela est reflété dans mes recherches.</p>

    <hr />

    <h1 lang="EN">Education</h1>
    <h1 lang="FR">Éducation</h1>

    <h2 lang="EN">Bachelor of Science with Honours, 2016</h2>
    <h2 lang="FR">Baccalauréat en Sciences avec Distinction, 2016</h2>
    <p lang="EN">Currently studying in the &lsquo;Honours year&rsquo; of a BSc(Hons), working on my research project with Dr Kourosh Neshatian. My report is called &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&rdquo;. </p>
    <p lang="FR">Actuellement, j'étudie vers un Baccalauréat en Sciences avec Distinction, travaille sur mon project de recherche avec Dr Kourosh Neshatian. Le titre de ma thèse est &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). </p>

    <h2 lang="EN">Bachelor of Science, 2013-2015</h2>
    <h2 lang="FR">Baccalauréat en Sciences, 2013-2015</h2>
    <p lang="EN">Double major in Computer Science and Mathematics. I finished with an average GPA of 8.83 out of 9. </p>
    <p lang="FR">Baccalauréat en Sciences avec spécialisation en les informatiques et les mathematiques. J'ai fini avec une moyenne GPA de 8.83 sur 9. </p>


    <hr />

    <h1 lang="EN">Awards &amp; Honours</h1>
    <h1 lang="FR">Prix et Distinctions</h1>

    <h2 class='award-year'>2016</h2>

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
