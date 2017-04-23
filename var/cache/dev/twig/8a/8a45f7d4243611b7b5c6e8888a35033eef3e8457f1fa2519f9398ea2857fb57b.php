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
        $__internal_b08af6777f3485ad56d495dd360d4793969e18678e7276bc782b55cd7be6d638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08af6777f3485ad56d495dd360d4793969e18678e7276bc782b55cd7be6d638->enter($__internal_b08af6777f3485ad56d495dd360d4793969e18678e7276bc782b55cd7be6d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $__internal_9b76a76ffb968a3bd33a09f433fc433186acb27d34012f60fed653e99f63aac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b76a76ffb968a3bd33a09f433fc433186acb27d34012f60fed653e99f63aac6->enter($__internal_9b76a76ffb968a3bd33a09f433fc433186acb27d34012f60fed653e99f63aac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08af6777f3485ad56d495dd360d4793969e18678e7276bc782b55cd7be6d638->leave($__internal_b08af6777f3485ad56d495dd360d4793969e18678e7276bc782b55cd7be6d638_prof);

        
        $__internal_9b76a76ffb968a3bd33a09f433fc433186acb27d34012f60fed653e99f63aac6->leave($__internal_9b76a76ffb968a3bd33a09f433fc433186acb27d34012f60fed653e99f63aac6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f26d0bc522cf8a5754594b9a5b427a0cc14b09b87c14a96b445490f61bd67e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f26d0bc522cf8a5754594b9a5b427a0cc14b09b87c14a96b445490f61bd67e4->enter($__internal_7f26d0bc522cf8a5754594b9a5b427a0cc14b09b87c14a96b445490f61bd67e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a3a9be27fd547680cea928f8b1e620df57bf08e92e7bb38599a5b373a4c7bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a9be27fd547680cea928f8b1e620df57bf08e92e7bb38599a5b373a4c7bfa->enter($__internal_1a3a9be27fd547680cea928f8b1e620df57bf08e92e7bb38599a5b373a4c7bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Collections list</h1>

    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_page");
        echo "\">Search</a>

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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 35
            echo "
            <tr>

                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
            echo "</a></td>

                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "public", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "shared", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()), "html", null, true);
            echo "</td>

                ";
            // line 50
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()))) {
                // line 51
                echo "
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_share_share", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">share</a>
                            </li>
                        </ul>
                    </td>

                ";
            }
            // line 69
            echo "
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_new");
        echo "\">Create a new collection</a>
        </li>
    </ul>
";
        
        $__internal_1a3a9be27fd547680cea928f8b1e620df57bf08e92e7bb38599a5b373a4c7bfa->leave($__internal_1a3a9be27fd547680cea928f8b1e620df57bf08e92e7bb38599a5b373a4c7bfa_prof);

        
        $__internal_7f26d0bc522cf8a5754594b9a5b427a0cc14b09b87c14a96b445490f61bd67e4->leave($__internal_7f26d0bc522cf8a5754594b9a5b427a0cc14b09b87c14a96b445490f61bd67e4_prof);

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
        return array (  174 => 80,  165 => 73,  156 => 69,  147 => 63,  140 => 59,  133 => 55,  127 => 51,  125 => 50,  120 => 48,  115 => 46,  110 => 44,  105 => 42,  100 => 40,  93 => 38,  88 => 35,  84 => 34,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    <a href=\"{{ path('search_page') }}\">Search</a>

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
