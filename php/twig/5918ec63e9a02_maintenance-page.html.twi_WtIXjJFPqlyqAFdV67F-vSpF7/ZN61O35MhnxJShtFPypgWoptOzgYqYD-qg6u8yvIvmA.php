<?php

/* themes/business/templates/maintenance-page.html.twig */
class __TwigTemplate_0530327adced9ebda4e7ed430e25aabfdd887dda5e7dbea89a13d4eba4db68f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 28);
        $filters = array("t" => 30);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo "<!DOCTYPE html>
<html";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
<head>
  ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true));
        echo "
  <title>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
        echo "</title>
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles"]) ? $context["styles"] : null), "html", null, true));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scripts"]) ? $context["scripts"] : null), "html", null, true));
        echo "
</head>
<body class=\"";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), "html", null, true));
        echo "\">

<div id=\"wrap\" class=\"clearfix\">

  <header id=\"header\" class=\"clearfix\" role=\"banner\">
    <div>
      ";
        // line 28
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 29
            echo "        <div id=\"logo\">
          <a href=\"";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
            <img src=\"";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
          </a>
        </div>
      ";
        }
        // line 35
        echo "
      ";
        // line 36
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 37
            echo "        <hgroup class=\"name-and-slogan\" id=\"sitename\">

          ";
            // line 39
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 40
                echo "            <h2 class=\"site-name\">
              <a href=\"";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </h2>
          ";
            }
            // line 44
            echo "
          ";
            // line 45
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 46
                echo "            <p class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</p>
          ";
            }
            // line 48
            echo "        </hgroup>";
            // line 49
            echo "      ";
        }
        // line 50
        echo "    </div>

  </header>

  <section id=\"main\" role=\"main\" class=\"clearfix\">
    ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "
    <a id=\"main-content\"></a>
    ";
        // line 57
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 58
            echo "      <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
    ";
        }
        // line 60
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </section> <!-- /#main -->

</div>";
        // line 64
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/business/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  157 => 60,  151 => 58,  149 => 57,  144 => 55,  137 => 50,  134 => 49,  132 => 48,  126 => 46,  124 => 45,  121 => 44,  111 => 41,  108 => 40,  106 => 39,  102 => 37,  100 => 36,  97 => 35,  88 => 31,  82 => 30,  79 => 29,  77 => 28,  68 => 22,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  46 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All of the available variables are mirrored in html.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
<head>
  {{ head }}
  <title>{{ head_title }}</title>
  {{ styles }}
  {{ scripts }}
</head>
<body class=\"{{ attributes.class }}\">

<div id=\"wrap\" class=\"clearfix\">

  <header id=\"header\" class=\"clearfix\" role=\"banner\">
    <div>
      {% if logo %}
        <div id=\"logo\">
          <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
            <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
          </a>
        </div>
      {% endif %}

      {% if site_name or site_slogan %}
        <hgroup class=\"name-and-slogan\" id=\"sitename\">

          {% if site_name %}
            <h2 class=\"site-name\">
              <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
            </h2>
          {% endif %}

          {% if site_slogan %}
            <p class=\"site-slogan\">{{ site_slogan }}</p>
          {% endif %}
        </hgroup>{# ./name-and-slogan #}
      {% endif %}
    </div>

  </header>

  <section id=\"main\" role=\"main\" class=\"clearfix\">
    {{ messages }}
    <a id=\"main-content\"></a>
    {% if title %}
      <h1>{{ title }}</h1>
    {% endif %}
    {{ content }}
  </section> <!-- /#main -->

</div>{# /#wrap #}

</body>
</html>
";
    }
}
