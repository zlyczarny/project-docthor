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

/* podglad.html.twig */
class __TwigTemplate_18b8e5655058d4976280d72bdfadd956 extends Template
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
        // line 4
        echo "

<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 6), "html", null, true);
        echo "\" download>
<i class=\"fa fa-download\" aria-hidden=\"true\"></i>
Pobierz</a><br>


";
        // line 12
        echo "
    ";
        // line 13
        $context["html_id"] = ("ea-text-editor-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 13));
        // line 14
        echo "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
        echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
        echo "\">
        <i class=\"far fa-file-alt\"></i> Podgląd  </a>

    <div class=\"modal fade\" id=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-body\">
                    <embed src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 22), "html", null, true);
        echo "\" width=\"100%\" height=\"600\" >
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "podglad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  61 => 17,  54 => 14,  52 => 13,  49 => 12,  41 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "podglad.html.twig", "C:\\xampp\\htdocs\\docthor\\templates\\podglad.html.twig");
    }
}
