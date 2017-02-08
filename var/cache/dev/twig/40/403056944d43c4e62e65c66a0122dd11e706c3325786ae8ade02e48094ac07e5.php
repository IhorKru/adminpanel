<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68d5a8b7fffc600c855cfc17fc6b0f303bbfc2d093c5b80a0d2d0ed09c817dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d5a8b7fffc600c855cfc17fc6b0f303bbfc2d093c5b80a0d2d0ed09c817dc7->enter($__internal_68d5a8b7fffc600c855cfc17fc6b0f303bbfc2d093c5b80a0d2d0ed09c817dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_91a3f1ed16e677dda6a895ead01be906cefa0ff0820ebb0575eb9ce5eabbb002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a3f1ed16e677dda6a895ead01be906cefa0ff0820ebb0575eb9ce5eabbb002->enter($__internal_91a3f1ed16e677dda6a895ead01be906cefa0ff0820ebb0575eb9ce5eabbb002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d5a8b7fffc600c855cfc17fc6b0f303bbfc2d093c5b80a0d2d0ed09c817dc7->leave($__internal_68d5a8b7fffc600c855cfc17fc6b0f303bbfc2d093c5b80a0d2d0ed09c817dc7_prof);

        
        $__internal_91a3f1ed16e677dda6a895ead01be906cefa0ff0820ebb0575eb9ce5eabbb002->leave($__internal_91a3f1ed16e677dda6a895ead01be906cefa0ff0820ebb0575eb9ce5eabbb002_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99038bbacad2f04bd640f428a6ef302fbd3d862d9a889926cee047350d35741a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99038bbacad2f04bd640f428a6ef302fbd3d862d9a889926cee047350d35741a->enter($__internal_99038bbacad2f04bd640f428a6ef302fbd3d862d9a889926cee047350d35741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4512f2c2fd3fd54775b7825b5660a18bfdd1a0f3edb08ee9406fbfc416ce8938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4512f2c2fd3fd54775b7825b5660a18bfdd1a0f3edb08ee9406fbfc416ce8938->enter($__internal_4512f2c2fd3fd54775b7825b5660a18bfdd1a0f3edb08ee9406fbfc416ce8938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4512f2c2fd3fd54775b7825b5660a18bfdd1a0f3edb08ee9406fbfc416ce8938->leave($__internal_4512f2c2fd3fd54775b7825b5660a18bfdd1a0f3edb08ee9406fbfc416ce8938_prof);

        
        $__internal_99038bbacad2f04bd640f428a6ef302fbd3d862d9a889926cee047350d35741a->leave($__internal_99038bbacad2f04bd640f428a6ef302fbd3d862d9a889926cee047350d35741a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0c94bae5771c1cd0a0d4725a595fac5c64ede520ec2ac83c825e6823a39d528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c94bae5771c1cd0a0d4725a595fac5c64ede520ec2ac83c825e6823a39d528->enter($__internal_d0c94bae5771c1cd0a0d4725a595fac5c64ede520ec2ac83c825e6823a39d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fe30fbb3f3921fd1f959c096c45c4a52f63101b2bf06e976d43412d4d96553c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe30fbb3f3921fd1f959c096c45c4a52f63101b2bf06e976d43412d4d96553c->enter($__internal_2fe30fbb3f3921fd1f959c096c45c4a52f63101b2bf06e976d43412d4d96553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2fe30fbb3f3921fd1f959c096c45c4a52f63101b2bf06e976d43412d4d96553c->leave($__internal_2fe30fbb3f3921fd1f959c096c45c4a52f63101b2bf06e976d43412d4d96553c_prof);

        
        $__internal_d0c94bae5771c1cd0a0d4725a595fac5c64ede520ec2ac83c825e6823a39d528->leave($__internal_d0c94bae5771c1cd0a0d4725a595fac5c64ede520ec2ac83c825e6823a39d528_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bc7434b0d6cd86dd1a3dbeb4714ddbbd3e45725b8a0721a86e66198096f4a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc7434b0d6cd86dd1a3dbeb4714ddbbd3e45725b8a0721a86e66198096f4a33->enter($__internal_3bc7434b0d6cd86dd1a3dbeb4714ddbbd3e45725b8a0721a86e66198096f4a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ab691be379b98f42df44b3805fed3d84654a40a6da201da0f38ca4b39e40d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab691be379b98f42df44b3805fed3d84654a40a6da201da0f38ca4b39e40d8b->enter($__internal_0ab691be379b98f42df44b3805fed3d84654a40a6da201da0f38ca4b39e40d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ab691be379b98f42df44b3805fed3d84654a40a6da201da0f38ca4b39e40d8b->leave($__internal_0ab691be379b98f42df44b3805fed3d84654a40a6da201da0f38ca4b39e40d8b_prof);

        
        $__internal_3bc7434b0d6cd86dd1a3dbeb4714ddbbd3e45725b8a0721a86e66198096f4a33->leave($__internal_3bc7434b0d6cd86dd1a3dbeb4714ddbbd3e45725b8a0721a86e66198096f4a33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
