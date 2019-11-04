<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_bb20b73829a6d84f9cf98cf4f21f3afd7d1441eab7df0150e5ab9e7f635c0c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'sggPopupLinkForDetailsButton' => array($this, 'block_sggPopupLinkForDetailsButton'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_class' => array($this, 'block_figcaption_class'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'ggImageCaptionEntry' => array($this, 'block_ggImageCaptionEntry'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figcaption_after_set_exif' => array($this, 'block_figcaption_after_set_exif'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";

\t";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 11
            echo "\t\t";
            $context["newImageDistance"] = ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()) / 2);
            // line 12
            echo "\t\tmargin: ";
            echo twig_escape_filter($this->env, ((array_key_exists("newImageDistance", $context)) ? (_twig_default_filter(($context["newImageDistance"] ?? null), 0)) : (0)), "html", null, true);
            echo "px;
\t";
        } else {
            // line 14
            echo "\t\tmargin: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), "html", null, true);
            echo "px;
\t";
        }
        // line 18
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 19
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 21
        echo "\t";
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        ob_start();
        // line 31
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array())))) {
            // line 32
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 34
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        if ((array_key_exists("mosaicParams", $context) && ($this->getAttribute(($context["mosaicParams"] ?? null), "photoCountLeft", array()) > 0))) {
            // line 39
            echo "\t";
            $context["is_ext_link"] = false;
        } else {
            // line 41
            echo "\t";
            $context["is_ext_link"] = ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())));
        }
        // line 43
        echo "
";
        // line 44
        ob_start();
        // line 45
        echo "\t";
        if ((((($context["is_ext_link"] ?? null) == false) && ( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 46
            echo "\t\tgg-colorbox
\t";
        }
        // line 48
        echo "
\t";
        // line 49
        if ((($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 50
            echo "\t\tgg-video
\t";
        }
        // line 52
        echo "
\t";
        // line 53
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && ((($context["is_ext_link"] ?? null) == false) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))))) {
            // line 54
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "
";
        // line 58
        ob_start();
        // line 59
        echo "\t";
        if ((($context["is_ext_link"] ?? null) == true)) {
            // line 60
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 61
            $context["link"] = true;
            // line 62
            echo "\t";
        } else {
            // line 63
            echo "\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute(($context["gallery"] ?? null), "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "
";
        // line 67
        ob_start();
        // line 68
        echo "\t";
        if ((($context["link"] ?? null) && $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 69
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 71
        echo "\t";
        if (((($context["link"] ?? null) == false) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "enabled", array()) == "false"))) {
            // line 72
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
";
        // line 76
        ob_start();
        // line 77
        echo "
\t";
        // line 78
        ob_start();
        // line 79
        echo "\t\t";
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        // line 81
        echo "\t";
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "
\t";
        // line 84
        echo "\t";
        ob_start();
        // line 85
        echo "\t\t";
        $this->displayBlock('a_attributes', $context, $blocks);
        // line 118
        echo "\t";
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 119
        echo "
\t";
        // line 120
        ob_start();
        // line 121
        echo "\t\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 126
        echo "\t";
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 127
        echo "
\t";
        // line 128
        ob_start();
        // line 129
        echo "\t\t";
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        // line 152
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 153
        echo "
\t";
        // line 154
        ob_start();
        // line 155
        echo "\t\t";
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 178
        echo "\t";
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 179
        echo "
\t";
        // line 180
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 181
        echo "
\t";
        // line 182
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 183
            echo "\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
            // line 184
            echo "\t";
        } else {
            // line 185
            echo "\t\t";
            // line 186
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()) == 0)) {
                // line 187
                echo "\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())));
                // line 188
                echo "\t\t";
            } else {
                // line 189
                echo "\t\t\t";
                $context["width"] = null;
                // line 190
                echo "\t\t";
            }
            // line 191
            echo "\t";
        }
        // line 192
        echo "
\t";
        // line 193
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 194
            echo "\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
            // line 195
            echo "\t";
        } else {
            // line 196
            echo "\t\t";
            // line 197
            echo "\t\t";
            $context["height"] = null;
            // line 198
            echo "\t\t";
            // line 199
            echo "\t\t";
            // line 200
            echo "\t\t";
            // line 201
            echo "\t\t";
            // line 202
            echo "\t\t";
            // line 203
            echo "\t";
        }
        // line 204
        echo "
\t";
        // line 205
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 3))) {
            // line 206
            echo "\t\t";
            $context["crop"] = 1;
            // line 207
            echo "\t";
        }
        // line 208
        echo "
\t";
        // line 209
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 1)) {
            // line 210
            echo "\t\t";
            $context["height"] = null;
            // line 211
            echo "\t";
        }
        // line 212
        echo "
\t";
        // line 213
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 2)) {
            // line 214
            echo "\t\t";
            $context["width"] = null;
            // line 215
            echo "\t";
        }
        // line 216
        echo "
\t";
        // line 217
        ob_start();
        // line 218
        echo "\t\t";
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        // line 225
        echo "\t";
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
\t";
        // line 227
        ob_start();
        // line 228
        echo "\t\t";
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        // line 239
        echo "\t";
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 240
        echo "
\t";
        // line 241
        ob_start();
        // line 242
        echo "\t\t";
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 270
        echo "\t";
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 271
        echo "
\t";
        // line 272
        ob_start();
        // line 273
        echo "\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 296
        echo "\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 297
        echo "
\t";
        // line 298
        ob_start();
        // line 299
        echo "\t\tclass=\"";
        $this->displayBlock('figcaption_class', $context, $blocks);
        echo "\"
\t\t";
        // line 300
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 308
        echo "\t";
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 309
        echo "
\t";
        // line 310
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        // line 311
        echo "
\t";
        // line 312
        ob_start();
        // line 313
        echo "\t\t";
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 441
        echo "\t";
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 442
        echo "
\t";
        // line 443
        ob_start();
        // line 444
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 484
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 485
        echo "
\t";
        // line 486
        ob_start();
        // line 487
        echo "\t\t";
        $this->displayBlock('figure_after', $context, $blocks);
        // line 492
        echo "\t";
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 493
        echo "
\t";
        // line 495
        echo "\t";
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        // line 529
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 22
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 23
            echo "\t\t\twidth:auto;
\t\t";
        } else {
            // line 25
            echo "\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t";
        }
        // line 27
        echo "\t";
    }

    // line 79
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
        // line 80
        echo "\t\t";
    }

    // line 85
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 86
        echo "
\t\t\tid=\"gg-";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
        echo "\"

\t\t\t";
        // line 89
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 92
        echo "
\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, ($context["ggMosaicHiddenItemVar"] ?? null), "html", null, true);
        echo "
\t\t\t";
        // line 94
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 98
        echo "
\t\t\t";
        // line 99
        if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
            // line 100
            echo "\t\t\t\ttitle=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 102
        echo "
\t\t\t";
        // line 103
        $this->displayBlock('sggPopupLinkForDetailsButton', $context, $blocks);
        // line 116
        echo "\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t";
    }

    // line 89
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\tclass=\"gg-link ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["aClass"] ?? null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t";
    }

    // line 94
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 95
        echo "\t\t\t\thref=\"";
        echo twig_escape_filter($this->env, htmlspecialchars_decode(twig_trim_filter(($context["aHref"] ?? null))), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 96
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t";
    }

    // line 103
    public function block_sggPopupLinkForDetailsButton($context, array $blocks = array())
    {
        // line 104
        echo "\t\t\t\t";
        // line 105
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["link"] ?? null) == false))) {
            // line 106
            echo "\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 107
($context["photo"] ?? null), "attachment", array()), "video", array()) == null)) {
            // line 108
            echo "\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(($context["aRel"] ?? null)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t";
        // line 111
        echo "
\t\t\t\t";
        // line 112
        if ((($context["link"] ?? null) == true)) {
            // line 113
            echo "\t\t\t\t\tdata-type=\"link\"
\t\t\t\t";
        }
        // line 115
        echo "\t\t\t";
    }

    // line 121
    public function block_figure_before($context, array $blocks = array())
    {
        // line 122
        echo "\t\t\t";
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 123
            echo "\t\t\t\t<a ";
            echo twig_escape_filter($this->env, ($context["var_a_attributes"] ?? null), "html", null, true);
            echo " >
\t\t\t";
        }
        // line 125
        echo "\t\t";
    }

    // line 129
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 130
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 131
            echo "\t\t\t\t";
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 132
                echo "\t\t\t\t\ticons
\t\t\t\t";
            } else {
                // line 134
                echo "\t\t\t\t\tnone
\t\t\t\t";
            }
            // line 136
            echo "\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t";
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 138
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 139
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t";
            }
            // line 150
            echo "\t\t\t";
        }
        // line 151
        echo "\t\t";
    }

    // line 155
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 156
        echo "\t\t\tclass=\"grid-gallery-caption
\t\t\t";
        // line 157
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item ";
        }
        // line 158
        echo "\t\t\t";
        echo twig_escape_filter($this->env, ($context["ggMosaicHiddenItemVar"] ?? null), "html", null, true);
        echo "
\t\t\t";
        // line 159
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 160
            echo "\t\t\t\tshadow-show
\t\t\t";
        }
        // line 162
        echo "\t\t\t";
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 163
            echo "\t\t\t\tshadow-hide
\t\t\t";
        }
        // line 164
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_trim_filter(($context["galleryType"] ?? null)), "html", null, true);
        echo "\"
\t\t\tdata-index=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 167
        echo twig_escape_filter($this->env, twig_trim_filter(($context["figureStyle"] ?? null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 168
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) {
            // line 169
            echo "\t\t\t\t\t";
            ob_start();
            // line 170
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 171
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 173
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 176
            echo "\t\t\t\t";
        }
        // line 177
        echo "\t\t";
    }

    // line 218
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 219
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 220
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 222
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
            echo "
\t\t\t";
        }
        // line 224
        echo "\t\t";
    }

    // line 228
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 229
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 230
            echo "\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 232
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 233
            echo "\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
                ";
            // line 234
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) != 0) || twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
                // line 235
                echo "\t\t\t\t\twidth:auto;
                ";
            }
            // line 237
            echo "\t\t\t";
        }
        // line 238
        echo "\t\t";
    }

    // line 242
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 243
        echo "\t\t\t";
        $context["imgSrcStr"] = htmlspecialchars_decode(twig_replace_filter(twig_trim_filter(($context["previewImgUrl"] ?? null)), "/%20\$/", ""));
        // line 244
        echo "\t\t\t";
        $context["imgClassStr"] = "ggImg";
        // line 245
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) {
            // line 246
            echo "\t\t\t\tdata-gg-real-image-href=\"";
            echo twig_escape_filter($this->env, ($context["imgSrcStr"] ?? null), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 248
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "hideLoader", array()) != "true") && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "defaultImgUrl", array())))) {
                // line 249
                echo "\t\t\t\t\t\t";
                $context["imgSrcStr"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "defaultImgUrl", array());
                // line 250
                echo "\t\t\t\t\t";
            } else {
                // line 251
                echo "\t\t\t\t\t\t";
                $context["imgSrcStr"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "leerImgUrl", array());
                // line 252
                echo "\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t";
            $context["imgClassStr"] = (($context["imgClassStr"] ?? null) . " ggLazyImg");
            // line 254
            echo "\t\t\t\t";
            // line 255
            echo "\t\t\t";
        }
        // line 256
        echo "\t\t\t";
        if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 2) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 3)) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 4))) {
            // line 257
            echo "\t\t\t\t";
            $context["imgClassStr"] = (($context["imgClassStr"] ?? null) . " ggNotInitImg");
            // line 258
            echo "\t\t\t";
        }
        // line 259
        echo "\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, ($context["imgSrcStr"] ?? null), "html", null, true);
        echo "\"
\t\t\tclass=\"";
        // line 260
        echo twig_escape_filter($this->env, ($context["imgClassStr"] ?? null), "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 261
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()) == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\t";
        // line 262
        if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
            // line 263
            echo "\t\t\t\ttitle=\"";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"
\t\t\t";
        }
        // line 265
        echo "\t\t\tdata-description=\"";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 266
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 268
        echo twig_escape_filter($this->env, ($context["imageAttributesStyleSizeVar"] ?? null), "html", null, true);
        echo "\"
\t\t";
    }

    // line 273
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 274
        echo "\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 275
            echo "\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 276
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 277
                echo "\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;
\t\t\t\t\t";
                // line 280
                echo "\t\t\t\t";
            } else {
                // line 281
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t";
            }
            // line 284
            echo "\t\t\t";
        } else {
            // line 285
            echo "\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 290
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 291
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;
\t\t\t\t";
            }
            // line 294
            echo "\t\t\t";
        }
        // line 295
        echo "\t\t";
    }

    // line 299
    public function block_figcaption_class($context, array $blocks = array())
    {
    }

    // line 300
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 301
        echo "\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 302
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t";
        } else {
            // line 304
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 306
        echo "\t\t\tstyle=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\"
\t\t";
    }

    // line 313
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 314
        echo "\t\t\t";
        // line 315
        echo "\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 316
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 317
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 318
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t\t";
            // line 321
            echo "\t\t\t\t\t";
            $context["showFewIconsVar"] = (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default"));
            // line 322
            echo "\t\t\t\t\t";
            $context["isShowVideoIcon"] = 0;
            // line 323
            echo "\t\t\t\t\t";
            if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())) && ((            // line 325
($context["showFewIconsVar"] ?? null) == "default") || ((            // line 327
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 328
($context["settings"] ?? null), "icons", array()), "isVideoIcon", array()) == "1"))))) {
                // line 332
                echo "\t\t\t\t\t\t";
                $context["isShowVideoIcon"] = 1;
                // line 333
                echo "\t\t\t\t\t";
            }
            // line 334
            echo "
\t\t\t\t\t";
            // line 335
            $context["isShowLinkIcon"] = 0;
            // line 336
            echo "\t\t\t\t\t";
            if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())) && ((            // line 338
($context["showFewIconsVar"] ?? null) == "default") || ((            // line 340
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 341
($context["settings"] ?? null), "icons", array()), "isLinkIcon", array()) == "1"))))) {
                // line 345
                echo "\t\t\t\t\t\t";
                $context["isShowLinkIcon"] = 1;
                // line 346
                echo "\t\t\t\t\t";
            }
            // line 347
            echo "
\t\t\t\t\t";
            // line 348
            if ((($context["isShowVideoIcon"] ?? null) == 1)) {
                // line 349
                echo "\t\t\t\t\t\t";
                ob_start();
                // line 350
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 351
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["youtube"] ?? null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 352
                    $context["videoSource"] = "youtube";
                    // line 353
                    echo "\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 354
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["vimeoPattern"] ?? null), ($context["vimeoReplace"] ?? null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 355
                    $context["videoSource"] = "vimeo";
                    // line 356
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 357
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 360
                echo "
\t\t\t\t\t\t";
                // line 361
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 362
                echo "
\t\t\t\t\t\t";
                // line 363
                ob_start();
                // line 364
                echo "\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 365
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";
\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 367
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 368
                echo twig_escape_filter($this->env, twig_trim_filter(($context["videoUrl"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-id=\"gg-";
                // line 369
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t";
                // line 370
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 371
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 373
                echo "
\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 374
                echo twig_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 375
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 376
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\tstyle=\"";
                // line 377
                echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-video-source=\"";
                // line 378
                echo twig_escape_filter($this->env, ($context["videoSource"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 380
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1")) {
                    // line 381
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                } else {
                    // line 383
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t";
                    // line 386
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 387
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
                // line 389
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 391
            echo "
\t\t\t\t\t";
            // line 392
            if ((($context["isShowLinkIcon"] ?? null) == 1)) {
                // line 393
                echo "\t\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                // line 394
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 395
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 397
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on")) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["prepareImgUrl"] ?? null), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 399
            echo "
\t\t\t\t\t";
            // line 400
            $context["isShowPopupIcon"] = 0;
            // line 401
            echo "\t\t\t\t\t";
            if (((((            // line 402
($context["showFewIconsVar"] ?? null) == "default") && twig_test_empty(            // line 403
($context["videoUrl"] ?? null))) && twig_test_empty($this->getAttribute($this->getAttribute(            // line 404
($context["photo"] ?? null), "attachment", array()), "external_link", array()))) || ((            // line 407
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 408
($context["settings"] ?? null), "icons", array()), "isPopupIcon", array()) == "1")))) {
                // line 411
                echo "\t\t\t\t\t\t";
                $context["isShowPopupIcon"] = 1;
                // line 412
                echo "\t\t\t\t\t";
            }
            // line 413
            echo "
\t\t\t\t\t";
            // line 414
            if ((($context["isShowPopupIcon"] ?? null) == 1)) {
                // line 415
                echo "\t\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                // line 416
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 417
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo twig_escape_filter($this->env, twig_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 419
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["prepareImgUrl"] ?? null), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 420
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1")) {
                    // line 421
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                }
                // line 422
                echo ">Open in pop-up window</a>
\t\t\t\t\t";
            }
            // line 424
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 426
        echo "
\t\t\t";
        // line 427
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 428
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 429
                echo "\t\t\t\t\t";
                $this->displayBlock('ggImageCaptionEntry', $context, $blocks);
                // line 438
                echo "\t\t\t\t";
            }
            // line 439
            echo "\t\t\t";
        }
        // line 440
        echo "\t\t";
    }

    // line 429
    public function block_ggImageCaptionEntry($context, array $blocks = array())
    {
        // line 430
        echo "\t\t\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
            // line 431
            echo "\t\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore ";
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "ggRtlClass";
            }
            echo "\" ";
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "dir=\"rtl\"";
            }
            echo " style=\"font-size:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t\t";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 437
        echo "\t\t\t\t\t";
    }

    // line 444
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 445
        echo "\t\t\t";
        if ((($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 446
            echo "
\t\t\t\t";
            // line 447
            ob_start();
            // line 448
            echo "\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 449
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 451
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            // line 452
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 453
                echo "\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t";
            }
            // line 455
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 456
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;
\t\t\t\t\t";
            }
            // line 459
            echo "\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 461
            echo "
\t\t\t\t";
            // line 462
            if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 463
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 464
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 465
                echo twig_escape_filter($this->env, ($context["captionStyle"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 466
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 468
                $context["ggCaptionText"] = $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array());
                // line 469
                echo "\t\t\t\t\t\t\t";
                $context["ggCaptionTextStyle"] = ((((("padding: 10px;display:table-cell;font-size:" . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 470
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array())) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em"))) . ";vertical-align:") . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 471
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array())) . ";");
                // line 472
                echo "\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
                    // line 473
                    echo "\t\t\t\t\t\t\t\t";
                    $context["ggCaptionText"] = $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array());
                    // line 474
                    echo "\t\t\t\t\t\t\t\t";
                    $context["ggCaptionTextStyle"] = (($context["ggCaptionTextStyle"] ?? null) . "font-weight: 800;");
                    // line 475
                    echo "\t\t\t\t\t\t\t";
                }
                // line 476
                echo "\t\t\t\t\t\t\t";
                $this->displayBlock('figcaption_after_set_exif', $context, $blocks);
                // line 479
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 482
            echo "\t\t\t";
        }
        // line 483
        echo "\t\t";
    }

    // line 476
    public function block_figcaption_after_set_exif($context, array $blocks = array())
    {
        // line 477
        echo "\t\t\t\t\t\t\t\t<span style=\"";
        echo twig_escape_filter($this->env, ($context["ggCaptionTextStyle"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["ggCaptionText"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t";
    }

    // line 487
    public function block_figure_after($context, array $blocks = array())
    {
        // line 488
        echo "\t\t\t";
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 489
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 491
        echo "\t\t";
    }

    // line 495
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 496
        echo "\t\t";
        echo twig_escape_filter($this->env, ($context["var_figure_before"] ?? null), "html", null, true);
        echo "
\t\t<FIGURE ";
        // line 497
        echo twig_escape_filter($this->env, ($context["var_figure_attributes"] ?? null), "html", null, true);
        echo " >
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 499
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 500
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 501
        echo "\"
\t\t\t\t style=\"
\t\t\t\t ";
        // line 503
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
            // line 504
            echo "\t\t\t\t\t\t width:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 505
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;
\t\t\t\t ";
        }
        // line 507
        echo "\">

\t\t\t\t<img ";
        // line 509
        echo twig_escape_filter($this->env, ($context["var_image_attributes"] ?? null), "html", null, true);
        echo " />
\t\t\t</div>
\t\t\t";
        // line 511
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 513
        echo "\t\t\t";
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 526
        echo "\t\t</FIGURE>
\t\t";
        // line 527
        echo twig_escape_filter($this->env, ($context["var_figure_after"] ?? null), "html", null, true);
        echo "
\t";
    }

    // line 511
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
        // line 512
        echo "\t\t\t";
    }

    // line 513
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 514
        echo "\t\t\t\t<FIGCAPTION ";
        echo twig_escape_filter($this->env, ($context["var_figcaption_attributes"] ?? null), "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t";
        // line 518
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 519
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t\t";
        }
        // line 520
        echo "\">
\t\t\t\t\t\t";
        // line 521
        echo twig_escape_filter($this->env, ($context["var_figcaption_wrap"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>
\t\t\t\t";
        // line 524
        echo twig_escape_filter($this->env, ($context["var_figcaption_after"] ?? null), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1605 => 524,  1599 => 521,  1596 => 520,  1590 => 519,  1588 => 518,  1580 => 514,  1577 => 513,  1573 => 512,  1570 => 511,  1564 => 527,  1561 => 526,  1558 => 513,  1556 => 511,  1551 => 509,  1547 => 507,  1541 => 505,  1536 => 504,  1534 => 503,  1530 => 501,  1526 => 500,  1524 => 499,  1519 => 497,  1514 => 496,  1511 => 495,  1507 => 491,  1503 => 489,  1500 => 488,  1497 => 487,  1488 => 477,  1485 => 476,  1481 => 483,  1478 => 482,  1473 => 479,  1470 => 476,  1467 => 475,  1464 => 474,  1461 => 473,  1458 => 472,  1456 => 471,  1455 => 470,  1453 => 469,  1451 => 468,  1446 => 466,  1442 => 465,  1434 => 464,  1431 => 463,  1429 => 462,  1426 => 461,  1420 => 459,  1415 => 456,  1412 => 455,  1406 => 453,  1404 => 452,  1400 => 451,  1395 => 450,  1391 => 449,  1386 => 448,  1384 => 447,  1381 => 446,  1378 => 445,  1375 => 444,  1371 => 437,  1364 => 433,  1349 => 431,  1346 => 430,  1343 => 429,  1339 => 440,  1336 => 439,  1333 => 438,  1330 => 429,  1327 => 428,  1325 => 427,  1322 => 426,  1318 => 424,  1314 => 422,  1310 => 421,  1308 => 420,  1293 => 419,  1287 => 417,  1285 => 416,  1282 => 415,  1280 => 414,  1277 => 413,  1274 => 412,  1271 => 411,  1269 => 408,  1268 => 407,  1267 => 404,  1266 => 403,  1265 => 402,  1263 => 401,  1261 => 400,  1258 => 399,  1232 => 397,  1226 => 395,  1224 => 394,  1221 => 393,  1219 => 392,  1216 => 391,  1212 => 389,  1209 => 387,  1206 => 386,  1203 => 384,  1201 => 383,  1197 => 381,  1194 => 380,  1190 => 378,  1186 => 377,  1183 => 376,  1179 => 375,  1175 => 374,  1172 => 373,  1166 => 371,  1164 => 370,  1158 => 369,  1154 => 368,  1151 => 367,  1146 => 365,  1141 => 364,  1139 => 363,  1136 => 362,  1134 => 361,  1131 => 360,  1128 => 359,  1122 => 357,  1119 => 356,  1117 => 355,  1112 => 354,  1109 => 353,  1107 => 352,  1102 => 351,  1099 => 350,  1096 => 349,  1094 => 348,  1091 => 347,  1088 => 346,  1085 => 345,  1083 => 341,  1082 => 340,  1081 => 338,  1079 => 336,  1077 => 335,  1074 => 334,  1071 => 333,  1068 => 332,  1066 => 328,  1065 => 327,  1064 => 325,  1062 => 323,  1059 => 322,  1056 => 321,  1051 => 318,  1045 => 317,  1042 => 316,  1039 => 315,  1037 => 314,  1034 => 313,  1027 => 306,  1021 => 304,  1015 => 302,  1012 => 301,  1009 => 300,  1004 => 299,  1000 => 295,  997 => 294,  992 => 291,  990 => 290,  986 => 289,  982 => 288,  977 => 287,  973 => 286,  968 => 285,  965 => 284,  960 => 281,  957 => 280,  951 => 277,  949 => 276,  944 => 275,  941 => 274,  938 => 273,  932 => 268,  928 => 267,  920 => 266,  911 => 265,  901 => 263,  899 => 262,  891 => 261,  887 => 260,  882 => 259,  879 => 258,  876 => 257,  873 => 256,  870 => 255,  868 => 254,  865 => 253,  862 => 252,  859 => 251,  856 => 250,  853 => 249,  850 => 248,  845 => 246,  842 => 245,  839 => 244,  836 => 243,  833 => 242,  829 => 238,  826 => 237,  822 => 235,  820 => 234,  815 => 233,  812 => 232,  806 => 230,  803 => 229,  800 => 228,  796 => 224,  790 => 222,  784 => 220,  781 => 219,  778 => 218,  774 => 177,  771 => 176,  768 => 175,  764 => 173,  758 => 171,  755 => 170,  752 => 169,  750 => 168,  746 => 167,  742 => 166,  738 => 165,  735 => 164,  731 => 163,  728 => 162,  724 => 160,  722 => 159,  717 => 158,  713 => 157,  710 => 156,  707 => 155,  703 => 151,  700 => 150,  697 => 149,  691 => 147,  685 => 145,  682 => 144,  679 => 143,  673 => 141,  667 => 139,  664 => 138,  661 => 137,  658 => 136,  654 => 134,  650 => 132,  647 => 131,  644 => 130,  641 => 129,  637 => 125,  631 => 123,  628 => 122,  625 => 121,  621 => 115,  617 => 113,  615 => 112,  612 => 111,  610 => 110,  604 => 108,  602 => 107,  599 => 106,  596 => 105,  594 => 104,  591 => 103,  585 => 96,  580 => 95,  577 => 94,  566 => 90,  563 => 89,  556 => 116,  554 => 103,  551 => 102,  545 => 100,  543 => 99,  540 => 98,  538 => 94,  534 => 93,  531 => 92,  529 => 89,  522 => 87,  519 => 86,  516 => 85,  512 => 80,  509 => 79,  505 => 27,  499 => 25,  495 => 23,  492 => 22,  489 => 21,  484 => 529,  481 => 495,  478 => 493,  475 => 492,  472 => 487,  470 => 486,  467 => 485,  464 => 484,  461 => 444,  459 => 443,  456 => 442,  453 => 441,  450 => 313,  448 => 312,  445 => 311,  443 => 310,  440 => 309,  437 => 308,  435 => 300,  430 => 299,  428 => 298,  425 => 297,  422 => 296,  419 => 273,  417 => 272,  414 => 271,  411 => 270,  408 => 242,  406 => 241,  403 => 240,  400 => 239,  397 => 228,  395 => 227,  392 => 226,  389 => 225,  386 => 218,  384 => 217,  381 => 216,  378 => 215,  375 => 214,  373 => 213,  370 => 212,  367 => 211,  364 => 210,  362 => 209,  359 => 208,  356 => 207,  353 => 206,  351 => 205,  348 => 204,  345 => 203,  343 => 202,  341 => 201,  339 => 200,  337 => 199,  335 => 198,  332 => 197,  330 => 196,  327 => 195,  324 => 194,  322 => 193,  319 => 192,  316 => 191,  313 => 190,  310 => 189,  307 => 188,  304 => 187,  301 => 186,  299 => 185,  296 => 184,  293 => 183,  291 => 182,  288 => 181,  286 => 180,  283 => 179,  280 => 178,  277 => 155,  275 => 154,  272 => 153,  269 => 152,  266 => 129,  264 => 128,  261 => 127,  258 => 126,  255 => 121,  253 => 120,  250 => 119,  247 => 118,  244 => 85,  241 => 84,  238 => 82,  235 => 81,  232 => 79,  230 => 78,  227 => 77,  225 => 76,  222 => 75,  217 => 72,  214 => 71,  208 => 69,  205 => 68,  203 => 67,  200 => 66,  193 => 63,  190 => 62,  188 => 61,  183 => 60,  180 => 59,  178 => 58,  175 => 57,  170 => 54,  168 => 53,  165 => 52,  161 => 50,  159 => 49,  156 => 48,  152 => 46,  149 => 45,  147 => 44,  144 => 43,  140 => 41,  136 => 39,  134 => 38,  131 => 37,  124 => 34,  118 => 32,  115 => 31,  113 => 30,  110 => 29,  106 => 21,  100 => 19,  97 => 18,  91 => 14,  85 => 12,  82 => 11,  80 => 10,  76 => 8,  64 => 7,  62 => 6,  57 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "/Users/vitaliysiveniukvsyveniu/htdocs/cleanwell/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/helpers.twig");
    }
}
