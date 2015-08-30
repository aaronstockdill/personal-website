<?php

/* entry.twig */
class __TwigTemplate_e6d216a58cd6cc8a8f9033af32a8c51e927c2b1815f1a22933f68ca9e301cffc extends Twig_Template
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
        $this->loadTemplate("_header.twig", "entry.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"body\">

        <article>
            <div class='backlink'><a href='/blog/'>‹ All Posts</a></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>
            <span class='byline'>";
        // line 11
        echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%A %B %e, %Y");
        echo "</span>

            ";
        // line 13
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
            // line 14
            echo "                <div class=\"large-4 columns imageholder\">
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 20
        echo "
            ";
        // line 22
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "

            ";
        // line 25
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()))) {
            // line 26
            echo "                <div class=\"clearfix\"></div>
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()), "responsive", array()), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "

            ";
        // line 32
        $this->loadTemplate("_recordfooter.twig", "entry.twig", 32)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 33
        echo "
            ";
        // line 34
        if (array_key_exists("Disqus", $context)) {
            // line 35
            echo "                ";
            // line 36
            echo "                <h4>Leave a comment</h4>
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Disqus"]) ? $context["Disqus"] : null), "disqus", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        } elseif (        // line 39
array_key_exists("FacebookComments", $context)) {
            // line 40
            echo "                ";
            // line 41
            echo "                <h4>Leave a comment</h4>
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["FacebookComments"]) ? $context["FacebookComments"] : null), "facebookComments", array(), "method"), "html", null, true);
            echo "
                <hr>
            ";
        }
        // line 45
        echo "
            <p class=\"meta\">
                ";
        // line 47
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "-datepublish"), "method");
        // line 48
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 49
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 51
        echo "                -
                ";
        // line 52
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 53
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 54
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 56
        echo "            </p>

        </article>


    </div>

    <!-- End Main Content -->



";
        // line 67
        $this->loadTemplate("_footer.twig", "entry.twig", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 67,  147 => 56,  139 => 54,  136 => 53,  134 => 52,  131 => 51,  123 => 49,  120 => 48,  118 => 47,  114 => 45,  108 => 42,  105 => 41,  103 => 40,  101 => 39,  96 => 37,  93 => 36,  91 => 35,  89 => 34,  86 => 33,  84 => 32,  79 => 30,  76 => 29,  71 => 27,  68 => 26,  65 => 25,  59 => 22,  56 => 20,  49 => 16,  45 => 15,  42 => 14,  40 => 13,  35 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
