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
        $__internal_aa49c1af7e9d3faf7b2556f952220da64f19e5ffd0c4ac0a5e069f79e5c95401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa49c1af7e9d3faf7b2556f952220da64f19e5ffd0c4ac0a5e069f79e5c95401->enter($__internal_aa49c1af7e9d3faf7b2556f952220da64f19e5ffd0c4ac0a5e069f79e5c95401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8dbf04c3a769fe45c44d59bc1eb7881a1057d4b0c5b4d3611ae82fbe7a6f5121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbf04c3a769fe45c44d59bc1eb7881a1057d4b0c5b4d3611ae82fbe7a6f5121->enter($__internal_8dbf04c3a769fe45c44d59bc1eb7881a1057d4b0c5b4d3611ae82fbe7a6f5121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "collection_index")) {
            // line 65
            echo "
                                id=\"current\"

                            ";
        }
        // line 69
        echo "
                            href=\"/collection/\"><span>Collections</span>
                    </a>
                </li>

                <li>
                    <a
                            ";
        // line 76
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tag_index")) {
            // line 77
            echo "
                                id=\"current\"

                            ";
        }
        // line 81
        echo "
                            href=\"/tag/\"><span>Tags</span>
                    </a>
                </li>


    ";
        // line 87
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 88
            echo "        You are logged in as:  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong></a>
        <br>
        <li><a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">logout</a></li>

    ";
        } else {
            // line 93
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">login</a></li>

    ";
        }
        // line 96
        echo "                <li style=\"display: flex\">
                    <form action=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_index");
        echo "\" method=\"post\">
                        ";
        // line 99
        echo "                        <input name=\"search\" type=\"search\" placeholder=\"Search\" >
                        <input type=\"submit\" value=\"Search\">
                    </form>

                </li>

            </ul>
        </nav>
    </header>


    ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "
        ";
        // line 113
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "
    </body>
</html>
";
        
        $__internal_aa49c1af7e9d3faf7b2556f952220da64f19e5ffd0c4ac0a5e069f79e5c95401->leave($__internal_aa49c1af7e9d3faf7b2556f952220da64f19e5ffd0c4ac0a5e069f79e5c95401_prof);

        
        $__internal_8dbf04c3a769fe45c44d59bc1eb7881a1057d4b0c5b4d3611ae82fbe7a6f5121->leave($__internal_8dbf04c3a769fe45c44d59bc1eb7881a1057d4b0c5b4d3611ae82fbe7a6f5121_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_314c193780bc94305a5a95b197dbcc87609644a616bd23c2fc6341033b9e885c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314c193780bc94305a5a95b197dbcc87609644a616bd23c2fc6341033b9e885c->enter($__internal_314c193780bc94305a5a95b197dbcc87609644a616bd23c2fc6341033b9e885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2468a413028bbf0f08f5bf96b410b0e60b454bfcd1e57454cdf63ce007411df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2468a413028bbf0f08f5bf96b410b0e60b454bfcd1e57454cdf63ce007411df8->enter($__internal_2468a413028bbf0f08f5bf96b410b0e60b454bfcd1e57454cdf63ce007411df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NURL - Home ";
        
        $__internal_2468a413028bbf0f08f5bf96b410b0e60b454bfcd1e57454cdf63ce007411df8->leave($__internal_2468a413028bbf0f08f5bf96b410b0e60b454bfcd1e57454cdf63ce007411df8_prof);

        
        $__internal_314c193780bc94305a5a95b197dbcc87609644a616bd23c2fc6341033b9e885c->leave($__internal_314c193780bc94305a5a95b197dbcc87609644a616bd23c2fc6341033b9e885c_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ad096ccfcb59a2a8702612afeb8eb5514b1035e3bc316ff89483d54e970c10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad096ccfcb59a2a8702612afeb8eb5514b1035e3bc316ff89483d54e970c10a->enter($__internal_8ad096ccfcb59a2a8702612afeb8eb5514b1035e3bc316ff89483d54e970c10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91e151eba6b9ce1b47cc9f74838ea3382f69ade0bc5134cbc768b152bf743d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e151eba6b9ce1b47cc9f74838ea3382f69ade0bc5134cbc768b152bf743d70->enter($__internal_91e151eba6b9ce1b47cc9f74838ea3382f69ade0bc5134cbc768b152bf743d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "            ";
        
        $__internal_91e151eba6b9ce1b47cc9f74838ea3382f69ade0bc5134cbc768b152bf743d70->leave($__internal_91e151eba6b9ce1b47cc9f74838ea3382f69ade0bc5134cbc768b152bf743d70_prof);

        
        $__internal_8ad096ccfcb59a2a8702612afeb8eb5514b1035e3bc316ff89483d54e970c10a->leave($__internal_8ad096ccfcb59a2a8702612afeb8eb5514b1035e3bc316ff89483d54e970c10a_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_7830f10fd4ae77d521820795d4d48b5f3ffbffe56cd2cf4bbe833604d5d7c8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7830f10fd4ae77d521820795d4d48b5f3ffbffe56cd2cf4bbe833604d5d7c8de->enter($__internal_7830f10fd4ae77d521820795d4d48b5f3ffbffe56cd2cf4bbe833604d5d7c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ee0abbabfd3aa0377d0aa54c16fba0f90e509c5e6b7845c8d4968f58dad7fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee0abbabfd3aa0377d0aa54c16fba0f90e509c5e6b7845c8d4968f58dad7fbf->enter($__internal_5ee0abbabfd3aa0377d0aa54c16fba0f90e509c5e6b7845c8d4968f58dad7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "    ";
        
        $__internal_5ee0abbabfd3aa0377d0aa54c16fba0f90e509c5e6b7845c8d4968f58dad7fbf->leave($__internal_5ee0abbabfd3aa0377d0aa54c16fba0f90e509c5e6b7845c8d4968f58dad7fbf_prof);

        
        $__internal_7830f10fd4ae77d521820795d4d48b5f3ffbffe56cd2cf4bbe833604d5d7c8de->leave($__internal_7830f10fd4ae77d521820795d4d48b5f3ffbffe56cd2cf4bbe833604d5d7c8de_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_647cf22c06db351bca0eaab7eda8619edef6fe31147634ed6381dc9f25c0c3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647cf22c06db351bca0eaab7eda8619edef6fe31147634ed6381dc9f25c0c3e0->enter($__internal_647cf22c06db351bca0eaab7eda8619edef6fe31147634ed6381dc9f25c0c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21999985d3037e1e604475112af4700953b38e14d70ad16eeac4333751c8c25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21999985d3037e1e604475112af4700953b38e14d70ad16eeac4333751c8c25b->enter($__internal_21999985d3037e1e604475112af4700953b38e14d70ad16eeac4333751c8c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "        ";
        
        $__internal_21999985d3037e1e604475112af4700953b38e14d70ad16eeac4333751c8c25b->leave($__internal_21999985d3037e1e604475112af4700953b38e14d70ad16eeac4333751c8c25b_prof);

        
        $__internal_647cf22c06db351bca0eaab7eda8619edef6fe31147634ed6381dc9f25c0c3e0->leave($__internal_647cf22c06db351bca0eaab7eda8619edef6fe31147634ed6381dc9f25c0c3e0_prof);

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
        return array (  274 => 114,  265 => 113,  255 => 111,  246 => 110,  236 => 23,  227 => 22,  209 => 15,  196 => 115,  194 => 113,  191 => 112,  189 => 110,  176 => 99,  172 => 97,  169 => 96,  162 => 93,  156 => 90,  148 => 88,  146 => 87,  138 => 81,  132 => 77,  130 => 76,  121 => 69,  115 => 65,  113 => 64,  104 => 57,  98 => 53,  96 => 52,  87 => 45,  81 => 41,  79 => 40,  66 => 30,  61 => 27,  59 => 26,  56 => 24,  54 => 22,  44 => 15,  37 => 10,  33 => 4,  31 => 3,  29 => 1,);
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
        You are logged in as:  <a href=\"{{ path('account_index') }}\"><strong>{{ app.user.username }}</strong></a>
        <br>
        <li><a href=\"{{ path('logout') }}\">logout</a></li>

    {% else %}
        <li><a href=\"{{ path('login') }}\">login</a></li>

    {% endif %}
                <li style=\"display: flex\">
                    <form action=\"{{ path('search_index') }}\" method=\"post\">
                        {#<input type=\"text\" name=\"search\" placeholder=\"Search\" value=\"\">#}
                        <input name=\"search\" type=\"search\" placeholder=\"Search\" >
                        <input type=\"submit\" value=\"Search\">
                    </form>

                </li>

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
