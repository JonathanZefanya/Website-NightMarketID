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

/* server/variables/link_template.twig */
class __TwigTemplate_f5b3e53ff1459ebd97302b366a82b8d333800b87aea1b9ca79e6f9bc8267aa7f extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo "\" class=\"ajax saveLink hide\">
    ";
        // line 2
        echo PhpMyAdmin\Util::getIcon("b_save", _gettext("Save"));
        echo "
</a>
<a href=\"#\" class=\"cancelLink hide\">
    ";
        // line 5
        echo PhpMyAdmin\Util::getIcon("b_close", _gettext("Cancel"));
        echo "
</a>
";
        // line 7
        echo PhpMyAdmin\Util::getImage("b_help", _gettext("Documentation"), ["class" => "hide", "id" => "docImage"]);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "server/variables/link_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  46 => 7,  41 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/variables/link_template.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/server/variables/link_template.twig");
    }
}
