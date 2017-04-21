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
        $__internal_77fbcee084e4cc8f69f6e5302b7685745a3e1d35a3973f9bd88f1ad6fb0cbaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fbcee084e4cc8f69f6e5302b7685745a3e1d35a3973f9bd88f1ad6fb0cbaa4->enter($__internal_77fbcee084e4cc8f69f6e5302b7685745a3e1d35a3973f9bd88f1ad6fb0cbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_5d8afb4adc7079e1a0c52e6e8159e4ec8558de63ced28c828f6c3639a021a982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8afb4adc7079e1a0c52e6e8159e4ec8558de63ced28c828f6c3639a021a982->enter($__internal_5d8afb4adc7079e1a0c52e6e8159e4ec8558de63ced28c828f6c3639a021a982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_77fbcee084e4cc8f69f6e5302b7685745a3e1d35a3973f9bd88f1ad6fb0cbaa4->leave($__internal_77fbcee084e4cc8f69f6e5302b7685745a3e1d35a3973f9bd88f1ad6fb0cbaa4_prof);

        
        $__internal_5d8afb4adc7079e1a0c52e6e8159e4ec8558de63ced28c828f6c3639a021a982->leave($__internal_5d8afb4adc7079e1a0c52e6e8159e4ec8558de63ced28c828f6c3639a021a982_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
