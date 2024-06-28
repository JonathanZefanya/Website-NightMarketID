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

/* view_create.twig */
class __TwigTemplate_027e9e984821bc2c605ab008f1ef2651d28b0df812e14d7ad1ea69c2b40557cc extends \Twig\Template
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
        echo "<!-- CREATE VIEW options -->
<div id=\"div_view_options\">
    <form method=\"post\" action=\"view_create.php\">
    ";
        // line 4
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "
    <fieldset>
        <legend>
            ";
        // line 7
        if (($context["ajax_dialog"] ?? null)) {
            // line 8
            echo "                ";
            echo _gettext("Details");
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                ";
            if (($this->getAttribute(($context["view"] ?? null), "operation", [], "array") == "create")) {
                // line 11
                echo "                    ";
                echo _gettext("Create view");
                // line 12
                echo "                ";
            } else {
                // line 13
                echo "                    ";
                echo _gettext("Edit view");
                // line 14
                echo "                ";
            }
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </legend>
        <table class=\"rte_table\">
            ";
        // line 18
        if (($this->getAttribute(($context["view"] ?? null), "operation", [], "array") == "create")) {
            // line 19
            echo "                <tr>
                    <td class=\"nowrap\"><label for=\"or_replace\">OR REPLACE</label></td>
                    <td>
                        <input type=\"checkbox\" name=\"view[or_replace]\" id=\"or_replace\"
                            ";
            // line 23
            if ($this->getAttribute(($context["view"] ?? null), "or_replace", [], "array")) {
                echo " checked=\"checked\" ";
            }
            // line 24
            echo "                            value=\"1\" />
                    </td>
                </tr>
            ";
        }
        // line 28
        echo "
            <tr>
                <td class=\"nowrap\"><label for=\"algorithm\">ALGORITHM</label></td>
                <td>
                    <select name=\"view[algorithm]\" id=\"algorithm\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_algorithm_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 34
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 35
            if (($this->getAttribute(($context["view"] ?? null), "algorithm", [], "array") == $context["option"])) {
                // line 36
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 38
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>
                </td>
            </tr>

            <tr>
                <td class=\"nowrap\">";
        // line 45
        echo _gettext("Definer");
        echo "</td>
                <td><input type=\"text\" maxlength=\"100\" size=\"50\" name=\"view[definer]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["view"] ?? null), "definer", [], "array"), "html", null, true);
        echo "\" /></td>
            </tr>

            <tr>
                <td class=\"nowrap\">SQL SECURITY</td>
                <td>
                    <select name=\"view[sql_security]\">
                        <option value=\"\"></option>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_security_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 55
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 56
            if (($context["option"] == $this->getAttribute(($context["view"] ?? null), "sql_security", [], "array"))) {
                echo " selected=\"selected\" ";
            }
            // line 57
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </select>
                </td>
            </tr>

            ";
        // line 63
        if (($this->getAttribute(($context["view"] ?? null), "operation", [], "array") == "create")) {
            // line 64
            echo "                <tr>
                    <td class=\"nowrap\">";
            // line 65
            echo _gettext("VIEW name");
            echo "</td>
                    <td>
                        <input type=\"text\" size=\"20\" name=\"view[name]\" onfocus=\"this.select()\" maxlength=\"64\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["view"] ?? null), "name", [], "array"), "html", null, true);
            echo "\" />
                    </td>
                </tr>
            ";
        } else {
            // line 71
            echo "                <tr>
                    <td>
                        <input type=\"hidden\" name=\"view[name]\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["view"] ?? null), "name", [], "array"), "html", null, true);
            echo "\" />
                    </td>
                </tr>
            ";
        }
        // line 77
        echo "
            <tr>
                <td class=\"nowrap\">";
        // line 79
        echo _gettext("Column names");
        echo "</td>
                <td>
                    <input type=\"text\" maxlength=\"100\" size=\"50\" name=\"view[column_names]\" onfocus=\"this.select()\"  value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["view"] ?? null), "column_names", [], "array"), "html", null, true);
        echo "\" />
                </td>
            </tr>

            <tr>
                <td class=\"nowrap\">AS</td>
                <td>
                    <textarea name=\"view[as]\" rows=\"15\" cols=\"40\" dir=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "\" onclick=\"selectContent(this, sql_box_locked, true)\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["view"] ?? null), "as", [], "array"), "html", null, true);
        echo "</textarea><br/>
                    <input type=\"button\" value=\"Format\" id=\"format\" class=\"button sqlbutton\">
                    <span id=\"querymessage\"></span>
                </td>
            </tr>

            <tr>
                <td class=\"nowrap\">WITH CHECK OPTION</td>
                <td>
                    <select name=\"view[with]\">
                        <option value=\"\"></option>
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_with_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 100
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                                ";
            // line 101
            if (($context["option"] == $this->getAttribute(($context["view"] ?? null), "with", [], "array"))) {
                echo " selected=\"selected\" ";
            }
            // line 102
            echo "                            >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </select>
                </td>
            </tr>

        </table>
    </fieldset>

    <input type=\"hidden\" name=\"ajax_request\" value=\"1\" />
    <input type=\"hidden\" name=\"";
        // line 112
        echo ((($this->getAttribute(($context["view"] ?? null), "operation", [], "array") == "create")) ? ("createview") : ("alterview"));
        echo "\" value=\"1\" />

    ";
        // line 114
        if ((($context["ajax_dialog"] ?? null) == false)) {
            // line 115
            echo "        <input type=\"hidden\" name=\"ajax_dialog\" value=\"1\" />
        <input type=\"submit\" name=\"\" value=\"";
            // line 116
            echo _gettext("Go");
            echo "\" />
    ";
        }
        // line 118
        echo "
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "view_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 118,  275 => 116,  272 => 115,  270 => 114,  265 => 112,  255 => 104,  246 => 102,  242 => 101,  237 => 100,  233 => 99,  217 => 88,  207 => 81,  202 => 79,  198 => 77,  191 => 73,  187 => 71,  180 => 67,  175 => 65,  172 => 64,  170 => 63,  164 => 59,  155 => 57,  151 => 56,  146 => 55,  142 => 54,  131 => 46,  127 => 45,  120 => 40,  111 => 38,  107 => 36,  105 => 35,  100 => 34,  96 => 33,  89 => 28,  83 => 24,  79 => 23,  73 => 19,  71 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "view_create.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/view_create.twig");
    }
}
