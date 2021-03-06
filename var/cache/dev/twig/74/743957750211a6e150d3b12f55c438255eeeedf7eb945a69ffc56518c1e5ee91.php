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
        $__internal_37c39b83f631a984e2786f9df787a968990a5621ef6846143d4b4ac411142de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c39b83f631a984e2786f9df787a968990a5621ef6846143d4b4ac411142de7->enter($__internal_37c39b83f631a984e2786f9df787a968990a5621ef6846143d4b4ac411142de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_784b96c01f5d67082efe4a463443490b4e2f62ada510e7c3a0f6f4898e60a037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784b96c01f5d67082efe4a463443490b4e2f62ada510e7c3a0f6f4898e60a037->enter($__internal_784b96c01f5d67082efe4a463443490b4e2f62ada510e7c3a0f6f4898e60a037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c39b83f631a984e2786f9df787a968990a5621ef6846143d4b4ac411142de7->leave($__internal_37c39b83f631a984e2786f9df787a968990a5621ef6846143d4b4ac411142de7_prof);

        
        $__internal_784b96c01f5d67082efe4a463443490b4e2f62ada510e7c3a0f6f4898e60a037->leave($__internal_784b96c01f5d67082efe4a463443490b4e2f62ada510e7c3a0f6f4898e60a037_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_358a9b8b1fb657f7f272b516fe3de467a6481d1b4a0c346e7cdbdb61baeac367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358a9b8b1fb657f7f272b516fe3de467a6481d1b4a0c346e7cdbdb61baeac367->enter($__internal_358a9b8b1fb657f7f272b516fe3de467a6481d1b4a0c346e7cdbdb61baeac367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb8750aa4e3d25b5c7345e4463832b23a13767fb8ed38b1cb7079ef623a35c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8750aa4e3d25b5c7345e4463832b23a13767fb8ed38b1cb7079ef623a35c31->enter($__internal_bb8750aa4e3d25b5c7345e4463832b23a13767fb8ed38b1cb7079ef623a35c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb8750aa4e3d25b5c7345e4463832b23a13767fb8ed38b1cb7079ef623a35c31->leave($__internal_bb8750aa4e3d25b5c7345e4463832b23a13767fb8ed38b1cb7079ef623a35c31_prof);

        
        $__internal_358a9b8b1fb657f7f272b516fe3de467a6481d1b4a0c346e7cdbdb61baeac367->leave($__internal_358a9b8b1fb657f7f272b516fe3de467a6481d1b4a0c346e7cdbdb61baeac367_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_721a7ef7a64b67bc253ec5e9c7fb5564af1181358fbaf6c7ff7f4eee0af0ae17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721a7ef7a64b67bc253ec5e9c7fb5564af1181358fbaf6c7ff7f4eee0af0ae17->enter($__internal_721a7ef7a64b67bc253ec5e9c7fb5564af1181358fbaf6c7ff7f4eee0af0ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7cd7f3e86c63b02f937e940457db8505649247443928bea34bffae6e6d20844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd7f3e86c63b02f937e940457db8505649247443928bea34bffae6e6d20844->enter($__internal_e7cd7f3e86c63b02f937e940457db8505649247443928bea34bffae6e6d20844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7cd7f3e86c63b02f937e940457db8505649247443928bea34bffae6e6d20844->leave($__internal_e7cd7f3e86c63b02f937e940457db8505649247443928bea34bffae6e6d20844_prof);

        
        $__internal_721a7ef7a64b67bc253ec5e9c7fb5564af1181358fbaf6c7ff7f4eee0af0ae17->leave($__internal_721a7ef7a64b67bc253ec5e9c7fb5564af1181358fbaf6c7ff7f4eee0af0ae17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04119cf1b8c5517f2e7ddd9b2aee9ab1273e022d34ec4065264229a5595167b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04119cf1b8c5517f2e7ddd9b2aee9ab1273e022d34ec4065264229a5595167b0->enter($__internal_04119cf1b8c5517f2e7ddd9b2aee9ab1273e022d34ec4065264229a5595167b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d5de6bbdd6dc9d1e8b95f7b6a112f12a3231b14a07d92ad24319e8feafcd73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5de6bbdd6dc9d1e8b95f7b6a112f12a3231b14a07d92ad24319e8feafcd73b->enter($__internal_0d5de6bbdd6dc9d1e8b95f7b6a112f12a3231b14a07d92ad24319e8feafcd73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d5de6bbdd6dc9d1e8b95f7b6a112f12a3231b14a07d92ad24319e8feafcd73b->leave($__internal_0d5de6bbdd6dc9d1e8b95f7b6a112f12a3231b14a07d92ad24319e8feafcd73b_prof);

        
        $__internal_04119cf1b8c5517f2e7ddd9b2aee9ab1273e022d34ec4065264229a5595167b0->leave($__internal_04119cf1b8c5517f2e7ddd9b2aee9ab1273e022d34ec4065264229a5595167b0_prof);

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
