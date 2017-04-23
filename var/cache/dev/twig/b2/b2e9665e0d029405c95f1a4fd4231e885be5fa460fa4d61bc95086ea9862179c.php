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
        $__internal_d90637411e12737804d9d789c2f9738ccbb567d6a4438652f3e1be4626b711a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90637411e12737804d9d789c2f9738ccbb567d6a4438652f3e1be4626b711a3->enter($__internal_d90637411e12737804d9d789c2f9738ccbb567d6a4438652f3e1be4626b711a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_27f17dde7c26d0d4d0fe653806b5b6cc5cf1cbe6e69f5c21121a5e150eb4949c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f17dde7c26d0d4d0fe653806b5b6cc5cf1cbe6e69f5c21121a5e150eb4949c->enter($__internal_27f17dde7c26d0d4d0fe653806b5b6cc5cf1cbe6e69f5c21121a5e150eb4949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90637411e12737804d9d789c2f9738ccbb567d6a4438652f3e1be4626b711a3->leave($__internal_d90637411e12737804d9d789c2f9738ccbb567d6a4438652f3e1be4626b711a3_prof);

        
        $__internal_27f17dde7c26d0d4d0fe653806b5b6cc5cf1cbe6e69f5c21121a5e150eb4949c->leave($__internal_27f17dde7c26d0d4d0fe653806b5b6cc5cf1cbe6e69f5c21121a5e150eb4949c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c30b18a632a4d58ee6124ea4cf7640a38f5df17539b0ada9e027fd8a973f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c30b18a632a4d58ee6124ea4cf7640a38f5df17539b0ada9e027fd8a973f33->enter($__internal_f3c30b18a632a4d58ee6124ea4cf7640a38f5df17539b0ada9e027fd8a973f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_800216c5e8bbe57e89d7abd9b7ed18bcae84b2450ba0e8d182d731514864d831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800216c5e8bbe57e89d7abd9b7ed18bcae84b2450ba0e8d182d731514864d831->enter($__internal_800216c5e8bbe57e89d7abd9b7ed18bcae84b2450ba0e8d182d731514864d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <ul>

        <li>

            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>

        </li>


        <li>

            <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

        </li>



        <li>

            ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "

                <input type=\"submit\" value=\"Delete\">

            ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

        </li>

    </ul>

";
        
        $__internal_800216c5e8bbe57e89d7abd9b7ed18bcae84b2450ba0e8d182d731514864d831->leave($__internal_800216c5e8bbe57e89d7abd9b7ed18bcae84b2450ba0e8d182d731514864d831_prof);

        
        $__internal_f3c30b18a632a4d58ee6124ea4cf7640a38f5df17539b0ada9e027fd8a973f33->leave($__internal_f3c30b18a632a4d58ee6124ea4cf7640a38f5df17539b0ada9e027fd8a973f33_prof);

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
        return array (  189 => 97,  182 => 93,  171 => 85,  161 => 78,  146 => 66,  136 => 58,  129 => 56,  123 => 53,  120 => 52,  118 => 51,  115 => 50,  111 => 49,  101 => 42,  91 => 35,  81 => 28,  71 => 21,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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

{% endblock %}
", "nurl/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\show.html.twig");
    }
}
