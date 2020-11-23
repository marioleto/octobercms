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
class __TwigTemplate_4bf605be9cef8b9967c878f1805674ce2cacf73d9749cea3c443be5d15e188e4 extends \Twig\Template
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
        echo "\">About us</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("help");
        echo "\">Help</a>
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
        return array (  75 => 20,  69 => 19,  65 => 17,  63 => 16,  56 => 12,  50 => 9,  40 => 2,  37 => 1,);
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
        <a class=\"nav-link\" href=\"{{ 'about-us'|page }}\">About us</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ 'help'|page }}\">Help</a>
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
