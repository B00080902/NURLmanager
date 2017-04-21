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
        $__internal_366df0e95f151bb14d2467ea35ff882343bbb840e993a5caf7f4dfeb1556d2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366df0e95f151bb14d2467ea35ff882343bbb840e993a5caf7f4dfeb1556d2b6->enter($__internal_366df0e95f151bb14d2467ea35ff882343bbb840e993a5caf7f4dfeb1556d2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_56b8f56bf1fe32b8cb5645d31de1e7c220387582a46f7301d9750e65d2e558c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b8f56bf1fe32b8cb5645d31de1e7c220387582a46f7301d9750e65d2e558c1->enter($__internal_56b8f56bf1fe32b8cb5645d31de1e7c220387582a46f7301d9750e65d2e558c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366df0e95f151bb14d2467ea35ff882343bbb840e993a5caf7f4dfeb1556d2b6->leave($__internal_366df0e95f151bb14d2467ea35ff882343bbb840e993a5caf7f4dfeb1556d2b6_prof);

        
        $__internal_56b8f56bf1fe32b8cb5645d31de1e7c220387582a46f7301d9750e65d2e558c1->leave($__internal_56b8f56bf1fe32b8cb5645d31de1e7c220387582a46f7301d9750e65d2e558c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dad6908c63757f7e9b1c46d4733c5221b5902aeac1be1571892dfd9c54cb5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dad6908c63757f7e9b1c46d4733c5221b5902aeac1be1571892dfd9c54cb5ad->enter($__internal_7dad6908c63757f7e9b1c46d4733c5221b5902aeac1be1571892dfd9c54cb5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f047001f40ce7a598f17edefab5909ae435de3ba6422064b80f7e010d213a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f047001f40ce7a598f17edefab5909ae435de3ba6422064b80f7e010d213a3a->enter($__internal_2f047001f40ce7a598f17edefab5909ae435de3ba6422064b80f7e010d213a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2f047001f40ce7a598f17edefab5909ae435de3ba6422064b80f7e010d213a3a->leave($__internal_2f047001f40ce7a598f17edefab5909ae435de3ba6422064b80f7e010d213a3a_prof);

        
        $__internal_7dad6908c63757f7e9b1c46d4733c5221b5902aeac1be1571892dfd9c54cb5ad->leave($__internal_7dad6908c63757f7e9b1c46d4733c5221b5902aeac1be1571892dfd9c54cb5ad_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
