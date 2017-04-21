<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_21224a9a6f3065a0046ca267845026fcc74e25ed0ab2b22807ac96865821bff5 extends Twig_Template
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
        $__internal_c460ae3368b0a25d78972bfc450f49508e38eadeafc789df3a25175a75705be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c460ae3368b0a25d78972bfc450f49508e38eadeafc789df3a25175a75705be2->enter($__internal_c460ae3368b0a25d78972bfc450f49508e38eadeafc789df3a25175a75705be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5e04c65ae93a9ac19b4bdf6365f6a97f7abb696ecd5dd4253e4ee53d45747acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e04c65ae93a9ac19b4bdf6365f6a97f7abb696ecd5dd4253e4ee53d45747acf->enter($__internal_5e04c65ae93a9ac19b4bdf6365f6a97f7abb696ecd5dd4253e4ee53d45747acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c460ae3368b0a25d78972bfc450f49508e38eadeafc789df3a25175a75705be2->leave($__internal_c460ae3368b0a25d78972bfc450f49508e38eadeafc789df3a25175a75705be2_prof);

        
        $__internal_5e04c65ae93a9ac19b4bdf6365f6a97f7abb696ecd5dd4253e4ee53d45747acf->leave($__internal_5e04c65ae93a9ac19b4bdf6365f6a97f7abb696ecd5dd4253e4ee53d45747acf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e93f944d2af781b82335f072a3eacd0b2fecff385234251eb499dba8c00a6149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93f944d2af781b82335f072a3eacd0b2fecff385234251eb499dba8c00a6149->enter($__internal_e93f944d2af781b82335f072a3eacd0b2fecff385234251eb499dba8c00a6149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2530edcca5beb1b391d80dee80fc2df3ec59ce91906de7cd4571b4edcec20f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2530edcca5beb1b391d80dee80fc2df3ec59ce91906de7cd4571b4edcec20f32->enter($__internal_2530edcca5beb1b391d80dee80fc2df3ec59ce91906de7cd4571b4edcec20f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2530edcca5beb1b391d80dee80fc2df3ec59ce91906de7cd4571b4edcec20f32->leave($__internal_2530edcca5beb1b391d80dee80fc2df3ec59ce91906de7cd4571b4edcec20f32_prof);

        
        $__internal_e93f944d2af781b82335f072a3eacd0b2fecff385234251eb499dba8c00a6149->leave($__internal_e93f944d2af781b82335f072a3eacd0b2fecff385234251eb499dba8c00a6149_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c5d2845ebba111638325015f58a2c12450c82148141e5fbfcf2fb64e4b67d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5d2845ebba111638325015f58a2c12450c82148141e5fbfcf2fb64e4b67d16->enter($__internal_0c5d2845ebba111638325015f58a2c12450c82148141e5fbfcf2fb64e4b67d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ca01019d0ca7eef6479655defdd4083f6475d6415a2af11ccd59d0cfd34573e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca01019d0ca7eef6479655defdd4083f6475d6415a2af11ccd59d0cfd34573e->enter($__internal_9ca01019d0ca7eef6479655defdd4083f6475d6415a2af11ccd59d0cfd34573e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9ca01019d0ca7eef6479655defdd4083f6475d6415a2af11ccd59d0cfd34573e->leave($__internal_9ca01019d0ca7eef6479655defdd4083f6475d6415a2af11ccd59d0cfd34573e_prof);

        
        $__internal_0c5d2845ebba111638325015f58a2c12450c82148141e5fbfcf2fb64e4b67d16->leave($__internal_0c5d2845ebba111638325015f58a2c12450c82148141e5fbfcf2fb64e4b67d16_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_715d68436920e33c3fc68bf9fdc4a86bc812f919f867dfe4432b5aa119c85e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715d68436920e33c3fc68bf9fdc4a86bc812f919f867dfe4432b5aa119c85e8f->enter($__internal_715d68436920e33c3fc68bf9fdc4a86bc812f919f867dfe4432b5aa119c85e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ccc613fddfda421401f346609fbcd9c8ed6db4b08a39c910ff8ac55b89cfc60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc613fddfda421401f346609fbcd9c8ed6db4b08a39c910ff8ac55b89cfc60a->enter($__internal_ccc613fddfda421401f346609fbcd9c8ed6db4b08a39c910ff8ac55b89cfc60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ccc613fddfda421401f346609fbcd9c8ed6db4b08a39c910ff8ac55b89cfc60a->leave($__internal_ccc613fddfda421401f346609fbcd9c8ed6db4b08a39c910ff8ac55b89cfc60a_prof);

        
        $__internal_715d68436920e33c3fc68bf9fdc4a86bc812f919f867dfe4432b5aa119c85e8f->leave($__internal_715d68436920e33c3fc68bf9fdc4a86bc812f919f867dfe4432b5aa119c85e8f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
