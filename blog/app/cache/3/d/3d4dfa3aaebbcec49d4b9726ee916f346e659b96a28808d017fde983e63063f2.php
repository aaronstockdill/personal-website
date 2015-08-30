<?php

/* clearcache/clearcache.twig */
class __TwigTemplate_3d4dfa3aaebbcec49d4b9726ee916f346e659b96a28808d017fde983e63063f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "clearcache/clearcache.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Clear the cache");
    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("clearcache");
        echo "\" class=\"btn btn-primary\">";
        echo $this->env->getExtension('Bolt')->trans("Clear cache again");
        echo "</a>
            </p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "clearcache/clearcache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  45 => 10,  42 => 9,  36 => 7,  30 => 5,  11 => 3,);
    }
}
