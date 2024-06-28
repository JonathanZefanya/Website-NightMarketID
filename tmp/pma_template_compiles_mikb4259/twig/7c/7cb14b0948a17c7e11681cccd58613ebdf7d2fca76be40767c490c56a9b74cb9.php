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

/* database/designer/delete_relation_panel.twig */
class __TwigTemplate_93256031a18ff29995d7d7df15250c6aaf0fba7e4f4cb42b5425dd479be310da extends \Twig\Template
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
        echo "<table id=\"layer_upd_relation\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\">
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab\">
                <table width=\"100%\" class=\"center\" cellpadding=\"2\" cellspacing=\"0\">
                    <tr>
                        <td colspan=\"3\" class=\"center nowrap\">
                            <strong>
                                ";
        // line 21
        echo _gettext("Delete relationship");
        // line 22
        echo "                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"center nowrap\">
                            <input id=\"del_button\" name=\"Button\" type=\"button\"
                                class=\"butt\" value=\"";
        // line 28
        echo _gettext("Delete");
        echo "\" />
                            <input id=\"cancel_button\" type=\"button\" class=\"butt\"
                                name=\"Button\" value=\"";
        // line 30
        echo _gettext("Cancel");
        echo "\" />
                        </td>
                    </tr>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/designer/delete_relation_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  62 => 28,  54 => 22,  52 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/delete_relation_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/delete_relation_panel.twig");
    }
}
