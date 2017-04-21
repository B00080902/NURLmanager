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
        $__internal_8ded6e72a1b202643a0a2562d8f409422d7cac3ccaa96794b53fc9e780f743d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ded6e72a1b202643a0a2562d8f409422d7cac3ccaa96794b53fc9e780f743d3->enter($__internal_8ded6e72a1b202643a0a2562d8f409422d7cac3ccaa96794b53fc9e780f743d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_10ffdbe0899f25aa82feee7c337429aa0d6450159583159405bf5665d749a614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ffdbe0899f25aa82feee7c337429aa0d6450159583159405bf5665d749a614->enter($__internal_10ffdbe0899f25aa82feee7c337429aa0d6450159583159405bf5665d749a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ded6e72a1b202643a0a2562d8f409422d7cac3ccaa96794b53fc9e780f743d3->leave($__internal_8ded6e72a1b202643a0a2562d8f409422d7cac3ccaa96794b53fc9e780f743d3_prof);

        
        $__internal_10ffdbe0899f25aa82feee7c337429aa0d6450159583159405bf5665d749a614->leave($__internal_10ffdbe0899f25aa82feee7c337429aa0d6450159583159405bf5665d749a614_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e24c359dada5135fdafd72213372484119c103e7c64129bba595bb9015626b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24c359dada5135fdafd72213372484119c103e7c64129bba595bb9015626b3a->enter($__internal_e24c359dada5135fdafd72213372484119c103e7c64129bba595bb9015626b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_486d51da8575dbc154e4cf6862a4c6e688be7a711600b934fc3d6c595622cc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486d51da8575dbc154e4cf6862a4c6e688be7a711600b934fc3d6c595622cc3d->enter($__internal_486d51da8575dbc154e4cf6862a4c6e688be7a711600b934fc3d6c595622cc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_486d51da8575dbc154e4cf6862a4c6e688be7a711600b934fc3d6c595622cc3d->leave($__internal_486d51da8575dbc154e4cf6862a4c6e688be7a711600b934fc3d6c595622cc3d_prof);

        
        $__internal_e24c359dada5135fdafd72213372484119c103e7c64129bba595bb9015626b3a->leave($__internal_e24c359dada5135fdafd72213372484119c103e7c64129bba595bb9015626b3a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae0e7e570761db2e38ee46a6c0d5af83a99529eac95836ef7338d2cef9464c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0e7e570761db2e38ee46a6c0d5af83a99529eac95836ef7338d2cef9464c17->enter($__internal_ae0e7e570761db2e38ee46a6c0d5af83a99529eac95836ef7338d2cef9464c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f11b1eef7beb235f967320e97630806e76bab14999ab41b20f206afe39166567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11b1eef7beb235f967320e97630806e76bab14999ab41b20f206afe39166567->enter($__internal_f11b1eef7beb235f967320e97630806e76bab14999ab41b20f206afe39166567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s profile</h1>

    <div>
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "

        <h3>These are the nurls you have submitted</h3>

        <table>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nurls"] ?? $this->getContext($context, "nurls")));
        foreach ($context['_seq'] as $context["_key"] => $context["nurl"]) {
            // line 18
            echo "            <tr>


                <td>

                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["nurl"], "title", array()), "html", null, true);
            echo "

                </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        </table>

    </div>

";
        
        $__internal_f11b1eef7beb235f967320e97630806e76bab14999ab41b20f206afe39166567->leave($__internal_f11b1eef7beb235f967320e97630806e76bab14999ab41b20f206afe39166567_prof);

        
        $__internal_ae0e7e570761db2e38ee46a6c0d5af83a99529eac95836ef7338d2cef9464c17->leave($__internal_ae0e7e570761db2e38ee46a6c0d5af83a99529eac95836ef7338d2cef9464c17_prof);

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
        return array (  109 => 29,  97 => 23,  90 => 18,  86 => 17,  78 => 12,  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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


{% block pageTitle %}Home page{% endblock %}

{% block body %}


    <h1>{{ app.user.username }}'s profile</h1>

    <div>
        {{ dump() }}

        <h3>These are the nurls you have submitted</h3>

        <table>
            {% for nurl in nurls  %}
            <tr>


                <td>

                    {{ nurl.title }}

                </td>

            </tr>
            {%  endfor %}

        </table>

    </div>

{% endblock %}", "account/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app\\Resources\\views\\account\\index.html.twig");
    }
}
