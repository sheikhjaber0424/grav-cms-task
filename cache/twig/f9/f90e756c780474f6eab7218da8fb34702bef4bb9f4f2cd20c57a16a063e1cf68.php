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

/* partials/header.html.twig */
class __TwigTemplate_6476b813c5db435125bb69df49e3b42cf04e40dbbeb9f0ff244ae87b60a86367 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\">
\t<div class=\"container-header\">
\t\t<div id=\"logo\">

\t\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "\"><img height=\"100px\" width=\"90px\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/logo.png\"/></a>
\t\t</div>
\t\t";
        // line 7
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 7)->display($context);
        // line 8
        echo "\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  43 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
\t<div class=\"container-header\">
\t\t<div id=\"logo\">

\t\t\t<a href=\"{{ base_url_relative }}\"><img height=\"100px\" width=\"90px\" src=\"{{ theme_url }}/images/logo.png\"/></a>
\t\t</div>
\t\t{% include 'partials/navigation.html.twig' %}
\t</div>
</header>
", "partials/header.html.twig", "D:\\laragon\\www\\my-grav-site\\user\\themes\\antimatter\\templates\\partials\\header.html.twig");
    }
}
