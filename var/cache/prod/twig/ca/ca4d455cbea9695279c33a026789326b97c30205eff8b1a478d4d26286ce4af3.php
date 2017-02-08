<?php

/* :BackEnd:newemailtempl.html.twig */
class __TwigTemplate_ca2adc54f3f299a5891661da1c9ddd71d6fb9bbefcb3f66f236d7dba1c5cd9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":BackEnd:newemailtempl.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_custcss($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "app", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "template_name", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" >
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "htmltext", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">    
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>       
                            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 64
        $this->displayBlock('custjs', $context, $blocks);
        // line 68
        echo "    
";
    }

    // line 64
    public function block_custjs($context, array $blocks = array())
    {
        // line 65
        echo "    <!-- Dropzone.js -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/dropzone-4.3.0/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return ":BackEnd:newemailtempl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  133 => 65,  130 => 64,  125 => 68,  123 => 64,  114 => 58,  107 => 54,  99 => 49,  90 => 43,  77 => 33,  66 => 25,  50 => 11,  47 => 10,  41 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":BackEnd:newemailtempl.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app/Resources\\views/BackEnd/newemailtempl.html.twig");
    }
}
