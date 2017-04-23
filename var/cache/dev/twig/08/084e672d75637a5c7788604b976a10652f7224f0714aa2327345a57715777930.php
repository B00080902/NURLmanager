<?php

/* nurl/edit.html.twig */
class __TwigTemplate_8c1f657c05955520e5a0750e43a1ebbabe1f0fe85b538ff0ad4aa8907d571ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/edit.html.twig", 1);
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
        $__internal_a2d6a0df5ae44a9cc5fdb45ec298a5072138271e41796f201f964495ec7035ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d6a0df5ae44a9cc5fdb45ec298a5072138271e41796f201f964495ec7035ab->enter($__internal_a2d6a0df5ae44a9cc5fdb45ec298a5072138271e41796f201f964495ec7035ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $__internal_4e8e245565c16c76230ddf53ec368eb11649a373cba33ec997e5f1c6a69347c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8e245565c16c76230ddf53ec368eb11649a373cba33ec997e5f1c6a69347c4->enter($__internal_4e8e245565c16c76230ddf53ec368eb11649a373cba33ec997e5f1c6a69347c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d6a0df5ae44a9cc5fdb45ec298a5072138271e41796f201f964495ec7035ab->leave($__internal_a2d6a0df5ae44a9cc5fdb45ec298a5072138271e41796f201f964495ec7035ab_prof);

        
        $__internal_4e8e245565c16c76230ddf53ec368eb11649a373cba33ec997e5f1c6a69347c4->leave($__internal_4e8e245565c16c76230ddf53ec368eb11649a373cba33ec997e5f1c6a69347c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65bd90980650077f71e228a36c92ac0eb0f86217d3b9e62302b5dc2a672963f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bd90980650077f71e228a36c92ac0eb0f86217d3b9e62302b5dc2a672963f4->enter($__internal_65bd90980650077f71e228a36c92ac0eb0f86217d3b9e62302b5dc2a672963f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eef4b155f32bb596a52eebae23d0db9b7ae3c9273fe21ded35965729ecb3bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eef4b155f32bb596a52eebae23d0db9b7ae3c9273fe21ded35965729ecb3bd2->enter($__internal_8eef4b155f32bb596a52eebae23d0db9b7ae3c9273fe21ded35965729ecb3bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

    ";
        // line 9
        echo "
        ";
        // line 11
        echo "
    ";
        // line 13
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "



    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8eef4b155f32bb596a52eebae23d0db9b7ae3c9273fe21ded35965729ecb3bd2->leave($__internal_8eef4b155f32bb596a52eebae23d0db9b7ae3c9273fe21ded35965729ecb3bd2_prof);

        
        $__internal_65bd90980650077f71e228a36c92ac0eb0f86217d3b9e62302b5dc2a672963f4->leave($__internal_65bd90980650077f71e228a36c92ac0eb0f86217d3b9e62302b5dc2a672963f4_prof);

    }

    public function getTemplateName()
    {
        return "nurl/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  88 => 26,  82 => 23,  75 => 19,  68 => 15,  64 => 13,  61 => 11,  58 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nurl edit</h1>

    {{ form_start(edit_form) }}

    {#{% if form_row(edit_form.public) == 'Public' %}#}

        {#{{ form_row(edit_form.public, {attr: {'disabled': 'disabled'} }) }}#}

    {#{% endif %}#}


    {{ form_widget(edit_form) }}



    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('nurl_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "nurl/edit.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\edit.html.twig");
    }
}
