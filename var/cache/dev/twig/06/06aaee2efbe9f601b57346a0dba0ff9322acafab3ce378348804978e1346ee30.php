<?php

/* tag/show.html.twig */
class __TwigTemplate_69ac6b917006ff055541d578c62824cbf0dc1b815fcaaa4122027ff0fc39b2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/show.html.twig", 1);
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
        $__internal_d3d2a34b6017608ad4069b0c116e4e47f37dd0ea5b69d26d29711644b99cd928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d2a34b6017608ad4069b0c116e4e47f37dd0ea5b69d26d29711644b99cd928->enter($__internal_d3d2a34b6017608ad4069b0c116e4e47f37dd0ea5b69d26d29711644b99cd928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_4adeaa3746fd57ab0594ec8d7c09601c5d3711edbe143bc1e671ccd88c6b977e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adeaa3746fd57ab0594ec8d7c09601c5d3711edbe143bc1e671ccd88c6b977e->enter($__internal_4adeaa3746fd57ab0594ec8d7c09601c5d3711edbe143bc1e671ccd88c6b977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d2a34b6017608ad4069b0c116e4e47f37dd0ea5b69d26d29711644b99cd928->leave($__internal_d3d2a34b6017608ad4069b0c116e4e47f37dd0ea5b69d26d29711644b99cd928_prof);

        
        $__internal_4adeaa3746fd57ab0594ec8d7c09601c5d3711edbe143bc1e671ccd88c6b977e->leave($__internal_4adeaa3746fd57ab0594ec8d7c09601c5d3711edbe143bc1e671ccd88c6b977e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5346c357e607d6beea2307e81bb717555580bc9fb695e0f21db1ce90bd82eb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5346c357e607d6beea2307e81bb717555580bc9fb695e0f21db1ce90bd82eb05->enter($__internal_5346c357e607d6beea2307e81bb717555580bc9fb695e0f21db1ce90bd82eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10ab1436327d3f155094bfe71dab2c8fc659c624b74de463d19a435cdf69130b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ab1436327d3f155094bfe71dab2c8fc659c624b74de463d19a435cdf69130b->enter($__internal_10ab1436327d3f155094bfe71dab2c8fc659c624b74de463d19a435cdf69130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tag</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tag", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Approved</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "approved", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Upvote</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "upvote", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Downvote</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "downvote", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "user", array()), "username", array()))) {
            // line 32
            echo "
<ul>
        <li>
            <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
            echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        <li>
            ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
    </ul>

";
        }
        
        $__internal_10ab1436327d3f155094bfe71dab2c8fc659c624b74de463d19a435cdf69130b->leave($__internal_10ab1436327d3f155094bfe71dab2c8fc659c624b74de463d19a435cdf69130b_prof);

        
        $__internal_5346c357e607d6beea2307e81bb717555580bc9fb695e0f21db1ce90bd82eb05->leave($__internal_5346c357e607d6beea2307e81bb717555580bc9fb695e0f21db1ce90bd82eb05_prof);

    }

    public function getTemplateName()
    {
        return "tag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  116 => 41,  110 => 38,  104 => 35,  99 => 32,  97 => 31,  89 => 26,  82 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tag.id }}</td>
            </tr>
            <tr>
                <th>Tag</th>
                <td>{{ tag.tag }}</td>
            </tr>
            <tr>
                <th>Approved</th>
                <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Upvote</th>
                <td>{{ tag.upvote }}</td>
            </tr>
            <tr>
                <th>Downvote</th>
                <td>{{ tag.downvote }}</td>
            </tr>
        </tbody>
    </table>

{% if app.user.username == tag.user.username %}

<ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

{% endif %}
{% endblock %}
", "tag/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\show.html.twig");
    }
}
