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
        $__internal_0422fddc69bcf8bd4f29c83846bfbb4c4885ce222d4ef2bd8be1699067c8d376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0422fddc69bcf8bd4f29c83846bfbb4c4885ce222d4ef2bd8be1699067c8d376->enter($__internal_0422fddc69bcf8bd4f29c83846bfbb4c4885ce222d4ef2bd8be1699067c8d376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $__internal_7b51d05a66cb382421f02fa2c94e8fc88711d96c770d3af1069ec84fa57adfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b51d05a66cb382421f02fa2c94e8fc88711d96c770d3af1069ec84fa57adfed->enter($__internal_7b51d05a66cb382421f02fa2c94e8fc88711d96c770d3af1069ec84fa57adfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0422fddc69bcf8bd4f29c83846bfbb4c4885ce222d4ef2bd8be1699067c8d376->leave($__internal_0422fddc69bcf8bd4f29c83846bfbb4c4885ce222d4ef2bd8be1699067c8d376_prof);

        
        $__internal_7b51d05a66cb382421f02fa2c94e8fc88711d96c770d3af1069ec84fa57adfed->leave($__internal_7b51d05a66cb382421f02fa2c94e8fc88711d96c770d3af1069ec84fa57adfed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_167a5297547654cbdc74c8de81408c39fbcf72d51c89570ddda986cd3d772c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167a5297547654cbdc74c8de81408c39fbcf72d51c89570ddda986cd3d772c41->enter($__internal_167a5297547654cbdc74c8de81408c39fbcf72d51c89570ddda986cd3d772c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d86475bcf594b3f16c27f76b9956d00a3a56dcf736d06268c554e205efa0c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d86475bcf594b3f16c27f76b9956d00a3a56dcf736d06268c554e205efa0c1a->enter($__internal_9d86475bcf594b3f16c27f76b9956d00a3a56dcf736d06268c554e205efa0c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search Results";
        
        $__internal_9d86475bcf594b3f16c27f76b9956d00a3a56dcf736d06268c554e205efa0c1a->leave($__internal_9d86475bcf594b3f16c27f76b9956d00a3a56dcf736d06268c554e205efa0c1a_prof);

        
        $__internal_167a5297547654cbdc74c8de81408c39fbcf72d51c89570ddda986cd3d772c41->leave($__internal_167a5297547654cbdc74c8de81408c39fbcf72d51c89570ddda986cd3d772c41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2402834f5cf5f120a4f16f3976be63db5d387ccedd1362c24e3e4fde7c09c3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2402834f5cf5f120a4f16f3976be63db5d387ccedd1362c24e3e4fde7c09c3e7->enter($__internal_2402834f5cf5f120a4f16f3976be63db5d387ccedd1362c24e3e4fde7c09c3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2dc59f3788258c8dba1731398df8fe2e1ac6b2609d32af6f957c06c24cfc754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dc59f3788258c8dba1731398df8fe2e1ac6b2609d32af6f957c06c24cfc754->enter($__internal_d2dc59f3788258c8dba1731398df8fe2e1ac6b2609d32af6f957c06c24cfc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


";
        // line 10
        echo "
        ";
        // line 12
        echo "
    ";
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, ($context["query"] ?? $this->getContext($context, "query")), "html", null, true);
        echo "
        ";
        // line 17
        echo "
";
        
        $__internal_d2dc59f3788258c8dba1731398df8fe2e1ac6b2609d32af6f957c06c24cfc754->leave($__internal_d2dc59f3788258c8dba1731398df8fe2e1ac6b2609d32af6f957c06c24cfc754_prof);

        
        $__internal_2402834f5cf5f120a4f16f3976be63db5d387ccedd1362c24e3e4fde7c09c3e7->leave($__internal_2402834f5cf5f120a4f16f3976be63db5d387ccedd1362c24e3e4fde7c09c3e7_prof);

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
        return array (  86 => 17,  82 => 15,  79 => 14,  76 => 12,  73 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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



{#{{ type }}#}

        {#{{ data }}#}

    {#{% for collection in collections %}#}

{{ query }}
        {#{% endfor %}#}

{% endblock %}", "search/results.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\results.html.twig");
    }
}
