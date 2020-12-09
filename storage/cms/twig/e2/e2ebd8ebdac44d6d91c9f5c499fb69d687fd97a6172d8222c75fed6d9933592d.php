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
        $tags = array("if" => 16);
        $filters = array("page" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand header-home\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">To Do List</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("help");
        echo "\">Posts</a>
      </li>
    </ul>
  </div>
    ";
        // line 16
        if (($context["user"] ?? null)) {
            // line 17
            echo "        <input type=\"button\" style=\"margin-right: 5%; font-size: 18px;\"class=\"btn btn-outline-danger\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" value=\"Log out\"/>
    ";
        } else {
            // line 19
            echo "        <input type=\"button\" style=\"margin-right: 5%; font-size: 18px;\"class=\"btn btn-outline-success\" onclick=\"location.href='";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("log");
            echo "';\" value=\"Log in\"/>
    ";
        }
        // line 20
        echo " 
</nav>";
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
        return array (  100 => 20,  94 => 19,  90 => 17,  88 => 16,  81 => 12,  75 => 9,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand header-home\" href=\"{{ 'homepage'|page }}\">Home </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ 'about-us'|page }}\">To Do List</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ 'help'|page }}\">Posts</a>
      </li>
    </ul>
  </div>
    {% if user %}
        <input type=\"button\" style=\"margin-right: 5%; font-size: 18px;\"class=\"btn btn-outline-danger\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" value=\"Log out\"/>
    {% else %}
        <input type=\"button\" style=\"margin-right: 5%; font-size: 18px;\"class=\"btn btn-outline-success\" onclick=\"location.href='{{ 'log'|page }}';\" value=\"Log in\"/>
    {% endif %} 
</nav>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/header.htm", "");
    }
}
