<?php

/* tag/index.html.twig */
class __TwigTemplate_90a30ea421ecb120e1c4158148d57f57094dbf20ef093dfcc392e3ba0662c4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_dfb1bc938aa5873c5128bb414efcb7b70a86a09da3ec08a7dde8a3b504ca4bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb1bc938aa5873c5128bb414efcb7b70a86a09da3ec08a7dde8a3b504ca4bfd->enter($__internal_dfb1bc938aa5873c5128bb414efcb7b70a86a09da3ec08a7dde8a3b504ca4bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_3fea0c2d64861e029082799f0333d4c778affbfecc8cdffa932981e9e6f53778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fea0c2d64861e029082799f0333d4c778affbfecc8cdffa932981e9e6f53778->enter($__internal_3fea0c2d64861e029082799f0333d4c778affbfecc8cdffa932981e9e6f53778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb1bc938aa5873c5128bb414efcb7b70a86a09da3ec08a7dde8a3b504ca4bfd->leave($__internal_dfb1bc938aa5873c5128bb414efcb7b70a86a09da3ec08a7dde8a3b504ca4bfd_prof);

        
        $__internal_3fea0c2d64861e029082799f0333d4c778affbfecc8cdffa932981e9e6f53778->leave($__internal_3fea0c2d64861e029082799f0333d4c778affbfecc8cdffa932981e9e6f53778_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_903a2c0b4e7b017f4ef3fea0306cd9156d9bafabd333c35f67cf7a70a1c0afc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903a2c0b4e7b017f4ef3fea0306cd9156d9bafabd333c35f67cf7a70a1c0afc6->enter($__internal_903a2c0b4e7b017f4ef3fea0306cd9156d9bafabd333c35f67cf7a70a1c0afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8ded6d7de729d77e012cff4123e9cf6dd543fe058cfe14f1b2d912a78c692ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ded6d7de729d77e012cff4123e9cf6dd543fe058cfe14f1b2d912a78c692ca->enter($__internal_f8ded6d7de729d77e012cff4123e9cf6dd543fe058cfe14f1b2d912a78c692ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tags ";
        
        $__internal_f8ded6d7de729d77e012cff4123e9cf6dd543fe058cfe14f1b2d912a78c692ca->leave($__internal_f8ded6d7de729d77e012cff4123e9cf6dd543fe058cfe14f1b2d912a78c692ca_prof);

        
        $__internal_903a2c0b4e7b017f4ef3fea0306cd9156d9bafabd333c35f67cf7a70a1c0afc6->leave($__internal_903a2c0b4e7b017f4ef3fea0306cd9156d9bafabd333c35f67cf7a70a1c0afc6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea00d758dcd5d3cf047296c85109db1dfd3dc8a1c2fd7af738d2650db4b50fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea00d758dcd5d3cf047296c85109db1dfd3dc8a1c2fd7af738d2650db4b50fb->enter($__internal_6ea00d758dcd5d3cf047296c85109db1dfd3dc8a1c2fd7af738d2650db4b50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d899892dcd2b3585fb7ac6ae2b594b018637380285bea48457321adb78539b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d899892dcd2b3585fb7ac6ae2b594b018637380285bea48457321adb78539b8->enter($__internal_1d899892dcd2b3585fb7ac6ae2b594b018637380285bea48457321adb78539b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <h1>Tags list</h1>


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

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 43
            echo "
            ";
            // line 44
            if ($this->getAttribute($context["tag"], "approved", array())) {
                // line 45
                echo "                <tr>
                    <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 50
                if ($this->getAttribute($context["tag"], "approved", array())) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                echo "</td>

                    <td>

                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
                echo "

                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" >

                            <img width=\"20\" src=\"/images/upvote.png\">

                        </a>

                    </td>

                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
                echo "</td>

                    <td>

                        <ul>

                            <li>
                                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            ";
                // line 79
                echo "                            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 80
                    echo "
                                <li>
                                    <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_delete", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                    echo "\">delete</a>
                                </li>

                            ";
                }
                // line 86
                echo "
                        </ul>

                    </td>

                </tr>

            ";
            }
            // line 94
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>

    </table>

    <ul>

        <li>

            <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>

        </li>

    </ul>


";
        
        $__internal_1d899892dcd2b3585fb7ac6ae2b594b018637380285bea48457321adb78539b8->leave($__internal_1d899892dcd2b3585fb7ac6ae2b594b018637380285bea48457321adb78539b8_prof);

        
        $__internal_6ea00d758dcd5d3cf047296c85109db1dfd3dc8a1c2fd7af738d2650db4b50fb->leave($__internal_6ea00d758dcd5d3cf047296c85109db1dfd3dc8a1c2fd7af738d2650db4b50fb_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 104,  219 => 96,  212 => 94,  202 => 86,  195 => 82,  191 => 80,  188 => 79,  182 => 75,  175 => 71,  165 => 64,  154 => 56,  149 => 54,  138 => 50,  133 => 48,  126 => 46,  123 => 45,  121 => 44,  118 => 43,  114 => 42,  87 => 17,  81 => 14,  78 => 13,  75 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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


    <h1>Tags list</h1>


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

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        {% for tag in tags %}

            {% if tag.approved %}
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

                    <td>{{ tag.downvote }}</td>

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
", "tag/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
