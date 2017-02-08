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
        $__internal_e3014769820c59a0029efe2c51649300cdda8072f5981798fa952d420251cfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3014769820c59a0029efe2c51649300cdda8072f5981798fa952d420251cfeb->enter($__internal_e3014769820c59a0029efe2c51649300cdda8072f5981798fa952d420251cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a6ecc8477d2a47ec29c8a763961b9d7353c586a6acfe0f32ce8bf8ed25d07df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ecc8477d2a47ec29c8a763961b9d7353c586a6acfe0f32ce8bf8ed25d07df1->enter($__internal_a6ecc8477d2a47ec29c8a763961b9d7353c586a6acfe0f32ce8bf8ed25d07df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3014769820c59a0029efe2c51649300cdda8072f5981798fa952d420251cfeb->leave($__internal_e3014769820c59a0029efe2c51649300cdda8072f5981798fa952d420251cfeb_prof);

        
        $__internal_a6ecc8477d2a47ec29c8a763961b9d7353c586a6acfe0f32ce8bf8ed25d07df1->leave($__internal_a6ecc8477d2a47ec29c8a763961b9d7353c586a6acfe0f32ce8bf8ed25d07df1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6fe82a9ac0b0ecf754bce945439f697fd7d917e938bb09ebb9c09732136d4998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe82a9ac0b0ecf754bce945439f697fd7d917e938bb09ebb9c09732136d4998->enter($__internal_6fe82a9ac0b0ecf754bce945439f697fd7d917e938bb09ebb9c09732136d4998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_03a5e7566906fb35676e5f1ed33282423e29295154a908c628aefca57028fd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a5e7566906fb35676e5f1ed33282423e29295154a908c628aefca57028fd16->enter($__internal_03a5e7566906fb35676e5f1ed33282423e29295154a908c628aefca57028fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03a5e7566906fb35676e5f1ed33282423e29295154a908c628aefca57028fd16->leave($__internal_03a5e7566906fb35676e5f1ed33282423e29295154a908c628aefca57028fd16_prof);

        
        $__internal_6fe82a9ac0b0ecf754bce945439f697fd7d917e938bb09ebb9c09732136d4998->leave($__internal_6fe82a9ac0b0ecf754bce945439f697fd7d917e938bb09ebb9c09732136d4998_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_678bee1a17ee03cd67fae4c11cfadca48101be27ee8cc69c1ae60d25e31f9f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678bee1a17ee03cd67fae4c11cfadca48101be27ee8cc69c1ae60d25e31f9f61->enter($__internal_678bee1a17ee03cd67fae4c11cfadca48101be27ee8cc69c1ae60d25e31f9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b6883605743a396927eb6680d76d0c24098a9faace368f98b638ef5bdbcbc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6883605743a396927eb6680d76d0c24098a9faace368f98b638ef5bdbcbc4c->enter($__internal_8b6883605743a396927eb6680d76d0c24098a9faace368f98b638ef5bdbcbc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b6883605743a396927eb6680d76d0c24098a9faace368f98b638ef5bdbcbc4c->leave($__internal_8b6883605743a396927eb6680d76d0c24098a9faace368f98b638ef5bdbcbc4c_prof);

        
        $__internal_678bee1a17ee03cd67fae4c11cfadca48101be27ee8cc69c1ae60d25e31f9f61->leave($__internal_678bee1a17ee03cd67fae4c11cfadca48101be27ee8cc69c1ae60d25e31f9f61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03b7ecb52835211d33ffaf695f120f2a0a09827224ddcf52280408b3d3dfc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03b7ecb52835211d33ffaf695f120f2a0a09827224ddcf52280408b3d3dfc9c->enter($__internal_b03b7ecb52835211d33ffaf695f120f2a0a09827224ddcf52280408b3d3dfc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bfc296e3ac6f6151a34d9201962685e781f6cac2be78cecd7a013237504ab40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfc296e3ac6f6151a34d9201962685e781f6cac2be78cecd7a013237504ab40->enter($__internal_4bfc296e3ac6f6151a34d9201962685e781f6cac2be78cecd7a013237504ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4bfc296e3ac6f6151a34d9201962685e781f6cac2be78cecd7a013237504ab40->leave($__internal_4bfc296e3ac6f6151a34d9201962685e781f6cac2be78cecd7a013237504ab40_prof);

        
        $__internal_b03b7ecb52835211d33ffaf695f120f2a0a09827224ddcf52280408b3d3dfc9c->leave($__internal_b03b7ecb52835211d33ffaf695f120f2a0a09827224ddcf52280408b3d3dfc9c_prof);

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
