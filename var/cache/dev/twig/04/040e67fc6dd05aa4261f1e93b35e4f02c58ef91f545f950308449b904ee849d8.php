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

/* index.html.twig */
class __TwigTemplate_10d56f381baae48b3cfff67f9508a3688c739b716ce796a03ffa4ee5d9ab04a5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Concordia Craft</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"css/footer.css\">
</head>
<body>
";
        // line 14
        echo twig_include($this->env, $context, "main/header.html.twig");
        echo "
    
    <main>
        <section>
            <div class=\"wrapper\">
            <div class=first>
             <div class=\"left-panel\">
               <h2>ЛИДЕРЫ <br>ГОЛОСУЮЩИХ</h2>
               <div class=\"avatar\">
                   <div class=\"av Theorenter\">
                      <img src=\"img/PlayerAvatarTheorenter.png\" alt=\"\">
                      <p class=\"pav\">Theorenter<p>
                      </div>
                   <div class=\"av NiceKita z\">
                      <img src=\"img/PlayerAvatarNiceKita.png\" alt=\"\">
                      <p class=\"pav\">NiceKita</p>
                   </div>
                   <div class=\" av ControlFace z\">
                      <img src=\"img/PlayerAvatarControlFace.png\" alt=\"\">
                      <p class=\"pav\">ControlFace</p>
                   </div>
               </div>
               <div class=\"golosovanie\">
               <button>ПРОГОЛОСОВАТЬ</button>
           <div class=\"volume\"></div>
               </div>

             </div>
             <div class=\"centrel-panel\">
                 <div class=\"logo\">
                  <img src=\"img/logo 1.png\" alt=\"\">
                  <br>
                  <div class=\"logo2\">
                  <img src=\"img/logo-tet.png\" alt=\"\">
                  </div>
                 </div>
                 <div class=\"start-game\">
                     <button>НАЧАТЬ ИГРУ</button>
                     <div class=\"line\"></div>
                     <div class=\"volume\"></div>

                 </div>

            </div>
            <div class=\"right-panel\">
                <h2>ИГРОКОВ НА<br> СЕРВЕРЕ</h2>
                 <div class=\"players\">CЕЙЧАС ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["playercount"]) || array_key_exists("playercount", $context) ? $context["playercount"] : (function () { throw new RuntimeError('Variable "playercount" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " </div>
                 <div class=\"volume\"></div>

            </div>
            </div>
        </div>
        <div class=\"pozfon1\"></div>
        </section>
        <section>
            <div class=\"title\"><span>О ПРОЕКТЕ</span></div>
            <div class=\"wrapper\">
              <div class=\"grid1\">
                <div class=\"grey\"></div>
                <div class=\"left-side\">
                    <h3>КООПЕРИРУЙТЕСЬ И КОНКУРИРУЙТЕ</h3>
                    <p>Объдиняйтесь с другими игроками,<br>
                        управляйте своей кооперацией,<br>
                        распределяйте земли, устанавливайте налоги,<br>
                        заключайте союзы и ведите войны.</p>
                </div>
                <div class=\" right-side\">
                    <h3>УЧАСТВУЙТЕ В ЭКОНОМИЧЕСКОЙ ЖИЗНИ</h3>
                    <p>Экономика сервера является следствием<br>
                    деятельносьти игроков: все товары на<br>
                        глобальном рынке - то, что было сбыто<br>
                            игроками. Золото - единая валюта сервера,<br>
                                которую вы можете заработать сбывая товары<br>
                                    на рынках.</p>
                </div>
                <div class=\"grey\"></div>
                <div class=\"grey\"></div>
                <div class=\"left-side\">
                    <h3>ИССЛЕДУЙТЕ НОВЫЙ КОНТЕНТ</h3>
                    <p>Исследуйте новые технологии, которые<br>
                    позволят вам создавать новые сплавы,<br>
                        оружие, броню; социальные исследования<br>
                            предоставят вам новые типы правления для<br>
                                вашей державы!</p>
                </div>
              </div>
            </div>
            <div  class=\"read-more\">
            <button >ПОДРОБНЕЕ</button>
            <div class=\"line\"></div>
           <div class=\"volume\"></div>
            </div>
            <div class=\"pozfon2\"></div>
            <div class=\"pozfon3\"></div>
        </section>
        <section>
            <div class=\"wrapper1\">
                <div class=\"block-text\">
                <div class=\"title\"><span>КАК НАЧАТЬ ИГРАТЬ</span></div><br>
                <p>1. Запустите Minecraft JAVA EDITION версии 1.16.5</p><br>
                <p>2. Перейдите во вкладку сетевой игры.</p><br>
                <p>3. Подключитесь по IP адресу <a href=\"\"> Play.ConcordiaCrtaft.org </a></p><br>
                <p>4. Посетите наше discord сообщество  <a href=\"discord.qq/D7Jdwxx7\">discord.qq/D7Jdwxx7</a></p><br>
                </div>
            </div>
        </section>
        <section>
            <div class=\"title double\"><span>НОВОСТИ</span></div> 
            <div class=\"wrapper\">
            <div class=\"grid2\">
                <div class=\"grid-column\">
                    <div class=\"grey1\"></div>
                   <div class=\"title-news\"><h2>МЫ ДОБАВИЛИ ЧЁ-ТО НОВОЕ </h2>
                    <p>14.03.2021</p>
                    </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey2\"></div>
                   <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                    <p>20.03.2021</p>
                    </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey1\"></div>
                   <div class=\"title-news\"><h2>И ТУТ МЫ ЧЁ-ТО ДОБАВИЛИ </h2>
                    <p>10.03.2021</p>
                    </div>
                </div>
            </div>
            <div  class=\"read-more\">
                <button >ВСЕ НОВОСТИ</button>
                <div class=\"line\"></div>
               <div class=\"volume2\"></div>
                </div>
            </div>
            <div class=\"pozfon4\"></div>
            <div class=\"pozfon5\"></div>
        </section>
    </main>
    <footer>
        <div class=\"wrapper\">
            <div class=\"second\">
                <nav>
                    <p>Проект</p>
                    <li><a href=\"\">Новости</a></li>
                    <li><a href=\"\">Админ-лист</a></li>
                    <li><a href=\"\">Бан-лист</a></li>
                    <li><a href=\"\">О проекте</a></li>
                </nav>
                <nav>
                    <p class=\"help\">Помощь</p>
                    <li><a href=\"\">Руководство</a></li>
                    <li><a href=\"\">Энциклопедия</a></li>
                    <li><a href=\"\">Правила</a></li>
                </nav>
                <nav>
                    <p>Сообщество</p>
                    <li><a href=\"\">Форум</a></li>
                    <li><a href=\"\">Вконтакте</a></li>
                    <li><a href=\"\">Discord</a></li>
                </nav>
            
            </div>
            <hr>
            <div class=\"third\">
                <span>© 2021 ConcordiaCraft. Все права упразднены</span>
                <div class=\"imgg\">
                <img src=\"/img/Ellipse.png\" alt=\"\">
                
                <img class=\"two\" src=\"/img/Ellipse.png\" alt=\"\">
                
            </div>
            
            </div>
        </div>
        <div class=\"pozfon6\"></div>
        <div class=\"pozfon7\"></div>
    </footer>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 60,  58 => 14,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Concordia Craft</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    <link rel=\"stylesheet\" href=\"css/footer.css\">
</head>
<body>
{{ include('main/header.html.twig') }}
    
    <main>
        <section>
            <div class=\"wrapper\">
            <div class=first>
             <div class=\"left-panel\">
               <h2>ЛИДЕРЫ <br>ГОЛОСУЮЩИХ</h2>
               <div class=\"avatar\">
                   <div class=\"av Theorenter\">
                      <img src=\"img/PlayerAvatarTheorenter.png\" alt=\"\">
                      <p class=\"pav\">Theorenter<p>
                      </div>
                   <div class=\"av NiceKita z\">
                      <img src=\"img/PlayerAvatarNiceKita.png\" alt=\"\">
                      <p class=\"pav\">NiceKita</p>
                   </div>
                   <div class=\" av ControlFace z\">
                      <img src=\"img/PlayerAvatarControlFace.png\" alt=\"\">
                      <p class=\"pav\">ControlFace</p>
                   </div>
               </div>
               <div class=\"golosovanie\">
               <button>ПРОГОЛОСОВАТЬ</button>
           <div class=\"volume\"></div>
               </div>

             </div>
             <div class=\"centrel-panel\">
                 <div class=\"logo\">
                  <img src=\"img/logo 1.png\" alt=\"\">
                  <br>
                  <div class=\"logo2\">
                  <img src=\"img/logo-tet.png\" alt=\"\">
                  </div>
                 </div>
                 <div class=\"start-game\">
                     <button>НАЧАТЬ ИГРУ</button>
                     <div class=\"line\"></div>
                     <div class=\"volume\"></div>

                 </div>

            </div>
            <div class=\"right-panel\">
                <h2>ИГРОКОВ НА<br> СЕРВЕРЕ</h2>
                 <div class=\"players\">CЕЙЧАС {{ playercount }} </div>
                 <div class=\"volume\"></div>

            </div>
            </div>
        </div>
        <div class=\"pozfon1\"></div>
        </section>
        <section>
            <div class=\"title\"><span>О ПРОЕКТЕ</span></div>
            <div class=\"wrapper\">
              <div class=\"grid1\">
                <div class=\"grey\"></div>
                <div class=\"left-side\">
                    <h3>КООПЕРИРУЙТЕСЬ И КОНКУРИРУЙТЕ</h3>
                    <p>Объдиняйтесь с другими игроками,<br>
                        управляйте своей кооперацией,<br>
                        распределяйте земли, устанавливайте налоги,<br>
                        заключайте союзы и ведите войны.</p>
                </div>
                <div class=\" right-side\">
                    <h3>УЧАСТВУЙТЕ В ЭКОНОМИЧЕСКОЙ ЖИЗНИ</h3>
                    <p>Экономика сервера является следствием<br>
                    деятельносьти игроков: все товары на<br>
                        глобальном рынке - то, что было сбыто<br>
                            игроками. Золото - единая валюта сервера,<br>
                                которую вы можете заработать сбывая товары<br>
                                    на рынках.</p>
                </div>
                <div class=\"grey\"></div>
                <div class=\"grey\"></div>
                <div class=\"left-side\">
                    <h3>ИССЛЕДУЙТЕ НОВЫЙ КОНТЕНТ</h3>
                    <p>Исследуйте новые технологии, которые<br>
                    позволят вам создавать новые сплавы,<br>
                        оружие, броню; социальные исследования<br>
                            предоставят вам новые типы правления для<br>
                                вашей державы!</p>
                </div>
              </div>
            </div>
            <div  class=\"read-more\">
            <button >ПОДРОБНЕЕ</button>
            <div class=\"line\"></div>
           <div class=\"volume\"></div>
            </div>
            <div class=\"pozfon2\"></div>
            <div class=\"pozfon3\"></div>
        </section>
        <section>
            <div class=\"wrapper1\">
                <div class=\"block-text\">
                <div class=\"title\"><span>КАК НАЧАТЬ ИГРАТЬ</span></div><br>
                <p>1. Запустите Minecraft JAVA EDITION версии 1.16.5</p><br>
                <p>2. Перейдите во вкладку сетевой игры.</p><br>
                <p>3. Подключитесь по IP адресу <a href=\"\"> Play.ConcordiaCrtaft.org </a></p><br>
                <p>4. Посетите наше discord сообщество  <a href=\"discord.qq/D7Jdwxx7\">discord.qq/D7Jdwxx7</a></p><br>
                </div>
            </div>
        </section>
        <section>
            <div class=\"title double\"><span>НОВОСТИ</span></div> 
            <div class=\"wrapper\">
            <div class=\"grid2\">
                <div class=\"grid-column\">
                    <div class=\"grey1\"></div>
                   <div class=\"title-news\"><h2>МЫ ДОБАВИЛИ ЧЁ-ТО НОВОЕ </h2>
                    <p>14.03.2021</p>
                    </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey2\"></div>
                   <div class=\"title-news\"><h2>ПРЕДРЕЛИЗ ПРОЕКТА 0.4.3</h2>
                    <p>20.03.2021</p>
                    </div>
                </div>
                <div class=\"grid-column\">
                    <div class=\"grey1\"></div>
                   <div class=\"title-news\"><h2>И ТУТ МЫ ЧЁ-ТО ДОБАВИЛИ </h2>
                    <p>10.03.2021</p>
                    </div>
                </div>
            </div>
            <div  class=\"read-more\">
                <button >ВСЕ НОВОСТИ</button>
                <div class=\"line\"></div>
               <div class=\"volume2\"></div>
                </div>
            </div>
            <div class=\"pozfon4\"></div>
            <div class=\"pozfon5\"></div>
        </section>
    </main>
    <footer>
        <div class=\"wrapper\">
            <div class=\"second\">
                <nav>
                    <p>Проект</p>
                    <li><a href=\"\">Новости</a></li>
                    <li><a href=\"\">Админ-лист</a></li>
                    <li><a href=\"\">Бан-лист</a></li>
                    <li><a href=\"\">О проекте</a></li>
                </nav>
                <nav>
                    <p class=\"help\">Помощь</p>
                    <li><a href=\"\">Руководство</a></li>
                    <li><a href=\"\">Энциклопедия</a></li>
                    <li><a href=\"\">Правила</a></li>
                </nav>
                <nav>
                    <p>Сообщество</p>
                    <li><a href=\"\">Форум</a></li>
                    <li><a href=\"\">Вконтакте</a></li>
                    <li><a href=\"\">Discord</a></li>
                </nav>
            
            </div>
            <hr>
            <div class=\"third\">
                <span>© 2021 ConcordiaCraft. Все права упразднены</span>
                <div class=\"imgg\">
                <img src=\"/img/Ellipse.png\" alt=\"\">
                
                <img class=\"two\" src=\"/img/Ellipse.png\" alt=\"\">
                
            </div>
            
            </div>
        </div>
        <div class=\"pozfon6\"></div>
        <div class=\"pozfon7\"></div>
    </footer>
</body>
</html>", "index.html.twig", "/var/www/templates/index.html.twig");
    }
}
