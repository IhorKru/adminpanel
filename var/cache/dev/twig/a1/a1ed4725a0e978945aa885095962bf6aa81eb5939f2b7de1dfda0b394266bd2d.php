<?php

/* BackEnd/newemailtempl.html.twig */
class __TwigTemplate_cb45c4b5ba39488714838b44f88d1cab279cfedceb0179ee1536c23fd8336ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BackEnd/newemailtempl.html.twig", 1);
        $this->blocks = array(
            'custcss' => array($this, 'block_custcss'),
            'body' => array($this, 'block_body'),
            'custjs' => array($this, 'block_custjs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d172560c2b5f4387cca055027105281447d3261bc452c295f47a0d3d0d84b4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d172560c2b5f4387cca055027105281447d3261bc452c295f47a0d3d0d84b4a1->enter($__internal_d172560c2b5f4387cca055027105281447d3261bc452c295f47a0d3d0d84b4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/newemailtempl.html.twig"));

        $__internal_0a515ac64f14a0bc047569c01bccf6f4607996914de6c21dc0aa0979ea476c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a515ac64f14a0bc047569c01bccf6f4607996914de6c21dc0aa0979ea476c2a->enter($__internal_0a515ac64f14a0bc047569c01bccf6f4607996914de6c21dc0aa0979ea476c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/newemailtempl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d172560c2b5f4387cca055027105281447d3261bc452c295f47a0d3d0d84b4a1->leave($__internal_d172560c2b5f4387cca055027105281447d3261bc452c295f47a0d3d0d84b4a1_prof);

        
        $__internal_0a515ac64f14a0bc047569c01bccf6f4607996914de6c21dc0aa0979ea476c2a->leave($__internal_0a515ac64f14a0bc047569c01bccf6f4607996914de6c21dc0aa0979ea476c2a_prof);

    }

    // line 3
    public function block_custcss($context, array $blocks = array())
    {
        $__internal_a59b9cfa323bf428518d7e13f222e5426f867e562b95de6965afaa0a5ec5d1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59b9cfa323bf428518d7e13f222e5426f867e562b95de6965afaa0a5ec5d1e4->enter($__internal_a59b9cfa323bf428518d7e13f222e5426f867e562b95de6965afaa0a5ec5d1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        $__internal_5828de5cce98fe7996321c1fe5363c6591240e2d3ab25e1eb45ef18cb4408e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5828de5cce98fe7996321c1fe5363c6591240e2d3ab25e1eb45ef18cb4408e44->enter($__internal_5828de5cce98fe7996321c1fe5363c6591240e2d3ab25e1eb45ef18cb4408e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        // line 4
        echo "    <!-- page specific date picker -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/dropzone-4.3.0/dist/min/dropzone.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--page specific css -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/build/css/emailcampcustome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_5828de5cce98fe7996321c1fe5363c6591240e2d3ab25e1eb45ef18cb4408e44->leave($__internal_5828de5cce98fe7996321c1fe5363c6591240e2d3ab25e1eb45ef18cb4408e44_prof);

        
        $__internal_a59b9cfa323bf428518d7e13f222e5426f867e562b95de6965afaa0a5ec5d1e4->leave($__internal_a59b9cfa323bf428518d7e13f222e5426f867e562b95de6965afaa0a5ec5d1e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3726e2b3c3e7193e007ed4030e1bdf3e4798d375370e5e6aa05ddcf4d21700e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3726e2b3c3e7193e007ed4030e1bdf3e4798d375370e5e6aa05ddcf4d21700e->enter($__internal_e3726e2b3c3e7193e007ed4030e1bdf3e4798d375370e5e6aa05ddcf4d21700e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ff88f855668afd87b464cd9b76964c9b416843a25653768098a4abcd923f938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff88f855668afd87b464cd9b76964c9b416843a25653768098a4abcd923f938->enter($__internal_6ff88f855668afd87b464cd9b76964c9b416843a25653768098a4abcd923f938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"\">
        <div class=\"row\">
            <!-- form input mask -->
            <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>New Template Details</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br/>
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                            <div class=\"form-horizontal form-label-left\">
                                <div class=\"form-group\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-picture\"></span>
                                             </span>
                                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "app", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-list-alt\"></span>
                                             </span>
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "template_name", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" >
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "htmltext", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"ln_solid\"></div>    
                                <div class=\"form-group\">    
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>       
                            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 65
        $this->displayBlock('custjs', $context, $blocks);
        // line 69
        echo "    
";
        
        $__internal_6ff88f855668afd87b464cd9b76964c9b416843a25653768098a4abcd923f938->leave($__internal_6ff88f855668afd87b464cd9b76964c9b416843a25653768098a4abcd923f938_prof);

        
        $__internal_e3726e2b3c3e7193e007ed4030e1bdf3e4798d375370e5e6aa05ddcf4d21700e->leave($__internal_e3726e2b3c3e7193e007ed4030e1bdf3e4798d375370e5e6aa05ddcf4d21700e_prof);

    }

    // line 65
    public function block_custjs($context, array $blocks = array())
    {
        $__internal_1b61b424a282843abe6f1372d79a9113fb306a572ea1c78797ba10c78203370a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b61b424a282843abe6f1372d79a9113fb306a572ea1c78797ba10c78203370a->enter($__internal_1b61b424a282843abe6f1372d79a9113fb306a572ea1c78797ba10c78203370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        $__internal_92cdd374c4067b16fd1b08455c09ba355569445abb6da33a9bdedac1079df42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cdd374c4067b16fd1b08455c09ba355569445abb6da33a9bdedac1079df42b->enter($__internal_92cdd374c4067b16fd1b08455c09ba355569445abb6da33a9bdedac1079df42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        // line 66
        echo "    <!-- Dropzone.js -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/dropzone-4.3.0/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_92cdd374c4067b16fd1b08455c09ba355569445abb6da33a9bdedac1079df42b->leave($__internal_92cdd374c4067b16fd1b08455c09ba355569445abb6da33a9bdedac1079df42b_prof);

        
        $__internal_1b61b424a282843abe6f1372d79a9113fb306a572ea1c78797ba10c78203370a->leave($__internal_1b61b424a282843abe6f1372d79a9113fb306a572ea1c78797ba10c78203370a_prof);

    }

    public function getTemplateName()
    {
        return "BackEnd/newemailtempl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 67,  176 => 66,  167 => 65,  156 => 69,  154 => 65,  145 => 59,  138 => 55,  129 => 49,  120 => 43,  107 => 33,  96 => 25,  80 => 11,  71 => 10,  59 => 7,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block custcss %}
    <!-- page specific date picker -->
    <link href=\"{{ asset('resources/vendors_new/dropzone-4.3.0/dist/min/dropzone.min.css') }}\" rel=\"stylesheet\">
    <!--page specific css -->
    <link href=\"{{ asset('resources/build/css/emailcampcustome.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\"\">
        <div class=\"row\">
            <!-- form input mask -->
            <div class=\"col-md-6 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>New Template Details</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br/>
                            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"form-horizontal form-label-left\">
                                <div class=\"form-group\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-picture\"></span>
                                             </span>
                                            {{ form_widget(form.app) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-list-alt\"></span>
                                             </span>
                                            {{ form_widget(form.template_name) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" >
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        {{ form_widget(form.htmltext) }}
                                    </div>
                                </div>
                                <div class=\"ln_solid\"></div>    
                                <div class=\"form-group\">    
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        {{ form_widget(form.submit) }}
                                    </div>
                                </div>
                            </div>       
                            {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% block custjs %}
    <!-- Dropzone.js -->
    <script src=\"{{ asset('resources/vendors_new/dropzone-4.3.0/dist/dropzone.js')}}\"></script>
    {% endblock %}
    
{% endblock %}", "BackEnd/newemailtempl.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app\\Resources\\views\\BackEnd\\newemailtempl.html.twig");
    }
}
