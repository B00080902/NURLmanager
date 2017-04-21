<?php

/* :security:register.html.twig */
class __TwigTemplate_582ee1258887ab8812e56d4306c92892050fd9c41695b4d7eb06d4efb303f998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '_user_username_widget' => array($this, 'block__user_username_widget'),
            '_user_email_widget' => array($this, 'block__user_email_widget'),
            '_user_plainPassword_first_widget' => array($this, 'block__user_plainPassword_first_widget'),
            '_user_plainPassword_second_widget' => array($this, 'block__user_plainPassword_second_widget'),
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
        echo "Registering";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"mainContent\">

        <h1>Please Register</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        ";
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => $this));
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('_user_username_widget', $context, $blocks);
        // line 19
        echo "
        <label style=\"padding-right: 57px\">Username</label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
        echo "

        ";
        // line 23
        $this->displayBlock('_user_email_widget', $context, $blocks);
        // line 28
        echo "
        <br>

        <label style=\"padding-right: 86px\">Email</label>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "


        ";
        // line 35
        $this->displayBlock('_user_plainPassword_first_widget', $context, $blocks);
        // line 40
        echo "
        <br>

        <label style=\"padding-right: 62px\">Password</label>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget');
        echo "


        ";
        // line 47
        $this->displayBlock('_user_plainPassword_second_widget', $context, $blocks);
        // line 52
        echo "
        <br>

        <label style=\"padding-right: 5px\">Re-Enter Password </label>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget');
        echo "

        <br>
        <br>
        <br>

        ";
        // line 63
        echo "        <button type=\"submit\">Register!</button>
        ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

";
    }

    // line 14
    public function block__user_username_widget($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"text_widget\">
                ";
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
    }

    // line 23
    public function block__user_email_widget($context, array $blocks = array())
    {
        // line 24
        echo "            <div class=\"text_widget\">
                ";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
    }

    // line 35
    public function block__user_plainPassword_first_widget($context, array $blocks = array())
    {
        // line 36
        echo "            <div class=\"text_widget\">
                ";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
    }

    // line 47
    public function block__user_plainPassword_second_widget($context, array $blocks = array())
    {
        // line 48
        echo "            <div class=\"text_widget\">
                ";
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
        ";
    }

    public function getTemplateName()
    {
        return ":security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  167 => 48,  164 => 47,  157 => 37,  154 => 36,  151 => 35,  144 => 25,  141 => 24,  138 => 23,  131 => 16,  128 => 15,  125 => 14,  117 => 64,  114 => 63,  105 => 56,  99 => 52,  97 => 47,  91 => 44,  85 => 40,  83 => 35,  77 => 32,  71 => 28,  69 => 23,  64 => 21,  60 => 19,  58 => 14,  55 => 13,  53 => 12,  48 => 10,  42 => 6,  39 => 5,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":security:register.html.twig", "C:\\College\\College\\Third year\\Second Semester\\WFDassignment\\app/Resources\\views/security/register.html.twig");
    }
}
