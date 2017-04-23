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
        $__internal_485d68909bf76bc4046ad24a69937fb7f2d8293309420275c136f1a18f672f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485d68909bf76bc4046ad24a69937fb7f2d8293309420275c136f1a18f672f43->enter($__internal_485d68909bf76bc4046ad24a69937fb7f2d8293309420275c136f1a18f672f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2ed8b4b586cf6150854f84f6ac021db1395db1532facff23a3e58be0e9eb4f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8b4b586cf6150854f84f6ac021db1395db1532facff23a3e58be0e9eb4f62->enter($__internal_2ed8b4b586cf6150854f84f6ac021db1395db1532facff23a3e58be0e9eb4f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_485d68909bf76bc4046ad24a69937fb7f2d8293309420275c136f1a18f672f43->leave($__internal_485d68909bf76bc4046ad24a69937fb7f2d8293309420275c136f1a18f672f43_prof);

        
        $__internal_2ed8b4b586cf6150854f84f6ac021db1395db1532facff23a3e58be0e9eb4f62->leave($__internal_2ed8b4b586cf6150854f84f6ac021db1395db1532facff23a3e58be0e9eb4f62_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_872ea8a1f3640368e8cae6793751e887e47abea5f469d3953f301dbf063f92b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872ea8a1f3640368e8cae6793751e887e47abea5f469d3953f301dbf063f92b1->enter($__internal_872ea8a1f3640368e8cae6793751e887e47abea5f469d3953f301dbf063f92b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b37a05ca71378a38c7ec202cbcf407424d24d59659da03e6ba15bf6d01d5b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b37a05ca71378a38c7ec202cbcf407424d24d59659da03e6ba15bf6d01d5b99->enter($__internal_1b37a05ca71378a38c7ec202cbcf407424d24d59659da03e6ba15bf6d01d5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1b37a05ca71378a38c7ec202cbcf407424d24d59659da03e6ba15bf6d01d5b99->leave($__internal_1b37a05ca71378a38c7ec202cbcf407424d24d59659da03e6ba15bf6d01d5b99_prof);

        
        $__internal_872ea8a1f3640368e8cae6793751e887e47abea5f469d3953f301dbf063f92b1->leave($__internal_872ea8a1f3640368e8cae6793751e887e47abea5f469d3953f301dbf063f92b1_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a32c003f1150e6cfea299273eca6088b7c82aff47d779f33043067f621a7971c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32c003f1150e6cfea299273eca6088b7c82aff47d779f33043067f621a7971c->enter($__internal_a32c003f1150e6cfea299273eca6088b7c82aff47d779f33043067f621a7971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40ce10a3120763bdb15317fe68a7450de7efc2deabc0535e0f1a7e7e29818f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ce10a3120763bdb15317fe68a7450de7efc2deabc0535e0f1a7e7e29818f16->enter($__internal_40ce10a3120763bdb15317fe68a7450de7efc2deabc0535e0f1a7e7e29818f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        
        $__internal_40ce10a3120763bdb15317fe68a7450de7efc2deabc0535e0f1a7e7e29818f16->leave($__internal_40ce10a3120763bdb15317fe68a7450de7efc2deabc0535e0f1a7e7e29818f16_prof);

        
        $__internal_a32c003f1150e6cfea299273eca6088b7c82aff47d779f33043067f621a7971c->leave($__internal_a32c003f1150e6cfea299273eca6088b7c82aff47d779f33043067f621a7971c_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6668a344869807dc990503dbc75f69a32d31e87b7eca6008bc17c7158dd39cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6668a344869807dc990503dbc75f69a32d31e87b7eca6008bc17c7158dd39cf->enter($__internal_a6668a344869807dc990503dbc75f69a32d31e87b7eca6008bc17c7158dd39cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dd508955aa7b47542803def6dcc5f0dff2f5b305b802aa61b8b120525a4586f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd508955aa7b47542803def6dcc5f0dff2f5b305b802aa61b8b120525a4586f->enter($__internal_6dd508955aa7b47542803def6dcc5f0dff2f5b305b802aa61b8b120525a4586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "
    ";
        
        $__internal_6dd508955aa7b47542803def6dcc5f0dff2f5b305b802aa61b8b120525a4586f->leave($__internal_6dd508955aa7b47542803def6dcc5f0dff2f5b305b802aa61b8b120525a4586f_prof);

        
        $__internal_a6668a344869807dc990503dbc75f69a32d31e87b7eca6008bc17c7158dd39cf->leave($__internal_a6668a344869807dc990503dbc75f69a32d31e87b7eca6008bc17c7158dd39cf_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75eb8306db5d9424f004800b7df7f23807c74f2770953f9ab0c024e7d52767d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75eb8306db5d9424f004800b7df7f23807c74f2770953f9ab0c024e7d52767d1->enter($__internal_75eb8306db5d9424f004800b7df7f23807c74f2770953f9ab0c024e7d52767d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eee801795447dcc44fb0e492119e620bd6093d899fd785e29e15e34f9874557d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee801795447dcc44fb0e492119e620bd6093d899fd785e29e15e34f9874557d->enter($__internal_eee801795447dcc44fb0e492119e620bd6093d899fd785e29e15e34f9874557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        
        $__internal_eee801795447dcc44fb0e492119e620bd6093d899fd785e29e15e34f9874557d->leave($__internal_eee801795447dcc44fb0e492119e620bd6093d899fd785e29e15e34f9874557d_prof);

        
        $__internal_75eb8306db5d9424f004800b7df7f23807c74f2770953f9ab0c024e7d52767d1->leave($__internal_75eb8306db5d9424f004800b7df7f23807c74f2770953f9ab0c024e7d52767d1_prof);

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
