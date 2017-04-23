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
        $__internal_91c36175b333a94f1f4395a2ebb87837af0fc988cc04ecfb5b17f6b29d28ad9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c36175b333a94f1f4395a2ebb87837af0fc988cc04ecfb5b17f6b29d28ad9f->enter($__internal_91c36175b333a94f1f4395a2ebb87837af0fc988cc04ecfb5b17f6b29d28ad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_69e5d187db1b2538b2ed233c20ba00e8ddedd5b0ff0f5b24dccf078f542978fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e5d187db1b2538b2ed233c20ba00e8ddedd5b0ff0f5b24dccf078f542978fc->enter($__internal_69e5d187db1b2538b2ed233c20ba00e8ddedd5b0ff0f5b24dccf078f542978fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c36175b333a94f1f4395a2ebb87837af0fc988cc04ecfb5b17f6b29d28ad9f->leave($__internal_91c36175b333a94f1f4395a2ebb87837af0fc988cc04ecfb5b17f6b29d28ad9f_prof);

        
        $__internal_69e5d187db1b2538b2ed233c20ba00e8ddedd5b0ff0f5b24dccf078f542978fc->leave($__internal_69e5d187db1b2538b2ed233c20ba00e8ddedd5b0ff0f5b24dccf078f542978fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e689f0f798ecdd311f7fcbed9dc025792a34a46cc899acbd1ca30d73e4c6bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e689f0f798ecdd311f7fcbed9dc025792a34a46cc899acbd1ca30d73e4c6bd2->enter($__internal_4e689f0f798ecdd311f7fcbed9dc025792a34a46cc899acbd1ca30d73e4c6bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6654d393b7c78386fe0a4e2959e1f732822457be6404d6340e97f4f0f621aa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6654d393b7c78386fe0a4e2959e1f732822457be6404d6340e97f4f0f621aa96->enter($__internal_6654d393b7c78386fe0a4e2959e1f732822457be6404d6340e97f4f0f621aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6654d393b7c78386fe0a4e2959e1f732822457be6404d6340e97f4f0f621aa96->leave($__internal_6654d393b7c78386fe0a4e2959e1f732822457be6404d6340e97f4f0f621aa96_prof);

        
        $__internal_4e689f0f798ecdd311f7fcbed9dc025792a34a46cc899acbd1ca30d73e4c6bd2->leave($__internal_4e689f0f798ecdd311f7fcbed9dc025792a34a46cc899acbd1ca30d73e4c6bd2_prof);

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
", "tag/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
