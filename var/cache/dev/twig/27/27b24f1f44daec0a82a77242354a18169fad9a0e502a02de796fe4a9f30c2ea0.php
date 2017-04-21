<?php

/* tag/new.html.twig */
class __TwigTemplate_8fa187b344ae7da8b469beb8fbeef08ec71dbbc795c1a534d7d0b16ba74a0c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_59aee19a322d575e097680f0f73de19e5fe6f9563f23e82511f20bd1a3408921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59aee19a322d575e097680f0f73de19e5fe6f9563f23e82511f20bd1a3408921->enter($__internal_59aee19a322d575e097680f0f73de19e5fe6f9563f23e82511f20bd1a3408921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_c0e80ab3692e1e173bed926b8da39ddf8c01691b42a80ec9a7f8bb6a5c1ab34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e80ab3692e1e173bed926b8da39ddf8c01691b42a80ec9a7f8bb6a5c1ab34a->enter($__internal_c0e80ab3692e1e173bed926b8da39ddf8c01691b42a80ec9a7f8bb6a5c1ab34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59aee19a322d575e097680f0f73de19e5fe6f9563f23e82511f20bd1a3408921->leave($__internal_59aee19a322d575e097680f0f73de19e5fe6f9563f23e82511f20bd1a3408921_prof);

        
        $__internal_c0e80ab3692e1e173bed926b8da39ddf8c01691b42a80ec9a7f8bb6a5c1ab34a->leave($__internal_c0e80ab3692e1e173bed926b8da39ddf8c01691b42a80ec9a7f8bb6a5c1ab34a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba34d45f9a0c58c04817dc942ee13a157936566d53505be970b5932f5013001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba34d45f9a0c58c04817dc942ee13a157936566d53505be970b5932f5013001->enter($__internal_3ba34d45f9a0c58c04817dc942ee13a157936566d53505be970b5932f5013001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11648f70fa2b7b64d8e1b6c87ee96533d199f0bfedd68907b5a1a22161150053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11648f70fa2b7b64d8e1b6c87ee96533d199f0bfedd68907b5a1a22161150053->enter($__internal_11648f70fa2b7b64d8e1b6c87ee96533d199f0bfedd68907b5a1a22161150053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_11648f70fa2b7b64d8e1b6c87ee96533d199f0bfedd68907b5a1a22161150053->leave($__internal_11648f70fa2b7b64d8e1b6c87ee96533d199f0bfedd68907b5a1a22161150053_prof);

        
        $__internal_3ba34d45f9a0c58c04817dc942ee13a157936566d53505be970b5932f5013001->leave($__internal_3ba34d45f9a0c58c04817dc942ee13a157936566d53505be970b5932f5013001_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "tag/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
