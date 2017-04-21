<?php

/* collection/edit.html.twig */
class __TwigTemplate_7b3071da3458eabf3dce1b782fc8cfe7bfc8ed15e31437a6f718871e5d40d496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/edit.html.twig", 1);
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
        $__internal_fd2ae78625a7fd983e4889dc917fb095b05377b0b5a47d26b12994f1ef5e3728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2ae78625a7fd983e4889dc917fb095b05377b0b5a47d26b12994f1ef5e3728->enter($__internal_fd2ae78625a7fd983e4889dc917fb095b05377b0b5a47d26b12994f1ef5e3728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/edit.html.twig"));

        $__internal_f76fefcfd58141b09b6c30ea483c495d391c887aed16e30935d0717a14ed692c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76fefcfd58141b09b6c30ea483c495d391c887aed16e30935d0717a14ed692c->enter($__internal_f76fefcfd58141b09b6c30ea483c495d391c887aed16e30935d0717a14ed692c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2ae78625a7fd983e4889dc917fb095b05377b0b5a47d26b12994f1ef5e3728->leave($__internal_fd2ae78625a7fd983e4889dc917fb095b05377b0b5a47d26b12994f1ef5e3728_prof);

        
        $__internal_f76fefcfd58141b09b6c30ea483c495d391c887aed16e30935d0717a14ed692c->leave($__internal_f76fefcfd58141b09b6c30ea483c495d391c887aed16e30935d0717a14ed692c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec84c2ede26bcefd2fc8f5d07fbad321f033be450c98403f6a94b86c3e14377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec84c2ede26bcefd2fc8f5d07fbad321f033be450c98403f6a94b86c3e14377->enter($__internal_6ec84c2ede26bcefd2fc8f5d07fbad321f033be450c98403f6a94b86c3e14377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a793f54ff0b5c5a7f4c010e30a4a748541fcad06c527ca88d78c0a661973877d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a793f54ff0b5c5a7f4c010e30a4a748541fcad06c527ca88d78c0a661973877d->enter($__internal_a793f54ff0b5c5a7f4c010e30a4a748541fcad06c527ca88d78c0a661973877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Collection edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
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
        
        $__internal_a793f54ff0b5c5a7f4c010e30a4a748541fcad06c527ca88d78c0a661973877d->leave($__internal_a793f54ff0b5c5a7f4c010e30a4a748541fcad06c527ca88d78c0a661973877d_prof);

        
        $__internal_6ec84c2ede26bcefd2fc8f5d07fbad321f033be450c98403f6a94b86c3e14377->leave($__internal_6ec84c2ede26bcefd2fc8f5d07fbad321f033be450c98403f6a94b86c3e14377_prof);

    }

    public function getTemplateName()
    {
        return "collection/edit.html.twig";
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
    <h1>Collection edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('collection_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "collection/edit.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\edit.html.twig");
    }
}
