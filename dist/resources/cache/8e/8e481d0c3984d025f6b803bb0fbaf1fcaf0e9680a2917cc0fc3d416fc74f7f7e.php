<?php

/* home.twig */
class __TwigTemplate_25cbeb46fa03cc90ce76fd5505046e67af97645841e40a3685264341e6b276f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/app.twig", "home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<header class=\"hero\">
    <div class=\"hero__content\">
        <div class=\"hero__intro\"></div>
        <div class=\"hero__title\">
            <h1>Kona</h1>
            <h3>Sushi</h3>
            <hr>
        </div>
        <a href=\"#menu\"><span>Learn</span> <span>More</span></a>
    </div>
    
    <div class=\"hero__borders\">
        <div class=\"hero__borders-left\"></div>
        <div class=\"hero__borders-right\"></div>
    </div>
    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("hero__chopsticks.png")), "html", null, true);
        echo "\" draggable=\"false\" class=\"hero__image\">
</header>

<!-- End Hero -->

<!-- <section id=\"about\" class=\"about\">
    <div class=\"section__title\">
        <h2>About</h2>
    </div>
    <grid>
        <column is4>
            <div class=\"about__gallery\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("about__gallery-2.jpg")), "html", null, true);
        echo "\" draggable=\"false\" class=\"about__gallery-large\">
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("about__gallery-1.jpg")), "html", null, true);
        echo "\" draggable=\"false\" class=\"about__gallery-small\">
            </div>
        </column>
        <column is8>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illum earum, repellat expedita dolores officiis ipsam nulla nisi doloremque officia.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, tempora deleniti dicta labore doloribus, voluptatem earum eveniet excepturi qui eos quos, eius odio inventore amet aspernatur perferendis aliquam sit! Dolor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, asperiores, eaque! Fuga recusandae veritatis nam.</p>
            <button class=\"button\">View Menu</button>
        </column>
    </grid>
</section>
 -->
<!-- End About -->

<section id=\"menu\" class=\"menu\">
    <div class=\"section__title\">
        <h2>Menu</h2>
    </div>
    <ul class=\"tabs__nav\">
        <li rel=\"tab1\">Appetizers</li>
        <li rel=\"tab2\">Nigiri & Sashimi</li>
        <li rel=\"tab3\">Maki</li>
        <li rel=\"tab4\">Mo' Maki</li>
        <li rel=\"tab5\">Combos</li>
        <li rel=\"tab6\">Bento Box</li>
        <li rel=\"tab7\">Drinks</li>
    </ul>
    <div class=\"tab__content\" id=\"tab1\">
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Miso Soup</strong></p><span>\$3.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Edamame</strong></p><span>\$4.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Koi Salad</strong></p><span>\$5.00</span>
                    </div>
                    <p>Add: Crab \$5.00 | Shrimp \$5.00 | Tuna \$10.00</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Eggrolls Tempura</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cucumber Salad</strong></p><span>\$4.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Seaweed Salad</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Avocado & Asparagus Salad</strong></p><span>\$11.00</span>
                    </div>
                    <p>Mixed greens, avocado, asparagus, seasame seeds in a Japanese ginger dressing</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sunomono Salad</strong></p><span>\$.600/\$7.00</span>
                    </div>
                    <p>Choice of crab or shrimp</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Vegetable Tempura</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shrimp Tempura Appetizer</strong></p><span>\$9.00</span>
                    </div>
                    <p>Four shrimp with mixed vegetables</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Gyoza</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cheese Wontons</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Beef Negimake</strong></p><span>\$10.00</span>
                    </div>
                    <p>Local beef sirloin wrapped asparagus, grilled & topped with teriyaki sauce.</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sushi Appetizer</strong></p><span>\$9.00</span>
                    </div>
                    <p>1 piece nigiri.  Tuna, Salmon, and Red Snapper</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sashimi Appetizer</strong></p><span>\$15.00</span>
                    </div>
                    <p>3 pieces. Tuna, Salmon, and Red Snapper</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tempura Calamari Rings</strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Chicken Lettuce Wraps</strong></p><span>\$14.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab2\">
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tuna</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>White Tuna</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Salmon</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Smoked Salmon</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crab</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Red Snapper</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Surf Calm</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shrimp</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Scallop</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>BBQ Eel</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Octobus</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Yellow Tail</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tofu (nigiri)</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Chef Special</strong></p><span>\$7.00</span>
                    </div>
                    <p>Ask your server for todays feature</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab3\">
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cucumber</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Kampyo <small>(pickled squash)</small></strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Avocado</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cucumber/Avocado</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Asparagus Tempura</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shiitake Mushroom</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sweet Potato Tempura</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>House Veggie</strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tempura Veggie</strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>California</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shrimp California</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crab</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shrimp</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tuna</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>White Tuna</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Salmon</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Smoked Salmon</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Philly <small>(smoked salmon & cream cheese)</small></strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Scallop</strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>BBQ Eel</strong></p><span>\$9.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Shrimp Tempura</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crab Tempura</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Red Snapper</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Salmon Teriyaki</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab4\">
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Firecracker</strong></p><span>\$13.00</span>
                    </div>
                    <p>Shrimp tempura & cream cheese, topped w/ crab, house sauces and baked until golden brown</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Golden Dragon</strong></p><span>\$11.00</span>
                    </div>
                    <p>Shrimp tempura, cream cheese, cucumber topped w/ tempura sweet potato & house sauces</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Rock n Roll</strong></p><span>\$10.00</span>
                    </div>
                    <p>Smoked salmon, crab, BBQ eel & cream cheese. Fully deep fried.</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Spider</strong></p><span>\$14.00</span>
                    </div>
                    <p>Tempura soft shell crab & cucumber</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Dragon</strong></p><span>\$14.00</span>
                    </div>
                    <p>Shrimp tempura, cucumber & BBQ eel, topped w/ avocado and unagi sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Rainbow</strong></p><span>\$13.00</span>
                    </div>
                    <p>Crab & cucumber topped w/ tuna, salmon, red snapper and avocado</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Double Shrimp</strong></p><span>\$10.00</span>
                    </div>
                    <p>Shrimp tempura, topped w/ fresh shrimp</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Alaskan (small roll)</strong></p><span>\$9.00</span>
                    </div>
                    <p>Smoked salmon & asparagus tempura</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>KIKI</strong></p><span>\$13.00</span>
                    </div>
                    <p>Tuna, salmon & cucumber</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Samurai</strong></p><span>\$13.00</span>
                    </div>
                    <p>BBQ eel, shrimp & avocado</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Tokyo</strong></p><span>\$11.00</span>
                    </div>
                    <p>Salmon, cucumber & avocado topped w/ fresh shrimp</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Kona Klub</strong></p><span>\$12.00</span>
                    </div>
                    <p>Tempura chicken, cream cheese, spring mix topped w/ tempura bacon, tomatoes, salt & pepper</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>BLT</strong></p><span>\$10.00</span>
                    </div>
                    <p>Tempura bacon, spring mix topped w/ diced tomato & house sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Walkerville</strong></p><span>\$10.00</span>
                    </div>
                    <p>Tempura sweet potato, cream cheese, scallions topped w/ fried onions</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Philly Cheese steak</strong></p><span>\$12.00</span>
                    </div>
                    <p>Grilled beef, cream cheese, tempura mushroom, fried onion topped w/ spicy sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Chicken N’ Waffles</strong></p><span>\$9.00</span>
                    </div>
                    <p>Tempura chicken & cream cheese topped w/ tempura flakes & maple syrup</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Koi Roll</strong></p><span>\$12.00</span>
                    </div>
                    <p>Crab, shrimp, avocado topped w/ salmon & flying fish roe</p>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Kingsville Roll</strong></p><span>\$9.00</span>
                    </div>
                    <p>Crab, cucumber & red pepper</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Iza Roll</strong></p><span>\$13.00</span>
                    </div>
                    <p>Avocado, lettuce, red pepper, cucumber topped w/ tuna & ginger dressing</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Ninja</strong></p><span>\$13.00</span>
                    </div>
                    <p>Tempura BBQ eel, tempura salmon & cucumber</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crispy Crunch</strong></p><span>\$11.00</span>
                    </div>
                    <p>Crab tempura & avocado topped w/ spicy sauce & potato crisps</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Rapture</strong></p><span>\$12.00</span>
                    </div>
                    <p>Crab, cream cheese & cucumber topped w/ BBQ eel and avocado</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Las Vegas Roll</strong></p><span>\$9.00</span>
                    </div>
                    <p>Crab, cucumber & cream cheese, deep fried, w/ jalapeno & spicy sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Beef Crunch</strong></p><span>\$11.00</span>
                    </div>
                    <p>Tempura asparagus & grilled beef, topped w/ teriyaki sauce & potato crisps</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Vampire</strong></p><span>\$9.00</span>
                    </div>
                    <p>Tempura crab and cream cheese topped w/ roasted garlic</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crispy Calamari</strong></p><span>\$10.00</span>
                    </div>
                    <p>Tempura calamari & cucumber w/ garlic spicy sauce.</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Spicy Chicken</strong></p><span>\$11.00</span>
                    </div>
                    <p>Tempura or Grilled chicken w/ tempura banana peppers and spicy sauce.</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Chicken Teriyaki</strong></p><span>\$11.00</span>
                    </div>
                    <p>Grilled chicken, lettuce & cucumber topped w/ teriyaki sauce.</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Mango Roll</strong></p><span>\$10.00</span>
                    </div>
                    <p>Tempura crab, avocado, cucumber topped w/ mango sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Canadian Roll</strong></p><span>\$11.00</span>
                    </div>
                    <p>Fried bacon & pepperoni w/ tempura mushroom & green peppers & cream cheese</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Green Monster Roll</strong></p><span>\$8.00</span>
                    </div>
                    <p>Tempura broccoli & avocado topped w/ tempura flakes & soo-mi sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>General Tao</strong></p><span>10.00</span>
                    </div>
                    <p>Tempura chicken, tempura green pepper, tempura onions, carrots topped w/ General Tao sauce</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Futomaki</strong></p><span>11.00</span>
                    </div>
                    <p>Egg omelette, crab, cucumber, kampyo, & shiitake mushrooms</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab5\">
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sushi combo for 1</strong></p><span>\$22.00</span>
                    </div>
                    <p>6pc. assorted nigiri (Chefs Choice) & California Roll</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Deluxe Sushi Combo for 1</strong></p><span>\$28.00</span>
                    </div>
                    <p>8 pc. assorted nigiri (Chefs choice) & Tuna Roll</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Supreme Sushi Combo for 1</strong></p><span>\$35.00</span>
                    </div>
                    <p>10 pc. assorted nigiri (Chefs choice) with your choice of Firecracker Roll or Dragon Roll</p>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Chirashi</strong></p><span>\$20.00</span>
                    </div>
                    <p>Assorted sashimi over rice</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Unagi Don</strong></p><span>\$24.00</span>
                    </div>
                    <p>BBQ Eel over rice</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sashimi Dinner</strong></p><span>\$30.00</span>
                    </div>
                    <p>Chefs choice of assorted sashimi</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab6\">
        <grid>
            <column is12>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Bento Box</strong></p><span>\$11.00</span>
                    </div>
                    <p><strong>Koi Salad</strong> : Chefs choice of assorted sashimi</p>
                    <grid>
                    <column is4>
                    <p><strong>Appetizer</strong></p>
                    <p>Choice of:</p>
                    <ul class=\"u-list__disc\">
                        <li>Edamame</li>
                        <li>Gyoza</li>
                        <li>Eggroll Tempura</li>
                        <li>Spring Rolls</li>
                        <li>Vegetable Tempura</li>
                        <li>Cheese Wontons</li>
                    </ul>
                    </column>
                    <column is8>
                    <p><strong>Small Roll</strong></p>
                    <p>Choice of:</p>
                    <grid>
                        <column is6>
                            <ul class=\"u-list__disc\">
                                <li>California</li>
                                <li>Crab</li>
                                <li>Shrimp</li>
                                <li>White Tuna</li>
                                <li>Shrimp California</li>
                                <li>Salmon</li>
                                <li>Smoked Salmon</li>
                            </ul>
                        </column>
                        <column is6>
                            <ul class=\"u-list__disc\">
                                <li>Philly</li>
                                <li>Scallop</li>
                                <li>Shrimp Tempura</li>
                                <li>Crab Tempura</li>
                                <li>Red Snapper</li>
                                <li>Salmon Teriyaki</li>
                            </ul>
                        </column>
                    </grid>
                    </column>
                    </grid>
                    <p>Add Miso Soup For \$2.00</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
    <div class=\"tab__content\" id=\"tab7\">
        <p><strong>Beverages</strong></p>
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Pop</strong></p><span>\$2.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Juice</strong></p><span>\$3.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Perrier</strong></p><span>\$3.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Green Tea</strong></p><span>\$2.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Coffee</strong></p><span>\$2.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Espresso</strong></p><span>\$3.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>House Well Drinks 1 oz</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Premium 1oz</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Gekkeikan Hot Sake (4oz)</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Hakutsuru Draft Sake (300ml)</strong></p><span>\$16.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sake Bomb</strong></p><span>\$5.00</span>
                    </div>
                    <p>1oz sake 3oz beer</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
        <p><strong>Kona Signature Cocktails</strong></p>
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Crouching Tiger, Hidden Sake (2oz)</strong></p><span>\$10.00/ Pitcher: \$30.00</span>
                    </div>
                    <p>Kona’s Long Island ice tea with a surprising twist! Sake, Gin, Tequila, Triple Sec, lime and coke</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Mango Mojito (1oz)</strong></p><span>\$8.00/ Pitcher: \$30.00</span>
                    </div>
                    <p>Rum, Mango puree, mint, lime and soda water</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Green Tea Mojito (1oz)</strong></p><span>\$8.00/ Pitcher: \$30.00</span>
                    </div>
                    <p>Rum, freshly brewed japanese green tea, mint, lime and soda water</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cucumber Smash (1.5oz)</strong></p><span>\$9.00</span>
                    </div>
                    <p>Vodka, Tequila, lime and cucumber</p>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Salted Caramel Martini (2oz)</strong></p><span>\$10.00</span>
                    </div>
                    <p>Rumchata, vanilla vodka, butterscotch liquor, caramel sauce and rimmed with pink himalayan salt</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cotton Candy Martini (2oz)</strong></p><span>\$12.00</span>
                    </div>
                    <p>Wolfhead grapefruit vodka, sorbet vodka, cranberry juice and cotton candy</p>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Espresso Martini (2oz)</strong></p><span>\$12.00</span>
                    </div>
                    <p>Wolfhead coffee whiskey, spiced rum, frangelico, creme de cacao, baileys, espresso</p>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
        <p><strong>Beer</strong></p>
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Brew Proper Lager 500ml</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Walkerville Purity Pilsner 473ml</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Walkerville Easy Stout 473ml</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Frank Bombshell Blonde 473ml</strong></p><span>\$7.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Muskoka Mad Tom 473ml</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Sapporo 500ml</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Heineken 341ml</strong></p><span>\$6.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Coors Light 341ml</strong></p><span>\$5.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
        <p><strong>Wine</strong></p>
        <grid>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Pelee Merlot (Ontario)</strong></p><span>\$7.00 | Bottle: \$30.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Beringer Main & Vine Cabernet Sauvignon 2015 (California)</strong></p><span>\$9.00 | Bottle: \$35.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Lindemans Bin 50 Shiraz 2016 (Australia)</strong></p><span>\$10.00 | Bottle: \$42.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Plum wine</strong></p><span>\$8.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Fetzer Merlot 2015 (California)</strong></p><span>\$44.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cline Zinfindel 2014 (California)</strong></p><span>\$52.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Red Knot Shiraz 2015 (Australia)</strong></p><span>\$46.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Anciano 7 Year Gran Reserva Tempranillo Valdepenas 2008 (Spain)</strong></p><span>\$41.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Francis Coppola Diamond Collection Cabernet Sauvignon (California)</strong></p><span>\$74.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
            <column is6>
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Pelee Island Vidal (Ontario)</strong></p><span>\$7.00 | Bottle: \$30.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Lindemans Bin 85 Pinot Grigio 2016 (Australia)</strong></p><span>\$9.00 | Bottle: \$35.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Santa Rita Reserva Sauvignon Blanc 2016 (Chile)</strong></p><span>\$10.00 | Bottle: \$42.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Kim Crawford Unoaked Chardonnay 2015 (New Zealand)</strong></p><span>\$48.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Woodbridge by Robert Mondavi White Zinfandel Rose 2015 (California)</strong></p><span>\$47.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Cave Springs Riesling 2014 (Ontario)</strong></p><span>\$44.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Toasted Head Barrel Aged Chardonnay 2015 (California)</strong></p><span>\$41.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
                <figure class=\"menu__item\">
                    <div class=\"menu__item-title\">
                        <p><strong>Colio Blue Dog Wine (Ontario)</strong></p><span>\$9.00 | Bottle: \$35.00</span>
                    </div>
                </figure>
                <!-- End Menu Item -->
            </column>
        </grid>
    </div>
</section>

<!-- End Menu -->

<section id=\"gallery\" class=\"gallery\">
    <div class=\"gallery__slide\">
        <figure>
            <img src=\"";
        // line 1070
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/1.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1073
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/2.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1076
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/3.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1079
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/4.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1082
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/5.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1085
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/6.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1088
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/7.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1091
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/8.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1094
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/9.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1097
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/10.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/11.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/12.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/13.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/14.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/15.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1115
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/16.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/17.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
        <figure>
            <img src=\"";
        // line 1121
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('img')->getCallable(), array("gallery/18.jpg")), "html", null, true);
        echo "\" draggable=\"false\">
        </figure>
    </div>
</section>

<!-- End Gallery -->

<section id=\"contact\" class=\"contact\">
    <div class=\"section__title\">
        <h2>Contact</h2>
    </div>
    <p>If you have any questions, feel free to give us a call using the phone number below.</p>
    <grid>
        <column is12>
            <ul class=\"contact__details\">
                <li><i class=\"fa fa-map-marker\"></i>1840 Wyandotte St E, Windsor, ON N8Y 1E5</li>
                <li><i class=\"fa fa-phone\"></i></i><img src=\"\" draggable=\"false\">519-997-4638</li>
            </ul>
<!--             <div class=\"form__messages\"></div>
            <form action=\"";
        // line 1140
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home.contact"), "html", null, true);
        echo "\" method=\"post\" class=\"form contact__form\">
                <div class=\"field\">
                    <input type=\"text\" name=\"name\" placeholder=\"Name\" class=\"field__input\">
                </div>
                <div class=\"field\">
                    <input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"field__input\">
                </div>
                <div class=\"field\">
                    <textarea name=\"message\" placeholder=\"Message\" class=\"field__input\"></textarea>
                </div>
                <button type=\"submit\" class=\"button\">Submit</button>
            </form> -->
        </column>
        <column is12>
            <div id=\"map\"></div>
        </column>
    </grid>
</section>

<!-- End Contact -->

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1238 => 1140,  1216 => 1121,  1210 => 1118,  1204 => 1115,  1198 => 1112,  1192 => 1109,  1186 => 1106,  1180 => 1103,  1174 => 1100,  1168 => 1097,  1162 => 1094,  1156 => 1091,  1150 => 1088,  1144 => 1085,  1138 => 1082,  1132 => 1079,  1126 => 1076,  1120 => 1073,  1114 => 1070,  75 => 34,  71 => 33,  56 => 21,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/Users/Josh/webdev/kona/dist/resources/views/home.twig");
    }
}
