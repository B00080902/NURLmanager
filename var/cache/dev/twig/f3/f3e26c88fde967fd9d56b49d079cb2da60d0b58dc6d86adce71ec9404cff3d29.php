<?php

/* nurl/new.html.twig */
class __TwigTemplate_0316c6a286b7e0c357e7d5fb62874ef618e33d826fa3f9a860b56fbc146c1443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59b035fb77ee648bd04d23ec579bbf8f86ea1863e708818454424456b0847bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b035fb77ee648bd04d23ec579bbf8f86ea1863e708818454424456b0847bb5->enter($__internal_59b035fb77ee648bd04d23ec579bbf8f86ea1863e708818454424456b0847bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $__internal_d3ff842fbc94021df130ab8df95d6739191529bc53a94cf9293b59616e9cf27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ff842fbc94021df130ab8df95d6739191529bc53a94cf9293b59616e9cf27f->enter($__internal_d3ff842fbc94021df130ab8df95d6739191529bc53a94cf9293b59616e9cf27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b035fb77ee648bd04d23ec579bbf8f86ea1863e708818454424456b0847bb5->leave($__internal_59b035fb77ee648bd04d23ec579bbf8f86ea1863e708818454424456b0847bb5_prof);

        
        $__internal_d3ff842fbc94021df130ab8df95d6739191529bc53a94cf9293b59616e9cf27f->leave($__internal_d3ff842fbc94021df130ab8df95d6739191529bc53a94cf9293b59616e9cf27f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab2642d25e74cbe5d40c41ee4dbe06e02183f17cbaa18ee4e97eff1ad43dca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab2642d25e74cbe5d40c41ee4dbe06e02183f17cbaa18ee4e97eff1ad43dca4->enter($__internal_bab2642d25e74cbe5d40c41ee4dbe06e02183f17cbaa18ee4e97eff1ad43dca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31ce8d7eb3956b6d8853c42328de9a520b191bc61dbd55143bc7ce9e0356bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ce8d7eb3956b6d8853c42328de9a520b191bc61dbd55143bc7ce9e0356bafb->enter($__internal_31ce8d7eb3956b6d8853c42328de9a520b191bc61dbd55143bc7ce9e0356bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Create a Nurl</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "


    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 13
            echo "
        ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()), "approved", array())) {
                // line 15
                echo "
            ";
                // line 16
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tag", array()), 'row');
                echo "

        ";
            }
            // line 19
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back</a>
        </li>
    </ul>
";
        
        $__internal_31ce8d7eb3956b6d8853c42328de9a520b191bc61dbd55143bc7ce9e0356bafb->leave($__internal_31ce8d7eb3956b6d8853c42328de9a520b191bc61dbd55143bc7ce9e0356bafb_prof);

        
        $__internal_bab2642d25e74cbe5d40c41ee4dbe06e02183f17cbaa18ee4e97eff1ad43dca4->leave($__internal_bab2642d25e74cbe5d40c41ee4dbe06e02183f17cbaa18ee4e97eff1ad43dca4_prof);

    }

    public function getTemplateName()
    {
        return "nurl/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  94 => 23,  90 => 21,  83 => 19,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  65 => 12,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1>Create a Nurl</h1>

    {{ form_start(form) }}

    {{ form_widget(form) }}


    {% for tags in nurl.tag %}

        {% if nurl.tag.approved %}

            {{ form_row(form.tag) }}

        {% endif %}

    {% endfor %}


    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('nurl_index') }}\">Back</a>
        </li>
    </ul>
{% endblock %}
", "nurl/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\new.html.twig");
    }
}
