<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_198e4e9111ee15a2c22f581e39239414a7c54d06a2afe630688e30b661a29412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f3f42f6ecf619b8570866c18a1c7b3d0c9a5dae693d4ece8575c43eea34cec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3f42f6ecf619b8570866c18a1c7b3d0c9a5dae693d4ece8575c43eea34cec2->enter($__internal_1f3f42f6ecf619b8570866c18a1c7b3d0c9a5dae693d4ece8575c43eea34cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d10c1735a4d3ae324bbc6efd8094bc775bd231409635cf2ad9e326c1d3a32bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10c1735a4d3ae324bbc6efd8094bc775bd231409635cf2ad9e326c1d3a32bc3->enter($__internal_d10c1735a4d3ae324bbc6efd8094bc775bd231409635cf2ad9e326c1d3a32bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1f3f42f6ecf619b8570866c18a1c7b3d0c9a5dae693d4ece8575c43eea34cec2->leave($__internal_1f3f42f6ecf619b8570866c18a1c7b3d0c9a5dae693d4ece8575c43eea34cec2_prof);

        
        $__internal_d10c1735a4d3ae324bbc6efd8094bc775bd231409635cf2ad9e326c1d3a32bc3->leave($__internal_d10c1735a4d3ae324bbc6efd8094bc775bd231409635cf2ad9e326c1d3a32bc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
