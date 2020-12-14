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

/* C:\xampp\htdocs\octobercms/plugins/marioletovanec/posts/components/posts/default.htm */
class __TwigTemplate_79fbaf608fbdcb7068cf83a30c65c5cbee9d70830fc4bfde66eeaa5a421d01e9 extends \Twig\Template
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
        $tags = array("for" => 4, "if" => 20);
        $filters = array("escape" => 7, "page" => 23);
        $functions = array("range" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        echo "<div class=\"container-fluid\">
    <div class=\"card-deck\">
    
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 5
            echo "    
                    <div class=\"card\" style=\"min-width: 600px; max-width: 600px; margin: auto; margin-bottom: 40px; margin-top: 40px; height: 650px; border-radius: 20px;\">
                      <img class=\"card-img-top\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" alt=\"Post picture\" style=\"border-radius: 20px 20px 0px 0px; min-width: 600px; max-width: 600px; min-height: 400px; max-hright: 700px;\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                    
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
    </div>
    
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 20) > 1)) {
            // line 21
            echo "        <ul class=\"pagination\">
            ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 22) > 1)) {
                // line 23
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "baseFileName", [], "any", false, false, true, 23), 23, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 23) - 1)]);
                echo "\">&larr; Prev</a></li>
            ";
            }
            // line 25
            echo "    
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 26)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 27) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 28
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "baseFileName", [], "any", false, false, true, 28), 28, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 28, $this->source), "html", null, true);
                echo "</a>
             </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    
            ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 32) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 32))) {
                // line 33
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 33), "baseFileName", [], "any", false, false, true, 33), 33, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 33) + 1)]);
                echo "\">Next &rarr;</a></li>
            ";
            }
            // line 35
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/plugins/marioletovanec/posts/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  148 => 33,  146 => 32,  143 => 31,  132 => 28,  127 => 27,  123 => 26,  120 => 25,  114 => 23,  112 => 22,  109 => 21,  107 => 20,  102 => 17,  95 => 15,  85 => 10,  81 => 9,  76 => 7,  72 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
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
    {% endif %}", "C:\\xampp\\htdocs\\octobercms/plugins/marioletovanec/posts/components/posts/default.htm", "");
    }
}
