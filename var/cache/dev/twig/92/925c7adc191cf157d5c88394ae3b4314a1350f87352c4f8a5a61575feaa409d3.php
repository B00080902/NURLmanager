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
        $__internal_d962a89448416392960aff2ef5519ae6f7a45d8fe5be38bccc658a7cf162488b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d962a89448416392960aff2ef5519ae6f7a45d8fe5be38bccc658a7cf162488b->enter($__internal_d962a89448416392960aff2ef5519ae6f7a45d8fe5be38bccc658a7cf162488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_b2c01863164853682af616412e924ed7294351d07009d7ec8d0b6e38fdb3c8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c01863164853682af616412e924ed7294351d07009d7ec8d0b6e38fdb3c8e2->enter($__internal_b2c01863164853682af616412e924ed7294351d07009d7ec8d0b6e38fdb3c8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d962a89448416392960aff2ef5519ae6f7a45d8fe5be38bccc658a7cf162488b->leave($__internal_d962a89448416392960aff2ef5519ae6f7a45d8fe5be38bccc658a7cf162488b_prof);

        
        $__internal_b2c01863164853682af616412e924ed7294351d07009d7ec8d0b6e38fdb3c8e2->leave($__internal_b2c01863164853682af616412e924ed7294351d07009d7ec8d0b6e38fdb3c8e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef877627aaa822b41dedd45203135ca3dddae62828354731c061389f25224860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef877627aaa822b41dedd45203135ca3dddae62828354731c061389f25224860->enter($__internal_ef877627aaa822b41dedd45203135ca3dddae62828354731c061389f25224860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c5e40a553a4bed00daba43f3c57b959e2662ae330d55e6117b4c56cc724ce62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5e40a553a4bed00daba43f3c57b959e2662ae330d55e6117b4c56cc724ce62->enter($__internal_7c5e40a553a4bed00daba43f3c57b959e2662ae330d55e6117b4c56cc724ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registering";
        
        $__internal_7c5e40a553a4bed00daba43f3c57b959e2662ae330d55e6117b4c56cc724ce62->leave($__internal_7c5e40a553a4bed00daba43f3c57b959e2662ae330d55e6117b4c56cc724ce62_prof);

        
        $__internal_ef877627aaa822b41dedd45203135ca3dddae62828354731c061389f25224860->leave($__internal_ef877627aaa822b41dedd45203135ca3dddae62828354731c061389f25224860_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4eff5a0a2d57211a21380024449c9ddb491d9504be522a12cf0b55ad33b70cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4eff5a0a2d57211a21380024449c9ddb491d9504be522a12cf0b55ad33b70cd->enter($__internal_c4eff5a0a2d57211a21380024449c9ddb491d9504be522a12cf0b55ad33b70cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa8769e783e7b1b9d4e42b4324c8eda05145a2774c60cf0857c34c2545162181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8769e783e7b1b9d4e42b4324c8eda05145a2774c60cf0857c34c2545162181->enter($__internal_aa8769e783e7b1b9d4e42b4324c8eda05145a2774c60cf0857c34c2545162181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa8769e783e7b1b9d4e42b4324c8eda05145a2774c60cf0857c34c2545162181->leave($__internal_aa8769e783e7b1b9d4e42b4324c8eda05145a2774c60cf0857c34c2545162181_prof);

        
        $__internal_c4eff5a0a2d57211a21380024449c9ddb491d9504be522a12cf0b55ad33b70cd->leave($__internal_c4eff5a0a2d57211a21380024449c9ddb491d9504be522a12cf0b55ad33b70cd_prof);

    }

    // line 14
    public function block__user_username_widget($context, array $blocks = array())
    {
        $__internal_55f69a6e6445ac9b52ac6955338e3ed0dafb3e6bf4f49144fedc52d65f09124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f69a6e6445ac9b52ac6955338e3ed0dafb3e6bf4f49144fedc52d65f09124b->enter($__internal_55f69a6e6445ac9b52ac6955338e3ed0dafb3e6bf4f49144fedc52d65f09124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        $__internal_ae22277294c16a6b049b950cf22ec6760b1ceeee6d7cdc4a65b0143ae623159f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae22277294c16a6b049b950cf22ec6760b1ceeee6d7cdc4a65b0143ae623159f->enter($__internal_ae22277294c16a6b049b950cf22ec6760b1ceeee6d7cdc4a65b0143ae623159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        // line 15
        echo "            <div class=\"text_widget\">
                ";
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_ae22277294c16a6b049b950cf22ec6760b1ceeee6d7cdc4a65b0143ae623159f->leave($__internal_ae22277294c16a6b049b950cf22ec6760b1ceeee6d7cdc4a65b0143ae623159f_prof);

        
        $__internal_55f69a6e6445ac9b52ac6955338e3ed0dafb3e6bf4f49144fedc52d65f09124b->leave($__internal_55f69a6e6445ac9b52ac6955338e3ed0dafb3e6bf4f49144fedc52d65f09124b_prof);

    }

    // line 23
    public function block__user_email_widget($context, array $blocks = array())
    {
        $__internal_f4dbf26429e0e624a16d6a449edf2a1473276783f14c67f23388c176b8addac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dbf26429e0e624a16d6a449edf2a1473276783f14c67f23388c176b8addac7->enter($__internal_f4dbf26429e0e624a16d6a449edf2a1473276783f14c67f23388c176b8addac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        $__internal_23dd5f0e5280afc285c4fb695152a693e69d9514d4098e664302e67b3f142c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dd5f0e5280afc285c4fb695152a693e69d9514d4098e664302e67b3f142c47->enter($__internal_23dd5f0e5280afc285c4fb695152a693e69d9514d4098e664302e67b3f142c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        // line 24
        echo "            <div class=\"text_widget\">
                ";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_23dd5f0e5280afc285c4fb695152a693e69d9514d4098e664302e67b3f142c47->leave($__internal_23dd5f0e5280afc285c4fb695152a693e69d9514d4098e664302e67b3f142c47_prof);

        
        $__internal_f4dbf26429e0e624a16d6a449edf2a1473276783f14c67f23388c176b8addac7->leave($__internal_f4dbf26429e0e624a16d6a449edf2a1473276783f14c67f23388c176b8addac7_prof);

    }

    // line 35
    public function block__user_plainPassword_first_widget($context, array $blocks = array())
    {
        $__internal_6767335307c5424288145c2fa3e30121e461260f8839120268e47394ef7519dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6767335307c5424288145c2fa3e30121e461260f8839120268e47394ef7519dc->enter($__internal_6767335307c5424288145c2fa3e30121e461260f8839120268e47394ef7519dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        $__internal_f9710e29035db4d6621e6bb905ed3b1a112897e62b004c7bd5a05eb3cfd415c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9710e29035db4d6621e6bb905ed3b1a112897e62b004c7bd5a05eb3cfd415c6->enter($__internal_f9710e29035db4d6621e6bb905ed3b1a112897e62b004c7bd5a05eb3cfd415c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        // line 36
        echo "            <div class=\"text_widget\">
                ";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_f9710e29035db4d6621e6bb905ed3b1a112897e62b004c7bd5a05eb3cfd415c6->leave($__internal_f9710e29035db4d6621e6bb905ed3b1a112897e62b004c7bd5a05eb3cfd415c6_prof);

        
        $__internal_6767335307c5424288145c2fa3e30121e461260f8839120268e47394ef7519dc->leave($__internal_6767335307c5424288145c2fa3e30121e461260f8839120268e47394ef7519dc_prof);

    }

    // line 47
    public function block__user_plainPassword_second_widget($context, array $blocks = array())
    {
        $__internal_fd09dc095e960a2b72ea2b5888cd047dddb49d79948156a4416dbdb2598704a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd09dc095e960a2b72ea2b5888cd047dddb49d79948156a4416dbdb2598704a7->enter($__internal_fd09dc095e960a2b72ea2b5888cd047dddb49d79948156a4416dbdb2598704a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        $__internal_8daad63ee6bccc4fcee78010c55e63c4f986017ce9dc145d44ee680e7dc8d599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daad63ee6bccc4fcee78010c55e63c4f986017ce9dc145d44ee680e7dc8d599->enter($__internal_8daad63ee6bccc4fcee78010c55e63c4f986017ce9dc145d44ee680e7dc8d599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        // line 48
        echo "            <div class=\"text_widget\">
                ";
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_8daad63ee6bccc4fcee78010c55e63c4f986017ce9dc145d44ee680e7dc8d599->leave($__internal_8daad63ee6bccc4fcee78010c55e63c4f986017ce9dc145d44ee680e7dc8d599_prof);

        
        $__internal_fd09dc095e960a2b72ea2b5888cd047dddb49d79948156a4416dbdb2598704a7->leave($__internal_fd09dc095e960a2b72ea2b5888cd047dddb49d79948156a4416dbdb2598704a7_prof);

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
