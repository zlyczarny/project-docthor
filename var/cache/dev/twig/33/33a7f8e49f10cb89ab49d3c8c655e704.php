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

/* reset_password/check_email.html.twig */
class __TwigTemplate_e4407790e0afa0ea625d49d72408d3c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"/bundles/easyadmin/app.css\" rel=\"stylesheet\" />
    <link href=\"../favicon-32x32.png\" rel=\"icon\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DocThor - Link zmiany hasła został wysłany";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  
<section class=\"vh-100\" style=\"background-color: #508bfc;\">
  <div class=\"container py-5 h-100\">
   <center><a href=\"/admin\"><h1><img src=\"..\\thor.png\">DocThor</h1></a></center>
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col-12 col-md-8 col-lg-2 col-xl-4\">
        <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
          <div class=\"card-body p-5 text-center\">
    <h3 class=\"h3 mb-3 font-weight-normal\">Zresetuj hasło</h3>
   
    <p>
        Jeżeli istnieje konto połączone z podanym adresem email, zostanie wysłana wiaodmość email zawierający link resetowania hasła.
        Link przedawni się za 60 minut <!-- ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 21, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 21, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 21), "ResetPasswordBundle"), "html", null, true);
        echo " -->.
    </p>
    <p>Jeśli nie widzisz wiadomości email, sprawdź folder SPAM lub <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">spróbuj ponownie</a>.</p>


        </div>
    </div>
  </div>
</section>
<footer class=\"text-center text-white fixed-bottom\" style=\"background-color: #21081a;\">


  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: #60a5fa;\">
    © 2022 Copyright:
    <a class=\"text-white\" href=\"/admin\">docthor.pl</a>
  </div>
  <!-- Copyright -->
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  125 => 21,  111 => 9,  101 => 8,  82 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link href=\"/bundles/easyadmin/app.css\" rel=\"stylesheet\" />
    <link href=\"../favicon-32x32.png\" rel=\"icon\" />
{% endblock %}
{% block title %}DocThor - Link zmiany hasła został wysłany{% endblock %}

{% block body %}
  
<section class=\"vh-100\" style=\"background-color: #508bfc;\">
  <div class=\"container py-5 h-100\">
   <center><a href=\"/admin\"><h1><img src=\"..\\thor.png\">DocThor</h1></a></center>
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col-12 col-md-8 col-lg-2 col-xl-4\">
        <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
          <div class=\"card-body p-5 text-center\">
    <h3 class=\"h3 mb-3 font-weight-normal\">Zresetuj hasło</h3>
   
    <p>
        Jeżeli istnieje konto połączone z podanym adresem email, zostanie wysłana wiaodmość email zawierający link resetowania hasła.
        Link przedawni się za 60 minut <!-- {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }} -->.
    </p>
    <p>Jeśli nie widzisz wiadomości email, sprawdź folder SPAM lub <a href=\"{{ path('app_forgot_password_request') }}\">spróbuj ponownie</a>.</p>


        </div>
    </div>
  </div>
</section>
<footer class=\"text-center text-white fixed-bottom\" style=\"background-color: #21081a;\">


  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: #60a5fa;\">
    © 2022 Copyright:
    <a class=\"text-white\" href=\"/admin\">docthor.pl</a>
  </div>
  <!-- Copyright -->
</footer>
{% endblock %}
", "reset_password/check_email.html.twig", "C:\\xampp\\htdocs\\docthor\\templates\\reset_password\\check_email.html.twig");
    }
}
