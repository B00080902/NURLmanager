<?php

/* tag/edit.html.twig */
class __TwigTemplate_5e83e0ec99d750a09a93a8def315b67908c5f4aaf0965216bab61c4f692f1a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/edit.html.twig", 1);
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
        $__internal_a39ffd6cd3d9139ac9dd56ce398486b4dca658fe25b23dd70c6a5e7810739a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39ffd6cd3d9139ac9dd56ce398486b4dca658fe25b23dd70c6a5e7810739a58->enter($__internal_a39ffd6cd3d9139ac9dd56ce398486b4dca658fe25b23dd70c6a5e7810739a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_a922cea6b6096f657c5a9a25c05048cea90700fc07e2dd6cc6ccb29888c68584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a922cea6b6096f657c5a9a25c05048cea90700fc07e2dd6cc6ccb29888c68584->enter($__internal_a922cea6b6096f657c5a9a25c05048cea90700fc07e2dd6cc6ccb29888c68584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39ffd6cd3d9139ac9dd56ce398486b4dca658fe25b23dd70c6a5e7810739a58->leave($__internal_a39ffd6cd3d9139ac9dd56ce398486b4dca658fe25b23dd70c6a5e7810739a58_prof);

        
        $__internal_a922cea6b6096f657c5a9a25c05048cea90700fc07e2dd6cc6ccb29888c68584->leave($__internal_a922cea6b6096f657c5a9a25c05048cea90700fc07e2dd6cc6ccb29888c68584_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7969e34d991169f8aa2172f97324a44036c5701f615acdf02ab484d9976183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7969e34d991169f8aa2172f97324a44036c5701f615acdf02ab484d9976183->enter($__internal_ae7969e34d991169f8aa2172f97324a44036c5701f615acdf02ab484d9976183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f71f86469c3342e195aeb7cc16d4f816ba1ffdfa2c9c65203ae0784867a326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f71f86469c3342e195aeb7cc16d4f816ba1ffdfa2c9c65203ae0784867a326a->enter($__internal_8f71f86469c3342e195aeb7cc16d4f816ba1ffdfa2c9c65203ae0784867a326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
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
        
        $__internal_8f71f86469c3342e195aeb7cc16d4f816ba1ffdfa2c9c65203ae0784867a326a->leave($__internal_8f71f86469c3342e195aeb7cc16d4f816ba1ffdfa2c9c65203ae0784867a326a_prof);

        
        $__internal_ae7969e34d991169f8aa2172f97324a44036c5701f615acdf02ab484d9976183->leave($__internal_ae7969e34d991169f8aa2172f97324a44036c5701f615acdf02ab484d9976183_prof);

    }

    public function getTemplateName()
    {
        return "tag/edit.html.twig";
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
    <h1>Tag edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tag/edit.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\edit.html.twig");
    }
}
