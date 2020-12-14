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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/pages/posts.htm */
class __TwigTemplate_1e5dcadfec54e032399073de1e8ec6f30fb27af7d9d3851e3a8304d0d783c9c5 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 17, "if" => 33);
        $filters = array("escape" => 20, "page" => 36);
        $functions = array("range" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'page'],
                ['range']
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 7);
        // line 8
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 8);
        // line 9
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 9);
        // line 10
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 10);
        // line 11
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 11);
        // line 12
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 12);
        // line 13
        echo "
<div class=\"container-fluid\">
<div class=\"card-deck\">

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 18
            echo "
                <div class=\"card\" style=\"min-width: 600px; max-width: 600px; margin: auto; margin-bottom: 40px; margin-top: 40px; height: 650px; border-radius: 20px;\">
                  <img class=\"card-img-top\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 20), "path", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" alt=\"Post picture\" style=\"border-radius: 20px 20px 0px 0px; min-width: 600px; max-width: 600px; min-height: 400px; max-hright: 700px;\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</p>
                  </div>
                </div>
                
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
</div>

";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 33) > 1)) {
            // line 34
            echo "    <ul class=\"pagination\">
        ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 35) > 1)) {
                // line 36
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 36), "baseFileName", [], "any", false, false, true, 36), 36, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 36) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 38
            echo "
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 39)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 40
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 40) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 41, $this->source), "html", null, true);
                echo "</a>
         </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
        ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 45) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 45))) {
                // line 46
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "baseFileName", [], "any", false, false, true, 46), 46, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 46) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 48
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 48,  173 => 46,  171 => 45,  168 => 44,  157 => 41,  152 => 40,  148 => 39,  145 => 38,  139 => 36,  137 => 35,  134 => 34,  132 => 33,  127 => 30,  120 => 28,  110 => 23,  106 => 22,  101 => 20,  97 => 18,  92 => 17,  86 => 13,  84 => 12,  82 => 11,  80 => 10,  78 => 9,  76 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"container-fluid\">
<div class=\"card-deck\">

    {% for record in records %}

                <div class=\"card\" style=\"min-width: 600px; max-width: 600px; margin: auto; margin-bottom: 40px; margin-top: 40px; height: 650px; border-radius: 20px;\">
                  <img class=\"card-img-top\" src=\"{{ record.image.path }}\" alt=\"Post picture\" style=\"border-radius: 20px 20px 0px 0px; min-width: 600px; max-width: 600px; min-height: 400px; max-hright: 700px;\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ record.title }}</h5>
                    <p class=\"card-text\">{{ record.description }}</p>
                  </div>
                </div>
                
    {% else %}
        
    {% endfor %}
</div>
</div>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
         </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/pages/posts.htm", "");
    }
}
