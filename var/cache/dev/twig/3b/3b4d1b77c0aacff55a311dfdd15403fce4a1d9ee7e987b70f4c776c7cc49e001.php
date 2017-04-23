<?php

/* search/index.html.twig */
class __TwigTemplate_e96f94e3c44a11db1b889232c163019c0d9cb7710fea82b4fb7a8ea53724c4e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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
        $__internal_3d0588abc8f462295bddcdc9539705f12219580b524aa3e4be20207d53a7d258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0588abc8f462295bddcdc9539705f12219580b524aa3e4be20207d53a7d258->enter($__internal_3d0588abc8f462295bddcdc9539705f12219580b524aa3e4be20207d53a7d258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_b0e63b0031f6518c93030fc6d59ce5b6cc412e923b7f70f1e29fee5ea6e99f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e63b0031f6518c93030fc6d59ce5b6cc412e923b7f70f1e29fee5ea6e99f8f->enter($__internal_b0e63b0031f6518c93030fc6d59ce5b6cc412e923b7f70f1e29fee5ea6e99f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0588abc8f462295bddcdc9539705f12219580b524aa3e4be20207d53a7d258->leave($__internal_3d0588abc8f462295bddcdc9539705f12219580b524aa3e4be20207d53a7d258_prof);

        
        $__internal_b0e63b0031f6518c93030fc6d59ce5b6cc412e923b7f70f1e29fee5ea6e99f8f->leave($__internal_b0e63b0031f6518c93030fc6d59ce5b6cc412e923b7f70f1e29fee5ea6e99f8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ceb88696dbee812a531da95a6b5d6ccaceb7388c3ee7f6378f3e7dd55ad4590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ceb88696dbee812a531da95a6b5d6ccaceb7388c3ee7f6378f3e7dd55ad4590->enter($__internal_9ceb88696dbee812a531da95a6b5d6ccaceb7388c3ee7f6378f3e7dd55ad4590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1035d5ed249d20e9d6113aa33f194b4dfb4b8ed240e354015bbe515182fa21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1035d5ed249d20e9d6113aa33f194b4dfb4b8ed240e354015bbe515182fa21f->enter($__internal_a1035d5ed249d20e9d6113aa33f194b4dfb4b8ed240e354015bbe515182fa21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search ";
        
        $__internal_a1035d5ed249d20e9d6113aa33f194b4dfb4b8ed240e354015bbe515182fa21f->leave($__internal_a1035d5ed249d20e9d6113aa33f194b4dfb4b8ed240e354015bbe515182fa21f_prof);

        
        $__internal_9ceb88696dbee812a531da95a6b5d6ccaceb7388c3ee7f6378f3e7dd55ad4590->leave($__internal_9ceb88696dbee812a531da95a6b5d6ccaceb7388c3ee7f6378f3e7dd55ad4590_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e363999370c5e273399e6ff76ff2ee7f837ea8dd3fb9c8e9177adbe7ad03fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e363999370c5e273399e6ff76ff2ee7f837ea8dd3fb9c8e9177adbe7ad03fb8->enter($__internal_5e363999370c5e273399e6ff76ff2ee7f837ea8dd3fb9c8e9177adbe7ad03fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9011c7c5e36d8464d378f90b36ef9ac31d9304fd2c9c8004319f3401b02cbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9011c7c5e36d8464d378f90b36ef9ac31d9304fd2c9c8004319f3401b02cbaf->enter($__internal_e9011c7c5e36d8464d378f90b36ef9ac31d9304fd2c9c8004319f3401b02cbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <form
        action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_results");
        echo "\"
        method=\"post\"
    >


        ";
        // line 14
        echo "
            ";
        // line 16
        echo "
                ";
        // line 18
        echo "
                ";
        // line 20
        echo "
                ";
        // line 22
        echo "
                ";
        // line 24
        echo "
            ";
        // line 26
        echo "
        ";
        // line 28
        echo "        <input type=\"text\" name=\"type\">


        <input type=\"text\" name=\"query\" placeholder=\"Search\">


        <input type=\"submit\" id=\"Submit\" value=\"Submit\">


    </form>

";
        
        $__internal_e9011c7c5e36d8464d378f90b36ef9ac31d9304fd2c9c8004319f3401b02cbaf->leave($__internal_e9011c7c5e36d8464d378f90b36ef9ac31d9304fd2c9c8004319f3401b02cbaf_prof);

        
        $__internal_5e363999370c5e273399e6ff76ff2ee7f837ea8dd3fb9c8e9177adbe7ad03fb8->leave($__internal_5e363999370c5e273399e6ff76ff2ee7f837ea8dd3fb9c8e9177adbe7ad03fb8_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  98 => 26,  95 => 24,  92 => 22,  89 => 20,  86 => 18,  83 => 16,  80 => 14,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Search {%  endblock %}

{% block body %}

    <form
        action=\"{{ path('search_results') }}\"
        method=\"post\"
    >


        {#<select>#}

            {#<optgroup label=\"Type\" >#}

                {#<option name=\"type\" >User</option>#}

                {#<option name=\"type\" >Collection</option>#}

                {#<option name=\"type\" >Nurl</option>#}

                {#<option name=\"type\">Tag</option>#}

            {#</optgroup>#}

        {#</select>#}
        <input type=\"text\" name=\"type\">


        <input type=\"text\" name=\"query\" placeholder=\"Search\">


        <input type=\"submit\" id=\"Submit\" value=\"Submit\">


    </form>

{% endblock %}", "search/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\index.html.twig");
    }
}
