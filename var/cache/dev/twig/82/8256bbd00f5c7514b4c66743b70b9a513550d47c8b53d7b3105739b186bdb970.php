<?php

/* default/index.html.twig */
class __TwigTemplate_5e08fa15dc5842ab937d2fafdb61c9722cac7a0c0988e9335e22c2bd17794690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_d260bb748940fb46c296df54c27d604f3f7d7347f4484bcf4683d4e7804ed16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d260bb748940fb46c296df54c27d604f3f7d7347f4484bcf4683d4e7804ed16c->enter($__internal_d260bb748940fb46c296df54c27d604f3f7d7347f4484bcf4683d4e7804ed16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_dd86e75a394791180fb54fde5c72252dd1bceb97dc88adb82a386f89b81fbfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd86e75a394791180fb54fde5c72252dd1bceb97dc88adb82a386f89b81fbfde->enter($__internal_dd86e75a394791180fb54fde5c72252dd1bceb97dc88adb82a386f89b81fbfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d260bb748940fb46c296df54c27d604f3f7d7347f4484bcf4683d4e7804ed16c->leave($__internal_d260bb748940fb46c296df54c27d604f3f7d7347f4484bcf4683d4e7804ed16c_prof);

        
        $__internal_dd86e75a394791180fb54fde5c72252dd1bceb97dc88adb82a386f89b81fbfde->leave($__internal_dd86e75a394791180fb54fde5c72252dd1bceb97dc88adb82a386f89b81fbfde_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b96b5ab1af0a63364b9f8aa6cbea1817011e629e6dac7913f41814ee7abd5f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96b5ab1af0a63364b9f8aa6cbea1817011e629e6dac7913f41814ee7abd5f0f->enter($__internal_b96b5ab1af0a63364b9f8aa6cbea1817011e629e6dac7913f41814ee7abd5f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_2aae2b41061dfc86adc72bcca7fbe207af66c27f377a392e52c8a9cb37e1dc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aae2b41061dfc86adc72bcca7fbe207af66c27f377a392e52c8a9cb37e1dc2d->enter($__internal_2aae2b41061dfc86adc72bcca7fbe207af66c27f377a392e52c8a9cb37e1dc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Home page";
        
        $__internal_2aae2b41061dfc86adc72bcca7fbe207af66c27f377a392e52c8a9cb37e1dc2d->leave($__internal_2aae2b41061dfc86adc72bcca7fbe207af66c27f377a392e52c8a9cb37e1dc2d_prof);

        
        $__internal_b96b5ab1af0a63364b9f8aa6cbea1817011e629e6dac7913f41814ee7abd5f0f->leave($__internal_b96b5ab1af0a63364b9f8aa6cbea1817011e629e6dac7913f41814ee7abd5f0f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82205173e4c91ffd88f7f1c96c7821f3d0a78fda040fdd7eb85336ba72588a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82205173e4c91ffd88f7f1c96c7821f3d0a78fda040fdd7eb85336ba72588a2a->enter($__internal_82205173e4c91ffd88f7f1c96c7821f3d0a78fda040fdd7eb85336ba72588a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8323acedc8a052ae8a6fc6322bd22f78b4202c47ddc1a72f18ebe7989d104f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8323acedc8a052ae8a6fc6322bd22f78b4202c47ddc1a72f18ebe7989d104f1b->enter($__internal_8323acedc8a052ae8a6fc6322bd22f78b4202c47ddc1a72f18ebe7989d104f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">
        <section>
            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    Administrator
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 18
            echo "                    User
                ";
        } else {
            // line 20
            echo "                    <strong>Anonymous</strong>
                ";
        }
        // line 22
        echo "            </p>
        </section>

        <section>
            <form
                    action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\"
                    method=\"post\"
            >


                <select>

                    <optgroup label=\"Type\" >

                        <option name=\"type\" >User</option>

                        <option name=\"type\" >Collection</option>

                        <option name=\"type\" >Nurl</option>

                        <option name=\"type\">Tag</option>

                    </optgroup>

                </select>
                ";
        // line 48
        echo "

                <input type=\"text\" name=\"query\" placeholder=\"Search\">


                <input type=\"submit\" id=\"Submit\" value=\"Submit\">


            </form>
        </section>

        <section>

        <h3>Useful links</h3>
            <ul>

                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

";
        
        $__internal_8323acedc8a052ae8a6fc6322bd22f78b4202c47ddc1a72f18ebe7989d104f1b->leave($__internal_8323acedc8a052ae8a6fc6322bd22f78b4202c47ddc1a72f18ebe7989d104f1b_prof);

        
        $__internal_82205173e4c91ffd88f7f1c96c7821f3d0a78fda040fdd7eb85336ba72588a2a->leave($__internal_82205173e4c91ffd88f7f1c96c7821f3d0a78fda040fdd7eb85336ba72588a2a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 68,  141 => 64,  123 => 48,  100 => 27,  93 => 22,  89 => 20,  85 => 18,  81 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    <h1>Welcome to NURL Manager</h1>

    <div id=\"shared\">
        <section>
            <h3>Online System to organise and share useful links and notes</h3>

            <p>
                You are currently logged in as
                {% if is_granted('ROLE_ADMIN') %}
                    Administrator
                {% elseif is_granted('ROLE_USER') %}
                    User
                {% else %}
                    <strong>Anonymous</strong>
                {% endif %}
            </p>
        </section>

        <section>
            <form
                    action=\"{{ path('search') }}\"
                    method=\"post\"
            >


                <select>

                    <optgroup label=\"Type\" >

                        <option name=\"type\" >User</option>

                        <option name=\"type\" >Collection</option>

                        <option name=\"type\" >Nurl</option>

                        <option name=\"type\">Tag</option>

                    </optgroup>

                </select>
                {#<input type=\"text\" name=\"type\">#}


                <input type=\"text\" name=\"query\" placeholder=\"Search\">


                <input type=\"submit\" id=\"Submit\" value=\"Submit\">


            </form>
        </section>

        <section>

        <h3>Useful links</h3>
            <ul>

                <li><a href=\"{{ path('tag_index') }}\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"{{ path('nurl_index') }}\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

{% endblock %}", "default/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\default\\index.html.twig");
    }
}
