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

/* database/designer/database_tables.twig */
class __TwigTemplate_5228052dde70da12771b4a10362be160f87896e16177b74f6cdf7f5fb4ee8982 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["designerTable"]) {
            // line 2
            echo "    ";
            $context["i"] = $this->getAttribute($context["loop"], "index0", []);
            // line 3
            echo "    ";
            $context["t_n_url"] = twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getDbTableString", [], "method"), "url");
            // line 4
            echo "    ";
            $context["db"] = $this->getAttribute($context["designerTable"], "getDatabaseName", [], "method");
            // line 5
            echo "    ";
            $context["db_url"] = twig_escape_filter($this->env, ($context["db"] ?? null), "url");
            // line 6
            echo "    ";
            $context["t_n"] = $this->getAttribute($context["designerTable"], "getDbTableString", [], "method");
            // line 7
            echo "    ";
            $context["table_name"] = twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "html");
            // line 8
            echo "    <input name=\"t_x[";
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "]\" type=\"hidden\" id=\"t_x_";
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "_\" />
    <input name=\"t_y[";
            // line 9
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "]\" type=\"hidden\" id=\"t_y_";
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "_\" />
    <input name=\"t_v[";
            // line 10
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "]\" type=\"hidden\" id=\"t_v_";
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "_\" />
    <input name=\"t_h[";
            // line 11
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "]\" type=\"hidden\" id=\"t_h_";
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "_\" />
    <table id=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\"
        db_url=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getDatabaseName", [], "method"), "url"), "html", null, true);
            echo "\"
        table_name_url=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "url"), "html", null, true);
            echo "\"
        cellpadding=\"0\"
        cellspacing=\"0\"
        class=\"designer_tab\"
        style=\"position:absolute; left:";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true)) ? ($this->getAttribute($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array"), "X", [], "array")) : (twig_random($this->env, range(20, 700)))), "html", null, true);
            echo "px; top:";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true)) ? ($this->getAttribute($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array"), "Y", [], "array")) : (twig_random($this->env, range(20, 550)))), "html", null, true);
            echo "px; display:";
            // line 21
            echo ((($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true) || (($context["display_page"] ?? null) ==  -1))) ? ("block") : ("none"));
            echo "; z-index: 1;\">
        <thead>
            <tr class=\"header\">
                ";
            // line 24
            if (($context["has_query"] ?? null)) {
                // line 25
                echo "                    <td class=\"select_all\">
                        <input class=\"select_all_1\"
                            type=\"checkbox\"
                            style=\"margin: 0;\"
                            value=\"select_all_";
                // line 29
                echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                echo "\"
                            id=\"select_all_";
                // line 30
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\"
                            title=\"";
                // line 31
                echo _gettext("Select all");
                echo "\"
                            table_name=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["table_name"] ?? null), "html", null, true);
                echo "\"
                            db_name=\"";
                // line 33
                echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
                echo "\">
                    </td>
                ";
            }
            // line 36
            echo "                <td class=\"small_tab\"
                    title=\"";
            // line 37
            echo _gettext("Show/hide columns");
            echo "\"
                    id=\"id_hide_tbody_";
            // line 38
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\"
                    table_name=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\">";
            echo ((( !$this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true) ||  !twig_test_empty($this->getAttribute($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array"), "V", [], "array")))) ? ("v") : ("&gt;"));
            echo "</td>
                <td class=\"small_tab_pref small_tab_pref_1\"
                    db=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getDatabaseName", [], "method"), "html", null, true);
            echo "\"
                    db_url=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getDatabaseName", [], "method"), "url"), "html", null, true);
            echo "\"
                    table_name=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "html", null, true);
            echo "\"
                    table_name_url=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "url"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/exec_small.png"], "method"), "html", null, true);
            echo "\"
                        title=\"";
            // line 46
            echo _gettext("See table structure");
            echo "\" />
                </td>
                <td id=\"id_zag_";
            // line 48
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\"
                    class=\"tab_zag nowrap tab_zag_noquery\"
                    table_name=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\"
                    query_set=\"";
            // line 51
            echo ((($context["has_query"] ?? null)) ? (1) : (0));
            echo "\">
                    <span class=\"owner\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getDatabaseName", [], "method"), "html", null, true);
            echo "</span>
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "html", null, true);
            echo "
                </td>
                ";
            // line 55
            if (($context["has_query"] ?? null)) {
                // line 56
                echo "                    <td class=\"tab_zag tab_zag_query\"
                        id=\"id_zag_";
                // line 57
                echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                echo "_2\"
                        table_name=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                echo "\">
                    </td>
               ";
            }
            // line 61
            echo "            </tr>
        </thead>
        <tbody id=\"id_tbody_";
            // line 63
            echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
            echo "\"";
            // line 64
            echo ((($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true) && twig_test_empty($this->getAttribute($this->getAttribute(($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array"), "V", [], "array")))) ? (" style=\"display: none\"") : (""));
            echo ">
            ";
            // line 65
            $context["display_field"] = $this->getAttribute($context["designerTable"], "getDisplayField", [], "method");
            // line 66
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_ID", [], "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 67
                echo "                ";
                $context["col_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array");
                // line 68
                echo "                ";
                $context["tmp_column"] = ((($context["t_n"] ?? null) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array"));
                // line 69
                echo "                ";
                $context["click_field_param"] = [0 => twig_escape_filter($this->env, $this->getAttribute(                // line 70
$context["designerTable"], "getTableName", [], "method"), "url"), 1 => twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(                // line 71
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array"))];
                // line 73
                echo "                ";
                if ( !$this->getAttribute($context["designerTable"], "supportsForeignkeys", [], "method")) {
                    // line 74
                    echo "                    ";
                    $context["click_field_param"] = twig_array_merge(($context["click_field_param"] ?? null), [0 => (($this->getAttribute(($context["tables_pk_or_unique_keys"] ?? null), ($context["tmp_column"] ?? null), [], "array", true, true)) ? (1) : (0))]);
                    // line 75
                    echo "                ";
                } else {
                    // line 76
                    echo "                    ";
                    // line 78
                    echo "                    ";
                    $context["click_field_param"] = twig_array_merge(($context["click_field_param"] ?? null), [0 => (($this->getAttribute(($context["tables_all_keys"] ?? null), ($context["tmp_column"] ?? null), [], "array", true, true)) ? (1) : (0))]);
                    // line 79
                    echo "                ";
                }
                // line 80
                echo "                ";
                $context["click_field_param"] = twig_array_merge(($context["click_field_param"] ?? null), [0 => ($context["db"] ?? null)]);
                // line 81
                echo "                <tr id=\"id_tr_";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["designerTable"], "getTableName", [], "method"), "url"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array"), "html", null, true);
                echo "\" class=\"tab_field";
                // line 82
                echo (((($context["display_field"] ?? null) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array"))) ? ("_3") : (""));
                echo "\" click_field_param=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_join_filter(($context["click_field_param"] ?? null), ","), "html", null, true);
                echo "\">
                    ";
                // line 84
                if (($context["has_query"] ?? null)) {
                    // line 85
                    echo "                        <td class=\"select_all\">
                            <input class=\"select_all_store_col\"
                                value=\"";
                    // line 87
                    echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array")), "html", null, true);
                    echo "\"
                                type=\"checkbox\"
                                id=\"select_";
                    // line 89
                    echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                    echo "._";
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array")), "html", null, true);
                    echo "\"
                                style=\"margin: 0;\"
                                title=\"";
                    // line 91
                    echo twig_escape_filter($this->env, sprintf(_gettext("Select \"%s\""), ($context["col_name"] ?? null)), "html", null, true);
                    echo "\"
                                id_check_all=\"select_all_";
                    // line 92
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                    echo "\"
                                db_name=\"";
                    // line 93
                    echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
                    echo "\"
                                table_name=\"";
                    // line 94
                    echo twig_escape_filter($this->env, ($context["table_name"] ?? null), "html", null, true);
                    echo "\"
                                col_name=\"";
                    // line 95
                    echo twig_escape_filter($this->env, ($context["col_name"] ?? null), "html", null, true);
                    echo "\">
                        </td>
                    ";
                }
                // line 98
                echo "                    <td width=\"10px\" colspan=\"3\" id=\"";
                echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                echo ".";
                // line 99
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array")), "html", null, true);
                echo "\">
                        <div class=\"nowrap\">
                            ";
                // line 101
                if ($this->getAttribute(($context["tables_pk_or_unique_keys"] ?? null), ((($context["t_n"] ?? null) . ".") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array")), [], "array", true, true)) {
                    // line 102
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/FieldKey_small.png"], "method"), "html", null, true);
                    echo "\" alt=\"*\" />
                            ";
                } else {
                    // line 104
                    echo "                                ";
                    $context["type"] = "designer/Field_small";
                    // line 105
                    echo "                                ";
                    if ((strstr($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "char") || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 106
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "text"))) {
                        // line 107
                        echo "                                    ";
                        $context["type"] = (($context["type"] ?? null) . "_char");
                        // line 108
                        echo "                                ";
                    } elseif ((((strstr($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "int") || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 109
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "float")) || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 110
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "double")) || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 111
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "decimal"))) {
                        // line 112
                        echo "                                    ";
                        $context["type"] = (($context["type"] ?? null) . "_int");
                        // line 113
                        echo "                                ";
                    } elseif (((strstr($this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "date") || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 114
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "time")) || strstr($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 115
($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "year"))) {
                        // line 116
                        echo "                                    ";
                        $context["type"] = (($context["type"] ?? null) . "_date");
                        // line 117
                        echo "                                ";
                    }
                    // line 118
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => ($context["type"] ?? null)], "method"), "html", null, true);
                    echo ".png\" alt=\"*\" />
                            ";
                }
                // line 120
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "COLUMN_NAME", [], "array"), $context["j"], [], "array"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["tab_column"] ?? null), ($context["t_n"] ?? null), [], "array"), "TYPE", [], "array"), $context["j"], [], "array"), "html", null, true);
                echo "
                        </div>
                    </td>
                    ";
                // line 123
                if (($context["has_query"] ?? null)) {
                    // line 124
                    echo "                        <td class=\"small_tab_pref small_tab_pref_click_opt\"
                            ";
                    // line 126
                    echo "                            option_col_name_modal=\"<strong>";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, sprintf(_gettext("Add an option for column \"%s\"."), ($context["col_name"] ?? null)), "html"), "html");
                    echo "</strong>\"
                            db_name=\"";
                    // line 127
                    echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
                    echo "\"
                            table_name=\"";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["table_name"] ?? null), "html", null, true);
                    echo "\"
                            col_name=\"";
                    // line 129
                    echo twig_escape_filter($this->env, ($context["col_name"] ?? null), "html", null, true);
                    echo "\"
                            db_table_name_url=\"";
                    // line 130
                    echo twig_escape_filter($this->env, ($context["t_n_url"] ?? null), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "getImgPath", [0 => "designer/exec_small.png"], "method"), "html", null, true);
                    echo "\" title=\"";
                    echo _gettext("Options");
                    echo "\" />
                        </td>
                    ";
                }
                // line 134
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "        </tbody>
    </table>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['designerTable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "database/designer/database_tables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 136,  426 => 134,  418 => 131,  414 => 130,  410 => 129,  406 => 128,  402 => 127,  397 => 126,  394 => 124,  392 => 123,  383 => 120,  377 => 118,  374 => 117,  371 => 116,  369 => 115,  368 => 114,  366 => 113,  363 => 112,  361 => 111,  360 => 110,  359 => 109,  357 => 108,  354 => 107,  352 => 106,  350 => 105,  347 => 104,  341 => 102,  339 => 101,  334 => 99,  330 => 98,  324 => 95,  320 => 94,  316 => 93,  312 => 92,  308 => 91,  301 => 89,  295 => 87,  291 => 85,  289 => 84,  285 => 83,  282 => 82,  276 => 81,  273 => 80,  270 => 79,  267 => 78,  265 => 76,  262 => 75,  259 => 74,  256 => 73,  254 => 71,  253 => 70,  251 => 69,  248 => 68,  245 => 67,  240 => 66,  238 => 65,  234 => 64,  231 => 63,  227 => 61,  221 => 58,  217 => 57,  214 => 56,  212 => 55,  207 => 53,  203 => 52,  199 => 51,  195 => 50,  190 => 48,  185 => 46,  181 => 45,  177 => 44,  173 => 43,  169 => 42,  165 => 41,  158 => 39,  154 => 38,  150 => 37,  147 => 36,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  119 => 25,  117 => 24,  111 => 21,  108 => 20,  105 => 19,  98 => 14,  94 => 13,  90 => 12,  84 => 11,  78 => 10,  72 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/database_tables.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/database_tables.twig");
    }
}
