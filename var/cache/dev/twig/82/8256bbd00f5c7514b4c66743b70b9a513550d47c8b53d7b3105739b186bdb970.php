<?php

/* default/index.html.twig */
class __TwigTemplate_5e08fa15dc5842ab937d2fafdb61c9722cac7a0c0988e9335e22c2bd17794690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c23eef59ec0ef8adffdbc073fb60c920d3429cbac41c9edba214ef73b7bd42b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23eef59ec0ef8adffdbc073fb60c920d3429cbac41c9edba214ef73b7bd42b6->enter($__internal_c23eef59ec0ef8adffdbc073fb60c920d3429cbac41c9edba214ef73b7bd42b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_597e259a6ad0f07bc3f80da365d9a71367c2834ecfa07633caa089f6c59d2396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597e259a6ad0f07bc3f80da365d9a71367c2834ecfa07633caa089f6c59d2396->enter($__internal_597e259a6ad0f07bc3f80da365d9a71367c2834ecfa07633caa089f6c59d2396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c23eef59ec0ef8adffdbc073fb60c920d3429cbac41c9edba214ef73b7bd42b6->leave($__internal_c23eef59ec0ef8adffdbc073fb60c920d3429cbac41c9edba214ef73b7bd42b6_prof);

        
        $__internal_597e259a6ad0f07bc3f80da365d9a71367c2834ecfa07633caa089f6c59d2396->leave($__internal_597e259a6ad0f07bc3f80da365d9a71367c2834ecfa07633caa089f6c59d2396_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_be13533a6e7e3f5951f40ef8324a8d6e88aef727dfb822dc5cbd589ac28887a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be13533a6e7e3f5951f40ef8324a8d6e88aef727dfb822dc5cbd589ac28887a3->enter($__internal_be13533a6e7e3f5951f40ef8324a8d6e88aef727dfb822dc5cbd589ac28887a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_c6f490360cc05f49acfb53a0256b56ecbdc80865e849fc5fdc84de06943de99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f490360cc05f49acfb53a0256b56ecbdc80865e849fc5fdc84de06943de99d->enter($__internal_c6f490360cc05f49acfb53a0256b56ecbdc80865e849fc5fdc84de06943de99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_c6f490360cc05f49acfb53a0256b56ecbdc80865e849fc5fdc84de06943de99d->leave($__internal_c6f490360cc05f49acfb53a0256b56ecbdc80865e849fc5fdc84de06943de99d_prof);

        
        $__internal_be13533a6e7e3f5951f40ef8324a8d6e88aef727dfb822dc5cbd589ac28887a3->leave($__internal_be13533a6e7e3f5951f40ef8324a8d6e88aef727dfb822dc5cbd589ac28887a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c195d7d2e79e57224bb69884d410c8101bb9769bd1beeb7cde0998221306ceb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c195d7d2e79e57224bb69884d410c8101bb9769bd1beeb7cde0998221306ceb5->enter($__internal_c195d7d2e79e57224bb69884d410c8101bb9769bd1beeb7cde0998221306ceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2316124afc8f6602dd47e6ebd4b710312830014ff7e382fc58f985290e224eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2316124afc8f6602dd47e6ebd4b710312830014ff7e382fc58f985290e224eaf->enter($__internal_2316124afc8f6602dd47e6ebd4b710312830014ff7e382fc58f985290e224eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">

        <section>

            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as

                ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "
                    Administrator

                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "
                    User

                ";
        } else {
            // line 27
            echo "
                    <strong>Anonymous</strong>

                ";
        }
        // line 31
        echo "
            </p>

        </section>


        <section>


        <h3>Useful links</h3>

            <ul>

                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tags</a></li>

                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_proposed");
        echo "\">List of proposed new tags</a></li>

                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
        echo "\">Collections</a></li>

                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Propose a new tag</a></li>

                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">All Nurls</a></li>

            </ul>

        </section>

    </div>

";
        
        $__internal_2316124afc8f6602dd47e6ebd4b710312830014ff7e382fc58f985290e224eaf->leave($__internal_2316124afc8f6602dd47e6ebd4b710312830014ff7e382fc58f985290e224eaf_prof);

        
        $__internal_c195d7d2e79e57224bb69884d410c8101bb9769bd1beeb7cde0998221306ceb5->leave($__internal_c195d7d2e79e57224bb69884d410c8101bb9769bd1beeb7cde0998221306ceb5_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  132 => 50,  127 => 48,  122 => 46,  117 => 44,  102 => 31,  96 => 27,  90 => 23,  84 => 19,  82 => 18,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}Home page{% endblock %}

{% block body %}

    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">

        <section>

            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as

                {% if is_granted('ROLE_ADMIN') %}

                    Administrator

                {% elseif is_granted('ROLE_USER') %}

                    User

                {% else %}

                    <strong>Anonymous</strong>

                {% endif %}

            </p>

        </section>


        <section>


        <h3>Useful links</h3>

            <ul>

                <li><a href=\"{{ path('tag_index') }}\">Tags</a></li>

                <li><a href=\"{{ path('tag_proposed') }}\">List of proposed new tags</a></li>

                <li><a href=\"{{ path('collection_index') }}\">Collections</a></li>

                <li><a href=\"{{ path('tag_new') }}\">Propose a new tag</a></li>

                <li><a href=\"{{ path('nurl_index') }}\">All Nurls</a></li>

            </ul>

        </section>

    </div>

{% endblock %}", "default/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\default\\index.html.twig");
    }
}
