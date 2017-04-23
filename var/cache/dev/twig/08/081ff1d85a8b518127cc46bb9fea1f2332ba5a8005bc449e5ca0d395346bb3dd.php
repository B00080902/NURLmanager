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
        $__internal_4085c7426fa7539b5290bdc32ba52b273e1f6c9f3eb9d0d6f9001b88036b7c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4085c7426fa7539b5290bdc32ba52b273e1f6c9f3eb9d0d6f9001b88036b7c70->enter($__internal_4085c7426fa7539b5290bdc32ba52b273e1f6c9f3eb9d0d6f9001b88036b7c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_859a148684e6263910c7f0f117b815cb2e681f0559896592b737bf5d603160c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859a148684e6263910c7f0f117b815cb2e681f0559896592b737bf5d603160c9->enter($__internal_859a148684e6263910c7f0f117b815cb2e681f0559896592b737bf5d603160c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4085c7426fa7539b5290bdc32ba52b273e1f6c9f3eb9d0d6f9001b88036b7c70->leave($__internal_4085c7426fa7539b5290bdc32ba52b273e1f6c9f3eb9d0d6f9001b88036b7c70_prof);

        
        $__internal_859a148684e6263910c7f0f117b815cb2e681f0559896592b737bf5d603160c9->leave($__internal_859a148684e6263910c7f0f117b815cb2e681f0559896592b737bf5d603160c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac714ec559ab7b1d1c56a87b539f45a0c753752062780c7f58465a8aa094fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac714ec559ab7b1d1c56a87b539f45a0c753752062780c7f58465a8aa094fac->enter($__internal_9ac714ec559ab7b1d1c56a87b539f45a0c753752062780c7f58465a8aa094fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00dfd87fc4a7b007296307126943a1a4e896e2c4e8a90a6d4cb1003acb7ec2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dfd87fc4a7b007296307126943a1a4e896e2c4e8a90a6d4cb1003acb7ec2dd->enter($__internal_00dfd87fc4a7b007296307126943a1a4e896e2c4e8a90a6d4cb1003acb7ec2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login ";
        
        $__internal_00dfd87fc4a7b007296307126943a1a4e896e2c4e8a90a6d4cb1003acb7ec2dd->leave($__internal_00dfd87fc4a7b007296307126943a1a4e896e2c4e8a90a6d4cb1003acb7ec2dd_prof);

        
        $__internal_9ac714ec559ab7b1d1c56a87b539f45a0c753752062780c7f58465a8aa094fac->leave($__internal_9ac714ec559ab7b1d1c56a87b539f45a0c753752062780c7f58465a8aa094fac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4a7bf94b9b4ba0387438292956be428c6266dbdb1cac0c30b81e2ebd0b90e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a7bf94b9b4ba0387438292956be428c6266dbdb1cac0c30b81e2ebd0b90e0d->enter($__internal_b4a7bf94b9b4ba0387438292956be428c6266dbdb1cac0c30b81e2ebd0b90e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f162fecd00192a8a2ffe7f476521e4f4129a6b1b7b71187cd6ddc70c177f06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f162fecd00192a8a2ffe7f476521e4f4129a6b1b7b71187cd6ddc70c177f06c->enter($__internal_2f162fecd00192a8a2ffe7f476521e4f4129a6b1b7b71187cd6ddc70c177f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f162fecd00192a8a2ffe7f476521e4f4129a6b1b7b71187cd6ddc70c177f06c->leave($__internal_2f162fecd00192a8a2ffe7f476521e4f4129a6b1b7b71187cd6ddc70c177f06c_prof);

        
        $__internal_b4a7bf94b9b4ba0387438292956be428c6266dbdb1cac0c30b81e2ebd0b90e0d->leave($__internal_b4a7bf94b9b4ba0387438292956be428c6266dbdb1cac0c30b81e2ebd0b90e0d_prof);

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
