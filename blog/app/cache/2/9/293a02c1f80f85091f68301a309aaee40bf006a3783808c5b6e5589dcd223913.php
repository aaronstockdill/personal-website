<?php

/* users/users.twig */
class __TwigTemplate_293a02c1f80f85091f68301a309aaee40bf006a3783808c5b6e5589dcd223913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "users/users.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
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
        echo $this->env->getExtension('Bolt')->trans("All users");
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "users/users.twig", 14);
        // line 15
        echo "
    <div class=\"row\">
        <div class=\"col-md-9\">

            ";
        // line 19
        $this->loadTemplate("_sub/_messages.twig", "users/users.twig", 19)->display($context);
        // line 20
        echo "
            ";
        // line 21
        $this->loadTemplate("users/_userlist.twig", "users/users.twig", 21)->display($context);
        // line 22
        echo "
            <h2><strong>";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("Roles and Permissions");
        echo "</strong></h2>

            ";
        // line 25
        $this->loadTemplate("users/_roles-permissons.twig", "users/users.twig", 25)->display($context);
        // line 26
        echo "
            <h2><strong>";
        // line 27
        echo $this->env->getExtension('Bolt')->trans("Current sessions");
        echo "</strong></h2>

            ";
        // line 29
        $this->loadTemplate("users/_sessions.twig", "users/users.twig", 29)->display($context);
        // line 30
        echo "
        </div>

        <aside class=\"col-md-3\">
            ";
        // line 34
        $this->loadTemplate("users/_aside.twig", "users/users.twig", 34)->display($context);
        // line 35
        echo "        </aside>
    </div>

";
    }

    public function getTemplateName()
    {
        return "users/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  96 => 34,  90 => 30,  88 => 29,  83 => 27,  80 => 26,  78 => 25,  73 => 23,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 7,  31 => 5,  11 => 3,);
    }
}
