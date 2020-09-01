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

/* database/structure/empty_table.twig */
class __TwigTemplate_7cfe5db4fe80d7c131cbb3e20c4a65b333e15a75a1715baf462f2ba3cc526b1b extends \Twig\Template
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
        echo "<a class=\"truncate_table_anchor ajax\" href=\"sql.php\" data-post=\"";
        echo (isset($context["tbl_url_query"]) ? $context["tbl_url_query"] : null);
        echo "&amp;sql_query=";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["sql_query"]) ? $context["sql_query"] : null), "html", null, true);
        echo "&amp;message_to_show=";
        echo twig_escape_filter($this->env, (isset($context["message_to_show"]) ? $context["message_to_show"] : null), "html", null, true);
        echo "\">
    ";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/empty_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/empty_table.twig", "/data/phpadmin/phpMyAdmin-4.9.5-all-languages/templates/database/structure/empty_table.twig");
    }
}
