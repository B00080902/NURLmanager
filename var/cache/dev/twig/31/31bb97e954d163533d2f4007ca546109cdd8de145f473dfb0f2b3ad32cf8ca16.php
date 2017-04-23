<?php

/* user/show.html.twig */
class __TwigTemplate_f05436131b9e2c5d41e90df7eda0c92418a1f814ac331fe5626150b9c8b14e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_b463fd21eec5f205eec56cf19660753ea2a77ca84ae7dad3301204357d84751f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b463fd21eec5f205eec56cf19660753ea2a77ca84ae7dad3301204357d84751f->enter($__internal_b463fd21eec5f205eec56cf19660753ea2a77ca84ae7dad3301204357d84751f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_c44b33a95ead4c98f44d7f444e2ddae469d0eabb1d2f43d5f73d9bd641dc4cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44b33a95ead4c98f44d7f444e2ddae469d0eabb1d2f43d5f73d9bd641dc4cf6->enter($__internal_c44b33a95ead4c98f44d7f444e2ddae469d0eabb1d2f43d5f73d9bd641dc4cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b463fd21eec5f205eec56cf19660753ea2a77ca84ae7dad3301204357d84751f->leave($__internal_b463fd21eec5f205eec56cf19660753ea2a77ca84ae7dad3301204357d84751f_prof);

        
        $__internal_c44b33a95ead4c98f44d7f444e2ddae469d0eabb1d2f43d5f73d9bd641dc4cf6->leave($__internal_c44b33a95ead4c98f44d7f444e2ddae469d0eabb1d2f43d5f73d9bd641dc4cf6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2370fad70ba09c6e87107cdfd955bc171817d7dec601b5a52bcb06950b3ca63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2370fad70ba09c6e87107cdfd955bc171817d7dec601b5a52bcb06950b3ca63a->enter($__internal_2370fad70ba09c6e87107cdfd955bc171817d7dec601b5a52bcb06950b3ca63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7535489dccfd2c29687c92015affcf2f471868b0c7d6b4f4791e33986e4a8046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7535489dccfd2c29687c92015affcf2f471868b0c7d6b4f4791e33986e4a8046->enter($__internal_7535489dccfd2c29687c92015affcf2f471868b0c7d6b4f4791e33986e4a8046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>

                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
            // line 32
            echo "
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()), "html", null, true);
            echo "</td>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7535489dccfd2c29687c92015affcf2f471868b0c7d6b4f4791e33986e4a8046->leave($__internal_7535489dccfd2c29687c92015affcf2f471868b0c7d6b4f4791e33986e4a8046_prof);

        
        $__internal_2370fad70ba09c6e87107cdfd955bc171817d7dec601b5a52bcb06950b3ca63a->leave($__internal_2370fad70ba09c6e87107cdfd955bc171817d7dec601b5a52bcb06950b3ca63a_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  135 => 48,  129 => 45,  123 => 42,  115 => 36,  106 => 33,  103 => 32,  99 => 31,  87 => 26,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ user.username }}</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Roles</th>

                {% for roles in user %}

                <td>{{ user.roles }}</td>

                {% endfor %}
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\user\\show.html.twig");
    }
}
