<?php

/* nurl/show.html.twig */
class __TwigTemplate_6fe6f7dd9066b8eb0292d7f784972d44bc5acc07057888577e0fbe3d081fe2ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/show.html.twig", 1);
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
        $__internal_f38cb6f1c5434a413792db6305b997f726ba6c1ccca7031cbf139d8eb05a8027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38cb6f1c5434a413792db6305b997f726ba6c1ccca7031cbf139d8eb05a8027->enter($__internal_f38cb6f1c5434a413792db6305b997f726ba6c1ccca7031cbf139d8eb05a8027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_ac109854fb331680062971d198ba92a88f82e6ebabab20f0bc679d7ddbc81d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac109854fb331680062971d198ba92a88f82e6ebabab20f0bc679d7ddbc81d48->enter($__internal_ac109854fb331680062971d198ba92a88f82e6ebabab20f0bc679d7ddbc81d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38cb6f1c5434a413792db6305b997f726ba6c1ccca7031cbf139d8eb05a8027->leave($__internal_f38cb6f1c5434a413792db6305b997f726ba6c1ccca7031cbf139d8eb05a8027_prof);

        
        $__internal_ac109854fb331680062971d198ba92a88f82e6ebabab20f0bc679d7ddbc81d48->leave($__internal_ac109854fb331680062971d198ba92a88f82e6ebabab20f0bc679d7ddbc81d48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_620611d162408a29506045ed9b31f3eea86286326d1edbcc067cc9d91b3b98f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620611d162408a29506045ed9b31f3eea86286326d1edbcc067cc9d91b3b98f1->enter($__internal_620611d162408a29506045ed9b31f3eea86286326d1edbcc067cc9d91b3b98f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ca2807f6273ba03a6db8da1e04e1fdc179f2d92204de90fc6110e21f5b02aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca2807f6273ba03a6db8da1e04e1fdc179f2d92204de90fc6110e21f5b02aa2->enter($__internal_1ca2807f6273ba03a6db8da1e04e1fdc179f2d92204de90fc6110e21f5b02aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Nurl</h1>

    <table>

        <tbody>

            <tr>
                <th>Id</th>

                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Url</th>

                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "url", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Title</th>

                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "title", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Content</th>

                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "content", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Collection</th>

                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "collection", array()), "title", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Tags</th>

                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 50
            echo "
                    ";
            // line 51
            if ($this->getAttribute($context["tag"], "approved", array())) {
                // line 52
                echo "
                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
                echo "</td>

                    ";
            }
            // line 56
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
            </tr>


            <tr>

                <th>Type</th>

                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "public", array()), "html", null, true);
        echo "</td>

            </tr>

        </tbody>

    </table>
";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "user", array()), "username", array()))) {
            // line 74
            echo "
    <ul>

        <li>

            <a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
            echo "\">Back to the list</a>

        </li>


        <li>

            <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
            echo "\">Edit</a>

        </li>



        <li>

            ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "

                <input type=\"submit\" value=\"Delete\">

            ";
            // line 98
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "

        </li>

    </ul>
";
        }
        
        $__internal_1ca2807f6273ba03a6db8da1e04e1fdc179f2d92204de90fc6110e21f5b02aa2->leave($__internal_1ca2807f6273ba03a6db8da1e04e1fdc179f2d92204de90fc6110e21f5b02aa2_prof);

        
        $__internal_620611d162408a29506045ed9b31f3eea86286326d1edbcc067cc9d91b3b98f1->leave($__internal_620611d162408a29506045ed9b31f3eea86286326d1edbcc067cc9d91b3b98f1_prof);

    }

    public function getTemplateName()
    {
        return "nurl/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 98,  186 => 94,  175 => 86,  165 => 79,  158 => 74,  156 => 73,  146 => 66,  136 => 58,  129 => 56,  123 => 53,  120 => 52,  118 => 51,  115 => 50,  111 => 49,  101 => 42,  91 => 35,  81 => 28,  71 => 21,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Nurl</h1>

    <table>

        <tbody>

            <tr>
                <th>Id</th>

                <td>{{ nurl.id }}</td>
            </tr>


            <tr>
                <th>Url</th>

                <td>{{ nurl.url }}</td>
            </tr>


            <tr>
                <th>Title</th>

                <td>{{ nurl.title }}</td>
            </tr>


            <tr>
                <th>Content</th>

                <td>{{ nurl.content }}</td>
            </tr>


            <tr>
                <th>Collection</th>

                <td>{{ nurl.collection.title }}</td>
            </tr>


            <tr>
                <th>Tags</th>

                {% for tag in nurl.tag %}

                    {% if tag.approved %}

                        <td>{{ tag.tag }}</td>

                    {% endif %}

                {% endfor %}

            </tr>


            <tr>

                <th>Type</th>

                <td>{{ nurl.public }}</td>

            </tr>

        </tbody>

    </table>
{% if app.user.username == nurl.user.username %}

    <ul>

        <li>

            <a href=\"{{ path('nurl_index') }}\">Back to the list</a>

        </li>


        <li>

            <a href=\"{{ path('nurl_edit', { 'id': nurl.id }) }}\">Edit</a>

        </li>



        <li>

            {{ form_start(delete_form) }}

                <input type=\"submit\" value=\"Delete\">

            {{ form_end(delete_form) }}

        </li>

    </ul>
{% endif %}
{% endblock %}
", "nurl/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\show.html.twig");
    }
}
