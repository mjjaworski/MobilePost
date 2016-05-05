<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_edcd4d95cec0063b63c9f661cf1c94dbda58ac2398e7dd4831eebde0925ce46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5c56707190cb5de3f045eb7d61e2ac9162147562b1cb185f1c0b8fdc5e7dd52b = $this->env->getExtension("native_profiler");
        $__internal_5c56707190cb5de3f045eb7d61e2ac9162147562b1cb185f1c0b8fdc5e7dd52b->enter($__internal_5c56707190cb5de3f045eb7d61e2ac9162147562b1cb185f1c0b8fdc5e7dd52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c56707190cb5de3f045eb7d61e2ac9162147562b1cb185f1c0b8fdc5e7dd52b->leave($__internal_5c56707190cb5de3f045eb7d61e2ac9162147562b1cb185f1c0b8fdc5e7dd52b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33756ebb9125dab3a890a34f512ce37d3f23d7d186f352a001b9bfd8cbc39cf3 = $this->env->getExtension("native_profiler");
        $__internal_33756ebb9125dab3a890a34f512ce37d3f23d7d186f352a001b9bfd8cbc39cf3->enter($__internal_33756ebb9125dab3a890a34f512ce37d3f23d7d186f352a001b9bfd8cbc39cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33756ebb9125dab3a890a34f512ce37d3f23d7d186f352a001b9bfd8cbc39cf3->leave($__internal_33756ebb9125dab3a890a34f512ce37d3f23d7d186f352a001b9bfd8cbc39cf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80df04c95322411b99e908c9376ebc15058023352107215d94d09f076a294db2 = $this->env->getExtension("native_profiler");
        $__internal_80df04c95322411b99e908c9376ebc15058023352107215d94d09f076a294db2->enter($__internal_80df04c95322411b99e908c9376ebc15058023352107215d94d09f076a294db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80df04c95322411b99e908c9376ebc15058023352107215d94d09f076a294db2->leave($__internal_80df04c95322411b99e908c9376ebc15058023352107215d94d09f076a294db2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2ef2354a3fd2571f1a726e4edb7a7fdd9ca8f55eaa3a6814451edae02a9e98 = $this->env->getExtension("native_profiler");
        $__internal_ec2ef2354a3fd2571f1a726e4edb7a7fdd9ca8f55eaa3a6814451edae02a9e98->enter($__internal_ec2ef2354a3fd2571f1a726e4edb7a7fdd9ca8f55eaa3a6814451edae02a9e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ec2ef2354a3fd2571f1a726e4edb7a7fdd9ca8f55eaa3a6814451edae02a9e98->leave($__internal_ec2ef2354a3fd2571f1a726e4edb7a7fdd9ca8f55eaa3a6814451edae02a9e98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
