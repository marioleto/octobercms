<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/partials/footer.htm */
class __TwigTemplate_6f3c1a0ace55c3cc5d4008e4922aaf1515e341c247cce60bed6ba280216b94bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"footer-distributed\">

\t\t\t<div class=\"footer-right\">

\t\t\t\t<a href=\"https://www.facebook.com/mario.letovanec\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t<a href=\"https://www.instagram.com/mario.letovanec\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://github.com/marioleto\"><i class=\"fa fa-github\"></i></a>

\t\t\t</div>

\t\t\t<div class=\"footer-left\">

\t\t\t\t<p class=\"footer-links\">
\t\t\t\t\t<a class=\"link-1\" href=\"#\">About me</a>

\t\t\t\t\t<a href=\"#\">posts</a>
\t\t\t\t</p>

\t\t\t\t<p>Mario Letovanec &copy; 2020</p>
\t\t\t</div>

\t\t</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-distributed\">

\t\t\t<div class=\"footer-right\">

\t\t\t\t<a href=\"https://www.facebook.com/mario.letovanec\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t<a href=\"https://www.instagram.com/mario.letovanec\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t<a href=\"https://github.com/marioleto\"><i class=\"fa fa-github\"></i></a>

\t\t\t</div>

\t\t\t<div class=\"footer-left\">

\t\t\t\t<p class=\"footer-links\">
\t\t\t\t\t<a class=\"link-1\" href=\"#\">About me</a>

\t\t\t\t\t<a href=\"#\">posts</a>
\t\t\t\t</p>

\t\t\t\t<p>Mario Letovanec &copy; 2020</p>
\t\t\t</div>

\t\t</footer>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/footer.htm", "");
    }
}
