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

/* partials/sidebar.html.twig */
class __TwigTemplate_0849bab4795f84192d113d26854936744b4e2ce305e30f00061245ffab66d39e extends \Twig\Template
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
        echo "<div id=\"side-div\">
\t<h4 class=\"recent\">Recent Pages
\t</h4>
\t<ul class=\"side-items\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "\t\t\t";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 7
            echo "\t\t\t<li class=\"";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\" class=\"button\" class=\"side-links\">
\t\t\t\t\t";
            // line 9
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                // line 10
                echo "\t\t\t\t\t\t<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  60 => 12,  54 => 10,  52 => 9,  48 => 8,  43 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"side-div\">
\t<h4 class=\"recent\">Recent Pages
\t</h4>
\t<ul class=\"side-items\">
\t\t{% for page in pages.children.visible|reverse %}
\t\t\t{% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
\t\t\t<li class=\"{{ current_page }}\">
\t\t\t\t<a href=\"{{ page.url }}\" class=\"button\" class=\"side-links\">
\t\t\t\t\t{% if page.header.icon %}
\t\t\t\t\t\t<i class=\"fa fa-{{ page.header.icon }}\"></i>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ page.menu }}
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
</div>
", "partials/sidebar.html.twig", "D:\\laragon\\www\\my-grav-site\\user\\themes\\antimatter\\templates\\partials\\sidebar.html.twig");
    }
}
