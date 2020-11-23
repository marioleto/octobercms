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
class __TwigTemplate_abcf6917997550bad0f11052a4cec29194f1c12e7dc03db71228f34567b75a98 extends \Twig\Template
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
        echo "    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"login-page\" style=\"margin-top: 15%;\">
                <div class=\"form\">
                    <h3 style=\"margin-bottom: 20px;\">Log in to your account</h3>
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
        return array (  89 => 37,  83 => 34,  78 => 31,  74 => 29,  72 => 28,  49 => 8,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
    <div class=\"row\" style=\"max-width: 100%;\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"login-page\" style=\"margin-top: 15%;\">
                <div class=\"form\">
                    <h3 style=\"margin-bottom: 20px;\">Log in to your account</h3>
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
