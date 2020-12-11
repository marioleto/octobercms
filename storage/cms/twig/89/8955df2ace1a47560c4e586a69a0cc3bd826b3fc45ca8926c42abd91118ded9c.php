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
class __TwigTemplate_ba760aaa6838914573a5cab83015fde85d9d778d1a79ce2fbe7d2111c6683f82 extends \Twig\Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array("form_ajax" => 9, "form_close" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['form_ajax', 'form_close']
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
    <div class=\"login-page\" style=\"margin-top: 15%;\">
    <div class=\"form\">
    <h3 style=\"margin-bottom: 20px;\">Vytvorenie účtu</h3>

    ";
            // line 9
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
            // line 29
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 30
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
            // line 39
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
            // line 51
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
        </div>
        </div>
        </div>
        <div class=\"col-md-4\"></div>
        </div>
";
        } else {
            // line 58
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
        return array (  133 => 58,  123 => 51,  109 => 39,  98 => 30,  96 => 29,  73 => 9,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
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
