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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9dc762639ac6698b6d282b6dec6b1c172f2f50b05998f38cd1b992f85ef959c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dc762639ac6698b6d282b6dec6b1c172f2f50b05998f38cd1b992f85ef959c->enter($__internal_d9dc762639ac6698b6d282b6dec6b1c172f2f50b05998f38cd1b992f85ef959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $__internal_d61d48ad5e7c1294cca9ecc7cb858890ac452be20cad26f451c9ab8d40458ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61d48ad5e7c1294cca9ecc7cb858890ac452be20cad26f451c9ab8d40458ed4->enter($__internal_d61d48ad5e7c1294cca9ecc7cb858890ac452be20cad26f451c9ab8d40458ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9dc762639ac6698b6d282b6dec6b1c172f2f50b05998f38cd1b992f85ef959c->leave($__internal_d9dc762639ac6698b6d282b6dec6b1c172f2f50b05998f38cd1b992f85ef959c_prof);

        
        $__internal_d61d48ad5e7c1294cca9ecc7cb858890ac452be20cad26f451c9ab8d40458ed4->leave($__internal_d61d48ad5e7c1294cca9ecc7cb858890ac452be20cad26f451c9ab8d40458ed4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af0519cb99b49f0f67a8506bb45bad38a7dc5dbeefb99f68aba2f65e7fee18b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0519cb99b49f0f67a8506bb45bad38a7dc5dbeefb99f68aba2f65e7fee18b5->enter($__internal_af0519cb99b49f0f67a8506bb45bad38a7dc5dbeefb99f68aba2f65e7fee18b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e54d38501d91e86e9f60143de6c06d8895f2d483710e6b9d63b0f8d9431bc385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54d38501d91e86e9f60143de6c06d8895f2d483710e6b9d63b0f8d9431bc385->enter($__internal_e54d38501d91e86e9f60143de6c06d8895f2d483710e6b9d63b0f8d9431bc385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurls list</h1>

    <table>
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
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "upvote", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "downvote", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_show", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_edit", array("id" => $this->getAttribute($context["nurl"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_new");
        echo "\">Create a new nurl</a>
        </li>
    </ul>
";
        
        $__internal_e54d38501d91e86e9f60143de6c06d8895f2d483710e6b9d63b0f8d9431bc385->leave($__internal_e54d38501d91e86e9f60143de6c06d8895f2d483710e6b9d63b0f8d9431bc385_prof);

        
        $__internal_af0519cb99b49f0f67a8506bb45bad38a7dc5dbeefb99f68aba2f65e7fee18b5->leave($__internal_af0519cb99b49f0f67a8506bb45bad38a7dc5dbeefb99f68aba2f65e7fee18b5_prof);

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
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nurls list</h1>

    <table>
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
        {% for nurl in nurls %}
            <tr>
                <td><a href=\"{{ path('nurl_show', { 'id': nurl.id }) }}\">{{ nurl.id }}</a></td>
                <td>{{ nurl.url }}</td>
                <td>{{ nurl.title }}</td>
                <td>{{ nurl.content }}</td>
                <td>{{ nurl.upvote }}</td>
                <td>{{ nurl.downvote }}</td>
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
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('nurl_new') }}\">Create a new nurl</a>
        </li>
    </ul>
{% endblock %}
", "nurl/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\nurl\\index.html.twig");
    }
}
