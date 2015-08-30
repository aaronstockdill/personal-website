<?php

/* users/_roles-permissons.twig */
class __TwigTemplate_5832fb2bb92bb5e9240ed19fd9df7734ecbe22e35bda189cdafa4fa76b6b5c20 extends Twig_Template
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
        echo "<p>
    ";
        // line 2
        echo $this->env->getExtension('Bolt')->trans("The settings for roles and permissions are stored in <code>%permissions%</code>.", array("%permissions%" => "permissions.yml"));
        echo "
</p>
<a class=\"btn btn-tertiary btn-small\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("roles");
        echo "\">
    ";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("View Roles");
        echo "
</a>
<a class=\"btn btn-tertiary btn-small\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "permissions.yml")), "html", null, true);
        echo "\">
    ";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("Edit Roles and Permissions");
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "users/_roles-permissons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
