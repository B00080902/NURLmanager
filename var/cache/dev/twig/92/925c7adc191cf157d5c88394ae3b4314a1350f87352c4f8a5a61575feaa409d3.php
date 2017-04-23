<?php

/* security/register.html.twig */
class __TwigTemplate_8748f6afa118e70091a5d3fb4b607fd167a3e3582918f43b32aea3fc94a32c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '_user_username_widget' => array($this, 'block__user_username_widget'),
            '_user_email_widget' => array($this, 'block__user_email_widget'),
            '_user_plainPassword_first_widget' => array($this, 'block__user_plainPassword_first_widget'),
            '_user_plainPassword_second_widget' => array($this, 'block__user_plainPassword_second_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eb72c382622f25ab27683c5122d83448ec87041384c12875eb81b359c1173be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb72c382622f25ab27683c5122d83448ec87041384c12875eb81b359c1173be->enter($__internal_0eb72c382622f25ab27683c5122d83448ec87041384c12875eb81b359c1173be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_4d44a502626a57a87eada6f9cfe6d8fdccb945bcf8d98ea78ee7058e1d5ad523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d44a502626a57a87eada6f9cfe6d8fdccb945bcf8d98ea78ee7058e1d5ad523->enter($__internal_4d44a502626a57a87eada6f9cfe6d8fdccb945bcf8d98ea78ee7058e1d5ad523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb72c382622f25ab27683c5122d83448ec87041384c12875eb81b359c1173be->leave($__internal_0eb72c382622f25ab27683c5122d83448ec87041384c12875eb81b359c1173be_prof);

        
        $__internal_4d44a502626a57a87eada6f9cfe6d8fdccb945bcf8d98ea78ee7058e1d5ad523->leave($__internal_4d44a502626a57a87eada6f9cfe6d8fdccb945bcf8d98ea78ee7058e1d5ad523_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7c566f8c007c8f33d353efdaaf38273e424fcc57dd4824e663bc49c966bad72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c566f8c007c8f33d353efdaaf38273e424fcc57dd4824e663bc49c966bad72->enter($__internal_b7c566f8c007c8f33d353efdaaf38273e424fcc57dd4824e663bc49c966bad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f63a764a1c3c371eaacd5f4d018d1ac10ff096fc65b1c37ad7ffacd30d6cbd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a764a1c3c371eaacd5f4d018d1ac10ff096fc65b1c37ad7ffacd30d6cbd4b->enter($__internal_f63a764a1c3c371eaacd5f4d018d1ac10ff096fc65b1c37ad7ffacd30d6cbd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registering";
        
        $__internal_f63a764a1c3c371eaacd5f4d018d1ac10ff096fc65b1c37ad7ffacd30d6cbd4b->leave($__internal_f63a764a1c3c371eaacd5f4d018d1ac10ff096fc65b1c37ad7ffacd30d6cbd4b_prof);

        
        $__internal_b7c566f8c007c8f33d353efdaaf38273e424fcc57dd4824e663bc49c966bad72->leave($__internal_b7c566f8c007c8f33d353efdaaf38273e424fcc57dd4824e663bc49c966bad72_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e96221c1165d9a2983c00411bafa036da8f25d942c8d8f85a7f6bc0a5b61a03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96221c1165d9a2983c00411bafa036da8f25d942c8d8f85a7f6bc0a5b61a03b->enter($__internal_e96221c1165d9a2983c00411bafa036da8f25d942c8d8f85a7f6bc0a5b61a03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eb2beda3e92ef0d3ff7cec13d6599c19313e7edc290e64186f22572f4ad24d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb2beda3e92ef0d3ff7cec13d6599c19313e7edc290e64186f22572f4ad24d1->enter($__internal_1eb2beda3e92ef0d3ff7cec13d6599c19313e7edc290e64186f22572f4ad24d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"mainContent\">

        <h1>Please Register</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this));
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('_user_username_widget', $context, $blocks);
        // line 19
        echo "
        <label style=\"padding-right: 57px\">Username</label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

        ";
        // line 23
        $this->displayBlock('_user_email_widget', $context, $blocks);
        // line 28
        echo "
        <br>

        <label style=\"padding-right: 86px\">Email</label>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "


        ";
        // line 35
        $this->displayBlock('_user_plainPassword_first_widget', $context, $blocks);
        // line 40
        echo "
        <br>

        <label style=\"padding-right: 62px\">Password</label>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "


        ";
        // line 47
        $this->displayBlock('_user_plainPassword_second_widget', $context, $blocks);
        // line 52
        echo "
        <br>

        <label style=\"padding-right: 5px\">Re-Enter Password </label>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "

        <br>
        <br>
        <br>

        ";
        // line 63
        echo "        <button type=\"submit\">Register!</button>
        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_1eb2beda3e92ef0d3ff7cec13d6599c19313e7edc290e64186f22572f4ad24d1->leave($__internal_1eb2beda3e92ef0d3ff7cec13d6599c19313e7edc290e64186f22572f4ad24d1_prof);

        
        $__internal_e96221c1165d9a2983c00411bafa036da8f25d942c8d8f85a7f6bc0a5b61a03b->leave($__internal_e96221c1165d9a2983c00411bafa036da8f25d942c8d8f85a7f6bc0a5b61a03b_prof);

    }

    // line 14
    public function block__user_username_widget($context, array $blocks = array())
    {
        $__internal_456d43d1fb22acb7f051feb7d7905d8f551dce22b1435cfb1198b6ba47d3e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456d43d1fb22acb7f051feb7d7905d8f551dce22b1435cfb1198b6ba47d3e4d8->enter($__internal_456d43d1fb22acb7f051feb7d7905d8f551dce22b1435cfb1198b6ba47d3e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        $__internal_73691028c5d688062545078683cffd94f10a45aa5d3698a7509dba1aa977f049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73691028c5d688062545078683cffd94f10a45aa5d3698a7509dba1aa977f049->enter($__internal_73691028c5d688062545078683cffd94f10a45aa5d3698a7509dba1aa977f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        // line 15
        echo "            <div class=\"text_widget\">
                ";
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_73691028c5d688062545078683cffd94f10a45aa5d3698a7509dba1aa977f049->leave($__internal_73691028c5d688062545078683cffd94f10a45aa5d3698a7509dba1aa977f049_prof);

        
        $__internal_456d43d1fb22acb7f051feb7d7905d8f551dce22b1435cfb1198b6ba47d3e4d8->leave($__internal_456d43d1fb22acb7f051feb7d7905d8f551dce22b1435cfb1198b6ba47d3e4d8_prof);

    }

    // line 23
    public function block__user_email_widget($context, array $blocks = array())
    {
        $__internal_e7d6ca56294ff4d70148a9b0fae7746816d89855d9773ead088d678d6075ac2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d6ca56294ff4d70148a9b0fae7746816d89855d9773ead088d678d6075ac2b->enter($__internal_e7d6ca56294ff4d70148a9b0fae7746816d89855d9773ead088d678d6075ac2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        $__internal_753334dd2ad4b1744831b45827cbe4d49fd202289b852810d63109785b687e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753334dd2ad4b1744831b45827cbe4d49fd202289b852810d63109785b687e49->enter($__internal_753334dd2ad4b1744831b45827cbe4d49fd202289b852810d63109785b687e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        // line 24
        echo "            <div class=\"text_widget\">
                ";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_753334dd2ad4b1744831b45827cbe4d49fd202289b852810d63109785b687e49->leave($__internal_753334dd2ad4b1744831b45827cbe4d49fd202289b852810d63109785b687e49_prof);

        
        $__internal_e7d6ca56294ff4d70148a9b0fae7746816d89855d9773ead088d678d6075ac2b->leave($__internal_e7d6ca56294ff4d70148a9b0fae7746816d89855d9773ead088d678d6075ac2b_prof);

    }

    // line 35
    public function block__user_plainPassword_first_widget($context, array $blocks = array())
    {
        $__internal_38c53f8fa45fb2c391d2ff938004923b58252d2d6f634ea0053705aa7f4d0cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c53f8fa45fb2c391d2ff938004923b58252d2d6f634ea0053705aa7f4d0cc6->enter($__internal_38c53f8fa45fb2c391d2ff938004923b58252d2d6f634ea0053705aa7f4d0cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        $__internal_bd2ab132d2868d459a26dc048ddfd60d9b308ca4b223159345476477977a60dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2ab132d2868d459a26dc048ddfd60d9b308ca4b223159345476477977a60dc->enter($__internal_bd2ab132d2868d459a26dc048ddfd60d9b308ca4b223159345476477977a60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        // line 36
        echo "            <div class=\"text_widget\">
                ";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_bd2ab132d2868d459a26dc048ddfd60d9b308ca4b223159345476477977a60dc->leave($__internal_bd2ab132d2868d459a26dc048ddfd60d9b308ca4b223159345476477977a60dc_prof);

        
        $__internal_38c53f8fa45fb2c391d2ff938004923b58252d2d6f634ea0053705aa7f4d0cc6->leave($__internal_38c53f8fa45fb2c391d2ff938004923b58252d2d6f634ea0053705aa7f4d0cc6_prof);

    }

    // line 47
    public function block__user_plainPassword_second_widget($context, array $blocks = array())
    {
        $__internal_e6c878240986b2e949491ef015387c694bb9acbd9711b6fe1bdb72495053fff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c878240986b2e949491ef015387c694bb9acbd9711b6fe1bdb72495053fff0->enter($__internal_e6c878240986b2e949491ef015387c694bb9acbd9711b6fe1bdb72495053fff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        $__internal_82ada53ae980ff9f4081451e74926858162f383267b56cc67f48414280a306ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ada53ae980ff9f4081451e74926858162f383267b56cc67f48414280a306ad->enter($__internal_82ada53ae980ff9f4081451e74926858162f383267b56cc67f48414280a306ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        // line 48
        echo "            <div class=\"text_widget\">
                ";
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_82ada53ae980ff9f4081451e74926858162f383267b56cc67f48414280a306ad->leave($__internal_82ada53ae980ff9f4081451e74926858162f383267b56cc67f48414280a306ad_prof);

        
        $__internal_e6c878240986b2e949491ef015387c694bb9acbd9711b6fe1bdb72495053fff0->leave($__internal_e6c878240986b2e949491ef015387c694bb9acbd9711b6fe1bdb72495053fff0_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 49,  245 => 48,  236 => 47,  223 => 37,  220 => 36,  211 => 35,  198 => 25,  195 => 24,  186 => 23,  173 => 16,  170 => 15,  161 => 14,  147 => 64,  144 => 63,  135 => 56,  129 => 52,  127 => 47,  121 => 44,  115 => 40,  113 => 35,  107 => 32,  101 => 28,  99 => 23,  94 => 21,  90 => 19,  88 => 14,  85 => 13,  83 => 12,  78 => 10,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
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

{% block title %}Registering{%  endblock %}

{% block body %}
    <div id=\"mainContent\">

        <h1>Please Register</h1>

        {{ form_start(form) }}

        {% form_theme form _self %}

        {% block _user_username_widget %}
            <div class=\"text_widget\">
                {{ block('form_widget_simple') }}
            </div>
        {% endblock %}

        <label style=\"padding-right: 57px\">Username</label>
        {{ form_widget(form.username) }}

        {% block _user_email_widget %}
            <div class=\"text_widget\">
                {{ block('form_widget_simple') }}
            </div>
        {% endblock %}

        <br>

        <label style=\"padding-right: 86px\">Email</label>
        {{ form_widget(form.email) }}


        {% block _user_plainPassword_first_widget %}
            <div class=\"text_widget\">
                {{ block('form_widget_simple') }}
            </div>
        {% endblock %}

        <br>

        <label style=\"padding-right: 62px\">Password</label>
        {{ form_widget(form.plainPassword.first) }}


        {% block _user_plainPassword_second_widget %}
            <div class=\"text_widget\">
                {{ block('form_widget_simple') }}
            </div>
        {% endblock %}

        <br>

        <label style=\"padding-right: 5px\">Re-Enter Password </label>
        {{ form_widget(form.plainPassword.second) }}

        <br>
        <br>
        <br>

        {#<button id=\"registerButton\" type=\"submit\">Register</button>#}
        <button type=\"submit\">Register!</button>
        {{ form_end(form) }}
    </div>

{% endblock %}", "security/register.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\security\\register.html.twig");
    }
}
