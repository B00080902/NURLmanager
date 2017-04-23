<?php

/* nurl/proposed.html.twig */
class __TwigTemplate_76b17672f06c43dd8384bc9939169286e7dd0b8c526b7e43368e335fef55f4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/proposed.html.twig", 1);
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
        $__internal_b806113db9b096ad7e77ae4fcbfdd178465eaf1dcd9af87d24c7baf038c8a000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b806113db9b096ad7e77ae4fcbfdd178465eaf1dcd9af87d24c7baf038c8a000->enter($__internal_b806113db9b096ad7e77ae4fcbfdd178465eaf1dcd9af87d24c7baf038c8a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/proposed.html.twig"));

        $__internal_7b05fdebbd350dd733c291ebea4edc4ed444b7ac5f9bef56b3f44b690c6e0e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b05fdebbd350dd733c291ebea4edc4ed444b7ac5f9bef56b3f44b690c6e0e8a->enter($__internal_7b05fdebbd350dd733c291ebea4edc4ed444b7ac5f9bef56b3f44b690c6e0e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/proposed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b806113db9b096ad7e77ae4fcbfdd178465eaf1dcd9af87d24c7baf038c8a000->leave($__internal_b806113db9b096ad7e77ae4fcbfdd178465eaf1dcd9af87d24c7baf038c8a000_prof);

        
        $__internal_7b05fdebbd350dd733c291ebea4edc4ed444b7ac5f9bef56b3f44b690c6e0e8a->leave($__internal_7b05fdebbd350dd733c291ebea4edc4ed444b7ac5f9bef56b3f44b690c6e0e8a_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_818ca2f2992ae14d21af37fab5d59957689121a98cab25937da5d10121a785fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818ca2f2992ae14d21af37fab5d59957689121a98cab25937da5d10121a785fc->enter($__internal_818ca2f2992ae14d21af37fab5d59957689121a98cab25937da5d10121a785fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_75696b14187a85969de8d1fb6b03cf55a141aa58024eec4ece7b65b8b67d23e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75696b14187a85969de8d1fb6b03cf55a141aa58024eec4ece7b65b8b67d23e8->enter($__internal_75696b14187a85969de8d1fb6b03cf55a141aa58024eec4ece7b65b8b67d23e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Nurls  ";
        
        $__internal_75696b14187a85969de8d1fb6b03cf55a141aa58024eec4ece7b65b8b67d23e8->leave($__internal_75696b14187a85969de8d1fb6b03cf55a141aa58024eec4ece7b65b8b67d23e8_prof);

        
        $__internal_818ca2f2992ae14d21af37fab5d59957689121a98cab25937da5d10121a785fc->leave($__internal_818ca2f2992ae14d21af37fab5d59957689121a98cab25937da5d10121a785fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_84568bc89d5bb845788ecf7b01686bd2ac3d3b8dc14930a017b745f77a95fe54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84568bc89d5bb845788ecf7b01686bd2ac3d3b8dc14930a017b745f77a95fe54->enter($__internal_84568bc89d5bb845788ecf7b01686bd2ac3d3b8dc14930a017b745f77a95fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9c95a5f2597867755d7d79b039d29a5745a3184a71e08b067d7eabf60d0a8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c95a5f2597867755d7d79b039d29a5745a3184a71e08b067d7eabf60d0a8e8->enter($__internal_f9c95a5f2597867755d7d79b039d29a5745a3184a71e08b067d7eabf60d0a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"headerTable\" >

        <h1 style=\"text-align: center\">Nurls list</h1>

        ";
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            echo "
            <div class=\"flash-notice\">

                ";
            // line 16
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "
            <a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_seeAll");
            echo "\">Review suggested nurls</a>

        ";
        }
        // line 28
        echo "
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_proposed");
        echo "\">Proposed nurls</a>
    </div>

    <table style=\"text-align: center\">

        ";
        // line 35
        echo "
        <thead>

        <tr>

            <th>Id</th>

            <th>Url</th>

            <th>Title</th>

            <th>Content</th>

            ";
        // line 48
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 49
            echo "
                <th>Actions</th>

            ";
        }
        // line 53
        echo "
            <th>Approved</th>

        </tr>

        </thead>

        <tbody>

        ";
        // line 63
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 64
            echo "
            ";
            // line 66
            echo "            ";
            if ((($this->getAttribute($context["nurl"], "public", array()) == "Public") &&  !$this->getAttribute($context["nurl"], "approved", array()))) {
                // line 67
                echo "
                ";
                // line 69
                echo "                <tr>

                    <td><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>


                    ";
                // line 81
                echo "                    ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
                    // line 82
                    echo "
                        <td>
                            <ul>

                                <li>
                                    <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                </li>

                                <li>
                                    <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                </li>

                                <li>
                                    <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_report", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">Report</a>
                                </li>

                            </ul>

                        </td>

                    ";
                }
                // line 103
                echo "
                    <td>
                        ";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "approved", array()), "html", null, true);
                echo "
                    </td>

                </tr>

            ";
            }
            // line 111
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
        </tbody>

    </table>


    <ul>

        <li>

            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 124
            echo "
                <div class=\"flash-notice\">

                    <h3>Warning</h3>

                    <h5>";
            // line 129
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h5>

                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
            <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>

        </li>

    </ul>
";
        
        $__internal_f9c95a5f2597867755d7d79b039d29a5745a3184a71e08b067d7eabf60d0a8e8->leave($__internal_f9c95a5f2597867755d7d79b039d29a5745a3184a71e08b067d7eabf60d0a8e8_prof);

        
        $__internal_84568bc89d5bb845788ecf7b01686bd2ac3d3b8dc14930a017b745f77a95fe54->leave($__internal_84568bc89d5bb845788ecf7b01686bd2ac3d3b8dc14930a017b745f77a95fe54_prof);

    }

    public function getTemplateName()
    {
        return "nurl/proposed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 135,  286 => 134,  275 => 129,  268 => 124,  264 => 123,  252 => 113,  245 => 111,  236 => 105,  232 => 103,  221 => 95,  214 => 91,  207 => 87,  200 => 82,  197 => 81,  191 => 77,  186 => 75,  181 => 73,  174 => 71,  170 => 69,  167 => 67,  164 => 66,  161 => 64,  156 => 63,  145 => 53,  139 => 49,  137 => 48,  122 => 35,  114 => 29,  111 => 28,  105 => 25,  102 => 24,  99 => 23,  96 => 21,  85 => 16,  80 => 13,  75 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}Nurls  {% endblock %}

{% block body %}

    <div id=\"headerTable\" >

        <h1 style=\"text-align: center\">Nurls list</h1>

        {# Notice whe user submits a report #}
        {% for flash_message in app.session.flashBag.get('notice') %}

            <div class=\"flash-notice\">

                {{ flash_message }}

            </div>

        {% endfor %}

        {# Only Admins are able to CRUD any nurls #}
        {% if is_granted('ROLE_ADMIN') %}

            <a href=\"{{ path('nurl_seeAll') }}\">Review suggested nurls</a>

        {% endif %}

        <a href=\"{{  path('nurl_proposed') }}\">Proposed nurls</a>
    </div>

    <table style=\"text-align: center\">

        {# Table head #}

        <thead>

        <tr>

            <th>Id</th>

            <th>Url</th>

            <th>Title</th>

            <th>Content</th>

            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}

                <th>Actions</th>

            {% endif %}

            <th>Approved</th>

        </tr>

        </thead>

        <tbody>

        {# Show all nurls #}
        {% for nurl in nurls %}

            {# Show the nurls only if they're defined as public #}
            {% if nurl.public == 'Public' and not nurl.approved %}

                {# -------- NURL table --------- #}
                <tr>

                    <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>

                    <td>{{ nurl.url }}</td>

                    <td>{{ nurl.title }}</td>

                    <td>{{ nurl.content }}</td>


                    {# Anon and User CRUD options #}
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}

                        <td>
                            <ul>

                                <li>
                                    <a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">show</a>
                                </li>

                                <li>
                                    <a href=\"{{ path('nurl_edit', { 'id': nurl.id }) }}\">edit</a>
                                </li>

                                <li>
                                    <a href=\"{{ path('nurl_report', { 'id': nurl.id }) }}\">Report</a>
                                </li>

                            </ul>

                        </td>

                    {% endif %}

                    <td>
                        {{ nurl.approved }}
                    </td>

                </tr>

            {% endif %}

        {% endfor %}

        </tbody>

    </table>


    <ul>

        <li>

            {% for flash_message in app.session.flashBag.get('notice') %}

                <div class=\"flash-notice\">

                    <h3>Warning</h3>

                    <h5>{{ flash_message }}</h5>

                </div>

            {% endfor %}

            <a href=\"{{ path('nurl_new') }}\">Create a new nurl</a>

        </li>

    </ul>
{% endblock %}
", "nurl/proposed.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\proposed.html.twig");
    }
}
