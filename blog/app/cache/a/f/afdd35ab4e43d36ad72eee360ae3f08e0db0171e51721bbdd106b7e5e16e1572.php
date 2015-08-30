<?php

/* dashboard/_recently_edited.twig */
class __TwigTemplate_afdd35ab4e43d36ad72eee360ae3f08e0db0171e51721bbdd106b7e5e16e1572 extends Twig_Template
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
        echo "<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => (isset($context["contenttype"]) ? $context["contenttype"] : null))), "html", null, true);
        echo "\" class=\"morelink\">
                ";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.show-more", array("%contenttypes%" => (isset($context["contenttype"]) ? $context["contenttype"] : null)));
        echo " »
            </a>
        </span>
        <h3>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.recently-edited", array("%contenttypes%" => (isset($context["contenttype"]) ? $context["contenttype"] : null)));
        echo "</h3>
</div>

<table class=\"table table-striped dashboardlisting\">
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 12
            echo "        ";
            $context["editable"] = $this->env->getExtension('Bolt')->isAllowed("edit", $context["content"]);
            // line 13
            echo "        ";
            $this->loadTemplate(array(0 => (("custom/listing/" . $this->getAttribute($this->getAttribute($context["content"], "contenttype", array()), "slug", array())) . ".twig"), 1 => "_sub/_listing.twig"), "dashboard/_recently_edited.twig", 13)->display(array_merge($context, array("excerptlength" => 280, "thumbsize" => 54, "compact" => true)));
            // line 15
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_recently_edited.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  63 => 15,  60 => 13,  57 => 12,  40 => 11,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
