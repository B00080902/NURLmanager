<?php

/* collection/index.html.twig */
class __TwigTemplate_7d43971a0ac80dbcf07c2431bcadee7af0b2f58059228eb799436592d733fe76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/index.html.twig", 1);
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
        $__internal_5eea7c976cf0ebdf52136d71b44ba09aa1ccd9423c04da9a8df4b4ada0cb5b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eea7c976cf0ebdf52136d71b44ba09aa1ccd9423c04da9a8df4b4ada0cb5b64->enter($__internal_5eea7c976cf0ebdf52136d71b44ba09aa1ccd9423c04da9a8df4b4ada0cb5b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $__internal_8e65ecc5e2f2d3da0a04b9f179ae09dfed1fbef5ff65f140a09a4d4a7bccbf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e65ecc5e2f2d3da0a04b9f179ae09dfed1fbef5ff65f140a09a4d4a7bccbf79->enter($__internal_8e65ecc5e2f2d3da0a04b9f179ae09dfed1fbef5ff65f140a09a4d4a7bccbf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eea7c976cf0ebdf52136d71b44ba09aa1ccd9423c04da9a8df4b4ada0cb5b64->leave($__internal_5eea7c976cf0ebdf52136d71b44ba09aa1ccd9423c04da9a8df4b4ada0cb5b64_prof);

        
        $__internal_8e65ecc5e2f2d3da0a04b9f179ae09dfed1fbef5ff65f140a09a4d4a7bccbf79->leave($__internal_8e65ecc5e2f2d3da0a04b9f179ae09dfed1fbef5ff65f140a09a4d4a7bccbf79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a56261d7e2710c9437d2038030eabaa57ae3bca06c794bdedeb1717a22d86699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56261d7e2710c9437d2038030eabaa57ae3bca06c794bdedeb1717a22d86699->enter($__internal_a56261d7e2710c9437d2038030eabaa57ae3bca06c794bdedeb1717a22d86699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_768d16a2199fc9997d9df09a8cb0b4fe1cd36b1a5b4813b20bb1d342e09052e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d16a2199fc9997d9df09a8cb0b4fe1cd36b1a5b4813b20bb1d342e09052e1->enter($__internal_768d16a2199fc9997d9df09a8cb0b4fe1cd36b1a5b4813b20bb1d342e09052e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Collections list</h1>

    <table>

        <thead>

            <tr>

                <th>Id</th>

                <th>Title</th>

                <th>Description</th>

                <th>Public</th>

                <th>Shared</th>

                <th>Author</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 33
            echo "
            <tr>

                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
            echo "</a></td>

                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "public", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "shared", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()), "html", null, true);
            echo "</td>

                ";
            // line 48
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()))) {
                // line 49
                echo "
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_share_share", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">share</a>
                            </li>
                        </ul>
                    </td>

                ";
            }
            // line 67
            echo "
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_new");
        echo "\">Create a new collection</a>
        </li>
    </ul>
";
        
        $__internal_768d16a2199fc9997d9df09a8cb0b4fe1cd36b1a5b4813b20bb1d342e09052e1->leave($__internal_768d16a2199fc9997d9df09a8cb0b4fe1cd36b1a5b4813b20bb1d342e09052e1_prof);

        
        $__internal_a56261d7e2710c9437d2038030eabaa57ae3bca06c794bdedeb1717a22d86699->leave($__internal_a56261d7e2710c9437d2038030eabaa57ae3bca06c794bdedeb1717a22d86699_prof);

    }

    public function getTemplateName()
    {
        return "collection/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  160 => 71,  151 => 67,  142 => 61,  135 => 57,  128 => 53,  122 => 49,  120 => 48,  115 => 46,  110 => 44,  105 => 42,  100 => 40,  95 => 38,  88 => 36,  83 => 33,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Collections list</h1>

    <table>

        <thead>

            <tr>

                <th>Id</th>

                <th>Title</th>

                <th>Description</th>

                <th>Public</th>

                <th>Shared</th>

                <th>Author</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>
        {% for collection in collections %}

            <tr>

                <td><a href=\"{{ path('collection_show', { 'id': collection.id }) }}\">{{ collection.id }}</a></td>

                <td>{{ collection.title }}</td>

                <td>{{ collection.description }}</td>

                <td>{{ collection.public }}</td>

                <td>{{ collection.shared }}</td>

                <td>{{ collection.user.username }}</td>

                {% if app.user.username == collection.user.username %}

                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('collection_show', { 'id': collection.id }) }}\">show</a>
                            </li>

                            <li>
                                <a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">edit</a>
                            </li>

                            <li>
                                <a href=\"{{ path('collection_share_share', { 'id': collection.id }) }}\">share</a>
                            </li>
                        </ul>
                    </td>

                {% endif %}

            </tr>

        {% endfor %}

        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"{{ path('collection_new') }}\">Create a new collection</a>
        </li>
    </ul>
{% endblock %}
", "collection/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\index.html.twig");
    }
}
