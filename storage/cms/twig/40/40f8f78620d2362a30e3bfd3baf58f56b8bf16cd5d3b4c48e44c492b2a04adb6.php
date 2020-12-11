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

/* C:\xampp\htdocs\octobercms/themes/rainlab-vanilla/partials/footer.htm */
class __TwigTemplate_6f3c1a0ace55c3cc5d4008e4922aaf1515e341c247cce60bed6ba280216b94bb extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
        <h6>About</h6>
        <p class=\"text-justify\">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
      </div>

      <div class=\"col-xs-6 col-md-3\">
        <h6>Categories</h6>
        <ul class=\"footer-links\">
          <li><a href=\"\">C</a></li>
          <li><a href=\"\">UI Design</a></li>
          <li><a href=\"\">PHP</a></li>
          <li><a href=\"\">Java</a></li>
          <li><a href=\"\">Android</a></li>
          <li><a href=\"\">Templates</a></li>
        </ul>
      </div>

      <div class=\"col-xs-6 col-md-3\">
        <h6>Quick Links</h6>
        <ul class=\"footer-links\">
          <li><a href=\"\">About Us</a></li>
          <li><a href=\"\">Contact Us</a></li>
          <li><a href=\"\">Contribute</a></li>
          <li><a href=\"\">Privacy Policy</a></li>
          <li><a href=\"\">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-6 col-xs-12\">
        <p class=\"copyright-text\">Copyright &copy; 2020 All Rights Reserved by 
     <a href=\"\">Mário Letovanec</a>.
        </p>
      </div>

      <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <ul class=\"social-icons\">
          <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
          <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
        <h6>About</h6>
        <p class=\"text-justify\">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
      </div>

      <div class=\"col-xs-6 col-md-3\">
        <h6>Categories</h6>
        <ul class=\"footer-links\">
          <li><a href=\"\">C</a></li>
          <li><a href=\"\">UI Design</a></li>
          <li><a href=\"\">PHP</a></li>
          <li><a href=\"\">Java</a></li>
          <li><a href=\"\">Android</a></li>
          <li><a href=\"\">Templates</a></li>
        </ul>
      </div>

      <div class=\"col-xs-6 col-md-3\">
        <h6>Quick Links</h6>
        <ul class=\"footer-links\">
          <li><a href=\"\">About Us</a></li>
          <li><a href=\"\">Contact Us</a></li>
          <li><a href=\"\">Contribute</a></li>
          <li><a href=\"\">Privacy Policy</a></li>
          <li><a href=\"\">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-6 col-xs-12\">
        <p class=\"copyright-text\">Copyright &copy; 2020 All Rights Reserved by 
     <a href=\"\">Mário Letovanec</a>.
        </p>
      </div>

      <div class=\"col-md-4 col-sm-6 col-xs-12\">
        <ul class=\"social-icons\">
          <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
          <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
          <li><a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\octobercms/themes/rainlab-vanilla/partials/footer.htm", "");
    }
}
