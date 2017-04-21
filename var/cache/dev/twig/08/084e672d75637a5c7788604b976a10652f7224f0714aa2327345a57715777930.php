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
        $__internal_7aa2b396533c97660d2d6d248084d67ccf99530365f03becb0de94bdc4fdf01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa2b396533c97660d2d6d248084d67ccf99530365f03becb0de94bdc4fdf01d->enter($__internal_7aa2b396533c97660d2d6d248084d67ccf99530365f03becb0de94bdc4fdf01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $__internal_b350580ba2bb435a68a9b9eedf4299bc0b5e6be66eedde6efda3486b7ab8b38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b350580ba2bb435a68a9b9eedf4299bc0b5e6be66eedde6efda3486b7ab8b38e->enter($__internal_b350580ba2bb435a68a9b9eedf4299bc0b5e6be66eedde6efda3486b7ab8b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa2b396533c97660d2d6d248084d67ccf99530365f03becb0de94bdc4fdf01d->leave($__internal_7aa2b396533c97660d2d6d248084d67ccf99530365f03becb0de94bdc4fdf01d_prof);

        
        $__internal_b350580ba2bb435a68a9b9eedf4299bc0b5e6be66eedde6efda3486b7ab8b38e->leave($__internal_b350580ba2bb435a68a9b9eedf4299bc0b5e6be66eedde6efda3486b7ab8b38e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f7a381363ce37e535d3a301c4edef69190ffe155115c5f38f27a5dc938fbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f7a381363ce37e535d3a301c4edef69190ffe155115c5f38f27a5dc938fbca->enter($__internal_28f7a381363ce37e535d3a301c4edef69190ffe155115c5f38f27a5dc938fbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f0096da887d8875d6713105d8ba3be74ebec53a57ba9351be2e19c598b2a185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0096da887d8875d6713105d8ba3be74ebec53a57ba9351be2e19c598b2a185->enter($__internal_3f0096da887d8875d6713105d8ba3be74ebec53a57ba9351be2e19c598b2a185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3f0096da887d8875d6713105d8ba3be74ebec53a57ba9351be2e19c598b2a185->leave($__internal_3f0096da887d8875d6713105d8ba3be74ebec53a57ba9351be2e19c598b2a185_prof);

        
        $__internal_28f7a381363ce37e535d3a301c4edef69190ffe155115c5f38f27a5dc938fbca->leave($__internal_28f7a381363ce37e535d3a301c4edef69190ffe155115c5f38f27a5dc938fbca_prof);

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
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <input type=\"submit\" value=\"Edit\" />
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
