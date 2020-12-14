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

/* C:\xampp\htdocs\octobercms/plugins/marioletovanec/posts/components/postform/default.htm */
class __TwigTemplate_cca4a23b8eb43629c23b54a62115fdf178b36aaad6a8b9b6e08a0fbbf7ce3141 extends \Twig\Template
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
        echo "<form method=\"post\" data-request=\"onSave\">

    <input type=\"text\" name=\"title\">

    <input type=\"text\" name=\"description\">

    <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">

    <button type=\"submit\">Add Post</button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/plugins/marioletovanec/posts/components/postform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" data-request=\"onSave\">

    <input type=\"text\" name=\"title\">

    <input type=\"text\" name=\"description\">

    <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">

    <button type=\"submit\">Add Post</button>

</form>", "C:\\xampp\\htdocs\\octobercms/plugins/marioletovanec/posts/components/postform/default.htm", "");
    }
}
