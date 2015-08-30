<?php

/* _footer.twig */
class __TwigTemplate_de43a76dd4fe771fa5def09f923d616d893984385e1e5ee38509a20a0708aadb extends Twig_Template
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
        echo "    <footer>
        &copy; 2015 Aaron Stockdill.
        <br /> Website by <a href='http://www.potatosoftworks.com/' target='_blank'>Potato Softworks</a>.
    </footer>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script src='/scripts/min/main-min.js'></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
