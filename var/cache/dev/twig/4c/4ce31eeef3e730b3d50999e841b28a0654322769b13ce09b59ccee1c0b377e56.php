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
        $__internal_28b3d53dcdef77a8cbb620b080ca66d7e0af8f81814729655fc2d3b0da1de60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b3d53dcdef77a8cbb620b080ca66d7e0af8f81814729655fc2d3b0da1de60f->enter($__internal_28b3d53dcdef77a8cbb620b080ca66d7e0af8f81814729655fc2d3b0da1de60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0733c083278c40341e8903d86f53f6b9ff7a6b17080ccfcf586a28244eb7dc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0733c083278c40341e8903d86f53f6b9ff7a6b17080ccfcf586a28244eb7dc3f->enter($__internal_0733c083278c40341e8903d86f53f6b9ff7a6b17080ccfcf586a28244eb7dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b3d53dcdef77a8cbb620b080ca66d7e0af8f81814729655fc2d3b0da1de60f->leave($__internal_28b3d53dcdef77a8cbb620b080ca66d7e0af8f81814729655fc2d3b0da1de60f_prof);

        
        $__internal_0733c083278c40341e8903d86f53f6b9ff7a6b17080ccfcf586a28244eb7dc3f->leave($__internal_0733c083278c40341e8903d86f53f6b9ff7a6b17080ccfcf586a28244eb7dc3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0963ff3061a447b67223235450818bc0ffecb16accaa1a2f13773387b8926f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0963ff3061a447b67223235450818bc0ffecb16accaa1a2f13773387b8926f9f->enter($__internal_0963ff3061a447b67223235450818bc0ffecb16accaa1a2f13773387b8926f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81e49f3b7ce11c8ee63e20ca7b4480591d42967f68ffced7f3a4c7b5b5af7c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e49f3b7ce11c8ee63e20ca7b4480591d42967f68ffced7f3a4c7b5b5af7c89->enter($__internal_81e49f3b7ce11c8ee63e20ca7b4480591d42967f68ffced7f3a4c7b5b5af7c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81e49f3b7ce11c8ee63e20ca7b4480591d42967f68ffced7f3a4c7b5b5af7c89->leave($__internal_81e49f3b7ce11c8ee63e20ca7b4480591d42967f68ffced7f3a4c7b5b5af7c89_prof);

        
        $__internal_0963ff3061a447b67223235450818bc0ffecb16accaa1a2f13773387b8926f9f->leave($__internal_0963ff3061a447b67223235450818bc0ffecb16accaa1a2f13773387b8926f9f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_50fe54dc609801ef127c82ef2a3f8f528dd2f9d887eddb4946f5b2cbe1e85130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fe54dc609801ef127c82ef2a3f8f528dd2f9d887eddb4946f5b2cbe1e85130->enter($__internal_50fe54dc609801ef127c82ef2a3f8f528dd2f9d887eddb4946f5b2cbe1e85130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_439b18740774a8e0b8080055a5c3c75ce8144a4745eb9a937976626a1bb46212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439b18740774a8e0b8080055a5c3c75ce8144a4745eb9a937976626a1bb46212->enter($__internal_439b18740774a8e0b8080055a5c3c75ce8144a4745eb9a937976626a1bb46212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_439b18740774a8e0b8080055a5c3c75ce8144a4745eb9a937976626a1bb46212->leave($__internal_439b18740774a8e0b8080055a5c3c75ce8144a4745eb9a937976626a1bb46212_prof);

        
        $__internal_50fe54dc609801ef127c82ef2a3f8f528dd2f9d887eddb4946f5b2cbe1e85130->leave($__internal_50fe54dc609801ef127c82ef2a3f8f528dd2f9d887eddb4946f5b2cbe1e85130_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f2d466694a84c8f8c43164d0e1eb84c1786ad1b84167e4364a665bbc60954f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f2d466694a84c8f8c43164d0e1eb84c1786ad1b84167e4364a665bbc60954f->enter($__internal_00f2d466694a84c8f8c43164d0e1eb84c1786ad1b84167e4364a665bbc60954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e94b6fede7b424e08dc26eb13d952fff5a003bcb8d41a8fc5f729797344db270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94b6fede7b424e08dc26eb13d952fff5a003bcb8d41a8fc5f729797344db270->enter($__internal_e94b6fede7b424e08dc26eb13d952fff5a003bcb8d41a8fc5f729797344db270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e94b6fede7b424e08dc26eb13d952fff5a003bcb8d41a8fc5f729797344db270->leave($__internal_e94b6fede7b424e08dc26eb13d952fff5a003bcb8d41a8fc5f729797344db270_prof);

        
        $__internal_00f2d466694a84c8f8c43164d0e1eb84c1786ad1b84167e4364a665bbc60954f->leave($__internal_00f2d466694a84c8f8c43164d0e1eb84c1786ad1b84167e4364a665bbc60954f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
