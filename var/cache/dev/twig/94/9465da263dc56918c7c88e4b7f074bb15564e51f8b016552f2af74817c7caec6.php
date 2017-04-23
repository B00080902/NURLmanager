<?php

/* account/index.html.twig */
class __TwigTemplate_22484f9337c192a51b1a529cb64adb1e11e9731d041142d058b6b7722d97f9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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
        $__internal_72d797d44f7cefca7e4da247cef1229049ad6337a057d55e23cf4af044189a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d797d44f7cefca7e4da247cef1229049ad6337a057d55e23cf4af044189a80->enter($__internal_72d797d44f7cefca7e4da247cef1229049ad6337a057d55e23cf4af044189a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_598f533a192dc0471de720410ffb5304c319e942e580874884a36173be248681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598f533a192dc0471de720410ffb5304c319e942e580874884a36173be248681->enter($__internal_598f533a192dc0471de720410ffb5304c319e942e580874884a36173be248681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d797d44f7cefca7e4da247cef1229049ad6337a057d55e23cf4af044189a80->leave($__internal_72d797d44f7cefca7e4da247cef1229049ad6337a057d55e23cf4af044189a80_prof);

        
        $__internal_598f533a192dc0471de720410ffb5304c319e942e580874884a36173be248681->leave($__internal_598f533a192dc0471de720410ffb5304c319e942e580874884a36173be248681_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_df71aaab21312f320fce87b42c29c3dc20cee476204028d47a1e6cf14af6c0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df71aaab21312f320fce87b42c29c3dc20cee476204028d47a1e6cf14af6c0fc->enter($__internal_df71aaab21312f320fce87b42c29c3dc20cee476204028d47a1e6cf14af6c0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_b31c43617169007d6e736047c1fedf5db1446ec6dd56b51cb33d1bcdda3b84c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31c43617169007d6e736047c1fedf5db1446ec6dd56b51cb33d1bcdda3b84c5->enter($__internal_b31c43617169007d6e736047c1fedf5db1446ec6dd56b51cb33d1bcdda3b84c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Account";
        
        $__internal_b31c43617169007d6e736047c1fedf5db1446ec6dd56b51cb33d1bcdda3b84c5->leave($__internal_b31c43617169007d6e736047c1fedf5db1446ec6dd56b51cb33d1bcdda3b84c5_prof);

        
        $__internal_df71aaab21312f320fce87b42c29c3dc20cee476204028d47a1e6cf14af6c0fc->leave($__internal_df71aaab21312f320fce87b42c29c3dc20cee476204028d47a1e6cf14af6c0fc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_956d94e538f38d6c73a8d4c9e65d0842da778c4cba54e81c234cd610eddd9511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956d94e538f38d6c73a8d4c9e65d0842da778c4cba54e81c234cd610eddd9511->enter($__internal_956d94e538f38d6c73a8d4c9e65d0842da778c4cba54e81c234cd610eddd9511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6a435f419f3254a3b6156852fa81db65bfc530e02139e9b6b6d7318a8271874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a435f419f3254a3b6156852fa81db65bfc530e02139e9b6b6d7318a8271874->enter($__internal_d6a435f419f3254a3b6156852fa81db65bfc530e02139e9b6b6d7318a8271874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s profile</h1>

    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">Delete Account</a>

    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "

    <div style=\"display: flex\">

        <section>

            <h3>These are your nurls</h3>

            <table>

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 24
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 28
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
        // line 34
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your collections</h3>

            <table>

                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 48
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 52
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
        // line 57
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your tags</h3>

            <table>

                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 71
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 75
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
        // line 80
        echo "
            </table>

        </section>

    </div>

";
        
        $__internal_d6a435f419f3254a3b6156852fa81db65bfc530e02139e9b6b6d7318a8271874->leave($__internal_d6a435f419f3254a3b6156852fa81db65bfc530e02139e9b6b6d7318a8271874_prof);

        
        $__internal_956d94e538f38d6c73a8d4c9e65d0842da778c4cba54e81c234cd610eddd9511->leave($__internal_956d94e538f38d6c73a8d4c9e65d0842da778c4cba54e81c234cd610eddd9511_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 80,  182 => 75,  176 => 71,  172 => 70,  157 => 57,  144 => 52,  138 => 48,  134 => 47,  119 => 34,  105 => 28,  99 => 24,  95 => 23,  82 => 13,  77 => 11,  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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


{% block pageTitle %}Account{% endblock %}

{% block body %}


    <h1>{{ app.user.username }}'s profile</h1>

    <a href=\"{{ path('user_delete', { 'id': app.user.id }) }}\">Delete Account</a>

    {{ dump() }}

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

{% endblock %}", "account/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\account\\index.html.twig");
    }
}
