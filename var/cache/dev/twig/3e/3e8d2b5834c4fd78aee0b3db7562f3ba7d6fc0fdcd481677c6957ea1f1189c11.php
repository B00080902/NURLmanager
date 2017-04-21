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
        $__internal_0780aee180b616304fd8b217de9c0101e5c7060de1262ad3ea82dc54284e9b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0780aee180b616304fd8b217de9c0101e5c7060de1262ad3ea82dc54284e9b17->enter($__internal_0780aee180b616304fd8b217de9c0101e5c7060de1262ad3ea82dc54284e9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $__internal_5da5d479f3472a5654bf6346b15982cc18c332327f7a9faaf8d7a137a5712b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da5d479f3472a5654bf6346b15982cc18c332327f7a9faaf8d7a137a5712b8b->enter($__internal_5da5d479f3472a5654bf6346b15982cc18c332327f7a9faaf8d7a137a5712b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0780aee180b616304fd8b217de9c0101e5c7060de1262ad3ea82dc54284e9b17->leave($__internal_0780aee180b616304fd8b217de9c0101e5c7060de1262ad3ea82dc54284e9b17_prof);

        
        $__internal_5da5d479f3472a5654bf6346b15982cc18c332327f7a9faaf8d7a137a5712b8b->leave($__internal_5da5d479f3472a5654bf6346b15982cc18c332327f7a9faaf8d7a137a5712b8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1557d7742e6d4a36894d07bfdd6f4f1cb5acf29930da1f3ffeacdde7bdd530f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1557d7742e6d4a36894d07bfdd6f4f1cb5acf29930da1f3ffeacdde7bdd530f3->enter($__internal_1557d7742e6d4a36894d07bfdd6f4f1cb5acf29930da1f3ffeacdde7bdd530f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_051492878744ca0e4a2cf09f21a1786590b03faa7ed6d0352a5cf2cea2ee6865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051492878744ca0e4a2cf09f21a1786590b03faa7ed6d0352a5cf2cea2ee6865->enter($__internal_051492878744ca0e4a2cf09f21a1786590b03faa7ed6d0352a5cf2cea2ee6865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Collection</h1>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 8
            echo "

    <table>

        <tbody>
        ";
            // line 14
            echo "        ";
            if (($this->getAttribute($context["collection"], "public", array()) == "")) {
                // line 15
                echo "
            <tr>
                <th>Id</th>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
                echo "</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
                echo "</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
                echo "</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collection"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
            </tr>

            <tr>
                <th>Type</th>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "public", array()), "html", null, true);
                echo "</td>
            </tr>

        </tbody>

    </table>

    <hr>
        ";
            }
            // line 47
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    ";
        // line 51
        echo "        ";
        // line 52
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
        echo "\">Back to the list</a>
        ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "        ";
        // line 58
        echo "            ";
        // line 59
        echo "                ";
        // line 60
        echo "            ";
        // line 61
        echo "        ";
        // line 62
        echo "    ";
        
        $__internal_051492878744ca0e4a2cf09f21a1786590b03faa7ed6d0352a5cf2cea2ee6865->leave($__internal_051492878744ca0e4a2cf09f21a1786590b03faa7ed6d0352a5cf2cea2ee6865_prof);

        
        $__internal_1557d7742e6d4a36894d07bfdd6f4f1cb5acf29930da1f3ffeacdde7bdd530f3->leave($__internal_1557d7742e6d4a36894d07bfdd6f4f1cb5acf29930da1f3ffeacdde7bdd530f3_prof);

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
        return array (  150 => 62,  148 => 61,  146 => 60,  144 => 59,  142 => 58,  140 => 57,  138 => 56,  136 => 55,  134 => 54,  129 => 52,  127 => 51,  124 => 49,  117 => 47,  105 => 38,  97 => 33,  89 => 28,  81 => 23,  73 => 18,  68 => 15,  65 => 14,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    {% for collection in collections %}


    <table>

        <tbody>
        {# Show the nurls only if they're defined as public #}
        {% if collection.public == '' %}

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

        </tbody>

    </table>

    <hr>
        {% endif %}

    {% endfor %}

    {#<ul>#}
        {#<li>#}
            <a href=\"{{ path('collection_index') }}\">Back to the list</a>
        {#</li>#}
        {#<li>#}
            {#<a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">Edit</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    {#</ul>#}
{% endblock %}
", "collection/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\show.html.twig");
    }
}
