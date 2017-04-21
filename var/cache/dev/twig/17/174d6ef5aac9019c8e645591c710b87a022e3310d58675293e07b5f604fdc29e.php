<?php

/* base.html.twig */
class __TwigTemplate_3df641dea548308809ca3a9629f3ccc11a7ad5b2ec7dadac052063c2e5d2b533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d99dede33fe675c79b9e969e6ab8d4327af6aba9331cf5b6b32c468af537f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d99dede33fe675c79b9e969e6ab8d4327af6aba9331cf5b6b32c468af537f29->enter($__internal_8d99dede33fe675c79b9e969e6ab8d4327af6aba9331cf5b6b32c468af537f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2b46ce8f1988acdea77815ed07cbc66558ee5a77491ecd9ee73b9ccf047fb5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b46ce8f1988acdea77815ed07cbc66558ee5a77491ecd9ee73b9ccf047fb5e9->enter($__internal_2b46ce8f1988acdea77815ed07cbc66558ee5a77491ecd9ee73b9ccf047fb5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["colours"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "colours"), "method");
        // line 3
        if ((null === ($context["colours"] ?? $this->getContext($context, "colours")))) {
            // line 4
            echo "    ";
            $context["colours"] = array("foreground" => "black", "background" => "while");
        }
        // line 10
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            @import '/css/flash.css';
            @import '/css/header.css';
            @import '/css/default.css';
            @import '/css/nav.css';
            @import '/css/img.css';
            ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "            body {
                ";
        // line 26
        echo "                ";
        // line 27
        echo "            }
        </style>
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,400\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <header>
        <nav>
            <ul>

                <li>
                    <a
                        ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            // line 41
            echo "
                            id=\"current\"

                        ";
        }
        // line 45
        echo "
                        href=\"/\"><span>Home</span>
                    </a>
                </li>

                <li>
                    <a
                        ";
        // line 52
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nurl_index")) {
            // line 53
            echo "
                            id=\"current\"

                        ";
        }
        // line 57
        echo "
                        href=\"/nurl/\"><span>Nurls</span>
                    </a>
                </li>

                <li>
                    <a
                            ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tag_index")) {
            // line 65
            echo "
                                id=\"current\"

                            ";
        }
        // line 69
        echo "
                            href=\"/tag/\"><span>Tags</span>
                    </a>
                </li>


    ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 76
            echo "        You are logged in as:  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong></a>
        <br>
        <li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">logout</a></li>

    ";
        } else {
            // line 81
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">login</a></li>

    ";
        }
        // line 84
        echo "
            </ul>
        </nav>
    </header>


    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
    </body>
</html>
";
        
        $__internal_8d99dede33fe675c79b9e969e6ab8d4327af6aba9331cf5b6b32c468af537f29->leave($__internal_8d99dede33fe675c79b9e969e6ab8d4327af6aba9331cf5b6b32c468af537f29_prof);

        
        $__internal_2b46ce8f1988acdea77815ed07cbc66558ee5a77491ecd9ee73b9ccf047fb5e9->leave($__internal_2b46ce8f1988acdea77815ed07cbc66558ee5a77491ecd9ee73b9ccf047fb5e9_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1c02edc46c468e9220bf955e9ca38f634c617f876f9747525540d5c447632ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c02edc46c468e9220bf955e9ca38f634c617f876f9747525540d5c447632ce->enter($__internal_d1c02edc46c468e9220bf955e9ca38f634c617f876f9747525540d5c447632ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f4f972a8052111cd62ae75d9d0c896c0a958afbc62cbe1b514fa3c3b2032fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4f972a8052111cd62ae75d9d0c896c0a958afbc62cbe1b514fa3c3b2032fdb->enter($__internal_4f4f972a8052111cd62ae75d9d0c896c0a958afbc62cbe1b514fa3c3b2032fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NURL - Home ";
        
        $__internal_4f4f972a8052111cd62ae75d9d0c896c0a958afbc62cbe1b514fa3c3b2032fdb->leave($__internal_4f4f972a8052111cd62ae75d9d0c896c0a958afbc62cbe1b514fa3c3b2032fdb_prof);

        
        $__internal_d1c02edc46c468e9220bf955e9ca38f634c617f876f9747525540d5c447632ce->leave($__internal_d1c02edc46c468e9220bf955e9ca38f634c617f876f9747525540d5c447632ce_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cba1486a1ab8e5293fae85d4cc13bafaf261ac7b2442d5dbd5f7c099765928dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba1486a1ab8e5293fae85d4cc13bafaf261ac7b2442d5dbd5f7c099765928dd->enter($__internal_cba1486a1ab8e5293fae85d4cc13bafaf261ac7b2442d5dbd5f7c099765928dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4232492b4993750668d09576fadd2dc35d7cb21e63f5bf129cfc85f306ff0744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4232492b4993750668d09576fadd2dc35d7cb21e63f5bf129cfc85f306ff0744->enter($__internal_4232492b4993750668d09576fadd2dc35d7cb21e63f5bf129cfc85f306ff0744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "            ";
        
        $__internal_4232492b4993750668d09576fadd2dc35d7cb21e63f5bf129cfc85f306ff0744->leave($__internal_4232492b4993750668d09576fadd2dc35d7cb21e63f5bf129cfc85f306ff0744_prof);

        
        $__internal_cba1486a1ab8e5293fae85d4cc13bafaf261ac7b2442d5dbd5f7c099765928dd->leave($__internal_cba1486a1ab8e5293fae85d4cc13bafaf261ac7b2442d5dbd5f7c099765928dd_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_d78825dbe54363898bed3f97acb221a24b2c01a405775ce2f733c4e7e979668a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78825dbe54363898bed3f97acb221a24b2c01a405775ce2f733c4e7e979668a->enter($__internal_d78825dbe54363898bed3f97acb221a24b2c01a405775ce2f733c4e7e979668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30a9e085f22c4cb2b490d09e3fc3bff2b0b149d9092089a23c03e77ec3c205f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a9e085f22c4cb2b490d09e3fc3bff2b0b149d9092089a23c03e77ec3c205f1->enter($__internal_30a9e085f22c4cb2b490d09e3fc3bff2b0b149d9092089a23c03e77ec3c205f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "    ";
        
        $__internal_30a9e085f22c4cb2b490d09e3fc3bff2b0b149d9092089a23c03e77ec3c205f1->leave($__internal_30a9e085f22c4cb2b490d09e3fc3bff2b0b149d9092089a23c03e77ec3c205f1_prof);

        
        $__internal_d78825dbe54363898bed3f97acb221a24b2c01a405775ce2f733c4e7e979668a->leave($__internal_d78825dbe54363898bed3f97acb221a24b2c01a405775ce2f733c4e7e979668a_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0e3b78cf9a8ab08da915b0ec64a2d24ebd6e09ffa5a82980893a1c08df37423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e3b78cf9a8ab08da915b0ec64a2d24ebd6e09ffa5a82980893a1c08df37423->enter($__internal_f0e3b78cf9a8ab08da915b0ec64a2d24ebd6e09ffa5a82980893a1c08df37423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a18b3497a0330927d93c3c47ff53dfea90fc74c7ec9f3cd2482951cd3ff1bd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18b3497a0330927d93c3c47ff53dfea90fc74c7ec9f3cd2482951cd3ff1bd41->enter($__internal_a18b3497a0330927d93c3c47ff53dfea90fc74c7ec9f3cd2482951cd3ff1bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "        ";
        
        $__internal_a18b3497a0330927d93c3c47ff53dfea90fc74c7ec9f3cd2482951cd3ff1bd41->leave($__internal_a18b3497a0330927d93c3c47ff53dfea90fc74c7ec9f3cd2482951cd3ff1bd41_prof);

        
        $__internal_f0e3b78cf9a8ab08da915b0ec64a2d24ebd6e09ffa5a82980893a1c08df37423->leave($__internal_f0e3b78cf9a8ab08da915b0ec64a2d24ebd6e09ffa5a82980893a1c08df37423_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 94,  236 => 93,  226 => 91,  217 => 90,  207 => 23,  198 => 22,  180 => 15,  167 => 95,  165 => 93,  162 => 92,  160 => 90,  152 => 84,  145 => 81,  139 => 78,  131 => 76,  129 => 75,  121 => 69,  115 => 65,  113 => 64,  104 => 57,  98 => 53,  96 => 52,  87 => 45,  81 => 41,  79 => 40,  66 => 30,  61 => 27,  59 => 26,  56 => 24,  54 => 22,  44 => 15,  37 => 10,  33 => 4,  31 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set colours = app.session.get('colours') %}
{# default = blue #}
{% if colours is null %}
    {% set colours = {
    'foreground': 'black',
    'background': 'while'
    }
    %}
{% endif %}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}NURL - Home {% endblock %}</title>
        <style>
            @import '/css/flash.css';
            @import '/css/header.css';
            @import '/css/default.css';
            @import '/css/nav.css';
            @import '/css/img.css';
            {% block stylesheets %}
            {% endblock %}
            body {
                {#color: {{ colours['foreground'] }};#}
                {#background-color: {{ colours['background'] }};#}
            }
        </style>
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,400\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

    <header>
        <nav>
            <ul>

                <li>
                    <a
                        {% if app.request.attributes.get('_route') == 'homepage'  %}

                            id=\"current\"

                        {% endif %}

                        href=\"/\"><span>Home</span>
                    </a>
                </li>

                <li>
                    <a
                        {% if app.request.attributes.get('_route') == 'nurl_index'  %}

                            id=\"current\"

                        {% endif %}

                        href=\"/nurl/\"><span>Nurls</span>
                    </a>
                </li>

                <li>
                    <a
                            {% if app.request.attributes.get('_route') == 'tag_index'  %}

                                id=\"current\"

                            {% endif %}

                            href=\"/tag/\"><span>Tags</span>
                    </a>
                </li>


    {% if is_granted('ROLE_USER') %}
        You are logged in as:  <a href=\"{{ path('account_index') }}\"><strong>{{ app.user.username }}</strong></a>
        <br>
        <li><a href=\"{{ path('logout') }}\">logout</a></li>

    {% else %}
        <li><a href=\"{{ path('login') }}\">login</a></li>

    {% endif %}

            </ul>
        </nav>
    </header>


    {% block body %}
    {% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\base.html.twig");
    }
}
