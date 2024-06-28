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

/* database/designer/table_list.twig */
class __TwigTemplate_811ab2de53e38a4bc330a5e3b06219e9f3c6039c4364d8eaacc4e75e1117740c extends \Twig\Template
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
        echo "<div id=\"layer_menu\" class=\"hide\">
    <div class=\"center\">
        <a href=\"#\" class=\"M_butt\" target=\"_self\" >
            <img title=\"";
        // line 4
        echo _gettext("Hide/Show all");
        echo "\"
                alt=\"v\"
                id=\"key_HS_all\"
                src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow1.png"], "method"), "html", null, true);
        echo "\"
                data-down=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow1.png"], "method"), "html", null, true);
        echo "\"
                data-right=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/rightarrow1.png"], "method"), "html", null, true);
        echo "\" />
        </a>
        <a href=\"#\" class=\"M_butt\" target=\"_self\" >
            <img alt=\"v\"
                id=\"key_HS\"
                title=\"";
        // line 14
        echo _gettext("Hide/Show tables with no relationship");
        echo "\"
                src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow2.png"], "method"), "html", null, true);
        echo "\"
                data-down=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow2.png"], "method"), "html", null, true);
        echo "\"
                data-right=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/rightarrow2.png"], "method"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div id=\"id_scroll_tab\" class=\"scroll_tab\">
        <table width=\"100%\" style=\"padding-left: 3px;\"></table>
    </div>
    ";
        // line 24
        echo "    <div class=\"center\">
        ";
        // line 25
        echo _gettext("Number of tables:");
        echo " <span id=\"tables_counter\">0</span>
    </div>
    <div id=\"layer_menu_sizer\">
        <div class=\"floatleft\">
            <img class=\"icon\"
                data-right=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/resizeright.png"], "method"), "html", null, true);
        echo "\"
                src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/resize.png"], "method"), "html", null, true);
        echo "\"/>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/designer/table_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  89 => 30,  81 => 25,  78 => 24,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  49 => 9,  45 => 8,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/table_list.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/table_list.twig");
    }
}
