<?php

/* tag/edit.html.twig */
class __TwigTemplate_5e83e0ec99d750a09a93a8def315b67908c5f4aaf0965216bab61c4f692f1a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/edit.html.twig", 1);
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
        $__internal_c9eaa55869d2d5a7758677c80f7c7b7345960d8bdfb990c1e3d0ec1634b123cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9eaa55869d2d5a7758677c80f7c7b7345960d8bdfb990c1e3d0ec1634b123cd->enter($__internal_c9eaa55869d2d5a7758677c80f7c7b7345960d8bdfb990c1e3d0ec1634b123cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_9209f8862045cf02816401232a1d28cc7135a0329656d605d8afffbdd165591e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9209f8862045cf02816401232a1d28cc7135a0329656d605d8afffbdd165591e->enter($__internal_9209f8862045cf02816401232a1d28cc7135a0329656d605d8afffbdd165591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9eaa55869d2d5a7758677c80f7c7b7345960d8bdfb990c1e3d0ec1634b123cd->leave($__internal_c9eaa55869d2d5a7758677c80f7c7b7345960d8bdfb990c1e3d0ec1634b123cd_prof);

        
        $__internal_9209f8862045cf02816401232a1d28cc7135a0329656d605d8afffbdd165591e->leave($__internal_9209f8862045cf02816401232a1d28cc7135a0329656d605d8afffbdd165591e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a2247247dd9a9be55782abfab8994f708cd75eaeb63ab0e44f1bbd345b49b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2247247dd9a9be55782abfab8994f708cd75eaeb63ab0e44f1bbd345b49b2d->enter($__internal_5a2247247dd9a9be55782abfab8994f708cd75eaeb63ab0e44f1bbd345b49b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddf1449664d3fa57c34b7c96c2d8cccc8fc7fdc5ef4354319e2f5c883e01bc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf1449664d3fa57c34b7c96c2d8cccc8fc7fdc5ef4354319e2f5c883e01bc87->enter($__internal_ddf1449664d3fa57c34b7c96c2d8cccc8fc7fdc5ef4354319e2f5c883e01bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ddf1449664d3fa57c34b7c96c2d8cccc8fc7fdc5ef4354319e2f5c883e01bc87->leave($__internal_ddf1449664d3fa57c34b7c96c2d8cccc8fc7fdc5ef4354319e2f5c883e01bc87_prof);

        
        $__internal_5a2247247dd9a9be55782abfab8994f708cd75eaeb63ab0e44f1bbd345b49b2d->leave($__internal_5a2247247dd9a9be55782abfab8994f708cd75eaeb63ab0e44f1bbd345b49b2d_prof);

    }

    public function getTemplateName()
    {
        return "tag/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  74 => 15,  68 => 12,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tag/edit.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\edit.html.twig");
    }
}
