<?php

/* RezoUCPBlogBundle:Blog:index.html.twig */
class __TwigTemplate_514bd1974e5ce3831c53d5c5ece2b745 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma premi�re page avec le Site du Z�ro !</title>
    </head>
    <body>
        <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo " !</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie �norm�ment, car cela veut dire que vous avez
            r�ussi � ex�cuter le programme pour accomplir une t�che simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "RezoUCPBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
