<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b4c3329deae808876fd6058551151f0ac663405a55b5393f6d472a96de9e6765 extends Twig_Template
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
        $__internal_3905bd5c6b571e19acdaf8a875d84d431c63c82bab7a52a34b64e976ba9665fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3905bd5c6b571e19acdaf8a875d84d431c63c82bab7a52a34b64e976ba9665fd->enter($__internal_3905bd5c6b571e19acdaf8a875d84d431c63c82bab7a52a34b64e976ba9665fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_95fd911ea0f3dfb4cd71289ee43cdcb828eb4ce059c2a7f3627e8f22a4800cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fd911ea0f3dfb4cd71289ee43cdcb828eb4ce059c2a7f3627e8f22a4800cf1->enter($__internal_95fd911ea0f3dfb4cd71289ee43cdcb828eb4ce059c2a7f3627e8f22a4800cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3905bd5c6b571e19acdaf8a875d84d431c63c82bab7a52a34b64e976ba9665fd->leave($__internal_3905bd5c6b571e19acdaf8a875d84d431c63c82bab7a52a34b64e976ba9665fd_prof);

        
        $__internal_95fd911ea0f3dfb4cd71289ee43cdcb828eb4ce059c2a7f3627e8f22a4800cf1->leave($__internal_95fd911ea0f3dfb4cd71289ee43cdcb828eb4ce059c2a7f3627e8f22a4800cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
