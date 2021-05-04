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

/* news.html.twig */
class __TwigTemplate_d1d2a64e78390041b3833fdd83e61e9c4d47ea305ef7ebec3d430fc868960570 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>News</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"css/style-news.css\">
</head>
<body>
";
        // line 13
        echo twig_include($this->env, $context, "main/header.html.twig");
        echo "
    <div class=\"wrapper\">
        <div class=\"grid\">
            <div class=\"grid-column\">
            <div class=\"grey\"></div>
                   <div class=\"title-news\"><h2>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["newsarray"]) || array_key_exists("newsarray", $context) ? $context["newsarray"] : (function () { throw new RuntimeError('Variable "newsarray" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18), "header", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
                         <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["newsarray"]) || array_key_exists("newsarray", $context) ? $context["newsarray"] : (function () { throw new RuntimeError('Variable "newsarray" does not exist.', 19, $this->source); })()), 0, [], "array", false, false, false, 19), "text", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                         <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["newsarray"]) || array_key_exists("newsarray", $context) ? $context["newsarray"] : (function () { throw new RuntimeError('Variable "newsarray" does not exist.', 20, $this->source); })()), 0, [], "array", false, false, false, 20), "date", [], "any", false, false, false, 20), "d.m.Y"), "html", null, true);
        echo "</p>
                   </div>
            </div>
            <div class=\"grid-column\">
                <div class=\"grey\"></div>
                       <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                             <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                             <p>20.03.2021</p>
                       </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey\"></div>
                           <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                 <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                 <p>20.03.2021</p>
                           </div>
                    </div>
                    <div class=\"grid-column\">
                        <div class=\"grey\"></div>
                               <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                     <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                     <p>20.03.2021</p>
                               </div>
                        </div>
                        <div class=\"grid-column\">
                            <div class=\"grey\"></div>
                                   <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                         <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                         <p>20.03.2021</p>
                                   </div>
                            </div>
                            <div class=\"grid-column\">
                                <div class=\"grey\"></div>
                                       <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                             <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                             <p>20.03.2021</p>
                                       </div>
                                </div>

                              
                    
        </div>
        <div class=\"page-number\">
            <div class=\"back\"><button></button></div>
            <div class=\"page\"><H3>Cтраница 1 из ....</H3></div>
            <div class=\"next\"><button></button></div>
        </div>
    </div>
    
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  62 => 18,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>News</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"css/style-news.css\">
</head>
<body>
{{ include('main/header.html.twig') }}
    <div class=\"wrapper\">
        <div class=\"grid\">
            <div class=\"grid-column\">
            <div class=\"grey\"></div>
                   <div class=\"title-news\"><h2>{{newsarray[0].header}}</h2>
                         <p>{{newsarray[0].text}}</p>
                         <p>{{newsarray[0].date|date(\"d.m.Y\")}}</p>
                   </div>
            </div>
            <div class=\"grid-column\">
                <div class=\"grey\"></div>
                       <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                             <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                             <p>20.03.2021</p>
                       </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey\"></div>
                           <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                 <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                 <p>20.03.2021</p>
                           </div>
                    </div>
                    <div class=\"grid-column\">
                        <div class=\"grey\"></div>
                               <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                     <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                     <p>20.03.2021</p>
                               </div>
                        </div>
                        <div class=\"grid-column\">
                            <div class=\"grey\"></div>
                                   <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                         <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                         <p>20.03.2021</p>
                                   </div>
                            </div>
                            <div class=\"grid-column\">
                                <div class=\"grey\"></div>
                                       <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                                             <p>Мы реализовали x,y,z Тут нужно добавить ещё какого-нибудь текста, чтоб он автоматически обрезался после трёх..ю</p>
                                             <p>20.03.2021</p>
                                       </div>
                                </div>

                              
                    
        </div>
        <div class=\"page-number\">
            <div class=\"back\"><button></button></div>
            <div class=\"page\"><H3>Cтраница 1 из ....</H3></div>
            <div class=\"next\"><button></button></div>
        </div>
    </div>
    
</body>
</html>", "news.html.twig", "/var/www/templates/news.html.twig");
    }
}
