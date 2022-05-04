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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_05284cf70dc27ea074394db6cf457951 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content_title' => [$this, 'block_content_title'],
            'page_content' => [$this, 'block_page_content'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_ae251f77aeafab14e000f401b95ed3f0f058782f6bf8c8aeae1a2254f0f9aad7"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content";
    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "DocThor - Pulpit ";
        @trigger_error("The \"page_title\" block is deprecated, use \"content_title\" instead."." (\"@EasyAdmin/page/content.html.twig\" at line 8).", E_USER_DEPRECATED);
    }

    // line 11
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_title", $context, $blocks);
    }

    // line 13
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ekran startowy aplikacji DocThor.<br><br>
<img src=\"icons.png\">
<br><br><i class=\"fa fa-file-text\" aria-hidden=\"true\"></i> Docthor to system zarządzania dokumentami firmowym. Pozwalajacy na wyszukiwanie, filtrowanie, przeglądanie oraz pobieranie dokumentów. Dokumenty są kategoryzowane i udostępniane według ustalonych dostępów.

<br><br><i class=\"fa fa-question\" aria-hidden=\"true\"></i>
Wybierz interesujacą cie kategorie z menu po lewej stronie. Jeżeli nie masz dostępu do potrzebnych kategorii zgłoś się do przełożonego.
<br>
<br><i class=\"fa fa-info\" aria-hidden=\"true\"></i>
Projekt powstał w ramach realizacji projektu zaliczeniowego w studiach podyplomowych WSB. Projekt zrealizowany przez Katarzyna Drzewiecka oraz Bartosz Tomaszewski.  
<br><br>
Użyto:<br>
https://github.com/symfony/symfony<br>
https://github.com/EasyCorp/EasyAdminBundle<br>
https://github.com/dustin10/VichUploaderBundle<br>



    ";
        // line 30
        @trigger_error("The \"page_content\" block is deprecated, use \"main\" instead."." (\"@EasyAdmin/page/content.html.twig\" at line 30).", E_USER_DEPRECATED);
    }

    // line 33
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_content", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  97 => 30,  75 => 13,  68 => 11,  63 => 8,  59 => 7,  52 => 5,  48 => 2,  46 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "C:\\xampp\\htdocs\\docthor\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\content.html.twig");
    }
}
