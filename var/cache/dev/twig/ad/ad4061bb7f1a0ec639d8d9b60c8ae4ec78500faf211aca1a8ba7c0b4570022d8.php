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
        $__internal_002ff609d54e75fc26e56b3b90d3acd8fdc918ca82118a87e9b4a0cb665de641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002ff609d54e75fc26e56b3b90d3acd8fdc918ca82118a87e9b4a0cb665de641->enter($__internal_002ff609d54e75fc26e56b3b90d3acd8fdc918ca82118a87e9b4a0cb665de641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $__internal_559a63ffaaff513cf3808bbcc7420a01e2da20424c0bc08e370d30344e7a4679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559a63ffaaff513cf3808bbcc7420a01e2da20424c0bc08e370d30344e7a4679->enter($__internal_559a63ffaaff513cf3808bbcc7420a01e2da20424c0bc08e370d30344e7a4679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002ff609d54e75fc26e56b3b90d3acd8fdc918ca82118a87e9b4a0cb665de641->leave($__internal_002ff609d54e75fc26e56b3b90d3acd8fdc918ca82118a87e9b4a0cb665de641_prof);

        
        $__internal_559a63ffaaff513cf3808bbcc7420a01e2da20424c0bc08e370d30344e7a4679->leave($__internal_559a63ffaaff513cf3808bbcc7420a01e2da20424c0bc08e370d30344e7a4679_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_7b0f57daa5b005b75634c85c5e4438e18a6cd2ce7fd2c19fbdf8d700ed281161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0f57daa5b005b75634c85c5e4438e18a6cd2ce7fd2c19fbdf8d700ed281161->enter($__internal_7b0f57daa5b005b75634c85c5e4438e18a6cd2ce7fd2c19fbdf8d700ed281161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_f8ae14816ab11cae9286beedf21a46196299ec4d39895bb29fc013f3af0be6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ae14816ab11cae9286beedf21a46196299ec4d39895bb29fc013f3af0be6ba->enter($__internal_f8ae14816ab11cae9286beedf21a46196299ec4d39895bb29fc013f3af0be6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Nurls  ";
        
        $__internal_f8ae14816ab11cae9286beedf21a46196299ec4d39895bb29fc013f3af0be6ba->leave($__internal_f8ae14816ab11cae9286beedf21a46196299ec4d39895bb29fc013f3af0be6ba_prof);

        
        $__internal_7b0f57daa5b005b75634c85c5e4438e18a6cd2ce7fd2c19fbdf8d700ed281161->leave($__internal_7b0f57daa5b005b75634c85c5e4438e18a6cd2ce7fd2c19fbdf8d700ed281161_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6532553d7b004b104fa5d11bf9bbea03852675f1a0b394f994ae79136fc0cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6532553d7b004b104fa5d11bf9bbea03852675f1a0b394f994ae79136fc0cac->enter($__internal_a6532553d7b004b104fa5d11bf9bbea03852675f1a0b394f994ae79136fc0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f5c06fd80bec53ed1bdd448d173caf1957c8eeedb90e66c7f7bf789ee9b727d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5c06fd80bec53ed1bdd448d173caf1957c8eeedb90e66c7f7bf789ee9b727d->enter($__internal_2f5c06fd80bec53ed1bdd448d173caf1957c8eeedb90e66c7f7bf789ee9b727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    </div>

    <table style=\"text-align: center\">

        ";
        // line 33
        echo "
        <thead>

            <tr>

                <th>Id</th>

                <th>Url</th>

                <th>Title</th>

                <th>Content</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        ";
        // line 55
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 56
            echo "
            ";
            // line 58
            echo "            ";
            if (($this->getAttribute($context["nurl"], "public", array()) == "Public")) {
                // line 59
                echo "
                ";
                // line 61
                echo "                <tr>

                    <td><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>


                    ";
                // line 73
                echo "                    <td>
                        <ul>

                            <li>
                                <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_report", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">Report</a>
                            </li>

                        </ul>

                    </td>

                </tr>

            ";
            }
            // line 95
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
        </tbody>

    </table>


    <ul>

        <li>

            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 108
            echo "
                <div class=\"flash-notice\">

                    ";
            // line 111
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "

                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
            <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>

        </li>

    </ul>
";
        
        $__internal_2f5c06fd80bec53ed1bdd448d173caf1957c8eeedb90e66c7f7bf789ee9b727d->leave($__internal_2f5c06fd80bec53ed1bdd448d173caf1957c8eeedb90e66c7f7bf789ee9b727d_prof);

        
        $__internal_a6532553d7b004b104fa5d11bf9bbea03852675f1a0b394f994ae79136fc0cac->leave($__internal_a6532553d7b004b104fa5d11bf9bbea03852675f1a0b394f994ae79136fc0cac_prof);

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
        return array (  256 => 117,  253 => 116,  242 => 111,  237 => 108,  233 => 107,  221 => 97,  214 => 95,  201 => 85,  194 => 81,  187 => 77,  181 => 73,  175 => 69,  170 => 67,  165 => 65,  158 => 63,  154 => 61,  151 => 59,  148 => 58,  145 => 56,  140 => 55,  117 => 33,  111 => 28,  105 => 25,  102 => 24,  99 => 23,  96 => 21,  85 => 16,  80 => 13,  75 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    </div>

    <table style=\"text-align: center\">

        {# Table head #}

        <thead>

            <tr>

                <th>Id</th>

                <th>Url</th>

                <th>Title</th>

                <th>Content</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        {# Show all nurls #}
        {% for nurl in nurls %}

            {# Show the nurls only if they're defined as public #}
            {% if nurl.public == 'Public' %}

                {# -------- NURL table --------- #}
                <tr>

                    <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>

                    <td>{{ nurl.url }}</td>

                    <td>{{ nurl.title }}</td>

                    <td>{{ nurl.content }}</td>


                    {# Anon and User CRUD options #}
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

                </tr>

            {% endif %}

        {% endfor %}

        </tbody>

    </table>


    <ul>

        <li>

            {% for flash_message in app.session.flashBag.get('notice') %}

                <div class=\"flash-notice\">

                    {{ flash_message }}

                </div>

            {% endfor %}

            <a href=\"{{ path('nurl_new') }}\">Create a new nurl</a>

        </li>

    </ul>
{% endblock %}
", "nurl/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\index.html.twig");
    }
}
