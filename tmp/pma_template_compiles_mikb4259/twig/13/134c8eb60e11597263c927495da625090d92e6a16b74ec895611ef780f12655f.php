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

/* table/search/search_and_replace.twig */
class __TwigTemplate_34071e9d94016c4d49b25f3f5ae040c406f97fa8d1299bcea369558c197e73e0 extends \Twig\Template
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
        echo _gettext("Find:");
        // line 2
        echo "<input type=\"text\" value=\"\" name=\"find\" required />
";
        // line 3
        echo _gettext("Replace with:");
        // line 4
        echo "<input type=\"text\" value=\"\" name=\"replaceWith\" />

";
        // line 6
        echo _gettext("Column:");
        // line 7
        echo "<select name=\"columnIndex\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "        ";
            $context["type"] = preg_replace("@\\(.*@s", "", $this->getAttribute(($context["column_types"] ?? null), $context["i"], [], "array"));
            // line 10
            echo "        ";
            if (($this->getAttribute(($context["sql_types"] ?? null), "getTypeClass", [0 => ($context["type"] ?? null)], "method") == "CHAR")) {
                // line 11
                echo "            ";
                $context["column"] = $this->getAttribute(($context["column_names"] ?? null), $context["i"], [], "array");
                // line 12
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                ";
                // line 13
                echo twig_escape_filter($this->env, ($context["column"] ?? null), "html", null, true);
                echo "
            </option>
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</select>

";
        // line 19
        $this->loadTemplate("checkbox.twig", "table/search/search_and_replace.twig", 19)->display(twig_to_array(["html_field_id" => "useRegex", "html_field_name" => "useRegex", "label" => _gettext("Use regular expression"), "checked" => false, "onclick" => false]));
    }

    public function getTemplateName()
    {
        return "table/search/search_and_replace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 17,  70 => 16,  64 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  46 => 8,  43 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/search_and_replace.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/table/search/search_and_replace.twig");
    }
}
