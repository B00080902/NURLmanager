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
        $__internal_f8e2a1f65af74daa4d265fdc9224942111d93e0b29432cbf5f5f80d7c20ccabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e2a1f65af74daa4d265fdc9224942111d93e0b29432cbf5f5f80d7c20ccabd->enter($__internal_f8e2a1f65af74daa4d265fdc9224942111d93e0b29432cbf5f5f80d7c20ccabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $__internal_d6cc3411c78449ca9ad9f6834638c40d720467538942c381ab578331fc6d11e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cc3411c78449ca9ad9f6834638c40d720467538942c381ab578331fc6d11e8->enter($__internal_d6cc3411c78449ca9ad9f6834638c40d720467538942c381ab578331fc6d11e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e2a1f65af74daa4d265fdc9224942111d93e0b29432cbf5f5f80d7c20ccabd->leave($__internal_f8e2a1f65af74daa4d265fdc9224942111d93e0b29432cbf5f5f80d7c20ccabd_prof);

        
        $__internal_d6cc3411c78449ca9ad9f6834638c40d720467538942c381ab578331fc6d11e8->leave($__internal_d6cc3411c78449ca9ad9f6834638c40d720467538942c381ab578331fc6d11e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfd0573dcb002a10612c68972ed9fe4da48df5c719dc56ce358a4c704096dc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd0573dcb002a10612c68972ed9fe4da48df5c719dc56ce358a4c704096dc05->enter($__internal_dfd0573dcb002a10612c68972ed9fe4da48df5c719dc56ce358a4c704096dc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c150bf83d4a72a97212f96e351310d43ff08d1e915158f450a0faf1a46d4cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c150bf83d4a72a97212f96e351310d43ff08d1e915158f450a0faf1a46d4cd6->enter($__internal_0c150bf83d4a72a97212f96e351310d43ff08d1e915158f450a0faf1a46d4cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c150bf83d4a72a97212f96e351310d43ff08d1e915158f450a0faf1a46d4cd6->leave($__internal_0c150bf83d4a72a97212f96e351310d43ff08d1e915158f450a0faf1a46d4cd6_prof);

        
        $__internal_dfd0573dcb002a10612c68972ed9fe4da48df5c719dc56ce358a4c704096dc05->leave($__internal_dfd0573dcb002a10612c68972ed9fe4da48df5c719dc56ce358a4c704096dc05_prof);

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
