<?php

/* tag/new.html.twig */
class __TwigTemplate_8fa187b344ae7da8b469beb8fbeef08ec71dbbc795c1a534d7d0b16ba74a0c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_996ea1ddcbbe1ef6175e9361825ee5688c3b9e65a72309143ea6ba8e1a623a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996ea1ddcbbe1ef6175e9361825ee5688c3b9e65a72309143ea6ba8e1a623a7e->enter($__internal_996ea1ddcbbe1ef6175e9361825ee5688c3b9e65a72309143ea6ba8e1a623a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_7b10dd09d1a0e19434e618f01a24ac09b17a889a15f89ecfecafbd6503dd70f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b10dd09d1a0e19434e618f01a24ac09b17a889a15f89ecfecafbd6503dd70f7->enter($__internal_7b10dd09d1a0e19434e618f01a24ac09b17a889a15f89ecfecafbd6503dd70f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996ea1ddcbbe1ef6175e9361825ee5688c3b9e65a72309143ea6ba8e1a623a7e->leave($__internal_996ea1ddcbbe1ef6175e9361825ee5688c3b9e65a72309143ea6ba8e1a623a7e_prof);

        
        $__internal_7b10dd09d1a0e19434e618f01a24ac09b17a889a15f89ecfecafbd6503dd70f7->leave($__internal_7b10dd09d1a0e19434e618f01a24ac09b17a889a15f89ecfecafbd6503dd70f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68cabe5acc6f1874ac3b1f24cee939cbf57ade70b819d732bc582c2ce93d97f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cabe5acc6f1874ac3b1f24cee939cbf57ade70b819d732bc582c2ce93d97f5->enter($__internal_68cabe5acc6f1874ac3b1f24cee939cbf57ade70b819d732bc582c2ce93d97f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34d0b1ba085a837be7498b37b54105469083fd1ba9e509fba02f68b17ad2b4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d0b1ba085a837be7498b37b54105469083fd1ba9e509fba02f68b17ad2b4e8->enter($__internal_34d0b1ba085a837be7498b37b54105469083fd1ba9e509fba02f68b17ad2b4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_34d0b1ba085a837be7498b37b54105469083fd1ba9e509fba02f68b17ad2b4e8->leave($__internal_34d0b1ba085a837be7498b37b54105469083fd1ba9e509fba02f68b17ad2b4e8_prof);

        
        $__internal_68cabe5acc6f1874ac3b1f24cee939cbf57ade70b819d732bc582c2ce93d97f5->leave($__internal_68cabe5acc6f1874ac3b1f24cee939cbf57ade70b819d732bc582c2ce93d97f5_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
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
    <h1>Tag creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "tag/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
