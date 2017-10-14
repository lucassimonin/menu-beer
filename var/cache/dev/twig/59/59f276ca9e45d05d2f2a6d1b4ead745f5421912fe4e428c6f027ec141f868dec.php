<?php

/* admin/index.html.twig */
class __TwigTemplate_e9fc282ad1c333f0b638e23dcc859ae66aa5a38023322f19acc06bb1de74f22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6153da257ba9dba929ce3cddc891f0bc019165b9c8fd6a0591ecf339664266b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6153da257ba9dba929ce3cddc891f0bc019165b9c8fd6a0591ecf339664266b3->enter($__internal_6153da257ba9dba929ce3cddc891f0bc019165b9c8fd6a0591ecf339664266b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_0485c09ac60c15375de2aa9bfafa67f0067eb9c6e34cde93cd501c7ffaf5896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0485c09ac60c15375de2aa9bfafa67f0067eb9c6e34cde93cd501c7ffaf5896b->enter($__internal_0485c09ac60c15375de2aa9bfafa67f0067eb9c6e34cde93cd501c7ffaf5896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6153da257ba9dba929ce3cddc891f0bc019165b9c8fd6a0591ecf339664266b3->leave($__internal_6153da257ba9dba929ce3cddc891f0bc019165b9c8fd6a0591ecf339664266b3_prof);

        
        $__internal_0485c09ac60c15375de2aa9bfafa67f0067eb9c6e34cde93cd501c7ffaf5896b->leave($__internal_0485c09ac60c15375de2aa9bfafa67f0067eb9c6e34cde93cd501c7ffaf5896b_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_bdde9cc60c818ed27ace5a0fad2b1d791fc451bc7d46d0fcb6a4623212a934df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdde9cc60c818ed27ace5a0fad2b1d791fc451bc7d46d0fcb6a4623212a934df->enter($__internal_bdde9cc60c818ed27ace5a0fad2b1d791fc451bc7d46d0fcb6a4623212a934df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_c823aba571f6134bc9331470f060848f6196851af287a0cafe64e46b32c09527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c823aba571f6134bc9331470f060848f6196851af287a0cafe64e46b32c09527->enter($__internal_c823aba571f6134bc9331470f060848f6196851af287a0cafe64e46b32c09527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.list"), "html", null, true);
        
        $__internal_c823aba571f6134bc9331470f060848f6196851af287a0cafe64e46b32c09527->leave($__internal_c823aba571f6134bc9331470f060848f6196851af287a0cafe64e46b32c09527_prof);

        
        $__internal_bdde9cc60c818ed27ace5a0fad2b1d791fc451bc7d46d0fcb6a4623212a934df->leave($__internal_bdde9cc60c818ed27ace5a0fad2b1d791fc451bc7d46d0fcb6a4623212a934df_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b78a3923b43ae717b2aece49f2beb260b59c0f4e1ee15ff65f6428c3c7b49a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78a3923b43ae717b2aece49f2beb260b59c0f4e1ee15ff65f6428c3c7b49a20->enter($__internal_b78a3923b43ae717b2aece49f2beb260b59c0f4e1ee15ff65f6428c3c7b49a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_45136472cca7a017a5ea2d99e35047634bce0e0f997ee4ad4925f68a9bd0bf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45136472cca7a017a5ea2d99e35047634bce0e0f997ee4ad4925f68a9bd0bf1d->enter($__internal_45136472cca7a017a5ea2d99e35047634bce0e0f997ee4ad4925f68a9bd0bf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\" id=\"main\">
        
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.list"), "html", null, true);
        echo "</h2>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.global.disconnect"), "html", null, true);
        echo "</a>
        
        ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 9, $this->getSourceContext()); })())) > 0)) {
            // line 10
            echo "            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.number"), "html", null, true);
            echo "</th>
                        <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.name"), "html", null, true);
            echo "</th>
                        <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.brewery"), "html", null, true);
            echo "</th>
                        <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.country"), "html", null, true);
            echo "</th>
                        <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.type"), "html", null, true);
            echo "</th>
                        <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.price"), "html", null, true);
            echo "</th>
                        <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.price2"), "html", null, true);
            echo "</th>
                        <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.actions"), "html", null, true);
            echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["beers"]) || array_key_exists("beers", $context) ? $context["beers"] : (function () { throw new Twig_Error_Runtime('Variable "beers" does not exist.', 25, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["beer"]) {
                // line 26
                echo "                            <tr>
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "number", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "brewery", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "country", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "type", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "price2", array()), "html", null, true);
                echo "</td>
                                ";
                // line 34
                $this->loadTemplate(":parts:actions.html.twig", "admin/index.html.twig", 34)->display(array_merge($context, array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["beer"], "id", array()))));
                // line 35
                echo "                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.no_data"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "    </div>
";
        
        $__internal_45136472cca7a017a5ea2d99e35047634bce0e0f997ee4ad4925f68a9bd0bf1d->leave($__internal_45136472cca7a017a5ea2d99e35047634bce0e0f997ee4ad4925f68a9bd0bf1d_prof);

        
        $__internal_b78a3923b43ae717b2aece49f2beb260b59c0f4e1ee15ff65f6428c3c7b49a20->leave($__internal_b78a3923b43ae717b2aece49f2beb260b59c0f4e1ee15ff65f6428c3c7b49a20_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 43,  197 => 41,  191 => 37,  176 => 35,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  143 => 26,  126 => 25,  119 => 21,  115 => 20,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  85 => 10,  83 => 9,  76 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block meta_title %}{{ ('app.beer.list')|trans }}{% endblock %}
{% block content %}
    <div class=\"container\" id=\"main\">
        
        <h2>{{ ('app.beer.list')|trans }}</h2>
        <a href=\"{{ path('fos_user_security_logout') }}\">{{ ('app.global.disconnect')|trans }}</a>
        
        {% if beers|length > 0 %}
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>{{ ('app.beer.number')|trans }}</th>
                        <th>{{ ('app.beer.name')|trans }}</th>
                        <th>{{ ('app.beer.brewery')|trans }}</th>
                        <th>{{ ('app.beer.country')|trans }}</th>
                        <th>{{ ('app.beer.type')|trans }}</th>
                        <th>{{ ('app.beer.price')|trans }}</th>
                        <th>{{ ('app.beer.price2')|trans }}</th>
                        <th>{{ ('app.beer.actions')|trans }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for beer in beers %}
                            <tr>
                                <td>{{ beer.number }}</td>
                                <td>{{ beer.name }}</td>
                                <td>{{ beer.brewery }}</td>
                                <td>{{ beer.country }}</td>
                                <td>{{ beer.type }}</td>
                                <td>{{ beer.price }}</td>
                                <td>{{ beer.price2 }}</td>
                                {% include ':parts:actions.html.twig'  with {'id': beer.id } %}
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% else %}
            {{ 'app.no_data'|trans }}
        {% endif %}
    </div>
{% endblock %}
", "admin/index.html.twig", "/Users/lucas/PhpstormProjects/menu-beer/app/Resources/views/admin/index.html.twig");
    }
}
