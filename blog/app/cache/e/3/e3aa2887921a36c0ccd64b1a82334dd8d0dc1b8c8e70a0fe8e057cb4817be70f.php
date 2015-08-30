<?php

/* index.twig */
class __TwigTemplate_e3aa2887921a36c0ccd64b1a82334dd8d0dc1b8c8e70a0fe8e057cb4817be70f extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"body\">

        ";
        // line 12
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("posts/latest/5", array("paging" => true) );
        // line 13
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "            <article>
                
                <h2><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>
                <span class='byline'>";
            // line 17
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute($context["record"], "datepublish", array()), "%A %B %e, %Y");
            echo "</span>
                ";
            // line 18
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 19
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 25
            echo "
                <p> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 220), "method"), "html", null, true);
            echo " </p>
                <p> <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">Read more...</a> </p>

            </article>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

<!-- End Main Content and Sidebar -->



";
        // line 44
        $this->loadTemplate("_footer.twig", "index.twig", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  89 => 33,  86 => 32,  75 => 27,  71 => 26,  68 => 25,  61 => 21,  57 => 20,  54 => 19,  52 => 18,  48 => 17,  42 => 16,  38 => 14,  33 => 13,  29 => 12,  21 => 2,  19 => 1,);
    }
}
