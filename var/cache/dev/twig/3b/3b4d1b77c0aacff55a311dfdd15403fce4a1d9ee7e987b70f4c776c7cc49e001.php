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
        $__internal_0f7e065464016632c75d72b093ed36abfb9449ac1808709b4e85f21011c8ca3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7e065464016632c75d72b093ed36abfb9449ac1808709b4e85f21011c8ca3e->enter($__internal_0f7e065464016632c75d72b093ed36abfb9449ac1808709b4e85f21011c8ca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_96270182acabcd0443728eccccf0c262c8c4a7905d3fe192852ef02ac4e93ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96270182acabcd0443728eccccf0c262c8c4a7905d3fe192852ef02ac4e93ae6->enter($__internal_96270182acabcd0443728eccccf0c262c8c4a7905d3fe192852ef02ac4e93ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7e065464016632c75d72b093ed36abfb9449ac1808709b4e85f21011c8ca3e->leave($__internal_0f7e065464016632c75d72b093ed36abfb9449ac1808709b4e85f21011c8ca3e_prof);

        
        $__internal_96270182acabcd0443728eccccf0c262c8c4a7905d3fe192852ef02ac4e93ae6->leave($__internal_96270182acabcd0443728eccccf0c262c8c4a7905d3fe192852ef02ac4e93ae6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc1ff8dde5f1504d9beffa1ac3e5626e4aaa712273e1dc905915748eeb00a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc1ff8dde5f1504d9beffa1ac3e5626e4aaa712273e1dc905915748eeb00a5f->enter($__internal_7dc1ff8dde5f1504d9beffa1ac3e5626e4aaa712273e1dc905915748eeb00a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cc8c5135b6afffd13061aa24d07b3b311b0f902a6b519f6931d8b14d339ed36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc8c5135b6afffd13061aa24d07b3b311b0f902a6b519f6931d8b14d339ed36->enter($__internal_8cc8c5135b6afffd13061aa24d07b3b311b0f902a6b519f6931d8b14d339ed36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Search ";
        
        $__internal_8cc8c5135b6afffd13061aa24d07b3b311b0f902a6b519f6931d8b14d339ed36->leave($__internal_8cc8c5135b6afffd13061aa24d07b3b311b0f902a6b519f6931d8b14d339ed36_prof);

        
        $__internal_7dc1ff8dde5f1504d9beffa1ac3e5626e4aaa712273e1dc905915748eeb00a5f->leave($__internal_7dc1ff8dde5f1504d9beffa1ac3e5626e4aaa712273e1dc905915748eeb00a5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a7faf34856e56c79f4eaf339dc8f830865e77c87d210abfe1a881227382cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a7faf34856e56c79f4eaf339dc8f830865e77c87d210abfe1a881227382cf5->enter($__internal_41a7faf34856e56c79f4eaf339dc8f830865e77c87d210abfe1a881227382cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0d978b08c9ca55af4ad0eba959bc2d9eff0ea2c9f9691edabb589ef635db670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d978b08c9ca55af4ad0eba959bc2d9eff0ea2c9f9691edabb589ef635db670->enter($__internal_a0d978b08c9ca55af4ad0eba959bc2d9eff0ea2c9f9691edabb589ef635db670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <form
        action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_results");
        echo "\"
        method=\"post\"
    >


        <select>

            <optgroup label=\"Type\" >

                <option name=\"type\" >User</option>

                <option name=\"type\" >Collection</option>

                <option name=\"type\" >Nurl</option>

                <option name=\"type\">Tag</option>

            </optgroup>

        </select>
        ";
        // line 29
        echo "

        <input type=\"text\" name=\"query\" placeholder=\"Search\">


        <input type=\"submit\" id=\"Submit\" value=\"Submit\">


    </form>

";
        
        $__internal_a0d978b08c9ca55af4ad0eba959bc2d9eff0ea2c9f9691edabb589ef635db670->leave($__internal_a0d978b08c9ca55af4ad0eba959bc2d9eff0ea2c9f9691edabb589ef635db670_prof);

        
        $__internal_41a7faf34856e56c79f4eaf339dc8f830865e77c87d210abfe1a881227382cf5->leave($__internal_41a7faf34856e56c79f4eaf339dc8f830865e77c87d210abfe1a881227382cf5_prof);

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
        return array (  95 => 29,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    <form
        action=\"{{ path('search_results') }}\"
        method=\"post\"
    >


        <select>

            <optgroup label=\"Type\" >

                <option name=\"type\" >User</option>

                <option name=\"type\" >Collection</option>

                <option name=\"type\" >Nurl</option>

                <option name=\"type\">Tag</option>

            </optgroup>

        </select>
        {#<input type=\"text\" name=\"type\">#}


        <input type=\"text\" name=\"query\" placeholder=\"Search\">


        <input type=\"submit\" id=\"Submit\" value=\"Submit\">


    </form>

{% endblock %}", "search/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\search\\index.html.twig");
    }
}
