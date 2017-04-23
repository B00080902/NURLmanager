<?php

/* collection/shared.html.twig */
class __TwigTemplate_db729d36a5daa1e3f72db49a9cac23a4fe7b6bd2bba88d5ad7195987f51d943e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/shared.html.twig", 1);
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
        $__internal_66c39aa02a8667f36e1fa59029be24a89da982519a6bca8c977e55a16ee7649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c39aa02a8667f36e1fa59029be24a89da982519a6bca8c977e55a16ee7649e->enter($__internal_66c39aa02a8667f36e1fa59029be24a89da982519a6bca8c977e55a16ee7649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/shared.html.twig"));

        $__internal_28d2331bc4d8957067cdcaf127a235743039170df0e8ca7b8222e379563d32ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d2331bc4d8957067cdcaf127a235743039170df0e8ca7b8222e379563d32ee->enter($__internal_28d2331bc4d8957067cdcaf127a235743039170df0e8ca7b8222e379563d32ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/shared.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c39aa02a8667f36e1fa59029be24a89da982519a6bca8c977e55a16ee7649e->leave($__internal_66c39aa02a8667f36e1fa59029be24a89da982519a6bca8c977e55a16ee7649e_prof);

        
        $__internal_28d2331bc4d8957067cdcaf127a235743039170df0e8ca7b8222e379563d32ee->leave($__internal_28d2331bc4d8957067cdcaf127a235743039170df0e8ca7b8222e379563d32ee_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_dfda3aa598d05a90506c1aef3a878635bcdfee4d9f03f929fb9ed33ce686fc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfda3aa598d05a90506c1aef3a878635bcdfee4d9f03f929fb9ed33ce686fc1e->enter($__internal_dfda3aa598d05a90506c1aef3a878635bcdfee4d9f03f929fb9ed33ce686fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6658aaa81cd77a544d19d7470e276d92a5e4fe25ea27aba0518e6875d9d7eff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6658aaa81cd77a544d19d7470e276d92a5e4fe25ea27aba0518e6875d9d7eff0->enter($__internal_6658aaa81cd77a544d19d7470e276d92a5e4fe25ea27aba0518e6875d9d7eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Shared Collections";
        
        $__internal_6658aaa81cd77a544d19d7470e276d92a5e4fe25ea27aba0518e6875d9d7eff0->leave($__internal_6658aaa81cd77a544d19d7470e276d92a5e4fe25ea27aba0518e6875d9d7eff0_prof);

        
        $__internal_dfda3aa598d05a90506c1aef3a878635bcdfee4d9f03f929fb9ed33ce686fc1e->leave($__internal_dfda3aa598d05a90506c1aef3a878635bcdfee4d9f03f929fb9ed33ce686fc1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e86191030f09f01ef185e727ca50de291275d5bf3a40c01758328cdc006f19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e86191030f09f01ef185e727ca50de291275d5bf3a40c01758328cdc006f19e->enter($__internal_0e86191030f09f01ef185e727ca50de291275d5bf3a40c01758328cdc006f19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8e2dc353f28220c81d8a6cb3a37ff7e94d7160407fca4153e24299f5fd4f364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e2dc353f28220c81d8a6cb3a37ff7e94d7160407fca4153e24299f5fd4f364->enter($__internal_a8e2dc353f28220c81d8a6cb3a37ff7e94d7160407fca4153e24299f5fd4f364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <h1>Shared <i>Public</i> Collections</h1>

    ";
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 13
            echo "
        ";
            // line 15
            echo "        ";
            if (($this->getAttribute($context["collection"], "shared", array()) == 1)) {
                // line 16
                echo "
            ";
                // line 18
                echo "            ";
                if (($this->getAttribute($context["collection"], "public", array()) == "Public")) {
                    // line 19
                    echo "

                <table>

                    <tbody>

                    <tr>
                        <th>Id</th>
                        <td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
                    echo "</td>
                    </tr>

                    <tr>
                        <th>Title</th>
                        <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
                    echo "</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
                    echo "</td>
                    </tr>

                    <tr>
                        <th>Author</th>
                        <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()), "html", null, true);
                    echo "</td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "public", array()), "html", null, true);
                    echo "</td>
                    </tr>

                    <tr>
                        <th>Shared</th>
                        <td>";
                    // line 52
                    if (($this->getAttribute($context["collection"], "shared", array()) == 1)) {
                        echo "Yes";
                    } else {
                        echo "No";
                    }
                    echo "</td>
                    </tr>

                    </tbody>

                </table>

                <hr>

                <hr>

            ";
                }
                // line 64
                echo "
        ";
            } else {
                // line 66
                echo "
            <h2>No collections were shared yet! </h2>

            <h4 style=\"color: grey\">Please try again later</h4>

        ";
            }
            // line 72
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_a8e2dc353f28220c81d8a6cb3a37ff7e94d7160407fca4153e24299f5fd4f364->leave($__internal_a8e2dc353f28220c81d8a6cb3a37ff7e94d7160407fca4153e24299f5fd4f364_prof);

        
        $__internal_0e86191030f09f01ef185e727ca50de291275d5bf3a40c01758328cdc006f19e->leave($__internal_0e86191030f09f01ef185e727ca50de291275d5bf3a40c01758328cdc006f19e_prof);

    }

    public function getTemplateName()
    {
        return "collection/shared.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  172 => 72,  164 => 66,  160 => 64,  141 => 52,  133 => 47,  125 => 42,  117 => 37,  109 => 32,  101 => 27,  91 => 19,  88 => 18,  85 => 16,  82 => 15,  79 => 13,  74 => 12,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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


{% block pageTitle %}Shared Collections{% endblock %}

{% block body %}


    <h1>Shared <i>Public</i> Collections</h1>

    {# Get all the collections #}
    {% for collection in collections %}

        {# Only show shared collections #}
        {% if collection.shared == 1 %}

            {# Show the nurls only if they're defined as public #}
            {% if collection.public == 'Public' %}


                <table>

                    <tbody>

                    <tr>
                        <th>Id</th>
                        <td>{{ collection.id }}</td>
                    </tr>

                    <tr>
                        <th>Title</th>
                        <td>{{ collection.title }}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{ collection.description }}</td>
                    </tr>

                    <tr>
                        <th>Author</th>
                        <td>{{ collection.user.username }}</td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td>{{ collection.public }}</td>
                    </tr>

                    <tr>
                        <th>Shared</th>
                        <td>{% if collection.shared == 1 %}Yes{% else %}No{% endif %}</td>
                    </tr>

                    </tbody>

                </table>

                <hr>

                <hr>

            {% endif %}

        {% else %}

            <h2>No collections were shared yet! </h2>

            <h4 style=\"color: grey\">Please try again later</h4>

        {% endif %}

    {% endfor %}

{% endblock %}", "collection/shared.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\shared.html.twig");
    }
}
