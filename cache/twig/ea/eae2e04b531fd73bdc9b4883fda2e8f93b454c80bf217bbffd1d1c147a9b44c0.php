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

/* forms/layouts/xhr.html.twig */
class __TwigTemplate_e2286cb123ab55ebd2e874ae7f764daaa49807a4c6269f4cd918e6e2e614316d extends \Twig\Template
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
        if (($this->getAttribute(($context["form"] ?? null), "xhr_submit", []) == true)) {
            // line 2
            echo "  ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((("
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('" . $this->getAttribute(            // line 4
($context["form"] ?? null), "id", [])) . "');
        form.addEventListener('submit', function(e) {
            // prevent standard form submission
            e.preventDefault();
            // submit the form via Ajax
            var xhr = new XMLHttpRequest();
            xhr.open(form.getAttribute('method'), form.getAttribute('action'));
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('") . $this->getAttribute(            // line 14
($context["form"] ?? null), "id", [])) . "').innerHTML = xhr.responseText;
                }
            };
            xhr.send(new URLSearchParams(new FormData(form)).toString());
        });
    });
  "), 1 => ["group" => "bottom", "position" => "before", "priority" => 100]], "method");
        }
    }

    public function getTemplateName()
    {
        return "forms/layouts/xhr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form.xhr_submit == true %}
  {% do assets.addInlineJs(\"
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('\" ~ form.id ~ \"');
        form.addEventListener('submit', function(e) {
            // prevent standard form submission
            e.preventDefault();
            // submit the form via Ajax
            var xhr = new XMLHttpRequest();
            xhr.open(form.getAttribute('method'), form.getAttribute('action'));
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('\" ~ form.id ~ \"').innerHTML = xhr.responseText;
                }
            };
            xhr.send(new URLSearchParams(new FormData(form)).toString());
        });
    });
  \", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}
{% endif %}", "forms/layouts/xhr.html.twig", "D:\\laragon\\www\\my-grav-site\\user\\plugins\\form\\templates\\forms\\layouts\\xhr.html.twig");
    }
}
