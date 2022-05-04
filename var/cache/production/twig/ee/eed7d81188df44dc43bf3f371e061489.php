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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_c82d11ee4b539ddea5174deb1790531f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_0f0534680cb571185d48399955de42df800e0ae03db837d84a477a27ea48743f"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo twig_striptags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "textDirection", [], "any", false, false, false, 40))) {
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 336
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 35
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\" data-ea-content-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", false, false, false, 52)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 52)) : ("normal")))), "html", null, true);
        echo "\" data-ea-sidebar-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "sidebarWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "sidebarWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "sidebarWidth", [], "any", false, false, false, 52)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 52)) : ("normal")))), "html", null, true);
        echo "\">
    ";
        // line 53
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 56
        echo "    ";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 326
        echo "
    ";
        // line 327
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 328
        echo "
    ";
        // line 329
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 334
        echo "    </body>
";
    }

    // line 52
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/page-layout.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 56
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/page-color-scheme.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 60
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        ob_start(function () { return ''; });
        // line 66
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 66), "avatarUrl", [], "any", false, false, false, 66))) {
            // line 67
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 70
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 70))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 74
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 74), "avatarUrl", [], "any", false, false, false, 74), "html", null, true);
            echo "\" />
            ";
        }
        // line 76
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
        ";
        // line 78
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 79
        echo "
        ";
        // line 80
        ob_start(function () { return ''; });
        // line 81
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 83
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 86
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 86))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86))), "html", null, true);
        echo "</span>
                    </div>
                </li>

                ";
        // line 90
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "
        <div class=\"wrapper\">
            ";
        // line 113
        $this->displayBlock('wrapper', $context, $blocks);
        // line 324
        echo "        </div>
    ";
    }

    // line 61
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 62));
        echo "
        ";
    }

    // line 90
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 91), "items", [], "any", false, false, false, 91)) > 0)) {
            // line 92
            echo "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 93), "items", [], "any", false, false, false, 93));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 94
                echo "                            <li>
                                ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 95) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 95))) {
                    // line 96
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 97
$context["item"], "isMenuSection", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 98), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 98), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 99), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 99), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 101
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 101))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 101), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 102
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 102), "html", null, true);
                    echo "</span>
                                    </a>
                                ";
                }
                // line 105
                echo "                            </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                    ";
        }
        // line 108
        echo "                ";
    }

    // line 113
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                <div class=\"responsive-header\">
                    ";
        // line 115
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 142
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 146
        $this->displayBlock('sidebar', $context, $blocks);
        // line 168
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 174
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 174)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 174), "isSearchEnabled", [], "any", false, false, false, 174));
        // line 175
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 176
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 275
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 278
        $this->displayBlock('content', $context, $blocks);
        // line 319
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 115
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate\">
                            ";
        // line 121
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 126
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 128
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 132
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 132), "avatarDisplayed", [], "any", false, false, false, 132)) {
            // line 133
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 135
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 135))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 137
        echo "                            </a>

                            ";
        // line 139
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 121
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 122)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 122));
        echo "\">
                                    ";
        // line 123
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 123);
        echo "
                                </a>
                            ";
    }

    // line 146
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "                            <header class=\"main-header\">
                                ";
        // line 148
        $this->displayBlock('header', $context, $blocks);
        // line 162
        echo "                            </header>

                            ";
        // line 164
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 167
        echo "                        ";
    }

    // line 148
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 150
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 160
        echo "                                </nav>
                                ";
    }

    // line 150
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 152
        $this->displayBlock('header_logo', $context, $blocks);
        // line 158
        echo "                                        </div>
                                    ";
    }

    // line 152
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 153)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 153));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 154
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 154);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 164
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 165));
        echo "
                            ";
    }

    // line 176
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                            <div class=\"content-search\">
                                ";
        // line 178
        if (($context["has_search"] ?? null)) {
            // line 179
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 230
            echo "                                ";
        }
        // line 231
        echo "                            </div>

                            <div class=\"navbar-custom-menu\">
                                ";
        // line 234
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 246
        echo "                            </div>

                            <div class=\"dropdown dropdown-appearance\">
                                <a class=\"dropdown-appearance-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                    <i class=\"fas fa-adjust\"></i>
                                </a>

                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li class=\"dropdown-appearance-label\">
                                        <span>";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"light\">
                                            <i class=\"far fa-sun\"></i> <span>";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"dark\">
                                            <i class=\"far fa-moon\"></i> <span>";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"dropdown-item active\" data-ea-color-scheme=\"auto\">
                                            <i class=\"fas fa-desktop\"></i> <span>";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        ";
    }

    // line 179
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 182
        $this->displayBlock('search_form', $context, $blocks);
        // line 228
        echo "                                        </form>
                                    ";
    }

    // line 182
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                                                ";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 204
        echo "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 206), "query", [], "any", false, false, false, 206), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 206), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 207), "query", [], "any", false, false, false, 207), "get", [0 => "menuIndex"], "method", false, false, false, 207), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 208), "query", [], "any", false, false, false, 208), "get", [0 => "submenuIndex"], "method", false, false, false, 208), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">
                                                <input type=\"hidden\" name=\"signature\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unsetAll", [], "method", false, false, false, 210), "setAction", [0 => "index"], "method", false, false, false, 210), "setController", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 210), "query", [], "any", false, false, false, 210), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 210)], "method", false, false, false, 210), "getSignature", [], "method", false, false, false, 210), "html", null, true);
        echo "\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 216), "get", [0 => "query"], "method", false, false, false, 216), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 217
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 217), "get", [0 => "query"], "method", false, false, false, 217))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 217), "get", [0 => "query"], "method", true, true, false, 217) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 217), "get", [0 => "query"], "method", false, false, false, 217)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 217), "get", [0 => "query"], "method", false, false, false, 217), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 217), "translationParameters", [], "any", false, false, false, 217), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 217), "currentAction", [], "any", false, false, false, 217) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 217), "autofocusSearch", [], "any", false, false, false, 217) == true))) {
            echo " autofocus=\"autofocus\"";
        }
        echo ">
                                                        </label>

                                                        ";
        // line 220
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 220), "get", [0 => "query"], "method", false, false, false, 220)) {
            // line 221
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 221), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 225
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 183
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 184), "appliedFilters", [], "any", false, false, false, 184));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 185
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 186
                echo "                                                            ";
                // line 187
                echo "                                                            ";
                if (twig_test_iterable($context["value"])) {
                    // line 188
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 189
                        echo "                                                                    ";
                        // line 190
                        echo "                                                                    ";
                        if (twig_test_iterable($context["iterValue"])) {
                            // line 191
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                            foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                // line 192
                                echo "                                                                            <input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                echo "\">
                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 194
                            echo "                                                                    ";
                        } else {
                            // line 195
                            echo "                                                                        <input type=\"hidden\" name=\"filters[";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                            echo "\">
                                                                    ";
                        }
                        // line 197
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                                                            ";
                } else {
                    // line 199
                    echo "                                                                <input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
                                                            ";
                }
                // line 201
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                                ";
    }

    // line 234
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 237
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 238), "isNameDisplayed", [], "any", false, false, false, 238)) {
            // line 239
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 239), "name", [], "any", false, false, false, 239), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 241
        echo "                                        </a>

                                        ";
        // line 243
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 278
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 279
        echo "                            <article class=\"content\">
                                ";
        // line 280
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 304
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 306
        $this->displayBlock('main', $context, $blocks);
        // line 307
        echo "                                </section>

                                ";
        // line 309
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 317
        echo "                            </article>
                        ";
    }

    // line 280
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 281), "helpMessage", [], "any", true, true, false, 281) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 281), "helpMessage", [], "any", false, false, false, 281)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 281), "helpMessage", [], "any", false, false, false, 281)) : ("")));
        // line 282
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 283
        $this->displayBlock('content_header', $context, $blocks);
        // line 302
        echo "                                    </section>
                                ";
    }

    // line 283
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 284
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 286
        $this->displayBlock('content_title', $context, $blocks);
        // line 287
        echo "
                                                    ";
        // line 288
        $this->displayBlock('content_help', $context, $blocks);
        // line 295
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 298
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 301
        echo "                                        ";
    }

    // line 286
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 288
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 289
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 290
            echo "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 290), "helpMessage", [], "any", false, false, false, 290), "html_attr");
            echo "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 294
        echo "                                                    ";
    }

    // line 298
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 306
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 309
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 311
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 312
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 313
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 316
        echo "                                ";
    }

    // line 327
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 329
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 330), "bodyContents", [], "any", true, true, false, 330) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 330), "bodyContents", [], "any", false, false, false, 330)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 330), "bodyContents", [], "any", false, false, false, 330)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 331
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1149 => 333,  1140 => 331,  1135 => 330,  1131 => 329,  1125 => 327,  1121 => 316,  1115 => 313,  1112 => 312,  1109 => 311,  1106 => 310,  1102 => 309,  1096 => 306,  1084 => 299,  1080 => 298,  1076 => 294,  1068 => 290,  1065 => 289,  1061 => 288,  1055 => 286,  1051 => 301,  1049 => 298,  1044 => 295,  1042 => 288,  1039 => 287,  1037 => 286,  1033 => 284,  1029 => 283,  1024 => 302,  1022 => 283,  1019 => 282,  1016 => 281,  1012 => 280,  1007 => 317,  1005 => 309,  1001 => 307,  999 => 306,  995 => 304,  993 => 280,  990 => 279,  986 => 278,  979 => 243,  975 => 241,  969 => 239,  967 => 238,  963 => 237,  957 => 235,  953 => 234,  949 => 203,  943 => 202,  937 => 201,  927 => 199,  924 => 198,  918 => 197,  906 => 195,  903 => 194,  886 => 192,  881 => 191,  878 => 190,  876 => 189,  871 => 188,  868 => 187,  866 => 186,  861 => 185,  856 => 184,  852 => 183,  846 => 225,  838 => 221,  836 => 220,  822 => 217,  818 => 216,  809 => 210,  804 => 208,  800 => 207,  796 => 206,  792 => 204,  789 => 183,  785 => 182,  780 => 228,  778 => 182,  774 => 180,  770 => 179,  760 => 269,  752 => 264,  744 => 259,  737 => 255,  726 => 246,  724 => 234,  719 => 231,  716 => 230,  713 => 179,  711 => 178,  708 => 177,  704 => 176,  697 => 165,  693 => 164,  685 => 154,  678 => 153,  674 => 152,  669 => 158,  667 => 152,  664 => 151,  660 => 150,  655 => 160,  653 => 150,  650 => 149,  646 => 148,  642 => 167,  640 => 164,  636 => 162,  634 => 148,  631 => 147,  627 => 146,  620 => 123,  613 => 122,  609 => 121,  602 => 139,  598 => 137,  592 => 135,  586 => 133,  583 => 132,  578 => 128,  574 => 126,  572 => 121,  565 => 116,  561 => 115,  553 => 319,  551 => 278,  546 => 275,  544 => 176,  539 => 175,  537 => 174,  529 => 168,  527 => 146,  521 => 142,  519 => 115,  516 => 114,  512 => 113,  508 => 108,  505 => 107,  490 => 105,  483 => 102,  477 => 101,  470 => 99,  463 => 98,  461 => 97,  458 => 96,  456 => 95,  453 => 94,  436 => 93,  433 => 92,  430 => 91,  426 => 90,  419 => 62,  415 => 61,  410 => 324,  408 => 113,  404 => 111,  400 => 109,  398 => 90,  391 => 86,  387 => 85,  382 => 83,  378 => 81,  376 => 80,  373 => 79,  371 => 78,  368 => 77,  365 => 76,  359 => 74,  352 => 70,  347 => 67,  344 => 66,  342 => 65,  339 => 64,  336 => 61,  332 => 60,  325 => 57,  321 => 56,  314 => 54,  310 => 53,  299 => 52,  294 => 334,  292 => 329,  289 => 328,  287 => 327,  284 => 326,  282 => 60,  279 => 59,  276 => 56,  274 => 53,  263 => 52,  259 => 51,  255 => 48,  246 => 46,  241 => 45,  237 => 44,  231 => 37,  226 => 36,  222 => 35,  215 => 32,  211 => 31,  204 => 28,  200 => 27,  194 => 24,  189 => 23,  185 => 22,  178 => 19,  174 => 18,  167 => 15,  158 => 8,  154 => 7,  149 => 336,  147 => 51,  143 => 49,  141 => 44,  138 => 43,  132 => 41,  130 => 40,  127 => 39,  125 => 35,  122 => 34,  120 => 31,  117 => 30,  115 => 27,  112 => 26,  110 => 22,  107 => 21,  105 => 18,  99 => 16,  95 => 15,  92 => 14,  90 => 7,  83 => 5,  79 => 3,  77 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\xampp\\htdocs\\docthor\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
