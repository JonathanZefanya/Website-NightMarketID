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

/* database/qbe/column_select_cell.twig */
class __TwigTemplate_903a4a7aad3fa68cfc07fc7448ca2a4bbc8455a96d6bbfaf16bfe7a747125193 extends \Twig\Template
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
        echo "<td class=\"center\">
    <select name=\"criteriaColumn[";
        // line 2
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" size=\"1\">
        <option value=\"\">&nbsp;</option>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["column"], "html", null, true);
            echo "\"";
            // line 6
            if (($context["column"] === ($context["selected"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $context["column"]), [" " => "&nbsp;"]), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select>
</td>
";
    }

    public function getTemplateName()
    {
        return "database/qbe/column_select_cell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  52 => 7,  46 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/qbe/column_select_cell.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/qbe/column_select_cell.twig");
    }
}
