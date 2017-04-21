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
        $__internal_40a87bff652e9c0a20f3570e6aa3943d71a4990fd22994a8853b8f6b5ff44cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a87bff652e9c0a20f3570e6aa3943d71a4990fd22994a8853b8f6b5ff44cb5->enter($__internal_40a87bff652e9c0a20f3570e6aa3943d71a4990fd22994a8853b8f6b5ff44cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a7f50d9930cd3bb9b4dabffda7d72e2b564d4ea1c00f87e32f0b7aae286bf237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f50d9930cd3bb9b4dabffda7d72e2b564d4ea1c00f87e32f0b7aae286bf237->enter($__internal_a7f50d9930cd3bb9b4dabffda7d72e2b564d4ea1c00f87e32f0b7aae286bf237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a87bff652e9c0a20f3570e6aa3943d71a4990fd22994a8853b8f6b5ff44cb5->leave($__internal_40a87bff652e9c0a20f3570e6aa3943d71a4990fd22994a8853b8f6b5ff44cb5_prof);

        
        $__internal_a7f50d9930cd3bb9b4dabffda7d72e2b564d4ea1c00f87e32f0b7aae286bf237->leave($__internal_a7f50d9930cd3bb9b4dabffda7d72e2b564d4ea1c00f87e32f0b7aae286bf237_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af93866da05fe7b8ceabb9b2de2d5e953546f77f663b60d43de94f8c5491cbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af93866da05fe7b8ceabb9b2de2d5e953546f77f663b60d43de94f8c5491cbd4->enter($__internal_af93866da05fe7b8ceabb9b2de2d5e953546f77f663b60d43de94f8c5491cbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71c04334a9dee0a8653050191bceec69bd6e33c772eac6df577153b890e16b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c04334a9dee0a8653050191bceec69bd6e33c772eac6df577153b890e16b51->enter($__internal_71c04334a9dee0a8653050191bceec69bd6e33c772eac6df577153b890e16b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71c04334a9dee0a8653050191bceec69bd6e33c772eac6df577153b890e16b51->leave($__internal_71c04334a9dee0a8653050191bceec69bd6e33c772eac6df577153b890e16b51_prof);

        
        $__internal_af93866da05fe7b8ceabb9b2de2d5e953546f77f663b60d43de94f8c5491cbd4->leave($__internal_af93866da05fe7b8ceabb9b2de2d5e953546f77f663b60d43de94f8c5491cbd4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f864937aa32f9140272bd90ca2c7aa38a4d53839941fae0804b8f29f8cc8f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f864937aa32f9140272bd90ca2c7aa38a4d53839941fae0804b8f29f8cc8f02->enter($__internal_0f864937aa32f9140272bd90ca2c7aa38a4d53839941fae0804b8f29f8cc8f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68fdea49afb75bcda5316fc89549329591bc700b8add739ba25226324e498533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fdea49afb75bcda5316fc89549329591bc700b8add739ba25226324e498533->enter($__internal_68fdea49afb75bcda5316fc89549329591bc700b8add739ba25226324e498533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68fdea49afb75bcda5316fc89549329591bc700b8add739ba25226324e498533->leave($__internal_68fdea49afb75bcda5316fc89549329591bc700b8add739ba25226324e498533_prof);

        
        $__internal_0f864937aa32f9140272bd90ca2c7aa38a4d53839941fae0804b8f29f8cc8f02->leave($__internal_0f864937aa32f9140272bd90ca2c7aa38a4d53839941fae0804b8f29f8cc8f02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4014d11ce4b61e9497a8e2c93a01fcdf16f5e7f815bce2b406c42b266ab71cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4014d11ce4b61e9497a8e2c93a01fcdf16f5e7f815bce2b406c42b266ab71cf->enter($__internal_f4014d11ce4b61e9497a8e2c93a01fcdf16f5e7f815bce2b406c42b266ab71cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d96f9e0020247ea1da574283a3f99b4cd364115e835044eaf23995efb7cd87cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96f9e0020247ea1da574283a3f99b4cd364115e835044eaf23995efb7cd87cb->enter($__internal_d96f9e0020247ea1da574283a3f99b4cd364115e835044eaf23995efb7cd87cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d96f9e0020247ea1da574283a3f99b4cd364115e835044eaf23995efb7cd87cb->leave($__internal_d96f9e0020247ea1da574283a3f99b4cd364115e835044eaf23995efb7cd87cb_prof);

        
        $__internal_f4014d11ce4b61e9497a8e2c93a01fcdf16f5e7f815bce2b406c42b266ab71cf->leave($__internal_f4014d11ce4b61e9497a8e2c93a01fcdf16f5e7f815bce2b406c42b266ab71cf_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
