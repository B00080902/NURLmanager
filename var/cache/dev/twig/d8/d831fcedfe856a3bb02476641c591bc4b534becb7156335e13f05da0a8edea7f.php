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
        $__internal_32c5448d6e9057f47555d8020dec748ea9a7872cd30301796d4a9a43cabe712e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c5448d6e9057f47555d8020dec748ea9a7872cd30301796d4a9a43cabe712e->enter($__internal_32c5448d6e9057f47555d8020dec748ea9a7872cd30301796d4a9a43cabe712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/shared.html.twig"));

        $__internal_55c5794c4244bfb84d2534ec26b58c6f76d32f1c67bb2a99cd55a6999f5ccf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c5794c4244bfb84d2534ec26b58c6f76d32f1c67bb2a99cd55a6999f5ccf9c->enter($__internal_55c5794c4244bfb84d2534ec26b58c6f76d32f1c67bb2a99cd55a6999f5ccf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/shared.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c5448d6e9057f47555d8020dec748ea9a7872cd30301796d4a9a43cabe712e->leave($__internal_32c5448d6e9057f47555d8020dec748ea9a7872cd30301796d4a9a43cabe712e_prof);

        
        $__internal_55c5794c4244bfb84d2534ec26b58c6f76d32f1c67bb2a99cd55a6999f5ccf9c->leave($__internal_55c5794c4244bfb84d2534ec26b58c6f76d32f1c67bb2a99cd55a6999f5ccf9c_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_11fa04d7b0c01e415849fd3899021373cf80f6c70c6def95e9da6f1d196b81d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fa04d7b0c01e415849fd3899021373cf80f6c70c6def95e9da6f1d196b81d4->enter($__internal_11fa04d7b0c01e415849fd3899021373cf80f6c70c6def95e9da6f1d196b81d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_fbad752d297165843e9e072b123e8598a4a583bd0af07b6402bb6348bf81ee00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbad752d297165843e9e072b123e8598a4a583bd0af07b6402bb6348bf81ee00->enter($__internal_fbad752d297165843e9e072b123e8598a4a583bd0af07b6402bb6348bf81ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Shared Collections";
        
        $__internal_fbad752d297165843e9e072b123e8598a4a583bd0af07b6402bb6348bf81ee00->leave($__internal_fbad752d297165843e9e072b123e8598a4a583bd0af07b6402bb6348bf81ee00_prof);

        
        $__internal_11fa04d7b0c01e415849fd3899021373cf80f6c70c6def95e9da6f1d196b81d4->leave($__internal_11fa04d7b0c01e415849fd3899021373cf80f6c70c6def95e9da6f1d196b81d4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a37225c8925e516bbaab884d4eaeb69dc273608131cec8cc41a6352512c396ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37225c8925e516bbaab884d4eaeb69dc273608131cec8cc41a6352512c396ad->enter($__internal_a37225c8925e516bbaab884d4eaeb69dc273608131cec8cc41a6352512c396ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c545218883e19eacc1268310ff652c3eca91fff54ed0dda7d1c33e3467c0caf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c545218883e19eacc1268310ff652c3eca91fff54ed0dda7d1c33e3467c0caf1->enter($__internal_c545218883e19eacc1268310ff652c3eca91fff54ed0dda7d1c33e3467c0caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>You haven't shared your collection yet! </h2>

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
        
        $__internal_c545218883e19eacc1268310ff652c3eca91fff54ed0dda7d1c33e3467c0caf1->leave($__internal_c545218883e19eacc1268310ff652c3eca91fff54ed0dda7d1c33e3467c0caf1_prof);

        
        $__internal_a37225c8925e516bbaab884d4eaeb69dc273608131cec8cc41a6352512c396ad->leave($__internal_a37225c8925e516bbaab884d4eaeb69dc273608131cec8cc41a6352512c396ad_prof);

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

            <h2>You haven't shared your collection yet! </h2>

            <h4 style=\"color: grey\">Please try again later</h4>

        {% endif %}

    {% endfor %}

{% endblock %}", "collection/shared.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\shared.html.twig");
    }
}
