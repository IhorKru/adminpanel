<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e28d033b476df4026282e60a0e1a83b8406d59ac8bea55994eec0a025e8d12c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28d033b476df4026282e60a0e1a83b8406d59ac8bea55994eec0a025e8d12c3->enter($__internal_e28d033b476df4026282e60a0e1a83b8406d59ac8bea55994eec0a025e8d12c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c1bab03b242f3f6b5a82de6d48c511418c30aafa02e616f0a1cd410899510afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bab03b242f3f6b5a82de6d48c511418c30aafa02e616f0a1cd410899510afd->enter($__internal_c1bab03b242f3f6b5a82de6d48c511418c30aafa02e616f0a1cd410899510afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28d033b476df4026282e60a0e1a83b8406d59ac8bea55994eec0a025e8d12c3->leave($__internal_e28d033b476df4026282e60a0e1a83b8406d59ac8bea55994eec0a025e8d12c3_prof);

        
        $__internal_c1bab03b242f3f6b5a82de6d48c511418c30aafa02e616f0a1cd410899510afd->leave($__internal_c1bab03b242f3f6b5a82de6d48c511418c30aafa02e616f0a1cd410899510afd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43951708ae327bc3e15c7db2003cfa59ad579b28abd59875e7630ae5e02d6eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43951708ae327bc3e15c7db2003cfa59ad579b28abd59875e7630ae5e02d6eff->enter($__internal_43951708ae327bc3e15c7db2003cfa59ad579b28abd59875e7630ae5e02d6eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8032761f5efe84ac609d59762deee29586d8f1c30029e99dbe743d925c8c207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8032761f5efe84ac609d59762deee29586d8f1c30029e99dbe743d925c8c207->enter($__internal_a8032761f5efe84ac609d59762deee29586d8f1c30029e99dbe743d925c8c207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8032761f5efe84ac609d59762deee29586d8f1c30029e99dbe743d925c8c207->leave($__internal_a8032761f5efe84ac609d59762deee29586d8f1c30029e99dbe743d925c8c207_prof);

        
        $__internal_43951708ae327bc3e15c7db2003cfa59ad579b28abd59875e7630ae5e02d6eff->leave($__internal_43951708ae327bc3e15c7db2003cfa59ad579b28abd59875e7630ae5e02d6eff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_860b9f71049fa6971baa3db423ddb49223e0ff6ac9877b095f7a1d73d4703585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860b9f71049fa6971baa3db423ddb49223e0ff6ac9877b095f7a1d73d4703585->enter($__internal_860b9f71049fa6971baa3db423ddb49223e0ff6ac9877b095f7a1d73d4703585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d63d38ba93e348a46a978067b9ffd50a77081c3104f4495f9b6e9021576f28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d63d38ba93e348a46a978067b9ffd50a77081c3104f4495f9b6e9021576f28c->enter($__internal_3d63d38ba93e348a46a978067b9ffd50a77081c3104f4495f9b6e9021576f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d63d38ba93e348a46a978067b9ffd50a77081c3104f4495f9b6e9021576f28c->leave($__internal_3d63d38ba93e348a46a978067b9ffd50a77081c3104f4495f9b6e9021576f28c_prof);

        
        $__internal_860b9f71049fa6971baa3db423ddb49223e0ff6ac9877b095f7a1d73d4703585->leave($__internal_860b9f71049fa6971baa3db423ddb49223e0ff6ac9877b095f7a1d73d4703585_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_891bc30dfb93f00ef4966eee782163c0e0088b54278b545a418ced8ca9defd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891bc30dfb93f00ef4966eee782163c0e0088b54278b545a418ced8ca9defd20->enter($__internal_891bc30dfb93f00ef4966eee782163c0e0088b54278b545a418ced8ca9defd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6c48a95ad815ba05a5be97e2482f761c9324c756d72726e362c541b81e90fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c48a95ad815ba05a5be97e2482f761c9324c756d72726e362c541b81e90fad->enter($__internal_a6c48a95ad815ba05a5be97e2482f761c9324c756d72726e362c541b81e90fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6c48a95ad815ba05a5be97e2482f761c9324c756d72726e362c541b81e90fad->leave($__internal_a6c48a95ad815ba05a5be97e2482f761c9324c756d72726e362c541b81e90fad_prof);

        
        $__internal_891bc30dfb93f00ef4966eee782163c0e0088b54278b545a418ced8ca9defd20->leave($__internal_891bc30dfb93f00ef4966eee782163c0e0088b54278b545a418ced8ca9defd20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
