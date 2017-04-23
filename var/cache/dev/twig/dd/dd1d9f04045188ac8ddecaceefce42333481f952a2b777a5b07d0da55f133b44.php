<?php

/* nurl/all.html.twig */
class __TwigTemplate_56f3233b17bb053fb923e1116da4491d5ad119ed0e95c32dcb4e7e81f07b88f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/all.html.twig", 1);
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
        $__internal_e95a9d84c1b753e5fb995c8532c2d9bf69ae04c7bd4315ebf8a7de2aa2b3abd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95a9d84c1b753e5fb995c8532c2d9bf69ae04c7bd4315ebf8a7de2aa2b3abd7->enter($__internal_e95a9d84c1b753e5fb995c8532c2d9bf69ae04c7bd4315ebf8a7de2aa2b3abd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/all.html.twig"));

        $__internal_6847d5638a95a6ed06ba7743d9b70c97927ff700d172f69bff8bf39f92f5176a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6847d5638a95a6ed06ba7743d9b70c97927ff700d172f69bff8bf39f92f5176a->enter($__internal_6847d5638a95a6ed06ba7743d9b70c97927ff700d172f69bff8bf39f92f5176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95a9d84c1b753e5fb995c8532c2d9bf69ae04c7bd4315ebf8a7de2aa2b3abd7->leave($__internal_e95a9d84c1b753e5fb995c8532c2d9bf69ae04c7bd4315ebf8a7de2aa2b3abd7_prof);

        
        $__internal_6847d5638a95a6ed06ba7743d9b70c97927ff700d172f69bff8bf39f92f5176a->leave($__internal_6847d5638a95a6ed06ba7743d9b70c97927ff700d172f69bff8bf39f92f5176a_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_3862865a08ae77fdff65c35c385e329a7baa2569c6eb100aaa85cc02bef0256f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3862865a08ae77fdff65c35c385e329a7baa2569c6eb100aaa85cc02bef0256f->enter($__internal_3862865a08ae77fdff65c35c385e329a7baa2569c6eb100aaa85cc02bef0256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_9aca5834cdf2543cb966db05c8b25e3559e8e9ba770cc35d9b7d446b0abcae4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aca5834cdf2543cb966db05c8b25e3559e8e9ba770cc35d9b7d446b0abcae4f->enter($__internal_9aca5834cdf2543cb966db05c8b25e3559e8e9ba770cc35d9b7d446b0abcae4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Pending Nurls  ";
        
        $__internal_9aca5834cdf2543cb966db05c8b25e3559e8e9ba770cc35d9b7d446b0abcae4f->leave($__internal_9aca5834cdf2543cb966db05c8b25e3559e8e9ba770cc35d9b7d446b0abcae4f_prof);

        
        $__internal_3862865a08ae77fdff65c35c385e329a7baa2569c6eb100aaa85cc02bef0256f->leave($__internal_3862865a08ae77fdff65c35c385e329a7baa2569c6eb100aaa85cc02bef0256f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca5aa6bae1b033c086587ea080d25dfafa95eb77d6447d84f330475c7bfc2549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5aa6bae1b033c086587ea080d25dfafa95eb77d6447d84f330475c7bfc2549->enter($__internal_ca5aa6bae1b033c086587ea080d25dfafa95eb77d6447d84f330475c7bfc2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b943f04324211bcb928d2a94c5f73004b157f2f2f7e01bbbfe8cd669f1a088c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b943f04324211bcb928d2a94c5f73004b157f2f2f7e01bbbfe8cd669f1a088c9->enter($__internal_b943f04324211bcb928d2a94c5f73004b157f2f2f7e01bbbfe8cd669f1a088c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"headerTable\" style=\"display: flex\" >
        <section>
            <h1>Pending Nurls </h1>
        </section>
    </div>

    <table style=\"text-align: center\">

        ";
        // line 16
        echo "        <thead>

        <tr>

            <th>Id</th>

            <th>Url</th>

            <th>Title</th>

            <th>Content</th>

            <th>Type</th>

            <th>Approved</th>

            <th>Actions</th>

        </tr>

        </thead>

        <tbody>

        ";
        // line 41
        echo "
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 43
            echo "

            ";
            // line 45
            if (($this->getAttribute($context["nurl"], "approved", array()) == false)) {
                // line 46
                echo "


            ";
                // line 50
                echo "
                ";
                // line 52
                echo "                <tr>

                    <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "public", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "approved", array()), "html", null, true);
                echo "</td>


                    ";
                // line 68
                echo "                    <td>
                        <ul>

                            <li>
                                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_delete", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">delete</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_approved", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">approve</a>
                            </li>

                        </ul>
                    </td>

                </tr>

            ";
            }
            // line 93
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "

        <ul>
            <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Go back</a> </li>
        </ul>

        </tbody>

    </table>



";
        
        $__internal_b943f04324211bcb928d2a94c5f73004b157f2f2f7e01bbbfe8cd669f1a088c9->leave($__internal_b943f04324211bcb928d2a94c5f73004b157f2f2f7e01bbbfe8cd669f1a088c9_prof);

        
        $__internal_ca5aa6bae1b033c086587ea080d25dfafa95eb77d6447d84f330475c7bfc2549->leave($__internal_ca5aa6bae1b033c086587ea080d25dfafa95eb77d6447d84f330475c7bfc2549_prof);

    }

    public function getTemplateName()
    {
        return "nurl/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 98,  209 => 95,  202 => 93,  190 => 84,  183 => 80,  176 => 76,  169 => 72,  163 => 68,  157 => 64,  152 => 62,  147 => 60,  142 => 58,  137 => 56,  130 => 54,  126 => 52,  123 => 50,  118 => 46,  116 => 45,  112 => 43,  108 => 42,  105 => 41,  79 => 16,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}Pending Nurls  {% endblock %}

{% block body %}

    <div id=\"headerTable\" style=\"display: flex\" >
        <section>
            <h1>Pending Nurls </h1>
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

            <th>Type</th>

            <th>Approved</th>

            <th>Actions</th>

        </tr>

        </thead>

        <tbody>

        {# Show all nurls #}

        {% for nurl in nurls %}


            {% if nurl.approved == false %}



            {# Show the nurls only if they're defined as public #}

                {# -------- NURL table --------- #}
                <tr>

                    <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>

                    <td>{{ nurl.url }}</td>

                    <td>{{ nurl.title }}</td>

                    <td>{{ nurl.content }}</td>

                    <td>{{ nurl.public }}</td>

                    <td>{{ nurl.approved }}</td>


                    {# CRUD options #}
                    <td>
                        <ul>

                            <li>
                                <a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">show</a>
                            </li>

                            <li>
                                <a href=\"{{ path('nurl_edit', { 'id': nurl.id }) }}\">edit</a>
                            </li>

                            <li>
                                <a href=\"{{ path('nurl_delete', { 'id': nurl.id }) }}\">delete</a>
                            </li>

                            <li>
                                <a href=\"{{ path('nurl_approved', { 'id': nurl.id }) }}\">approve</a>
                            </li>

                        </ul>
                    </td>

                </tr>

            {% endif %}

        {% endfor %}


        <ul>
            <li><a href=\"{{ path('nurl_index') }}\">Go back</a> </li>
        </ul>

        </tbody>

    </table>



{% endblock %}
", "nurl/all.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\all.html.twig");
    }
}
