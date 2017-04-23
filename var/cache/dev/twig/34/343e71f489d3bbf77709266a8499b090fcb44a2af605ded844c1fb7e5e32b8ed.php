<?php

/* search/results.html.twig */
class __TwigTemplate_612f8d1c78a4d89c9c8296dc3041b3072bed93d24b1a971e504b41bc54a54cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/results.html.twig", 1);
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
        $__internal_69d777cdea1bf7676acf361e0599b6cc21f663fb17e0f1abd3b34d0c2b609001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d777cdea1bf7676acf361e0599b6cc21f663fb17e0f1abd3b34d0c2b609001->enter($__internal_69d777cdea1bf7676acf361e0599b6cc21f663fb17e0f1abd3b34d0c2b609001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $__internal_80d36d29de9f30bcbe4d662aa267ffdb5cd8eacb5fb9c8e91729f7f6487c5275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d36d29de9f30bcbe4d662aa267ffdb5cd8eacb5fb9c8e91729f7f6487c5275->enter($__internal_80d36d29de9f30bcbe4d662aa267ffdb5cd8eacb5fb9c8e91729f7f6487c5275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d777cdea1bf7676acf361e0599b6cc21f663fb17e0f1abd3b34d0c2b609001->leave($__internal_69d777cdea1bf7676acf361e0599b6cc21f663fb17e0f1abd3b34d0c2b609001_prof);

        
        $__internal_80d36d29de9f30bcbe4d662aa267ffdb5cd8eacb5fb9c8e91729f7f6487c5275->leave($__internal_80d36d29de9f30bcbe4d662aa267ffdb5cd8eacb5fb9c8e91729f7f6487c5275_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_110db437e1d18fc285c8c5b3c25ca2d3149fcdeda150bd160745708b14f25bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110db437e1d18fc285c8c5b3c25ca2d3149fcdeda150bd160745708b14f25bfc->enter($__internal_110db437e1d18fc285c8c5b3c25ca2d3149fcdeda150bd160745708b14f25bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31a8142b3e7c5a58daa5168ed6ce9b6b470c5e7def8ce9f8be9049b4f7b12284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a8142b3e7c5a58daa5168ed6ce9b6b470c5e7def8ce9f8be9049b4f7b12284->enter($__internal_31a8142b3e7c5a58daa5168ed6ce9b6b470c5e7def8ce9f8be9049b4f7b12284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search Results";
        
        $__internal_31a8142b3e7c5a58daa5168ed6ce9b6b470c5e7def8ce9f8be9049b4f7b12284->leave($__internal_31a8142b3e7c5a58daa5168ed6ce9b6b470c5e7def8ce9f8be9049b4f7b12284_prof);

        
        $__internal_110db437e1d18fc285c8c5b3c25ca2d3149fcdeda150bd160745708b14f25bfc->leave($__internal_110db437e1d18fc285c8c5b3c25ca2d3149fcdeda150bd160745708b14f25bfc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f7b78c67c257c4d97793933d0eebe8ee5ece0aed13d0e0c3ab0a3a3832f7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f7b78c67c257c4d97793933d0eebe8ee5ece0aed13d0e0c3ab0a3a3832f7b8->enter($__internal_59f7b78c67c257c4d97793933d0eebe8ee5ece0aed13d0e0c3ab0a3a3832f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bcafd933680497e203dbc619765ac9820ccdd39b3a0e09664fa853bb49584a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcafd933680497e203dbc619765ac9820ccdd39b3a0e09664fa853bb49584a9->enter($__internal_4bcafd933680497e203dbc619765ac9820ccdd39b3a0e09664fa853bb49584a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Your query results</h1>
";
        // line 10
        echo "
        ";
        // line 11
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "

    ";
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, ($context["query"] ?? $this->getContext($context, "query")), "html", null, true);
        echo "

";
        
        $__internal_4bcafd933680497e203dbc619765ac9820ccdd39b3a0e09664fa853bb49584a9->leave($__internal_4bcafd933680497e203dbc619765ac9820ccdd39b3a0e09664fa853bb49584a9_prof);

        
        $__internal_59f7b78c67c257c4d97793933d0eebe8ee5ece0aed13d0e0c3ab0a3a3832f7b8->leave($__internal_59f7b78c67c257c4d97793933d0eebe8ee5ece0aed13d0e0c3ab0a3a3832f7b8_prof);

    }

    public function getTemplateName()
    {
        return "search/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  81 => 14,  76 => 11,  73 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Search Results{%  endblock %}

{% block body %}


<h1>Your query results</h1>
{#{{ type }}#}

        {{ data }}

    {#{% for collection in collections %}#}

{{ query }}

{% endblock %}", "search/results.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\results.html.twig");
    }
}
