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
        $__internal_d824e8a5b7cf70d71ca4531bc338ca23254033091ad91d40d0d458526722547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d824e8a5b7cf70d71ca4531bc338ca23254033091ad91d40d0d458526722547f->enter($__internal_d824e8a5b7cf70d71ca4531bc338ca23254033091ad91d40d0d458526722547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $__internal_27dfbe145ee9789b745a136fc148d09cdfac75398966adf2a9738d0e449fde9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dfbe145ee9789b745a136fc148d09cdfac75398966adf2a9738d0e449fde9f->enter($__internal_27dfbe145ee9789b745a136fc148d09cdfac75398966adf2a9738d0e449fde9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d824e8a5b7cf70d71ca4531bc338ca23254033091ad91d40d0d458526722547f->leave($__internal_d824e8a5b7cf70d71ca4531bc338ca23254033091ad91d40d0d458526722547f_prof);

        
        $__internal_27dfbe145ee9789b745a136fc148d09cdfac75398966adf2a9738d0e449fde9f->leave($__internal_27dfbe145ee9789b745a136fc148d09cdfac75398966adf2a9738d0e449fde9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dcdf2be474f3269e45dec5583034dad280a22402f2a11a3fdc35286ad18774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcdf2be474f3269e45dec5583034dad280a22402f2a11a3fdc35286ad18774a->enter($__internal_9dcdf2be474f3269e45dec5583034dad280a22402f2a11a3fdc35286ad18774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dee3cc2de5fe697e8c03ec49653624f8b9d60b13adbd74d38538eb7d13ce4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dee3cc2de5fe697e8c03ec49653624f8b9d60b13adbd74d38538eb7d13ce4b3->enter($__internal_0dee3cc2de5fe697e8c03ec49653624f8b9d60b13adbd74d38538eb7d13ce4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Upvote</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "upvote", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Downvote</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "downvote", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0dee3cc2de5fe697e8c03ec49653624f8b9d60b13adbd74d38538eb7d13ce4b3->leave($__internal_0dee3cc2de5fe697e8c03ec49653624f8b9d60b13adbd74d38538eb7d13ce4b3_prof);

        
        $__internal_9dcdf2be474f3269e45dec5583034dad280a22402f2a11a3fdc35286ad18774a->leave($__internal_9dcdf2be474f3269e45dec5583034dad280a22402f2a11a3fdc35286ad18774a_prof);

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
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
", "nurl/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\nurl\\show.html.twig");
    }
}
