<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f1c6fac1401d1a2ef4b0cedae02595baa12b10c512ea5ca37566e1368b943a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6bea4f69312b038add923da3d5a78dd387be1d46dea53f10727d449235b395c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bea4f69312b038add923da3d5a78dd387be1d46dea53f10727d449235b395c->enter($__internal_e6bea4f69312b038add923da3d5a78dd387be1d46dea53f10727d449235b395c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_73708502b0a7aaa53a7d87fcd461622a4d87c8d0031a82ea9548c3993432f0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73708502b0a7aaa53a7d87fcd461622a4d87c8d0031a82ea9548c3993432f0ec->enter($__internal_73708502b0a7aaa53a7d87fcd461622a4d87c8d0031a82ea9548c3993432f0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e6bea4f69312b038add923da3d5a78dd387be1d46dea53f10727d449235b395c->leave($__internal_e6bea4f69312b038add923da3d5a78dd387be1d46dea53f10727d449235b395c_prof);

        
        $__internal_73708502b0a7aaa53a7d87fcd461622a4d87c8d0031a82ea9548c3993432f0ec->leave($__internal_73708502b0a7aaa53a7d87fcd461622a4d87c8d0031a82ea9548c3993432f0ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_384a651dda137ac12457d4ca0fdb35bd6c119774b4ba5a7afc2e33c15d49a2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384a651dda137ac12457d4ca0fdb35bd6c119774b4ba5a7afc2e33c15d49a2fd->enter($__internal_384a651dda137ac12457d4ca0fdb35bd6c119774b4ba5a7afc2e33c15d49a2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0938cbbcb5a2930214fff76068804be6ece65783de2acc320c9cb01c896fdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0938cbbcb5a2930214fff76068804be6ece65783de2acc320c9cb01c896fdb1->enter($__internal_c0938cbbcb5a2930214fff76068804be6ece65783de2acc320c9cb01c896fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c0938cbbcb5a2930214fff76068804be6ece65783de2acc320c9cb01c896fdb1->leave($__internal_c0938cbbcb5a2930214fff76068804be6ece65783de2acc320c9cb01c896fdb1_prof);

        
        $__internal_384a651dda137ac12457d4ca0fdb35bd6c119774b4ba5a7afc2e33c15d49a2fd->leave($__internal_384a651dda137ac12457d4ca0fdb35bd6c119774b4ba5a7afc2e33c15d49a2fd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_80aa94647838af88f467efc70be4a6e794682d815861c51afea73745e0471665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80aa94647838af88f467efc70be4a6e794682d815861c51afea73745e0471665->enter($__internal_80aa94647838af88f467efc70be4a6e794682d815861c51afea73745e0471665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f9d099886f983d9c1eb61e9f336fd32c5e754a492fceffaeefdf313a70d9ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d099886f983d9c1eb61e9f336fd32c5e754a492fceffaeefdf313a70d9ed1->enter($__internal_3f9d099886f983d9c1eb61e9f336fd32c5e754a492fceffaeefdf313a70d9ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3f9d099886f983d9c1eb61e9f336fd32c5e754a492fceffaeefdf313a70d9ed1->leave($__internal_3f9d099886f983d9c1eb61e9f336fd32c5e754a492fceffaeefdf313a70d9ed1_prof);

        
        $__internal_80aa94647838af88f467efc70be4a6e794682d815861c51afea73745e0471665->leave($__internal_80aa94647838af88f467efc70be4a6e794682d815861c51afea73745e0471665_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e4ab03c550cb37ff41ffd887b9f60fee1b8305f48e3e697b08fb57cdcc3a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e4ab03c550cb37ff41ffd887b9f60fee1b8305f48e3e697b08fb57cdcc3a1d->enter($__internal_b4e4ab03c550cb37ff41ffd887b9f60fee1b8305f48e3e697b08fb57cdcc3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d71765edfde3b414d5698b453fe6a44c6779651c39a61c20e5034971b479ce51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71765edfde3b414d5698b453fe6a44c6779651c39a61c20e5034971b479ce51->enter($__internal_d71765edfde3b414d5698b453fe6a44c6779651c39a61c20e5034971b479ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d71765edfde3b414d5698b453fe6a44c6779651c39a61c20e5034971b479ce51->leave($__internal_d71765edfde3b414d5698b453fe6a44c6779651c39a61c20e5034971b479ce51_prof);

        
        $__internal_b4e4ab03c550cb37ff41ffd887b9f60fee1b8305f48e3e697b08fb57cdcc3a1d->leave($__internal_b4e4ab03c550cb37ff41ffd887b9f60fee1b8305f48e3e697b08fb57cdcc3a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
