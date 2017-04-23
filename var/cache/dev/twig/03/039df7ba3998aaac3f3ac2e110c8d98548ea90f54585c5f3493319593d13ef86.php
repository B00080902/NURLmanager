<?php

/* collection/new.html.twig */
class __TwigTemplate_9df4c91b7f15baeed12da653fa8cddd8c3eef3b2fe4c153e739d71f0face7816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/new.html.twig", 1);
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
        $__internal_71ccd0a21f4b3164e2a8247963f3d82b5cd83df6bb05776822a941031bf6d579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ccd0a21f4b3164e2a8247963f3d82b5cd83df6bb05776822a941031bf6d579->enter($__internal_71ccd0a21f4b3164e2a8247963f3d82b5cd83df6bb05776822a941031bf6d579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $__internal_2383aea4ed52d13dfe07afce74058e4e94c1d50b6739446ccea86595c16bcf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2383aea4ed52d13dfe07afce74058e4e94c1d50b6739446ccea86595c16bcf51->enter($__internal_2383aea4ed52d13dfe07afce74058e4e94c1d50b6739446ccea86595c16bcf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ccd0a21f4b3164e2a8247963f3d82b5cd83df6bb05776822a941031bf6d579->leave($__internal_71ccd0a21f4b3164e2a8247963f3d82b5cd83df6bb05776822a941031bf6d579_prof);

        
        $__internal_2383aea4ed52d13dfe07afce74058e4e94c1d50b6739446ccea86595c16bcf51->leave($__internal_2383aea4ed52d13dfe07afce74058e4e94c1d50b6739446ccea86595c16bcf51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_445d76e17b7702f25ca409a172854060e424cf6489b1878d5ee417ac0d570e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445d76e17b7702f25ca409a172854060e424cf6489b1878d5ee417ac0d570e03->enter($__internal_445d76e17b7702f25ca409a172854060e424cf6489b1878d5ee417ac0d570e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f093bc781308c0e2ed4984d531279d8876ce75a0e79b8623007099f9e300540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f093bc781308c0e2ed4984d531279d8876ce75a0e79b8623007099f9e300540->enter($__internal_8f093bc781308c0e2ed4984d531279d8876ce75a0e79b8623007099f9e300540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Collection creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8f093bc781308c0e2ed4984d531279d8876ce75a0e79b8623007099f9e300540->leave($__internal_8f093bc781308c0e2ed4984d531279d8876ce75a0e79b8623007099f9e300540_prof);

        
        $__internal_445d76e17b7702f25ca409a172854060e424cf6489b1878d5ee417ac0d570e03->leave($__internal_445d76e17b7702f25ca409a172854060e424cf6489b1878d5ee417ac0d570e03_prof);

    }

    public function getTemplateName()
    {
        return "collection/new.html.twig";
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
    <h1>Collection creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('collection_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "collection/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\new.html.twig");
    }
}
