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
        $__internal_ee1bc4ae0564889a37e0aa4ad0a0e8515eaf3c41d87319df1b4f4f4c94d20c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1bc4ae0564889a37e0aa4ad0a0e8515eaf3c41d87319df1b4f4f4c94d20c26->enter($__internal_ee1bc4ae0564889a37e0aa4ad0a0e8515eaf3c41d87319df1b4f4f4c94d20c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $__internal_95beae1814b4c940e6eb21e0e0d5d65962c5745b0327c8be6cd828612fab9ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95beae1814b4c940e6eb21e0e0d5d65962c5745b0327c8be6cd828612fab9ea6->enter($__internal_95beae1814b4c940e6eb21e0e0d5d65962c5745b0327c8be6cd828612fab9ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1bc4ae0564889a37e0aa4ad0a0e8515eaf3c41d87319df1b4f4f4c94d20c26->leave($__internal_ee1bc4ae0564889a37e0aa4ad0a0e8515eaf3c41d87319df1b4f4f4c94d20c26_prof);

        
        $__internal_95beae1814b4c940e6eb21e0e0d5d65962c5745b0327c8be6cd828612fab9ea6->leave($__internal_95beae1814b4c940e6eb21e0e0d5d65962c5745b0327c8be6cd828612fab9ea6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b33ee7974ec98c1785c3ee981343bb01d711e8b8ba30a0eb446025a02a688d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33ee7974ec98c1785c3ee981343bb01d711e8b8ba30a0eb446025a02a688d43->enter($__internal_b33ee7974ec98c1785c3ee981343bb01d711e8b8ba30a0eb446025a02a688d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f7a72cef5e1ce03dc28730bd393f814f866c1d1305a90f77f9714d3500562ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7a72cef5e1ce03dc28730bd393f814f866c1d1305a90f77f9714d3500562ec->enter($__internal_8f7a72cef5e1ce03dc28730bd393f814f866c1d1305a90f77f9714d3500562ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                    <th>Actions</th>
                ";
        }
        // line 29
        echo "
            </tr>

        </thead>

        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 36
            echo "
            <tr>

                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
            echo "</a></td>

                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "public", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "shared", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()), "html", null, true);
            echo "</td>

                ";
            // line 51
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 52
                echo "
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_share_share", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
                echo "\">share</a>
                            </li>
                        </ul>
                    </td>

                ";
            }
            // line 70
            echo "
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_new");
        echo "\">Create a new collection</a>
        </li>
    </ul>
";
        
        $__internal_8f7a72cef5e1ce03dc28730bd393f814f866c1d1305a90f77f9714d3500562ec->leave($__internal_8f7a72cef5e1ce03dc28730bd393f814f866c1d1305a90f77f9714d3500562ec_prof);

        
        $__internal_b33ee7974ec98c1785c3ee981343bb01d711e8b8ba30a0eb446025a02a688d43->leave($__internal_b33ee7974ec98c1785c3ee981343bb01d711e8b8ba30a0eb446025a02a688d43_prof);

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
        return array (  177 => 81,  168 => 74,  159 => 70,  150 => 64,  143 => 60,  136 => 56,  130 => 52,  128 => 51,  123 => 49,  118 => 47,  113 => 45,  108 => 43,  103 => 41,  96 => 39,  91 => 36,  87 => 35,  79 => 29,  75 => 27,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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

                {% if is_granted('ROLE_ADMIN') %}
                    <th>Actions</th>
                {% endif %}

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

                {% if app.user.username == collection.user.username or is_granted('ROLE_ADMIN') %}

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
