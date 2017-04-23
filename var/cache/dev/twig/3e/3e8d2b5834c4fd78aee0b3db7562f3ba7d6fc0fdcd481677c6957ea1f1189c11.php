<?php

/* collection/show.html.twig */
class __TwigTemplate_d1be7936cdcfefe4d1977c19110ff4cc9019ac20447ba3898c0dd076ca29a111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/show.html.twig", 1);
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
        $__internal_2b4872cc8a1d761621a67cd9ad59675fdcd78279c39f27f8fcf6fe62dc8c854c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4872cc8a1d761621a67cd9ad59675fdcd78279c39f27f8fcf6fe62dc8c854c->enter($__internal_2b4872cc8a1d761621a67cd9ad59675fdcd78279c39f27f8fcf6fe62dc8c854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $__internal_d828fc04293057c119989c780022ce1c34881f763731ae536c4aac4b64ea2bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d828fc04293057c119989c780022ce1c34881f763731ae536c4aac4b64ea2bd1->enter($__internal_d828fc04293057c119989c780022ce1c34881f763731ae536c4aac4b64ea2bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4872cc8a1d761621a67cd9ad59675fdcd78279c39f27f8fcf6fe62dc8c854c->leave($__internal_2b4872cc8a1d761621a67cd9ad59675fdcd78279c39f27f8fcf6fe62dc8c854c_prof);

        
        $__internal_d828fc04293057c119989c780022ce1c34881f763731ae536c4aac4b64ea2bd1->leave($__internal_d828fc04293057c119989c780022ce1c34881f763731ae536c4aac4b64ea2bd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2b272b897258aedd3fed9606ec826f75cb738ca3288d5e5044c2455d55e5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2b272b897258aedd3fed9606ec826f75cb738ca3288d5e5044c2455d55e5a0->enter($__internal_ec2b272b897258aedd3fed9606ec826f75cb738ca3288d5e5044c2455d55e5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce68400201034bb8de66418975da409eab5c831e23c5f460c19f638222681f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce68400201034bb8de66418975da409eab5c831e23c5f460c19f638222681f19->enter($__internal_ce68400201034bb8de66418975da409eab5c831e23c5f460c19f638222681f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Collection</h1>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_view", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\"><h3 style=\"color: #6e6e6e\">See shared collections</h3></a>



        <table>

        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "title", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "description", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Type</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "public", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "nurl", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 41
            echo "                <th>Nurl</th>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tr>


            <tr>
                <th>Shared</th>
                <td>";
        // line 50
        if (($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "shared", array()) == 1)) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>

            </tbody>

            </table>

            <hr>


    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
        echo "\">Back to the list</a>
        </li>

        <li>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

        <li>
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_share_share", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\">Share</a>
        </li>

        <li>
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ce68400201034bb8de66418975da409eab5c831e23c5f460c19f638222681f19->leave($__internal_ce68400201034bb8de66418975da409eab5c831e23c5f460c19f638222681f19_prof);

        
        $__internal_ec2b272b897258aedd3fed9606ec826f75cb738ca3288d5e5044c2455d55e5a0->leave($__internal_ec2b272b897258aedd3fed9606ec826f75cb738ca3288d5e5044c2455d55e5a0_prof);

    }

    public function getTemplateName()
    {
        return "collection/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  168 => 74,  161 => 70,  154 => 66,  147 => 62,  128 => 50,  121 => 45,  113 => 43,  109 => 41,  105 => 40,  98 => 36,  90 => 31,  82 => 26,  74 => 21,  66 => 16,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Collection</h1>
    <a href=\"{{ path('collection_view', { 'id': collection.id }) }}\"><h3 style=\"color: #6e6e6e\">See shared collections</h3></a>



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
                {% for nurl in collection.nurl %}
                <th>Nurl</th>

                <td>{{ nurl.title }}</td>
                {% endfor %}
            </tr>


            <tr>
                <th>Shared</th>
                <td>{% if collection.shared == 1 %}Yes{% else %}No{% endif %}</td>
            </tr>

            </tbody>

            </table>

            <hr>


    <ul>
        <li>
            <a href=\"{{ path('collection_index') }}\">Back to the list</a>
        </li>

        <li>
            <a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">Edit</a>
        </li>

        <li>
            <a href=\"{{ path('collection_share_share', { 'id': collection.id }) }}\">Share</a>
        </li>

        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "collection/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\show.html.twig");
    }
}
