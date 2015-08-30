<?php

/* users/_panel-actions_users.twig */
class __TwigTemplate_083a03b72c599e5c61dc9be89f7e7d8b07908dd7e1de900d1cfda4be06d47889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_base/_panel.twig", "users/_panel-actions_users.twig", 4);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("users.actions-for-users");
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"span6\" style=\"text-align:center\"><a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("useredit", array("id" => ""));
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("panel.user-actions.button.add");
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "users/_panel-actions_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  43 => 10,  37 => 8,  31 => 6,  11 => 4,);
    }
}
