<?php

/* _header.twig */
class __TwigTemplate_abb7d78fbaff8c08105761dc994d912a728b0bbc79a6c40605264dcbbcf2f3ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-194x194.png\" sizes=\"194x194\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <meta name=\"msapplication-TileColor\" content=\"#2b5797\">
    <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    
    ";
        // line 29
        echo "    <title>
        ";
        // line 30
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 31
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 33
        echo "    </title>
    
    <link rel=\"stylesheet\" href=\"/css/master.css\" type=\"text/css\" media=\"screen\" title=\"style\" charset=\"utf-8\">


    ";
        // line 39
        echo "
</head>
<body id=\"blog\">
    <input type=\"checkbox\" id=\"menu-check\">
    <label for='menu-check' class='menubutton'><span>Menu</span></label>
    <div class='menu'>
        <a href='/#Home' id='link-for-Home'>Home</a>
        <a href='/#Bio' id='link-for-Bio'>About</a>
        <a href='/#Education' id='link-for-Education'>Education</a>
        <a href='/#Experience' id='link-for-Experience'>Experience</a>
        <a href='/#Awards' id='link-for-Awards'>Awards</a>
        <a href='/#Contact' id='link-for-Contact'>Contact</a>
        <a href='/blog/' id='link-for-Blog'>Blog</a>
        <a href='/resources/aaronstockdill.pdf'>CV</a>
    </div>";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  65 => 33,  60 => 32,  55 => 31,  50 => 30,  47 => 29,  19 => 1,);
    }
}
