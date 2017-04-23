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
        $__internal_1880f7b2b6edd45b0735920c137c5ee1a888d2c0a020d847807cddfa84ce0c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1880f7b2b6edd45b0735920c137c5ee1a888d2c0a020d847807cddfa84ce0c8c->enter($__internal_1880f7b2b6edd45b0735920c137c5ee1a888d2c0a020d847807cddfa84ce0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $__internal_3151670fcf3287db8b6163f2e8a96608c2cc5e4674df924ef7f13ddea15e2f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3151670fcf3287db8b6163f2e8a96608c2cc5e4674df924ef7f13ddea15e2f97->enter($__internal_3151670fcf3287db8b6163f2e8a96608c2cc5e4674df924ef7f13ddea15e2f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1880f7b2b6edd45b0735920c137c5ee1a888d2c0a020d847807cddfa84ce0c8c->leave($__internal_1880f7b2b6edd45b0735920c137c5ee1a888d2c0a020d847807cddfa84ce0c8c_prof);

        
        $__internal_3151670fcf3287db8b6163f2e8a96608c2cc5e4674df924ef7f13ddea15e2f97->leave($__internal_3151670fcf3287db8b6163f2e8a96608c2cc5e4674df924ef7f13ddea15e2f97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dad8038f55440c3cdb9487348c3f19139bfd5eefc76391bd2a72eed9d9b9b9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad8038f55440c3cdb9487348c3f19139bfd5eefc76391bd2a72eed9d9b9b9ad->enter($__internal_dad8038f55440c3cdb9487348c3f19139bfd5eefc76391bd2a72eed9d9b9b9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01652edf69660764305a7b8fc0e9ea2bc5ac01237057a12a6bf2381c8d9651f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01652edf69660764305a7b8fc0e9ea2bc5ac01237057a12a6bf2381c8d9651f0->enter($__internal_01652edf69660764305a7b8fc0e9ea2bc5ac01237057a12a6bf2381c8d9651f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search Results";
        
        $__internal_01652edf69660764305a7b8fc0e9ea2bc5ac01237057a12a6bf2381c8d9651f0->leave($__internal_01652edf69660764305a7b8fc0e9ea2bc5ac01237057a12a6bf2381c8d9651f0_prof);

        
        $__internal_dad8038f55440c3cdb9487348c3f19139bfd5eefc76391bd2a72eed9d9b9b9ad->leave($__internal_dad8038f55440c3cdb9487348c3f19139bfd5eefc76391bd2a72eed9d9b9b9ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e809c7acb19b47ba049d6f183b7abe8eded4a990247fff4dce2070e9ab4d143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e809c7acb19b47ba049d6f183b7abe8eded4a990247fff4dce2070e9ab4d143->enter($__internal_5e809c7acb19b47ba049d6f183b7abe8eded4a990247fff4dce2070e9ab4d143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ada48211674b18692cd5c75d598bcce468edb0095342c93ba3737b32c80ca28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada48211674b18692cd5c75d598bcce468edb0095342c93ba3737b32c80ca28a->enter($__internal_ada48211674b18692cd5c75d598bcce468edb0095342c93ba3737b32c80ca28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Your query results</h1>
";
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 12
            echo "
        ";
            // line 13
            echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 18
        echo "
";
        // line 19
        echo twig_escape_filter($this->env, ($context["query"] ?? $this->getContext($context, "query")), "html", null, true);
        echo "

";
        
        $__internal_ada48211674b18692cd5c75d598bcce468edb0095342c93ba3737b32c80ca28a->leave($__internal_ada48211674b18692cd5c75d598bcce468edb0095342c93ba3737b32c80ca28a_prof);

        
        $__internal_5e809c7acb19b47ba049d6f183b7abe8eded4a990247fff4dce2070e9ab4d143->leave($__internal_5e809c7acb19b47ba049d6f183b7abe8eded4a990247fff4dce2070e9ab4d143_prof);

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
        return array (  98 => 19,  95 => 18,  92 => 16,  83 => 13,  80 => 12,  76 => 11,  73 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    {% for query in data %}

        {{ data }}

    {% endfor %}

    {#{% for collection in collections %}#}

{{ query }}

{% endblock %}", "search/results.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\results.html.twig");
    }
}
