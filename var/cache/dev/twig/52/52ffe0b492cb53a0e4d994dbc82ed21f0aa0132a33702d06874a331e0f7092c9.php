<?php

/* CatchOfTheDayDevExamBundle::base.html.twig */
class __TwigTemplate_0c4acf38201dadedcebd41750454563c09808c65fa31bd3aabe0501d6ec05439 extends Twig_Template
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
        $__internal_85a156914f104ae5b78209a6b274141717220daa8ae8bf404c5f116af2c3dc30 = $this->env->getExtension("native_profiler");
        $__internal_85a156914f104ae5b78209a6b274141717220daa8ae8bf404c5f116af2c3dc30->enter($__internal_85a156914f104ae5b78209a6b274141717220daa8ae8bf404c5f116af2c3dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CatchOfTheDayDevExamBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</body>
</html>";
        
        $__internal_85a156914f104ae5b78209a6b274141717220daa8ae8bf404c5f116af2c3dc30->leave($__internal_85a156914f104ae5b78209a6b274141717220daa8ae8bf404c5f116af2c3dc30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56f7858c175f21c6794a4084657e4006b7a500579592b05badbec696c493d3b3 = $this->env->getExtension("native_profiler");
        $__internal_56f7858c175f21c6794a4084657e4006b7a500579592b05badbec696c493d3b3->enter($__internal_56f7858c175f21c6794a4084657e4006b7a500579592b05badbec696c493d3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CatchOfTheDay Developer Exam";
        
        $__internal_56f7858c175f21c6794a4084657e4006b7a500579592b05badbec696c493d3b3->leave($__internal_56f7858c175f21c6794a4084657e4006b7a500579592b05badbec696c493d3b3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fb719e8e21a53268d0db60a81bd6b751e01d547ed5a30d28570630795951ce6 = $this->env->getExtension("native_profiler");
        $__internal_9fb719e8e21a53268d0db60a81bd6b751e01d547ed5a30d28570630795951ce6->enter($__internal_9fb719e8e21a53268d0db60a81bd6b751e01d547ed5a30d28570630795951ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/css/lib/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/css/lib/bootstrap/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_9fb719e8e21a53268d0db60a81bd6b751e01d547ed5a30d28570630795951ce6->leave($__internal_9fb719e8e21a53268d0db60a81bd6b751e01d547ed5a30d28570630795951ce6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_e763532cd85c86c8614eb5a16f12355d42c67bad870eeeec1e9b7370eb57b9e5 = $this->env->getExtension("native_profiler");
        $__internal_e763532cd85c86c8614eb5a16f12355d42c67bad870eeeec1e9b7370eb57b9e5->enter($__internal_e763532cd85c86c8614eb5a16f12355d42c67bad870eeeec1e9b7370eb57b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e763532cd85c86c8614eb5a16f12355d42c67bad870eeeec1e9b7370eb57b9e5->leave($__internal_e763532cd85c86c8614eb5a16f12355d42c67bad870eeeec1e9b7370eb57b9e5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ea99e25ca70763590e2423666890454086f8ecccfc40e5974f855323863b4f9 = $this->env->getExtension("native_profiler");
        $__internal_5ea99e25ca70763590e2423666890454086f8ecccfc40e5974f855323863b4f9->enter($__internal_5ea99e25ca70763590e2423666890454086f8ecccfc40e5974f855323863b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/js/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/js/lib/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5ea99e25ca70763590e2423666890454086f8ecccfc40e5974f855323863b4f9->leave($__internal_5ea99e25ca70763590e2423666890454086f8ecccfc40e5974f855323863b4f9_prof);

    }

    public function getTemplateName()
    {
        return "CatchOfTheDayDevExamBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 17,  105 => 16,  99 => 15,  88 => 14,  79 => 10,  74 => 9,  68 => 8,  56 => 7,  48 => 19,  46 => 15,  44 => 14,  40 => 12,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}CatchOfTheDay Developer Exam{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/catchofthedaydevexam/css/lib/bootstrap/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/catchofthedaydevexam/css/lib/bootstrap/bootstrap-theme.min.css') }}" />*/
/*     {% endblock stylesheets %}*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock body %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/catchofthedaydevexam/js/lib/jquery/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/catchofthedaydevexam/js/lib/bootstrap/bootstrap.min.js') }}"></script>*/
/* {% endblock javascripts %}*/
/* </body>*/
/* </html>*/
