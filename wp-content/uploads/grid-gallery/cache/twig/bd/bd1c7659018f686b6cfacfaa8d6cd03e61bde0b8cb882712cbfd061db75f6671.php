<?php

/* @galleries/shortcode/style_for_effects.twig */
class __TwigTemplate_4e3617c2ed9843a6713fe127497a94ec23971e3d23f0fdad84e744ef1f2463c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captionAdditionalParams' => array($this, 'block_captionAdditionalParams'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('captionAdditionalParams', $context, $blocks);
    }

    public function block_captionAdditionalParams($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style_for_effects.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/style_for_effects.twig", "/Users/vitaliysiveniukvsyveniu/htdocs/cleanwell/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/style_for_effects.twig");
    }
}
