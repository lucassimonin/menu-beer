<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e46236d754abab0e6b28c1e0100b85b08527b4f953e2d7e108a0866b101ad7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_087ed4f077a39a236ae64cfb9517c0aa997cb202fabfbc3e8b7e880922b00e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087ed4f077a39a236ae64cfb9517c0aa997cb202fabfbc3e8b7e880922b00e6c->enter($__internal_087ed4f077a39a236ae64cfb9517c0aa997cb202fabfbc3e8b7e880922b00e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_dde974d7a9d0ce8eef72d14109d4d82eb4fe91ad524d8dae22ab6b392fb47433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde974d7a9d0ce8eef72d14109d4d82eb4fe91ad524d8dae22ab6b392fb47433->enter($__internal_dde974d7a9d0ce8eef72d14109d4d82eb4fe91ad524d8dae22ab6b392fb47433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087ed4f077a39a236ae64cfb9517c0aa997cb202fabfbc3e8b7e880922b00e6c->leave($__internal_087ed4f077a39a236ae64cfb9517c0aa997cb202fabfbc3e8b7e880922b00e6c_prof);

        
        $__internal_dde974d7a9d0ce8eef72d14109d4d82eb4fe91ad524d8dae22ab6b392fb47433->leave($__internal_dde974d7a9d0ce8eef72d14109d4d82eb4fe91ad524d8dae22ab6b392fb47433_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_eb8ebba7c8a12c85603665ea916d64afca7bae00802a5b66510ee8589bde5850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8ebba7c8a12c85603665ea916d64afca7bae00802a5b66510ee8589bde5850->enter($__internal_eb8ebba7c8a12c85603665ea916d64afca7bae00802a5b66510ee8589bde5850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_75b47292e51ddcda56af85ec489b2a81f93d19a93ed514bee47461bcae38c814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b47292e51ddcda56af85ec489b2a81f93d19a93ed514bee47461bcae38c814->enter($__internal_75b47292e51ddcda56af85ec489b2a81f93d19a93ed514bee47461bcae38c814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        
        $__internal_75b47292e51ddcda56af85ec489b2a81f93d19a93ed514bee47461bcae38c814->leave($__internal_75b47292e51ddcda56af85ec489b2a81f93d19a93ed514bee47461bcae38c814_prof);

        
        $__internal_eb8ebba7c8a12c85603665ea916d64afca7bae00802a5b66510ee8589bde5850->leave($__internal_eb8ebba7c8a12c85603665ea916d64afca7bae00802a5b66510ee8589bde5850_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_583874c7e0b76f737b5ca7dae7b41dad2db10cf42af435be6786e28cf7168b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583874c7e0b76f737b5ca7dae7b41dad2db10cf42af435be6786e28cf7168b25->enter($__internal_583874c7e0b76f737b5ca7dae7b41dad2db10cf42af435be6786e28cf7168b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a16999b468d7385bc862d4fd74df088be8edb8e03db9db69cef9f6ee7f828bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16999b468d7385bc862d4fd74df088be8edb8e03db9db69cef9f6ee7f828bb6->enter($__internal_a16999b468d7385bc862d4fd74df088be8edb8e03db9db69cef9f6ee7f828bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "    <div class=\"col-md-4 col-md-offset-4\">
        <h1 id=\"login-img\">
            <img src=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/public/img/logo.png"), "html", null, true);
        echo " />
        </h1>
        <form id=\"login\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 16
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "            <div class=\"form-group\">
                <input type=\"text\" id=\"username\" class=\"input-planner login form-control\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" autofocus=\"autofocus\" autocomplete=\"on\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" class=\"input-planner form-control password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </div>
            <button type=\"submit\" class=\"btn btn-login\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
";
        
        $__internal_a16999b468d7385bc862d4fd74df088be8edb8e03db9db69cef9f6ee7f828bb6->leave($__internal_a16999b468d7385bc862d4fd74df088be8edb8e03db9db69cef9f6ee7f828bb6_prof);

        
        $__internal_583874c7e0b76f737b5ca7dae7b41dad2db10cf42af435be6786e28cf7168b25->leave($__internal_583874c7e0b76f737b5ca7dae7b41dad2db10cf42af435be6786e28cf7168b25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  117 => 26,  111 => 23,  103 => 20,  100 => 19,  94 => 17,  92 => 16,  88 => 15,  83 => 13,  79 => 11,  73 => 8,  70 => 7,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block page_header %}
{% endblock %}
{% block content %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}
    <div class=\"col-md-4 col-md-offset-4\">
        <h1 id=\"login-img\">
            <img src={{ asset('/assets/public/img/logo.png') }} />
        </h1>
        <form id=\"login\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-group\">
                <input type=\"text\" id=\"username\" class=\"input-planner login form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autofocus=\"autofocus\" autocomplete=\"on\" placeholder=\"{{ 'security.login.username'|trans }}\" />
            </div>
            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" class=\"input-planner form-control password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\" />
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans }}
            </div>
            <button type=\"submit\" class=\"btn btn-login\">{{ 'Login'|trans }}</button>
        </form>
    </div>
{% endblock content %}
", "@FOSUser/Security/login.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
