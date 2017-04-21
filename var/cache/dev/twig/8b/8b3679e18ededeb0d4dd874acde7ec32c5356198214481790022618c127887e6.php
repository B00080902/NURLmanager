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
        $__internal_8195ac9be0dc18817bc67c3ace37dbf6cba0ab04b860752929820eba3b5f192e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8195ac9be0dc18817bc67c3ace37dbf6cba0ab04b860752929820eba3b5f192e->enter($__internal_8195ac9be0dc18817bc67c3ace37dbf6cba0ab04b860752929820eba3b5f192e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f94d0a786e74be6d699705b253239d39148a5fce785b7c23161b74b42dcc6344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94d0a786e74be6d699705b253239d39148a5fce785b7c23161b74b42dcc6344->enter($__internal_f94d0a786e74be6d699705b253239d39148a5fce785b7c23161b74b42dcc6344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_8195ac9be0dc18817bc67c3ace37dbf6cba0ab04b860752929820eba3b5f192e->leave($__internal_8195ac9be0dc18817bc67c3ace37dbf6cba0ab04b860752929820eba3b5f192e_prof);

        
        $__internal_f94d0a786e74be6d699705b253239d39148a5fce785b7c23161b74b42dcc6344->leave($__internal_f94d0a786e74be6d699705b253239d39148a5fce785b7c23161b74b42dcc6344_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
