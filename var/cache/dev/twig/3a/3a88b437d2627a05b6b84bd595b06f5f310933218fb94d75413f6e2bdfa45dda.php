<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
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
        $__internal_d1e6203d1af27469eb5a456044d01d1f2b9c7d1d1059c5b222fd3920c53c9445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e6203d1af27469eb5a456044d01d1f2b9c7d1d1059c5b222fd3920c53c9445->enter($__internal_d1e6203d1af27469eb5a456044d01d1f2b9c7d1d1059c5b222fd3920c53c9445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_499b941c7faf36dbb7f1d12e097db710add74b25914d8f54d68fa1229e8a58ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499b941c7faf36dbb7f1d12e097db710add74b25914d8f54d68fa1229e8a58ba->enter($__internal_499b941c7faf36dbb7f1d12e097db710add74b25914d8f54d68fa1229e8a58ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1e6203d1af27469eb5a456044d01d1f2b9c7d1d1059c5b222fd3920c53c9445->leave($__internal_d1e6203d1af27469eb5a456044d01d1f2b9c7d1d1059c5b222fd3920c53c9445_prof);

        
        $__internal_499b941c7faf36dbb7f1d12e097db710add74b25914d8f54d68fa1229e8a58ba->leave($__internal_499b941c7faf36dbb7f1d12e097db710add74b25914d8f54d68fa1229e8a58ba_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5dee597f4f55bfa5893d450627c7f856ec15a2df38166244bbcf404b63b6463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dee597f4f55bfa5893d450627c7f856ec15a2df38166244bbcf404b63b6463->enter($__internal_e5dee597f4f55bfa5893d450627c7f856ec15a2df38166244bbcf404b63b6463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_980249d387e04e3c81878193b00ce4b773ba9d11969d2e57c652b6242d485043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980249d387e04e3c81878193b00ce4b773ba9d11969d2e57c652b6242d485043->enter($__internal_980249d387e04e3c81878193b00ce4b773ba9d11969d2e57c652b6242d485043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mediaff | Admin Panel";
        
        $__internal_980249d387e04e3c81878193b00ce4b773ba9d11969d2e57c652b6242d485043->leave($__internal_980249d387e04e3c81878193b00ce4b773ba9d11969d2e57c652b6242d485043_prof);

        
        $__internal_e5dee597f4f55bfa5893d450627c7f856ec15a2df38166244bbcf404b63b6463->leave($__internal_e5dee597f4f55bfa5893d450627c7f856ec15a2df38166244bbcf404b63b6463_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9e704bf7d22c45a24021a3d6f8360b6b1b19f3053ab4386dcef7e14823429b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e704bf7d22c45a24021a3d6f8360b6b1b19f3053ab4386dcef7e14823429b9->enter($__internal_b9e704bf7d22c45a24021a3d6f8360b6b1b19f3053ab4386dcef7e14823429b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5c277aab8c80359cc7d18120db0ae9b35fc2f6268b1f433ecffb1863a193ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c277aab8c80359cc7d18120db0ae9b35fc2f6268b1f433ecffb1863a193ffb->enter($__internal_e5c277aab8c80359cc7d18120db0ae9b35fc2f6268b1f433ecffb1863a193ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e5c277aab8c80359cc7d18120db0ae9b35fc2f6268b1f433ecffb1863a193ffb->leave($__internal_e5c277aab8c80359cc7d18120db0ae9b35fc2f6268b1f433ecffb1863a193ffb_prof);

        
        $__internal_b9e704bf7d22c45a24021a3d6f8360b6b1b19f3053ab4386dcef7e14823429b9->leave($__internal_b9e704bf7d22c45a24021a3d6f8360b6b1b19f3053ab4386dcef7e14823429b9_prof);

    }

    // line 14
    public function block_custcss($context, array $blocks = array())
    {
        $__internal_47266beed38a147ca73be5174f595a79c0d276da03b86aec96d308631942013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47266beed38a147ca73be5174f595a79c0d276da03b86aec96d308631942013a->enter($__internal_47266beed38a147ca73be5174f595a79c0d276da03b86aec96d308631942013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        $__internal_c1edbd176fc4e95d3054fd00c4c74264910c212f2f523c8dd0f3edcd01af9114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1edbd176fc4e95d3054fd00c4c74264910c212f2f523c8dd0f3edcd01af9114->enter($__internal_c1edbd176fc4e95d3054fd00c4c74264910c212f2f523c8dd0f3edcd01af9114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        echo " ";
        
        $__internal_c1edbd176fc4e95d3054fd00c4c74264910c212f2f523c8dd0f3edcd01af9114->leave($__internal_c1edbd176fc4e95d3054fd00c4c74264910c212f2f523c8dd0f3edcd01af9114_prof);

        
        $__internal_47266beed38a147ca73be5174f595a79c0d276da03b86aec96d308631942013a->leave($__internal_47266beed38a147ca73be5174f595a79c0d276da03b86aec96d308631942013a_prof);

    }

    // line 249
    public function block_body($context, array $blocks = array())
    {
        $__internal_a02818ac85130a212ab9bfff67abb82d8385ddd1fa136520635e8518e1a5370f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02818ac85130a212ab9bfff67abb82d8385ddd1fa136520635e8518e1a5370f->enter($__internal_a02818ac85130a212ab9bfff67abb82d8385ddd1fa136520635e8518e1a5370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f51cf64e11910a90d80458c73556d7fcce47350b17f2b9eea83d48510a7f766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f51cf64e11910a90d80458c73556d7fcce47350b17f2b9eea83d48510a7f766->enter($__internal_8f51cf64e11910a90d80458c73556d7fcce47350b17f2b9eea83d48510a7f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f51cf64e11910a90d80458c73556d7fcce47350b17f2b9eea83d48510a7f766->leave($__internal_8f51cf64e11910a90d80458c73556d7fcce47350b17f2b9eea83d48510a7f766_prof);

        
        $__internal_a02818ac85130a212ab9bfff67abb82d8385ddd1fa136520635e8518e1a5370f->leave($__internal_a02818ac85130a212ab9bfff67abb82d8385ddd1fa136520635e8518e1a5370f_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29484c34e87e19e80e17b1b6c1d1faa8375cb6acc21fc80fb8ab4323907ad20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29484c34e87e19e80e17b1b6c1d1faa8375cb6acc21fc80fb8ab4323907ad20b->enter($__internal_29484c34e87e19e80e17b1b6c1d1faa8375cb6acc21fc80fb8ab4323907ad20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8be58b51df92b0d04d09d4b5832f7da69e7b39b3f24490c9ac173e84ec5e8c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be58b51df92b0d04d09d4b5832f7da69e7b39b3f24490c9ac173e84ec5e8c1f->enter($__internal_8be58b51df92b0d04d09d4b5832f7da69e7b39b3f24490c9ac173e84ec5e8c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8be58b51df92b0d04d09d4b5832f7da69e7b39b3f24490c9ac173e84ec5e8c1f->leave($__internal_8be58b51df92b0d04d09d4b5832f7da69e7b39b3f24490c9ac173e84ec5e8c1f_prof);

        
        $__internal_29484c34e87e19e80e17b1b6c1d1faa8375cb6acc21fc80fb8ab4323907ad20b->leave($__internal_29484c34e87e19e80e17b1b6c1d1faa8375cb6acc21fc80fb8ab4323907ad20b_prof);

    }

    // line 270
    public function block_custjs($context, array $blocks = array())
    {
        $__internal_bd77632b5b070e0d9806604f6bbb352782a480f3c75b113c2fd4e6ce0a8b75ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd77632b5b070e0d9806604f6bbb352782a480f3c75b113c2fd4e6ce0a8b75ab->enter($__internal_bd77632b5b070e0d9806604f6bbb352782a480f3c75b113c2fd4e6ce0a8b75ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        $__internal_9125e9af6ebde5bb7abb496599bf1bcf6b12b9a33b66cad80a2cba1088ff5507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9125e9af6ebde5bb7abb496599bf1bcf6b12b9a33b66cad80a2cba1088ff5507->enter($__internal_9125e9af6ebde5bb7abb496599bf1bcf6b12b9a33b66cad80a2cba1088ff5507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        echo " ";
        
        $__internal_9125e9af6ebde5bb7abb496599bf1bcf6b12b9a33b66cad80a2cba1088ff5507->leave($__internal_9125e9af6ebde5bb7abb496599bf1bcf6b12b9a33b66cad80a2cba1088ff5507_prof);

        
        $__internal_bd77632b5b070e0d9806604f6bbb352782a480f3c75b113c2fd4e6ce0a8b75ab->leave($__internal_bd77632b5b070e0d9806604f6bbb352782a480f3c75b113c2fd4e6ce0a8b75ab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 270,  479 => 271,  477 => 270,  473 => 269,  468 => 267,  463 => 265,  460 => 264,  451 => 263,  434 => 249,  416 => 14,  403 => 16,  400 => 15,  398 => 14,  394 => 13,  389 => 11,  386 => 10,  377 => 9,  359 => 8,  348 => 273,  346 => 263,  335 => 255,  328 => 250,  326 => 249,  296 => 222,  281 => 210,  266 => 198,  251 => 186,  236 => 174,  221 => 162,  178 => 122,  124 => 71,  111 => 61,  103 => 56,  99 => 55,  95 => 54,  91 => 53,  71 => 36,  61 => 29,  49 => 20,  46 => 19,  44 => 9,  40 => 8,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Mediaff | Admin Panel{% endblock %}</title>
        {% block stylesheets %}
            <!-- Bootstrap -->
            <link href=\"{{ asset('resources/vendors_new/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <!-- Font Awesome -->
            <link href=\"{{ asset('resources/vendors_new/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
            {% block custcss %} {% endblock %}
            <!-- Custom Theme Style -->
            <link href=\"{{ asset('resources/build/css/custom.min.css') }}\" rel=\"stylesheet\">

        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                <div class=\"col-md-3 left_col menu_fixed\">
                    <div class=\"left_col scroll-view\">
                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"{{ path('index') }}\" class=\"site_title\"><i class=\"fa fa-user-circle\"></i> <span>Mediaff Admin</span></a>
                        </div>
                        <div class=\"clearfix\"></div>

                        <!-- menu profile quick info
                        <div class=\"profile clearfix\">
                            <div class=\"profile_pic\">
                                <img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"...\" class=\"img-circle profile_img\">
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
                                            <li><a href=\"{{ path('index') }}\">General Overview</a></li>
                                            <li><a href=\"{{ path('index') }}\">Campaign Stats</a></li>
                                            <li><a href=\"{{ path('index') }}\">Subscriber Stats</a></li>
                                            <li><a href=\"{{ path('index') }}\">Partner Stats</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-edit\"></i> Campaing Manager <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ path('emailcampaigns') }}\">Email Campaigns</a></li>
                                            <!--<li><a href=\"form_advanced.html\">Advanced Components</a></li>
                                            <li><a href=\"form_validation.html\">Form Validation</a></li>
                                            <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                                            <li><a href=\"form_upload.html\">Form Upload</a></li>
                                            <li><a href=\"form_buttons.html\">Form Buttons</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a><i class=\"fa fa-desktop\"></i>Partners<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ path('index') }}\">General Elements</a></li>
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
                                                    <li class=\"sub_menu\"><a href=\"{{ path('newemailtempl') }}\">New Email Temaplate</a></li>
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
                                        <img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"\">Mediaff Admin
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
                                        <li><a href=\"{{ path('login') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
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
                                                <span class=\"image\"><img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                                <span class=\"image\"><img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                                <span class=\"image\"><img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                                <span class=\"image\"><img src=\"{{ asset('resources/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                    {% block body %}{% endblock %}
                </div>
                <!-- /page content -->
                <!-- footer -->
                <footer>
                    <div class=\"pull-right\">
                        Powered by <a href=\"{{ path('index') }}\">Mediaff.com</a>
                    </div>
                    <div class=\"clearfix\"></div>
                </footer>
                <!-- footer -->
            </div>
        </div>

        {% block javascripts %}
            <!-- JQuery file -->
            <script src=\"{{ asset('https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js') }}\"></script>
            <!-- Bootstrap JS -->
            <script src=\"{{ asset('resources/vendors_new/bootstrap/js/bootstrap.min.js') }}\"></script>
            <!-- Custom Theme Scripts -->
            <script src=\"{{ asset('resources/build/js/custom.min.js')}}\"></script>
        {% block custjs %} {% endblock %}

        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app\\Resources\\views\\base.html.twig");
    }
}
