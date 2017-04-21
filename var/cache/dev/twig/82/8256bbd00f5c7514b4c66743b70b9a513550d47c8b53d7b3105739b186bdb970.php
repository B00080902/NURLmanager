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
        $__internal_887c6b38906bad042dc0fb7fea7ee30dcafd4b69ee13300087a4bdc6db12d5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887c6b38906bad042dc0fb7fea7ee30dcafd4b69ee13300087a4bdc6db12d5a4->enter($__internal_887c6b38906bad042dc0fb7fea7ee30dcafd4b69ee13300087a4bdc6db12d5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_00f1db1e66ce63dee5dd6d8e1c94e5bd5e8557e5e463460e48a7f6c60ccb6418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f1db1e66ce63dee5dd6d8e1c94e5bd5e8557e5e463460e48a7f6c60ccb6418->enter($__internal_00f1db1e66ce63dee5dd6d8e1c94e5bd5e8557e5e463460e48a7f6c60ccb6418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887c6b38906bad042dc0fb7fea7ee30dcafd4b69ee13300087a4bdc6db12d5a4->leave($__internal_887c6b38906bad042dc0fb7fea7ee30dcafd4b69ee13300087a4bdc6db12d5a4_prof);

        
        $__internal_00f1db1e66ce63dee5dd6d8e1c94e5bd5e8557e5e463460e48a7f6c60ccb6418->leave($__internal_00f1db1e66ce63dee5dd6d8e1c94e5bd5e8557e5e463460e48a7f6c60ccb6418_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5211b525e9e8c04d706cd5302a67f573183910be642b1a3ff78f884f48c522e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5211b525e9e8c04d706cd5302a67f573183910be642b1a3ff78f884f48c522e0->enter($__internal_5211b525e9e8c04d706cd5302a67f573183910be642b1a3ff78f884f48c522e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_e2a8eb812ecf27d292678a979d25ed40b5faadd4d0a30d5ae59764e4789184e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a8eb812ecf27d292678a979d25ed40b5faadd4d0a30d5ae59764e4789184e7->enter($__internal_e2a8eb812ecf27d292678a979d25ed40b5faadd4d0a30d5ae59764e4789184e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_e2a8eb812ecf27d292678a979d25ed40b5faadd4d0a30d5ae59764e4789184e7->leave($__internal_e2a8eb812ecf27d292678a979d25ed40b5faadd4d0a30d5ae59764e4789184e7_prof);

        
        $__internal_5211b525e9e8c04d706cd5302a67f573183910be642b1a3ff78f884f48c522e0->leave($__internal_5211b525e9e8c04d706cd5302a67f573183910be642b1a3ff78f884f48c522e0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a59cda8d0c6a28dd81f2bff1f6b1148dccd4f544ac7f744c6bf1523c3ae41f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a59cda8d0c6a28dd81f2bff1f6b1148dccd4f544ac7f744c6bf1523c3ae41f8->enter($__internal_1a59cda8d0c6a28dd81f2bff1f6b1148dccd4f544ac7f744c6bf1523c3ae41f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd33b71c6e21bdb641a2c33b1d50be57572edee01be4fbca0120fc305a712bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd33b71c6e21bdb641a2c33b1d50be57572edee01be4fbca0120fc305a712bf4->enter($__internal_fd33b71c6e21bdb641a2c33b1d50be57572edee01be4fbca0120fc305a712bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">
        <section>
            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                    Administrator
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "                    User
                ";
        } else {
            // line 21
            echo "                    <strong>Anonymous</strong>
                ";
        }
        // line 23
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
        
        $__internal_fd33b71c6e21bdb641a2c33b1d50be57572edee01be4fbca0120fc305a712bf4->leave($__internal_fd33b71c6e21bdb641a2c33b1d50be57572edee01be4fbca0120fc305a712bf4_prof);

        
        $__internal_1a59cda8d0c6a28dd81f2bff1f6b1148dccd4f544ac7f744c6bf1523c3ae41f8->leave($__internal_1a59cda8d0c6a28dd81f2bff1f6b1148dccd4f544ac7f744c6bf1523c3ae41f8_prof);

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
        return array (  109 => 34,  102 => 30,  93 => 23,  89 => 21,  85 => 19,  81 => 17,  79 => 16,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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

{% endblock %}", "default/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\default\\index.html.twig");
    }
}
