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
        $__internal_951abd9142b04d26b9fea37180db011218aaafa39944333f8932e62f61f23ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951abd9142b04d26b9fea37180db011218aaafa39944333f8932e62f61f23ca4->enter($__internal_951abd9142b04d26b9fea37180db011218aaafa39944333f8932e62f61f23ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $__internal_6032d804510169c1bbff7cbf1a903142c4aa104018cc4e5b5d0610f5c827a1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032d804510169c1bbff7cbf1a903142c4aa104018cc4e5b5d0610f5c827a1f6->enter($__internal_6032d804510169c1bbff7cbf1a903142c4aa104018cc4e5b5d0610f5c827a1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951abd9142b04d26b9fea37180db011218aaafa39944333f8932e62f61f23ca4->leave($__internal_951abd9142b04d26b9fea37180db011218aaafa39944333f8932e62f61f23ca4_prof);

        
        $__internal_6032d804510169c1bbff7cbf1a903142c4aa104018cc4e5b5d0610f5c827a1f6->leave($__internal_6032d804510169c1bbff7cbf1a903142c4aa104018cc4e5b5d0610f5c827a1f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c303a64fc6b09da871eaa19baf70452d9da78877644bc68dcd6ec7d2d9bdfcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c303a64fc6b09da871eaa19baf70452d9da78877644bc68dcd6ec7d2d9bdfcdb->enter($__internal_c303a64fc6b09da871eaa19baf70452d9da78877644bc68dcd6ec7d2d9bdfcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc114c7cdbe99395e238ce730be75e4eda132eb6e76b73a19e53bd2025f76064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc114c7cdbe99395e238ce730be75e4eda132eb6e76b73a19e53bd2025f76064->enter($__internal_cc114c7cdbe99395e238ce730be75e4eda132eb6e76b73a19e53bd2025f76064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc114c7cdbe99395e238ce730be75e4eda132eb6e76b73a19e53bd2025f76064->leave($__internal_cc114c7cdbe99395e238ce730be75e4eda132eb6e76b73a19e53bd2025f76064_prof);

        
        $__internal_c303a64fc6b09da871eaa19baf70452d9da78877644bc68dcd6ec7d2d9bdfcdb->leave($__internal_c303a64fc6b09da871eaa19baf70452d9da78877644bc68dcd6ec7d2d9bdfcdb_prof);

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
