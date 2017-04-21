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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f0be33430e0b198afe53a420b83d5fc0a02683f2b7fb901dd962974e491c575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0be33430e0b198afe53a420b83d5fc0a02683f2b7fb901dd962974e491c575->enter($__internal_7f0be33430e0b198afe53a420b83d5fc0a02683f2b7fb901dd962974e491c575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_958eff7cb21176122071d7ebfdd68da3d542720d42996edf8f7e59816e171f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958eff7cb21176122071d7ebfdd68da3d542720d42996edf8f7e59816e171f01->enter($__internal_958eff7cb21176122071d7ebfdd68da3d542720d42996edf8f7e59816e171f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0be33430e0b198afe53a420b83d5fc0a02683f2b7fb901dd962974e491c575->leave($__internal_7f0be33430e0b198afe53a420b83d5fc0a02683f2b7fb901dd962974e491c575_prof);

        
        $__internal_958eff7cb21176122071d7ebfdd68da3d542720d42996edf8f7e59816e171f01->leave($__internal_958eff7cb21176122071d7ebfdd68da3d542720d42996edf8f7e59816e171f01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0298de2d0f1d33ae5a7a3e101fa7a4a3d17d5ba61ac69ec704755f7b828e07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0298de2d0f1d33ae5a7a3e101fa7a4a3d17d5ba61ac69ec704755f7b828e07a->enter($__internal_f0298de2d0f1d33ae5a7a3e101fa7a4a3d17d5ba61ac69ec704755f7b828e07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f752629b7ea0e9f9eb0bac010bddfde3f8f7f8bafb81a3c11b9d114a4078e3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752629b7ea0e9f9eb0bac010bddfde3f8f7f8bafb81a3c11b9d114a4078e3d6->enter($__internal_f752629b7ea0e9f9eb0bac010bddfde3f8f7f8bafb81a3c11b9d114a4078e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tags list</h1>

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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["tag"], "approved", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td style=\"color: green\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
            echo "</td>
                <td style=\"color: red\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 26
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "
                        <ul>
                            <li>
                                <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>
                        </ul>
                    ";
            } else {
                // line 37
                echo "
                        <ul style=\"display: flex; list-style-type: none\" >
                            <li><a id=\"upd\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><img src=\"/images/Upvote.png\"></a></li>
                            <li><a id=\"upd\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_downvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><img src=\"/images/Downvote.png\"></a></li>
                        </ul>
                    ";
            }
            // line 43
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>
        </li>
    </ul>
";
        
        $__internal_f752629b7ea0e9f9eb0bac010bddfde3f8f7f8bafb81a3c11b9d114a4078e3d6->leave($__internal_f752629b7ea0e9f9eb0bac010bddfde3f8f7f8bafb81a3c11b9d114a4078e3d6_prof);

        
        $__internal_f0298de2d0f1d33ae5a7a3e101fa7a4a3d17d5ba61ac69ec704755f7b828e07a->leave($__internal_f0298de2d0f1d33ae5a7a3e101fa7a4a3d17d5ba61ac69ec704755f7b828e07a_prof);

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
        return array (  148 => 51,  141 => 46,  133 => 43,  127 => 40,  123 => 39,  119 => 37,  112 => 33,  106 => 30,  101 => 27,  99 => 26,  94 => 24,  90 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Tags list</h1>

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
            <tr>
                <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.tag }}</td>
                <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>
                <td style=\"color: green\">{{ tag.upvote }}</td>
                <td style=\"color: red\">{{ tag.downvote }}</td>
                <td>
                    {% if is_granted('ROLE_ADMIN')  %}

                        <ul>
                            <li>
                                <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                            </li>
                        </ul>
                    {% else %}

                        <ul style=\"display: flex; list-style-type: none\" >
                            <li><a id=\"upd\" href=\"{{ path('tag_upvote', { 'id': tag.id })}}\"><img src=\"/images/Upvote.png\"></a></li>
                            <li><a id=\"upd\" href=\"{{ path('tag_downvote', { 'id': tag.id })}}\"><img src=\"/images/Downvote.png\"></a></li>
                        </ul>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tag_new') }}\">Create a new tag</a>
        </li>
    </ul>
{% endblock %}
", "tag/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
