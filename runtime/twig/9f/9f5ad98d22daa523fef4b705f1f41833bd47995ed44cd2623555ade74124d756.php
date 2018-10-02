<?php

/* index.html */
class __TwigTemplate_31a0e849c4d2664b017012b8545049f37eb6c9f2589a3cfdfb6beedf75717cb8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\"%}
{% block content%}
<h1>{{data}}</h1>
{% endblock%}", "index.html", "/Applications/XAMPP/xamppfiles/htdocs/coolyFrame/app/view/index.html");
    }
}
