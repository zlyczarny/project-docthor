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
class __TwigTemplate_76d58a503b56655155a8a20448cc8982 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "podglad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "podglad.html.twig"));

        // line 4
        echo "

<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "formattedValue", [], "any", false, false, false, 6), "html", null, true);
        echo "\" download>
<i class=\"fa fa-download\" aria-hidden=\"true\"></i>
Pobierz</a><br>


";
        // line 12
        echo "
    ";
        // line 13
        $context["html_id"] = ("ea-text-editor-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 13, $this->source); })()), "uniqueId", [], "any", false, false, false, 13));
        // line 14
        echo "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
        echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
        <i class=\"far fa-file-alt\"></i> Podgląd  </a>

    <div class=\"modal fade\" id=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-body\">
                    <embed src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "formattedValue", [], "any", false, false, false, 22), "html", null, true);
        echo "\" width=\"100%\" height=\"600\" >
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  75 => 22,  67 => 17,  60 => 14,  58 => 13,  55 => 12,  47 => 6,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 {{ dump() }}
#}


<a href=\"{{ field.formattedValue }}\" download>
<i class=\"fa fa-download\" aria-hidden=\"true\"></i>
Pobierz</a><br>


{# Podgląd #}

    {% set html_id = 'ea-text-editor-' ~ field.uniqueId %}
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#{{ html_id }}\">
        <i class=\"far fa-file-alt\"></i> Podgląd  </a>

    <div class=\"modal fade\" id=\"{{ html_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-body\">
                    <embed src=\"{{ field.formattedValue }}\" width=\"100%\" height=\"600\" >
                </div>
            </div>
        </div>
    </div>
", "podglad.html.twig", "C:\\xampp\\htdocs\\docthor\\templates\\podglad.html.twig");
    }
}
