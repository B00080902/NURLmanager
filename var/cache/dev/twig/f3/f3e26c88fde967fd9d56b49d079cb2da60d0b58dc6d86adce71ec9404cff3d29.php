<?php

/* nurl/new.html.twig */
class __TwigTemplate_0316c6a286b7e0c357e7d5fb62874ef618e33d826fa3f9a860b56fbc146c1443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nurl/new.html.twig", 1);
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
        $__internal_bf286bb472e03917162ab3866c00545f830a778c972a48525b2688b867f17414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf286bb472e03917162ab3866c00545f830a778c972a48525b2688b867f17414->enter($__internal_bf286bb472e03917162ab3866c00545f830a778c972a48525b2688b867f17414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $__internal_795641df64cb13cff619a31f33c1c23654a80b5fe05f08028ea2c3815ead9151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795641df64cb13cff619a31f33c1c23654a80b5fe05f08028ea2c3815ead9151->enter($__internal_795641df64cb13cff619a31f33c1c23654a80b5fe05f08028ea2c3815ead9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nurl/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf286bb472e03917162ab3866c00545f830a778c972a48525b2688b867f17414->leave($__internal_bf286bb472e03917162ab3866c00545f830a778c972a48525b2688b867f17414_prof);

        
        $__internal_795641df64cb13cff619a31f33c1c23654a80b5fe05f08028ea2c3815ead9151->leave($__internal_795641df64cb13cff619a31f33c1c23654a80b5fe05f08028ea2c3815ead9151_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df16ac76d9a671dd79d40a392672391ee34941bb0ad507bd6ad642007f65f97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df16ac76d9a671dd79d40a392672391ee34941bb0ad507bd6ad642007f65f97f->enter($__internal_df16ac76d9a671dd79d40a392672391ee34941bb0ad507bd6ad642007f65f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ad4a4e12d374da87d8c372518b63279bf0a20771b0331ee129d075897861f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad4a4e12d374da87d8c372518b63279bf0a20771b0331ee129d075897861f4c->enter($__internal_2ad4a4e12d374da87d8c372518b63279bf0a20771b0331ee129d075897861f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nurl creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 11
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["nurl"] ?? $this->getContext($context, "nurl")), "tag", array()), "approved", array())) {
                // line 12
                echo "    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tag", array()), 'row');
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2ad4a4e12d374da87d8c372518b63279bf0a20771b0331ee129d075897861f4c->leave($__internal_2ad4a4e12d374da87d8c372518b63279bf0a20771b0331ee129d075897861f4c_prof);

        
        $__internal_df16ac76d9a671dd79d40a392672391ee34941bb0ad507bd6ad642007f65f97f->leave($__internal_df16ac76d9a671dd79d40a392672391ee34941bb0ad507bd6ad642007f65f97f_prof);

    }

    public function getTemplateName()
    {
        return "nurl/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  83 => 16,  80 => 15,  70 => 12,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nurl creation</h1>

    {{ form_start(form) }}

    {{ form_widget(form) }}

    {% for tags in nurl.tag %}
        {% if nurl.tag.approved %}
    {{ form_row(form.tag) }}
{% endif %}
{% endfor %}

    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('nurl_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "nurl/new.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\nurl\\new.html.twig");
    }
}
