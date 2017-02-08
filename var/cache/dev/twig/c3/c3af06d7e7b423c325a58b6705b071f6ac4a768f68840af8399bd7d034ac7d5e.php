<?php

/* BackEnd/login.html.twig */
class __TwigTemplate_1470cf5cdd74727f74aa86af8d5e00f52955a99d544119ced5c7ccc9ab0c4131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a820b49e5348d6741f337bab232e41d6090160cc72ba72688ed6853351f6c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a820b49e5348d6741f337bab232e41d6090160cc72ba72688ed6853351f6c1c->enter($__internal_3a820b49e5348d6741f337bab232e41d6090160cc72ba72688ed6853351f6c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/login.html.twig"));

        $__internal_fcedb700de105fa6b90c92ccf12567579cc6d4cbcc0d8061c4716c3aa7115ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcedb700de105fa6b90c92ccf12567579cc6d4cbcc0d8061c4716c3aa7115ee9->enter($__internal_fcedb700de105fa6b90c92ccf12567579cc6d4cbcc0d8061c4716c3aa7115ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEnd/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Mediaff | Login </title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
</head>

<body class=\"login\">
    <div>
        <a class=\"hiddenanchor\" id=\"signup\"></a>
        <a class=\"hiddenanchor\" id=\"signin\"></a>

        <div class=\"login_wrapper\">
            <div class=\"animate form login_form\">
                <section class=\"login_content\">
                    <h1>Admin Login</h1>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                        <div class=\"form-group\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                        </div>
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    <div class=\"clearfix\"></div>
                        <!--<div class=\"separator\">
                            <p class=\"change_link\">New to site?
                                <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                            </p>

                            <div class=\"clearfix\"></div>
                            <br />

                        </div>-->
                </section>
            </div>

            <!--<div id=\"register\" class=\"animate form registration_form\">
                <section class=\"login_content\">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                        </div>
                        <div>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
                        </div>
                        <div>
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                        </div>
                        <div>
                            <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
                        </div>

                        <div class=\"clearfix\"></div>

                        <div class=\"separator\">
                            <p class=\"change_link\">Already a member ?
                                <a href=\"#signin\" class=\"to_register\"> Log in </a>
                            </p>

                            <div class=\"clearfix\"></div>
                            <br />

                        </div>
                    </form>
                </section>
            </div>-->
            ";
        // line 89
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 90
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 92
        echo "        </div>
    </div>
        
</body>
</html>";
        
        $__internal_3a820b49e5348d6741f337bab232e41d6090160cc72ba72688ed6853351f6c1c->leave($__internal_3a820b49e5348d6741f337bab232e41d6090160cc72ba72688ed6853351f6c1c_prof);

        
        $__internal_fcedb700de105fa6b90c92ccf12567579cc6d4cbcc0d8061c4716c3aa7115ee9->leave($__internal_fcedb700de105fa6b90c92ccf12567579cc6d4cbcc0d8061c4716c3aa7115ee9_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d81c709c4b0dba797c41c16e89309409f561e09e58fe51a305973876640637c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d81c709c4b0dba797c41c16e89309409f561e09e58fe51a305973876640637c->enter($__internal_7d81c709c4b0dba797c41c16e89309409f561e09e58fe51a305973876640637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_231378bf7f171c695c5cda92cbf83346ba0ae12159233adf3be3af2a130e85d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231378bf7f171c695c5cda92cbf83346ba0ae12159233adf3be3af2a130e85d1->enter($__internal_231378bf7f171c695c5cda92cbf83346ba0ae12159233adf3be3af2a130e85d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <!-- Bootstrap -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Progress Bar -->
        
        <!-- Custom Theme Style -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_231378bf7f171c695c5cda92cbf83346ba0ae12159233adf3be3af2a130e85d1->leave($__internal_231378bf7f171c695c5cda92cbf83346ba0ae12159233adf3be3af2a130e85d1_prof);

        
        $__internal_7d81c709c4b0dba797c41c16e89309409f561e09e58fe51a305973876640637c->leave($__internal_7d81c709c4b0dba797c41c16e89309409f561e09e58fe51a305973876640637c_prof);

    }

    public function getTemplateName()
    {
        return "BackEnd/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 20,  166 => 16,  161 => 14,  158 => 13,  149 => 12,  135 => 92,  129 => 90,  127 => 89,  79 => 44,  74 => 42,  70 => 41,  64 => 38,  60 => 37,  55 => 35,  41 => 23,  39 => 12,  26 => 1,);
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
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Mediaff | Login </title>

    {% block stylesheets %}
        <!-- Bootstrap -->
        <link href=\"{{ asset('resources/vendors_new/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"{{ asset('resources/vendors_new/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <!-- Progress Bar -->
        
        <!-- Custom Theme Style -->
        <link href=\"{{ asset('resources/build/css/custom.min.css') }}\" rel=\"stylesheet\">

    {% endblock %}

</head>

<body class=\"login\">
    <div>
        <a class=\"hiddenanchor\" id=\"signup\"></a>
        <a class=\"hiddenanchor\" id=\"signin\"></a>

        <div class=\"login_wrapper\">
            <div class=\"animate form login_form\">
                <section class=\"login_content\">
                    <h1>Admin Login</h1>
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        <div class=\"form-group\">
                            {{ form_label(form.username) }}
                            {{ form_widget(form.username) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.password) }}
                            {{ form_widget(form.password) }}
                        </div>
                    {{ form_end(form) }}
                    <div class=\"clearfix\"></div>
                        <!--<div class=\"separator\">
                            <p class=\"change_link\">New to site?
                                <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                            </p>

                            <div class=\"clearfix\"></div>
                            <br />

                        </div>-->
                </section>
            </div>

            <!--<div id=\"register\" class=\"animate form registration_form\">
                <section class=\"login_content\">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
                        </div>
                        <div>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
                        </div>
                        <div>
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
                        </div>
                        <div>
                            <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
                        </div>

                        <div class=\"clearfix\"></div>

                        <div class=\"separator\">
                            <p class=\"change_link\">Already a member ?
                                <a href=\"#signin\" class=\"to_register\"> Log in </a>
                            </p>

                            <div class=\"clearfix\"></div>
                            <br />

                        </div>
                    </form>
                </section>
            </div>-->
            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
        </div>
    </div>
        
</body>
</html>", "BackEnd/login.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app\\Resources\\views\\BackEnd\\login.html.twig");
    }
}
