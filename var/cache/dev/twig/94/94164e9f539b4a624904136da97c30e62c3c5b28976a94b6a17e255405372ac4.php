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
        $__internal_78a37732022b92002fa2d908a793742b312f38fbb0ee834c922df44984da8441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a37732022b92002fa2d908a793742b312f38fbb0ee834c922df44984da8441->enter($__internal_78a37732022b92002fa2d908a793742b312f38fbb0ee834c922df44984da8441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dc1c24bc74b15e8129566374abbde41a2d47a8ffb75294fa786df9b82d5d8079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1c24bc74b15e8129566374abbde41a2d47a8ffb75294fa786df9b82d5d8079->enter($__internal_dc1c24bc74b15e8129566374abbde41a2d47a8ffb75294fa786df9b82d5d8079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78a37732022b92002fa2d908a793742b312f38fbb0ee834c922df44984da8441->leave($__internal_78a37732022b92002fa2d908a793742b312f38fbb0ee834c922df44984da8441_prof);

        
        $__internal_dc1c24bc74b15e8129566374abbde41a2d47a8ffb75294fa786df9b82d5d8079->leave($__internal_dc1c24bc74b15e8129566374abbde41a2d47a8ffb75294fa786df9b82d5d8079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bddd2a1394b764ee9c1a18777ae055baa140adaf1fbc837b5f433543be7be6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddd2a1394b764ee9c1a18777ae055baa140adaf1fbc837b5f433543be7be6ac->enter($__internal_bddd2a1394b764ee9c1a18777ae055baa140adaf1fbc837b5f433543be7be6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1910429ebadc879dd9b593c170f0f48b81b53d3a084d4a1204cddcd5c001d140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1910429ebadc879dd9b593c170f0f48b81b53d3a084d4a1204cddcd5c001d140->enter($__internal_1910429ebadc879dd9b593c170f0f48b81b53d3a084d4a1204cddcd5c001d140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1910429ebadc879dd9b593c170f0f48b81b53d3a084d4a1204cddcd5c001d140->leave($__internal_1910429ebadc879dd9b593c170f0f48b81b53d3a084d4a1204cddcd5c001d140_prof);

        
        $__internal_bddd2a1394b764ee9c1a18777ae055baa140adaf1fbc837b5f433543be7be6ac->leave($__internal_bddd2a1394b764ee9c1a18777ae055baa140adaf1fbc837b5f433543be7be6ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e114687fbd6032534d0ca19c14a26b4b4500bd3cc493570c5a87ee25c6bc7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e114687fbd6032534d0ca19c14a26b4b4500bd3cc493570c5a87ee25c6bc7f0->enter($__internal_8e114687fbd6032534d0ca19c14a26b4b4500bd3cc493570c5a87ee25c6bc7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73c7b043ba5b64c109ddb79817691d97e6bd601d9a1e173ca13a9ca4d70da9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c7b043ba5b64c109ddb79817691d97e6bd601d9a1e173ca13a9ca4d70da9ae->enter($__internal_73c7b043ba5b64c109ddb79817691d97e6bd601d9a1e173ca13a9ca4d70da9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73c7b043ba5b64c109ddb79817691d97e6bd601d9a1e173ca13a9ca4d70da9ae->leave($__internal_73c7b043ba5b64c109ddb79817691d97e6bd601d9a1e173ca13a9ca4d70da9ae_prof);

        
        $__internal_8e114687fbd6032534d0ca19c14a26b4b4500bd3cc493570c5a87ee25c6bc7f0->leave($__internal_8e114687fbd6032534d0ca19c14a26b4b4500bd3cc493570c5a87ee25c6bc7f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37a9b485738f8a0e0af3e954d773a462514908b35a55d4368060810fb5d206d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a9b485738f8a0e0af3e954d773a462514908b35a55d4368060810fb5d206d3->enter($__internal_37a9b485738f8a0e0af3e954d773a462514908b35a55d4368060810fb5d206d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40b4bf7b81f209297e7d8060d5cd3036c45d7d63b842ec363b5cda36c0277e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b4bf7b81f209297e7d8060d5cd3036c45d7d63b842ec363b5cda36c0277e8e->enter($__internal_40b4bf7b81f209297e7d8060d5cd3036c45d7d63b842ec363b5cda36c0277e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40b4bf7b81f209297e7d8060d5cd3036c45d7d63b842ec363b5cda36c0277e8e->leave($__internal_40b4bf7b81f209297e7d8060d5cd3036c45d7d63b842ec363b5cda36c0277e8e_prof);

        
        $__internal_37a9b485738f8a0e0af3e954d773a462514908b35a55d4368060810fb5d206d3->leave($__internal_37a9b485738f8a0e0af3e954d773a462514908b35a55d4368060810fb5d206d3_prof);

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
