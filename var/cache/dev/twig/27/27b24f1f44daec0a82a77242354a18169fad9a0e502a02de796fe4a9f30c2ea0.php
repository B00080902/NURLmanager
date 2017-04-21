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
        $__internal_ad368b774ba1083ada3e2188f835c270ca2784fc53f2a95ba006072fb6a2aa01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad368b774ba1083ada3e2188f835c270ca2784fc53f2a95ba006072fb6a2aa01->enter($__internal_ad368b774ba1083ada3e2188f835c270ca2784fc53f2a95ba006072fb6a2aa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_e0de3bd5c57436778eb0fe1865273f2b94f9cad12a9110ddbf8a75c96d8b6bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0de3bd5c57436778eb0fe1865273f2b94f9cad12a9110ddbf8a75c96d8b6bcf->enter($__internal_e0de3bd5c57436778eb0fe1865273f2b94f9cad12a9110ddbf8a75c96d8b6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad368b774ba1083ada3e2188f835c270ca2784fc53f2a95ba006072fb6a2aa01->leave($__internal_ad368b774ba1083ada3e2188f835c270ca2784fc53f2a95ba006072fb6a2aa01_prof);

        
        $__internal_e0de3bd5c57436778eb0fe1865273f2b94f9cad12a9110ddbf8a75c96d8b6bcf->leave($__internal_e0de3bd5c57436778eb0fe1865273f2b94f9cad12a9110ddbf8a75c96d8b6bcf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0dce94eb2f685b8e156f7920b8ac1aaf7dba030904902b5398e9a57615f83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0dce94eb2f685b8e156f7920b8ac1aaf7dba030904902b5398e9a57615f83e->enter($__internal_bf0dce94eb2f685b8e156f7920b8ac1aaf7dba030904902b5398e9a57615f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c098cbe67dab105c40bcae3fd7610b3361d17c261174a1e1aeee386ee3cc1ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c098cbe67dab105c40bcae3fd7610b3361d17c261174a1e1aeee386ee3cc1ce0->enter($__internal_c098cbe67dab105c40bcae3fd7610b3361d17c261174a1e1aeee386ee3cc1ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c098cbe67dab105c40bcae3fd7610b3361d17c261174a1e1aeee386ee3cc1ce0->leave($__internal_c098cbe67dab105c40bcae3fd7610b3361d17c261174a1e1aeee386ee3cc1ce0_prof);

        
        $__internal_bf0dce94eb2f685b8e156f7920b8ac1aaf7dba030904902b5398e9a57615f83e->leave($__internal_bf0dce94eb2f685b8e156f7920b8ac1aaf7dba030904902b5398e9a57615f83e_prof);

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
