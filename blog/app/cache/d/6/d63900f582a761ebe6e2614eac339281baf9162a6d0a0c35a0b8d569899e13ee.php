<?php

/* _header.twig */
class __TwigTemplate_d63900f582a761ebe6e2614eac339281baf9162a6d0a0c35a0b8d569899e13ee extends Twig_Template
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
    ";
        // line 9
        echo "    <title>
        ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 13
        echo "    </title>
    
    <link rel=\"stylesheet\" href=\"/css/master.css\" type=\"text/css\" media=\"screen\" title=\"style\" charset=\"utf-8\">


    ";
        // line 19
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
        <a href='/#Skills' id='link-for-Skills'>Skills</a>
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
        return array (  52 => 19,  45 => 13,  40 => 12,  35 => 11,  30 => 10,  27 => 9,  19 => 1,);
    }
}
