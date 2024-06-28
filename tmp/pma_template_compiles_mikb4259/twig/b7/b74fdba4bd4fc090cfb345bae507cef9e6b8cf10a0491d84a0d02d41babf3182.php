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

/* display/export/options_rows.twig */
class __TwigTemplate_5158e5dfb56b2736195b64d599245b2c819f9266106f481c32cb87453f8d4e50 extends \Twig\Template
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
        echo "<div class=\"exportoptions\" id=\"rows\">
    <h3>";
        // line 2
        echo _gettext("Rows:");
        echo "</h3>
    <ul>
        <li>
            <input type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"";
        // line 6
        echo ((( !(null === ($context["allrows"] ?? null)) && (($context["allrows"] ?? null) == 0))) ? (" checked") : (""));
        echo ">
            <label for=\"radio_allrows_0\">";
        // line 7
        echo _gettext("Dump some row(s)");
        echo "</label>
            <ul>
                <li>
                    <label for=\"limit_to\">";
        // line 10
        echo _gettext("Number of rows:");
        echo "</label>
                    <input type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"";
        // line 12
        ob_start(function () { return ''; });
        // line 13
        echo "                            ";
        if ( !(null === ($context["limit_to"] ?? null))) {
            // line 14
            echo "                                ";
            echo twig_escape_filter($this->env, ($context["limit_to"] ?? null), "html", null, true);
            echo "
                            ";
        } elseif (( !twig_test_empty(        // line 15
($context["unlim_num_rows"] ?? null)) && (($context["unlim_num_rows"] ?? null) != 0))) {
            // line 16
            echo "                                ";
            echo twig_escape_filter($this->env, ($context["unlim_num_rows"] ?? null), "html", null, true);
            echo "
                            ";
        } else {
            // line 18
            echo "                                ";
            echo twig_escape_filter($this->env, ($context["number_of_rows"] ?? null), "html", null, true);
            echo "
                            ";
        }
        // line 20
        echo "                        ";
        $___internal_141ad1a69e8c2b55d7c930a93cdd34a27ce71e28f9589266ce0f78a7c9aad9c9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_141ad1a69e8c2b55d7c930a93cdd34a27ce71e28f9589266ce0f78a7c9aad9c9_);
        // line 20
        echo "\" onfocus=\"this.select()\">
                </li>
                <li>
                    <label for=\"limit_from\">";
        // line 23
        echo _gettext("Row to begin at:");
        echo "</label>
                    <input type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"";
        // line 25
        (( !(null === ($context["limit_from"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["limit_from"] ?? null), "html", null, true))) : (print (0)));
        echo "\" onfocus=\"this.select()\">
                </li>
            </ul>
        </li>
        <li>
            <input type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"";
        // line 31
        echo ((((null === ($context["allrows"] ?? null)) || (($context["allrows"] ?? null) == 1))) ? (" checked") : (""));
        echo ">
             <label for=\"radio_allrows_1\">";
        // line 32
        echo _gettext("Dump all rows");
        echo "</label>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/options_rows.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  99 => 31,  91 => 25,  87 => 23,  82 => 20,  80 => 12,  77 => 20,  71 => 18,  65 => 16,  63 => 15,  58 => 14,  55 => 13,  53 => 12,  49 => 10,  43 => 7,  39 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/options_rows.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/display/export/options_rows.twig");
    }
}
