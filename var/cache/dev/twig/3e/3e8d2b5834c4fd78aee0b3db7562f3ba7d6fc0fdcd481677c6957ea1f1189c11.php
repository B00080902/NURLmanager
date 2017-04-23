<?php

/* collection/show.html.twig */
class __TwigTemplate_d1be7936cdcfefe4d1977c19110ff4cc9019ac20447ba3898c0dd076ca29a111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "collection/show.html.twig", 1);
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
        $__internal_e8e6cd073416b8e365425f9f73a6210a7bfafc2af80d7a71143cd0d5b0d3b633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e6cd073416b8e365425f9f73a6210a7bfafc2af80d7a71143cd0d5b0d3b633->enter($__internal_e8e6cd073416b8e365425f9f73a6210a7bfafc2af80d7a71143cd0d5b0d3b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $__internal_c655d5b0ba37bf5ff4847ceb644084240e8b667839d5d0dadd511b49d18f1d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c655d5b0ba37bf5ff4847ceb644084240e8b667839d5d0dadd511b49d18f1d80->enter($__internal_c655d5b0ba37bf5ff4847ceb644084240e8b667839d5d0dadd511b49d18f1d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collection/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e6cd073416b8e365425f9f73a6210a7bfafc2af80d7a71143cd0d5b0d3b633->leave($__internal_e8e6cd073416b8e365425f9f73a6210a7bfafc2af80d7a71143cd0d5b0d3b633_prof);

        
        $__internal_c655d5b0ba37bf5ff4847ceb644084240e8b667839d5d0dadd511b49d18f1d80->leave($__internal_c655d5b0ba37bf5ff4847ceb644084240e8b667839d5d0dadd511b49d18f1d80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f383ecaa596151f883415f27457f2815a6f9e2e28e29491121ac2ff1fe2bff10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f383ecaa596151f883415f27457f2815a6f9e2e28e29491121ac2ff1fe2bff10->enter($__internal_f383ecaa596151f883415f27457f2815a6f9e2e28e29491121ac2ff1fe2bff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc7d791309e8051f61814898eadd78077aae20d196e1c2a4088d6991cc13e7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7d791309e8051f61814898eadd78077aae20d196e1c2a4088d6991cc13e7fb->enter($__internal_dc7d791309e8051f61814898eadd78077aae20d196e1c2a4088d6991cc13e7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Collection</h1>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_view", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\"><h3 style=\"color: #6e6e6e\">See shared collections</h3></a>



        <table>

        <tbody>

            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "title", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "description", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Type</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "public", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "nurl", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 41
            echo "                <th>Nurl</th>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tr>


            <tr>
                <th>Shared</th>
                <td>";
        // line 50
        if (($this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "shared", array()) == 1)) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>

            </tbody>

            </table>

            <hr>


    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_index");
        echo "\">Back to the list</a>
        </li>

        <li>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

        <li>
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_share_share", array("id" => $this->getAttribute(($context["collection"] ?? $this->getContext($context, "collection")), "id", array()))), "html", null, true);
        echo "\">Share</a>
        </li>

        <li>
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dc7d791309e8051f61814898eadd78077aae20d196e1c2a4088d6991cc13e7fb->leave($__internal_dc7d791309e8051f61814898eadd78077aae20d196e1c2a4088d6991cc13e7fb_prof);

        
        $__internal_f383ecaa596151f883415f27457f2815a6f9e2e28e29491121ac2ff1fe2bff10->leave($__internal_f383ecaa596151f883415f27457f2815a6f9e2e28e29491121ac2ff1fe2bff10_prof);

    }

    public function getTemplateName()
    {
        return "collection/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  168 => 74,  161 => 70,  154 => 66,  147 => 62,  128 => 50,  121 => 45,  113 => 43,  109 => 41,  105 => 40,  98 => 36,  90 => 31,  82 => 26,  74 => 21,  66 => 16,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Collection</h1>
    <a href=\"{{ path('collection_view', { 'id': collection.id }) }}\"><h3 style=\"color: #6e6e6e\">See shared collections</h3></a>



        <table>

        <tbody>

            <tr>
                <th>Id</th>
                <td>{{ collection.id }}</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>{{ collection.title }}</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>{{ collection.description }}</td>
            </tr>

            <tr>
                <th>Author</th>
                <td>{{ collection.user.username }}</td>
            </tr>

            <tr>
                <th>Type</th>
                <td>{{ collection.public }}</td>
            </tr>

            <tr>
                {% for nurl in collection.nurl %}
                <th>Nurl</th>

                <td>{{ nurl.title }}</td>
                {% endfor %}
            </tr>


            <tr>
                <th>Shared</th>
                <td>{% if collection.shared == 1 %}Yes{% else %}No{% endif %}</td>
            </tr>

            </tbody>

            </table>

            <hr>


    <ul>
        <li>
            <a href=\"{{ path('collection_index') }}\">Back to the list</a>
        </li>

        <li>
            <a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">Edit</a>
        </li>

        <li>
            <a href=\"{{ path('collection_share_share', { 'id': collection.id }) }}\">Share</a>
        </li>

        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "collection/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\collection\\show.html.twig");
    }
}
