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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08e458b1887518f3cefb3e359cbde9efc6682394cf298990ca9fbc2895147308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e458b1887518f3cefb3e359cbde9efc6682394cf298990ca9fbc2895147308->enter($__internal_08e458b1887518f3cefb3e359cbde9efc6682394cf298990ca9fbc2895147308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_85cc6b2c555897770e100003af4b8e0699cd267c4295a584670c14209657df48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cc6b2c555897770e100003af4b8e0699cd267c4295a584670c14209657df48->enter($__internal_85cc6b2c555897770e100003af4b8e0699cd267c4295a584670c14209657df48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e458b1887518f3cefb3e359cbde9efc6682394cf298990ca9fbc2895147308->leave($__internal_08e458b1887518f3cefb3e359cbde9efc6682394cf298990ca9fbc2895147308_prof);

        
        $__internal_85cc6b2c555897770e100003af4b8e0699cd267c4295a584670c14209657df48->leave($__internal_85cc6b2c555897770e100003af4b8e0699cd267c4295a584670c14209657df48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d80fb37406248c89de18eccbe59702aa53d243cc7ecf3d72ba44515901e0835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80fb37406248c89de18eccbe59702aa53d243cc7ecf3d72ba44515901e0835d->enter($__internal_d80fb37406248c89de18eccbe59702aa53d243cc7ecf3d72ba44515901e0835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e869d9e74bddaae5afd54f7d4139715ec6daa8d20039175f53eb85adf0af89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e869d9e74bddaae5afd54f7d4139715ec6daa8d20039175f53eb85adf0af89a->enter($__internal_4e869d9e74bddaae5afd54f7d4139715ec6daa8d20039175f53eb85adf0af89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tags ";
        
        $__internal_4e869d9e74bddaae5afd54f7d4139715ec6daa8d20039175f53eb85adf0af89a->leave($__internal_4e869d9e74bddaae5afd54f7d4139715ec6daa8d20039175f53eb85adf0af89a_prof);

        
        $__internal_d80fb37406248c89de18eccbe59702aa53d243cc7ecf3d72ba44515901e0835d->leave($__internal_d80fb37406248c89de18eccbe59702aa53d243cc7ecf3d72ba44515901e0835d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82cfcde340618f8f8ae6b058f401a89678909329ce27a50a456fc6725a019783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cfcde340618f8f8ae6b058f401a89678909329ce27a50a456fc6725a019783->enter($__internal_82cfcde340618f8f8ae6b058f401a89678909329ce27a50a456fc6725a019783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f0f6cc126f643c7cce6c9afa1907593eb09228300231c26b93f247a776ef580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0f6cc126f643c7cce6c9afa1907593eb09228300231c26b93f247a776ef580->enter($__internal_0f0f6cc126f643c7cce6c9afa1907593eb09228300231c26b93f247a776ef580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <h1>Tags list</h1>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "
        <div class=\"flash-notice\">

            <h3>Warning!</h3>

            <h5>";
            // line 16
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h5>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_proposed");
        echo "\">Proposed tags</a>


    ";
        // line 26
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "
        <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_seeAll");
            echo "\">See all tags</a>

    ";
        }
        // line 31
        echo "
    <table style=\"text-align: center\">

        <thead>

            <tr>

                <th>Id</th>

                <th>Tag</th>

                <th>Approved</th>

                <th>Upvote</th>

                <th>Downvote</th>

                ";
        // line 48
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 49
            echo "
                    <th>Actions</th>

                ";
        }
        // line 53
        echo "
            </tr>

        </thead>

        <tbody>

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 61
            echo "
            ";
            // line 62
            if ($this->getAttribute($context["tag"], "approved", array())) {
                // line 63
                echo "                <tr>
                    <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "</a></td>

                    <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tag", array()), "html", null, true);
                echo "</td>

                    <td>";
                // line 68
                if ($this->getAttribute($context["tag"], "approved", array())) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                echo "</td>

                    <td>

                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "upvote", array()), "html", null, true);
                echo "

                        <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_upvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" >

                            <img width=\"20\" src=\"/images/upvote.png\">

                        </a>

                    </td>

                    <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "downvote", array()), "html", null, true);
                echo "

                        <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_downvote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" >

                            <img width=\"20\" src=\"/images/downvote.png\">

                        </a>

                    </td>

                    ";
                // line 92
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
                    // line 93
                    echo "

                    <td>

                        <ul>

                            <li>
                                <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                    echo "\">show</a>
                            </li>

                            <li>
                                <a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                    echo "\">edit</a>
                            </li>

                            ";
                    // line 108
                    echo "                            ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                        // line 109
                        echo "
                                <li>
                                    <a href=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_delete", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                        echo "\">delete</a>
                                </li>

                            ";
                    }
                    // line 115
                    echo "
                        </ul>

                    </td>

                    ";
                }
                // line 121
                echo "
                </tr>

            ";
            }
            // line 125
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </tbody>

    </table>

    <ul>

        <li>

            <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>

        </li>

    </ul>


";
        
        $__internal_0f0f6cc126f643c7cce6c9afa1907593eb09228300231c26b93f247a776ef580->leave($__internal_0f0f6cc126f643c7cce6c9afa1907593eb09228300231c26b93f247a776ef580_prof);

        
        $__internal_82cfcde340618f8f8ae6b058f401a89678909329ce27a50a456fc6725a019783->leave($__internal_82cfcde340618f8f8ae6b058f401a89678909329ce27a50a456fc6725a019783_prof);

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
        return array (  289 => 135,  279 => 127,  272 => 125,  266 => 121,  258 => 115,  251 => 111,  247 => 109,  244 => 108,  238 => 104,  231 => 100,  222 => 93,  220 => 92,  209 => 84,  204 => 82,  193 => 74,  188 => 72,  177 => 68,  172 => 66,  165 => 64,  162 => 63,  160 => 62,  157 => 61,  153 => 60,  144 => 53,  138 => 49,  136 => 48,  117 => 31,  111 => 28,  108 => 27,  105 => 26,  99 => 22,  96 => 21,  85 => 16,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Tags {% endblock %}

{% block body %}


    <h1>Tags list</h1>

    {% for flash_message in app.session.flashBag.get('notice') %}

        <div class=\"flash-notice\">

            <h3>Warning!</h3>

            <h5>{{ flash_message }}</h5>

        </div>

    {% endfor %}

    <a href=\"{{  path('tag_proposed') }}\">Proposed tags</a>


    {# Only admin can go to approve the tags #}
    {% if is_granted('ROLE_ADMIN') %}

        <a href=\"{{ path('tag_seeAll') }}\">See all tags</a>

    {% endif %}

    <table style=\"text-align: center\">

        <thead>

            <tr>

                <th>Id</th>

                <th>Tag</th>

                <th>Approved</th>

                <th>Upvote</th>

                <th>Downvote</th>

                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}

                    <th>Actions</th>

                {% endif %}

            </tr>

        </thead>

        <tbody>

        {% for tag in tags %}

            {% if tag.approved %}
                <tr>
                    <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>

                    <td>{{ tag.tag }}</td>

                    <td>{% if tag.approved %}Yes{% else %}No{% endif %}</td>

                    <td>

                        {{ tag.upvote }}

                        <a href=\"{{ path('tag_upvote', { 'id': tag.id }) }}\" >

                            <img width=\"20\" src=\"/images/upvote.png\">

                        </a>

                    </td>

                    <td>{{ tag.downvote }}

                        <a href=\"{{ path('tag_downvote', { 'id': tag.id }) }}\" >

                            <img width=\"20\" src=\"/images/downvote.png\">

                        </a>

                    </td>

                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}


                    <td>

                        <ul>

                            <li>
                                <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                            </li>

                            <li>
                                <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                            </li>

                            {# Admin tag CRUD options #}
                            {% if is_granted('ROLE_ADMIN') %}

                                <li>
                                    <a href=\"{{ path('tag_delete', { 'id': tag.id }) }}\">delete</a>
                                </li>

                            {% endif %}

                        </ul>

                    </td>

                    {% endif %}

                </tr>

            {% endif %}

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
