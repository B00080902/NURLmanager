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
        $__internal_657ca4427d2e68ea832eb39183ec2198cd6d33a9cf85b92f6bc4b3b65525415f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657ca4427d2e68ea832eb39183ec2198cd6d33a9cf85b92f6bc4b3b65525415f->enter($__internal_657ca4427d2e68ea832eb39183ec2198cd6d33a9cf85b92f6bc4b3b65525415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_93051cdbf8c775e1ec790a6c3962f0c989ffa804b3b578d0a4b7f7dcf945e642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93051cdbf8c775e1ec790a6c3962f0c989ffa804b3b578d0a4b7f7dcf945e642->enter($__internal_93051cdbf8c775e1ec790a6c3962f0c989ffa804b3b578d0a4b7f7dcf945e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657ca4427d2e68ea832eb39183ec2198cd6d33a9cf85b92f6bc4b3b65525415f->leave($__internal_657ca4427d2e68ea832eb39183ec2198cd6d33a9cf85b92f6bc4b3b65525415f_prof);

        
        $__internal_93051cdbf8c775e1ec790a6c3962f0c989ffa804b3b578d0a4b7f7dcf945e642->leave($__internal_93051cdbf8c775e1ec790a6c3962f0c989ffa804b3b578d0a4b7f7dcf945e642_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15469085f667c73a35a7c4b5e9948cd1f2fc416911be60f69af73ede246c39bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15469085f667c73a35a7c4b5e9948cd1f2fc416911be60f69af73ede246c39bd->enter($__internal_15469085f667c73a35a7c4b5e9948cd1f2fc416911be60f69af73ede246c39bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d60dd338dcf3457eb1169480882d6eb03e696fd67e7f6a5d0d89162f90817527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60dd338dcf3457eb1169480882d6eb03e696fd67e7f6a5d0d89162f90817527->enter($__internal_d60dd338dcf3457eb1169480882d6eb03e696fd67e7f6a5d0d89162f90817527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>IsActive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_d60dd338dcf3457eb1169480882d6eb03e696fd67e7f6a5d0d89162f90817527->leave($__internal_d60dd338dcf3457eb1169480882d6eb03e696fd67e7f6a5d0d89162f90817527_prof);

        
        $__internal_15469085f667c73a35a7c4b5e9948cd1f2fc416911be60f69af73ede246c39bd->leave($__internal_15469085f667c73a35a7c4b5e9948cd1f2fc416911be60f69af73ede246c39bd_prof);

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
        return array (  124 => 41,  117 => 36,  105 => 30,  99 => 27,  88 => 23,  84 => 22,  80 => 21,  74 => 20,  71 => 19,  67 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ dump() }}
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>IsActive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.email }}</td>
                <td>{{ user.username }}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
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
