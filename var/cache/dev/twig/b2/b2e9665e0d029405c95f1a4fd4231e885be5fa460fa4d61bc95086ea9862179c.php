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
        $__internal_5d4d80d140c2f3eb10192bbed638b2d1c5b0d7de11858d63191cb3c42586e741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4d80d140c2f3eb10192bbed638b2d1c5b0d7de11858d63191cb3c42586e741->enter($__internal_5d4d80d140c2f3eb10192bbed638b2d1c5b0d7de11858d63191cb3c42586e741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_c9d472afd2a0acbdf90ec9ca6177f286e431bb04be40524ea9135186783dc1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d472afd2a0acbdf90ec9ca6177f286e431bb04be40524ea9135186783dc1be->enter($__internal_c9d472afd2a0acbdf90ec9ca6177f286e431bb04be40524ea9135186783dc1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4d80d140c2f3eb10192bbed638b2d1c5b0d7de11858d63191cb3c42586e741->leave($__internal_5d4d80d140c2f3eb10192bbed638b2d1c5b0d7de11858d63191cb3c42586e741_prof);

        
        $__internal_c9d472afd2a0acbdf90ec9ca6177f286e431bb04be40524ea9135186783dc1be->leave($__internal_c9d472afd2a0acbdf90ec9ca6177f286e431bb04be40524ea9135186783dc1be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e47b17217f6be49d7735748e96cbb8f85724b4c059ccf6a750ea91b14e9aa64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e47b17217f6be49d7735748e96cbb8f85724b4c059ccf6a750ea91b14e9aa64->enter($__internal_5e47b17217f6be49d7735748e96cbb8f85724b4c059ccf6a750ea91b14e9aa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac981380b1ad39b922e8aef4fca1af556b204f46623da5be60bcc7e67d5d13e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac981380b1ad39b922e8aef4fca1af556b204f46623da5be60bcc7e67d5d13e2->enter($__internal_ac981380b1ad39b922e8aef4fca1af556b204f46623da5be60bcc7e67d5d13e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()), "tag", array()), "html", null, true);
        echo "</td>
            </tr>

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
        
        $__internal_ac981380b1ad39b922e8aef4fca1af556b204f46623da5be60bcc7e67d5d13e2->leave($__internal_ac981380b1ad39b922e8aef4fca1af556b204f46623da5be60bcc7e67d5d13e2_prof);

        
        $__internal_5e47b17217f6be49d7735748e96cbb8f85724b4c059ccf6a750ea91b14e9aa64->leave($__internal_5e47b17217f6be49d7735748e96cbb8f85724b4c059ccf6a750ea91b14e9aa64_prof);

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
        return array (  151 => 65,  146 => 63,  140 => 60,  133 => 56,  127 => 53,  117 => 46,  109 => 41,  101 => 36,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ nurl.tag.tag }}</td>
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
