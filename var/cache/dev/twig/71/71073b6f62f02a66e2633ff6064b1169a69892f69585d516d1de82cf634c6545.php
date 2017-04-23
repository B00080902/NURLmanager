<?php

/* report/new.html.twig */
class __TwigTemplate_5bcb77775764f8fbdcee9a41947d1c241e141d294d5738c590566c43956c47dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "report/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e38867792579f902a553a08fc6fc88021be61a26df814c7a83e3c1d28db849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e38867792579f902a553a08fc6fc88021be61a26df814c7a83e3c1d28db849c->enter($__internal_8e38867792579f902a553a08fc6fc88021be61a26df814c7a83e3c1d28db849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "report/new.html.twig"));

        $__internal_60ab0b84d2409eb28f4b494fe80f05c1c69e05b8e64f4d672eff755fae438728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ab0b84d2409eb28f4b494fe80f05c1c69e05b8e64f4d672eff755fae438728->enter($__internal_60ab0b84d2409eb28f4b494fe80f05c1c69e05b8e64f4d672eff755fae438728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "report/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e38867792579f902a553a08fc6fc88021be61a26df814c7a83e3c1d28db849c->leave($__internal_8e38867792579f902a553a08fc6fc88021be61a26df814c7a83e3c1d28db849c_prof);

        
        $__internal_60ab0b84d2409eb28f4b494fe80f05c1c69e05b8e64f4d672eff755fae438728->leave($__internal_60ab0b84d2409eb28f4b494fe80f05c1c69e05b8e64f4d672eff755fae438728_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c2a2bbad74b8ff2f238686a3c9ffaf48c91b9e0c85b448c33bb3febb337afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c2a2bbad74b8ff2f238686a3c9ffaf48c91b9e0c85b448c33bb3febb337afb->enter($__internal_74c2a2bbad74b8ff2f238686a3c9ffaf48c91b9e0c85b448c33bb3febb337afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f484ca7c2948ccf18ebddb0f532295e6f047548ef87d1379105ddf12cca60233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f484ca7c2948ccf18ebddb0f532295e6f047548ef87d1379105ddf12cca60233->enter($__internal_f484ca7c2948ccf18ebddb0f532295e6f047548ef87d1379105ddf12cca60233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Report a nurl</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "timestamp", array()), 'row');
        echo "

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_f484ca7c2948ccf18ebddb0f532295e6f047548ef87d1379105ddf12cca60233->leave($__internal_f484ca7c2948ccf18ebddb0f532295e6f047548ef87d1379105ddf12cca60233_prof);

        
        $__internal_74c2a2bbad74b8ff2f238686a3c9ffaf48c91b9e0c85b448c33bb3febb337afb->leave($__internal_74c2a2bbad74b8ff2f238686a3c9ffaf48c91b9e0c85b448c33bb3febb337afb_prof);

    }

    public function getTemplateName()
    {
        return "report/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Report a nurl</h1>

    {{ form_start(form) }}

        {{ form_row(form.id)  }}
        {{ form_row(form.title)  }}
        {{ form_row(form.content) }}
        {{ form_row(form.timestamp) }}

    {{ form_end(form) }}

{% endblock %}
", "report/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\report\\new.html.twig");
    }
}
