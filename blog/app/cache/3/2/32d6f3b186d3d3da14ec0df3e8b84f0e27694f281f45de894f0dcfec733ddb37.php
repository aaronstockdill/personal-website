<?php

/* _base/_listing.twig */
class __TwigTemplate_32d6f3b186d3d3da14ec0df3e8b84f0e27694f281f45de894f0dcfec733ddb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "_base/_listing.twig", 1);
        // line 2
        echo "
";
        // line 4
        if (((( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt')->request("order") == ""))) {
            // line 5
            echo "    ";
            if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "</tbody>";
            }
            // line 6
            echo "    <tbody ";
            if ($this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["contenttype"]) ? $context["contenttype"] : null))) {
                echo "class=\"sortable\"";
            }
            echo ">
    <tr class=\"grouping\">
        <th colspan=\"";
            // line 8
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
            <h3 ";
            // line 9
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "class=\"first\"";
            }
            echo ">
                ";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array())) {
                // line 11
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 13
                echo "                    ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                ";
            }
            // line 15
            echo "            </h3>
        </th>
    </tr>
";
        }
        // line 19
        echo "
";
        // line 21
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt')->request("order") == ""))))) {
            // line 22
            echo "    ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()))) : (""));
            // line 23
            echo "    ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array())))) {
                // line 24
                echo "        ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), "filter", array())) . "&");
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "        ";
                $context["filter"] = "";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 30
            echo "    <tr>
        ";
            // line 31
            $this->displayBlock('listing_header', $context, $blocks);
            // line 54
            echo "    </tr>
";
        }
        // line 56
        echo "
<tr ";
        // line 57
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null))) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 58
        $this->displayBlock('listing_id', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('listing_content', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            // line 104
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 123
            echo "    ";
        }
        // line 124
        echo "
    ";
        // line 125
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 213
        echo "
</tr>
";
    }

    // line 8
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 31
    public function block_listing_header($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null))) {
            // line 33
            echo "            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"";
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "\" /></th>
        ";
        } else {
            // line 35
            echo "            <th style=\"margin: 0; padding: 0;\"></th>
        ";
        }
        // line 37
        echo "
        <th class=\"hidden-xs\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "id")) {
            echo "-";
        }
        echo "id\">
            ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "
        </a></th>

        <th style=\"width:80%\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == $this->env->getExtension('Bolt')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")), "html", null, true);
        echo "\">
                ";
        // line 44
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "
            </a>
        </th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated\">";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

        <th><a href=\"?\">";
        // line 52
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
        ";
    }

    // line 58
    public function block_listing_id($context, array $blocks = array())
    {
        // line 59
        echo "
        ";
        // line 60
        if ((( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null)) && $this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["contenttype"]) ? $context["contenttype"] : null)))) {
            // line 61
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 63
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 65
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>

    ";
    }

    // line 69
    public function block_listing_content($context, array $blocks = array())
    {
        // line 70
        echo "        <td class=\"excerpt ";
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            echo "large";
        }
        echo "\">
            ";
        // line 71
        $context["title"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
        // line 72
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 75
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 76
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 80
            echo "                        <strong>
                            ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                        </strong>
                     ";
        }
        // line 84
        echo "                </strong>
                ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => ((isset($context["excerptlength"]) ? $context["excerptlength"] : null) - twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null)))), "method"), "html", null, true);
        echo "
            </span>
        </td>
        <td class=\"listthumb\">
            ";
        // line 89
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 90
            echo "                ";
            // line 91
            echo "                ";
            // line 92
            echo "                ";
            $context["thumb_height"] = twig_round(((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75));
            // line 93
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "c");
            // line 94
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), 1000, 800, "r");
            // line 95
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt')->trans("Image") . ": ") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()));
            // line 96
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_large"]) ? $context["thumb_large"] : null), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_title"]) ? $context["thumb_title"] : null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["thumb_small"]) ? $context["thumb_small"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["thumbsize"]) ? $context["thumbsize"] : null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt')->trans("Thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 100
        echo "        </td>
    ";
    }

    // line 104
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 105
        echo "            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 107
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 108
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                ";
        } else {
            // line 110
            echo "                    <s>";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 111
        echo "<br>
                ";
        // line 112
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 113
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "</time><br>
                ";
        } else {
            // line 115
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 117
        echo "
                ";
        // line 118
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) &&  !($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()) === false))) {
            // line 119
            echo "                    <span class=\"sorthandle\"><i class=\"fa fa-sort fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "</span> <br>
                ";
        }
        // line 121
        echo "            </td>
        ";
    }

    // line 125
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 126
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 128
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 129
            echo "                <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i> ";
            // line 130
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                </a>
                ";
        }
        // line 133
        echo "                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                ";
        // line 139
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 140
            echo "                    <li>
                        <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> ";
            // line 142
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 146
        echo "                ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 147
            echo "                    <li>
                        <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-link\"></i> ";
            // line 149
            echo $this->env->getExtension('Bolt')->trans("View related content");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 153
        echo "

                ";
        // line 155
        $context["__internal_8c82c8d3fc9b218aa344810d1f1c3379ce07778945fd495f92f79539abaec5e7"] = $this;
        // line 156
        echo "                ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 157
            echo "                    ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 158
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("publish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 159
                    echo "
                        <li>";
                    // line 160
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                        ";
                }
                // line 162
                echo "                    ";
            } else {
                // line 163
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("depublish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 164
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt')->trans("Change status to 'held'"));
                    echo "</li>
                        <li>";
                    // line 165
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt')->trans("Change status to 'draft'"));
                    echo "</li>

                        ";
                }
                // line 168
                echo "                    ";
            }
            // line 169
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("create", (isset($context["content"]) ? $context["content"] : null))) {
                // line 170
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                        <i class=\"fa fa-copy\"></i> ";
                // line 171
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "</a></li>
                    ";
            }
            // line 173
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["content"]) ? $context["content"] : null))) {
                // line 174
                echo "                    <li>";
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 176
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 177
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                    </li>

                    ";
            }
            // line 181
            echo "                    <li class=\"divider\"></li>
                ";
        }
        // line 183
        echo "                    <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"fa fa-user\"></i>
                        ";
        // line 184
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 185
            echo "                            ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                        ";
        } else {
            // line 187
            echo "                            <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                        ";
        }
        // line 188
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 189
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                        <strong>";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 191
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                        <code title=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code></a></li>
                    <li><a class=\"nolink\">";
        // line 193
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                        <i class=\"fa fa-asterisk\"></i> ";
        // line 194
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 195
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                        <i class=\"fa fa-calendar\"></i> ";
        // line 196
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 197
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                        <i class=\"fa fa-refresh\"></i> ";
        // line 198
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    ";
        // line 199
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 200
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 201
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 202
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter($context["values"], ", "), 24);
                echo "</a></li>
                        ";
            } else {
                // line 204
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 205
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first($context["values"]), 24);
                echo "</a></li>
                        ";
            }
            // line 207
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                </ul>
            </div>

        </td>
    ";
    }

    public function getTemplateName()
    {
        return "_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 208,  634 => 207,  629 => 205,  624 => 204,  619 => 202,  614 => 201,  611 => 200,  607 => 199,  603 => 198,  599 => 197,  595 => 196,  591 => 195,  587 => 194,  583 => 193,  577 => 192,  573 => 191,  569 => 190,  565 => 189,  562 => 188,  556 => 187,  550 => 185,  548 => 184,  543 => 183,  539 => 181,  532 => 177,  531 => 176,  529 => 174,  526 => 173,  521 => 171,  516 => 170,  513 => 169,  510 => 168,  504 => 165,  499 => 164,  496 => 163,  493 => 162,  488 => 160,  485 => 159,  482 => 158,  479 => 157,  476 => 156,  474 => 155,  470 => 153,  463 => 149,  459 => 148,  456 => 147,  453 => 146,  446 => 142,  442 => 141,  439 => 140,  437 => 139,  429 => 133,  423 => 130,  418 => 129,  416 => 128,  412 => 126,  409 => 125,  404 => 121,  398 => 119,  396 => 118,  393 => 117,  385 => 115,  375 => 113,  373 => 112,  370 => 111,  364 => 110,  358 => 108,  356 => 107,  352 => 105,  349 => 104,  344 => 100,  332 => 97,  325 => 96,  322 => 95,  319 => 94,  316 => 93,  313 => 92,  311 => 91,  309 => 90,  307 => 89,  300 => 85,  297 => 84,  291 => 81,  288 => 80,  282 => 77,  275 => 76,  273 => 75,  268 => 73,  265 => 72,  263 => 71,  256 => 70,  253 => 69,  245 => 65,  241 => 63,  237 => 61,  235 => 60,  232 => 59,  229 => 58,  223 => 52,  213 => 50,  202 => 44,  194 => 43,  187 => 39,  180 => 38,  177 => 37,  173 => 35,  167 => 33,  164 => 32,  161 => 31,  155 => 8,  149 => 213,  147 => 125,  144 => 124,  141 => 123,  138 => 104,  136 => 103,  133 => 102,  131 => 69,  128 => 68,  126 => 58,  115 => 57,  112 => 56,  108 => 54,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 19,  69 => 15,  63 => 13,  57 => 11,  55 => 10,  49 => 9,  45 => 8,  37 => 6,  32 => 5,  30 => 4,  27 => 2,  25 => 1,);
    }
}
