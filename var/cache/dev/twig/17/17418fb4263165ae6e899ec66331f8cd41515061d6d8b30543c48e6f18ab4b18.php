<?php

/* CatchOfTheDayDevExamBundle:Default:list.html.twig */
class __TwigTemplate_90930228458c5e5871d40e6eb2e87c48f16387e544fa0209ab50282562c915a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CatchOfTheDayDevExamBundle::base.html.twig", "CatchOfTheDayDevExamBundle:Default:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CatchOfTheDayDevExamBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1c5510bff0da843aa9b20972fe8bf6f10f32939c0142cc378d478a292046d34 = $this->env->getExtension("native_profiler");
        $__internal_a1c5510bff0da843aa9b20972fe8bf6f10f32939c0142cc378d478a292046d34->enter($__internal_a1c5510bff0da843aa9b20972fe8bf6f10f32939c0142cc378d478a292046d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CatchOfTheDayDevExamBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c5510bff0da843aa9b20972fe8bf6f10f32939c0142cc378d478a292046d34->leave($__internal_a1c5510bff0da843aa9b20972fe8bf6f10f32939c0142cc378d478a292046d34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7141966f3b37446e0d831a9d8c32d81c8d7a901447cde4a2e7bfa4d81808efcc = $this->env->getExtension("native_profiler");
        $__internal_7141966f3b37446e0d831a9d8c32d81c8d7a901447cde4a2e7bfa4d81808efcc->enter($__internal_7141966f3b37446e0d831a9d8c32d81c8d7a901447cde4a2e7bfa4d81808efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Welcome";
        
        $__internal_7141966f3b37446e0d831a9d8c32d81c8d7a901447cde4a2e7bfa4d81808efcc->leave($__internal_7141966f3b37446e0d831a9d8c32d81c8d7a901447cde4a2e7bfa4d81808efcc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b3c0ce90c5ce74cfdfad801d9d615c1b5ac5749c6ad5399727b4ecccaf4d5f1 = $this->env->getExtension("native_profiler");
        $__internal_9b3c0ce90c5ce74cfdfad801d9d615c1b5ac5749c6ad5399727b4ecccaf4d5f1->enter($__internal_9b3c0ce90c5ce74cfdfad801d9d615c1b5ac5749c6ad5399727b4ecccaf4d5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/css/views/Default/index.css"), "html", null, true);
        echo "\"
";
        
        $__internal_9b3c0ce90c5ce74cfdfad801d9d615c1b5ac5749c6ad5399727b4ecccaf4d5f1->leave($__internal_9b3c0ce90c5ce74cfdfad801d9d615c1b5ac5749c6ad5399727b4ecccaf4d5f1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3e0a92a177963617e09be384d52b815bf19b23565741d5e2c14c088373a28a7 = $this->env->getExtension("native_profiler");
        $__internal_b3e0a92a177963617e09be384d52b815bf19b23565741d5e2c14c088373a28a7->enter($__internal_b3e0a92a177963617e09be384d52b815bf19b23565741d5e2c14c088373a28a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h3>
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/catchofthedaydevexam/images/cotd-logo.png"), "html", null, true);
        echo "\" />
                CatchOfTheDay Developer Exam
            </h3>
        </div>


        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"app-header\">TODO List Application (Complete)</h4>
            </div>
        </div>

       
        <div class=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-striped table-hover\">
                    <colgroup>
                        <col style=\"width: 120px\" />
                        <col style=\"width: 200px\" />
                        <col />
                        <col style=\"width: 135px\" />
                    </colgroup>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Created Timestamp</th>
                        <th>Text</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ($this->getAttribute($context["item"], "complete", array())) {
                // line 48
                echo "                        <tr>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "created", array()), "d/m/Y g:i a"), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mark_as_uncomplete", array("itemId" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success btn-mark-as-uncomplete\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
                                    Mark as Un-Complete
                                </a>
                            </td>
                        </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>
            </div>
        </div>
                    
        <div class=\"col-md-12 navigation\">
            ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
";
        
        $__internal_b3e0a92a177963617e09be384d52b815bf19b23565741d5e2c14c088373a28a7->leave($__internal_b3e0a92a177963617e09be384d52b815bf19b23565741d5e2c14c088373a28a7_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7f4909c125002d61ef3ba2bbb32dc952749c3c33809958f45b784d6969dc1d3 = $this->env->getExtension("native_profiler");
        $__internal_b7f4909c125002d61ef3ba2bbb32dc952749c3c33809958f45b784d6969dc1d3->enter($__internal_b7f4909c125002d61ef3ba2bbb32dc952749c3c33809958f45b784d6969dc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    
    ";
        // line 74
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
<script type=\"text/javascript\">
    //<![CDATA[

\$(document).ready(function () {
  
    
    \$('body').on('click', '.btn-mark-as-uncomplete', function (e) {

        e.preventDefault();
              
         \$.ajax({
            type: 'GET',
            url: \$(this).attr('href'),
            data: 'ajax=1',
            dataType: 'json',
            async: false,
            success: function(data) {   
                alert(\"Data successfully Marked as UN-COMPLETE !!!\");
                \$(location).attr('href', '/list');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
    

});



//]]>
    </script>
";
        
        $__internal_b7f4909c125002d61ef3ba2bbb32dc952749c3c33809958f45b784d6969dc1d3->leave($__internal_b7f4909c125002d61ef3ba2bbb32dc952749c3c33809958f45b784d6969dc1d3_prof);

    }

    public function getTemplateName()
    {
        return "CatchOfTheDayDevExamBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  176 => 73,  170 => 72,  159 => 65,  151 => 59,  136 => 53,  131 => 51,  127 => 50,  123 => 49,  120 => 48,  115 => 45,  81 => 14,  76 => 11,  70 => 10,  61 => 7,  56 => 6,  50 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'CatchOfTheDayDevExamBundle::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }} - Welcome{% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/catchofthedaydevexam/css/views/Default/index.css') }}"*/
/* {% endblock stylesheets %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="page-header">*/
/*             <h3>*/
/*                 <img src="{{ asset('bundles/catchofthedaydevexam/images/cotd-logo.png') }}" />*/
/*                 CatchOfTheDay Developer Exam*/
/*             </h3>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="app-header">TODO List Application (Complete)</h4>*/
/*             </div>*/
/*         </div>*/
/* */
/*        */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <colgroup>*/
/*                         <col style="width: 120px" />*/
/*                         <col style="width: 200px" />*/
/*                         <col />*/
/*                         <col style="width: 135px" />*/
/*                     </colgroup>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>Created Timestamp</th>*/
/*                         <th>Text</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for item in pagination if item.complete %}*/
/* {#                    {% for item in items if item.complete %}#}*/
/* {#                    {% for item in items %}#}*/
/*                         <tr>*/
/*                             <td>{{ item.id }}</td>*/
/*                             <td>{{ item.created|date('d/m/Y g:i a') }}</td>*/
/*                             <td>{{ item.text }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ path('mark_as_uncomplete', { 'itemId': item.id }) }}" class="btn btn-sm btn-success btn-mark-as-uncomplete" id="{{item.id}}">*/
/*                                     Mark as Un-Complete*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*                     */
/*         <div class="col-md-12 navigation">*/
/*             {{ knp_pagination_render(pagination) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock body %}*/
/* */
/* */
/*     */
/* {% block javascripts %}*/
/*     */
/*     {{ parent() }}*/
/*     */
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/* */
/* $(document).ready(function () {*/
/*   */
/*     */
/*     $('body').on('click', '.btn-mark-as-uncomplete', function (e) {*/
/* */
/*         e.preventDefault();*/
/*               */
/*          $.ajax({*/
/*             type: 'GET',*/
/*             url: $(this).attr('href'),*/
/*             data: 'ajax=1',*/
/*             dataType: 'json',*/
/*             async: false,*/
/*             success: function(data) {   */
/*                 alert("Data successfully Marked as UN-COMPLETE !!!");*/
/*                 $(location).attr('href', '/list');*/
/*             },*/
/*             error: function(jqXHR, textStatus, errorThrown) {*/
/*                 alert(errorThrown);*/
/*             }*/
/*         });*/
/*     });*/
/*     */
/* */
/* });*/
/* */
/* */
/* */
/* //]]>*/
/*     </script>*/
/* {% endblock %}*/
