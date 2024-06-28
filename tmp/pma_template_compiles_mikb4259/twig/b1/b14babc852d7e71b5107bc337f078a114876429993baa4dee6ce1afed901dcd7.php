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

/* table/relation/relational_dropdown.twig */
class __TwigTemplate_7db4fbd04393b5c150fd1021688833bfe2242ea41d36bd0837144cab97dbe119 extends \Twig\Template
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
        echo "<select name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
    <option value=\"\"></option>
    ";
        // line 3
        $context["seen_key"] = false;
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            // line 6
            if (( !(($context["foreign"] ?? null) === false) && ($context["value"] == ($context["foreign"] ?? null)))) {
                // line 7
                echo "                selected=\"selected\"";
                // line 8
                $context["seen_key"] = true;
            }
            // line 9
            echo ">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        if (( !(($context["foreign"] ?? null) === false) &&  !($context["seen_key"] ?? null))) {
            // line 14
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, ($context["foreign"] ?? null), "html", null, true);
            echo "\" selected=\"selected\">
            ";
            // line 15
            echo twig_escape_filter($this->env, ($context["foreign"] ?? null), "html", null, true);
            echo "
        </option>
    ";
        }
        // line 18
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "table/relation/relational_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  76 => 15,  71 => 14,  68 => 13,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  49 => 6,  45 => 5,  40 => 4,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/relational_dropdown.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/table/relation/relational_dropdown.twig");
    }
}
