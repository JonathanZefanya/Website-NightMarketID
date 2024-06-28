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

/* toggle_button.twig */
class __TwigTemplate_3929cc879d18fd8e43712bff24c69e96e9d5b96908ce227ade3399c780dee404 extends \Twig\Template
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
        echo "<div class='wrapper toggleAjax hide'>
    <div class='toggleButton'>
        <div title=\"";
        // line 3
        echo _gettext("Click to toggle");
        echo "\" class='container ";
        echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
        echo "'>
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
        echo "toggle-";
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo ".png\" alt='' />
            <table class='nospacing nopadding'>
                <tbody>
                    <tr>
                        <td class='toggleOn'>
                            <span class='hide'>";
        // line 9
        echo ($context["link_on"] ?? null);
        echo "</span>
                            <div>";
        // line 10
        echo twig_escape_filter($this->env, ($context["toggle_on"] ?? null), "html", null, true);
        echo "</div>
                        </td>
                        <td><div>&nbsp;</div></td>
                        <td class='toggleOff'>
                            <span class='hide'>";
        // line 14
        echo ($context["link_off"] ?? null);
        echo "</span>
                            <div>";
        // line 15
        echo twig_escape_filter($this->env, ($context["toggle_off"] ?? null), "html", null, true);
        echo "</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span class='hide callback'>";
        // line 20
        echo twig_escape_filter($this->env, ($context["callback"] ?? null), "html", null, true);
        echo "</span>
            <span class='hide text_direction'>";
        // line 21
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "toggle_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  65 => 15,  61 => 14,  54 => 10,  50 => 9,  40 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "toggle_button.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/toggle_button.twig");
    }
}
