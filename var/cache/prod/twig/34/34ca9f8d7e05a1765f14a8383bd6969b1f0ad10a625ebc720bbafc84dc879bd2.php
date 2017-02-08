<?php

/* BackEnd/index.html.twig */
class __TwigTemplate_7725687d0f55d8fc8aad02ee969e84b456a9c06949f7b63f3dbca7cf675d535f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BackEnd/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'custjs' => array($this, 'block_custjs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"x_panel\" style=\"text-align: center; margin-bottom: 15px;\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index", array("slug" => 1));
        echo "\" class=\"btn btn-info btn-md\">Day</a>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index", array("slug" => 2));
        echo "\" class=\"btn btn-info btn-md\">Week</a>    
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index", array("slug" => 3));
        echo "\" class=\"btn btn-info btn-md\">Month</a>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index", array("slug" => 4));
        echo "\" class=\"btn btn-info btn-md\">Year</a>
        </div>
    </div>

    <!-- top tiles -->
    <div class=\"row tile_count\" style=\"text-align: center\">
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Subscribers</span>
            <div class=\"count\">";
        // line 17
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countsubscr"] ?? null), 0, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-asc\"></i>
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratiototalsubsc"] ?? null), 1, ".", ","), "html", null, true);
        echo "
                </i> From
                        ";
        // line 23
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 25
($context["period"] ?? null) == "weekly")) {
            // line 26
            echo "                            Last Week
                        ";
        } elseif ((        // line 27
($context["period"] ?? null) == "monthly")) {
            // line 28
            echo "                            Last Month
                        ";
        } elseif ((        // line 29
($context["period"] ?? null) == "annually")) {
            // line 30
            echo "                            Last Year
                        ";
        }
        // line 32
        echo "            </span>
        </div>
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Subscribed WTD</span>
            <div class=\"count\">";
        // line 36
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["subscribedwtd"] ?? null), 0, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-asc\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratiosubscr"] ?? null), 1, ".", ","), "html", null, true);
        echo "%
                </i> From 
                        ";
        // line 42
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 44
($context["period"] ?? null) == "weekly")) {
            // line 45
            echo "                            Last Week
                        ";
        } elseif ((        // line 46
($context["period"] ?? null) == "monthly")) {
            // line 47
            echo "                            Last Month
                        ";
        } elseif ((        // line 48
($context["period"] ?? null) == "annually")) {
            // line 49
            echo "                            Last Year
                        ";
        }
        // line 51
        echo "            </span>
        </div>
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-user\"></i> Unsubscriber WTD</span>
            <div class=\"count green\">";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["unsubscribedwtd"] ?? null), 0, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-asc\">
                        </i>";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratiounsubscr"] ?? null), 1, ".", ","), "html", null, true);
        echo "%
                </i> From
                        ";
        // line 61
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 63
($context["period"] ?? null) == "weekly")) {
            // line 64
            echo "                            Last Week
                        ";
        } elseif ((        // line 65
($context["period"] ?? null) == "monthly")) {
            // line 66
            echo "                            Last Month
                        ";
        } elseif ((        // line 67
($context["period"] ?? null) == "annually")) {
            // line 68
            echo "                            Last Year
                        ";
        }
        // line 70
        echo "            </span>
        </div>
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-user\"></i> Emails sent WTD</span>
            <div class=\"count\">";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["emailssentwtd"] ?? null), 0, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-desc\">
                    </i> ";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratioemails"] ?? null), 1, ".", ","), "html", null, true);
        echo "%
                </i> From 
                        ";
        // line 80
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 82
($context["period"] ?? null) == "weekly")) {
            // line 83
            echo "                            Last Week
                        ";
        } elseif ((        // line 84
($context["period"] ?? null) == "monthly")) {
            // line 85
            echo "                            Last Month
                        ";
        } elseif ((        // line 86
($context["period"] ?? null) == "annually")) {
            // line 87
            echo "                            Last Year
                        ";
        }
        // line 89
        echo "            </span>
        </div>
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-user\"></i> Paid Clicks WTD</span>
            <div class=\"count\">";
        // line 93
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["paidclickswtd"] ?? null), 0, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-asc\"></i>
                    ";
        // line 97
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratiopaidclicks"] ?? null), 1, ".", ","), "html", null, true);
        echo "% 
                </i> From 
                        ";
        // line 99
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 101
($context["period"] ?? null) == "weekly")) {
            // line 102
            echo "                            Last Week
                        ";
        } elseif ((        // line 103
($context["period"] ?? null) == "monthly")) {
            // line 104
            echo "                            Last Month
                        ";
        } elseif ((        // line 105
($context["period"] ?? null) == "annually")) {
            // line 106
            echo "                            Last Year
                        ";
        }
        // line 108
        echo "            </span>
        </div>
        <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
            <span class=\"count_top\"><i class=\"fa fa-user\"></i> USD WTD</span>
            <div class=\"count\">";
        // line 112
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["revenuewtd"] ?? null), 2, ".", ","), "html", null, true);
        echo "</div>
            <span class=\"count_bottom\">
                <i class=\"green\">
                    <i class=\"fa fa-sort-asc\"></i>
                    ";
        // line 116
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["weeklyratiorevenue"] ?? null), 1, ".", ","), "html", null, true);
        echo "% 
                </i> From 
                        ";
        // line 118
        if ((($context["period"] ?? null) == "daily")) {
            echo " 
                            Yesterday
                        ";
        } elseif ((        // line 120
($context["period"] ?? null) == "weekly")) {
            // line 121
            echo "                            Last Week
                        ";
        } elseif ((        // line 122
($context["period"] ?? null) == "monthly")) {
            // line 123
            echo "                            Last Month
                        ";
        } elseif ((        // line 124
($context["period"] ?? null) == "annually")) {
            // line 125
            echo "                            Last Year
                        ";
        }
        // line 127
        echo "            </span>
        </div>
    </div>
    <!-- /top tiles -->
    <!-- first set -->
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>KPIs</h2>
                    <!--<div class=\"col-md-6\">
                      <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                      </div>
                    </div>-->
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">

                    <div id=\"echart_line\" style=\"height:350px;\"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- /first set done -->
    ";
        // line 157
        $this->displayBlock('custjs', $context, $blocks);
    }

    public function block_custjs($context, array $blocks = array())
    {
        // line 158
        echo "        <!-- ECharts -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/echarts/build/dist/echarts-all.js"), "html", null, true);
        echo "\"></script>
        
        <!-- customer js calculation on the page-->
        <script type=\"text/javascript\">

            //Updating arrows and colour of the top bar
            var x = document.getElementsByClassName(\"count_bottom\");
            var i;
            for (i = 0; i < x.length; i++) {
                var shift = x[i].getElementsByTagName(\"i\")[0].innerText;
                var shift = shift.replace('%',\"\");

                if(i != 2) {
                    if(shift > 0) {
                        x[i].getElementsByTagName(\"i\")[0].className = \"green\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-up\";
                    } else if(shift < 0) {
                        x[i].getElementsByTagName(\"i\")[0].className = \"red\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-down\";
                    } else {
                        x[i].getElementsByTagName(\"i\")[0].className = \"\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-right\";
                    }
                } else {
                    if(shift < 0) {
                        x[i].getElementsByTagName(\"i\")[0].className = \"green\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-down\";
                    } else if(shift < 0) {
                        x[i].getElementsByTagName(\"i\")[0].className = \"red\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-up\";
                    } else {
                        x[i].getElementsByTagName(\"i\")[0].className = \"\";
                        x[i].getElementsByTagName(\"i\")[1].className = \"fa fa-caret-right\";
                    }
                }
            }
        </script>
        
        <!-- setting up E-charts -->
        <script>
            /*setting up general theme */
            var theme = {
                color: [
                    '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
                    '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
                ],
                title: {
                    itemGap: 8,
                    textStyle: {
                        fontWeight: 'normal',
                        color: '#408829'
                    }
                },
                dataRange: {
                    color: ['#1f610a', '#97b58d']
                },
                toolbox: {
                    color: ['#408829', '#408829', '#408829', '#408829']
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.5)',
                    axisPointer: {
                        type: 'line',
                        lineStyle: {
                            color: '#408829',
                            type: 'dashed'
                        },
                        crossStyle: {
                            color: '#408829'
                        },
                        shadowStyle: {
                            color: 'rgba(200,200,200,0.3)'
                        }
                    }
                },
                dataZoom: {
                    dataBackgroundColor: '#eee',
                    fillerColor: 'rgba(64,136,41,0.2)',
                    handleColor: '#408829'
                },
                grid: {
                    borderWidth: 0
                },
                categoryAxis: {
                    axisLine: {
                        lineStyle: {
                            color: '#408829'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: ['#eee']
                        }
                    }
                },
                valueAxis: {
                    axisLine: {
                        lineStyle: {
                            color: '#408829'
                        }
                    },
                    splitArea: {
                        show: true,
                        areaStyle: {
                            color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: ['#eee']
                        }
                    }
                },
                timeline: {
                    lineStyle: {
                        color: '#408829'
                    },
                    controlStyle: {
                        normal: {color: '#408829'},
                        emphasis: {color: '#408829'}
                    }
                },
                k: {
                    itemStyle: {
                        normal: {
                            color: '#68a54a',
                            color0: '#a9cba2',
                            lineStyle: {
                                width: 1,
                                color: '#408829',
                                color0: '#86b379'
                            }
                        }
                    }
                },
                map: {
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                color: '#ddd'
                            },
                            label: {
                                textStyle: {
                                    color: '#c12e34'
                                }
                            }
                        },
                        emphasis: {
                            areaStyle: {
                                color: '#99d2dd'
                            },
                            label: {
                                textStyle: {
                                    color: '#c12e34'
                                }
                            }
                        }
                    }
                },
                force: {
                    itemStyle: {
                        normal: {
                            linkStyle: {
                                strokeColor: '#408829'
                            }
                        }
                    }
                },
                chord: {
                    padding: 4,
                    itemStyle: {
                        normal: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            },
                            chordStyle: {
                                lineStyle: {
                                    width: 1,
                                    color: 'rgba(128, 128, 128, 0.5)'
                                }
                            }
                        },
                        emphasis: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            },
                            chordStyle: {
                                lineStyle: {
                                    width: 1,
                                    color: 'rgba(128, 128, 128, 0.5)'
                                }
                            }
                        }
                    }
                },
                gauge: {
                    startAngle: 225,
                    endAngle: -45,
                    axisLine: {
                        show: true,
                        lineStyle: {
                            color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                            width: 8
                        }
                    },
                    axisTick: {
                        splitNumber: 10,
                        length: 12,
                        lineStyle: {
                            color: 'auto'
                        }
                    },
                    axisLabel: {
                        textStyle: {
                            color: 'auto'
                        }
                    },
                    splitLine: {
                        length: 18,
                        lineStyle: {
                            color: 'auto'
                        }
                    },
                    pointer: {
                        length: '90%',
                        color: 'auto'
                    },
                    title: {
                        textStyle: {
                            color: '#333'
                        }
                    },
                    detail: {
                        textStyle: {
                            color: 'auto'
                        }
                    }
                },
                textStyle: {
                    fontFamily: 'Arial, Verdana, sans-serif'
                }
            };
            
            <!-- KPI chart -->
            var echartLine = echarts.init(document.getElementById('echart_line'), theme);
                echartLine.setOption({
                    tooltip: {
                        trigger: 'axis'
                    },
                    legend: {
                        x: 220,
                        y: 40,
                        data: ['Emails', 'Clicks', 'Revenue', 'Stats']
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            magicType: {
                              show: true,
                              title: {
                                line: 'Line',
                                bar: 'Bar',
                                stack: 'Stack',
                                tiled: 'Tiled'
                              },
                              type: ['line', 'bar', 'stack', 'tiled']
                            },
                            restore: {
                              show: true,
                              title: \"Restore\"
                            },
                            saveAsImage: {
                              show: false,
                              title: \"Save Image\"
                            }
                        }
                    },
                    calculable: true,
                    xAxis: [{
                        type: 'category',
                        boundaryGap: false,
                        data: [
                              ";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emaildata"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rsc"]) {
            // line 444
            echo "                                  ";
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 445
                echo "                                      '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "date", array()), "html", null, true);
                echo "',
                                  ";
            } else {
                // line 447
                echo "                                      '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "date", array()), "html", null, true);
                echo "'
                                  ";
            }
            // line 449
            echo "                              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "                          ],
                    }],
                    yAxis: [{
                        type: 'value'
                    }],
                series: [{
                    name: 'Emails',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [
                            ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emaildata"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rsc"]) {
            // line 468
            echo "                                '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "emailssent", array()), "html", null, true);
            echo "',
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                    ]
                }, {
                  name: 'Clicks',
                  type: 'line',
                  smooth: true,
                  itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                  },
                  data: [30, 182, 434, 791, 390, 30, 10]
                }, {
                    name: 'Revenue',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                              type: 'default'
                            }
                        }
                    },
                    data: [1320, 1132, 601, 234, 120, 90, 20]
                }, {
                    name: 'Stats',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [1320, 1132, 601, 234, 120, 90, 10]
                }]
              });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "BackEnd/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 470,  684 => 468,  680 => 467,  661 => 450,  647 => 449,  641 => 447,  635 => 445,  632 => 444,  615 => 443,  328 => 159,  325 => 158,  319 => 157,  287 => 127,  283 => 125,  281 => 124,  278 => 123,  276 => 122,  273 => 121,  271 => 120,  266 => 118,  261 => 116,  254 => 112,  248 => 108,  244 => 106,  242 => 105,  239 => 104,  237 => 103,  234 => 102,  232 => 101,  227 => 99,  222 => 97,  215 => 93,  209 => 89,  205 => 87,  203 => 86,  200 => 85,  198 => 84,  195 => 83,  193 => 82,  188 => 80,  183 => 78,  176 => 74,  170 => 70,  166 => 68,  164 => 67,  161 => 66,  159 => 65,  156 => 64,  154 => 63,  149 => 61,  144 => 59,  137 => 55,  131 => 51,  127 => 49,  125 => 48,  122 => 47,  120 => 46,  117 => 45,  115 => 44,  110 => 42,  105 => 40,  98 => 36,  92 => 32,  88 => 30,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  76 => 25,  71 => 23,  66 => 21,  59 => 17,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackEnd/index.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app\\Resources\\views\\BackEnd\\index.html.twig");
    }
}
