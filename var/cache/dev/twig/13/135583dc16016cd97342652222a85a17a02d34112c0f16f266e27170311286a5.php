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
        $__internal_fc81a64963a6ebdc448bd5ae0dbd9320d0631580368cd72e2840d0587647ed63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc81a64963a6ebdc448bd5ae0dbd9320d0631580368cd72e2840d0587647ed63->enter($__internal_fc81a64963a6ebdc448bd5ae0dbd9320d0631580368cd72e2840d0587647ed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_06d3faa6489a37f38e314ab86bd4d9695868545193b64840cbf2fff4323b2849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d3faa6489a37f38e314ab86bd4d9695868545193b64840cbf2fff4323b2849->enter($__internal_06d3faa6489a37f38e314ab86bd4d9695868545193b64840cbf2fff4323b2849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc81a64963a6ebdc448bd5ae0dbd9320d0631580368cd72e2840d0587647ed63->leave($__internal_fc81a64963a6ebdc448bd5ae0dbd9320d0631580368cd72e2840d0587647ed63_prof);

        
        $__internal_06d3faa6489a37f38e314ab86bd4d9695868545193b64840cbf2fff4323b2849->leave($__internal_06d3faa6489a37f38e314ab86bd4d9695868545193b64840cbf2fff4323b2849_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_357ff6ac1f1bde25763f461767869787c7a9619ab543c0f8bffad97cbfea2a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357ff6ac1f1bde25763f461767869787c7a9619ab543c0f8bffad97cbfea2a71->enter($__internal_357ff6ac1f1bde25763f461767869787c7a9619ab543c0f8bffad97cbfea2a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16da247217d3df3cc3a0c66ac3051656be4f7c960296337a51e71253e0832660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16da247217d3df3cc3a0c66ac3051656be4f7c960296337a51e71253e0832660->enter($__internal_16da247217d3df3cc3a0c66ac3051656be4f7c960296337a51e71253e0832660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_16da247217d3df3cc3a0c66ac3051656be4f7c960296337a51e71253e0832660->leave($__internal_16da247217d3df3cc3a0c66ac3051656be4f7c960296337a51e71253e0832660_prof);

        
        $__internal_357ff6ac1f1bde25763f461767869787c7a9619ab543c0f8bffad97cbfea2a71->leave($__internal_357ff6ac1f1bde25763f461767869787c7a9619ab543c0f8bffad97cbfea2a71_prof);

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
