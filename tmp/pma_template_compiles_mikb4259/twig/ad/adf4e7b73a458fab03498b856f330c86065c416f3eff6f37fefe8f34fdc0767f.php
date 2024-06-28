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

/* server/variables/variable_table_head.twig */
class __TwigTemplate_550fa20c75820656ed8c0c39259e3513296f1780e0a243c7b8700818a02f1010 extends \Twig\Template
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
        echo "<thead>
    <tr class=\"var-header var-row\">
        <td class=\"var-action\">";
        // line 3
        echo _gettext("Action");
        echo "</td>
        <td class=\"var-name\">";
        // line 4
        echo _gettext("Variable");
        echo "</td>
        <td class=\"var-value\">";
        // line 5
        echo _gettext("Value");
        echo "</td>
    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "server/variables/variable_table_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/variables/variable_table_head.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/server/variables/variable_table_head.twig");
    }
}
