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

/* main/header.html.twig */
class __TwigTemplate_513a732681d0981d92512468271b46906fa633bc2eb9b982a021eb1e443aba4a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/header.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"css/header.css\">
<header>
    <div class=\"wrapper\">
        <nav>
            <ul class=\"nav\">
                <li><a href=\"\">НОВОСТИ</a></li>
                <li><a href=\"\">КАРТА</a></li>
                <li><a href=\"\">МАГАЗИН</a></li>
                <li>
                    <select>
                        <option>ПОМОЩЬ</option>
                    </select>
                </li>
            </ul>
        </nav>
        <div class=\"cabinet\">
            <button type=\"button\">КАБИНЕТ</button>
            <div class=\"volume\"></div>
        </div>
    </div>
</header>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"css/header.css\">
<header>
    <div class=\"wrapper\">
        <nav>
            <ul class=\"nav\">
                <li><a href=\"\">НОВОСТИ</a></li>
                <li><a href=\"\">КАРТА</a></li>
                <li><a href=\"\">МАГАЗИН</a></li>
                <li>
                    <select>
                        <option>ПОМОЩЬ</option>
                    </select>
                </li>
            </ul>
        </nav>
        <div class=\"cabinet\">
            <button type=\"button\">КАБИНЕТ</button>
            <div class=\"volume\"></div>
        </div>
    </div>
</header>", "main/header.html.twig", "/var/www/templates/main/header.html.twig");
    }
}
