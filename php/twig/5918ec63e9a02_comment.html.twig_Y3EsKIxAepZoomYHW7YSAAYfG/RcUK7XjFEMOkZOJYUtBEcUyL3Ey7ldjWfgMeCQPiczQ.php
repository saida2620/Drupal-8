<?php

/* themes/business/templates/comment.html.twig */
class __TwigTemplate_64d860e0423e15bac89719fed64302396c8a7108ec3ed3c003e096d0964a6fcb extends Twig_Template
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
        $tags = array("if" => 88);
        $filters = array("without" => 95);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 67
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "

  <h3";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3> <!-- /.header -->

  ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  <footer>
    ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "
    <p class=\"submitted\">";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted"]) ? $context["submitted"] : null), "html", null, true));
        echo "</p>
    ";
        // line 82
        echo "    <span class=\"hidden new\" data-comment-timestamp=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
        echo "\"></span>
    ";
        // line 88
        echo "    ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 89
            echo "      <p class=\"parent visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "</p>
    ";
        }
        // line 91
        echo "
  </footer>

  <div";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true));
        echo "

    ";
        // line 97
        if ((isset($context["signature"]) ? $context["signature"] : null)) {
            // line 98
            echo "      <div class=\"user-signature\">
        ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["signature"]) ? $context["signature"] : null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 102
        echo "  </div>
  ";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
        echo "
</article> <!-- /.comment -->
";
    }

    public function getTemplateName()
    {
        return "themes/business/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 103,  113 => 102,  107 => 99,  104 => 98,  102 => 97,  97 => 95,  93 => 94,  88 => 91,  82 => 89,  79 => 88,  74 => 82,  70 => 76,  66 => 75,  60 => 72,  53 => 70,  48 => 68,  43 => 67,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for comments.
 *
 * Available variables:
 * - author: Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.created' variable.
 * - changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: Submission information created from author and created
 *   during template_preprocess_comment().
 * - user_picture: The comment author's profile picture.
 * - signature: The comment author's signature.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: Comment title, linked to the comment.
 * - attributes.class: List of classes that can be used to style contextually
 *   through CSS. The default values can be one or more of the following:
 *   - comment: The current template type; e.g., 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 *
 * These variables are provided to give context about the parent comment (if
 * any):
 * - comment_parent: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {{ title_prefix }}

  <h3{{ title_attributes }}>{{ title }}</h3> <!-- /.header -->

  {{ title_suffix }}

  <footer>
    {{ user_picture }}
    <p class=\"submitted\">{{ submitted }}</p>
    {#
    Hide the \"new\" indicator by default, let a piece of JavaScript ask
    the server which comments are new for the user. Rendering the final
    \"new\" indicator here would break the render cache.
    #}
    <span class=\"hidden new\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></span>
    {#
      Indicate the semantic relationship between parent and child comments
      for accessibility. The list is difficult to navigate in a screen
      reader without this information.
    #}
    {% if parent %}
      <p class=\"parent visually-hidden\">{{ parent }}</p>
    {% endif %}

  </footer>

  <div{{ content_attributes }}>
    {{ content|without('links') }}

    {% if signature %}
      <div class=\"user-signature\">
        {{ signature }}
      </div>
    {% endif %}
  </div>
  {{ content.links }}
</article> <!-- /.comment -->
";
    }
}
