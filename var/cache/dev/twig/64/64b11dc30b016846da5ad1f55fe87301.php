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

/* @EasyAdmin/crud/field/text_editor.html.twig */
class __TwigTemplate_f12fbd6bff708fbf07ecf4415f99febc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/text_editor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/text_editor.html.twig"));

        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "detail")) {
            // line 5
            echo twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5);
            echo "
    ";
        } else {
            // line 8
            echo "    ";
            $context["html_id"] = ("ea-text-editor-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "uniqueId", [], "any", false, false, false, 8));
            // line 9
            echo "    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"far fa-file-alt\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.text_editor.view_content", [], "EasyAdminBundle"), "html", null, true);
            echo "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "label", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  75 => 18,  71 => 17,  64 => 13,  58 => 10,  53 => 9,  50 => 8,  45 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% if ea.crud.currentAction == 'detail' %}
{{ field.value|raw }}
    {# {{ field.formattedValue|nl2br }} #}
{% else %}
    {% set html_id = 'ea-text-editor-' ~ field.uniqueId %}
    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#{{ html_id }}\">
        <i class=\"far fa-file-alt\"></i> {{ 'field.text_editor.view_content'|trans([], domain = 'EasyAdminBundle') }}
    </a>

    <div class=\"modal fade\" id=\"{{ html_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ field.label }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans([], domain = 'EasyAdminBundle') }}\">
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ field.value|raw }}
                </div>
            </div>
        </div>
    </div>
{% endif %}", "@EasyAdmin/crud/field/text_editor.html.twig", "C:\\xampp\\htdocs\\docthor — kopia (2)\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\text_editor.html.twig");
    }
}
