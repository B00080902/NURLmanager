<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_21224a9a6f3065a0046ca267845026fcc74e25ed0ab2b22807ac96865821bff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_68895351d31ce1d77ee1041e19eeb5c6f26178b6bd57fc7463408693acb4cdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68895351d31ce1d77ee1041e19eeb5c6f26178b6bd57fc7463408693acb4cdc7->enter($__internal_68895351d31ce1d77ee1041e19eeb5c6f26178b6bd57fc7463408693acb4cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f39c52cdb996b81d6d3090d2400eec146a76fffcab6d8bf22c1c38a1c055a48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39c52cdb996b81d6d3090d2400eec146a76fffcab6d8bf22c1c38a1c055a48c->enter($__internal_f39c52cdb996b81d6d3090d2400eec146a76fffcab6d8bf22c1c38a1c055a48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68895351d31ce1d77ee1041e19eeb5c6f26178b6bd57fc7463408693acb4cdc7->leave($__internal_68895351d31ce1d77ee1041e19eeb5c6f26178b6bd57fc7463408693acb4cdc7_prof);

        
        $__internal_f39c52cdb996b81d6d3090d2400eec146a76fffcab6d8bf22c1c38a1c055a48c->leave($__internal_f39c52cdb996b81d6d3090d2400eec146a76fffcab6d8bf22c1c38a1c055a48c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8bc51d9e00b728619bff2d037ea17ceb560f75c6b04053c775042d9f67ae0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bc51d9e00b728619bff2d037ea17ceb560f75c6b04053c775042d9f67ae0ba->enter($__internal_e8bc51d9e00b728619bff2d037ea17ceb560f75c6b04053c775042d9f67ae0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b95dda2c51d283a6f54c372d002f7d19afab9eb32a0386aa64cf376dcf55d96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95dda2c51d283a6f54c372d002f7d19afab9eb32a0386aa64cf376dcf55d96f->enter($__internal_b95dda2c51d283a6f54c372d002f7d19afab9eb32a0386aa64cf376dcf55d96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b95dda2c51d283a6f54c372d002f7d19afab9eb32a0386aa64cf376dcf55d96f->leave($__internal_b95dda2c51d283a6f54c372d002f7d19afab9eb32a0386aa64cf376dcf55d96f_prof);

        
        $__internal_e8bc51d9e00b728619bff2d037ea17ceb560f75c6b04053c775042d9f67ae0ba->leave($__internal_e8bc51d9e00b728619bff2d037ea17ceb560f75c6b04053c775042d9f67ae0ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_159b143044938b71cdfa8781641a59eed4f0df2f9ff34b361a4db3e608a28cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159b143044938b71cdfa8781641a59eed4f0df2f9ff34b361a4db3e608a28cd4->enter($__internal_159b143044938b71cdfa8781641a59eed4f0df2f9ff34b361a4db3e608a28cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c876387ea48ac74dd2e62ac23ec179d7a47b9193b7ca27ea0a7beb6022ed7328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c876387ea48ac74dd2e62ac23ec179d7a47b9193b7ca27ea0a7beb6022ed7328->enter($__internal_c876387ea48ac74dd2e62ac23ec179d7a47b9193b7ca27ea0a7beb6022ed7328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c876387ea48ac74dd2e62ac23ec179d7a47b9193b7ca27ea0a7beb6022ed7328->leave($__internal_c876387ea48ac74dd2e62ac23ec179d7a47b9193b7ca27ea0a7beb6022ed7328_prof);

        
        $__internal_159b143044938b71cdfa8781641a59eed4f0df2f9ff34b361a4db3e608a28cd4->leave($__internal_159b143044938b71cdfa8781641a59eed4f0df2f9ff34b361a4db3e608a28cd4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f51e08d710646f426d0b12433c50dd655d122b9e896222fad5a86b9e5c7b0ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51e08d710646f426d0b12433c50dd655d122b9e896222fad5a86b9e5c7b0ecd->enter($__internal_f51e08d710646f426d0b12433c50dd655d122b9e896222fad5a86b9e5c7b0ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6867b271c24d3645fcfd8584f943133b19385c1017d47abdf1ff7ba67c66b76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6867b271c24d3645fcfd8584f943133b19385c1017d47abdf1ff7ba67c66b76e->enter($__internal_6867b271c24d3645fcfd8584f943133b19385c1017d47abdf1ff7ba67c66b76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6867b271c24d3645fcfd8584f943133b19385c1017d47abdf1ff7ba67c66b76e->leave($__internal_6867b271c24d3645fcfd8584f943133b19385c1017d47abdf1ff7ba67c66b76e_prof);

        
        $__internal_f51e08d710646f426d0b12433c50dd655d122b9e896222fad5a86b9e5c7b0ecd->leave($__internal_f51e08d710646f426d0b12433c50dd655d122b9e896222fad5a86b9e5c7b0ecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
