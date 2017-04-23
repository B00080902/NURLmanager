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
        $__internal_8d9c96cfeac63566180c053020388a6c27909217a3d5550e3c63502453551168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9c96cfeac63566180c053020388a6c27909217a3d5550e3c63502453551168->enter($__internal_8d9c96cfeac63566180c053020388a6c27909217a3d5550e3c63502453551168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_213872469b058b2ae62e59f77ae192839415f9d4eb270069a28b0c31087db86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213872469b058b2ae62e59f77ae192839415f9d4eb270069a28b0c31087db86e->enter($__internal_213872469b058b2ae62e59f77ae192839415f9d4eb270069a28b0c31087db86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9c96cfeac63566180c053020388a6c27909217a3d5550e3c63502453551168->leave($__internal_8d9c96cfeac63566180c053020388a6c27909217a3d5550e3c63502453551168_prof);

        
        $__internal_213872469b058b2ae62e59f77ae192839415f9d4eb270069a28b0c31087db86e->leave($__internal_213872469b058b2ae62e59f77ae192839415f9d4eb270069a28b0c31087db86e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a0c9adb7e8cb1b91b07bfd70611582979b7624393dd3328d80de6604393da10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0c9adb7e8cb1b91b07bfd70611582979b7624393dd3328d80de6604393da10->enter($__internal_6a0c9adb7e8cb1b91b07bfd70611582979b7624393dd3328d80de6604393da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7453e9e8c3460793be91c6c65c4f7f0d93e422dedc6425b11ee8499af8c59002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7453e9e8c3460793be91c6c65c4f7f0d93e422dedc6425b11ee8499af8c59002->enter($__internal_7453e9e8c3460793be91c6c65c4f7f0d93e422dedc6425b11ee8499af8c59002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7453e9e8c3460793be91c6c65c4f7f0d93e422dedc6425b11ee8499af8c59002->leave($__internal_7453e9e8c3460793be91c6c65c4f7f0d93e422dedc6425b11ee8499af8c59002_prof);

        
        $__internal_6a0c9adb7e8cb1b91b07bfd70611582979b7624393dd3328d80de6604393da10->leave($__internal_6a0c9adb7e8cb1b91b07bfd70611582979b7624393dd3328d80de6604393da10_prof);

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
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  89 => 26,  82 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}
", "tag/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\show.html.twig");
    }
}
