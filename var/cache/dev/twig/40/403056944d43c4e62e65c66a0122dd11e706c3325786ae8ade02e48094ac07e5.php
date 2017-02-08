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
        $__internal_9373c6310c1b86b6142f1e84fb0acec7b466f0a040cd74cef3b790d13b5e24bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9373c6310c1b86b6142f1e84fb0acec7b466f0a040cd74cef3b790d13b5e24bf->enter($__internal_9373c6310c1b86b6142f1e84fb0acec7b466f0a040cd74cef3b790d13b5e24bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c371d51b0fc50dd40c3b3a9ebfa87704ba179e9d248a005b5b579cc4f547653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c371d51b0fc50dd40c3b3a9ebfa87704ba179e9d248a005b5b579cc4f547653c->enter($__internal_c371d51b0fc50dd40c3b3a9ebfa87704ba179e9d248a005b5b579cc4f547653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9373c6310c1b86b6142f1e84fb0acec7b466f0a040cd74cef3b790d13b5e24bf->leave($__internal_9373c6310c1b86b6142f1e84fb0acec7b466f0a040cd74cef3b790d13b5e24bf_prof);

        
        $__internal_c371d51b0fc50dd40c3b3a9ebfa87704ba179e9d248a005b5b579cc4f547653c->leave($__internal_c371d51b0fc50dd40c3b3a9ebfa87704ba179e9d248a005b5b579cc4f547653c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2998b80bfdb3d2268fd6131de2902bc294b9897c883871612086af1701788586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2998b80bfdb3d2268fd6131de2902bc294b9897c883871612086af1701788586->enter($__internal_2998b80bfdb3d2268fd6131de2902bc294b9897c883871612086af1701788586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e82d70f1e188a8c52f4bc933b746c77c465430c59d98d07cabf48bbebcb78f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82d70f1e188a8c52f4bc933b746c77c465430c59d98d07cabf48bbebcb78f1e->enter($__internal_e82d70f1e188a8c52f4bc933b746c77c465430c59d98d07cabf48bbebcb78f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e82d70f1e188a8c52f4bc933b746c77c465430c59d98d07cabf48bbebcb78f1e->leave($__internal_e82d70f1e188a8c52f4bc933b746c77c465430c59d98d07cabf48bbebcb78f1e_prof);

        
        $__internal_2998b80bfdb3d2268fd6131de2902bc294b9897c883871612086af1701788586->leave($__internal_2998b80bfdb3d2268fd6131de2902bc294b9897c883871612086af1701788586_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5098d042f174e63c45fec015d528ea72ce805e36fe66b4b4ed82afd836ee7639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5098d042f174e63c45fec015d528ea72ce805e36fe66b4b4ed82afd836ee7639->enter($__internal_5098d042f174e63c45fec015d528ea72ce805e36fe66b4b4ed82afd836ee7639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4622474fe194f33cf8918fb73b845555b191b48810729341a7a98409bd5b3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4622474fe194f33cf8918fb73b845555b191b48810729341a7a98409bd5b3ba->enter($__internal_b4622474fe194f33cf8918fb73b845555b191b48810729341a7a98409bd5b3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b4622474fe194f33cf8918fb73b845555b191b48810729341a7a98409bd5b3ba->leave($__internal_b4622474fe194f33cf8918fb73b845555b191b48810729341a7a98409bd5b3ba_prof);

        
        $__internal_5098d042f174e63c45fec015d528ea72ce805e36fe66b4b4ed82afd836ee7639->leave($__internal_5098d042f174e63c45fec015d528ea72ce805e36fe66b4b4ed82afd836ee7639_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dbb0cef57b73509f8800ec8287528a4b6948b03fd13aa9d7fe7d97924638976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbb0cef57b73509f8800ec8287528a4b6948b03fd13aa9d7fe7d97924638976->enter($__internal_0dbb0cef57b73509f8800ec8287528a4b6948b03fd13aa9d7fe7d97924638976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_338bb2891e1effbd7c19d716b9b86fae2887f585b32d0026ee2c7f0d8990d340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338bb2891e1effbd7c19d716b9b86fae2887f585b32d0026ee2c7f0d8990d340->enter($__internal_338bb2891e1effbd7c19d716b9b86fae2887f585b32d0026ee2c7f0d8990d340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_338bb2891e1effbd7c19d716b9b86fae2887f585b32d0026ee2c7f0d8990d340->leave($__internal_338bb2891e1effbd7c19d716b9b86fae2887f585b32d0026ee2c7f0d8990d340_prof);

        
        $__internal_0dbb0cef57b73509f8800ec8287528a4b6948b03fd13aa9d7fe7d97924638976->leave($__internal_0dbb0cef57b73509f8800ec8287528a4b6948b03fd13aa9d7fe7d97924638976_prof);

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
