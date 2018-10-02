<?php

/* layout.html */
class __TwigTemplate_2674e20555400624e468b0d0151267832bf1cce03db0c950a580d5aaca2236b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "</body>
</html>";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  38 => 11,  36 => 8,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ title }}</title>
</head>
<body>
{% block content%}

{% endblock %}
</body>
</html>", "layout.html", "/Applications/XAMPP/xamppfiles/htdocs/coolyFrame/app/view/layout.html");
    }
}
