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
        $__internal_c0f91d6b4511359226423b03fe5beeb3b6c4e590637c368cb9ce85f22478f955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f91d6b4511359226423b03fe5beeb3b6c4e590637c368cb9ce85f22478f955->enter($__internal_c0f91d6b4511359226423b03fe5beeb3b6c4e590637c368cb9ce85f22478f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_c5b16fae5a1edd60023032957ede3f32ba8ff20d5a6a38432f88b2b22797735a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b16fae5a1edd60023032957ede3f32ba8ff20d5a6a38432f88b2b22797735a->enter($__internal_c5b16fae5a1edd60023032957ede3f32ba8ff20d5a6a38432f88b2b22797735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f91d6b4511359226423b03fe5beeb3b6c4e590637c368cb9ce85f22478f955->leave($__internal_c0f91d6b4511359226423b03fe5beeb3b6c4e590637c368cb9ce85f22478f955_prof);

        
        $__internal_c5b16fae5a1edd60023032957ede3f32ba8ff20d5a6a38432f88b2b22797735a->leave($__internal_c5b16fae5a1edd60023032957ede3f32ba8ff20d5a6a38432f88b2b22797735a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6376c45cba0d9813200301290cb1efec548c5251b8f700b9975e37c5e4f46a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6376c45cba0d9813200301290cb1efec548c5251b8f700b9975e37c5e4f46a5->enter($__internal_c6376c45cba0d9813200301290cb1efec548c5251b8f700b9975e37c5e4f46a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_489bfcbbd943ebbdff62874c22ff0dffc07c02038b5b754c1f048d04a9ae3ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489bfcbbd943ebbdff62874c22ff0dffc07c02038b5b754c1f048d04a9ae3ad6->enter($__internal_489bfcbbd943ebbdff62874c22ff0dffc07c02038b5b754c1f048d04a9ae3ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tags list</h1>

    <table>
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
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>
        </li>
    </ul>
";
        
        $__internal_489bfcbbd943ebbdff62874c22ff0dffc07c02038b5b754c1f048d04a9ae3ad6->leave($__internal_489bfcbbd943ebbdff62874c22ff0dffc07c02038b5b754c1f048d04a9ae3ad6_prof);

        
        $__internal_c6376c45cba0d9813200301290cb1efec548c5251b8f700b9975e37c5e4f46a5->leave($__internal_c6376c45cba0d9813200301290cb1efec548c5251b8f700b9975e37c5e4f46a5_prof);

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
        return array (  126 => 42,  119 => 37,  107 => 31,  101 => 28,  94 => 24,  90 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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

    <table>
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
                <td>{{ tag.upvote }}</td>
                <td>{{ tag.downvote }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                        </li>
                    </ul>
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
", "tag/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
