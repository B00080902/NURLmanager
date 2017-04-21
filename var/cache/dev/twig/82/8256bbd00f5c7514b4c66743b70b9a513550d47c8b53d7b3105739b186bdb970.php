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
        $__internal_65e1fe73f334a8055b9b14e91232c1a2823409e7fd890c2e634c53efd639bfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e1fe73f334a8055b9b14e91232c1a2823409e7fd890c2e634c53efd639bfe5->enter($__internal_65e1fe73f334a8055b9b14e91232c1a2823409e7fd890c2e634c53efd639bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1dd6c26b70a22382ac63c29a74428731c80e1f021bce12075459b3d78c88b480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd6c26b70a22382ac63c29a74428731c80e1f021bce12075459b3d78c88b480->enter($__internal_1dd6c26b70a22382ac63c29a74428731c80e1f021bce12075459b3d78c88b480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e1fe73f334a8055b9b14e91232c1a2823409e7fd890c2e634c53efd639bfe5->leave($__internal_65e1fe73f334a8055b9b14e91232c1a2823409e7fd890c2e634c53efd639bfe5_prof);

        
        $__internal_1dd6c26b70a22382ac63c29a74428731c80e1f021bce12075459b3d78c88b480->leave($__internal_1dd6c26b70a22382ac63c29a74428731c80e1f021bce12075459b3d78c88b480_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_07c94e64c5aa1f25df227367a8beecc66433e3f2d7529e8e4a0b978465e257de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c94e64c5aa1f25df227367a8beecc66433e3f2d7529e8e4a0b978465e257de->enter($__internal_07c94e64c5aa1f25df227367a8beecc66433e3f2d7529e8e4a0b978465e257de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_0712285c1d35dd3ae8fe27be32450cf3161d58b7b5cf552b8e70437a299eb197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0712285c1d35dd3ae8fe27be32450cf3161d58b7b5cf552b8e70437a299eb197->enter($__internal_0712285c1d35dd3ae8fe27be32450cf3161d58b7b5cf552b8e70437a299eb197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_0712285c1d35dd3ae8fe27be32450cf3161d58b7b5cf552b8e70437a299eb197->leave($__internal_0712285c1d35dd3ae8fe27be32450cf3161d58b7b5cf552b8e70437a299eb197_prof);

        
        $__internal_07c94e64c5aa1f25df227367a8beecc66433e3f2d7529e8e4a0b978465e257de->leave($__internal_07c94e64c5aa1f25df227367a8beecc66433e3f2d7529e8e4a0b978465e257de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f501752e518a96811767cb1b6bbb6e50e413b4c81e29aed9b6489d9f54e70520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f501752e518a96811767cb1b6bbb6e50e413b4c81e29aed9b6489d9f54e70520->enter($__internal_f501752e518a96811767cb1b6bbb6e50e413b4c81e29aed9b6489d9f54e70520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4fca50cb98fca940a8e8121526164905115ef6217656be1e99163acda6a8114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fca50cb98fca940a8e8121526164905115ef6217656be1e99163acda6a8114->enter($__internal_d4fca50cb98fca940a8e8121526164905115ef6217656be1e99163acda6a8114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">
        <section>
            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    Administrator
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 18
            echo "                    User
                ";
        } else {
            // line 20
            echo "                    <strong>Anonymous</strong>
                ";
        }
        // line 22
        echo "            </p>
        </section>

        <section>

        <h3>Useful links</h3>
            <ul>

                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

";
        
        $__internal_d4fca50cb98fca940a8e8121526164905115ef6217656be1e99163acda6a8114->leave($__internal_d4fca50cb98fca940a8e8121526164905115ef6217656be1e99163acda6a8114_prof);

        
        $__internal_f501752e518a96811767cb1b6bbb6e50e413b4c81e29aed9b6489d9f54e70520->leave($__internal_f501752e518a96811767cb1b6bbb6e50e413b4c81e29aed9b6489d9f54e70520_prof);

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
        return array (  110 => 34,  103 => 30,  93 => 22,  89 => 20,  85 => 18,  81 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

                <li><a href=\"{{ path('tag_index') }}\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"{{ path('nurl_index') }}\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

{% endblock %}", "default/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\default\\index.html.twig");
    }
}
