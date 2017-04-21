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
        $__internal_0e48df0794899475927cd32982641f99aec3dd78fad0e40675375895d12a7189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e48df0794899475927cd32982641f99aec3dd78fad0e40675375895d12a7189->enter($__internal_0e48df0794899475927cd32982641f99aec3dd78fad0e40675375895d12a7189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $__internal_b0c7c852cfcb1c543f4032c691645856f31cb0cafd4341043f74fd8dd286e413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c7c852cfcb1c543f4032c691645856f31cb0cafd4341043f74fd8dd286e413->enter($__internal_b0c7c852cfcb1c543f4032c691645856f31cb0cafd4341043f74fd8dd286e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e48df0794899475927cd32982641f99aec3dd78fad0e40675375895d12a7189->leave($__internal_0e48df0794899475927cd32982641f99aec3dd78fad0e40675375895d12a7189_prof);

        
        $__internal_b0c7c852cfcb1c543f4032c691645856f31cb0cafd4341043f74fd8dd286e413->leave($__internal_b0c7c852cfcb1c543f4032c691645856f31cb0cafd4341043f74fd8dd286e413_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_27348c8742e73d3813f11e1321e117662865530ffd331e8f8bde64171553771a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27348c8742e73d3813f11e1321e117662865530ffd331e8f8bde64171553771a->enter($__internal_27348c8742e73d3813f11e1321e117662865530ffd331e8f8bde64171553771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_e52272f05a00e27c870d9aa6a74a51de6cf02c34b95987b6c9898b78f20f5f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52272f05a00e27c870d9aa6a74a51de6cf02c34b95987b6c9898b78f20f5f61->enter($__internal_e52272f05a00e27c870d9aa6a74a51de6cf02c34b95987b6c9898b78f20f5f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Nurls  ";
        
        $__internal_e52272f05a00e27c870d9aa6a74a51de6cf02c34b95987b6c9898b78f20f5f61->leave($__internal_e52272f05a00e27c870d9aa6a74a51de6cf02c34b95987b6c9898b78f20f5f61_prof);

        
        $__internal_27348c8742e73d3813f11e1321e117662865530ffd331e8f8bde64171553771a->leave($__internal_27348c8742e73d3813f11e1321e117662865530ffd331e8f8bde64171553771a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c9d6bddb3bc65a827db30b7ded1d275e5e4d5d648a115da216a2a690be126e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c9d6bddb3bc65a827db30b7ded1d275e5e4d5d648a115da216a2a690be126e->enter($__internal_59c9d6bddb3bc65a827db30b7ded1d275e5e4d5d648a115da216a2a690be126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b65c72bff4bacd167bad5397f0738d0378b291ae4facaddc31fcbf6c42f2722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b65c72bff4bacd167bad5397f0738d0378b291ae4facaddc31fcbf6c42f2722->enter($__internal_8b65c72bff4bacd167bad5397f0738d0378b291ae4facaddc31fcbf6c42f2722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"headerTable\" style=\"display: flex\" >
        <section>
            <h1>Nurls list</h1>
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

                <th>Upvote</th>

                <th>Downvote</th>

                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        ";
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 42
            echo "
            ";
            // line 44
            echo "            ";
            if (($this->getAttribute($context["nurl"], "public", array()) == "")) {
                // line 45
                echo "
                ";
                // line 47
                echo "                <tr>

                    <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "upvote", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "downvote", array()), "html", null, true);
                echo "</td>

                    ";
                // line 62
                echo "                    <td>
                        <ul>

                            <li>
                                <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>

                        </ul>
                    </td>

                </tr>

            ";
            }
            // line 79
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>
        </li>

        ";
        // line 92
        echo "            ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "            ";
        // line 96
        echo "        ";
        // line 97
        echo "    </ul>
";
        
        $__internal_8b65c72bff4bacd167bad5397f0738d0378b291ae4facaddc31fcbf6c42f2722->leave($__internal_8b65c72bff4bacd167bad5397f0738d0378b291ae4facaddc31fcbf6c42f2722_prof);

        
        $__internal_59c9d6bddb3bc65a827db30b7ded1d275e5e4d5d648a115da216a2a690be126e->leave($__internal_59c9d6bddb3bc65a827db30b7ded1d275e5e4d5d648a115da216a2a690be126e_prof);

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
        return array (  212 => 97,  210 => 96,  208 => 95,  206 => 94,  204 => 93,  202 => 92,  196 => 88,  187 => 81,  180 => 79,  168 => 70,  161 => 66,  155 => 62,  150 => 59,  145 => 57,  140 => 55,  135 => 53,  130 => 51,  123 => 49,  119 => 47,  116 => 45,  113 => 44,  110 => 42,  105 => 41,  79 => 16,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

                {# -------- NURL table --------- #}
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
