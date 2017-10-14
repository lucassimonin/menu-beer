<?php

/* admin/index.html.twig */
class __TwigTemplate_f62a92e3d3f4436412bfdcbc346f597b8aa5443701ab689cd1743450ee4559fe extends Twig_Template
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
        $__internal_d3ffbb822ab443bac9a3ecbf20117bc5cab6551c7966c186350a1488bc8eb2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ffbb822ab443bac9a3ecbf20117bc5cab6551c7966c186350a1488bc8eb2aa->enter($__internal_d3ffbb822ab443bac9a3ecbf20117bc5cab6551c7966c186350a1488bc8eb2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_ba999fcfa10a88053dbd3f3af04597f92ba9c54fc89fb4c2110ed0479149a3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba999fcfa10a88053dbd3f3af04597f92ba9c54fc89fb4c2110ed0479149a3b6->enter($__internal_ba999fcfa10a88053dbd3f3af04597f92ba9c54fc89fb4c2110ed0479149a3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ffbb822ab443bac9a3ecbf20117bc5cab6551c7966c186350a1488bc8eb2aa->leave($__internal_d3ffbb822ab443bac9a3ecbf20117bc5cab6551c7966c186350a1488bc8eb2aa_prof);

        
        $__internal_ba999fcfa10a88053dbd3f3af04597f92ba9c54fc89fb4c2110ed0479149a3b6->leave($__internal_ba999fcfa10a88053dbd3f3af04597f92ba9c54fc89fb4c2110ed0479149a3b6_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_c2a5e7024237b0e53a85512c2c6b0910b7432de3fa645a43037a0b9a2b16152c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a5e7024237b0e53a85512c2c6b0910b7432de3fa645a43037a0b9a2b16152c->enter($__internal_c2a5e7024237b0e53a85512c2c6b0910b7432de3fa645a43037a0b9a2b16152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_201dc99786bd36177c81e1433973796d67c789ba5de88a2461eb7e0d28c83ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201dc99786bd36177c81e1433973796d67c789ba5de88a2461eb7e0d28c83ed8->enter($__internal_201dc99786bd36177c81e1433973796d67c789ba5de88a2461eb7e0d28c83ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("app.beer.list"), "html", null, true);
        
        $__internal_201dc99786bd36177c81e1433973796d67c789ba5de88a2461eb7e0d28c83ed8->leave($__internal_201dc99786bd36177c81e1433973796d67c789ba5de88a2461eb7e0d28c83ed8_prof);

        
        $__internal_c2a5e7024237b0e53a85512c2c6b0910b7432de3fa645a43037a0b9a2b16152c->leave($__internal_c2a5e7024237b0e53a85512c2c6b0910b7432de3fa645a43037a0b9a2b16152c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_712d53b34e15dc9a7690bca5a3785c3afe16ab44d5446d99c7c4ce004c2fd73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712d53b34e15dc9a7690bca5a3785c3afe16ab44d5446d99c7c4ce004c2fd73c->enter($__internal_712d53b34e15dc9a7690bca5a3785c3afe16ab44d5446d99c7c4ce004c2fd73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_08b69d47ceac10a1ab81f70aa6023278f2f5ce9fb0f3545fdf90403e1a0d291f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b69d47ceac10a1ab81f70aa6023278f2f5ce9fb0f3545fdf90403e1a0d291f->enter($__internal_08b69d47ceac10a1ab81f70aa6023278f2f5ce9fb0f3545fdf90403e1a0d291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_08b69d47ceac10a1ab81f70aa6023278f2f5ce9fb0f3545fdf90403e1a0d291f->leave($__internal_08b69d47ceac10a1ab81f70aa6023278f2f5ce9fb0f3545fdf90403e1a0d291f_prof);

        
        $__internal_712d53b34e15dc9a7690bca5a3785c3afe16ab44d5446d99c7c4ce004c2fd73c->leave($__internal_712d53b34e15dc9a7690bca5a3785c3afe16ab44d5446d99c7c4ce004c2fd73c_prof);

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
