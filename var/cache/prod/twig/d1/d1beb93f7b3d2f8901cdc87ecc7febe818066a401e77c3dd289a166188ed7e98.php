<?php

/* base.html.twig */
class __TwigTemplate_3671543afef7ebc79d7dc42c49eff681c6d6347443da3671e55a35e420301de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["colours"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "colours"), "method");
        // line 3
        if ((null === ($context["colours"] ?? null))) {
            // line 4
            echo "    ";
            $context["colours"] = array("foreground" => "black", "background" => "while");
        }
        // line 10
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            @import '/css/flash.css';
            @import '/css/header.css';
            @import '/css/default.css';
            @import '/css/nav.css';
            @import '/css/img.css';
            ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "            body {
                ";
        // line 26
        echo "                ";
        // line 27
        echo "            }
        </style>
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,400\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <header>
        <nav>
            <ul>

                <li>
                    <a
                        ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            // line 41
            echo "
                            id=\"current\"

                        ";
        }
        // line 45
        echo "
                        href=\"/\"><span>Home</span>
                    </a>
                </li>

                <li>
                    <a
                        ";
        // line 52
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "nurl_index")) {
            // line 53
            echo "
                            id=\"current\"

                        ";
        }
        // line 57
        echo "
                        href=\"/nurl/\"><span>Nurls</span>
                    </a>
                </li>

                <li>
                    <a
                            ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tag_index")) {
            // line 65
            echo "
                                id=\"current\"

                            ";
        }
        // line 69
        echo "
                            href=\"/tag/\"><span>Tags</span>
                    </a>
                </li>


    ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 76
            echo "        You are logged in as:  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</strong></a>
        <br>
        <li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">logout</a></li>

    ";
        } else {
            // line 81
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">login</a></li>

    ";
        }
        // line 84
        echo "
            </ul>
        </nav>
    </header>


    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
    </body>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "NURL - Home ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        // line 91
        echo "    ";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 94,  188 => 93,  184 => 91,  181 => 90,  177 => 23,  174 => 22,  168 => 15,  161 => 95,  159 => 93,  156 => 92,  154 => 90,  146 => 84,  139 => 81,  133 => 78,  125 => 76,  123 => 75,  115 => 69,  109 => 65,  107 => 64,  98 => 57,  92 => 53,  90 => 52,  81 => 45,  75 => 41,  73 => 40,  60 => 30,  55 => 27,  53 => 26,  50 => 24,  48 => 22,  38 => 15,  31 => 10,  27 => 4,  25 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\NURLmanager\\app\\Resources\\views\\base.html.twig");
    }
}
