<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1cfe171e9ef8873262caf28738c9654f50d275e3e425c058175ea11597fe41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723deb242364fac3a2f5a30de99a7b42373d05a2d9a8ef70ee2ba9190a052ccd = $this->env->getExtension("native_profiler");
        $__internal_723deb242364fac3a2f5a30de99a7b42373d05a2d9a8ef70ee2ba9190a052ccd->enter($__internal_723deb242364fac3a2f5a30de99a7b42373d05a2d9a8ef70ee2ba9190a052ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723deb242364fac3a2f5a30de99a7b42373d05a2d9a8ef70ee2ba9190a052ccd->leave($__internal_723deb242364fac3a2f5a30de99a7b42373d05a2d9a8ef70ee2ba9190a052ccd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_156435497051032917cb69f7d8e1a62dbb3010ca6b4bb9e6741ef52e383b02e8 = $this->env->getExtension("native_profiler");
        $__internal_156435497051032917cb69f7d8e1a62dbb3010ca6b4bb9e6741ef52e383b02e8->enter($__internal_156435497051032917cb69f7d8e1a62dbb3010ca6b4bb9e6741ef52e383b02e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_156435497051032917cb69f7d8e1a62dbb3010ca6b4bb9e6741ef52e383b02e8->leave($__internal_156435497051032917cb69f7d8e1a62dbb3010ca6b4bb9e6741ef52e383b02e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8519685f2cb115e1282d8fc3ced44095f61ba334250edb2e61495374aa9256e3 = $this->env->getExtension("native_profiler");
        $__internal_8519685f2cb115e1282d8fc3ced44095f61ba334250edb2e61495374aa9256e3->enter($__internal_8519685f2cb115e1282d8fc3ced44095f61ba334250edb2e61495374aa9256e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8519685f2cb115e1282d8fc3ced44095f61ba334250edb2e61495374aa9256e3->leave($__internal_8519685f2cb115e1282d8fc3ced44095f61ba334250edb2e61495374aa9256e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e5f9987b8864fabd3c44e74e5860860d86cc17854802e68e9f12d5bdd63b592 = $this->env->getExtension("native_profiler");
        $__internal_0e5f9987b8864fabd3c44e74e5860860d86cc17854802e68e9f12d5bdd63b592->enter($__internal_0e5f9987b8864fabd3c44e74e5860860d86cc17854802e68e9f12d5bdd63b592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e5f9987b8864fabd3c44e74e5860860d86cc17854802e68e9f12d5bdd63b592->leave($__internal_0e5f9987b8864fabd3c44e74e5860860d86cc17854802e68e9f12d5bdd63b592_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
