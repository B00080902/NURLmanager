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
        $__internal_347e1f55e702ab1fe59a57c39f943493cfe2d82d5b766535a26a60e3afdd612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347e1f55e702ab1fe59a57c39f943493cfe2d82d5b766535a26a60e3afdd612f->enter($__internal_347e1f55e702ab1fe59a57c39f943493cfe2d82d5b766535a26a60e3afdd612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9d96772e50da8c091dd938c8431e5e55253390bde42ae76c30929c3bad08a077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d96772e50da8c091dd938c8431e5e55253390bde42ae76c30929c3bad08a077->enter($__internal_9d96772e50da8c091dd938c8431e5e55253390bde42ae76c30929c3bad08a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "        You are logged in as:  <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
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
        
        $__internal_347e1f55e702ab1fe59a57c39f943493cfe2d82d5b766535a26a60e3afdd612f->leave($__internal_347e1f55e702ab1fe59a57c39f943493cfe2d82d5b766535a26a60e3afdd612f_prof);

        
        $__internal_9d96772e50da8c091dd938c8431e5e55253390bde42ae76c30929c3bad08a077->leave($__internal_9d96772e50da8c091dd938c8431e5e55253390bde42ae76c30929c3bad08a077_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ec5f726c77993de8d85a96785b05a23bdfb8d71df3d759328aa221b94d74000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec5f726c77993de8d85a96785b05a23bdfb8d71df3d759328aa221b94d74000->enter($__internal_6ec5f726c77993de8d85a96785b05a23bdfb8d71df3d759328aa221b94d74000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64662b0b66fd29d837130187bea9b259f1121fbc87023d97ee7a8ac15a04c4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64662b0b66fd29d837130187bea9b259f1121fbc87023d97ee7a8ac15a04c4c9->enter($__internal_64662b0b66fd29d837130187bea9b259f1121fbc87023d97ee7a8ac15a04c4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NURL - Home ";
        
        $__internal_64662b0b66fd29d837130187bea9b259f1121fbc87023d97ee7a8ac15a04c4c9->leave($__internal_64662b0b66fd29d837130187bea9b259f1121fbc87023d97ee7a8ac15a04c4c9_prof);

        
        $__internal_6ec5f726c77993de8d85a96785b05a23bdfb8d71df3d759328aa221b94d74000->leave($__internal_6ec5f726c77993de8d85a96785b05a23bdfb8d71df3d759328aa221b94d74000_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ece500126c54e53e4238063d3513985a073215d8d8953505792bd8c5385d4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ece500126c54e53e4238063d3513985a073215d8d8953505792bd8c5385d4ff->enter($__internal_3ece500126c54e53e4238063d3513985a073215d8d8953505792bd8c5385d4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9ab42bdc5a4b0be1dc1b5acbe37cbcba9f7825a9fb22bec9a0d1caefde55e7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab42bdc5a4b0be1dc1b5acbe37cbcba9f7825a9fb22bec9a0d1caefde55e7b3->enter($__internal_9ab42bdc5a4b0be1dc1b5acbe37cbcba9f7825a9fb22bec9a0d1caefde55e7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "            ";
        
        $__internal_9ab42bdc5a4b0be1dc1b5acbe37cbcba9f7825a9fb22bec9a0d1caefde55e7b3->leave($__internal_9ab42bdc5a4b0be1dc1b5acbe37cbcba9f7825a9fb22bec9a0d1caefde55e7b3_prof);

        
        $__internal_3ece500126c54e53e4238063d3513985a073215d8d8953505792bd8c5385d4ff->leave($__internal_3ece500126c54e53e4238063d3513985a073215d8d8953505792bd8c5385d4ff_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb8fb6a3bed0d431333c05009daee7d2b3925b2be3d57fd8408bfff4c92d1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb8fb6a3bed0d431333c05009daee7d2b3925b2be3d57fd8408bfff4c92d1cc->enter($__internal_4bb8fb6a3bed0d431333c05009daee7d2b3925b2be3d57fd8408bfff4c92d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3498c532207db14f4a39db5a2ffabb37b28d9cb915c237d88e7739c6c4bbdc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3498c532207db14f4a39db5a2ffabb37b28d9cb915c237d88e7739c6c4bbdc6a->enter($__internal_3498c532207db14f4a39db5a2ffabb37b28d9cb915c237d88e7739c6c4bbdc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "    ";
        
        $__internal_3498c532207db14f4a39db5a2ffabb37b28d9cb915c237d88e7739c6c4bbdc6a->leave($__internal_3498c532207db14f4a39db5a2ffabb37b28d9cb915c237d88e7739c6c4bbdc6a_prof);

        
        $__internal_4bb8fb6a3bed0d431333c05009daee7d2b3925b2be3d57fd8408bfff4c92d1cc->leave($__internal_4bb8fb6a3bed0d431333c05009daee7d2b3925b2be3d57fd8408bfff4c92d1cc_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ef414fdc483141067786d224139de40f82a9b937ff0c966b625dd8fef3557a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef414fdc483141067786d224139de40f82a9b937ff0c966b625dd8fef3557a2->enter($__internal_1ef414fdc483141067786d224139de40f82a9b937ff0c966b625dd8fef3557a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fcebda4dfcc7fec5c764f58a0912b9e4c269907cbbccc81e6412991953b638a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcebda4dfcc7fec5c764f58a0912b9e4c269907cbbccc81e6412991953b638a4->enter($__internal_fcebda4dfcc7fec5c764f58a0912b9e4c269907cbbccc81e6412991953b638a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "        ";
        
        $__internal_fcebda4dfcc7fec5c764f58a0912b9e4c269907cbbccc81e6412991953b638a4->leave($__internal_fcebda4dfcc7fec5c764f58a0912b9e4c269907cbbccc81e6412991953b638a4_prof);

        
        $__internal_1ef414fdc483141067786d224139de40f82a9b937ff0c966b625dd8fef3557a2->leave($__internal_1ef414fdc483141067786d224139de40f82a9b937ff0c966b625dd8fef3557a2_prof);

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
        return array (  243 => 94,  234 => 93,  224 => 91,  215 => 90,  205 => 23,  196 => 22,  178 => 15,  165 => 95,  163 => 93,  160 => 92,  158 => 90,  150 => 84,  143 => 81,  137 => 78,  131 => 76,  129 => 75,  121 => 69,  115 => 65,  113 => 64,  104 => 57,  98 => 53,  96 => 52,  87 => 45,  81 => 41,  79 => 40,  66 => 30,  61 => 27,  59 => 26,  56 => 24,  54 => 22,  44 => 15,  37 => 10,  33 => 4,  31 => 3,  29 => 1,);
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
        You are logged in as:  <strong>{{ app.user.username }}</strong>
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
", "base.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\base.html.twig");
    }
}
