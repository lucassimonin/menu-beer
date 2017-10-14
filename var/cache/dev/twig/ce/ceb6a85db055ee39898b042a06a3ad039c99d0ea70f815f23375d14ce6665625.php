<?php

/* base.html.twig */
class __TwigTemplate_dfb4ebba7246d306575e10e385abf8e9108e1d6bea8b638470b928398f5ac653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7913ea2a6ac9fbf2abd1d2f4b8dc7448ac82ce67cd3a860ffce0b99ebb467ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7913ea2a6ac9fbf2abd1d2f4b8dc7448ac82ce67cd3a860ffce0b99ebb467ac->enter($__internal_d7913ea2a6ac9fbf2abd1d2f4b8dc7448ac82ce67cd3a860ffce0b99ebb467ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_24a6dfd4444a3a77aa4a21a8e2ec8f67b592d87d75e39d0b5c2bdafbe1a76d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a6dfd4444a3a77aa4a21a8e2ec8f67b592d87d75e39d0b5c2bdafbe1a76d0c->enter($__internal_24a6dfd4444a3a77aa4a21a8e2ec8f67b592d87d75e39d0b5c2bdafbe1a76d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.global.title"), "html", null, true);
        echo "</title>
        ";
        // line 6
        $this->loadTemplate("pagelayout/page_head.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_style.html.twig", "base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_for_ie.html.twig", "base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("pagelayout/page_head_script.html.twig", "base.html.twig", 9)->display($context);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->loadTemplate("pagelayout/flashmessage.html.twig", "base.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        ";
        $this->loadTemplate("pagelayout/page_footer_script.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "    </body>
    </html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d7913ea2a6ac9fbf2abd1d2f4b8dc7448ac82ce67cd3a860ffce0b99ebb467ac->leave($__internal_d7913ea2a6ac9fbf2abd1d2f4b8dc7448ac82ce67cd3a860ffce0b99ebb467ac_prof);

        
        $__internal_24a6dfd4444a3a77aa4a21a8e2ec8f67b592d87d75e39d0b5c2bdafbe1a76d0c->leave($__internal_24a6dfd4444a3a77aa4a21a8e2ec8f67b592d87d75e39d0b5c2bdafbe1a76d0c_prof);

    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_87813f3ed38a1791fa171cc4840d84e21e94007b8c8dc46ba3cff13d30aba2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87813f3ed38a1791fa171cc4840d84e21e94007b8c8dc46ba3cff13d30aba2a8->enter($__internal_87813f3ed38a1791fa171cc4840d84e21e94007b8c8dc46ba3cff13d30aba2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_ea3d5d12d35f503aa104c9427d6098e195ed9319e8efe31bdad183495cd1e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3d5d12d35f503aa104c9427d6098e195ed9319e8efe31bdad183495cd1e6be->enter($__internal_ea3d5d12d35f503aa104c9427d6098e195ed9319e8efe31bdad183495cd1e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        
        $__internal_ea3d5d12d35f503aa104c9427d6098e195ed9319e8efe31bdad183495cd1e6be->leave($__internal_ea3d5d12d35f503aa104c9427d6098e195ed9319e8efe31bdad183495cd1e6be_prof);

        
        $__internal_87813f3ed38a1791fa171cc4840d84e21e94007b8c8dc46ba3cff13d30aba2a8->leave($__internal_87813f3ed38a1791fa171cc4840d84e21e94007b8c8dc46ba3cff13d30aba2a8_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_089220c6d7ef539bcdaed6e40c95ffd08447ac2c8bf5a441f81bb68997cd194c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089220c6d7ef539bcdaed6e40c95ffd08447ac2c8bf5a441f81bb68997cd194c->enter($__internal_089220c6d7ef539bcdaed6e40c95ffd08447ac2c8bf5a441f81bb68997cd194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3dd59d1acd044b7c876aa6684a9c2204f2788da014998f7e93db8b3ce2f8c2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd59d1acd044b7c876aa6684a9c2204f2788da014998f7e93db8b3ce2f8c2fb->enter($__internal_3dd59d1acd044b7c876aa6684a9c2204f2788da014998f7e93db8b3ce2f8c2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3dd59d1acd044b7c876aa6684a9c2204f2788da014998f7e93db8b3ce2f8c2fb->leave($__internal_3dd59d1acd044b7c876aa6684a9c2204f2788da014998f7e93db8b3ce2f8c2fb_prof);

        
        $__internal_089220c6d7ef539bcdaed6e40c95ffd08447ac2c8bf5a441f81bb68997cd194c->leave($__internal_089220c6d7ef539bcdaed6e40c95ffd08447ac2c8bf5a441f81bb68997cd194c_prof);

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
        return array (  93 => 13,  76 => 5,  63 => 15,  60 => 14,  57 => 13,  55 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  29 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <!DOCTYPE html>
    <html>
    <head>
        <title>{% block meta_title %}{% endblock %} - {{ 'app.global.title'|trans }}</title>
        {% include 'pagelayout/page_head.html.twig' %}
        {% include 'pagelayout/page_head_style.html.twig' %}
        {% include 'pagelayout/page_head_for_ie.html.twig' %}
        {% include 'pagelayout/page_head_script.html.twig' %}
    </head>
    <body>
        {% include 'pagelayout/flashmessage.html.twig' %}
        {% block content %}{% endblock %}
        {% include 'pagelayout/page_footer_script.html.twig' %}
    </body>
    </html>
{% endspaceless %}
", "base.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/base.html.twig");
    }
}
