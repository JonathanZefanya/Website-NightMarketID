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

/* table/search/options_zoom.twig */
class __TwigTemplate_5c79a7b9f31dba50dd169b245cc9ee84d66353cb8c8116d225bddcabf46f86f7 extends \Twig\Template
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
        echo "<table class=\"data\">
    ";
        // line 3
        echo "    <tr>
        <td>
            <label for=\"dataLabel\">
                ";
        // line 6
        echo _gettext("Use this column to label each point");
        // line 7
        echo "            </label>
        </td>
        <td>
            <select name=\"dataLabel\" id=\"dataLabel\" >
                <option value = \"\">
                    ";
        // line 12
        echo _gettext("None");
        // line 13
        echo "                </option>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "                    ";
            if (((isset($context["data_label"]) || array_key_exists("data_label", $context)) && (($context["data_label"] ?? null) == twig_escape_filter($this->env, $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array"))))) {
                // line 16
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array"), "html", null, true);
                echo "\" selected=\"selected\">
                            ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array"), "html", null, true);
                echo "
                        </option>
                    ";
            } else {
                // line 20
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array"), "html", null, true);
                echo "\" >
                            ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array"), "html", null, true);
                echo "
                        </option>
                    ";
            }
            // line 24
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </select>
        </td>
    </tr>
    ";
        // line 29
        echo "    <tr>
        <td>
            <label for=\"maxRowPlotLimit\">
                ";
        // line 32
        echo _gettext("Maximum rows to plot");
        // line 33
        echo "            </label>
        </td>
        <td>
            <input type=\"number\"
                name=\"maxPlotLimit\"
                id=\"maxRowPlotLimit\"
                required=\"required\"
                value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["max_plot_limit"] ?? null), "html", null, true);
        echo "\" />
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/search/options_zoom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  99 => 33,  97 => 32,  92 => 29,  87 => 25,  81 => 24,  75 => 21,  70 => 20,  64 => 17,  59 => 16,  56 => 15,  52 => 14,  49 => 13,  47 => 12,  40 => 7,  38 => 6,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/options_zoom.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/table/search/options_zoom.twig");
    }
}
