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
        $__internal_c745dfb7d7827aed59152e12d7434dfb4341515d90f223c1ff6a89b5af34e062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c745dfb7d7827aed59152e12d7434dfb4341515d90f223c1ff6a89b5af34e062->enter($__internal_c745dfb7d7827aed59152e12d7434dfb4341515d90f223c1ff6a89b5af34e062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5bdf95b2ceaf2125e19732973400703f765230a377a8b95eb296c0806b4d5b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdf95b2ceaf2125e19732973400703f765230a377a8b95eb296c0806b4d5b57->enter($__internal_5bdf95b2ceaf2125e19732973400703f765230a377a8b95eb296c0806b4d5b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 78
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 79
            echo "
        hi,

            <a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
            echo "\">

                 <strong>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>

            </a>
        <br>


        <li><a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">logout</a></li>



    ";
        } else {
            // line 95
            echo "
        <li><a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">login</a></li>

    ";
        }
        // line 99
        echo "
            </ul>

        </nav>

    </header>


    ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
    </body>
</html>
";
        
        $__internal_c745dfb7d7827aed59152e12d7434dfb4341515d90f223c1ff6a89b5af34e062->leave($__internal_c745dfb7d7827aed59152e12d7434dfb4341515d90f223c1ff6a89b5af34e062_prof);

        
        $__internal_5bdf95b2ceaf2125e19732973400703f765230a377a8b95eb296c0806b4d5b57->leave($__internal_5bdf95b2ceaf2125e19732973400703f765230a377a8b95eb296c0806b4d5b57_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_36be8dcfa9699f7dd69e9322462ca540c57e0daeeca269be549e74d3778ef8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36be8dcfa9699f7dd69e9322462ca540c57e0daeeca269be549e74d3778ef8c1->enter($__internal_36be8dcfa9699f7dd69e9322462ca540c57e0daeeca269be549e74d3778ef8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_017223677b27f7b3668e17cbf4ab87b569871febd79b999f556a383ec5c73f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017223677b27f7b3668e17cbf4ab87b569871febd79b999f556a383ec5c73f66->enter($__internal_017223677b27f7b3668e17cbf4ab87b569871febd79b999f556a383ec5c73f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_017223677b27f7b3668e17cbf4ab87b569871febd79b999f556a383ec5c73f66->leave($__internal_017223677b27f7b3668e17cbf4ab87b569871febd79b999f556a383ec5c73f66_prof);

        
        $__internal_36be8dcfa9699f7dd69e9322462ca540c57e0daeeca269be549e74d3778ef8c1->leave($__internal_36be8dcfa9699f7dd69e9322462ca540c57e0daeeca269be549e74d3778ef8c1_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ed4d29c1b0e7b7f4116b024a56f0a213d3ec4f505695d28800797f446eaa16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed4d29c1b0e7b7f4116b024a56f0a213d3ec4f505695d28800797f446eaa16c->enter($__internal_6ed4d29c1b0e7b7f4116b024a56f0a213d3ec4f505695d28800797f446eaa16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc7f0d3898e993384218ace8f4a0d49c4aa2720690595114e3356c43f900fab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7f0d3898e993384218ace8f4a0d49c4aa2720690595114e3356c43f900fab4->enter($__internal_cc7f0d3898e993384218ace8f4a0d49c4aa2720690595114e3356c43f900fab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        
        $__internal_cc7f0d3898e993384218ace8f4a0d49c4aa2720690595114e3356c43f900fab4->leave($__internal_cc7f0d3898e993384218ace8f4a0d49c4aa2720690595114e3356c43f900fab4_prof);

        
        $__internal_6ed4d29c1b0e7b7f4116b024a56f0a213d3ec4f505695d28800797f446eaa16c->leave($__internal_6ed4d29c1b0e7b7f4116b024a56f0a213d3ec4f505695d28800797f446eaa16c_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_d91615ea39a3ef47eb9826bb8c685a167449d3150d7b159dbb139195c488c47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91615ea39a3ef47eb9826bb8c685a167449d3150d7b159dbb139195c488c47b->enter($__internal_d91615ea39a3ef47eb9826bb8c685a167449d3150d7b159dbb139195c488c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7243b2315a5bc256f951b46652908f03d965e82ce96a026d45d219889fb77c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7243b2315a5bc256f951b46652908f03d965e82ce96a026d45d219889fb77c8e->enter($__internal_7243b2315a5bc256f951b46652908f03d965e82ce96a026d45d219889fb77c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "
    ";
        
        $__internal_7243b2315a5bc256f951b46652908f03d965e82ce96a026d45d219889fb77c8e->leave($__internal_7243b2315a5bc256f951b46652908f03d965e82ce96a026d45d219889fb77c8e_prof);

        
        $__internal_d91615ea39a3ef47eb9826bb8c685a167449d3150d7b159dbb139195c488c47b->leave($__internal_d91615ea39a3ef47eb9826bb8c685a167449d3150d7b159dbb139195c488c47b_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be35c52c0078c9046b6ace5a5b7ae770d5cdcdd90ce3e141cd6cf329f1d21f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be35c52c0078c9046b6ace5a5b7ae770d5cdcdd90ce3e141cd6cf329f1d21f1b->enter($__internal_be35c52c0078c9046b6ace5a5b7ae770d5cdcdd90ce3e141cd6cf329f1d21f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5569ea719c31b9055707b5ec57692471e9e10fd0d809e7506475ad75c2c57a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5569ea719c31b9055707b5ec57692471e9e10fd0d809e7506475ad75c2c57a6->enter($__internal_d5569ea719c31b9055707b5ec57692471e9e10fd0d809e7506475ad75c2c57a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        
        $__internal_d5569ea719c31b9055707b5ec57692471e9e10fd0d809e7506475ad75c2c57a6->leave($__internal_d5569ea719c31b9055707b5ec57692471e9e10fd0d809e7506475ad75c2c57a6_prof);

        
        $__internal_be35c52c0078c9046b6ace5a5b7ae770d5cdcdd90ce3e141cd6cf329f1d21f1b->leave($__internal_be35c52c0078c9046b6ace5a5b7ae770d5cdcdd90ce3e141cd6cf329f1d21f1b_prof);

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
        return array (  269 => 112,  260 => 111,  249 => 108,  240 => 107,  230 => 15,  221 => 14,  204 => 6,  191 => 113,  189 => 111,  186 => 110,  184 => 107,  174 => 99,  168 => 96,  165 => 95,  157 => 90,  148 => 84,  143 => 82,  138 => 79,  136 => 78,  128 => 72,  122 => 68,  120 => 67,  111 => 60,  105 => 56,  103 => 55,  94 => 48,  88 => 44,  86 => 43,  77 => 36,  71 => 32,  69 => 31,  54 => 19,  49 => 16,  47 => 14,  36 => 6,  29 => 1,);
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
