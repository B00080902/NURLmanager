<?php

/* search/index.html.twig */
class __TwigTemplate_e96f94e3c44a11db1b889232c163019c0d9cb7710fea82b4fb7a8ea53724c4e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b683cdacaa62e9cfa7c38548ee2083cdde96dfbeeec096de148df0fcbba30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b683cdacaa62e9cfa7c38548ee2083cdde96dfbeeec096de148df0fcbba30b->enter($__internal_30b683cdacaa62e9cfa7c38548ee2083cdde96dfbeeec096de148df0fcbba30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_acc569ff6b80648055a313f1f49af1d40628e2d53ddacfe0e7d857b5ba0c164c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc569ff6b80648055a313f1f49af1d40628e2d53ddacfe0e7d857b5ba0c164c->enter($__internal_acc569ff6b80648055a313f1f49af1d40628e2d53ddacfe0e7d857b5ba0c164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b683cdacaa62e9cfa7c38548ee2083cdde96dfbeeec096de148df0fcbba30b->leave($__internal_30b683cdacaa62e9cfa7c38548ee2083cdde96dfbeeec096de148df0fcbba30b_prof);

        
        $__internal_acc569ff6b80648055a313f1f49af1d40628e2d53ddacfe0e7d857b5ba0c164c->leave($__internal_acc569ff6b80648055a313f1f49af1d40628e2d53ddacfe0e7d857b5ba0c164c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f92160bcb610ec2b893bf0d94c78eb56f495259490e95e12d22a2d72df192665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92160bcb610ec2b893bf0d94c78eb56f495259490e95e12d22a2d72df192665->enter($__internal_f92160bcb610ec2b893bf0d94c78eb56f495259490e95e12d22a2d72df192665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f34a31c40850a7bb2d12d1d2668103f34aa28d0dc634114b5adef27fedbcb24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34a31c40850a7bb2d12d1d2668103f34aa28d0dc634114b5adef27fedbcb24e->enter($__internal_f34a31c40850a7bb2d12d1d2668103f34aa28d0dc634114b5adef27fedbcb24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search ";
        
        $__internal_f34a31c40850a7bb2d12d1d2668103f34aa28d0dc634114b5adef27fedbcb24e->leave($__internal_f34a31c40850a7bb2d12d1d2668103f34aa28d0dc634114b5adef27fedbcb24e_prof);

        
        $__internal_f92160bcb610ec2b893bf0d94c78eb56f495259490e95e12d22a2d72df192665->leave($__internal_f92160bcb610ec2b893bf0d94c78eb56f495259490e95e12d22a2d72df192665_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a0a16d2a9f1782a97e2b982922442991ecab68a49e0150418ab12963b3916c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a0a16d2a9f1782a97e2b982922442991ecab68a49e0150418ab12963b3916c->enter($__internal_37a0a16d2a9f1782a97e2b982922442991ecab68a49e0150418ab12963b3916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e3e0475b3c93df3c1c4cbb79785e5976c98d32250e7857b97ccc1ff3e71a1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3e0475b3c93df3c1c4cbb79785e5976c98d32250e7857b97ccc1ff3e71a1ca->enter($__internal_4e3e0475b3c93df3c1c4cbb79785e5976c98d32250e7857b97ccc1ff3e71a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, ($context["result"] ?? $this->getContext($context, "result")), "html", null, true);
        echo "
<hr>
    <br>
    <br>
    <br>

";
        // line 13
        echo twig_escape_filter($this->env, twig_in_filter(($context["result"] ?? $this->getContext($context, "result")), ($context["collections"] ?? $this->getContext($context, "collections"))), "html", null, true);
        echo "
<hr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4e3e0475b3c93df3c1c4cbb79785e5976c98d32250e7857b97ccc1ff3e71a1ca->leave($__internal_4e3e0475b3c93df3c1c4cbb79785e5976c98d32250e7857b97ccc1ff3e71a1ca_prof);

        
        $__internal_37a0a16d2a9f1782a97e2b982922442991ecab68a49e0150418ab12963b3916c->leave($__internal_37a0a16d2a9f1782a97e2b982922442991ecab68a49e0150418ab12963b3916c_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  85 => 15,  80 => 13,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Search {%  endblock %}

{% block body %}

{{ result }}
<hr>
    <br>
    <br>
    <br>

{{ result in collections }}
<hr>
    {% for collection in collections %}
        {{ collection.title }}
    {% endfor %}
{% endblock %}", "search/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\index.html.twig");
    }
}
