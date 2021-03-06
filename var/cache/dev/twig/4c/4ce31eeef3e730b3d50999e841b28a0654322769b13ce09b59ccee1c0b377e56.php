<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d739c985af9683b1ebd96fbd3c82c94b0b0b8fa8b9edcdf306cd90623454773b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fb4a51648e7b6ff32b849ae2828ab9d0bdabacd47f04bd8d36ce3fe8045a0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb4a51648e7b6ff32b849ae2828ab9d0bdabacd47f04bd8d36ce3fe8045a0ca->enter($__internal_3fb4a51648e7b6ff32b849ae2828ab9d0bdabacd47f04bd8d36ce3fe8045a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_448c385bc33f23011c73ddbee023f0b01f14ecd1b7c17aa3da7ed260d75d9991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448c385bc33f23011c73ddbee023f0b01f14ecd1b7c17aa3da7ed260d75d9991->enter($__internal_448c385bc33f23011c73ddbee023f0b01f14ecd1b7c17aa3da7ed260d75d9991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb4a51648e7b6ff32b849ae2828ab9d0bdabacd47f04bd8d36ce3fe8045a0ca->leave($__internal_3fb4a51648e7b6ff32b849ae2828ab9d0bdabacd47f04bd8d36ce3fe8045a0ca_prof);

        
        $__internal_448c385bc33f23011c73ddbee023f0b01f14ecd1b7c17aa3da7ed260d75d9991->leave($__internal_448c385bc33f23011c73ddbee023f0b01f14ecd1b7c17aa3da7ed260d75d9991_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e9a4d38a45c373af75a298465376d660842bfc4ae2b32dd5548b492453f7883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9a4d38a45c373af75a298465376d660842bfc4ae2b32dd5548b492453f7883->enter($__internal_4e9a4d38a45c373af75a298465376d660842bfc4ae2b32dd5548b492453f7883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_545752b3fde8f5e77b969a2236b9a2110f7fdc229b3478fd04cf6310f77645d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545752b3fde8f5e77b969a2236b9a2110f7fdc229b3478fd04cf6310f77645d9->enter($__internal_545752b3fde8f5e77b969a2236b9a2110f7fdc229b3478fd04cf6310f77645d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_545752b3fde8f5e77b969a2236b9a2110f7fdc229b3478fd04cf6310f77645d9->leave($__internal_545752b3fde8f5e77b969a2236b9a2110f7fdc229b3478fd04cf6310f77645d9_prof);

        
        $__internal_4e9a4d38a45c373af75a298465376d660842bfc4ae2b32dd5548b492453f7883->leave($__internal_4e9a4d38a45c373af75a298465376d660842bfc4ae2b32dd5548b492453f7883_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea173973921f4f2e8068034eceb71e8e9a25121ef3f6cc7aa6d81df05c7dcd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea173973921f4f2e8068034eceb71e8e9a25121ef3f6cc7aa6d81df05c7dcd1a->enter($__internal_ea173973921f4f2e8068034eceb71e8e9a25121ef3f6cc7aa6d81df05c7dcd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41a5b33eedc4ce109824b3acb58ed254417e5c4a1154aa0bdaf48c740f156fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a5b33eedc4ce109824b3acb58ed254417e5c4a1154aa0bdaf48c740f156fa6->enter($__internal_41a5b33eedc4ce109824b3acb58ed254417e5c4a1154aa0bdaf48c740f156fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41a5b33eedc4ce109824b3acb58ed254417e5c4a1154aa0bdaf48c740f156fa6->leave($__internal_41a5b33eedc4ce109824b3acb58ed254417e5c4a1154aa0bdaf48c740f156fa6_prof);

        
        $__internal_ea173973921f4f2e8068034eceb71e8e9a25121ef3f6cc7aa6d81df05c7dcd1a->leave($__internal_ea173973921f4f2e8068034eceb71e8e9a25121ef3f6cc7aa6d81df05c7dcd1a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d99383c3d71e072a6f050c10fcbb11f8f48bb068c498c4d7f067c202adf91c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d99383c3d71e072a6f050c10fcbb11f8f48bb068c498c4d7f067c202adf91c1->enter($__internal_4d99383c3d71e072a6f050c10fcbb11f8f48bb068c498c4d7f067c202adf91c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0745e8d39a5ec793d91e06f841d808a62c1c753cd1cda7506ac2d8cdf5883a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0745e8d39a5ec793d91e06f841d808a62c1c753cd1cda7506ac2d8cdf5883a0->enter($__internal_e0745e8d39a5ec793d91e06f841d808a62c1c753cd1cda7506ac2d8cdf5883a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e0745e8d39a5ec793d91e06f841d808a62c1c753cd1cda7506ac2d8cdf5883a0->leave($__internal_e0745e8d39a5ec793d91e06f841d808a62c1c753cd1cda7506ac2d8cdf5883a0_prof);

        
        $__internal_4d99383c3d71e072a6f050c10fcbb11f8f48bb068c498c4d7f067c202adf91c1->leave($__internal_4d99383c3d71e072a6f050c10fcbb11f8f48bb068c498c4d7f067c202adf91c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
