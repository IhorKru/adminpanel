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
        $__internal_458fdfda584743b317b500daee3d1a6d2200d0572909420d9eacd21a6547a1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458fdfda584743b317b500daee3d1a6d2200d0572909420d9eacd21a6547a1f9->enter($__internal_458fdfda584743b317b500daee3d1a6d2200d0572909420d9eacd21a6547a1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/newemailtempl.html.twig"));

        $__internal_e80f29949503f6929b7e57b70f9506703b36220e78e091c38192c6b0bda24cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80f29949503f6929b7e57b70f9506703b36220e78e091c38192c6b0bda24cbb->enter($__internal_e80f29949503f6929b7e57b70f9506703b36220e78e091c38192c6b0bda24cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/newemailtempl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458fdfda584743b317b500daee3d1a6d2200d0572909420d9eacd21a6547a1f9->leave($__internal_458fdfda584743b317b500daee3d1a6d2200d0572909420d9eacd21a6547a1f9_prof);

        
        $__internal_e80f29949503f6929b7e57b70f9506703b36220e78e091c38192c6b0bda24cbb->leave($__internal_e80f29949503f6929b7e57b70f9506703b36220e78e091c38192c6b0bda24cbb_prof);

    }

    // line 3
    public function block_custcss($context, array $blocks = array())
    {
        $__internal_1366111d36885ae821d404ffe9dedbe27ccbe19fee11ad8f1623e78cf2e29bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1366111d36885ae821d404ffe9dedbe27ccbe19fee11ad8f1623e78cf2e29bcd->enter($__internal_1366111d36885ae821d404ffe9dedbe27ccbe19fee11ad8f1623e78cf2e29bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

        $__internal_61cbcc4a6ebe00db24aab6f253a7cb574b4d065d000297a83063234bd2cf62c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cbcc4a6ebe00db24aab6f253a7cb574b4d065d000297a83063234bd2cf62c0->enter($__internal_61cbcc4a6ebe00db24aab6f253a7cb574b4d065d000297a83063234bd2cf62c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custcss"));

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
        
        $__internal_61cbcc4a6ebe00db24aab6f253a7cb574b4d065d000297a83063234bd2cf62c0->leave($__internal_61cbcc4a6ebe00db24aab6f253a7cb574b4d065d000297a83063234bd2cf62c0_prof);

        
        $__internal_1366111d36885ae821d404ffe9dedbe27ccbe19fee11ad8f1623e78cf2e29bcd->leave($__internal_1366111d36885ae821d404ffe9dedbe27ccbe19fee11ad8f1623e78cf2e29bcd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b48058ffeb81245ae62c7233cfcc0d88b959aced5e2d55ebb10cdb16406a4457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48058ffeb81245ae62c7233cfcc0d88b959aced5e2d55ebb10cdb16406a4457->enter($__internal_b48058ffeb81245ae62c7233cfcc0d88b959aced5e2d55ebb10cdb16406a4457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ce82f616c22dbef0fdbe3d26e4a99b397570d42291ed04f8412b7b0cfa90bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce82f616c22dbef0fdbe3d26e4a99b397570d42291ed04f8412b7b0cfa90bf5->enter($__internal_4ce82f616c22dbef0fdbe3d26e4a99b397570d42291ed04f8412b7b0cfa90bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ce82f616c22dbef0fdbe3d26e4a99b397570d42291ed04f8412b7b0cfa90bf5->leave($__internal_4ce82f616c22dbef0fdbe3d26e4a99b397570d42291ed04f8412b7b0cfa90bf5_prof);

        
        $__internal_b48058ffeb81245ae62c7233cfcc0d88b959aced5e2d55ebb10cdb16406a4457->leave($__internal_b48058ffeb81245ae62c7233cfcc0d88b959aced5e2d55ebb10cdb16406a4457_prof);

    }

    // line 65
    public function block_custjs($context, array $blocks = array())
    {
        $__internal_93d9b2c14ce1d28cb7d1c11d92cfce0205fd7798f94cf4ab8cce7de4a8219a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d9b2c14ce1d28cb7d1c11d92cfce0205fd7798f94cf4ab8cce7de4a8219a0a->enter($__internal_93d9b2c14ce1d28cb7d1c11d92cfce0205fd7798f94cf4ab8cce7de4a8219a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        $__internal_4b67e119d82d72338f9d33e369dab2cc450cb4adb48a009e9eddddbac24aac6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b67e119d82d72338f9d33e369dab2cc450cb4adb48a009e9eddddbac24aac6d->enter($__internal_4b67e119d82d72338f9d33e369dab2cc450cb4adb48a009e9eddddbac24aac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custjs"));

        // line 66
        echo "    <!-- Dropzone.js -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/dropzone-4.3.0/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4b67e119d82d72338f9d33e369dab2cc450cb4adb48a009e9eddddbac24aac6d->leave($__internal_4b67e119d82d72338f9d33e369dab2cc450cb4adb48a009e9eddddbac24aac6d_prof);

        
        $__internal_93d9b2c14ce1d28cb7d1c11d92cfce0205fd7798f94cf4ab8cce7de4a8219a0a->leave($__internal_93d9b2c14ce1d28cb7d1c11d92cfce0205fd7798f94cf4ab8cce7de4a8219a0a_prof);

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
