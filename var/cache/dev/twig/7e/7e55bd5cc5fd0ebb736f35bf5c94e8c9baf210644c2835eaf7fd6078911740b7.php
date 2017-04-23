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
        $__internal_d7295de6b3d66292e40374d42a11a158cc19212d290e43908a85ca8c1f52275a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7295de6b3d66292e40374d42a11a158cc19212d290e43908a85ca8c1f52275a->enter($__internal_d7295de6b3d66292e40374d42a11a158cc19212d290e43908a85ca8c1f52275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $__internal_4567a19dbb7f8fa9b2333dbde9471d491800c781d7dd4ea622a5cadc24a0e348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4567a19dbb7f8fa9b2333dbde9471d491800c781d7dd4ea622a5cadc24a0e348->enter($__internal_4567a19dbb7f8fa9b2333dbde9471d491800c781d7dd4ea622a5cadc24a0e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7295de6b3d66292e40374d42a11a158cc19212d290e43908a85ca8c1f52275a->leave($__internal_d7295de6b3d66292e40374d42a11a158cc19212d290e43908a85ca8c1f52275a_prof);

        
        $__internal_4567a19dbb7f8fa9b2333dbde9471d491800c781d7dd4ea622a5cadc24a0e348->leave($__internal_4567a19dbb7f8fa9b2333dbde9471d491800c781d7dd4ea622a5cadc24a0e348_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5eecf92829963bb6ad7c00826c49f7b72d2c155b01557fccca056c34f25a0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5eecf92829963bb6ad7c00826c49f7b72d2c155b01557fccca056c34f25a0c2->enter($__internal_f5eecf92829963bb6ad7c00826c49f7b72d2c155b01557fccca056c34f25a0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06bac035c1500eafb151a703d0baf26db2a85f217a009e74983dd2b5ec626447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bac035c1500eafb151a703d0baf26db2a85f217a009e74983dd2b5ec626447->enter($__internal_06bac035c1500eafb151a703d0baf26db2a85f217a009e74983dd2b5ec626447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tags ";
        
        $__internal_06bac035c1500eafb151a703d0baf26db2a85f217a009e74983dd2b5ec626447->leave($__internal_06bac035c1500eafb151a703d0baf26db2a85f217a009e74983dd2b5ec626447_prof);

        
        $__internal_f5eecf92829963bb6ad7c00826c49f7b72d2c155b01557fccca056c34f25a0c2->leave($__internal_f5eecf92829963bb6ad7c00826c49f7b72d2c155b01557fccca056c34f25a0c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af04dcf1e078beb5e50fcfc12daedcbc59fdc811a05225c04992f291e221645b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af04dcf1e078beb5e50fcfc12daedcbc59fdc811a05225c04992f291e221645b->enter($__internal_af04dcf1e078beb5e50fcfc12daedcbc59fdc811a05225c04992f291e221645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e9e398751bdd8c7eb1030f7cfeb88b94b0114a609e64975c85dfbc50c2b9662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9e398751bdd8c7eb1030f7cfeb88b94b0114a609e64975c85dfbc50c2b9662->enter($__internal_3e9e398751bdd8c7eb1030f7cfeb88b94b0114a609e64975c85dfbc50c2b9662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e9e398751bdd8c7eb1030f7cfeb88b94b0114a609e64975c85dfbc50c2b9662->leave($__internal_3e9e398751bdd8c7eb1030f7cfeb88b94b0114a609e64975c85dfbc50c2b9662_prof);

        
        $__internal_af04dcf1e078beb5e50fcfc12daedcbc59fdc811a05225c04992f291e221645b->leave($__internal_af04dcf1e078beb5e50fcfc12daedcbc59fdc811a05225c04992f291e221645b_prof);

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
