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
        $__internal_a3f7322b4ace54063e7761bdb281cdb0b91bcb8f830e3e1240916c9d13a3706d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f7322b4ace54063e7761bdb281cdb0b91bcb8f830e3e1240916c9d13a3706d->enter($__internal_a3f7322b4ace54063e7761bdb281cdb0b91bcb8f830e3e1240916c9d13a3706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $__internal_fd00e5a11c52184e43264a5ffeb0d52f2bd62e277de9840322fd0fdaf6f416f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd00e5a11c52184e43264a5ffeb0d52f2bd62e277de9840322fd0fdaf6f416f0->enter($__internal_fd00e5a11c52184e43264a5ffeb0d52f2bd62e277de9840322fd0fdaf6f416f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f7322b4ace54063e7761bdb281cdb0b91bcb8f830e3e1240916c9d13a3706d->leave($__internal_a3f7322b4ace54063e7761bdb281cdb0b91bcb8f830e3e1240916c9d13a3706d_prof);

        
        $__internal_fd00e5a11c52184e43264a5ffeb0d52f2bd62e277de9840322fd0fdaf6f416f0->leave($__internal_fd00e5a11c52184e43264a5ffeb0d52f2bd62e277de9840322fd0fdaf6f416f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d99b0b40faab0094f6c7b36841cfb2e48160b6a27c007840dae047a43971bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d99b0b40faab0094f6c7b36841cfb2e48160b6a27c007840dae047a43971bb->enter($__internal_d8d99b0b40faab0094f6c7b36841cfb2e48160b6a27c007840dae047a43971bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bb5f5f908cffe72aeb7fab3ecf2897be03696058bb59a8a9d6bf53e8b596739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb5f5f908cffe72aeb7fab3ecf2897be03696058bb59a8a9d6bf53e8b596739->enter($__internal_2bb5f5f908cffe72aeb7fab3ecf2897be03696058bb59a8a9d6bf53e8b596739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bb5f5f908cffe72aeb7fab3ecf2897be03696058bb59a8a9d6bf53e8b596739->leave($__internal_2bb5f5f908cffe72aeb7fab3ecf2897be03696058bb59a8a9d6bf53e8b596739_prof);

        
        $__internal_d8d99b0b40faab0094f6c7b36841cfb2e48160b6a27c007840dae047a43971bb->leave($__internal_d8d99b0b40faab0094f6c7b36841cfb2e48160b6a27c007840dae047a43971bb_prof);

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
", "nurl/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\new.html.twig");
    }
}
