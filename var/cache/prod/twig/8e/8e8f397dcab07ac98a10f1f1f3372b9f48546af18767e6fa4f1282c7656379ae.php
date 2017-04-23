<?php

/* default/index.html.twig */
class __TwigTemplate_f34073365a79acac85a2e45b8a468dc8a75a90a0710177bf68842522956adbda extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Home page";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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

        <h3>Useful links</h3>
            <ul>

                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">List of tags</a></li>
                <li><a>List of proposed new tags</a></li>
                <li><a>Upvote / Downvote list</a></li>
                <li><a>Propose a new candidate tag</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nurl_index");
        echo "\">All NURLS</a></li>
                <li><a>Report a NURL</a></li>
            </ul>
        </section>
    </div>

";
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
        return array (  80 => 34,  73 => 30,  63 => 22,  59 => 20,  55 => 18,  51 => 16,  49 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\default\\index.html.twig");
    }
}
