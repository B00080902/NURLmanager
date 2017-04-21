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
        $__internal_0870f37abe772ae4cbd03c59ded3b9ad147dfa2840eb1b26012d9c535eab0efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0870f37abe772ae4cbd03c59ded3b9ad147dfa2840eb1b26012d9c535eab0efb->enter($__internal_0870f37abe772ae4cbd03c59ded3b9ad147dfa2840eb1b26012d9c535eab0efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $__internal_5bd4e6063e0c38fd8f9bf05e41c5795166ba0a00b64b5f1cce596690e3a05d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd4e6063e0c38fd8f9bf05e41c5795166ba0a00b64b5f1cce596690e3a05d50->enter($__internal_5bd4e6063e0c38fd8f9bf05e41c5795166ba0a00b64b5f1cce596690e3a05d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0870f37abe772ae4cbd03c59ded3b9ad147dfa2840eb1b26012d9c535eab0efb->leave($__internal_0870f37abe772ae4cbd03c59ded3b9ad147dfa2840eb1b26012d9c535eab0efb_prof);

        
        $__internal_5bd4e6063e0c38fd8f9bf05e41c5795166ba0a00b64b5f1cce596690e3a05d50->leave($__internal_5bd4e6063e0c38fd8f9bf05e41c5795166ba0a00b64b5f1cce596690e3a05d50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c19384f44aadbe0ac7f8caadccbf22e56dff2767577bd3cad6e2732dfb87595b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19384f44aadbe0ac7f8caadccbf22e56dff2767577bd3cad6e2732dfb87595b->enter($__internal_c19384f44aadbe0ac7f8caadccbf22e56dff2767577bd3cad6e2732dfb87595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_306f63695800ef6d9852bd35e48e85ccdd1a2a2f244cddca2d61f525c78ccfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306f63695800ef6d9852bd35e48e85ccdd1a2a2f244cddca2d61f525c78ccfa3->enter($__internal_306f63695800ef6d9852bd35e48e85ccdd1a2a2f244cddca2d61f525c78ccfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Collections list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_show", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_new");
        echo "\">Create a new collection</a>
        </li>
    </ul>
";
        
        $__internal_306f63695800ef6d9852bd35e48e85ccdd1a2a2f244cddca2d61f525c78ccfa3->leave($__internal_306f63695800ef6d9852bd35e48e85ccdd1a2a2f244cddca2d61f525c78ccfa3_prof);

        
        $__internal_c19384f44aadbe0ac7f8caadccbf22e56dff2767577bd3cad6e2732dfb87595b->leave($__internal_c19384f44aadbe0ac7f8caadccbf22e56dff2767577bd3cad6e2732dfb87595b_prof);

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
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for collection in collections %}
            <tr>
                <td><a href=\"{{ path('collection_show', { 'id': collection.id }) }}\">{{ collection.id }}</a></td>
                <td>{{ collection.title }}</td>
                <td>{{ collection.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('collection_show', { 'id': collection.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
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
