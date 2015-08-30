<?php

/* users/_userlist-actions.twig */
class __TwigTemplate_e1d7fbfb4d7a7cd8b6e3aaceeeec484dd832d3b2b80dd86ae451f20797fe3823 extends Twig_Template
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
        echo "<div class=\"btn-group\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\">
            <i class=\"fa fa-edit\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("Edit");
        echo "
    </a>

    <button class=\"btn dropdown-toggle btn-default btn-xs\" data-toggle=\"dropdown\">
        <i class=\"fa fa-info-sign\"></i>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "currentuser", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 13
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled", array())) {
                // line 14
                echo "                <li>
                    <form action=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "disable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 16
                $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 16)->display($context);
                // line 17
                echo "                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">";
                // line 18
                echo $this->env->getExtension('Bolt')->trans("Disable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                echo "</span>
                        </button>
                    </form>
                </li>
            ";
            } else {
                // line 23
                echo "                <li>
                    <form action=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "enable", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 25
                $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 25)->display($context);
                // line 26
                echo "                        <button type=\"submit\" class=\"btn btn-block btn-link\">
                            <span class=\"pull-left\">";
                // line 27
                echo $this->env->getExtension('Bolt')->trans("Enable %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
                echo "</span>
                        </button>
                    </form>
                </li>
            ";
            }
            // line 32
            echo "            <li>
                <form action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "delete", "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 34
            $this->loadTemplate("_sub/_csrf_token.twig", "users/_userlist-actions.twig", 34)->display($context);
            // line 35
            echo "                    <button type=\"submit\" class=\"btn btn-block btn-link confirm\"
                    data-confirm=\"";
            // line 36
            echo $this->env->getExtension('Bolt')->trans("Are you sure you want to delete %username%?", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
            echo "\" >
                        <span class=\"pull-left\">";
            // line 37
            echo $this->env->getExtension('Bolt')->trans("Delete %username%", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array())));
            echo "</span>
                    </button>
                </form>
            </li>

            <li class=\"divider\">
            </li>
        ";
        }
        // line 45
        echo "
        <li>
            <a class=\"nolink\">
                ";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo ": <strong>";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen", array()) > "1000")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastseen", array()), "Y-m-d H:i"), "html", null, true);
        } else {
            echo "-";
        }
        echo "</strong>
            </a>
        </li>

        <li>
            <a class=\"nolink\">
                ";
        // line 54
        echo $this->env->getExtension('Bolt')->trans("Last known IP");
        echo ": <strong>";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip", array()) != "")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastip", array()), "html", null, true);
        } else {
            echo "-";
        }
        echo "</strong>
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/_userlist-actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  115 => 48,  110 => 45,  99 => 37,  95 => 36,  92 => 35,  90 => 34,  86 => 33,  83 => 32,  75 => 27,  72 => 26,  70 => 25,  66 => 24,  63 => 23,  55 => 18,  52 => 17,  50 => 16,  46 => 15,  43 => 14,  40 => 13,  38 => 12,  26 => 3,  22 => 2,  19 => 1,);
    }
}
