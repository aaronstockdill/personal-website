<?php

/* error.twig */
class __TwigTemplate_8c0fbd81f16a8250cea45c747712625b89b6af14b4d866711917880920aaeb24 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Bolt - Fatal error.");
        echo "</title>
    <style>
        body{font-family: \"Helvetica Neue\",Helvetica,Arial,sans-serif;color:#333;font-size:14px;line-height:20px;margin:0px;}
        h1 {font-size: 38.5px;line-height: 40px;margin: 10px 0px;}
        p{margin: 0px 0px 10px;}
        strong{font-weight:bold;}
        code, pre {padding: 0px 3px 2px;font-family: Monaco,Menlo,Consolas,\"Courier New\",monospace;font-size: 12px;color: #333;border-radius: 3px;}
        code {padding: 2px 4px;color: #D14;background-color: #F7F7F9;border: 1px solid #E1E1E8;white-space: nowrap;}
        a {color: #08C;text-decoration: none;}
        ul, ol {padding: 0px;margin: 0px 0px 10px 25px;}
        hr{margin:20px 0;border:0;border-top:1px solid #eeeeee;border-bottom:1px solid #ffffff;}
        .hide{display:none;}
    </style>
</head>
<body style=\"padding: 20px;\">

    <div style=\"max-width: 530px; margin: auto;\">

    <h1>";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("Bolt - Fatal error.");
        echo "</h1>

    <ul>
        <li>";
        // line 26
        echo $this->env->getExtension('Bolt')->trans("Class:");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "class", array()), "html", null, true);
        echo "</li>
        <li>";
        // line 27
        echo $this->env->getExtension('Bolt')->trans("Message:");
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "message", array()), "html", null, true);
        echo "</strong></li>
        <li>";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("Code:");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "code", array()), "html", null, true);
        echo "</li>
    </ul>

    ";
        // line 32
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/debug"), "method") &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "user"), "method")))) {
            // line 33
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "            ";
                if (($this->getAttribute($context["i"], "line", array(), "any", true, true) && $this->getAttribute($context["i"], "class", array(), "any", true, true))) {
                    // line 35
                    echo "                <p>
                    <strong>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "class", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "function", array()), "html", null, true);
                    echo "()</strong><br>
                    <em>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "file", array()), "html", null, true);
                    echo ", ";
                    echo $this->env->getExtension('Bolt')->trans("line");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "line", array()), "html", null, true);
                    echo "</em>
                    ";
                    // line 38
                    if ($this->getAttribute($context["i"], "args", array(), "any", true, true)) {
                        // line 39
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->printDump($this->getAttribute($context["i"], "args", array())), "html", null, true);
                        echo "
                    ";
                    }
                    // line 41
                    echo "                </p>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    </div>
    <hr>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  118 => 44,  112 => 43,  108 => 41,  102 => 39,  100 => 38,  92 => 37,  86 => 36,  83 => 35,  80 => 34,  75 => 33,  72 => 32,  64 => 28,  58 => 27,  52 => 26,  46 => 23,  25 => 5,  19 => 1,);
    }
}
