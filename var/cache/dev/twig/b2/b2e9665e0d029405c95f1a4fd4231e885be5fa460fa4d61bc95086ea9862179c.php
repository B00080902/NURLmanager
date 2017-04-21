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
        $__internal_0d97c8f3d8578e00a5095679c3c527523f483dd72f1cb3f404e1c04176806dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d97c8f3d8578e00a5095679c3c527523f483dd72f1cb3f404e1c04176806dfb->enter($__internal_0d97c8f3d8578e00a5095679c3c527523f483dd72f1cb3f404e1c04176806dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_adec42614ba7415dd4f415b75ec4398900a30a21d8d075cafa33db7d123a49ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adec42614ba7415dd4f415b75ec4398900a30a21d8d075cafa33db7d123a49ca->enter($__internal_adec42614ba7415dd4f415b75ec4398900a30a21d8d075cafa33db7d123a49ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d97c8f3d8578e00a5095679c3c527523f483dd72f1cb3f404e1c04176806dfb->leave($__internal_0d97c8f3d8578e00a5095679c3c527523f483dd72f1cb3f404e1c04176806dfb_prof);

        
        $__internal_adec42614ba7415dd4f415b75ec4398900a30a21d8d075cafa33db7d123a49ca->leave($__internal_adec42614ba7415dd4f415b75ec4398900a30a21d8d075cafa33db7d123a49ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff903c697f9c77347011d99dcbc965e148277a2fa17b120f338ead6d73034030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff903c697f9c77347011d99dcbc965e148277a2fa17b120f338ead6d73034030->enter($__internal_ff903c697f9c77347011d99dcbc965e148277a2fa17b120f338ead6d73034030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_476d6de99b88801944900262045298b7bd04c9bfd562111f839659993fc9c8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476d6de99b88801944900262045298b7bd04c9bfd562111f839659993fc9c8e8->enter($__internal_476d6de99b88801944900262045298b7bd04c9bfd562111f839659993fc9c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl</h1>

    <table>
        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Upvote</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "upvote", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Downvote</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "downvote", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Collection</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "collection", array()), "title", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Tags</th>
                ";
        // line 42
        echo "            </tr>

            <tr>
                <th>Type</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "public", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Add Tag</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_476d6de99b88801944900262045298b7bd04c9bfd562111f839659993fc9c8e8->leave($__internal_476d6de99b88801944900262045298b7bd04c9bfd562111f839659993fc9c8e8_prof);

        
        $__internal_ff903c697f9c77347011d99dcbc965e148277a2fa17b120f338ead6d73034030->leave($__internal_ff903c697f9c77347011d99dcbc965e148277a2fa17b120f338ead6d73034030_prof);

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
        return array (  149 => 65,  144 => 63,  138 => 60,  131 => 56,  125 => 53,  115 => 46,  109 => 42,  101 => 36,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Upvote</th>
                <td>{{ nurl.upvote }}</td>
            </tr>
            <tr>
                <th>Downvote</th>
                <td>{{ nurl.downvote }}</td>
            </tr>

            <tr>
                <th>Collection</th>
                <td>{{ nurl.collection.title }}</td>
            </tr>

            <tr>
                <th>Tags</th>
                {#<td>{{ nurl.tag.tag }}</td>#}
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
            <a href=\"{{ path('tag_new', { 'id': nurl.id }) }}\">Add Tag</a>
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
