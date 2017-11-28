<?php

/* layouts/app.twig */
class __TwigTemplate_85ef00dcfbd12c9e3cd38d0819f749ebecb1fcd6724bdf7db76e21fa85d3e21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">

    <!-- Viewport Meta -->

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    
    <!-- Styles -->
    
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('css')->getCallable(), array("app")), "html", null, true);
        echo "\">

    <!-- Mobile Theme Colour -->

    <meta name=\"theme-color\" content=\"#1B1B1B\">

    <!-- Title and Description -->

    <title>Kona Sushi | ";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"kona, sushi, windsor, walkerville, ontario\">

    <!-- Favicons -->
    
    <link rel=\"icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("fav.png")), "html", null, true);
        echo "\">

    <!-- Open Graph -->

    <meta property=\"og:title\" content=\"Kona Sushi\">
    <meta property=\"og:description\" content=\"\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"konasuhi.com\">
    <meta property=\"og:site_name\" content=\"Kona Sushi\">
    <meta property=\"og:image\" content=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("ogimage.jpg")), "html", null, true);
        echo "\">

</head>

<body>

    <!--[if IE]>
      <div class=\"browserupgrade\"><p>You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p></div>
   <![endif]-->
    
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <h6 class=\"loader__label\"><span>K</span><span>o</span><span>n</span><span>a</span></h6>
    </div>    

    <div id=\"app\">
        
        ";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('snippet')->getCallable(), array("nav")), "html", null, true);
        echo "

        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
        <footer class=\"footer\">
            <grid>
                <column is4>
                    <h6>Contact</h6>
                    <ul class=\"footer__contact\">
                        <li><i class=\"fa fa-map-marker\"></i>1840 Wyandotte St E, <br>Windsor, ON N8Y 1E5</li>
                        <li><i class=\"fa fa-phone\"></i></i><img src=\"\" draggable=\"false\">519-997-4638</li>
                    </ul>
                </column>
                <column is4>
                    <h6>Navigation</h6>
                    <ul class=\"footer__navigation\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#menu\">Menu</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                    <ul class=\"footer__socials\">
                        <li><a href=\"#0\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#0\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#0\"><i class=\"fa fa-instagram\"></i></a></li>
                    </ul>
                </column>
                <column is4>
                    <h6>Hours</h6>
                    <ul class=\"footer__hours\">
                        <li><strong>Monday :</strong> 4pm - 9pm</li>
                        <li><strong>Tuesday :</strong> 11:30am - 10pm</li>
                        <li><strong>Wednesday :</strong> 11:30am - 10pm</li>
                        <li><strong>Thursday :</strong> 11:30am - 10pm</li>
                        <li><strong>Friday :</strong> 11:30am - 12am</li>
                        <li><strong>Saturday :</strong> 11:30am - 12am</li>
                        <li><strong>Sunday :</strong> 4pm - 9pm</li>
                    </ul>
                </column>
            </grid>
            <grid>
                <column is6><p>Copyright ";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('year')->getCallable(), array()), "html", null, true);
        echo " Kona Sushi</p></column>
                <column is6><p class=\"attr\">Website By <a href=\"https://darkroast.co\" target=\"_blank\">Darkroast Digital</a></p></column>
            </grid>
        </footer>
    </div>
    
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB2inm9lRWoeKQIrnokE3TRNUUVTWBA-Bc\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('js')->getCallable(), array("app")), "html", null, true);
        echo "\"></script>
</body>

<!-- See You Space Cowboy... -->

</html>
";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  160 => 56,  155 => 22,  144 => 103,  134 => 96,  95 => 59,  93 => 56,  88 => 54,  68 => 37,  56 => 28,  47 => 22,  36 => 14,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/app.twig", "/Users/Josh/webdev/kona/dist/resources/views/layouts/app.twig");
    }
}
