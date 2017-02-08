<?php

/* :BackEnd:login.html.twig */
class __TwigTemplate_2f1270ef73e9e5050d855bfd994268c93407ba23b678b4b7ff666d38094db196 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                        <div class=\"form-group\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'label');
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'widget');
        echo "
                        </div>
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        if (($context["error"] ?? null)) {
            // line 90
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 92
        echo "        </div>
    </div>
        
</body>
</html>";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return ":BackEnd:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 20,  148 => 16,  143 => 14,  140 => 13,  137 => 12,  129 => 92,  123 => 90,  121 => 89,  73 => 44,  68 => 42,  64 => 41,  58 => 38,  54 => 37,  49 => 35,  35 => 23,  33 => 12,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":BackEnd:login.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app/Resources\\views/BackEnd/login.html.twig");
    }
}
