<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fcf72122484d7b2ba367ced5effff4485d84b0f3ad90e3c47d0a3022d30f33ec extends Twig_Template
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
        $__internal_ce1e05c1028e3c0d536f8bf94c40434173bf19367d75cdb466b87508bc61b7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1e05c1028e3c0d536f8bf94c40434173bf19367d75cdb466b87508bc61b7be->enter($__internal_ce1e05c1028e3c0d536f8bf94c40434173bf19367d75cdb466b87508bc61b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6c47f89b90ce816a591a6efd061a75df5be1da0560a88a5374be2d7fb37c5e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c47f89b90ce816a591a6efd061a75df5be1da0560a88a5374be2d7fb37c5e8c->enter($__internal_6c47f89b90ce816a591a6efd061a75df5be1da0560a88a5374be2d7fb37c5e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1e05c1028e3c0d536f8bf94c40434173bf19367d75cdb466b87508bc61b7be->leave($__internal_ce1e05c1028e3c0d536f8bf94c40434173bf19367d75cdb466b87508bc61b7be_prof);

        
        $__internal_6c47f89b90ce816a591a6efd061a75df5be1da0560a88a5374be2d7fb37c5e8c->leave($__internal_6c47f89b90ce816a591a6efd061a75df5be1da0560a88a5374be2d7fb37c5e8c_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_62a2b0e1408e81c87030fb453cf18dcbfde247dcec0cb31bd122eaa7e30be24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a2b0e1408e81c87030fb453cf18dcbfde247dcec0cb31bd122eaa7e30be24c->enter($__internal_62a2b0e1408e81c87030fb453cf18dcbfde247dcec0cb31bd122eaa7e30be24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_8179d51f9a89075ce11f489fe7494ffb32b503f8af583df1c847ffcd28b0ef59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8179d51f9a89075ce11f489fe7494ffb32b503f8af583df1c847ffcd28b0ef59->enter($__internal_8179d51f9a89075ce11f489fe7494ffb32b503f8af583df1c847ffcd28b0ef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        
        $__internal_8179d51f9a89075ce11f489fe7494ffb32b503f8af583df1c847ffcd28b0ef59->leave($__internal_8179d51f9a89075ce11f489fe7494ffb32b503f8af583df1c847ffcd28b0ef59_prof);

        
        $__internal_62a2b0e1408e81c87030fb453cf18dcbfde247dcec0cb31bd122eaa7e30be24c->leave($__internal_62a2b0e1408e81c87030fb453cf18dcbfde247dcec0cb31bd122eaa7e30be24c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6bb33c9fb474f7dd8d9bd78bd6e874ac02c39aac2d22a5151779f1d63962e515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb33c9fb474f7dd8d9bd78bd6e874ac02c39aac2d22a5151779f1d63962e515->enter($__internal_6bb33c9fb474f7dd8d9bd78bd6e874ac02c39aac2d22a5151779f1d63962e515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a0a63111a32fd63904e491889faefea9235537dbc14e35b6b75a40866399e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a63111a32fd63904e491889faefea9235537dbc14e35b6b75a40866399e736->enter($__internal_a0a63111a32fd63904e491889faefea9235537dbc14e35b6b75a40866399e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a0a63111a32fd63904e491889faefea9235537dbc14e35b6b75a40866399e736->leave($__internal_a0a63111a32fd63904e491889faefea9235537dbc14e35b6b75a40866399e736_prof);

        
        $__internal_6bb33c9fb474f7dd8d9bd78bd6e874ac02c39aac2d22a5151779f1d63962e515->leave($__internal_6bb33c9fb474f7dd8d9bd78bd6e874ac02c39aac2d22a5151779f1d63962e515_prof);

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
