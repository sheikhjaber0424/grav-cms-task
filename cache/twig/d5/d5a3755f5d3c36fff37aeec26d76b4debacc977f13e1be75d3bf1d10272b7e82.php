<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_ede6dbd58457fb8ba7161dcc99503b2bf340f4eec9c3a8a5d6c9fa134c0cc75f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "\t</head>
\t<body id=\"top\" class=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
\t\t<div id=\"sb-site\">
\t\t\t";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
\t\t\t";
        // line 56
        $this->displayBlock('showcase', $context, $blocks);
        // line 57
        echo "
\t\t\t";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
\t\t\t";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "\t\t</div>

\t\t";
        // line 76
        $this->displayBlock('bottom', $context, $blocks);
        // line 86
        echo "\t</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            // line 9
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo "
\t\t\t\t\t|
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
\t\t\t";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"canonical\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\"/>

\t\t\t";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
\t\t\t";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
\t\t\t";
        // line 42
        $this->displayBlock('assets', $context, $blocks);
        // line 46
        echo "
\t\t";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103], "method");
        // line 20
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 21
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 22
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 23
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 24
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 25
        echo "
\t\t\t\t";
        // line 26
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 27
            echo "\t\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 28
            echo "\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 30
            echo "\t\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 31
            echo "\t\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 32
            echo "\t\t\t\t";
        }
        // line 33
        echo "\t\t\t";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 37
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 38
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/antimatter.js"], "method");
        // line 39
        echo "\t\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 40
        echo "\t\t\t";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 42
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 43
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t\t\t";
        // line 44
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        // line 52
        echo "
\t\t\t\t";
        // line 53
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t";
    }

    // line 56
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        // line 59
        echo "\t\t\t\t<section id=\"body\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t";
        // line 64
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
    }

    // line 70
    public function block_footer($context, array $blocks = [])
    {
        // line 71
        echo "
\t\t\t\t";
        // line 72
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "\t\t\t";
    }

    // line 76
    public function block_bottom($context, array $blocks = [])
    {
        // line 77
        echo "\t\t\t<script>
\t\t\t\t\$(function () {
\$(document).ready(function () {
\$.slidebars({hideControlClasses: true, scrollLock: true});
});
});
\t\t\t</script>
\t\t\t";
        // line 84
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 84,  291 => 77,  288 => 76,  284 => 73,  282 => 72,  279 => 71,  276 => 70,  271 => 61,  264 => 65,  262 => 64,  258 => 62,  256 => 61,  250 => 59,  247 => 58,  242 => 56,  238 => 54,  236 => 53,  233 => 52,  230 => 51,  223 => 44,  218 => 43,  215 => 42,  206 => 40,  203 => 39,  200 => 38,  197 => 37,  194 => 36,  191 => 35,  187 => 33,  184 => 32,  181 => 31,  178 => 30,  175 => 29,  172 => 28,  169 => 27,  167 => 26,  164 => 25,  161 => 24,  158 => 23,  155 => 22,  152 => 21,  149 => 20,  146 => 19,  143 => 18,  138 => 46,  136 => 42,  133 => 41,  131 => 35,  128 => 34,  126 => 18,  121 => 16,  117 => 15,  114 => 14,  112 => 13,  107 => 12,  100 => 9,  98 => 8,  94 => 6,  91 => 5,  84 => 86,  82 => 76,  78 => 74,  76 => 70,  73 => 69,  71 => 58,  68 => 57,  66 => 56,  63 => 55,  61 => 51,  56 => 49,  53 => 48,  51 => 5,  46 => 3,  43 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
\t<head>
\t\t{% block head %}
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t{% if header.title %}
\t\t\t\t\t{{ header.title|e('html') }}
\t\t\t\t\t|
\t\t\t\t{% endif %}
\t\t\t\t{{ site.title|e('html') }}</title>
\t\t\t{% include 'partials/metadata.html.twig' %}
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\"/>
\t\t\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

\t\t\t{% block stylesheets %}
\t\t\t\t{% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
\t\t\t\t{% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
\t\t\t\t{% do assets.addCss('theme://css-compiled/template.css', 101) %}
\t\t\t\t{% do assets.addCss('theme://css/custom.css', 100) %}
\t\t\t\t{% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
\t\t\t\t{% do assets.addCss('theme://css/slidebars.min.css') %}

\t\t\t\t{% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
\t\t\t\t\t{% do assets.addCss('theme://css/nucleus-ie10.css') %}
\t\t\t\t{% endif %}
\t\t\t\t{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
\t\t\t\t\t{% do assets.addCss('theme://css/nucleus-ie9.css') %}
\t\t\t\t\t{% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
\t\t\t\t{% endif %}
\t\t\t{% endblock %}

\t\t\t{% block javascripts %}
\t\t\t\t{% do assets.addJs('jquery', 101) %}
\t\t\t\t{% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
\t\t\t\t{% do assets.addJs('theme://js/antimatter.js') %}
\t\t\t\t{% do assets.addJs('theme://js/slidebars.min.js') %}
\t\t\t{% endblock %}

\t\t\t{% block assets deferred %}
\t\t\t\t{{ assets.css()|raw }}
\t\t\t\t{{ assets.js()|raw }}
\t\t\t{% endblock %}

\t\t{% endblock head %}
\t</head>
\t<body id=\"top\" class=\"{{ page.header.body_classes }}\">
\t\t<div id=\"sb-site\">
\t\t\t{% block header %}

\t\t\t\t{% include 'partials/header.html.twig' %}
\t\t\t{% endblock %}

\t\t\t{% block showcase %}{% endblock %}

\t\t\t{% block body %}
\t\t\t\t<section id=\"body\" class=\"{{ class }}\">
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t{% endblock %}

\t\t\t{% block footer %}

\t\t\t\t{% include 'partials/footer.html.twig' %}
\t\t\t{% endblock %}
\t\t</div>

\t\t{% block bottom %}
\t\t\t<script>
\t\t\t\t\$(function () {
\$(document).ready(function () {
\$.slidebars({hideControlClasses: true, scrollLock: true});
});
});
\t\t\t</script>
\t\t\t{{ assets.js('bottom')|raw }}
\t\t{% endblock %}
\t</body>
</html>
", "partials/base.html.twig", "D:\\laragon\\www\\my-grav-site\\user\\themes\\antimatter\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
