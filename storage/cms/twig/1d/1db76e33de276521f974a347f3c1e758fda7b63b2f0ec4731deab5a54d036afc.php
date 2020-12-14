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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_48005454bb3073468e044df63338602952282b93eff401f9ee76849b470e98cc extends \Twig\Template
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
        $tags = array("styles" => 10, "if" => 18, "partial" => 30, "page" => 35, "framework" => 48, "scripts" => 49);
        $filters = array("escape" => 5, "theme" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'if', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://kit.fontawesome.com/2343ce67c6.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/home.css"]);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/footer.css"]);
        echo "\" rel=\"stylesheet\">
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "url", [], "any", false, false, true, 18) == "/login")) {
            // line 19
            echo "        <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/login.css"]);
            echo "\" rel=\"stylesheet\">
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["this"] ?? null), "page", [], "any", false, false, true, 20), "url", [], "any", false, false, true, 20) == "/sign-up")) {
            // line 21
            echo "        <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/signup.css"]);
            echo "\" rel=\"stylesheet\">
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["this"] ?? null), "page", [], "any", false, false, true, 22), "url", [], "any", false, false, true, 22) == "/posts")) {
            // line 23
            echo "        <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/posts.css"]);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 24
        echo " 
    </style>
    </head>
    <body>
        
        <header id=\"layout-header\">
                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "        </header>
        <!-- Content -->
        <section id=\"layout-content\">
                <div> 
                ";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 36
        echo "                </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\" class=\"site-footer\">
                ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/jquery.js"]);
        // line 47
        echo "\"></script>
        ";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  174 => 49,  163 => 48,  160 => 47,  158 => 45,  153 => 42,  149 => 41,  142 => 36,  140 => 35,  134 => 31,  130 => 30,  122 => 24,  116 => 23,  114 => 22,  109 => 21,  107 => 20,  102 => 19,  100 => 18,  96 => 17,  92 => 16,  85 => 11,  82 => 10,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {% styles %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://kit.fontawesome.com/2343ce67c6.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <link href=\"{{ ['assets/css/home.css']|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ ['assets/css/footer.css']|theme }}\" rel=\"stylesheet\">
        {% if this.page.url == '/login' %}
        <link href=\"{{ ['assets/css/login.css']|theme }}\" rel=\"stylesheet\">
        {% elseif this.page.url == '/sign-up' %}
        <link href=\"{{ ['assets/css/signup.css']|theme }}\" rel=\"stylesheet\">
        {% elseif this.page.url == '/posts' %}
        <link href=\"{{ ['assets/css/posts.css']|theme }}\" rel=\"stylesheet\">
        {% endif %} 
    </style>
    </head>
    <body>
        
        <header id=\"layout-header\">
                {% partial \"header\" %}
        </header>
        <!-- Content -->
        <section id=\"layout-content\">
                <div> 
                {% page %}
                </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\" class=\"site-footer\">
                {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ [
            'assets/javascript/jquery.js',
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/layouts/default.htm", "");
    }
}
