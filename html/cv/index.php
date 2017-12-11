<?php
if(isset($_COOKIE["style"])) {
    $theme = $_COOKIE["style"];
} else {
    $theme = "white";
    setcookie("style", "white", time() + 365);
}
if(isset($_COOKIE["language"])) {
    $lang = $_COOKIE["language"];
    $notlang = ($lang == "EN") ? "FR" : "EN";
} else {
    $lang = "EN";
    $notlang = "FR";
    setcookie("language", "EN", time() + 365);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Curriculum Vit&aelig; for Aaron Stockdill</title>
        <style>
            @font-face{font-family:Amiri;font-style:normal;font-weight:400;src:local('Amiri Regular'),local('Amiri-Regular'),url(/fonts/Amiri-Regular.woff2) format('woff2');unicode-range:U+0000-00FF,U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Amiri;font-style:italic;font-weight:400;src:local('Amiri Italic'),local('Amiri-Italic'),url(/fonts/Amiri-Italic.woff2) format('woff2');unicode-range:U+0000-00FF,U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Roboto;font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(/fonts/Roboto_Light.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:500;src:local('Roboto Medium'),local('Roboto-Medium'),url(/fonts/Roboto_Medium.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:700;src:local('Roboto Bold'),local('Roboto-Bold'),url(/fonts/Roboto_Bold.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
        </style>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
            echo '<style>*:not(.show)[lang="'.$notlang.'"] { display: none !important; }</style>';
        ?>
        <style>
            *{-webkit-box-sizing:border-box;box-sizing:border-box}.hide{display:none!important}:root,body,html{font-family:Amiri,Georgia,"Times New Roman",serif;min-height:100%;height:100%;font-weight:400;font-size:22px;margin:0;padding:0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}@media (min-width:1920px){:root,body,html{font-size:25px}}h1,h2,h3,h4,h5,h6{font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:500}.borked-email{direction:rtl;unicode-bidi:bidi-override;text-align:left}nav{height:1.3rem;overflow:hidden;font-size:.85rem;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300;line-height:1.5rem;text-align:center}nav a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease}.container{max-width:35rem;width:100%;margin:0 auto;padding:2rem;line-height:1.3;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto}.container .anchor{width:0;height:0;display:block;position:relative;top:-1.25rem}.container .anchor:first-of-type{top:3rem}.container h1{font-size:2rem;line-height:.85em;margin-top:3rem;margin-bottom:1rem;font-weight:700;-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual}.container hr{border:none;height:1px;margin:1rem auto 2rem auto;width:20%}.container h2{margin-top:1.5rem;margin-bottom:.2rem;line-height:1em;font-size:1.4rem}.container h2.award-year{margin-bottom:-1.1em}.container h3,.container h4{margin-top:.5rem;margin-bottom:.2rem}.container p{margin-top:.5rem}.container li{padding-top:.25rem;padding-bottom:.25rem;list-style-type:circle}.container img{display:block;margin:auto;max-width:100%}.container blockquote{border-left:5px solid silver;padding:.5rem 1rem;background:#eee}.container .pad-after{padding-right:1rem}.container p.tight{margin-bottom:.25rem}.container .precontent{display:block;text-align:center;padding:.1rem 0;font-size:.8rem}.container .precontent.first{margin-top:2rem}.container .tutoring-list{margin:0;font-size:.9rem;line-height:1.4rem}.container .award{padding-left:5rem}.container .award h3{margin-top:0;margin-bottom:.3rem;font-weight:400}.container .award p{margin-top:0;margin-bottom:1.5rem}.container .contact-table{margin-bottom:2rem}.container .contact-table .label,.container .contact-table .value{display:inline-block;padding:.2rem;max-width:50%;vertical-align:top}.container .contact-table .label{width:5rem;text-align:right;padding-right:1rem;font-weight:400}.container .back-to-works{display:block;padding-top:1rem;text-decoration:none;text-align:center;font-size:.85rem;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300}.container .submenu{height:1.6rem;list-style:none;margin:.1rem 0;padding:0;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300;text-align:center}.container .submenu li{display:inline-block}.container .submenu a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease;font-size:.75rem}.container .dynamic-link{margin:.3rem auto 1rem auto;line-height:1.2em}.container .dynamic-link:first-of-type{margin-top:1rem}.container .dynamic-link a{text-decoration:none;display:inline-block;margin-right:1rem}.container .dynamic-link a:hover{text-decoration:underline}.container .dynamic-link .bibtex,.container .dynamic-link .date{font-size:.7rem;font-style:italic;line-height:.7rem}.container .dynamic-link .journal,.container .dynamic-link .orig{font-size:.7rem;line-height:.7rem}.welcome{padding:2rem;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;max-width:35rem;margin:0 auto;text-align:center}.welcome h1{font-size:4rem;margin:0;margin-top:25vh;line-height:3.6rem;font-weight:700}.welcome p{margin:0;padding-bottom:0}.welcome .trailing{margin-top:3rem;line-height:1.4rem}.welcome .trailing div{margin-top:1rem}.welcome .email{padding:0 .25rem;width:12rem;text-decoration:none;-webkit-transition:color .2s ease;transition:color .2s ease}img+em{text-align:right;width:100%;display:inline-block}footer{max-width:35rem;margin:0 auto;text-align:center;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300;font-size:.8rem;opacity:.8;position:relative;bottom:0;left:0;right:0;padding:5px 2rem;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;height:1.8rem}footer .details{float:left}footer .separator{display:inline-block;width:1rem}footer .selector{display:inline-block;height:1.2rem;overflow-y:hidden;width:2.5rem;position:relative;text-align:center;-webkit-transition:height .2s ease;transition:height .2s ease}footer .selector a{display:block;position:absolute;top:1.2rem;text-align:center;text-decoration:none;cursor:pointer;-webkit-transition:top .2s ease;transition:top .2s ease}footer .selector a.active{top:0;opacity:.5}footer .selector:hover a{top:0}footer .selector:hover a.active{top:-1.2rem}.error{max-width:800px;width:100%}.error h1{margin-bottom:0}.error h2{margin-top:.5rem}.error a{display:block;margin-top:2rem}.help{overflow-y:auto;display:block;z-index:1000;position:fixed;top:0;left:0;right:0;bottom:0}.help .help-box{padding:3rem;padding-bottom:4rem;margin:5%;position:relative;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-weight:300}.help .help-box h1{text-align:center}.help .help-box dl{display:inline-block;width:33%;vertical-align:top;text-align:center}.help .help-box dl dt{font-weight:400;padding-top:.8rem;padding-bottom:.2rem}.help .help-box dl dd{margin-left:0}.help .help-box .close-help{cursor:pointer;position:absolute;bottom:3rem;right:3rem;border-bottom:1px solid transparent}.help .help-box .close-help:hover{border-bottom-width:1px;border-bottom-style:solid}
        </style>
        <style media="screen and (max-width: 600px)">
            body,html{font-size:18px}.container .welcome{padding:.5rem 0 2rem 0}.container .welcome h1{margin-top:15vh;font-size:3.5rem;line-height:3rem}.container .welcome .email,.container .welcome .phone,.container .welcome nav a,.container .welcome p{margin:0 auto}.container .welcome .email span,.container .welcome .phone span,.container .welcome nav a span,.container .welcome p span{display:inline-block}.container .welcome .nav-holder{margin:0 -1rem}.submenu,nav{overflow-x:auto;overflow-y:hidden;white-space:nowrap;position:relative}.submenu a:first-of-type,.submenu li:first-of-type,nav a:first-of-type,nav li:first-of-type{margin-left:.7rem}.submenu a:last-of-type,.submenu li:last-of-type,nav a:last-of-type,nav li:last-of-type{margin-right:.7rem}.submenu li a,nav li a{margin:0!important}.nav-holder{position:relative;margin:0 -1rem}.nav-holder:after,.nav-holder:before{content:"";display:block;width:1.3rem;height:3rem;position:absolute;top:0;z-index:5}.nav-holder:before{left:0}.nav-holder:after{right:0}.container{padding:.5rem 1rem 2rem 1rem}.container h1{font-size:2rem}footer .selector.help-button{display:none}footer .separator{width:0}@media screen and (max-width:350px){.welcome h1{font-size:3rem;margin-top:15vh}.container h2.award-year{width:1em;-webkit-transform:rotate(-90deg) translateX(-1.4em);transform:rotate(-90deg) translateX(-1.4em)}.container .award{padding-left:2rem}}
        </style>
        <style media="print">
            nav,ul.submenu{display:none}footer{display:none}a{text-decoration:none;color:#000}a[href^="http://"]:after,a[href^="https://"]:after{content:" [" attr(href) "]";color:#333}.container hr{margin:1rem auto}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Everything (plus a bit more) that you want to know about me. A Ph.D. student at the University of Cambridge."/>

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    <div class="container">
    <div class="nav-holder">
    <nav>
        <a href="/" class="">
            <span lang="EN">Home</span>
            <span lang="FR">Accueil</span>
        </a>

        <a href="/cv/" class="active">
            <span lang="EN">CV</span>
            <span lang="FR">CV</span>
        </a>

        <a href="/work/" class="">
            <span lang="EN">Works</span>
            <span lang="FR">Ouvrages</span>
        </a>

        <a href="/teaching/" class="">
            <span lang="EN">Teaching</span>
            <span lang="FR">Enseignement</span>
        </a>

        <a href="/contact/" class="">
            <span lang="EN">Contact</span>
            <span lang="FR">Contact</span>
        </a>

        <a href="/blog/" class="">
            <span lang="EN">Blog</span>
            <span lang="FR">Blog</span>
        </a>
    </nav>


<ul class="submenu">
<li><a href="#About"><span lang="EN">About Me</span>
                     <span lang="FR">Biographie</span></a></li>
<li><a href="#Education"><span lang="EN">Education</span>
                         <span lang="FR">Éducation</span></a></li>
<li><a href="#Employment"><span lang="EN">Employment</span>
                          <span lang="FR">Histoire de l&rsquo;Emploi</span></a></li>
<li><a href="#Awards"><span lang="EN">Awards &amp; Honours</span>
                      <span lang="FR">Prix et Distinctions</span></a></li>
</ul>
</div>

<span class="precontent first" lang="EN">Download my <a href="/cv/AaronStockdill.pdf">Curriculum Vit&aelig; in PDF form</a>.</span>
<span class="precontent first" lang="FR">Télécharger mon <a href="/cv/AaronStockdill.pdf">Curriculum Vit&aelig; en format PDF</a> (en Anglais).</span>

<span class="precontent" lang="EN">Download a <a href="/cv/AaronStockdill.txt">brief summary</a>.</span>
<span class="precontent" lang="FR">Télécharger un <a href="/cv/AaronStockdill.txt">bref résumé</a> (en Anglais).</span>

<span class="precontent" lang="EN">For a list of publications, see <a href="/work/#Publications">Works</a>.</span>
<span class="precontent" lang="FR">Pour une liste de publications, voir <a href="/work/#Publications">Ouvrages</a> (en Anglais).</span>

<span class="anchor" id="About"></span>
<h1 lang="EN">About Me</h1>
<h1 lang="FR">Biographie</h1>

<p lang="EN">In 2016, I finished studying towards a Bachelor of Science with Honours in Computer Science at the University of Canterbury in Christchurch, New Zealand. The title of my dissertation was &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware.&rdquo; In 2015 I completed my final year of a BSc in Computer Science and Mathematics, and in 2017 commenced study towards a Ph.D. in Computer Science at the University of Cambridge.</p>
<p lang="FR">En 2016, j&rsquo;ai fini étudier vers un Baccalauréat en Sciences avec distinction en les Sciences Informatiques à l&rsquo;University of Canterbury en Christchurch, Nouvelle Zélande. Le titre de ma thèse etait &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). En 2015, j&rsquo;ai fini l&rsquo;année dernière de BSc en les Sciences Informatiques et les Mathematiques, et en 2017 j'ai commencé l&rsquo;étudier vers un doctorat en les Sciences Informatiques à l&rsquo;University of Cambridge.</p>

<p lang="EN">My interests lie with anything that can make the world better. This primarily manifests as education: I have taught mathematics to high school students, and computer science to university students. I also work with Potato Softworks to help businesses and organisations get an online prescence with affordable websites. Personally, I am passionate about Artifical Intelligence, as is reflected in my research.</p>
<p lang="FR">Mes intérêts se trouvent avec tout ce qui peut rendre le monde meilleur. Cette principalement manifeste comme éducation: j&rsquo;ai enseigné les mathematiques aux étudiantes de l&rsquo;école secondaire, et les sciences informatiques aux étudiantes universitaires. Je travaille aussi avec Potato Softworks pour aider les entreprises petites et les organisations obtenir des sites Webs abordables. Personnellement, je suis passionné au sujet de l&rsquo;Intelligence Artificielle, comme cela est reflété dans mes recherches.</p>



<hr />



<span class="anchor" id="Education"></span>
<h1 lang="EN">Education</h1>
<h1 lang="FR">Éducation</h1>

<h2 lang="EN">Doctor of Philosophy, 2017&ndash;2020</h2>
<h2 lang="FR">Philosophi&aelig; Doctor, 2017&ndash;2020</h2>
<p lang="EN">I am currently studying towards my Ph.D. at the University of Cambridge. I am under the supervision of <a href="http://www.cl.cam.ac.uk/~mj201/">Dr Mateja Jamnik</a>, with the tentative thesis title &ldquo;Automating representation change across domains for reasoning.&rdquo;</p>
<p lang="FR">J&rsquo;étudie vers mon doctorat à l&rsquo;University of Cambridge. Je suis sous la supervision de <a href="http://www.cl.cam.ac.uk/~mj201/">Dr Mateja Jamnik</a>, avec la titre de thèse provisoire &laquo;&nbsp;Automating representation change across domains for reasoning.&nbsp;&raquo;</p>

<h2 lang="EN">Bachelor of Science with First Class Honours, 2016</h2>
<h2 lang="FR">Baccalauréat en Sciences avec Félicitations, 2016</h2>
<p lang="EN">Studied in the &lsquo;Honours year&rsquo; of a BSc(Hons), working on my research project with <a href="http://www.canterbury.ac.nz/engineering/contact-us/people/kourosh-neshatian.html">Dr Kourosh Neshatian</a>. My report was called &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&rdquo;. My final GPA was 8.9 out of 9.</p>
<p lang="FR">J&rsquo;ai étudier vers un Baccalauréat en Sciences avec Distinction, travaille sur mon project de recherche avec <a href="http://www.canterbury.ac.nz/engineering/contact-us/people/kourosh-neshatian.html">Dr Kourosh Neshatian</a>. Le titre de ma thèse etait &laquo;&nbsp;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware&nbsp;&raquo; (&laquo;&nbsp;Informatique Neuromorphiques avec les Réseaux de Neurones Réservoir sur le Matériel Memristive&nbsp;&raquo;). Ma GPA dernière etait 8.9 sur 9.</p>

<h2 lang="EN">Bachelor of Science, 2013-2015</h2>
<h2 lang="FR">Baccalauréat en Sciences, 2013-2015</h2>
<p lang="EN">Double major in Computer Science and Mathematics. I finished with an average GPA of 8.83 out of 9. </p>
<p lang="FR">Baccalauréat en Sciences avec spécialisation en les informatiques et les mathematiques. J&rsquo;ai fini avec une moyenne GPA de 8.83 sur 9. </p>


<hr />


<span class="anchor" id="Employment"></span>
<h1 lang="EN">Employ&shy;ment</h1>
<h1 lang="FR">Histoire de l&rsquo;Emploi</h1>

<h2 lang="EN">University of Canterbury</h2>
<h2 lang="FR">University of Canterbury</h2>

<h3 lang="EN">Lecturer, 2017 Semester 2</h3>
<h3 lang="FR">Le Chargé de Cours, 2017 Semestre 2</h3>
<p lang="EN">During Term 3 2017, I lectured the paper &ldquo;COSC122: Introduction to Computer Science.&rdquo; This was an amazing experience, helping teach one of the core computer science papers that builds the ground-work for many other courses.</p>
<p lang="FR">Durant la Periode 3 2017, je suis donné des leçons pour &laquo;&nbsp;COSC122: Introduction to Computer Science.&nbsp;&raquo; Ceci était une experience fantastique, aid enseigner un de les cours essentials à l&rsquo;informatique que consolider le connaissance pour beaucoup d&rsquo;autres cours.</p>

<h3 lang="EN">Tutor, 2015&ndash;2017</h3>
<h3 lang="FR">Tuteur, 2015&ndash;2017</h3>
<p lang="EN">I used to work as a tutor at the University of Canterbury in the Department of Computer Science and Software Engineering.</p>
<p lang="FR">J'ai travaillé comme un tuteur à l&rsquo;University of Canterbury en le Department of Computer Science and Software Engineering.</p>
<ul class="tutoring-list">
<li>COSC480S1: Computer Programming (2017)</li>
<li>COSC367S1: Artificial Intelligence (2017)</li>
<li>COSC262S1: Algorithms (2016, 2017)</li>
<li>COSC264S2: Introduction to Computer Networks and the Internet (2016)</li>
<li>COSC121S1: Introduction to Computer Programming (2015, 2017)</li>
<li>COSC122S2: Introduction to Computer Science (2015, 2017)</li>
</ul>

<h2 lang="EN">ARANZ Geo Leapfrog, Summer 2014/15</h2>
<h2 lang="FR">ARANZ Geo Leapfrog, l&rsquo;Été 2014/15</h2>
<h3 lang="EN">Software Developer Intern</h3>
<h3 lang="FR">Stagiaire développeur de logiciels</h3>
<p lang="EN">In the Summer 2014/15 break, I worked as a software developer intern working on Geological Modelling Software  for the mining industry. This provided valuable experience working at an established software company.</p>

<h2>Potato Softworks, 2014&ndash;2017</h2>
<h3>Founder, Web Designer, Programmer</h3>
<p lang="EN">I am co-founder of this web design company, serving as lead web designer. I also work as a software developer when required.</p>

<h2>NumberWorks&rsquo;nWords, 2014&ndash;2016</h2>
<h3>Mathematics Tutor</h3>
<p lang="EN">I was a Mathematics tutor for students of all ages, specialising in High School material with a strong focus on Algebra and Calculus.</p>



<hr />



<span class="anchor" id="Awards"></span>
<h1 lang="EN">Awards &amp; Honours</h1>
<h1 lang="FR">Prix et Distinctions</h1>

<h2 class="award-year">2017</h2>

<div class="award">
  <h3>Hamilton Cambridge International Scholarship</h3>
  <p lang="EN">Awarded to non-EU international students studying for a Ph.D. at the University of Cambridge, residing at Selwyn College.</p>
  <p lang="FR">Décerné à un étudiant international non membre de l&rsquo;UE qui étudie un doctorat à l&rsquo;University of Cambridge, résidant au Selwyn College.</p>
</div>

<h2 class="award-year">2016</h2>

<div class="award">
  <h3>Graduating BSc(Hons) Computer Science Student of the Year</h3>
  <p lang="EN">Awarded for academic achievement throughout my undergraduate and honours study at the University of Canterbury.</p>
  <p lang="FR">Décerné pour la réussite académique tout au long de ma étudie au l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3>G B Battersby-Trimble Scholarship in Computer Science</h3>
  <p lang="EN">Awarded for academic merit, broad knowledge outside of computer science, and research of benefit to New Zealand.</p>
  <p lang="FR">Décerné pour la mérite academique, vaste connaissance en dehors de les sciences informatiques, et recherche qu&rsquo;il aura de grand avantage à Nouvelle Zélande.</p>
</div>

<div class="award">
  <h3 lang="EN">Finalist for the Sir Paul Callaghan Award</h3>
  <h3 lang="FR">Finaliste pour le prix de Sir Paul Callaghan</h3>
  <p lang="EN">Awarded for innovation and STEM communication.</p>
  <p lang="FR">Décerné pour l&rsquo;innovation et la communication de les sciences.</p>
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

<h2 class="award-year">2015</h2>

<div class="award">
  <h3>Graduating BSc Computer Science Student of the Year</h3>
  <p lang="EN">Awarded for academic achievement throughout my undergraduate study at the University of Canterbury.</p>
  <p lang="FR">Décerné pour la réussite académique tout au long de ma étudie au l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3>Page Memorial Prize</h3>
  <p lang="EN">Awarded for academic achievement in Level 300 Mathematics at the University of Canterbury.</p>
  <p lang="FR">Décerné pour la réussite académique dans cours en mathematiques à niveau 300 au l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3>Allied Telesis Labs Scholarship in Computer Science</h3>
  <p lang="EN">Awarded through the University of Canterbury.</p>
  <p lang="FR">Décerné par l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3 lang="EN">Mathematics and Statistics Scholarship, First Tier</h3>
  <h3 lang="FR">Mathematics and Statistics Scholarship, Premiere Niveau</h3>
  <p lang="EN">Awarded by the University of Canterbury. </p>
  <p lang="FR">Décerné par l&rsquo;University of Canterbury.</p>
</div>

<h2 class="award-year">2014</h2>

<div class="award">
  <h3>Member of the Golden Key International Honour Society</h3>
  <p lang="EN">A member of the University of Canterbury chapter. </p>
  <p lang="FR">Je suis un membre du chaptre au l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3 lang="EN">Mathematics and Statistics Scholarship, Second Tier</h3>
  <h3 lang="FR">Mathematics and Statistics Scholarship, Deuxieme Niveau</h3>
  <p lang="EN">Awarded by the University of Canterbury. </p>
  <p lang="FR">Décerné par l&rsquo;University of Canterbury.</p>
</div>

<h2 class="award-year">2013</h2>

<div class="award">
  <h3>Dean&rsquo;s Congratulations</h3>
  <p lang="EN">Received in recognition of Academic Achievement from Associate Professor Catherine Moran, Dean of Science at the University of Canterbury.</p>
  <p lang="FR">Reçu en reconnaisssance de la réussite scolaire de Professeur Agrégé Catherine Moran, Doyen des Sciences à l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3>Peter Bryant Memorial Prize</h3>
  <p lang="EN">Awarded for First Place in 100-Level Mathematics at the University of Canterbury.</p>
  <p lang="FR">Décerné à l&rsquo;étudiant qui la plus élevée atteinte en mathematiques à niveau 300 au l&rsquo;University of Canterbury.</p>
</div>

<div class="award">
  <h3>Computer Science High Achievers Scholarship</h3>
  <p lang="EN">Awarded to high achieving students commencing a degree in Computer Science at the University of Canterbury.</p>
  <p lang="FR">Décerné aux étudiants obtenant élevés commençant un diplôme en sciences informatiques à l&rsquo;Université de Canterbury.</p>
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
                <a id="white-button" class='theme-button<?php if ($theme == "white") { echo " active";} ?>' onclick='switch_theme("white")'>
                    <span lang='EN'>light</span>
                    <span lang='FR'>blanc</span>
                </a>
                <a id="black-button" class='theme-button<?php if ($theme == "black") { echo " active";} ?>' onclick='switch_theme("black")'>
                    <span lang='EN'>dark</span>
                    <span lang='FR'>noir</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="EN-button" class='lang-button<?php if ($lang == "EN") { echo " active";} ?>' onclick='switch_language("EN")'>
                    EN
                </a>
                <a id="FR-button" class='lang-button<?php if ($lang == "FR") { echo " active";} ?>' onclick='switch_language("FR")'>
                    FR
                </a>
            </span>
        </footer>
        <script src="/js/script.js" charset="utf-8" defer></script>
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

