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
        $__internal_b70b91e8a92be3a37e1f26e76df7699fca43de9a0796871417175836a5b59f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70b91e8a92be3a37e1f26e76df7699fca43de9a0796871417175836a5b59f0e->enter($__internal_b70b91e8a92be3a37e1f26e76df7699fca43de9a0796871417175836a5b59f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7ad3a5c963cf4927f9307e4a1911d864025b92a29e5321ec6fa49f4e2fcb0580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad3a5c963cf4927f9307e4a1911d864025b92a29e5321ec6fa49f4e2fcb0580->enter($__internal_7ad3a5c963cf4927f9307e4a1911d864025b92a29e5321ec6fa49f4e2fcb0580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70b91e8a92be3a37e1f26e76df7699fca43de9a0796871417175836a5b59f0e->leave($__internal_b70b91e8a92be3a37e1f26e76df7699fca43de9a0796871417175836a5b59f0e_prof);

        
        $__internal_7ad3a5c963cf4927f9307e4a1911d864025b92a29e5321ec6fa49f4e2fcb0580->leave($__internal_7ad3a5c963cf4927f9307e4a1911d864025b92a29e5321ec6fa49f4e2fcb0580_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e303686613957a03417132b267c17b96ba42f98a870b068483c44e76af248a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e303686613957a03417132b267c17b96ba42f98a870b068483c44e76af248a20->enter($__internal_e303686613957a03417132b267c17b96ba42f98a870b068483c44e76af248a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_420ccefc0b2d048c41c6d19dc3c435c83976afa5357330f0ede2b518edec8da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420ccefc0b2d048c41c6d19dc3c435c83976afa5357330f0ede2b518edec8da9->enter($__internal_420ccefc0b2d048c41c6d19dc3c435c83976afa5357330f0ede2b518edec8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_420ccefc0b2d048c41c6d19dc3c435c83976afa5357330f0ede2b518edec8da9->leave($__internal_420ccefc0b2d048c41c6d19dc3c435c83976afa5357330f0ede2b518edec8da9_prof);

        
        $__internal_e303686613957a03417132b267c17b96ba42f98a870b068483c44e76af248a20->leave($__internal_e303686613957a03417132b267c17b96ba42f98a870b068483c44e76af248a20_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_30f4fe593489594d01b7ea0ce3caeae6f4c187ca9191770a7fba4a6344d97cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f4fe593489594d01b7ea0ce3caeae6f4c187ca9191770a7fba4a6344d97cd3->enter($__internal_30f4fe593489594d01b7ea0ce3caeae6f4c187ca9191770a7fba4a6344d97cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f92ac831250b41faf16c0261268d48ead22890886920265509adf4d5765a3687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92ac831250b41faf16c0261268d48ead22890886920265509adf4d5765a3687->enter($__internal_f92ac831250b41faf16c0261268d48ead22890886920265509adf4d5765a3687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

";
        
        $__internal_f92ac831250b41faf16c0261268d48ead22890886920265509adf4d5765a3687->leave($__internal_f92ac831250b41faf16c0261268d48ead22890886920265509adf4d5765a3687_prof);

        
        $__internal_30f4fe593489594d01b7ea0ce3caeae6f4c187ca9191770a7fba4a6344d97cd3->leave($__internal_30f4fe593489594d01b7ea0ce3caeae6f4c187ca9191770a7fba4a6344d97cd3_prof);

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
        return array (  110 => 35,  103 => 31,  93 => 23,  89 => 21,  85 => 19,  81 => 17,  79 => 16,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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
