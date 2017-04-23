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
        $__internal_f56a2c96cdbaf35abd9f1c9ebd83995ab8da77755c91609487078755b2aab228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56a2c96cdbaf35abd9f1c9ebd83995ab8da77755c91609487078755b2aab228->enter($__internal_f56a2c96cdbaf35abd9f1c9ebd83995ab8da77755c91609487078755b2aab228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_90043fadbcaa175bf594d9f8b55f51f7d7dc911911f9010f2ae79c48052ccbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90043fadbcaa175bf594d9f8b55f51f7d7dc911911f9010f2ae79c48052ccbba->enter($__internal_90043fadbcaa175bf594d9f8b55f51f7d7dc911911f9010f2ae79c48052ccbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            @import '/css/flash.css';
            @import '/css/header.css';
            @import '/css/default.css';
            @import '/css/nav.css';
            @import '/css/img.css';
            @import '/css/table.css';
            ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        </style>

        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,400\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
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
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            // line 32
            echo "
                            id=\"current\"

                        ";
        }
        // line 36
        echo "
                        href=\"/\"><span>Home</span>
                    </a>
                </li>

                <li>
                    <a
                        ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nurl_index")) {
            // line 44
            echo "
                            id=\"current\"

                        ";
        }
        // line 48
        echo "
                        href=\"/nurl/\"><span>Nurls</span>
                    </a>
                </li>

                <li>
                    <a
                        ";
        // line 55
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "collection_index")) {
            // line 56
            echo "
                            id=\"current\"

                        ";
        }
        // line 60
        echo "
                        href=\"/collection/\"><span>Collections</span>
                    </a>
                </li>

                <li>
                    <a
                            ";
        // line 67
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tag_index")) {
            // line 68
            echo "
                                id=\"current\"

                            ";
        }
        // line 72
        echo "
                            href=\"/tag/\"><span>Tags</span>
                    </a>
                </li>
                ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "

                <li>
                    <a
                            ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_index")) {
                // line 82
                echo "
                                id=\"current\"

                            ";
            }
            // line 86
            echo "
                            href=\"/user/\"><span>Users</span>
                    </a>
                </li>
                ";
        }
        // line 91
        echo "

    ";
        // line 93
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 94
            echo "
        hi,

            <a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
            echo "\">

                 <strong>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>

            </a>
        <br>


        <li><a href=\"";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">logout</a></li>



    ";
        } else {
            // line 110
            echo "
        <li><a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">login</a></li>

    ";
        }
        // line 114
        echo "
            </ul>

        </nav>

    </header>


    ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "
    </body>
</html>
";
        
        $__internal_f56a2c96cdbaf35abd9f1c9ebd83995ab8da77755c91609487078755b2aab228->leave($__internal_f56a2c96cdbaf35abd9f1c9ebd83995ab8da77755c91609487078755b2aab228_prof);

        
        $__internal_90043fadbcaa175bf594d9f8b55f51f7d7dc911911f9010f2ae79c48052ccbba->leave($__internal_90043fadbcaa175bf594d9f8b55f51f7d7dc911911f9010f2ae79c48052ccbba_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d41e0a205d841644a2d3b03fd60b38206a42edf6e8c1454aea818ce7484e7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d41e0a205d841644a2d3b03fd60b38206a42edf6e8c1454aea818ce7484e7c2->enter($__internal_4d41e0a205d841644a2d3b03fd60b38206a42edf6e8c1454aea818ce7484e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8364c0f8228067d41c8252e091ed652aa4311f3c1cc5957cc077510d9b4bbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8364c0f8228067d41c8252e091ed652aa4311f3c1cc5957cc077510d9b4bbf1->enter($__internal_f8364c0f8228067d41c8252e091ed652aa4311f3c1cc5957cc077510d9b4bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f8364c0f8228067d41c8252e091ed652aa4311f3c1cc5957cc077510d9b4bbf1->leave($__internal_f8364c0f8228067d41c8252e091ed652aa4311f3c1cc5957cc077510d9b4bbf1_prof);

        
        $__internal_4d41e0a205d841644a2d3b03fd60b38206a42edf6e8c1454aea818ce7484e7c2->leave($__internal_4d41e0a205d841644a2d3b03fd60b38206a42edf6e8c1454aea818ce7484e7c2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38d1f95cc4e265ba13c9c7a1f36345b206b440dc99b494953c28077e88ea47a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d1f95cc4e265ba13c9c7a1f36345b206b440dc99b494953c28077e88ea47a2->enter($__internal_38d1f95cc4e265ba13c9c7a1f36345b206b440dc99b494953c28077e88ea47a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ed294d6cd265cb4c3478ef90432f9506abfc1cc6c5c6a8cef55f91a87a95f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed294d6cd265cb4c3478ef90432f9506abfc1cc6c5c6a8cef55f91a87a95f62->enter($__internal_8ed294d6cd265cb4c3478ef90432f9506abfc1cc6c5c6a8cef55f91a87a95f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        
        $__internal_8ed294d6cd265cb4c3478ef90432f9506abfc1cc6c5c6a8cef55f91a87a95f62->leave($__internal_8ed294d6cd265cb4c3478ef90432f9506abfc1cc6c5c6a8cef55f91a87a95f62_prof);

        
        $__internal_38d1f95cc4e265ba13c9c7a1f36345b206b440dc99b494953c28077e88ea47a2->leave($__internal_38d1f95cc4e265ba13c9c7a1f36345b206b440dc99b494953c28077e88ea47a2_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_0af28f2d1b6e68fd209017157b4a841a86149100a156bbc96b2cd4c730c02a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af28f2d1b6e68fd209017157b4a841a86149100a156bbc96b2cd4c730c02a50->enter($__internal_0af28f2d1b6e68fd209017157b4a841a86149100a156bbc96b2cd4c730c02a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9be247c0e050246ce26b720fffaa6f8864a7baf9360b073e0cb8f205f58f593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be247c0e050246ce26b720fffaa6f8864a7baf9360b073e0cb8f205f58f593c->enter($__internal_9be247c0e050246ce26b720fffaa6f8864a7baf9360b073e0cb8f205f58f593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "
    ";
        
        $__internal_9be247c0e050246ce26b720fffaa6f8864a7baf9360b073e0cb8f205f58f593c->leave($__internal_9be247c0e050246ce26b720fffaa6f8864a7baf9360b073e0cb8f205f58f593c_prof);

        
        $__internal_0af28f2d1b6e68fd209017157b4a841a86149100a156bbc96b2cd4c730c02a50->leave($__internal_0af28f2d1b6e68fd209017157b4a841a86149100a156bbc96b2cd4c730c02a50_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc236a6d530893d3d884096b53faff389a98cb4c52f66c438bfd23109d9a7118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc236a6d530893d3d884096b53faff389a98cb4c52f66c438bfd23109d9a7118->enter($__internal_cc236a6d530893d3d884096b53faff389a98cb4c52f66c438bfd23109d9a7118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_484ec5da5c46601c4951c0b3fab734620c02dc6cd15cba037d4006cb862dedce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484ec5da5c46601c4951c0b3fab734620c02dc6cd15cba037d4006cb862dedce->enter($__internal_484ec5da5c46601c4951c0b3fab734620c02dc6cd15cba037d4006cb862dedce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    ";
        
        $__internal_484ec5da5c46601c4951c0b3fab734620c02dc6cd15cba037d4006cb862dedce->leave($__internal_484ec5da5c46601c4951c0b3fab734620c02dc6cd15cba037d4006cb862dedce_prof);

        
        $__internal_cc236a6d530893d3d884096b53faff389a98cb4c52f66c438bfd23109d9a7118->leave($__internal_cc236a6d530893d3d884096b53faff389a98cb4c52f66c438bfd23109d9a7118_prof);

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
        return array (  294 => 127,  285 => 126,  274 => 123,  265 => 122,  255 => 15,  246 => 14,  229 => 6,  216 => 128,  214 => 126,  211 => 125,  209 => 122,  199 => 114,  193 => 111,  190 => 110,  182 => 105,  173 => 99,  168 => 97,  163 => 94,  161 => 93,  157 => 91,  150 => 86,  144 => 82,  142 => 81,  136 => 77,  134 => 76,  128 => 72,  122 => 68,  120 => 67,  111 => 60,  105 => 56,  103 => 55,  94 => 48,  88 => 44,  86 => 43,  77 => 36,  71 => 32,  69 => 31,  54 => 19,  49 => 16,  47 => 14,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        <style>
            @import '/css/flash.css';
            @import '/css/header.css';
            @import '/css/default.css';
            @import '/css/nav.css';
            @import '/css/img.css';
            @import '/css/table.css';
            {% block stylesheets %}
            {% endblock %}
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
                        {% if app.request.attributes.get('_route') == 'collection_index'  %}

                            id=\"current\"

                        {% endif %}

                        href=\"/collection/\"><span>Collections</span>
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
                {% if is_granted('ROLE_ADMIN') %}


                <li>
                    <a
                            {% if app.request.attributes.get('_route') == 'user_index'  %}

                                id=\"current\"

                            {% endif %}

                            href=\"/user/\"><span>Users</span>
                    </a>
                </li>
                {% endif %}


    {% if is_granted('ROLE_USER') %}

        hi,

            <a href=\"{{ path('account_index') }}\">

                 <strong>{{ app.user.username }}</strong>

            </a>
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
