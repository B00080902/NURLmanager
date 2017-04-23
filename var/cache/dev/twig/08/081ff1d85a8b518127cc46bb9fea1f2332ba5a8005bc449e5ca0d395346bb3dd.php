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
        $__internal_5eaccfbf3a6a53162ba2b99b2188455667b22342eac6a0e0f9beeb03ca6f28b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaccfbf3a6a53162ba2b99b2188455667b22342eac6a0e0f9beeb03ca6f28b9->enter($__internal_5eaccfbf3a6a53162ba2b99b2188455667b22342eac6a0e0f9beeb03ca6f28b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_c768b57560757043c4032dab1ce75200f194e24a3fe83564d143df021e85d788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c768b57560757043c4032dab1ce75200f194e24a3fe83564d143df021e85d788->enter($__internal_c768b57560757043c4032dab1ce75200f194e24a3fe83564d143df021e85d788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eaccfbf3a6a53162ba2b99b2188455667b22342eac6a0e0f9beeb03ca6f28b9->leave($__internal_5eaccfbf3a6a53162ba2b99b2188455667b22342eac6a0e0f9beeb03ca6f28b9_prof);

        
        $__internal_c768b57560757043c4032dab1ce75200f194e24a3fe83564d143df021e85d788->leave($__internal_c768b57560757043c4032dab1ce75200f194e24a3fe83564d143df021e85d788_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a875bf2982f4e6ffd81624673ccd0a6461671658b1e0c9221c438f1bf8ad2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a875bf2982f4e6ffd81624673ccd0a6461671658b1e0c9221c438f1bf8ad2f4->enter($__internal_4a875bf2982f4e6ffd81624673ccd0a6461671658b1e0c9221c438f1bf8ad2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3395eb35db18db42352378d4606f978534908648cb68e83d8d91fc1b4213545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3395eb35db18db42352378d4606f978534908648cb68e83d8d91fc1b4213545->enter($__internal_f3395eb35db18db42352378d4606f978534908648cb68e83d8d91fc1b4213545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login ";
        
        $__internal_f3395eb35db18db42352378d4606f978534908648cb68e83d8d91fc1b4213545->leave($__internal_f3395eb35db18db42352378d4606f978534908648cb68e83d8d91fc1b4213545_prof);

        
        $__internal_4a875bf2982f4e6ffd81624673ccd0a6461671658b1e0c9221c438f1bf8ad2f4->leave($__internal_4a875bf2982f4e6ffd81624673ccd0a6461671658b1e0c9221c438f1bf8ad2f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b3af89e30810ae356ac75f4dfa820d6bc1801fa8dde1714ab2eff5275d27f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b3af89e30810ae356ac75f4dfa820d6bc1801fa8dde1714ab2eff5275d27f1->enter($__internal_d9b3af89e30810ae356ac75f4dfa820d6bc1801fa8dde1714ab2eff5275d27f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb165103b5322074c71bde8b3d4e040224615cf5865a31f3f47a776228f594f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb165103b5322074c71bde8b3d4e040224615cf5865a31f3f47a776228f594f2->enter($__internal_eb165103b5322074c71bde8b3d4e040224615cf5865a31f3f47a776228f594f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb165103b5322074c71bde8b3d4e040224615cf5865a31f3f47a776228f594f2->leave($__internal_eb165103b5322074c71bde8b3d4e040224615cf5865a31f3f47a776228f594f2_prof);

        
        $__internal_d9b3af89e30810ae356ac75f4dfa820d6bc1801fa8dde1714ab2eff5275d27f1->leave($__internal_d9b3af89e30810ae356ac75f4dfa820d6bc1801fa8dde1714ab2eff5275d27f1_prof);

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
{% endblock %}", "security/login.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\security\\login.html.twig");
    }
}
