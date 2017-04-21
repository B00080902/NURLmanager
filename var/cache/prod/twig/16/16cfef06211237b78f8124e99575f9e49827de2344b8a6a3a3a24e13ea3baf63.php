<?php

/* :security:login.html.twig */
class __TwigTemplate_641dc187b37ef577c8bffde17e5546c689df4ee814aae3d6a8152f0436926ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Login ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "        <div id=\"loginContent\">
            <div id=\"loginForm\">
                <h1>Please Login</h1>

                ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "
                <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <table id=\"loginTable\">
                        <tr>
                            <td><label for=\"username\">Username:</label></td>
                            <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" /></td>
                        </tr>
                        <tr>
                            <td><label for=\"password\">Password:</label></td>
                            <td><input type=\"password\" id=\"password\" name=\"_password\" /></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\"><button type=\"submit\" id=\"loginButton\">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <hr>
            <div id=\"registerSide\">
                <h2>Don't have an account yet?</h2>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\"><button id=\"registerButton\">Register</button></a>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  62 => 18,  55 => 14,  52 => 13,  46 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":security:login.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app/Resources\\views/security/login.html.twig");
    }
}
