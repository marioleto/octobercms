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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/pages/sign.htm */
class __TwigTemplate_a0b04945745f7746d078d317c3ae5fc869ee1d459324c81587de848981d02bbe extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        if (($context["canRegister"] ?? null)) {
            // line 3
            echo "    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
    <div class=\"login-page\" style=\"margin-top: 15%;\">
    <div class=\"form\">
    <h3 style=\"margin-bottom: 20px;\">Vytvorenie účtu</h3>

    ";
            // line 10
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

        <div class=\"form-group\">
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Meno\" />
        </div>

        <div class=\"form-group\">
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Email\" />
        </div>

        ";
            // line 30
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 31
                echo "            <div class=\"form-group\">
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Username\" />
            </div>
        ";
            }
            // line 40
            echo "
        <div class=\"form-group\">
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Heslo\" />
        </div>

        <button type=\"submit\" class=\"btn btn-success custom-button\">Vytvoriť účet</button>

    ";
            // line 52
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
        </div>
        </div>
        </div>
        <div class=\"col-md-4\"></div>
        </div>
";
        } else {
            // line 59
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/sign.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 59,  102 => 52,  88 => 40,  77 => 31,  75 => 30,  52 => 10,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
{% if canRegister %}
    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
    <div class=\"login-page\" style=\"margin-top: 15%;\">
    <div class=\"form\">
    <h3 style=\"margin-bottom: 20px;\">Vytvorenie účtu</h3>

    {{ form_ajax('onRegister') }}

        <div class=\"form-group\">
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Meno\" />
        </div>

        <div class=\"form-group\">
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Email\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group\">
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Username\" />
            </div>
        {% endif %}

        <div class=\"form-group\">
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Heslo\" />
        </div>

        <button type=\"submit\" class=\"btn btn-success custom-button\">Vytvoriť účet</button>

    {{ form_close() }}
        </div>
        </div>
        </div>
        <div class=\"col-md-4\"></div>
        </div>
{% else %}
    <!-- Registration is disabled. -->
{% endif %}", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/sign.htm", "");
    }
}
