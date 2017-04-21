<?php

/* security/login.html.twig */
class __TwigTemplate_6bc5f6504a9914bedec45a26d615487e69b77805202114beeb6791ba37f50a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f91d6e4a7dd3cac5f9adae3cd220a725672fac04bd135afc73f99dd5ec8ab994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91d6e4a7dd3cac5f9adae3cd220a725672fac04bd135afc73f99dd5ec8ab994->enter($__internal_f91d6e4a7dd3cac5f9adae3cd220a725672fac04bd135afc73f99dd5ec8ab994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_06fac4230ca4180233b709eafa361ed666486f010568447f654ce3732e876020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fac4230ca4180233b709eafa361ed666486f010568447f654ce3732e876020->enter($__internal_06fac4230ca4180233b709eafa361ed666486f010568447f654ce3732e876020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91d6e4a7dd3cac5f9adae3cd220a725672fac04bd135afc73f99dd5ec8ab994->leave($__internal_f91d6e4a7dd3cac5f9adae3cd220a725672fac04bd135afc73f99dd5ec8ab994_prof);

        
        $__internal_06fac4230ca4180233b709eafa361ed666486f010568447f654ce3732e876020->leave($__internal_06fac4230ca4180233b709eafa361ed666486f010568447f654ce3732e876020_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b423efc108c142d6128054f532c8eace8ac09b6b45801e700aa372e78711b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b423efc108c142d6128054f532c8eace8ac09b6b45801e700aa372e78711b00->enter($__internal_5b423efc108c142d6128054f532c8eace8ac09b6b45801e700aa372e78711b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11caebe627f49ebce1d32134a84ee21585adc7cde5dbfb313216c6fe03638c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11caebe627f49ebce1d32134a84ee21585adc7cde5dbfb313216c6fe03638c8f->enter($__internal_11caebe627f49ebce1d32134a84ee21585adc7cde5dbfb313216c6fe03638c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login ";
        
        $__internal_11caebe627f49ebce1d32134a84ee21585adc7cde5dbfb313216c6fe03638c8f->leave($__internal_11caebe627f49ebce1d32134a84ee21585adc7cde5dbfb313216c6fe03638c8f_prof);

        
        $__internal_5b423efc108c142d6128054f532c8eace8ac09b6b45801e700aa372e78711b00->leave($__internal_5b423efc108c142d6128054f532c8eace8ac09b6b45801e700aa372e78711b00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6f26abb8f8c25d82f78a8fa6c84009f406f00c85b7e856de1869d2aff3fd506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f26abb8f8c25d82f78a8fa6c84009f406f00c85b7e856de1869d2aff3fd506->enter($__internal_d6f26abb8f8c25d82f78a8fa6c84009f406f00c85b7e856de1869d2aff3fd506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15ca19478148882b59cce1ce38e089e638b157f4d6e83d01bea4a7a245e832a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ca19478148882b59cce1ce38e089e638b157f4d6e83d01bea4a7a245e832a7->enter($__internal_15ca19478148882b59cce1ce38e089e638b157f4d6e83d01bea4a7a245e832a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div id=\"loginContent\">
            <div id=\"loginForm\">
                <h1>Please Login</h1>

                ";
        // line 10
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "
                <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    <table id=\"loginTable\">
                        <tr>
                            <td><label for=\"username\">Username:</label></td>
                            <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /></td>
                        </tr>
                        <tr>
                            <td><label for=\"password\">Password:</label></td>
                            <td><input type=\"password\" id=\"password\" name=\"_password\" /></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><button type=\"submit\" id=\"loginButton\">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <hr>
            <div id=\"registerSide\">
                <h2>Don't have an account yet?</h2>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\"><button id=\"registerButton\">Register</button></a>
            </div>
        </div>
";
        
        $__internal_15ca19478148882b59cce1ce38e089e638b157f4d6e83d01bea4a7a245e832a7->leave($__internal_15ca19478148882b59cce1ce38e089e638b157f4d6e83d01bea4a7a245e832a7_prof);

        
        $__internal_d6f26abb8f8c25d82f78a8fa6c84009f406f00c85b7e856de1869d2aff3fd506->leave($__internal_d6f26abb8f8c25d82f78a8fa6c84009f406f00c85b7e856de1869d2aff3fd506_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  99 => 22,  91 => 17,  85 => 14,  82 => 13,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Login {%  endblock %}

{% block body %}
        <div id=\"loginContent\">
            <div id=\"loginForm\">
                <h1>Please Login</h1>

                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <form action=\"{{ path('login') }}\" method=\"post\">

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >
                    <table id=\"loginTable\">
                        <tr>
                            <td><label for=\"username\">Username:</label></td>
                            <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /></td>
                        </tr>
                        <tr>
                            <td><label for=\"password\">Password:</label></td>
                            <td><input type=\"password\" id=\"password\" name=\"_password\" /></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><button type=\"submit\" id=\"loginButton\">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <hr>
            <div id=\"registerSide\">
                <h2>Don't have an account yet?</h2>
                <a href=\"{{ path('user_registration') }}\"><button id=\"registerButton\">Register</button></a>
            </div>
        </div>
{% endblock %}", "security/login.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\security\\login.html.twig");
    }
}
