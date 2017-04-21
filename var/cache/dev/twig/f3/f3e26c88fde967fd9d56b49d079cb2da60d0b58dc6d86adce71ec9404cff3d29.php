<?php

/* nurl/new.html.twig */
class __TwigTemplate_0316c6a286b7e0c357e7d5fb62874ef618e33d826fa3f9a860b56fbc146c1443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/new.html.twig", 1);
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
        $__internal_33f10689477e44da9b2358e25203fb5fb833f3d066b6eaeb5afd765317167c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f10689477e44da9b2358e25203fb5fb833f3d066b6eaeb5afd765317167c74->enter($__internal_33f10689477e44da9b2358e25203fb5fb833f3d066b6eaeb5afd765317167c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $__internal_a129da2d4546a6e86c442bbcfaa1658d61cba29a0732587cabdbb5bbf68a242f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a129da2d4546a6e86c442bbcfaa1658d61cba29a0732587cabdbb5bbf68a242f->enter($__internal_a129da2d4546a6e86c442bbcfaa1658d61cba29a0732587cabdbb5bbf68a242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f10689477e44da9b2358e25203fb5fb833f3d066b6eaeb5afd765317167c74->leave($__internal_33f10689477e44da9b2358e25203fb5fb833f3d066b6eaeb5afd765317167c74_prof);

        
        $__internal_a129da2d4546a6e86c442bbcfaa1658d61cba29a0732587cabdbb5bbf68a242f->leave($__internal_a129da2d4546a6e86c442bbcfaa1658d61cba29a0732587cabdbb5bbf68a242f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce2202c5c3fbce480bce4df4eb9c21b3f78ac573066663eff551dfd65eace8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2202c5c3fbce480bce4df4eb9c21b3f78ac573066663eff551dfd65eace8e2->enter($__internal_ce2202c5c3fbce480bce4df4eb9c21b3f78ac573066663eff551dfd65eace8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48eb60645a3477e088fddc12cc068f9cb754239e2bb9117b430216a3b3614e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eb60645a3477e088fddc12cc068f9cb754239e2bb9117b430216a3b3614e4f->enter($__internal_48eb60645a3477e088fddc12cc068f9cb754239e2bb9117b430216a3b3614e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_48eb60645a3477e088fddc12cc068f9cb754239e2bb9117b430216a3b3614e4f->leave($__internal_48eb60645a3477e088fddc12cc068f9cb754239e2bb9117b430216a3b3614e4f_prof);

        
        $__internal_ce2202c5c3fbce480bce4df4eb9c21b3f78ac573066663eff551dfd65eace8e2->leave($__internal_ce2202c5c3fbce480bce4df4eb9c21b3f78ac573066663eff551dfd65eace8e2_prof);

    }

    public function getTemplateName()
    {
        return "nurl/new.html.twig";
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
    <h1>Nurl creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('nurl_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "nurl/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\nurl\\new.html.twig");
    }
}
