<?php

/* themes/custom/bob_default/templates/page.html.twig */
class __TwigTemplate_10fdb98e9a2b187c2063f90b5d6c57b0734a16e62dae98de9df1f1a131606347 extends Twig_Template
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
        $tags = array("if" => 56);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        echo "<div id=\"wrapper\">
  <header class=\"clearfix\">
    ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "header_top", array())) {
            // line 57
            echo "    <div id=\"header_top\">
      ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "header_bottom", array())) {
            // line 63
            echo "    <div id=\"header_bottom\">
      ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_bottom", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 67
        echo "  </header>

  <div id=\"highlight\">
    ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlight", array()), "html", null, true));
        echo "
  </div>

  <div id=\"main_container\" class=\"clearfix closed\">
    ";
        // line 74
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) || $this->getAttribute(($context["page"] ?? null), "sidebar_bottom", array()))) {
            // line 75
            echo "    <aside>
      ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
                // line 77
                echo "      <div id=\"sidebar_first\">
        ";
                // line 78
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 81
            echo "
      ";
            // line 82
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_bottom", array())) {
                // line 83
                echo "      <div id=\"sidebar_bottom\">
        ";
                // line 84
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_bottom", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 87
            echo "    </aside>
    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 91
            echo "    <main class=\"";
            if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) || $this->getAttribute(($context["page"] ?? null), "sidebar_bottom", array()))) {
                echo "has_sidebar";
            } else {
                echo "only_content ";
            }
            echo "\">
      ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
    </main>
    ";
        }
        // line 95
        echo "  </div>

  ";
        // line 97
        if (($this->getAttribute(($context["page"] ?? null), "footer_top", array()) || $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()))) {
            // line 98
            echo "  <footer class=\"clearfix\">
    ";
            // line 99
            if ($this->getAttribute(($context["page"] ?? null), "footer_top", array())) {
                // line 100
                echo "    <div id=\"footer_top\">
      ";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 104
            echo "
    ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
                // line 106
                echo "    <div id=\"footer_bottom\">
      ";
                // line 107
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 110
            echo "  </footer>
  ";
        }
        // line 112
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/bob_default/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 112,  172 => 110,  166 => 107,  163 => 106,  161 => 105,  158 => 104,  152 => 101,  149 => 100,  147 => 99,  144 => 98,  142 => 97,  138 => 95,  132 => 92,  123 => 91,  121 => 90,  118 => 89,  114 => 87,  108 => 84,  105 => 83,  103 => 82,  100 => 81,  94 => 78,  91 => 77,  89 => 76,  86 => 75,  84 => 74,  77 => 70,  72 => 67,  66 => 64,  63 => 63,  61 => 62,  58 => 61,  52 => 58,  49 => 57,  47 => 56,  43 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/bob_default/templates/page.html.twig", "/home/www/bob.obenef.com/themes/custom/bob_default/templates/page.html.twig");
    }
}
