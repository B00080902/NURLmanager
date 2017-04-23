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
        $__internal_5676e055b6531558cc8b3114b15760834ca96a53f54d3928e895db1beb5070e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5676e055b6531558cc8b3114b15760834ca96a53f54d3928e895db1beb5070e3->enter($__internal_5676e055b6531558cc8b3114b15760834ca96a53f54d3928e895db1beb5070e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_b6b7910364c20f2b107403146da5d468b1e17d2dcaa1ae59fe55b5b8a858b509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b7910364c20f2b107403146da5d468b1e17d2dcaa1ae59fe55b5b8a858b509->enter($__internal_b6b7910364c20f2b107403146da5d468b1e17d2dcaa1ae59fe55b5b8a858b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5676e055b6531558cc8b3114b15760834ca96a53f54d3928e895db1beb5070e3->leave($__internal_5676e055b6531558cc8b3114b15760834ca96a53f54d3928e895db1beb5070e3_prof);

        
        $__internal_b6b7910364c20f2b107403146da5d468b1e17d2dcaa1ae59fe55b5b8a858b509->leave($__internal_b6b7910364c20f2b107403146da5d468b1e17d2dcaa1ae59fe55b5b8a858b509_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c98eb1467ba1c37cf18f8cdd8695bc63e382f1bdb82a658c3199ef6219ef14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c98eb1467ba1c37cf18f8cdd8695bc63e382f1bdb82a658c3199ef6219ef14->enter($__internal_a0c98eb1467ba1c37cf18f8cdd8695bc63e382f1bdb82a658c3199ef6219ef14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3da750e5d04206c791210bfd74b22f7e21dbe27475d13bfe652ba2de29a1d7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da750e5d04206c791210bfd74b22f7e21dbe27475d13bfe652ba2de29a1d7f7->enter($__internal_3da750e5d04206c791210bfd74b22f7e21dbe27475d13bfe652ba2de29a1d7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Is active</th>
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
";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "
    <ul>
        <li>
            <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        <li>
            ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
    </ul>
";
        }
        // line 55
        echo "    <div style=\"display: flex\">

        <section>

            <h3>These are your nurls</h3>

            <table>

                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 64
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
            echo "</a>

                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your collections</h3>

            <table>

                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 88
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("collection_edit", array("id" => $this->getAttribute($context["collection"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collection"], "title", array()), "html", null, true);
            echo "</a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your tags</h3>

            <table>

                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 111
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
            echo "</a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
            </table>

        </section>

    </div>
";
        
        $__internal_3da750e5d04206c791210bfd74b22f7e21dbe27475d13bfe652ba2de29a1d7f7->leave($__internal_3da750e5d04206c791210bfd74b22f7e21dbe27475d13bfe652ba2de29a1d7f7_prof);

        
        $__internal_a0c98eb1467ba1c37cf18f8cdd8695bc63e382f1bdb82a658c3199ef6219ef14->leave($__internal_a0c98eb1467ba1c37cf18f8cdd8695bc63e382f1bdb82a658c3199ef6219ef14_prof);

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
        return array (  261 => 120,  248 => 115,  242 => 111,  238 => 110,  223 => 97,  210 => 92,  204 => 88,  200 => 87,  185 => 74,  171 => 68,  165 => 64,  161 => 63,  151 => 55,  144 => 51,  139 => 49,  133 => 46,  127 => 43,  122 => 40,  120 => 39,  115 => 36,  106 => 33,  103 => 32,  99 => 31,  87 => 26,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Is active</th>
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
{% if is_granted('ROLE_ADMIN') %}

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
{% endif %}
    <div style=\"display: flex\">

        <section>

            <h3>These are your nurls</h3>

            <table>

                {% for nurl in nurls  %}

                    <tr>
                        <td>

                            <a href=\"{{ path('nurl_edit', { 'id': nurl.id }) }}\">{{ nurl.title }}</a>

                        </td>
                    </tr>

                {%  endfor %}

            </table>

        </section>

        <hr>

        <section>

            <h3>These are your collections</h3>

            <table>

                {% for collection in collections %}

                    <tr>
                        <td>

                            <a href=\"{{ path('collection_edit', { 'id': collection.id }) }}\">{{ collection.title }}</a>

                        </td>
                    </tr>
                {%  endfor %}

            </table>

        </section>

        <hr>

        <section>

            <h3>These are your tags</h3>

            <table>

                {% for tag in tags %}

                    <tr>
                        <td>

                            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">{{ tag.tag }}</a>

                        </td>
                    </tr>
                {%  endfor %}

            </table>

        </section>

    </div>
{% endblock %}
", "user/show.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\user\\show.html.twig");
    }
}
