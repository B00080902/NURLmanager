<?php

/* user/index.html.twig */
class __TwigTemplate_885270aa5b2111698c366ebc4bbbfbd5af6aeaa1c032dda7cd7543e4862121c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_d7df75eb8232bc3a9e57a30d6654ef39eb8c97a4c7b6a66d5e9934aef93ff838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7df75eb8232bc3a9e57a30d6654ef39eb8c97a4c7b6a66d5e9934aef93ff838->enter($__internal_d7df75eb8232bc3a9e57a30d6654ef39eb8c97a4c7b6a66d5e9934aef93ff838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_bfb72a80fba1e5eefba29bac2afe5b613de28ee8b1bb54fc3b9e888199d9dec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb72a80fba1e5eefba29bac2afe5b613de28ee8b1bb54fc3b9e888199d9dec8->enter($__internal_bfb72a80fba1e5eefba29bac2afe5b613de28ee8b1bb54fc3b9e888199d9dec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7df75eb8232bc3a9e57a30d6654ef39eb8c97a4c7b6a66d5e9934aef93ff838->leave($__internal_d7df75eb8232bc3a9e57a30d6654ef39eb8c97a4c7b6a66d5e9934aef93ff838_prof);

        
        $__internal_bfb72a80fba1e5eefba29bac2afe5b613de28ee8b1bb54fc3b9e888199d9dec8->leave($__internal_bfb72a80fba1e5eefba29bac2afe5b613de28ee8b1bb54fc3b9e888199d9dec8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98da5e227854deed84692e163ae3e3b21634557d8bd5c4a45aed6e31ae070f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98da5e227854deed84692e163ae3e3b21634557d8bd5c4a45aed6e31ae070f51->enter($__internal_98da5e227854deed84692e163ae3e3b21634557d8bd5c4a45aed6e31ae070f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b747e7ac68e37bb54ac9b04b0bc41902fab3cab0aada65540a4779a28da4ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b747e7ac68e37bb54ac9b04b0bc41902fab3cab0aada65540a4779a28da4ea9->enter($__internal_2b747e7ac68e37bb54ac9b04b0bc41902fab3cab0aada65540a4779a28da4ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Users list</h1>

    <table>

        <thead>

            <tr>

                <th>Id</th>

                <th>Email</th>

                <th>Username</th>

                <th>IsActive</th>

                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "
                    <th>Actions</th>

                    <th>Password</th>

                ";
        }
        // line 28
        echo "
            </tr>

        </thead>

        <tbody>

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "
            <tr>

                <td>

                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">

                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "

                    </a>

                </td>

                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>

                <td>

                    ";
            // line 55
            if ($this->getAttribute($context["user"], "isActive", array())) {
                // line 56
                echo "
                        Yes

                    ";
            } else {
                // line 60
                echo "
                        No

                    ";
            }
            // line 64
            echo "
                </td>
                ";
            // line 66
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "
                <td>

                    <ul>

                        <li>

                            <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">show</a>

                        </li>

                        <li>

                            <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">edit</a>

                        </li>

                    </ul>

                </td>

                <td>
                    ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
                echo "
                </td>


                ";
            }
            // line 94
            echo "
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_2b747e7ac68e37bb54ac9b04b0bc41902fab3cab0aada65540a4779a28da4ea9->leave($__internal_2b747e7ac68e37bb54ac9b04b0bc41902fab3cab0aada65540a4779a28da4ea9_prof);

        
        $__internal_98da5e227854deed84692e163ae3e3b21634557d8bd5c4a45aed6e31ae070f51->leave($__internal_98da5e227854deed84692e163ae3e3b21634557d8bd5c4a45aed6e31ae070f51_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 105,  191 => 98,  182 => 94,  174 => 89,  162 => 80,  153 => 74,  144 => 67,  142 => 66,  138 => 64,  132 => 60,  126 => 56,  124 => 55,  117 => 51,  112 => 49,  103 => 43,  98 => 41,  91 => 36,  87 => 35,  78 => 28,  70 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Users list</h1>

    <table>

        <thead>

            <tr>

                <th>Id</th>

                <th>Email</th>

                <th>Username</th>

                <th>IsActive</th>

                {% if is_granted('ROLE_ADMIN') %}

                    <th>Actions</th>

                    <th>Password</th>

                {% endif %}

            </tr>

        </thead>

        <tbody>

        {% for user in users %}

            <tr>

                <td>

                    <a href=\"{{ path('user_show', { 'id': user.id }) }}\">

                        {{ user.id }}

                    </a>

                </td>

                <td>{{ user.email }}</td>

                <td>{{ user.username }}</td>

                <td>

                    {% if user.isActive %}

                        Yes

                    {% else %}

                        No

                    {% endif %}

                </td>
                {% if is_granted('ROLE_ADMIN') %}

                <td>

                    <ul>

                        <li>

                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>

                        </li>

                        <li>

                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>

                        </li>

                    </ul>

                </td>

                <td>
                    {{ user.password }}
                </td>


                {% endif %}

            </tr>

        {% endfor %}

        </tbody>

    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\user\\index.html.twig");
    }
}
