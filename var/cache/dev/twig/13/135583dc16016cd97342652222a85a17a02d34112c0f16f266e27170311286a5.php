<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b578b268f9b783f86593d9f88be88febc4966845a94702b7c3d37e85cee6f26e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5803061a6745a10bb1bfb39d8dede41bb6706de7c4ecb74a10748004e2a35b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5803061a6745a10bb1bfb39d8dede41bb6706de7c4ecb74a10748004e2a35b76->enter($__internal_5803061a6745a10bb1bfb39d8dede41bb6706de7c4ecb74a10748004e2a35b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_326debd1bb21f44ad832206bdb9f1e63455f8dee68453a1b7d306015a5ff5bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326debd1bb21f44ad832206bdb9f1e63455f8dee68453a1b7d306015a5ff5bb5->enter($__internal_326debd1bb21f44ad832206bdb9f1e63455f8dee68453a1b7d306015a5ff5bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5803061a6745a10bb1bfb39d8dede41bb6706de7c4ecb74a10748004e2a35b76->leave($__internal_5803061a6745a10bb1bfb39d8dede41bb6706de7c4ecb74a10748004e2a35b76_prof);

        
        $__internal_326debd1bb21f44ad832206bdb9f1e63455f8dee68453a1b7d306015a5ff5bb5->leave($__internal_326debd1bb21f44ad832206bdb9f1e63455f8dee68453a1b7d306015a5ff5bb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd4351a532ac90a939fb2e5ed2a277c8f691b224a8d3fc6142e18f5d1a6d87bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4351a532ac90a939fb2e5ed2a277c8f691b224a8d3fc6142e18f5d1a6d87bc->enter($__internal_dd4351a532ac90a939fb2e5ed2a277c8f691b224a8d3fc6142e18f5d1a6d87bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f680d97e3029eb5b2f87d19020f24795ecde1f21cd3d0443820eee4404055a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f680d97e3029eb5b2f87d19020f24795ecde1f21cd3d0443820eee4404055a7->enter($__internal_9f680d97e3029eb5b2f87d19020f24795ecde1f21cd3d0443820eee4404055a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9f680d97e3029eb5b2f87d19020f24795ecde1f21cd3d0443820eee4404055a7->leave($__internal_9f680d97e3029eb5b2f87d19020f24795ecde1f21cd3d0443820eee4404055a7_prof);

        
        $__internal_dd4351a532ac90a939fb2e5ed2a277c8f691b224a8d3fc6142e18f5d1a6d87bc->leave($__internal_dd4351a532ac90a939fb2e5ed2a277c8f691b224a8d3fc6142e18f5d1a6d87bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
