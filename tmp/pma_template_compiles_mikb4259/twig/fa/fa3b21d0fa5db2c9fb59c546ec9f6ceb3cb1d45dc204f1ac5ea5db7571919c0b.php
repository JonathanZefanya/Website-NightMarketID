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

/* database/designer/side_menu.twig */
class __TwigTemplate_14cd488205524b2af3557784a6b33a7fc11d5f32a67e78e32e1c594437bee6f9 extends \Twig\Template
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
        if ( !($context["visual_builder"] ?? null)) {
            // line 2
            echo "    <div id=\"name-panel\">
        <span id=\"page_name\">
            ";
            // line 4
            echo twig_escape_filter($this->env, (((($context["selected_page"] ?? null) == null)) ? (_gettext("Untitled")) : (($context["selected_page"] ?? null))), "html", null, true);
            echo "
        </span>
        <span id=\"saved_state\">
            ";
            // line 7
            echo (((($context["selected_page"] ?? null) == null)) ? ("*") : (""));
            echo "
        </span>
    </div>
";
        }
        // line 11
        echo "<div class=\"designer_header side-menu\" id=\"side_menu\">
    <a class=\"M_butt\" id=\"key_Show_left_menu\" href=\"#\">
        <img title=\"";
        // line 13
        echo _gettext("Show/Hide tables list");
        echo "\"
             alt=\"v\"
             src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow2_m.png"], "method"), "html", null, true);
        echo "\"
             data-down=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow2_m.png"], "method"), "html", null, true);
        echo "\"
             data-up=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/uparrow2_m.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 19
        echo _gettext("Show/Hide tables list");
        // line 20
        echo "        </span>
    </a>
    <a href=\"#\" id=\"toggleFullscreen\" class=\"M_butt\">
        <img title=\"";
        // line 23
        echo _gettext("View in fullscreen");
        echo "\"
             src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/viewInFullscreen.png"], "method"), "html", null, true);
        echo "\"
             data-enter=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/viewInFullscreen.png"], "method"), "html", null, true);
        echo "\"
             data-exit=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/exitFullscreen.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\"
              data-exit=\"";
        // line 28
        echo _gettext("Exit fullscreen");
        echo "\"
              data-enter=\"";
        // line 29
        echo _gettext("View in fullscreen");
        echo "\">
            ";
        // line 30
        echo _gettext("View in fullscreen");
        // line 31
        echo "        </span>
    </a>
    <a href=\"#\" id=\"addOtherDbTables\" class=\"M_butt\">
        <img title=\"";
        // line 34
        echo _gettext("Add tables from other databases");
        echo "\"
             src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/other_table.png"], "method"), "html", null, true);
        echo "\"/>
        <span class=\"hide hidable\">
            ";
        // line 37
        echo _gettext("Add tables from other databases");
        // line 38
        echo "        </span>
    </a>
    ";
        // line 40
        if ( !($context["visual_builder"] ?? null)) {
            // line 41
            echo "        <a id=\"newPage\" href=\"#\" class=\"M_butt\">
            <img title=\"";
            // line 42
            echo _gettext("New page");
            echo "\"
                 alt=\"\"
                 src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/page_add.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 46
            echo _gettext("New page");
            // line 47
            echo "            </span>
        </a>
        <a href=\"#\" id=\"editPage\" class=\"M_butt ajax\">
            <img title=\"";
            // line 50
            echo _gettext("Open page");
            echo "\"
                 src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/page_edit.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 53
            echo _gettext("Open page");
            // line 54
            echo "            </span>
        </a>
        <a href=\"#\" id=\"savePos\" class=\"M_butt\">
            <img title=\"";
            // line 57
            echo _gettext("Save page");
            echo "\"
                 src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/save.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 60
            echo _gettext("Save page");
            // line 61
            echo "            </span>
        </a>
        <a href=\"#\" id=\"SaveAs\" class=\"M_butt ajax\">
            <img title=\"";
            // line 64
            echo _gettext("Save page as");
            echo "\"
                 src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/save_as.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 67
            echo _gettext("Save page as");
            // line 68
            echo "            </span>
        </a>
        <a href=\"#\" id=\"delPages\" class=\"M_butt ajax\">
            <img title=\"";
            // line 71
            echo _gettext("Delete pages");
            echo "\"
                 src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/page_delete.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 74
            echo _gettext("Delete pages");
            // line 75
            echo "            </span>
        </a>
        <a href=\"#\" id=\"StartTableNew\" class=\"M_butt\">
            <img title=\"";
            // line 78
            echo _gettext("Create table");
            echo "\"
                 src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/table.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 81
            echo _gettext("Create table");
            // line 82
            echo "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"rel_button\">
            <img title=\"";
            // line 85
            echo _gettext("Create relationship");
            echo "\"
                 src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/relation.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 88
            echo _gettext("Create relationship");
            // line 89
            echo "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"display_field_button\">
            <img title=\"";
            // line 92
            echo _gettext("Choose column to display");
            echo "\"
                 src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/display_field.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 95
            echo _gettext("Choose column to display");
            // line 96
            echo "            </span>
        </a>
        <a href=\"#\" id=\"reloadPage\" class=\"M_butt\">
            <img title=\"";
            // line 99
            echo _gettext("Reload");
            echo "\"
                 src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/reload.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 102
            echo _gettext("Reload");
            // line 103
            echo "            </span>
        </a>
        <a href=\"";
            // line 105
            echo PhpMyAdmin\Util::getDocuLink("faq", "faq6-31");
            echo "\"
           target=\"documentation\"
           class=\"M_butt\">
            <img title=\"";
            // line 108
            echo _gettext("Help");
            echo "\"
                 src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/help.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 111
            echo _gettext("Help");
            // line 112
            echo "            </span>
        </a>
    ";
        }
        // line 115
        echo "    <a href=\"#\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "angular_direct", [], "array"), "html", null, true);
        echo "\" id=\"angular_direct_button\">
        <img title=\"";
        // line 116
        echo _gettext("Angular links");
        echo " / ";
        echo _gettext("Direct links");
        echo "\"
             src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/ang_direct.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 119
        echo _gettext("Angular links");
        echo " / ";
        echo _gettext("Direct links");
        // line 120
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "snap_to_grid", [], "array"), "html", null, true);
        echo "\" id=\"grid_button\">
        <img title=\"";
        // line 123
        echo _gettext("Snap to grid");
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/grid.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 125
        echo _gettext("Snap to grid");
        // line 126
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "small_big_all", [], "array"), "html", null, true);
        echo "\" id=\"key_SB_all\">
        <img title=\"";
        // line 129
        echo _gettext("Small/Big All");
        echo "\"
             alt=\"v\"
             src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow1.png"], "method"), "html", null, true);
        echo "\"
             data-down=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/downarrow1.png"], "method"), "html", null, true);
        echo "\"
             data-right=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/rightarrow1.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 135
        echo _gettext("Small/Big All");
        // line 136
        echo "        </span>
    </a>
    <a href=\"#\" id=\"SmallTabInvert\" class=\"M_butt\">
        <img title=\"";
        // line 139
        echo _gettext("Toggle small/big");
        echo "\"
             src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/bottom.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 142
        echo _gettext("Toggle small/big");
        // line 143
        echo "        </span>
    </a>
    <a href=\"#\" id=\"relLineInvert\" class=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "relation_lines", [], "array"), "html", null, true);
        echo "\" >
        <img title=\"";
        // line 146
        echo _gettext("Toggle relationship lines");
        echo "\"
             src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/toggle_lines.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 149
        echo _gettext("Toggle relationship lines");
        // line 150
        echo "        </span>
    </a>
    ";
        // line 152
        if ( !($context["visual_builder"] ?? null)) {
            // line 153
            echo "        <a href=\"#\" id=\"exportPages\" class=\"M_butt\" >
            <img title=\"";
            // line 154
            echo _gettext("Export schema");
            echo "\"
                 src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/export.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 157
            echo _gettext("Export schema");
            // line 158
            echo "            </span>
        </a>
    ";
        } else {
            // line 161
            echo "        <a id=\"build_query_button\"
           class=\"M_butt\"
           href=\"#\"
           class=\"M_butt\">
            <img title=\"";
            // line 165
            echo _gettext("Build Query");
            echo "\"
                 src=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/query_builder.png"], "method"), "html", null, true);
            echo "\" />
            <span class=\"hide hidable\">
                ";
            // line 168
            echo _gettext("Build Query");
            // line 169
            echo "            </span>
        </a>
    ";
        }
        // line 172
        echo "    <a href=\"#\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "side_menu", [], "array"), "html", null, true);
        echo "\" id=\"key_Left_Right\">
        <img title=\"";
        // line 173
        echo _gettext("Move Menu");
        echo "\" alt=\">\"
             data-right=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/2leftarrow_m.png"], "method"), "html", null, true);
        echo "\"
             src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/2rightarrow_m.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 177
        echo _gettext("Move Menu");
        // line 178
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute(($context["params_array"] ?? null), "pin_text", [], "array"), "html", null, true);
        echo "\" id=\"pin_Text\">
        <img title=\"";
        // line 181
        echo _gettext("Pin text");
        echo "\"
             alt=\">\"
             data-right=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/anchor.png"], "method"), "html", null, true);
        echo "\"
             src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/anchor.png"], "method"), "html", null, true);
        echo "\" />
        <span class=\"hide hidable\">
            ";
        // line 186
        echo _gettext("Pin text");
        // line 187
        echo "        </span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/designer/side_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 187,  485 => 186,  480 => 184,  476 => 183,  471 => 181,  467 => 180,  463 => 178,  461 => 177,  456 => 175,  452 => 174,  448 => 173,  443 => 172,  438 => 169,  436 => 168,  431 => 166,  427 => 165,  421 => 161,  416 => 158,  414 => 157,  409 => 155,  405 => 154,  402 => 153,  400 => 152,  396 => 150,  394 => 149,  389 => 147,  385 => 146,  381 => 145,  377 => 143,  375 => 142,  370 => 140,  366 => 139,  361 => 136,  359 => 135,  354 => 133,  350 => 132,  346 => 131,  341 => 129,  337 => 128,  333 => 126,  331 => 125,  324 => 123,  320 => 122,  316 => 120,  312 => 119,  307 => 117,  301 => 116,  296 => 115,  291 => 112,  289 => 111,  284 => 109,  280 => 108,  274 => 105,  270 => 103,  268 => 102,  263 => 100,  259 => 99,  254 => 96,  252 => 95,  247 => 93,  243 => 92,  238 => 89,  236 => 88,  231 => 86,  227 => 85,  222 => 82,  220 => 81,  215 => 79,  211 => 78,  206 => 75,  204 => 74,  199 => 72,  195 => 71,  190 => 68,  188 => 67,  183 => 65,  179 => 64,  174 => 61,  172 => 60,  167 => 58,  163 => 57,  158 => 54,  156 => 53,  151 => 51,  147 => 50,  142 => 47,  140 => 46,  135 => 44,  130 => 42,  127 => 41,  125 => 40,  121 => 38,  119 => 37,  114 => 35,  110 => 34,  105 => 31,  103 => 30,  99 => 29,  95 => 28,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  73 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  53 => 13,  49 => 11,  42 => 7,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/side_menu.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/side_menu.twig");
    }
}
