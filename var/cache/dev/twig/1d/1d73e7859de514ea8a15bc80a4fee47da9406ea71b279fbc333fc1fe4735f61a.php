<?php

/* user/edit.html.twig */
class __TwigTemplate_5fe56ce320d81fa358293cfbf87ff0722baf5c242da8ff878814aa32de7b840c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_101a6f83cdc189dec09b74e387d33908321215b450a8bed2ad47fcf1b8fedf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101a6f83cdc189dec09b74e387d33908321215b450a8bed2ad47fcf1b8fedf50->enter($__internal_101a6f83cdc189dec09b74e387d33908321215b450a8bed2ad47fcf1b8fedf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_7f6057df57d223c00ce9eec77d460e112ff425a80d199cb563598c355998ef55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6057df57d223c00ce9eec77d460e112ff425a80d199cb563598c355998ef55->enter($__internal_7f6057df57d223c00ce9eec77d460e112ff425a80d199cb563598c355998ef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101a6f83cdc189dec09b74e387d33908321215b450a8bed2ad47fcf1b8fedf50->leave($__internal_101a6f83cdc189dec09b74e387d33908321215b450a8bed2ad47fcf1b8fedf50_prof);

        
        $__internal_7f6057df57d223c00ce9eec77d460e112ff425a80d199cb563598c355998ef55->leave($__internal_7f6057df57d223c00ce9eec77d460e112ff425a80d199cb563598c355998ef55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9379f9a96ab0fce9a395135c9ed0fbaf5ad49a2cffe0a8d4abc0dcd0ebf57bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9379f9a96ab0fce9a395135c9ed0fbaf5ad49a2cffe0a8d4abc0dcd0ebf57bc6->enter($__internal_9379f9a96ab0fce9a395135c9ed0fbaf5ad49a2cffe0a8d4abc0dcd0ebf57bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c75c4118af77cdd0ddf90eecff46a6c50f778ad009ed1fd7ce4fcf89fe3dc487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75c4118af77cdd0ddf90eecff46a6c50f778ad009ed1fd7ce4fcf89fe3dc487->enter($__internal_c75c4118af77cdd0ddf90eecff46a6c50f778ad009ed1fd7ce4fcf89fe3dc487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_c75c4118af77cdd0ddf90eecff46a6c50f778ad009ed1fd7ce4fcf89fe3dc487->leave($__internal_c75c4118af77cdd0ddf90eecff46a6c50f778ad009ed1fd7ce4fcf89fe3dc487_prof);

        
        $__internal_9379f9a96ab0fce9a395135c9ed0fbaf5ad49a2cffe0a8d4abc0dcd0ebf57bc6->leave($__internal_9379f9a96ab0fce9a395135c9ed0fbaf5ad49a2cffe0a8d4abc0dcd0ebf57bc6_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\user\\edit.html.twig");
    }
}
