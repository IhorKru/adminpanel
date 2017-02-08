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
        $__internal_f758eb9c7eb116da687a5ab362dd6f51d0e86cfb6b112b42beb74a6e30f3f7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f758eb9c7eb116da687a5ab362dd6f51d0e86cfb6b112b42beb74a6e30f3f7fd->enter($__internal_f758eb9c7eb116da687a5ab362dd6f51d0e86cfb6b112b42beb74a6e30f3f7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4e238e404318a65731ad394f617891fa918e4cadc1c8df4d2d494161f0aeb74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e238e404318a65731ad394f617891fa918e4cadc1c8df4d2d494161f0aeb74a->enter($__internal_4e238e404318a65731ad394f617891fa918e4cadc1c8df4d2d494161f0aeb74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f758eb9c7eb116da687a5ab362dd6f51d0e86cfb6b112b42beb74a6e30f3f7fd->leave($__internal_f758eb9c7eb116da687a5ab362dd6f51d0e86cfb6b112b42beb74a6e30f3f7fd_prof);

        
        $__internal_4e238e404318a65731ad394f617891fa918e4cadc1c8df4d2d494161f0aeb74a->leave($__internal_4e238e404318a65731ad394f617891fa918e4cadc1c8df4d2d494161f0aeb74a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f161387e37745acb0f00850e44bd409dba2dcf6e838006945ae5a4c6475ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f161387e37745acb0f00850e44bd409dba2dcf6e838006945ae5a4c6475ba7->enter($__internal_d0f161387e37745acb0f00850e44bd409dba2dcf6e838006945ae5a4c6475ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d637ceed075f8c6537081f4d4756be314488411f3bb6053d62d28b6122800bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d637ceed075f8c6537081f4d4756be314488411f3bb6053d62d28b6122800bd0->enter($__internal_d637ceed075f8c6537081f4d4756be314488411f3bb6053d62d28b6122800bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mediaff | Admin Panel";
        
        $__internal_d637ceed075f8c6537081f4d4756be314488411f3bb6053d62d28b6122800bd0->leave($__internal_d637ceed075f8c6537081f4d4756be314488411f3bb6053d62d28b6122800bd0_prof);

        
        $__internal_d0f161387e37745acb0f00850e44bd409dba2dcf6e838006945ae5a4c6475ba7->leave($__internal_d0f161387e37745acb0f00850e44bd409dba2dcf6e838006945ae5a4c6475ba7_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cda180352d83566338f04cdd61fdfb999fbc568168418519a055a19c39ae474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cda180352d83566338f04cdd61fdfb999fbc568168418519a055a19c39ae474->enter($__internal_4cda180352d83566338f04cdd61fdfb999fbc568168418519a055a19c39ae474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96351bff806a8da10b5fc366127d01b01219de198afaca7ca2527aa8fc3f9d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96351bff806a8da10b5fc366127d01b01219de198afaca7ca2527aa8fc3f9d05->enter($__internal_96351bff806a8da10b5fc366127d01b01219de198afaca7ca2527aa8fc3f9d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_96351bff806a8da10b5fc366127d01b01219de198afaca7ca2527aa8fc3f9d05->leave($__internal_96351bff806a8da10b5fc366127d01b01219de198afaca7ca2527aa8fc3f9d05_prof);

        
        $__internal_4cda180352d83566338f04cdd61fdfb999fbc568168418519a055a19c39ae474->leave($__internal_4cda180352d83566338f04cdd61fdfb999fbc568168418519a055a19c39ae474_prof);

    }

    // line 14
    public function block_custcss($context, array $blocks = array())
    {
        $__internal_1818559423aa42343ff0c5f7cb3c396dfc3ff1fb9a306cdbdfde0c209ff3e671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1818559423aa42343ff0c5f7cb3c396dfc3ff1fb9a306cdbdfde0c209ff3e671->enter($__internal_1818559423aa42343ff0c5f7cb3c396dfc3ff1fb9a306cdbdfde0c209ff3e671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        $__internal_673439e28f836347344db20f1843b9c3c8aa30c6adeada7090892ea8064dcda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673439e28f836347344db20f1843b9c3c8aa30c6adeada7090892ea8064dcda3->enter($__internal_673439e28f836347344db20f1843b9c3c8aa30c6adeada7090892ea8064dcda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        echo " ";
        
        $__internal_673439e28f836347344db20f1843b9c3c8aa30c6adeada7090892ea8064dcda3->leave($__internal_673439e28f836347344db20f1843b9c3c8aa30c6adeada7090892ea8064dcda3_prof);

        
        $__internal_1818559423aa42343ff0c5f7cb3c396dfc3ff1fb9a306cdbdfde0c209ff3e671->leave($__internal_1818559423aa42343ff0c5f7cb3c396dfc3ff1fb9a306cdbdfde0c209ff3e671_prof);

    }

    // line 249
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f620b152da840e63e21dc33e72006425644c8746fc1de19e8899efdbba5e803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f620b152da840e63e21dc33e72006425644c8746fc1de19e8899efdbba5e803->enter($__internal_8f620b152da840e63e21dc33e72006425644c8746fc1de19e8899efdbba5e803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09f74d44801390f92b0cd2fae87e1d6d0ea0cedf302a751042818e6f42896308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f74d44801390f92b0cd2fae87e1d6d0ea0cedf302a751042818e6f42896308->enter($__internal_09f74d44801390f92b0cd2fae87e1d6d0ea0cedf302a751042818e6f42896308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09f74d44801390f92b0cd2fae87e1d6d0ea0cedf302a751042818e6f42896308->leave($__internal_09f74d44801390f92b0cd2fae87e1d6d0ea0cedf302a751042818e6f42896308_prof);

        
        $__internal_8f620b152da840e63e21dc33e72006425644c8746fc1de19e8899efdbba5e803->leave($__internal_8f620b152da840e63e21dc33e72006425644c8746fc1de19e8899efdbba5e803_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b115b354475cb1a6ad8305f610674d57348bc287e6d703f65c376bd3e5d83141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b115b354475cb1a6ad8305f610674d57348bc287e6d703f65c376bd3e5d83141->enter($__internal_b115b354475cb1a6ad8305f610674d57348bc287e6d703f65c376bd3e5d83141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d02c965247bcd7f3f8e54d05f865f68504a7e7ba9d6828f85dc1d694f0aeb782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02c965247bcd7f3f8e54d05f865f68504a7e7ba9d6828f85dc1d694f0aeb782->enter($__internal_d02c965247bcd7f3f8e54d05f865f68504a7e7ba9d6828f85dc1d694f0aeb782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d02c965247bcd7f3f8e54d05f865f68504a7e7ba9d6828f85dc1d694f0aeb782->leave($__internal_d02c965247bcd7f3f8e54d05f865f68504a7e7ba9d6828f85dc1d694f0aeb782_prof);

        
        $__internal_b115b354475cb1a6ad8305f610674d57348bc287e6d703f65c376bd3e5d83141->leave($__internal_b115b354475cb1a6ad8305f610674d57348bc287e6d703f65c376bd3e5d83141_prof);

    }

    // line 270
    public function block_custjs($context, array $blocks = array())
    {
        $__internal_312ec9c050b648b73c785e3901c898e0d281da085afb10c061d807fb2ecbad38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312ec9c050b648b73c785e3901c898e0d281da085afb10c061d807fb2ecbad38->enter($__internal_312ec9c050b648b73c785e3901c898e0d281da085afb10c061d807fb2ecbad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        $__internal_2d5c35367a83e7a7a845b3b3f464f4d5fa96a6e5220cd291f8ab2694e2adf4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5c35367a83e7a7a845b3b3f464f4d5fa96a6e5220cd291f8ab2694e2adf4de->enter($__internal_2d5c35367a83e7a7a845b3b3f464f4d5fa96a6e5220cd291f8ab2694e2adf4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        echo " ";
        
        $__internal_2d5c35367a83e7a7a845b3b3f464f4d5fa96a6e5220cd291f8ab2694e2adf4de->leave($__internal_2d5c35367a83e7a7a845b3b3f464f4d5fa96a6e5220cd291f8ab2694e2adf4de_prof);

        
        $__internal_312ec9c050b648b73c785e3901c898e0d281da085afb10c061d807fb2ecbad38->leave($__internal_312ec9c050b648b73c785e3901c898e0d281da085afb10c061d807fb2ecbad38_prof);

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
