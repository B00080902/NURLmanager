<?php

/* collections/index.html.twig */
class __TwigTemplate_1d017c5b341bee85aff51818a5e305ac8fba0c1d0c322bda388193181cef046d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "collections/index.html.twig", 2);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56386a07454ce2225f06b06edd74f943233cfcbc339dc20479537ff23f5b7941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56386a07454ce2225f06b06edd74f943233cfcbc339dc20479537ff23f5b7941->enter($__internal_56386a07454ce2225f06b06edd74f943233cfcbc339dc20479537ff23f5b7941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collections/index.html.twig"));

        $__internal_8d9bd43e9261cfad27fb5764259655d52f34966bf6833555a150d81f51f4d2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9bd43e9261cfad27fb5764259655d52f34966bf6833555a150d81f51f4d2c9->enter($__internal_8d9bd43e9261cfad27fb5764259655d52f34966bf6833555a150d81f51f4d2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collections/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56386a07454ce2225f06b06edd74f943233cfcbc339dc20479537ff23f5b7941->leave($__internal_56386a07454ce2225f06b06edd74f943233cfcbc339dc20479537ff23f5b7941_prof);

        
        $__internal_8d9bd43e9261cfad27fb5764259655d52f34966bf6833555a150d81f51f4d2c9->leave($__internal_8d9bd43e9261cfad27fb5764259655d52f34966bf6833555a150d81f51f4d2c9_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_989cef8225551646328c6e4dbe016519e8e670d320bfd8d328de02a3367b4338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989cef8225551646328c6e4dbe016519e8e670d320bfd8d328de02a3367b4338->enter($__internal_989cef8225551646328c6e4dbe016519e8e670d320bfd8d328de02a3367b4338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_f3f8c7339b75d1755f11cdedba4af1bb1498db4d615364aec7297d8963f6500e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f8c7339b75d1755f11cdedba4af1bb1498db4d615364aec7297d8963f6500e->enter($__internal_f3f8c7339b75d1755f11cdedba4af1bb1498db4d615364aec7297d8963f6500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "home page";
        
        $__internal_f3f8c7339b75d1755f11cdedba4af1bb1498db4d615364aec7297d8963f6500e->leave($__internal_f3f8c7339b75d1755f11cdedba4af1bb1498db4d615364aec7297d8963f6500e_prof);

        
        $__internal_989cef8225551646328c6e4dbe016519e8e670d320bfd8d328de02a3367b4338->leave($__internal_989cef8225551646328c6e4dbe016519e8e670d320bfd8d328de02a3367b4338_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c0d8079075ded3e99f09c315ca6a15f84b070c80dcb7dbb29b5542e61222de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c0d8079075ded3e99f09c315ca6a15f84b070c80dcb7dbb29b5542e61222de->enter($__internal_b9c0d8079075ded3e99f09c315ca6a15f84b070c80dcb7dbb29b5542e61222de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b267fe44ca5e2ae30a9c89257e67d80ad05fa6a6b1e9e8c4d60bd81b7f77a443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b267fe44ca5e2ae30a9c89257e67d80ad05fa6a6b1e9e8c4d60bd81b7f77a443->enter($__internal_b267fe44ca5e2ae30a9c89257e67d80ad05fa6a6b1e9e8c4d60bd81b7f77a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context["collection_nurls"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "collection"), "method");
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "collection"), "method"));
        echo "


    ";
        // line 14
        if ((null === ($context["collection_nurls"] ?? $this->getContext($context, "collection_nurls")))) {
            // line 15
            echo "        <p>
            you have no nurls in your collection
        </p>
        ";
        } else {
            // line 19
            echo "<ul>
";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection_nurls"] ?? $this->getContext($context, "collection_nurls")));
            foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
                // line 21
                echo "<li>
    <hr>
        id = ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "
    <br>
    nurl url = ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "
    <br>
    nurl title = ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "
    <br>
    credits = ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "
    <br>
    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurls_collection_delete", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">(remove)</a>
</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</ul>
    ";
        }
        // line 36
        echo "    <p>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurls_collection_clear");
        echo "\">CLEAR all items in collection</a>
    </p>
";
        
        $__internal_b267fe44ca5e2ae30a9c89257e67d80ad05fa6a6b1e9e8c4d60bd81b7f77a443->leave($__internal_b267fe44ca5e2ae30a9c89257e67d80ad05fa6a6b1e9e8c4d60bd81b7f77a443_prof);

        
        $__internal_b9c0d8079075ded3e99f09c315ca6a15f84b070c80dcb7dbb29b5542e61222de->leave($__internal_b9c0d8079075ded3e99f09c315ca6a15f84b070c80dcb7dbb29b5542e61222de_prof);

    }

    public function getTemplateName()
    {
        return "collections/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  134 => 36,  130 => 34,  121 => 31,  116 => 29,  111 => 27,  106 => 25,  101 => 23,  97 => 21,  93 => 20,  90 => 19,  84 => 15,  82 => 14,  76 => 11,  73 => 10,  71 => 9,  68 => 8,  59 => 7,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}


{% block pageTitle %}home page{% endblock %}

{% block body %}

{% set collection_nurls = app.session.get('collection') %}

{{ dump(app.session.get('collection')) }}


    {% if collection_nurls is null %}
        <p>
            you have no nurls in your collection
        </p>
        {% else %}
<ul>
{% for nurl in collection_nurls %}
<li>
    <hr>
        id = {{ nurl.id }}
    <br>
    nurl url = {{ nurl.url }}
    <br>
    nurl title = {{ nurl.title }}
    <br>
    credits = {{ nurl.content }}
    <br>
    <a href=\"{{ path('nurls_collection_delete', { 'id': nurl.id }) }}\">(remove)</a>
</li>
{% endfor %}
</ul>
    {% endif %}
    <p>
        <a href=\"{{ path('nurls_collection_clear') }}\">CLEAR all items in collection</a>
    </p>
{% endblock %}", "collections/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collections\\index.html.twig");
    }
}
