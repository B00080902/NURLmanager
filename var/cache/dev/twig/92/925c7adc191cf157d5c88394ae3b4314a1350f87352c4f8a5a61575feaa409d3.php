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
        $__internal_77c774b7ca2a48f87d8c242c377696fe055bc67f7d816b00c7be5893deb48c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c774b7ca2a48f87d8c242c377696fe055bc67f7d816b00c7be5893deb48c2c->enter($__internal_77c774b7ca2a48f87d8c242c377696fe055bc67f7d816b00c7be5893deb48c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_e43690d0db75b391bae8f2fd5c52e8d350d4b030abec11008f7119252c74dfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43690d0db75b391bae8f2fd5c52e8d350d4b030abec11008f7119252c74dfa4->enter($__internal_e43690d0db75b391bae8f2fd5c52e8d350d4b030abec11008f7119252c74dfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c774b7ca2a48f87d8c242c377696fe055bc67f7d816b00c7be5893deb48c2c->leave($__internal_77c774b7ca2a48f87d8c242c377696fe055bc67f7d816b00c7be5893deb48c2c_prof);

        
        $__internal_e43690d0db75b391bae8f2fd5c52e8d350d4b030abec11008f7119252c74dfa4->leave($__internal_e43690d0db75b391bae8f2fd5c52e8d350d4b030abec11008f7119252c74dfa4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_798c75121ae7337cd1d1e571c941d0cd759345f203e8a9a5845d92ff5dc10ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798c75121ae7337cd1d1e571c941d0cd759345f203e8a9a5845d92ff5dc10ff5->enter($__internal_798c75121ae7337cd1d1e571c941d0cd759345f203e8a9a5845d92ff5dc10ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c43976c2eeed08e9aac5b606ab9626ea18b2326c67eba19db58eb5a7e1e69b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43976c2eeed08e9aac5b606ab9626ea18b2326c67eba19db58eb5a7e1e69b1b->enter($__internal_c43976c2eeed08e9aac5b606ab9626ea18b2326c67eba19db58eb5a7e1e69b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registering";
        
        $__internal_c43976c2eeed08e9aac5b606ab9626ea18b2326c67eba19db58eb5a7e1e69b1b->leave($__internal_c43976c2eeed08e9aac5b606ab9626ea18b2326c67eba19db58eb5a7e1e69b1b_prof);

        
        $__internal_798c75121ae7337cd1d1e571c941d0cd759345f203e8a9a5845d92ff5dc10ff5->leave($__internal_798c75121ae7337cd1d1e571c941d0cd759345f203e8a9a5845d92ff5dc10ff5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb45f49c61e85c29ad1f43c8cf7d1aca5e3c07dbb6255ae95a3da8cf37ef942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb45f49c61e85c29ad1f43c8cf7d1aca5e3c07dbb6255ae95a3da8cf37ef942->enter($__internal_bbb45f49c61e85c29ad1f43c8cf7d1aca5e3c07dbb6255ae95a3da8cf37ef942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_611a52d0f6945fb692b88396ce1f129384fb2c78eab98bf38222c3ca30fcbc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611a52d0f6945fb692b88396ce1f129384fb2c78eab98bf38222c3ca30fcbc69->enter($__internal_611a52d0f6945fb692b88396ce1f129384fb2c78eab98bf38222c3ca30fcbc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_611a52d0f6945fb692b88396ce1f129384fb2c78eab98bf38222c3ca30fcbc69->leave($__internal_611a52d0f6945fb692b88396ce1f129384fb2c78eab98bf38222c3ca30fcbc69_prof);

        
        $__internal_bbb45f49c61e85c29ad1f43c8cf7d1aca5e3c07dbb6255ae95a3da8cf37ef942->leave($__internal_bbb45f49c61e85c29ad1f43c8cf7d1aca5e3c07dbb6255ae95a3da8cf37ef942_prof);

    }

    // line 14
    public function block__user_username_widget($context, array $blocks = array())
    {
        $__internal_b7f5743cd8ede5aefab7861faea45db52a31cea00104502bac74fe891774604d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f5743cd8ede5aefab7861faea45db52a31cea00104502bac74fe891774604d->enter($__internal_b7f5743cd8ede5aefab7861faea45db52a31cea00104502bac74fe891774604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        $__internal_5b6ae7970ef0733f1d37780342ae0b2fccc439e10289824b6dd7790ecac0239e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6ae7970ef0733f1d37780342ae0b2fccc439e10289824b6dd7790ecac0239e->enter($__internal_5b6ae7970ef0733f1d37780342ae0b2fccc439e10289824b6dd7790ecac0239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        // line 15
        echo "            <div class=\"text_widget\">
                ";
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_5b6ae7970ef0733f1d37780342ae0b2fccc439e10289824b6dd7790ecac0239e->leave($__internal_5b6ae7970ef0733f1d37780342ae0b2fccc439e10289824b6dd7790ecac0239e_prof);

        
        $__internal_b7f5743cd8ede5aefab7861faea45db52a31cea00104502bac74fe891774604d->leave($__internal_b7f5743cd8ede5aefab7861faea45db52a31cea00104502bac74fe891774604d_prof);

    }

    // line 23
    public function block__user_email_widget($context, array $blocks = array())
    {
        $__internal_f79c203fcd53bba76ba592aba9a25225428cafcc4191f1b666e95b15f476074d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79c203fcd53bba76ba592aba9a25225428cafcc4191f1b666e95b15f476074d->enter($__internal_f79c203fcd53bba76ba592aba9a25225428cafcc4191f1b666e95b15f476074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        $__internal_7b493a4dcc608e6cd38b41b3a3315d9b0e7f4e833386c8fada78265e395151a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b493a4dcc608e6cd38b41b3a3315d9b0e7f4e833386c8fada78265e395151a8->enter($__internal_7b493a4dcc608e6cd38b41b3a3315d9b0e7f4e833386c8fada78265e395151a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        // line 24
        echo "            <div class=\"text_widget\">
                ";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_7b493a4dcc608e6cd38b41b3a3315d9b0e7f4e833386c8fada78265e395151a8->leave($__internal_7b493a4dcc608e6cd38b41b3a3315d9b0e7f4e833386c8fada78265e395151a8_prof);

        
        $__internal_f79c203fcd53bba76ba592aba9a25225428cafcc4191f1b666e95b15f476074d->leave($__internal_f79c203fcd53bba76ba592aba9a25225428cafcc4191f1b666e95b15f476074d_prof);

    }

    // line 35
    public function block__user_plainPassword_first_widget($context, array $blocks = array())
    {
        $__internal_96dfdc52a51a9069e24405fb594dcbe6aeae4f1769ccaf31efdd554f9d60f6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96dfdc52a51a9069e24405fb594dcbe6aeae4f1769ccaf31efdd554f9d60f6d5->enter($__internal_96dfdc52a51a9069e24405fb594dcbe6aeae4f1769ccaf31efdd554f9d60f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        $__internal_7dc300f167e59404faa1b0e0fe7eee26eb121ac2f1789f66d5d36c53449302ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc300f167e59404faa1b0e0fe7eee26eb121ac2f1789f66d5d36c53449302ce->enter($__internal_7dc300f167e59404faa1b0e0fe7eee26eb121ac2f1789f66d5d36c53449302ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        // line 36
        echo "            <div class=\"text_widget\">
                ";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_7dc300f167e59404faa1b0e0fe7eee26eb121ac2f1789f66d5d36c53449302ce->leave($__internal_7dc300f167e59404faa1b0e0fe7eee26eb121ac2f1789f66d5d36c53449302ce_prof);

        
        $__internal_96dfdc52a51a9069e24405fb594dcbe6aeae4f1769ccaf31efdd554f9d60f6d5->leave($__internal_96dfdc52a51a9069e24405fb594dcbe6aeae4f1769ccaf31efdd554f9d60f6d5_prof);

    }

    // line 47
    public function block__user_plainPassword_second_widget($context, array $blocks = array())
    {
        $__internal_8be1d143cc58d29dba15ea835ce5be68eb6aa38d881b74653c301c8f9bfc4226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be1d143cc58d29dba15ea835ce5be68eb6aa38d881b74653c301c8f9bfc4226->enter($__internal_8be1d143cc58d29dba15ea835ce5be68eb6aa38d881b74653c301c8f9bfc4226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        $__internal_38ed5cda768f03ddff20e5df40cd2fafa4cc67672932c46d0ae657c8ee7ce502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ed5cda768f03ddff20e5df40cd2fafa4cc67672932c46d0ae657c8ee7ce502->enter($__internal_38ed5cda768f03ddff20e5df40cd2fafa4cc67672932c46d0ae657c8ee7ce502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        // line 48
        echo "            <div class=\"text_widget\">
                ";
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
        
        $__internal_38ed5cda768f03ddff20e5df40cd2fafa4cc67672932c46d0ae657c8ee7ce502->leave($__internal_38ed5cda768f03ddff20e5df40cd2fafa4cc67672932c46d0ae657c8ee7ce502_prof);

        
        $__internal_8be1d143cc58d29dba15ea835ce5be68eb6aa38d881b74653c301c8f9bfc4226->leave($__internal_8be1d143cc58d29dba15ea835ce5be68eb6aa38d881b74653c301c8f9bfc4226_prof);

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

{% endblock %}", "security/register.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\security\\register.html.twig");
    }
}
