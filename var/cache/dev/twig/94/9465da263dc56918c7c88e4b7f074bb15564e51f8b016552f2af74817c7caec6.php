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
        $__internal_eec6bd5d65b7706e4c0984f1c6ca6daf22f05c6e60dac53bd7cafcc24cad56ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec6bd5d65b7706e4c0984f1c6ca6daf22f05c6e60dac53bd7cafcc24cad56ca->enter($__internal_eec6bd5d65b7706e4c0984f1c6ca6daf22f05c6e60dac53bd7cafcc24cad56ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_530e5fc7cd793b69175eb6fabab450bb81430cb18f52fb9f5c4adbf2846d8aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530e5fc7cd793b69175eb6fabab450bb81430cb18f52fb9f5c4adbf2846d8aae->enter($__internal_530e5fc7cd793b69175eb6fabab450bb81430cb18f52fb9f5c4adbf2846d8aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec6bd5d65b7706e4c0984f1c6ca6daf22f05c6e60dac53bd7cafcc24cad56ca->leave($__internal_eec6bd5d65b7706e4c0984f1c6ca6daf22f05c6e60dac53bd7cafcc24cad56ca_prof);

        
        $__internal_530e5fc7cd793b69175eb6fabab450bb81430cb18f52fb9f5c4adbf2846d8aae->leave($__internal_530e5fc7cd793b69175eb6fabab450bb81430cb18f52fb9f5c4adbf2846d8aae_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_8cb8b657a03cd636e270482acd434034ea36883bdfb02bf863df94202c1ef96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb8b657a03cd636e270482acd434034ea36883bdfb02bf863df94202c1ef96e->enter($__internal_8cb8b657a03cd636e270482acd434034ea36883bdfb02bf863df94202c1ef96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6d5e1733442ea3572c4f9cca9e52df52972d058b7497ca8cd6ff680bda8ebd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5e1733442ea3572c4f9cca9e52df52972d058b7497ca8cd6ff680bda8ebd3f->enter($__internal_6d5e1733442ea3572c4f9cca9e52df52972d058b7497ca8cd6ff680bda8ebd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Account";
        
        $__internal_6d5e1733442ea3572c4f9cca9e52df52972d058b7497ca8cd6ff680bda8ebd3f->leave($__internal_6d5e1733442ea3572c4f9cca9e52df52972d058b7497ca8cd6ff680bda8ebd3f_prof);

        
        $__internal_8cb8b657a03cd636e270482acd434034ea36883bdfb02bf863df94202c1ef96e->leave($__internal_8cb8b657a03cd636e270482acd434034ea36883bdfb02bf863df94202c1ef96e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d761675fc005f3d703d1c44669da1c065c9d0efaa4423088e17a881a41834488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d761675fc005f3d703d1c44669da1c065c9d0efaa4423088e17a881a41834488->enter($__internal_d761675fc005f3d703d1c44669da1c065c9d0efaa4423088e17a881a41834488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc212de86e79d7af788fef9ef94ed1f7380a9b1d9b20d8ee43a717c1342d2fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc212de86e79d7af788fef9ef94ed1f7380a9b1d9b20d8ee43a717c1342d2fcf->enter($__internal_dc212de86e79d7af788fef9ef94ed1f7380a9b1d9b20d8ee43a717c1342d2fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s profile</h1>

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "

    <div style=\"display: flex\">

        <section>

            <h3>These are your nurls</h3>

            <table>

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 22
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 26
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
        // line 32
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your collections</h3>

            <table>

                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 46
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 50
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
        // line 55
        echo "
            </table>

        </section>

        <hr>

        <section>

            <h3>These are your tags</h3>

            <table>

                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 69
            echo "
                    <tr>
                        <td>

                            <a href=\"";
            // line 73
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
        // line 78
        echo "
            </table>

        </section>

    </div>

";
        
        $__internal_dc212de86e79d7af788fef9ef94ed1f7380a9b1d9b20d8ee43a717c1342d2fcf->leave($__internal_dc212de86e79d7af788fef9ef94ed1f7380a9b1d9b20d8ee43a717c1342d2fcf_prof);

        
        $__internal_d761675fc005f3d703d1c44669da1c065c9d0efaa4423088e17a881a41834488->leave($__internal_d761675fc005f3d703d1c44669da1c065c9d0efaa4423088e17a881a41834488_prof);

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
        return array (  190 => 78,  177 => 73,  171 => 69,  167 => 68,  152 => 55,  139 => 50,  133 => 46,  129 => 45,  114 => 32,  100 => 26,  94 => 22,  90 => 21,  77 => 11,  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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
