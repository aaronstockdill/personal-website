<?php

/* users/_userlist.twig */
class __TwigTemplate_11e1733cc06b81fb9aa58c5c5e15e9c824f20c9ab43e71699efdce83c28317e5 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table-striped dashboardlisting userlist\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "</th>
                <th>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</th>
                <th>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo "</th>
                <th>";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("Roles");
        echo "</th>
                <th>";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "users", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "
                <tr>
                    <td class=\"id\">
                        ";
            // line 18
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 19
            echo "                        № ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "
                        ";
            // line 20
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 21
            echo "                    </td>

                    <td class=\"username\">
                        ";
            // line 24
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 25
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</strong> (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo ")
                        ";
            // line 26
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 27
            echo "                    </td>

                    <td>
                        ";
            // line 30
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "Y") > "1901")) {
                // line 31
                echo "                            <time class=\"moment\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "html", null, true);
                echo "</time>
                        ";
            } else {
                // line 33
                echo "                        -
                        ";
            }
            // line 35
            echo "                    </td>

                    <td class=\"contenttypes\">
                        ";
            // line 38
            if (twig_in_filter("root", $this->getAttribute($context["user"], "roles", array()))) {
                // line 39
                echo "                            <strong><em>root</em></strong>
                        ";
            } else {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", "), "html", null, true);
                echo "
                        ";
            }
            // line 43
            echo "                    </td>

                    <td class=\"actions\">
                        ";
            // line 46
            $this->loadTemplate("users/_userlist-actions.twig", "users/_userlist.twig", 46)->display($context);
            // line 47
            echo "                    </td>
            </tr>

        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>

    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/_userlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  149 => 47,  147 => 46,  142 => 43,  136 => 41,  132 => 39,  130 => 38,  125 => 35,  121 => 33,  111 => 31,  109 => 30,  104 => 27,  100 => 26,  93 => 25,  89 => 24,  84 => 21,  80 => 20,  75 => 19,  71 => 18,  66 => 15,  49 => 14,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
