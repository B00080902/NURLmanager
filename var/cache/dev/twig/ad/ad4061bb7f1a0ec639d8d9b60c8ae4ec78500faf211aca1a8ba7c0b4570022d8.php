<?php

/* nurl/index.html.twig */
class __TwigTemplate_dd4b0f5b7c2623336307e2901952c48372fde31de5f07761480a377c04a01e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d63e4abf90f6cef29f55f143d33385dcfcb82fcf5cd4e117f812d1918a448f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63e4abf90f6cef29f55f143d33385dcfcb82fcf5cd4e117f812d1918a448f2b->enter($__internal_d63e4abf90f6cef29f55f143d33385dcfcb82fcf5cd4e117f812d1918a448f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $__internal_80165c6e14dac74e5a63db35627a23b3e3c07c0c3999c83d3882c18256cb4437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80165c6e14dac74e5a63db35627a23b3e3c07c0c3999c83d3882c18256cb4437->enter($__internal_80165c6e14dac74e5a63db35627a23b3e3c07c0c3999c83d3882c18256cb4437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63e4abf90f6cef29f55f143d33385dcfcb82fcf5cd4e117f812d1918a448f2b->leave($__internal_d63e4abf90f6cef29f55f143d33385dcfcb82fcf5cd4e117f812d1918a448f2b_prof);

        
        $__internal_80165c6e14dac74e5a63db35627a23b3e3c07c0c3999c83d3882c18256cb4437->leave($__internal_80165c6e14dac74e5a63db35627a23b3e3c07c0c3999c83d3882c18256cb4437_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_13700c5399ac2e5ebddf4feca0004d31ae4baa4d440d34fbc51cc220eff7caa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13700c5399ac2e5ebddf4feca0004d31ae4baa4d440d34fbc51cc220eff7caa7->enter($__internal_13700c5399ac2e5ebddf4feca0004d31ae4baa4d440d34fbc51cc220eff7caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_5f10ef553c9cc1c4f4adf0a3b580caad39200300e062d3bcf003ee48cddadae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f10ef553c9cc1c4f4adf0a3b580caad39200300e062d3bcf003ee48cddadae3->enter($__internal_5f10ef553c9cc1c4f4adf0a3b580caad39200300e062d3bcf003ee48cddadae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Nurls  ";
        
        $__internal_5f10ef553c9cc1c4f4adf0a3b580caad39200300e062d3bcf003ee48cddadae3->leave($__internal_5f10ef553c9cc1c4f4adf0a3b580caad39200300e062d3bcf003ee48cddadae3_prof);

        
        $__internal_13700c5399ac2e5ebddf4feca0004d31ae4baa4d440d34fbc51cc220eff7caa7->leave($__internal_13700c5399ac2e5ebddf4feca0004d31ae4baa4d440d34fbc51cc220eff7caa7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59ab54b642e992496c0220652a7bfedb0d216b72fd359b03c81fad777882ee66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ab54b642e992496c0220652a7bfedb0d216b72fd359b03c81fad777882ee66->enter($__internal_59ab54b642e992496c0220652a7bfedb0d216b72fd359b03c81fad777882ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1322a7b7de56ef4cd5510180bb3551083d263e79f2c62024752e3f969c42e7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1322a7b7de56ef4cd5510180bb3551083d263e79f2c62024752e3f969c42e7c1->enter($__internal_1322a7b7de56ef4cd5510180bb3551083d263e79f2c62024752e3f969c42e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"headerTable\" style=\"display: flex\" >
        <section>
            <h1>Nurls list</h1>
        </section>
        <section style=\"text-align: right\">

        </section>

    </div>

    <table style=\"text-align: center\">

        ";
        // line 20
        echo "        <thead>

            <tr>

                <th>Id</th>

                <th>Url</th>

                <th>Title</th>

                <th>Content</th>

                <th>Upvote</th>

                <th>Downvote</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        ";
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 46
            echo "
            ";
            // line 48
            echo "            ";
            if (($this->getAttribute($context["nurl"], "public", array()) == "")) {
                // line 49
                echo "
                ";
                // line 51
                echo "<tr>

                    <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "upvote", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "downvote", array()), "html", null, true);
                echo "</td>

                    ";
                // line 66
                echo "                    <td>
                        <ul>

                            <li>
                                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                        </ul>
                    </td>

                </tr>

            ";
            }
            // line 83
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>
        </li>

        ";
        // line 96
        echo "            ";
        // line 97
        echo "                ";
        // line 98
        echo "                ";
        // line 99
        echo "            ";
        // line 100
        echo "        ";
        // line 101
        echo "    </ul>
";
        
        $__internal_1322a7b7de56ef4cd5510180bb3551083d263e79f2c62024752e3f969c42e7c1->leave($__internal_1322a7b7de56ef4cd5510180bb3551083d263e79f2c62024752e3f969c42e7c1_prof);

        
        $__internal_59ab54b642e992496c0220652a7bfedb0d216b72fd359b03c81fad777882ee66->leave($__internal_59ab54b642e992496c0220652a7bfedb0d216b72fd359b03c81fad777882ee66_prof);

    }

    public function getTemplateName()
    {
        return "nurl/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 101,  214 => 100,  212 => 99,  210 => 98,  208 => 97,  206 => 96,  200 => 92,  191 => 85,  184 => 83,  172 => 74,  165 => 70,  159 => 66,  154 => 63,  149 => 61,  144 => 59,  139 => 57,  134 => 55,  127 => 53,  123 => 51,  120 => 49,  117 => 48,  114 => 46,  109 => 45,  83 => 20,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}Nurls  {% endblock %}

{% block body %}

    <div id=\"headerTable\" style=\"display: flex\" >
        <section>
            <h1>Nurls list</h1>
        </section>
        <section style=\"text-align: right\">

        </section>

    </div>

    <table style=\"text-align: center\">

        {# Table head #}
        <thead>

            <tr>

                <th>Id</th>

                <th>Url</th>

                <th>Title</th>

                <th>Content</th>

                <th>Upvote</th>

                <th>Downvote</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        {# Show all nurls #}
        {% for nurl in nurls %}

            {# Show the nurls only if they're defined as public #}
            {% if nurl.public == '' %}

                {# -------- NURL table ---------#}
                <tr>

                    <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>

                    <td>{{ nurl.url }}</td>

                    <td>{{ nurl.title }}</td>

                    <td>{{ nurl.content }}</td>

                    <td>{{ nurl.upvote }}</td>

                    <td>{{ nurl.downvote }}</td>

                    {# CRUD options #}
                    <td>
                        <ul>

                            <li>
                                <a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">show</a>
                            </li>

                            <li>
                                <a href=\"{{ path('nurl_edit', { 'id': nurl.id }) }}\">edit</a>
                            </li>

                        </ul>
                    </td>

                </tr>

            {% endif %}

        {% endfor %}

        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"{{ path('nurl_new') }}\">Create a new nurl</a>
        </li>

        {#<li>#}
            {#<form action=\"{{ path('nurl_search') }}\" method=\"post\">#}
                {#<input type=\"text\" id=\"search\" placeholder=\"Search\" value=\"{{  }}\">#}
                {#<input type=\"submit\" value=\"Search\">#}
            {#</form>#}
        {#</li>#}
    </ul>
{% endblock %}
", "nurl/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\index.html.twig");
    }
}
