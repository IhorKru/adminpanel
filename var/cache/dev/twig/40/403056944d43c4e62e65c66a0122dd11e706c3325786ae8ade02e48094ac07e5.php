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
        $__internal_90ef340d2a4b8cb1c9871a5da6f9384e921c7318f176be1f990c80a140106767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ef340d2a4b8cb1c9871a5da6f9384e921c7318f176be1f990c80a140106767->enter($__internal_90ef340d2a4b8cb1c9871a5da6f9384e921c7318f176be1f990c80a140106767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c4083e3752173ba42772ae9e1e0aa734d590e7e327a8a7d1368ef5db490ebb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4083e3752173ba42772ae9e1e0aa734d590e7e327a8a7d1368ef5db490ebb4d->enter($__internal_c4083e3752173ba42772ae9e1e0aa734d590e7e327a8a7d1368ef5db490ebb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ef340d2a4b8cb1c9871a5da6f9384e921c7318f176be1f990c80a140106767->leave($__internal_90ef340d2a4b8cb1c9871a5da6f9384e921c7318f176be1f990c80a140106767_prof);

        
        $__internal_c4083e3752173ba42772ae9e1e0aa734d590e7e327a8a7d1368ef5db490ebb4d->leave($__internal_c4083e3752173ba42772ae9e1e0aa734d590e7e327a8a7d1368ef5db490ebb4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_031d0de91a3fbf9c38da9dba462847db0c067df85fd2ce327a9cf839cb1427fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031d0de91a3fbf9c38da9dba462847db0c067df85fd2ce327a9cf839cb1427fe->enter($__internal_031d0de91a3fbf9c38da9dba462847db0c067df85fd2ce327a9cf839cb1427fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c63801c63dfe1cd1766014a15e7b6f76544f4b36dc291ff672e04a1b585f2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c63801c63dfe1cd1766014a15e7b6f76544f4b36dc291ff672e04a1b585f2f8->enter($__internal_0c63801c63dfe1cd1766014a15e7b6f76544f4b36dc291ff672e04a1b585f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0c63801c63dfe1cd1766014a15e7b6f76544f4b36dc291ff672e04a1b585f2f8->leave($__internal_0c63801c63dfe1cd1766014a15e7b6f76544f4b36dc291ff672e04a1b585f2f8_prof);

        
        $__internal_031d0de91a3fbf9c38da9dba462847db0c067df85fd2ce327a9cf839cb1427fe->leave($__internal_031d0de91a3fbf9c38da9dba462847db0c067df85fd2ce327a9cf839cb1427fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b21bbb064a6c59e6b64c89503802e74f5edf3d23f04ec8cd75c55e0b5014d01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21bbb064a6c59e6b64c89503802e74f5edf3d23f04ec8cd75c55e0b5014d01e->enter($__internal_b21bbb064a6c59e6b64c89503802e74f5edf3d23f04ec8cd75c55e0b5014d01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2aa6b6b06bb5d99943e503451a7a047acb377899448f132b25342de42eb8287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aa6b6b06bb5d99943e503451a7a047acb377899448f132b25342de42eb8287->enter($__internal_c2aa6b6b06bb5d99943e503451a7a047acb377899448f132b25342de42eb8287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c2aa6b6b06bb5d99943e503451a7a047acb377899448f132b25342de42eb8287->leave($__internal_c2aa6b6b06bb5d99943e503451a7a047acb377899448f132b25342de42eb8287_prof);

        
        $__internal_b21bbb064a6c59e6b64c89503802e74f5edf3d23f04ec8cd75c55e0b5014d01e->leave($__internal_b21bbb064a6c59e6b64c89503802e74f5edf3d23f04ec8cd75c55e0b5014d01e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cdc98aa2ebe20781b5c94b2a1b3ed92c36d633706584cac647a48309194dcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdc98aa2ebe20781b5c94b2a1b3ed92c36d633706584cac647a48309194dcb0->enter($__internal_3cdc98aa2ebe20781b5c94b2a1b3ed92c36d633706584cac647a48309194dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c82a8a2dc5bf82e349fa66ba7924e7cd4108fbaffc4b15564b1af56193bc0d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82a8a2dc5bf82e349fa66ba7924e7cd4108fbaffc4b15564b1af56193bc0d7e->enter($__internal_c82a8a2dc5bf82e349fa66ba7924e7cd4108fbaffc4b15564b1af56193bc0d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c82a8a2dc5bf82e349fa66ba7924e7cd4108fbaffc4b15564b1af56193bc0d7e->leave($__internal_c82a8a2dc5bf82e349fa66ba7924e7cd4108fbaffc4b15564b1af56193bc0d7e_prof);

        
        $__internal_3cdc98aa2ebe20781b5c94b2a1b3ed92c36d633706584cac647a48309194dcb0->leave($__internal_3cdc98aa2ebe20781b5c94b2a1b3ed92c36d633706584cac647a48309194dcb0_prof);

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
