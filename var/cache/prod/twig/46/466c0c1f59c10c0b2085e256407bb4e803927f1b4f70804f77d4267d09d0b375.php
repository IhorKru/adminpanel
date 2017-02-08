<?php

/* ::base.html.twig */
class __TwigTemplate_59fc70dc8d6fe9b6cc5bdfdb7d0ea5c11c6538030de52af257135ee5fddb3ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'custcss' => array($this, 'block_custcss'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'custjs' => array($this, 'block_custjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                <div class=\"col-md-3 left_col menu_fixed\">
                    <div class=\"left_col scroll-view\">
                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"site_title\"><i class=\"fa fa-user-circle\"></i> <span>Mediaff Admin</span></a>
                        </div>
                        <div class=\"clearfix\"></div>

                        <!-- menu profile quick info
                        <div class=\"profile clearfix\">
                            <div class=\"profile_pic\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                            </div>
                            <div class=\"profile_info\">
                                <span>Welcome,</span>
                                <h2>Mediaff Admin</h2>
                            </div>
                        </div>
                        
                        <!-- /menu profile quick info -->
                        <br />
                        <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <h3>General</h3>
                                <ul class=\"nav side-menu\">
                                    <li><a><i class=\"fa fa-home\"></i> Dashboards <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">General Overview</a></li>
                                            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Campaign Stats</a></li>
                                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Subscriber Stats</a></li>
                                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Partner Stats</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-edit\"></i> Campaing Manager <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emailcampaigns");
        echo "\">Email Campaigns</a></li>
                                            <!--<li><a href=\"form_advanced.html\">Advanced Components</a></li>
                                            <li><a href=\"form_validation.html\">Form Validation</a></li>
                                            <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                                            <li><a href=\"form_upload.html\">Form Upload</a></li>
                                            <li><a href=\"form_buttons.html\">Form Buttons</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-desktop\"></i>Partners<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">General Elements</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a><i class=\"fa fa-table\"></i>Campaigns<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"tables.html\">Tables</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"chartjs.html\">Chart JS</a></li>
                                            <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                                            <li><a href=\"morisjs.html\">Moris JS</a></li>
                                            <li><a href=\"echarts.html\">ECharts</a></li>
                                            <li><a href=\"other_charts.html\">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                                            <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </div>
                            <div class=\"menu_section\">
                                <h3>Tools & Instruments</h3>
                                <ul class=\"nav side-menu\">
                                    <!--<li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"e_commerce.html\">E-commerce</a></li>
                                            <li><a href=\"projects.html\">Projects</a></li>
                                            <li><a href=\"project_detail.html\">Project Detail</a></li>
                                            <li><a href=\"contacts.html\">Contacts</a></li>
                                            <li><a href=\"profile.html\">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"page_403.html\">403 Error</a></li>
                                            <li><a href=\"page_404.html\">404 Error</a></li>
                                            <li><a href=\"page_500.html\">500 Error</a></li>
                                            <li><a href=\"plain_page.html\">Plain Page</a></li>
                                            <li><a href=\"login.html\">Login Page</a></li>
                                            <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a><i class=\"fa fa-sitemap\"></i> Campaign Maint <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a>Email Campaigns<span class=\"fa fa-chevron-down\"></span></a>
                                                <ul class=\"nav child_menu\">
                                                    <li class=\"sub_menu\"><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newemailtempl");
        echo "\">New Email Temaplate</a></li>
                                                </ul>
                                            </li>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class=\"sidebar-footer hidden-small\">
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                            </a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
                                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->

                    </div>
                </div>
                <!-- top navigation -->
                <div class=\"top_nav\">
                    <div class=\"nav_menu\">
                        <nav>
                            <div class=\"nav toggle\">
                                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                            </div>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"\">
                                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">Mediaff Admin
                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                        <!--<li><a href=\"javascript:;\"> Profile</a></li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <span class=\"badge bg-red pull-right\">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href=\"javascript:;\">Help</a></li>-->
                                        <li><a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role=\"presentation\" class=\"dropdown\">
                                    <!--<a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <span class=\"badge bg-green\">6</span>
                                    </a>-->
                                    <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                                        <li>
                                            <a>
                                                <span class=\"image\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class=\"time\">3 mins ago</span>
                                                </span>
                                                <span class=\"message\">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class=\"image\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class=\"time\">3 mins ago</span>
                                                </span>
                                                <span class=\"message\">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class=\"image\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class=\"time\">3 mins ago</span>
                                                </span>
                                                <span class=\"message\">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class=\"image\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class=\"time\">3 mins ago</span>
                                                </span>
                                                <span class=\"message\">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"text-center\">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class=\"fa fa-angle-right\"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <div class=\"right_col\" role=\"main\">
                    ";
        // line 249
        $this->displayBlock('body', $context, $blocks);
        // line 250
        echo "                </div>
                <!-- /page content -->
                <!-- footer -->
                <footer>
                    <div class=\"pull-right\">
                        Powered by <a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Mediaff.com</a>
                    </div>
                    <div class=\"clearfix\"></div>
                </footer>
                <!-- footer -->
            </div>
        </div>

        ";
        // line 263
        $this->displayBlock('javascripts', $context, $blocks);
        // line 273
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Mediaff | Admin Panel";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <!-- Bootstrap -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Font Awesome -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
        // line 14
        $this->displayBlock('custcss', $context, $blocks);
        // line 15
        echo "            <!-- Custom Theme Style -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
    }

    // line 14
    public function block_custcss($context, array $blocks = array())
    {
        echo " ";
    }

    // line 249
    public function block_body($context, array $blocks = array())
    {
    }

    // line 263
    public function block_javascripts($context, array $blocks = array())
    {
        // line 264
        echo "            <!-- JQuery file -->
            <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap JS -->
            <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Scripts -->
            <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 270
        $this->displayBlock('custjs', $context, $blocks);
        // line 271
        echo "
        ";
    }

    // line 270
    public function block_custjs($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 270,  413 => 271,  411 => 270,  407 => 269,  402 => 267,  397 => 265,  394 => 264,  391 => 263,  386 => 249,  380 => 14,  373 => 16,  370 => 15,  368 => 14,  364 => 13,  359 => 11,  356 => 10,  353 => 9,  347 => 8,  342 => 273,  340 => 263,  329 => 255,  322 => 250,  320 => 249,  290 => 222,  275 => 210,  260 => 198,  245 => 186,  230 => 174,  215 => 162,  172 => 122,  118 => 71,  105 => 61,  97 => 56,  93 => 55,  89 => 54,  85 => 53,  65 => 36,  55 => 29,  43 => 20,  40 => 19,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app/Resources\\views/base.html.twig");
    }
}
