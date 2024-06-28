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

/* database/qbe/footer_options.twig */
class __TwigTemplate_729ed648573a868666f7e2e73329d8814ef97ed4fba3472ae4c5e77c808af335 extends \Twig\Template
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
        echo "<div class=\"floatleft\">
    ";
        // line 2
        if ((($context["type"] ?? null) == "row")) {
            // line 3
            echo "        ";
            echo _gettext("Add/Delete criteria rows");
            echo ":
    ";
        } else {
            // line 5
            echo "        ";
            echo _gettext("Add/Delete columns");
            echo ":
    ";
        }
        // line 7
        echo "    <select size=\"1\" name=\"";
        echo (((($context["type"] ?? null) == "row")) ? ("criteriaRowAdd") : ("criteriaColumnAdd"));
        echo "\">
        <option value=\"-3\">-3</option>
        <option value=\"-2\">-2</option>
        <option value=\"-1\">-1</option>
        <option value=\"0\" selected=\"selected\">0</option>
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/qbe/footer_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  41 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/qbe/footer_options.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/qbe/footer_options.twig");
    }
}
