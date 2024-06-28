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

/* table/search/column_comparison_operators.twig */
class __TwigTemplate_24d736f6438412a3f1068c187ebbc254d2e36a6cbd9d3093158ac456f37900b6 extends \Twig\Template
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
        echo "<select id=\"ColumnOperator";
        echo twig_escape_filter($this->env, ($context["search_index"] ?? null), "html", null, true);
        echo "\" name=\"criteriaColumnOperators[";
        echo twig_escape_filter($this->env, ($context["search_index"] ?? null), "html", null, true);
        echo "]\">
    ";
        // line 2
        echo ($context["type_operators"] ?? null);
        echo "
</select>
";
    }

    public function getTemplateName()
    {
        return "table/search/column_comparison_operators.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/column_comparison_operators.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/table/search/column_comparison_operators.twig");
    }
}
