<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* newseditor.html.twig */
class __TwigTemplate_f0c30e3d83d766454785b856c7008e224e2fe9ffd1bbba58898c4ea1e8df0d59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newseditor.html.twig"));

        // line 1
        echo "<head>

</head>

<body>
    <form name=\"form1\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsadded");
        echo "\" method=\"post\">
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "<br>
        <input type=\"text\" name=\"Author\"><br>
        Заголовок:<br>
        <input type=\"text\" name=\"Header\"><br>
        Текст<br>
        <input type=\"text\" name=\"Text\"><br>
        Дата<br>
        <input type=\"date\" name=\"Date\"><br>
        <input type=\"submit\">
    </form>
</body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "newseditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>

</head>

<body>
    <form name=\"form1\" action=\"{{ path('newsadded') }}\" method=\"post\">
        {{ param }}<br>
        <input type=\"text\" name=\"Author\"><br>
        Заголовок:<br>
        <input type=\"text\" name=\"Header\"><br>
        Текст<br>
        <input type=\"text\" name=\"Text\"><br>
        Дата<br>
        <input type=\"date\" name=\"Date\"><br>
        <input type=\"submit\">
    </form>
</body>", "newseditor.html.twig", "/var/www/templates/newseditor.html.twig");
    }
}
