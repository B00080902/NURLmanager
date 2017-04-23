<?php

/* tag/all.html.twig */
class __TwigTemplate_69557e03e07a5d82f2b4193da30bd5eff817098d9151d4510b5992846fe22fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/all.html.twig", 1);
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
        $__internal_f4c6625b409dc2169f0f10284871ff2b08fba642278c6e9b9165ac6f6a69883b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c6625b409dc2169f0f10284871ff2b08fba642278c6e9b9165ac6f6a69883b->enter($__internal_f4c6625b409dc2169f0f10284871ff2b08fba642278c6e9b9165ac6f6a69883b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/all.html.twig"));

        $__internal_f73a3b9600101962631bf5ab6f1f44e901cd79227ae91c185e4b594030c66aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73a3b9600101962631bf5ab6f1f44e901cd79227ae91c185e4b594030c66aab->enter($__internal_f73a3b9600101962631bf5ab6f1f44e901cd79227ae91c185e4b594030c66aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c6625b409dc2169f0f10284871ff2b08fba642278c6e9b9165ac6f6a69883b->leave($__internal_f4c6625b409dc2169f0f10284871ff2b08fba642278c6e9b9165ac6f6a69883b_prof);

        
        $__internal_f73a3b9600101962631bf5ab6f1f44e901cd79227ae91c185e4b594030c66aab->leave($__internal_f73a3b9600101962631bf5ab6f1f44e901cd79227ae91c185e4b594030c66aab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6af34b018adce21f8843420e69829d36dad68d8adefcafe41fde364afe87db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6af34b018adce21f8843420e69829d36dad68d8adefcafe41fde364afe87db4->enter($__internal_a6af34b018adce21f8843420e69829d36dad68d8adefcafe41fde364afe87db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_615f3d2be356d97574ce99956089ee8de44c9263be14a27821323d96a86a61df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615f3d2be356d97574ce99956089ee8de44c9263be14a27821323d96a86a61df->enter($__internal_615f3d2be356d97574ce99956089ee8de44c9263be14a27821323d96a86a61df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>All Tags</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Tag</th>
            <th>Approved</th>
            <th>Upvote</th>
            <th>Downvote</th>
            <th>Vote</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "                <tr>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if ($this->getAttribute($context["tag"], "approved", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\" ><img width=\"20\" src=\"/images/upvote.png\"></a></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                            ";
            // line 34
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "                                <li>
                                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_delete", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">delete</a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_approved", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">approve</a>
                                </li>
                            ";
            }
            // line 42
            echo "                        </ul>
                    </td>
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
        
        $__internal_615f3d2be356d97574ce99956089ee8de44c9263be14a27821323d96a86a61df->leave($__internal_615f3d2be356d97574ce99956089ee8de44c9263be14a27821323d96a86a61df_prof);

        
        $__internal_a6af34b018adce21f8843420e69829d36dad68d8adefcafe41fde364afe87db4->leave($__internal_a6af34b018adce21f8843420e69829d36dad68d8adefcafe41fde364afe87db4_prof);

    }

    public function getTemplateName()
    {
        return "tag/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  141 => 46,  132 => 42,  126 => 39,  120 => 36,  117 => 35,  115 => 34,  110 => 32,  104 => 29,  97 => 25,  91 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>All Tags</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Tag</th>
            <th>Approved</th>
            <th>Upvote</th>
            <th>Downvote</th>
            <th>Vote</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
                <tr>
                    <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                    <td>{{ tag.tag }}</td>
                    <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>
                    <td>{{ tag.upvote }} <a href=\"{{ path('tag_upvote', { 'id': tag.id }) }}\" ><img width=\"20\" src=\"/images/upvote.png\"></a></td>
                    <td>{{ tag.downvote }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                            </li>
                            {% if is_granted('ROLE_ADMIN') %}
                                <li>
                                    <a href=\"{{ path('tag_delete', { 'id': tag.id }) }}\">delete</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('tag_approved', { 'id': tag.id }) }}\">approve</a>
                                </li>
                            {% endif %}
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
", "tag/all.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\all.html.twig");
    }
}
