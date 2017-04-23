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
        $__internal_d48cb475defa7fece43ef430128862965cba237ac4544f33a61007979ed97298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48cb475defa7fece43ef430128862965cba237ac4544f33a61007979ed97298->enter($__internal_d48cb475defa7fece43ef430128862965cba237ac4544f33a61007979ed97298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5100690cbfb2286e8bb40d6380e2cfaafc4b8ea7371175e2bc8851bc99da8bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5100690cbfb2286e8bb40d6380e2cfaafc4b8ea7371175e2bc8851bc99da8bc1->enter($__internal_5100690cbfb2286e8bb40d6380e2cfaafc4b8ea7371175e2bc8851bc99da8bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48cb475defa7fece43ef430128862965cba237ac4544f33a61007979ed97298->leave($__internal_d48cb475defa7fece43ef430128862965cba237ac4544f33a61007979ed97298_prof);

        
        $__internal_5100690cbfb2286e8bb40d6380e2cfaafc4b8ea7371175e2bc8851bc99da8bc1->leave($__internal_5100690cbfb2286e8bb40d6380e2cfaafc4b8ea7371175e2bc8851bc99da8bc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17f22099e9ca649ea79e6a58cba8835d13992cca421eee0c3080bf6e26ff9f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f22099e9ca649ea79e6a58cba8835d13992cca421eee0c3080bf6e26ff9f7c->enter($__internal_17f22099e9ca649ea79e6a58cba8835d13992cca421eee0c3080bf6e26ff9f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd8f38b003d72b1ca97686628202db80ba45cf195236db76871344e915baa47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8f38b003d72b1ca97686628202db80ba45cf195236db76871344e915baa47c->enter($__internal_cd8f38b003d72b1ca97686628202db80ba45cf195236db76871344e915baa47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cd8f38b003d72b1ca97686628202db80ba45cf195236db76871344e915baa47c->leave($__internal_cd8f38b003d72b1ca97686628202db80ba45cf195236db76871344e915baa47c_prof);

        
        $__internal_17f22099e9ca649ea79e6a58cba8835d13992cca421eee0c3080bf6e26ff9f7c->leave($__internal_17f22099e9ca649ea79e6a58cba8835d13992cca421eee0c3080bf6e26ff9f7c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6a179f6454910d95d287ed38a656581e8febc69e508d41473ffd1a8b236d704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a179f6454910d95d287ed38a656581e8febc69e508d41473ffd1a8b236d704->enter($__internal_a6a179f6454910d95d287ed38a656581e8febc69e508d41473ffd1a8b236d704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55a54518a8133b1716623e7b5938ca522fe55d2ecd8ddc7f956d00f21bda9568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a54518a8133b1716623e7b5938ca522fe55d2ecd8ddc7f956d00f21bda9568->enter($__internal_55a54518a8133b1716623e7b5938ca522fe55d2ecd8ddc7f956d00f21bda9568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_55a54518a8133b1716623e7b5938ca522fe55d2ecd8ddc7f956d00f21bda9568->leave($__internal_55a54518a8133b1716623e7b5938ca522fe55d2ecd8ddc7f956d00f21bda9568_prof);

        
        $__internal_a6a179f6454910d95d287ed38a656581e8febc69e508d41473ffd1a8b236d704->leave($__internal_a6a179f6454910d95d287ed38a656581e8febc69e508d41473ffd1a8b236d704_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a5eabb2b213079e1fd03a7dc0a15ebfa49c9ebf4085480e550d19e739bfa57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5eabb2b213079e1fd03a7dc0a15ebfa49c9ebf4085480e550d19e739bfa57f->enter($__internal_3a5eabb2b213079e1fd03a7dc0a15ebfa49c9ebf4085480e550d19e739bfa57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bdb9e20817247a78c35b5032e736dd74dad5d9b371a85ff555a32f8f945b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdb9e20817247a78c35b5032e736dd74dad5d9b371a85ff555a32f8f945b0c9->enter($__internal_9bdb9e20817247a78c35b5032e736dd74dad5d9b371a85ff555a32f8f945b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9bdb9e20817247a78c35b5032e736dd74dad5d9b371a85ff555a32f8f945b0c9->leave($__internal_9bdb9e20817247a78c35b5032e736dd74dad5d9b371a85ff555a32f8f945b0c9_prof);

        
        $__internal_3a5eabb2b213079e1fd03a7dc0a15ebfa49c9ebf4085480e550d19e739bfa57f->leave($__internal_3a5eabb2b213079e1fd03a7dc0a15ebfa49c9ebf4085480e550d19e739bfa57f_prof);

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
