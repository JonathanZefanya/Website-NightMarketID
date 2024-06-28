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

/* prefs_twofactor.twig */
class __TwigTemplate_bb526babb4e134cf9ad71d04cf305aa06eb3536007832738db9fc3256ff272ab extends \Twig\Template
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
        echo "<div class=\"group\">
<h2>
";
        // line 3
        echo _gettext("Two-factor authentication status");
        // line 4
        echo PhpMyAdmin\Util::showDocu("two_factor");
        echo "
</h2>
<div class=\"group-cnt\">
";
        // line 7
        if (($context["enabled"] ?? null)) {
            // line 8
            if ((($context["num_backends"] ?? null) == 0)) {
                // line 9
                echo "<p>";
                echo _gettext("Two-factor authentication is not available, please install optional dependencies to enable authentication backends.");
                echo "</p>
<p>";
                // line 10
                echo _gettext("Following composer packages are missing:");
                echo "</p>
<ul>
";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["missing"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "    <li><code>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dep", []), "html", null, true);
                    echo "</code> (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []), "html", null, true);
                    echo ")</li>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "</ul>
";
            } else {
                // line 17
                if (($context["backend_id"] ?? null)) {
                    // line 18
                    echo "<p>";
                    echo _gettext("Two-factor authentication is available and configured for this account.");
                    echo "</p>
";
                } else {
                    // line 20
                    echo "<p>";
                    echo _gettext("Two-factor authentication is available, but not configured for this account.");
                    echo "</p>
";
                }
            }
        } else {
            // line 24
            echo "<p>";
            echo _gettext("Two-factor authentication is not available, enable phpMyAdmin configuration storage to use it.");
            echo "</p>
";
        }
        // line 26
        echo "</div>
</div>

";
        // line 29
        if (($context["backend_id"] ?? null)) {
            // line 30
            echo "<div class=\"group\">
<h2>";
            // line 31
            echo twig_escape_filter($this->env, ($context["backend_name"] ?? null), "html", null, true);
            echo "</h2>
<div class=\"group-cnt\">
<p>";
            // line 33
            echo _gettext("You have enabled two factor authentication.");
            echo "</p>
<p>";
            // line 34
            echo twig_escape_filter($this->env, ($context["backend_description"] ?? null), "html", null, true);
            echo "</p>
<form method=\"POST\" action=\"prefs_twofactor.php\">
";
            // line 36
            echo PhpMyAdmin\Url::getHiddenInputs();
            echo "
<input type=\"submit\" name=\"2fa_remove\" value=\"";
            // line 37
            echo _gettext("Disable two-factor authentication");
            echo "\" />
</form>
</div>
</div>
";
        } elseif ((        // line 41
($context["num_backends"] ?? null) > 0)) {
            // line 42
            echo "<div class=\"group\">
<h2>";
            // line 43
            echo _gettext("Configure two-factor authentication");
            echo "</h2>
<div class=\"group-cnt\">
<form method=\"POST\" action=\"prefs_twofactor.php\">
";
            // line 46
            echo PhpMyAdmin\Url::getHiddenInputs();
            echo "
";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["backends"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["backend"]) {
                // line 48
                echo "<label>
<input type=\"radio\" name=\"2fa_configure\" ";
                // line 49
                if (($this->getAttribute($context["backend"], "id", [], "array") == "")) {
                    echo "checked=\"checked\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["backend"], "id", [], "array"), "html", null, true);
                echo "\"/>
<strong>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["backend"], "name", [], "array"), "html", null, true);
                echo "</strong>
<p>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["backend"], "description", [], "array"), "html", null, true);
                echo "</p>
</label>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "<input type=\"submit\" value=\"";
            echo _gettext("Configure two-factor authentication");
            echo "\" />
</form>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "prefs_twofactor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  166 => 51,  162 => 50,  154 => 49,  151 => 48,  147 => 47,  143 => 46,  137 => 43,  134 => 42,  132 => 41,  125 => 37,  121 => 36,  116 => 34,  112 => 33,  107 => 31,  104 => 30,  102 => 29,  97 => 26,  91 => 24,  83 => 20,  77 => 18,  75 => 17,  71 => 15,  60 => 13,  56 => 12,  51 => 10,  46 => 9,  44 => 8,  42 => 7,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "prefs_twofactor.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/prefs_twofactor.twig");
    }
}
