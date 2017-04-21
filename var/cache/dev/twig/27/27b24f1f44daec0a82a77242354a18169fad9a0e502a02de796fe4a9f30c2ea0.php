<?php

/* tag/new.html.twig */
class __TwigTemplate_8fa187b344ae7da8b469beb8fbeef08ec71dbbc795c1a534d7d0b16ba74a0c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_fc3ec27b08f63d59605c0df813f84cef2783eaa25c89f72c5cf2719468d2ab58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3ec27b08f63d59605c0df813f84cef2783eaa25c89f72c5cf2719468d2ab58->enter($__internal_fc3ec27b08f63d59605c0df813f84cef2783eaa25c89f72c5cf2719468d2ab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_e3a1eac3700b3158d957bfdc6110f716d4e74dbf8679bbd877af5924f704e226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a1eac3700b3158d957bfdc6110f716d4e74dbf8679bbd877af5924f704e226->enter($__internal_e3a1eac3700b3158d957bfdc6110f716d4e74dbf8679bbd877af5924f704e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3ec27b08f63d59605c0df813f84cef2783eaa25c89f72c5cf2719468d2ab58->leave($__internal_fc3ec27b08f63d59605c0df813f84cef2783eaa25c89f72c5cf2719468d2ab58_prof);

        
        $__internal_e3a1eac3700b3158d957bfdc6110f716d4e74dbf8679bbd877af5924f704e226->leave($__internal_e3a1eac3700b3158d957bfdc6110f716d4e74dbf8679bbd877af5924f704e226_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac371f880c39b58ffaaa7b2bfd2195d7d47b50634e577c9b6eecb16cc51e4e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac371f880c39b58ffaaa7b2bfd2195d7d47b50634e577c9b6eecb16cc51e4e41->enter($__internal_ac371f880c39b58ffaaa7b2bfd2195d7d47b50634e577c9b6eecb16cc51e4e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed9d6fd4b88300f16c8f7ae4493a202af87c81f807b74401e401a3e4cc1e7d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d6fd4b88300f16c8f7ae4493a202af87c81f807b74401e401a3e4cc1e7d4a->enter($__internal_ed9d6fd4b88300f16c8f7ae4493a202af87c81f807b74401e401a3e4cc1e7d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ed9d6fd4b88300f16c8f7ae4493a202af87c81f807b74401e401a3e4cc1e7d4a->leave($__internal_ed9d6fd4b88300f16c8f7ae4493a202af87c81f807b74401e401a3e4cc1e7d4a_prof);

        
        $__internal_ac371f880c39b58ffaaa7b2bfd2195d7d47b50634e577c9b6eecb16cc51e4e41->leave($__internal_ac371f880c39b58ffaaa7b2bfd2195d7d47b50634e577c9b6eecb16cc51e4e41_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "tag/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
