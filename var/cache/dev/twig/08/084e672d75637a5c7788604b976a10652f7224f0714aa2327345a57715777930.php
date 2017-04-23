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
        $__internal_460bb7f119cea42ad4e93ed812ac2cfa1f6c502f8e077a4b06f80d048e244448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460bb7f119cea42ad4e93ed812ac2cfa1f6c502f8e077a4b06f80d048e244448->enter($__internal_460bb7f119cea42ad4e93ed812ac2cfa1f6c502f8e077a4b06f80d048e244448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $__internal_9fdb2d8ba5e6d953c44ee19a1a9aad586fc8c37ba185af6916929cf0defb0574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdb2d8ba5e6d953c44ee19a1a9aad586fc8c37ba185af6916929cf0defb0574->enter($__internal_9fdb2d8ba5e6d953c44ee19a1a9aad586fc8c37ba185af6916929cf0defb0574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460bb7f119cea42ad4e93ed812ac2cfa1f6c502f8e077a4b06f80d048e244448->leave($__internal_460bb7f119cea42ad4e93ed812ac2cfa1f6c502f8e077a4b06f80d048e244448_prof);

        
        $__internal_9fdb2d8ba5e6d953c44ee19a1a9aad586fc8c37ba185af6916929cf0defb0574->leave($__internal_9fdb2d8ba5e6d953c44ee19a1a9aad586fc8c37ba185af6916929cf0defb0574_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17356f02fac732abc2a51c94adfc7c9636b13d5faa5c87cbfc903274875b9a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17356f02fac732abc2a51c94adfc7c9636b13d5faa5c87cbfc903274875b9a0d->enter($__internal_17356f02fac732abc2a51c94adfc7c9636b13d5faa5c87cbfc903274875b9a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e5a388faebac2b3805743f228780c9abab9a9d5b319b5f6ae2cb31e662f8fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5a388faebac2b3805743f228780c9abab9a9d5b319b5f6ae2cb31e662f8fad->enter($__internal_3e5a388faebac2b3805743f228780c9abab9a9d5b319b5f6ae2cb31e662f8fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
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
        
        $__internal_3e5a388faebac2b3805743f228780c9abab9a9d5b319b5f6ae2cb31e662f8fad->leave($__internal_3e5a388faebac2b3805743f228780c9abab9a9d5b319b5f6ae2cb31e662f8fad_prof);

        
        $__internal_17356f02fac732abc2a51c94adfc7c9636b13d5faa5c87cbfc903274875b9a0d->leave($__internal_17356f02fac732abc2a51c94adfc7c9636b13d5faa5c87cbfc903274875b9a0d_prof);

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
    <h1>Nurl edit</h1>

    {{ form_start(edit_form) }}
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
