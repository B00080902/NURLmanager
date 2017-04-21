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
        $__internal_4e39e86787094f01040bb42341a2b13f1b46e859ed40cda08051cc44028c6809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e39e86787094f01040bb42341a2b13f1b46e859ed40cda08051cc44028c6809->enter($__internal_4e39e86787094f01040bb42341a2b13f1b46e859ed40cda08051cc44028c6809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_83ef2be3a83dd1496e41ad081d47a1795a172d4303e2d747e53ba07dea0f7608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ef2be3a83dd1496e41ad081d47a1795a172d4303e2d747e53ba07dea0f7608->enter($__internal_83ef2be3a83dd1496e41ad081d47a1795a172d4303e2d747e53ba07dea0f7608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e39e86787094f01040bb42341a2b13f1b46e859ed40cda08051cc44028c6809->leave($__internal_4e39e86787094f01040bb42341a2b13f1b46e859ed40cda08051cc44028c6809_prof);

        
        $__internal_83ef2be3a83dd1496e41ad081d47a1795a172d4303e2d747e53ba07dea0f7608->leave($__internal_83ef2be3a83dd1496e41ad081d47a1795a172d4303e2d747e53ba07dea0f7608_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73aff0324fd16a9bec727da14705aa0363344787fcfe9c308c86e2a31d3dabcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aff0324fd16a9bec727da14705aa0363344787fcfe9c308c86e2a31d3dabcc->enter($__internal_73aff0324fd16a9bec727da14705aa0363344787fcfe9c308c86e2a31d3dabcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_719d4e7eaf3a1128f8ea048b08f0d07ad140bac7d668486264b7fc1ad9350db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719d4e7eaf3a1128f8ea048b08f0d07ad140bac7d668486264b7fc1ad9350db3->enter($__internal_719d4e7eaf3a1128f8ea048b08f0d07ad140bac7d668486264b7fc1ad9350db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 42
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tr>

            <tr>
                <th>Type</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "public", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

        <li>
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Add Tag</a>
        </li>
        <li>
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_719d4e7eaf3a1128f8ea048b08f0d07ad140bac7d668486264b7fc1ad9350db3->leave($__internal_719d4e7eaf3a1128f8ea048b08f0d07ad140bac7d668486264b7fc1ad9350db3_prof);

        
        $__internal_73aff0324fd16a9bec727da14705aa0363344787fcfe9c308c86e2a31d3dabcc->leave($__internal_73aff0324fd16a9bec727da14705aa0363344787fcfe9c308c86e2a31d3dabcc_prof);

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
        return array (  162 => 67,  157 => 65,  151 => 62,  144 => 58,  138 => 55,  128 => 48,  122 => 44,  113 => 42,  109 => 41,  101 => 36,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                {% for tag in tags %}
                    <td>{{ tag.tag }}</td>
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
