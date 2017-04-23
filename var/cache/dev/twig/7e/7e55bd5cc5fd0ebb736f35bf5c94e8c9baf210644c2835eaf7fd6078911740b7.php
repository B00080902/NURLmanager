<?php

/* tag/proposed.html.twig */
class __TwigTemplate_c000501472bffdf357cee27732bba93b00c282d4bc7e9e6f3d6941d06b2cd391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/proposed.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce0b57182a4dc105a3c52b1904c2f3a0e20cf6b87742640b7778f0fe6dcf833a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0b57182a4dc105a3c52b1904c2f3a0e20cf6b87742640b7778f0fe6dcf833a->enter($__internal_ce0b57182a4dc105a3c52b1904c2f3a0e20cf6b87742640b7778f0fe6dcf833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $__internal_ef03f486ac7615281f728a6c351c1625bedd76dfb2bf143841a24e44fe0ffd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03f486ac7615281f728a6c351c1625bedd76dfb2bf143841a24e44fe0ffd92->enter($__internal_ef03f486ac7615281f728a6c351c1625bedd76dfb2bf143841a24e44fe0ffd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce0b57182a4dc105a3c52b1904c2f3a0e20cf6b87742640b7778f0fe6dcf833a->leave($__internal_ce0b57182a4dc105a3c52b1904c2f3a0e20cf6b87742640b7778f0fe6dcf833a_prof);

        
        $__internal_ef03f486ac7615281f728a6c351c1625bedd76dfb2bf143841a24e44fe0ffd92->leave($__internal_ef03f486ac7615281f728a6c351c1625bedd76dfb2bf143841a24e44fe0ffd92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca61541c9e4dce282d5973101873167a1dded41342382c3a120f22e857bed398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca61541c9e4dce282d5973101873167a1dded41342382c3a120f22e857bed398->enter($__internal_ca61541c9e4dce282d5973101873167a1dded41342382c3a120f22e857bed398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52a7775dab56a0e2434b345443029811d28465ddeab4be8c8d46f74d3d5a57b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a7775dab56a0e2434b345443029811d28465ddeab4be8c8d46f74d3d5a57b2->enter($__internal_52a7775dab56a0e2434b345443029811d28465ddeab4be8c8d46f74d3d5a57b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tags ";
        
        $__internal_52a7775dab56a0e2434b345443029811d28465ddeab4be8c8d46f74d3d5a57b2->leave($__internal_52a7775dab56a0e2434b345443029811d28465ddeab4be8c8d46f74d3d5a57b2_prof);

        
        $__internal_ca61541c9e4dce282d5973101873167a1dded41342382c3a120f22e857bed398->leave($__internal_ca61541c9e4dce282d5973101873167a1dded41342382c3a120f22e857bed398_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8259689cde0556592b556a1a6fbc516f2b637ec079ad56affa1e07556c32e7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8259689cde0556592b556a1a6fbc516f2b637ec079ad56affa1e07556c32e7ea->enter($__internal_8259689cde0556592b556a1a6fbc516f2b637ec079ad56affa1e07556c32e7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_928634bf5ab353bb17f34568fcbcdb83c417881156e960379ea7dacf08850b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928634bf5ab353bb17f34568fcbcdb83c417881156e960379ea7dacf08850b1b->enter($__internal_928634bf5ab353bb17f34568fcbcdb83c417881156e960379ea7dacf08850b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <h1>Proposed tag's list</h1>


    ";
        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "
        <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_seeAll");
            echo "\">See all tags</a>

    ";
        }
        // line 17
        echo "
    <table style=\"text-align: center\">

        <thead>

        <tr>

            <th>Id</th>

            <th>Tag</th>

            <th>Approved</th>

            <th>Upvote</th>

            <th>Downvote</th>
            
            ";
        // line 34
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 35
            echo "
            <th>Actions</th>

            ";
        }
        // line 39
        echo "
        </tr>

        </thead>

        <tbody>

        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 47
            echo "
            ";
            // line 48
            if ( !$this->getAttribute($context["tag"], "approved", array())) {
                // line 49
                echo "                <tr>
                    <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 54
                if ($this->getAttribute($context["tag"], "approved", array())) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                echo "</td>

                    <td>

                        ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
                echo "

                        <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" >

                            <img width=\"20\" src=\"/images/upvote.png\">

                        </a>

                    </td>

                    <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
                echo "

                        <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_downvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" >

                            <img width=\"20\" src=\"/images/downvote.png\">

                        </a>

                    </td>
                    ";
                // line 77
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
                    // line 78
                    echo "
                        <td>

                            <ul>

                                <li>
                                    <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                                </li>

                                <li>
                                    <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                                </li>

                                ";
                    // line 92
                    echo "                                ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                        // line 93
                        echo "
                                    <li>
                                        <a href=\"";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_delete", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                        echo "\">delete</a>
                                    </li>

                                ";
                    }
                    // line 99
                    echo "
                            </ul>

                        </td>

                    ";
                }
                // line 105
                echo "
                </tr>

            ";
            }
            // line 109
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </tbody>

    </table>

    <ul>

        <li>

            <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>

        </li>

    </ul>


";
        
        $__internal_928634bf5ab353bb17f34568fcbcdb83c417881156e960379ea7dacf08850b1b->leave($__internal_928634bf5ab353bb17f34568fcbcdb83c417881156e960379ea7dacf08850b1b_prof);

        
        $__internal_8259689cde0556592b556a1a6fbc516f2b637ec079ad56affa1e07556c32e7ea->leave($__internal_8259689cde0556592b556a1a6fbc516f2b637ec079ad56affa1e07556c32e7ea_prof);

    }

    public function getTemplateName()
    {
        return "tag/proposed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 119,  247 => 111,  240 => 109,  234 => 105,  226 => 99,  219 => 95,  215 => 93,  212 => 92,  206 => 88,  199 => 84,  191 => 78,  189 => 77,  179 => 70,  174 => 68,  163 => 60,  158 => 58,  147 => 54,  142 => 52,  135 => 50,  132 => 49,  130 => 48,  127 => 47,  123 => 46,  114 => 39,  108 => 35,  106 => 34,  87 => 17,  81 => 14,  78 => 13,  75 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Tags {% endblock %}

{% block body %}


    <h1>Proposed tag's list</h1>


    {# Only admin can go to approve the tags #}
    {% if is_granted('ROLE_ADMIN') %}

        <a href=\"{{ path('tag_seeAll') }}\">See all tags</a>

    {% endif %}

    <table style=\"text-align: center\">

        <thead>

        <tr>

            <th>Id</th>

            <th>Tag</th>

            <th>Approved</th>

            <th>Upvote</th>

            <th>Downvote</th>
            
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}

            <th>Actions</th>

            {% endif %}

        </tr>

        </thead>

        <tbody>

        {% for tag in tags %}

            {% if not tag.approved %}
                <tr>
                    <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>

                    <td>{{ tag.tag }}</td>

                    <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>

                    <td>

                        {{ tag.upvote }}

                        <a href=\"{{ path('tag_upvote', { 'id': tag.id }) }}\" >

                            <img width=\"20\" src=\"/images/upvote.png\">

                        </a>

                    </td>

                    <td>{{ tag.downvote }}

                        <a href=\"{{ path('tag_downvote', { 'id': tag.id }) }}\" >

                            <img width=\"20\" src=\"/images/downvote.png\">

                        </a>

                    </td>
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}

                        <td>

                            <ul>

                                <li>
                                    <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                                </li>

                                <li>
                                    <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                                </li>

                                {# Admin tag CRUD options #}
                                {% if is_granted('ROLE_ADMIN') %}

                                    <li>
                                        <a href=\"{{ path('tag_delete', { 'id': tag.id }) }}\">delete</a>
                                    </li>

                                {% endif %}

                            </ul>

                        </td>

                    {% endif %}

                </tr>

            {% endif %}

        {% endfor %}
        </tbody>

    </table>

    <ul>

        <li>

            <a href=\"{{ path('tag_new') }}\">Create a new tag</a>

        </li>

    </ul>


{% endblock %}
", "tag/proposed.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\proposed.html.twig");
    }
}
