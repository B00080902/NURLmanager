<?php

/* nurl/index.html.twig */
class __TwigTemplate_dd4b0f5b7c2623336307e2901952c48372fde31de5f07761480a377c04a01e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/index.html.twig", 1);
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
        $__internal_161fa784b261a6e04b5083fc123fe5d55adb9e69f90b5ec739960a96e970dc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161fa784b261a6e04b5083fc123fe5d55adb9e69f90b5ec739960a96e970dc72->enter($__internal_161fa784b261a6e04b5083fc123fe5d55adb9e69f90b5ec739960a96e970dc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $__internal_c3547178cbd9df535682fa85353fb573f76253dd2eb048a308a3ec697d3994f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3547178cbd9df535682fa85353fb573f76253dd2eb048a308a3ec697d3994f7->enter($__internal_c3547178cbd9df535682fa85353fb573f76253dd2eb048a308a3ec697d3994f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161fa784b261a6e04b5083fc123fe5d55adb9e69f90b5ec739960a96e970dc72->leave($__internal_161fa784b261a6e04b5083fc123fe5d55adb9e69f90b5ec739960a96e970dc72_prof);

        
        $__internal_c3547178cbd9df535682fa85353fb573f76253dd2eb048a308a3ec697d3994f7->leave($__internal_c3547178cbd9df535682fa85353fb573f76253dd2eb048a308a3ec697d3994f7_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_57340cf4c97a800826979cb30fa30059ca858a6bfe99f83d2f51bd01fa15b9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57340cf4c97a800826979cb30fa30059ca858a6bfe99f83d2f51bd01fa15b9f3->enter($__internal_57340cf4c97a800826979cb30fa30059ca858a6bfe99f83d2f51bd01fa15b9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_f17e07cb8eca5378c21c1e6e332c5f132bed0a017a4fa087648f1d19909163ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17e07cb8eca5378c21c1e6e332c5f132bed0a017a4fa087648f1d19909163ab->enter($__internal_f17e07cb8eca5378c21c1e6e332c5f132bed0a017a4fa087648f1d19909163ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Nurls  ";
        
        $__internal_f17e07cb8eca5378c21c1e6e332c5f132bed0a017a4fa087648f1d19909163ab->leave($__internal_f17e07cb8eca5378c21c1e6e332c5f132bed0a017a4fa087648f1d19909163ab_prof);

        
        $__internal_57340cf4c97a800826979cb30fa30059ca858a6bfe99f83d2f51bd01fa15b9f3->leave($__internal_57340cf4c97a800826979cb30fa30059ca858a6bfe99f83d2f51bd01fa15b9f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c997cb63e9624cd352815534f2c9d2709196aa8ad1f3ccfc5dbc0526dd1f2f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c997cb63e9624cd352815534f2c9d2709196aa8ad1f3ccfc5dbc0526dd1f2f1e->enter($__internal_c997cb63e9624cd352815534f2c9d2709196aa8ad1f3ccfc5dbc0526dd1f2f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a49db9247abad9e3f0a5b5a6c9e9e63a7f28a7f51a9e13bdf23d005976b7d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a49db9247abad9e3f0a5b5a6c9e9e63a7f28a7f51a9e13bdf23d005976b7d25->enter($__internal_3a49db9247abad9e3f0a5b5a6c9e9e63a7f28a7f51a9e13bdf23d005976b7d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"headerTable\" >

            <h1 style=\"text-align: center\">Nurls list</h1>

            ";
        // line 12
        echo "            ";
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
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
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
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
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
        // line 64
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 65
            echo "
            ";
            // line 67
            echo "            ";
            if ((($this->getAttribute($context["nurl"], "public", array()) == "Public") && $this->getAttribute($context["nurl"], "approved", array()))) {
                // line 68
                echo "
                ";
                // line 70
                echo "                <tr>

                    <td><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>


                    ";
                // line 82
                echo "                    ";
                if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["nurl"], "user", array()), "username", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                    // line 83
                    echo "
                    <td>
                        <ul>

                            <li>
                                <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_report", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                    echo "\">Report</a>
                            </li>

                        </ul>

                    </td>

                    ";
                }
                // line 104
                echo "
                    <td>
                        ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "approved", array()), "html", null, true);
                echo "
                    </td>

                </tr>

            ";
            }
            // line 112
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
        </tbody>

    </table>


    <ul>

        <li>

            ";
        // line 125
        echo "
                ";
        // line 127
        echo "
                    ";
        // line 129
        echo "
                    ";
        // line 131
        echo "
                ";
        // line 133
        echo "
            ";
        // line 135
        echo "
            <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>

        </li>

    </ul>
";
        
        $__internal_3a49db9247abad9e3f0a5b5a6c9e9e63a7f28a7f51a9e13bdf23d005976b7d25->leave($__internal_3a49db9247abad9e3f0a5b5a6c9e9e63a7f28a7f51a9e13bdf23d005976b7d25_prof);

        
        $__internal_c997cb63e9624cd352815534f2c9d2709196aa8ad1f3ccfc5dbc0526dd1f2f1e->leave($__internal_c997cb63e9624cd352815534f2c9d2709196aa8ad1f3ccfc5dbc0526dd1f2f1e_prof);

    }

    public function getTemplateName()
    {
        return "nurl/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 136,  280 => 135,  277 => 133,  274 => 131,  271 => 129,  268 => 127,  265 => 125,  253 => 114,  246 => 112,  237 => 106,  233 => 104,  222 => 96,  215 => 92,  208 => 88,  201 => 83,  198 => 82,  192 => 78,  187 => 76,  182 => 74,  175 => 72,  171 => 70,  168 => 68,  165 => 67,  162 => 65,  157 => 64,  145 => 53,  139 => 49,  137 => 48,  122 => 35,  114 => 29,  111 => 28,  105 => 25,  102 => 24,  99 => 23,  96 => 21,  85 => 16,  80 => 13,  75 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
            {% if is_granted('ROLE_MODERATOR') %}

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

                {% if app.user.username == nurl.user or is_granted('ROLE_ADMIN') %}

                <th>Actions</th>

                {% endif %}

                <th>Approved</th>


            </tr>

        </thead>

        <tbody>

        {# Show all nurls #}
        {% for nurl in nurls %}

            {# Show the nurls only if they're defined as public #}
            {% if nurl.public == 'Public' and nurl.approved %}

                {# -------- NURL table --------- #}
                <tr>

                    <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>

                    <td>{{ nurl.url }}</td>

                    <td>{{ nurl.title }}</td>

                    <td>{{ nurl.content }}</td>


                    {# Anon and User CRUD options #}
                    {% if app.user.username == nurl.user.username or is_granted('ROLE_ADMIN') %}

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

            {#{% for flash_message in app.session.flashBag.get('notice') %}#}

                {#<div class=\"flash-notice\">#}

                    {#<h3>Warning</h3>#}

                    {#<h5>{{ flash_message }}</h5>#}

                {#</div>#}

            {#{% endfor %}#}

            <a href=\"{{ path('nurl_new') }}\">Create a new nurl</a>

        </li>

    </ul>
{% endblock %}
", "nurl/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\index.html.twig");
    }
}
