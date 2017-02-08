<?php

/* :BackEnd:emailcampaigns.html.twig */
class __TwigTemplate_a728ee0c2f9078a238d05b0457943b7298ad5b2026772ff50e28939bffd6f8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":BackEnd:emailcampaigns.html.twig", 1);
        $this->blocks = array(
            'custcss' => array($this, 'block_custcss'),
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
    public function block_custcss($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- page specific date picker -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--page specific css -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/build/css/emailcampcustome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "        <div class=\"\">
            <div class=\"row\">
                <!-- form input mask -->
                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Campaing Details</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <br/>
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                            <div class=\"form-horizontal form-label-left\">
                                <div class=\"form-group\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-thumbs-up\"></span>
                                             </span>
                                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "partnername", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" id=\"usergeo\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-globe\"></span>
                                             </span>
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "geo", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" id=\"resourcename\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-picture\"></span>
                                             </span>
                                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "resourcename", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" id=\"templatename\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-list-alt\"></span>
                                             </span>
                                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "templatename", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" id='numemailspicker'>
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-send\"></span>
                                             </span>
                                             ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "numemails", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div id='paidlink'>
                                    <div class=\"form-group\">
                                        <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                            <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-link\"></span>
                                             </span>
                                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "link1", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                            <div class='input-group fieldsep'>
                                             <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-link\"></span>
                                             </span>
                                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "link2", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\" id=\"timezonepicker\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group fieldsep date'>
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-map-marker\"></span>
                                            </span>
                                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "timezone", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\" id=\"datetimepcr\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        <div class='input-group date form_datetime fieldsep' id='datetimepicker'>
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-calendar\"></span>
                                            </span>
                                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "datetosend", array()), 'widget');
        echo "
                                            <span class=\"input-group-addon\">
                                                <span class=\"glyphicon glyphicon-remove\"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"ln_solid\"></div>
                                <div class=\"form-group\" id=\"fbuttons\">
                                    <div class=\"col-md-9 col-sm-9 col-xs-9 col-xs-9-ex\">
                                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget');
        echo "
                                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "clear", array()), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
                <!-- /form input mask -->
                ";
        // line 136
        if (array_key_exists("partnername", $context)) {
            // line 137
            echo "                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Campaigns per Resource</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div id=\"echart_pie2\" style=\"height:350px;\"></div>
                        </div>
                    </div>
                </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Emails Per Resource</h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <div id=\"echart_donut\" style=\"height:350px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Daily Email LImit</h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <div id=\"echart_guage\" style=\"height:350px;\"></div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 180
        echo "            </div>
        </div>
";
    }

    // line 184
    public function block_custjs($context, array $blocks = array())
    {
        // line 185
        echo "    <!-- date time picker -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ECharts -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/vendors_new/echarts/build/dist/echarts-all.js"), "html", null, true);
        echo "\"></script>
    <!-- Email form fields -->
    <script>
    //correct loading of email form fields
    \$('#input_partnername').on('change', function() {
        if (this.value == '1') {
            \$(\"#usergeo\").hide();
            \$(\"#resourcename\").hide();
            \$(\"#templatename\").hide();
            \$(\"#numemailspicker\").hide();
            \$(\"#timezonepicker\").hide();
            \$(\"#datetimepcr\").hide();
            \$(\"#paidlink\").hide();
            \$(\"#fbuttons\").hide();
        } else if (this.value == '5'){
            \$(\"#usergeo\").show();
            \$(\"#resourcename\").hide();
            \$(\"#templatename\").hide();
            \$(\"#paidlink\").hide();
            \$(\"#numemailspicker\").show();
            \$(\"#timezonepicker\").show();
            \$(\"#datetimepcr\").show();
            \$(\"#fbuttons\").show();
        } else if (this.value != 1) {
            \$(\"#usergeo\").show();
            \$(\"#resourcename\").show();
            \$(\"#templatename\").show();
            \$(\"#numemailspicker\").show();
            \$(\"#timezonepicker\").show();
            \$(\"#datetimepcr\").show();
            \$(\"#paidlink\").show();
            \$(\"#fbuttons\").show();
        } else {
            \$(\"#usergeo\").hide();
            \$(\"#resourcename\").hide();
            \$(\"#templatename\").hide();
            \$(\"#numemailspicker\").hide();
            \$(\"#timezonepicker\").hide();
            \$(\"#datetimepcr\").hide();
            \$(\"#paidlink\").hide();
            \$(\"#fbuttons\").hide();
        }
    }).trigger(\"change\")
    //js for date/time picker
    \$('.form_datetime').datetimepicker({
        //language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

    \$('.form_date').datetimepicker({
        language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

    \$('.form_time').datetimepicker({
        language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    </script>
    <!-- this is an extract from echart.html -->
    <script>
        ";
        // line 268
        if (array_key_exists("partnername", $context)) {
            // line 269
            echo "            /*setting up general theme */
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

            /*Campaigns per Resource */
            var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);
                echartPieCollapse.setOption({
                    tooltip: {
                        trigger: 'item',
                        formatter: \"{a} <br/>{b} : {c} ({d}%)\"
                    },
                    legend: {
                        x: 'center',
                        y: 'bottom',
                        data:
                            [
                                ";
            // line 486
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resourcestats"] ?? null));
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
                // line 487
                echo "                                    ";
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 488
                    echo "                                        '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "',
                                    ";
                } else {
                    // line 490
                    echo "                                        '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                    ";
                }
                // line 492
                echo "                                ";
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
            // line 493
            echo "                            ]
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            magicType: {
                                show: true,
                                title: \"Funnel\",
                                type: ['pie', 'funnel']
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
                    series: [{
                        name: 'Area Mode',
                        type: 'pie',
                        radius: [25, 90],
                        center: ['50%', 170],
                        roseType: 'area',
                        x: '50%',
                        max: 40,
                        sort: 'ascending',
                        data:
                            [{
                                ";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resourcestats"] ?? null));
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
                // line 526
                echo "                                    ";
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 527
                    echo "                                        ";
                    echo "value:";
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "campaigns", array()), "html", null, true);
                    echo ",
                                        ";
                    // line 528
                    echo "name:";
                    echo " '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                        ";
                    // line 529
                    echo "}, {";
                    echo "
                                    ";
                } else {
                    // line 531
                    echo "                                        ";
                    echo "value:";
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "campaigns", array()), "html", null, true);
                    echo ",
                                        ";
                    // line 532
                    echo "name:";
                    echo "  '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                    ";
                }
                // line 534
                echo "                                ";
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
            // line 535
            echo "                            }]
                    }]
                });

            /*Emails per Resource */
            var echartDonut = echarts.init(document.getElementById('echart_donut'), theme);
                echartDonut.setOption
                ({
                    tooltip: {
                        trigger: 'item',
                        formatter: \"{a} <br/>{b} : {c} ({d}%)\"
                    },
                    calculable: true,
                    legend: {
                        x: 'center',
                        y: 'bottom',
                        data: [
                            ";
            // line 552
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resourceemails"] ?? null));
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
                // line 553
                echo "                                ";
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 554
                    echo "                                    '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "',
                                ";
                } else {
                    // line 556
                    echo "                                    '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                ";
                }
                // line 558
                echo "                            ";
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
            // line 559
            echo "                        ]
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            magicType: {
                                show: true,
                                title: \"Funnel\",
                                type: ['pie', 'funnel'],
                                option: {
                                    funnel: {
                                        x: '25%',
                                        width: '50%',
                                        funnelAlign: 'center',
                                        max: 1548
                                    }
                                }
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
                    series: [{
                        name: 'Access to the resource',
                        type: 'pie',
                        radius: ['35%', '55%'],
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                },
                                labelLine: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    position: 'center',
                                    textStyle: {
                                        fontSize: '14',
                                        fontWeight: 'normal'
                                    }
                                }
                            }
                        },
                        data: [{
                            ";
            // line 612
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resourceemails"] ?? null));
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
                // line 613
                echo "                                ";
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    // line 614
                    echo "                                    ";
                    echo "value:";
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "countsubscr", array()), "html", null, true);
                    echo ",
                                    ";
                    // line 615
                    echo "name:";
                    echo " '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                    ";
                    // line 616
                    echo "}, {";
                    echo "
                                ";
                } else {
                    // line 618
                    echo "                                    ";
                    echo "value:";
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rsc"], "countsubscr", array()), "html", null, true);
                    echo ",
                                    ";
                    // line 619
                    echo "name:";
                    echo "  '";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($context["rsc"], "appName", array()), ".com"), "html", null, true);
                    echo "'
                                ";
                }
                // line 621
                echo "                            ";
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
            // line 622
            echo "                        }]
                    }]
                })

            /*
            Total limit of emails
             */
            var echartGauge = echarts.init(document.getElementById('echart_guage'), theme);

            echartGauge.setOption({
                tooltip : {
                    formatter: \"{a} <br/>{b} : {c}%\"
                },
                toolbox: {
                    show : false,
                    feature : {
                        mark : {show: true},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                series : [
                    {
                        name:'Daily Email limit',
                        type:'gauge',
                        center : ['50%', '50%'],
                        radius : [0, '75%'],
                        startAngle: 140,
                        endAngle : -140,
                        min: 0,
                        max: 100,
                        precision: 0,
                        splitNumber: 10,
                        axisLine: {
                            show: true,
                            lineStyle: {
                                color: [[0.2, 'lightgreen'],[0.4, 'orange'],[0.8, 'skyblue'],[1, '#ff4500']],
                                width: 30
                            }
                        },
                        axisTick: {
                            show: true,
                            splitNumber: 5,
                            length :8,
                            lineStyle: {
                                color: '#eee',
                                width: 1,
                                type: 'solid'
                            }
                        },
                        axisLabel: {
                            show: true,
                            formatter: function(v){
                                switch (v+''){
                                    case '10': return 'VLow';
                                    case '30': return 'Low';
                                    case '60': return 'Medium';
                                    case '90': return 'High';
                                    default: return '';
                                }
                            },
                            textStyle: {
                                color: '#333'
                            }
                        },
                        splitLine: {
                            show: true,
                            length :30,
                            lineStyle: {
                                color: '#eee',
                                width: 2,
                                type: 'solid'
                            }
                        },
                        pointer : {
                            length : '80%',
                            width : 8,
                            color : 'auto'
                        },
                        title : {
                            show : true,
                            offsetCenter: ['-65%', -10],
                            textStyle: {
                                color: '#333',
                                fontSize : 15
                            }
                        },
                        detail : {
                            show : true,
                            backgroundColor: 'rgba(0,0,0,0)',
                            borderWidth: 0,
                            borderColor: '#ccc',
                            width: 100,
                            height: 40,
                            offsetCenter: ['-60%', 10],
                            formatter:'{value}%',
                            textStyle: {
                                color: 'auto',
                                fontSize : 30
                            }
                        },
                        data:[{value: ";
            // line 723
            echo twig_escape_filter($this->env, ($context["emaillimit"] ?? null), "html", null, true);
            echo ", name: 'Quota Used'}]
                    }
                ]
            });

        ";
        }
        // line 729
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return ":BackEnd:emailcampaigns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1028 => 729,  1019 => 723,  916 => 622,  902 => 621,  895 => 619,  888 => 618,  883 => 616,  877 => 615,  870 => 614,  867 => 613,  850 => 612,  795 => 559,  781 => 558,  775 => 556,  769 => 554,  766 => 553,  749 => 552,  730 => 535,  716 => 534,  709 => 532,  702 => 531,  697 => 529,  691 => 528,  684 => 527,  681 => 526,  664 => 525,  630 => 493,  616 => 492,  610 => 490,  604 => 488,  601 => 487,  584 => 486,  365 => 269,  363 => 268,  280 => 188,  275 => 186,  272 => 185,  269 => 184,  263 => 180,  218 => 137,  216 => 136,  208 => 131,  201 => 127,  197 => 126,  184 => 116,  171 => 106,  156 => 94,  143 => 84,  129 => 73,  116 => 63,  103 => 53,  90 => 43,  77 => 33,  66 => 25,  50 => 11,  47 => 10,  41 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":BackEnd:emailcampaigns.html.twig", "C:\\MAMP\\htdocs\\mediaff_admin\\app/Resources\\views/BackEnd/emailcampaigns.html.twig");
    }
}
