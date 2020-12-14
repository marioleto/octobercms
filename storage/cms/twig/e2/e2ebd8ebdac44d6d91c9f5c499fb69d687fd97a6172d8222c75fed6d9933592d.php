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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/partials/header.htm */
class __TwigTemplate_7e39375b00c4c043f8ef9aa4b12685b95a4ce58ef0cd95240186a7f6821dd95f extends \Twig\Template
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
        $filters = array("page" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<div class=\"container-fluid\">
<nav class=\"navbar navbar-expand-lg navbar-light\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link header-other\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-me");
        echo "\">About me</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link header-other\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts");
        echo "\">Posts</a>
      </li>
    </ul>
  </div>
</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
<nav class=\"navbar navbar-expand-lg navbar-light\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link header-other\" href=\"{{ 'about-me'|page }}\">About me</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link header-other\" href=\"{{ 'posts'|page }}\">Posts</a>
      </li>
    </ul>
  </div>
</nav>
</div>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/header.htm", "");
    }
}
