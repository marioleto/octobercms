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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/pages/log.htm */
class __TwigTemplate_1099825189e71a93c0c4518a4c5f9e557d250e3856f2990ce98691634c7f469f extends \Twig\Template
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
        $tags = array("component" => 1, "if" => 28);
        $filters = array("page" => 34);
        $functions = array("form_ajax" => 8, "form_close" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
                ['page'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"login-page\" style=\"margin-top: 15%;\">
                <div class=\"form\">
                    <h3 style=\"margin-bottom: 20px;\">Log in to your account!</h3>
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

        <div class=\"form-group\">
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Email\" />
        </div>

        <div class=\"form-group\">
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Password\" />
        </div>

        ";
        // line 28
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 29
            echo "
        ";
        }
        // line 31
        echo "
        <button type=\"submit\" class=\"btn btn-success custom-button\">Log in</button>
        <div class=\"new-acc\">
            <p>Don't have an account yet?<a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sign");
        echo "\" > Sign up</a> </p>
        </div>

        ";
        // line 37
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
        </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/log.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  108 => 34,  103 => 31,  99 => 29,  97 => 28,  74 => 8,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"login-page\" style=\"margin-top: 15%;\">
                <div class=\"form\">
                    <h3 style=\"margin-bottom: 20px;\">Log in to your account!</h3>
            {{ form_ajax('onSignin') }}

        <div class=\"form-group\">
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Email\" />
        </div>

        <div class=\"form-group\">
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Password\" />
        </div>

        {% if rememberLoginMode == 'ask' %}

        {% endif %}

        <button type=\"submit\" class=\"btn btn-success custom-button\">Log in</button>
        <div class=\"new-acc\">
            <p>Don't have an account yet?<a href=\"{{ 'sign'|page }}\" > Sign up</a> </p>
        </div>

        {{ form_close() }}
        </div>
        </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/log.htm", "");
    }
}
