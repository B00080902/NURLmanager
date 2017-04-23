<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4b56dd0786b946631edf85454ff89afb948f93970c8c6394fdba00c577cdf8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53d7769af57d87f7d5081108a40e9e28ba13a2bfcaca7205f0f22d74ddc0443f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d7769af57d87f7d5081108a40e9e28ba13a2bfcaca7205f0f22d74ddc0443f->enter($__internal_53d7769af57d87f7d5081108a40e9e28ba13a2bfcaca7205f0f22d74ddc0443f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1f31f228815e22a31417f9122153eebf3d9398aeeba33510264cc5d069bfbff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f31f228815e22a31417f9122153eebf3d9398aeeba33510264cc5d069bfbff9->enter($__internal_1f31f228815e22a31417f9122153eebf3d9398aeeba33510264cc5d069bfbff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d7769af57d87f7d5081108a40e9e28ba13a2bfcaca7205f0f22d74ddc0443f->leave($__internal_53d7769af57d87f7d5081108a40e9e28ba13a2bfcaca7205f0f22d74ddc0443f_prof);

        
        $__internal_1f31f228815e22a31417f9122153eebf3d9398aeeba33510264cc5d069bfbff9->leave($__internal_1f31f228815e22a31417f9122153eebf3d9398aeeba33510264cc5d069bfbff9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e530350e89ef7fe5c2f1bcad2e95eb74d6ca0a917460dd6a666262ca1cd409f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e530350e89ef7fe5c2f1bcad2e95eb74d6ca0a917460dd6a666262ca1cd409f5->enter($__internal_e530350e89ef7fe5c2f1bcad2e95eb74d6ca0a917460dd6a666262ca1cd409f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d785001003bf3b2e02b0c134ec944362844463e5599cf90fd91a1809e710cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d785001003bf3b2e02b0c134ec944362844463e5599cf90fd91a1809e710cb9->enter($__internal_9d785001003bf3b2e02b0c134ec944362844463e5599cf90fd91a1809e710cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d785001003bf3b2e02b0c134ec944362844463e5599cf90fd91a1809e710cb9->leave($__internal_9d785001003bf3b2e02b0c134ec944362844463e5599cf90fd91a1809e710cb9_prof);

        
        $__internal_e530350e89ef7fe5c2f1bcad2e95eb74d6ca0a917460dd6a666262ca1cd409f5->leave($__internal_e530350e89ef7fe5c2f1bcad2e95eb74d6ca0a917460dd6a666262ca1cd409f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c8f5aea3d8b057fa4aad88f76a3f3bbc5f2f9f61a1992ade266807e6de08791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8f5aea3d8b057fa4aad88f76a3f3bbc5f2f9f61a1992ade266807e6de08791->enter($__internal_8c8f5aea3d8b057fa4aad88f76a3f3bbc5f2f9f61a1992ade266807e6de08791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e341dd448780a3e307bd72b4e879a76c7333fb91293d67ad645e9c12ef38ff24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e341dd448780a3e307bd72b4e879a76c7333fb91293d67ad645e9c12ef38ff24->enter($__internal_e341dd448780a3e307bd72b4e879a76c7333fb91293d67ad645e9c12ef38ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e341dd448780a3e307bd72b4e879a76c7333fb91293d67ad645e9c12ef38ff24->leave($__internal_e341dd448780a3e307bd72b4e879a76c7333fb91293d67ad645e9c12ef38ff24_prof);

        
        $__internal_8c8f5aea3d8b057fa4aad88f76a3f3bbc5f2f9f61a1992ade266807e6de08791->leave($__internal_8c8f5aea3d8b057fa4aad88f76a3f3bbc5f2f9f61a1992ade266807e6de08791_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc00d1b66dcf052bde30519098ddde27fa9b3dea07645a0f1d579dcb95cba57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc00d1b66dcf052bde30519098ddde27fa9b3dea07645a0f1d579dcb95cba57e->enter($__internal_bc00d1b66dcf052bde30519098ddde27fa9b3dea07645a0f1d579dcb95cba57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c15e590e499ddc7514c1fbeaa62e58838bfa0d046abcc5aa3187883e9d9ebc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c15e590e499ddc7514c1fbeaa62e58838bfa0d046abcc5aa3187883e9d9ebc9->enter($__internal_6c15e590e499ddc7514c1fbeaa62e58838bfa0d046abcc5aa3187883e9d9ebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c15e590e499ddc7514c1fbeaa62e58838bfa0d046abcc5aa3187883e9d9ebc9->leave($__internal_6c15e590e499ddc7514c1fbeaa62e58838bfa0d046abcc5aa3187883e9d9ebc9_prof);

        
        $__internal_bc00d1b66dcf052bde30519098ddde27fa9b3dea07645a0f1d579dcb95cba57e->leave($__internal_bc00d1b66dcf052bde30519098ddde27fa9b3dea07645a0f1d579dcb95cba57e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
