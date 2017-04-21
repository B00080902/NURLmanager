<?php

/* tag/index.html.twig */
class __TwigTemplate_90a30ea421ecb120e1c4158148d57f57094dbf20ef093dfcc392e3ba0662c4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_d7441a27f12026c044ffaadd7ffc6cb14cf2b7026913e6d977d5d2c769ed69f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7441a27f12026c044ffaadd7ffc6cb14cf2b7026913e6d977d5d2c769ed69f3->enter($__internal_d7441a27f12026c044ffaadd7ffc6cb14cf2b7026913e6d977d5d2c769ed69f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_47a743e520c638bc6457abdea82f68e4fb2fda52def3baf54f2a9db7bd431909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a743e520c638bc6457abdea82f68e4fb2fda52def3baf54f2a9db7bd431909->enter($__internal_47a743e520c638bc6457abdea82f68e4fb2fda52def3baf54f2a9db7bd431909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7441a27f12026c044ffaadd7ffc6cb14cf2b7026913e6d977d5d2c769ed69f3->leave($__internal_d7441a27f12026c044ffaadd7ffc6cb14cf2b7026913e6d977d5d2c769ed69f3_prof);

        
        $__internal_47a743e520c638bc6457abdea82f68e4fb2fda52def3baf54f2a9db7bd431909->leave($__internal_47a743e520c638bc6457abdea82f68e4fb2fda52def3baf54f2a9db7bd431909_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc8da3c6f334b3c8fbd985c57e5a355f9e2eef36a33e1ba2962df58c472a551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc8da3c6f334b3c8fbd985c57e5a355f9e2eef36a33e1ba2962df58c472a551->enter($__internal_ecc8da3c6f334b3c8fbd985c57e5a355f9e2eef36a33e1ba2962df58c472a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a499c65543a88a1468d0df09bedb283132683187f24aae7cdcf42db459985066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a499c65543a88a1468d0df09bedb283132683187f24aae7cdcf42db459985066->enter($__internal_a499c65543a88a1468d0df09bedb283132683187f24aae7cdcf42db459985066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tags list</h1>

    <table style=\"text-align: center\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tag</th>
            <th>Approved</th>
            <th>Upvote</th>
            <th>Downvote</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["tag"], "approved", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td style=\"color: green\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
            echo "</td>
                <td style=\"color: red\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "user", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 28
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "
                        <ul>
                            <li>
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>
                        </ul>
                    ";
            } else {
                // line 39
                echo "
                        <ul style=\"display: flex; list-style-type: none\" >
                            <li><a id=\"upd\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><img src=\"/images/Upvote.png\"></a></li>
                            <li><a id=\"upd\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_downvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><img src=\"/images/Downvote.png\"></a></li>
                        </ul>
                    ";
            }
            // line 45
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>
        </li>
    </ul>
";
        
        $__internal_a499c65543a88a1468d0df09bedb283132683187f24aae7cdcf42db459985066->leave($__internal_a499c65543a88a1468d0df09bedb283132683187f24aae7cdcf42db459985066_prof);

        
        $__internal_ecc8da3c6f334b3c8fbd985c57e5a355f9e2eef36a33e1ba2962df58c472a551->leave($__internal_ecc8da3c6f334b3c8fbd985c57e5a355f9e2eef36a33e1ba2962df58c472a551_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  146 => 48,  138 => 45,  132 => 42,  128 => 41,  124 => 39,  117 => 35,  111 => 32,  106 => 29,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tags list</h1>

    <table style=\"text-align: center\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tag</th>
            <th>Approved</th>
            <th>Upvote</th>
            <th>Downvote</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.tag }}</td>
                <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>
                <td style=\"color: green\">{{ tag.upvote }}</td>
                <td style=\"color: red\">{{ tag.downvote }}</td>
                <td>{{ tag.user }}</td>
                <td>
                    {% if is_granted('ROLE_ADMIN')  %}

                        <ul>
                            <li>
                                <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                            </li>
                        </ul>
                    {% else %}

                        <ul style=\"display: flex; list-style-type: none\" >
                            <li><a id=\"upd\" href=\"{{ path('tag_upvote', { 'id': tag.id })}}\"><img src=\"/images/Upvote.png\"></a></li>
                            <li><a id=\"upd\" href=\"{{ path('tag_downvote', { 'id': tag.id })}}\"><img src=\"/images/Downvote.png\"></a></li>
                        </ul>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tag_new') }}\">Create a new tag</a>
        </li>
    </ul>
{% endblock %}
", "tag/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
