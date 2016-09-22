<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>发展党员网上纪实系统</title>
    <meta name="Keywords" content=" "/>
    <meta name="Description" content=""/>

    <link href='{{ asset('/styles/themes/css/bootstrap.min.css') }}' rel="stylesheet">

    <!-- core - css -->
    <link href="{{ asset('/styles/themes/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/styles/themes/blue/core.css') }} " id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="{{ asset('/styles/plugins/kindeditor_4.1.10/themes/default/default.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }} " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/niceValidator/jquery.validator.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/plugins/bootstrapSelect/bootstrap-select.css') }}  " rel="stylesheet">
    <link href="{{ asset('/styles/themes/css/FA/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/styles/base.css') }}" rel="stylesheet">
    <!--[if lte IE 7]>
    <link href="{{ asset('/styles/themes/css/ie7.css') }}" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
    <script src="{{ asset('/styles/other/html5shiv.min.js') }} "></script>
    <script src="{{ asset('/styles/other/respond.min.js') }} "></script>
    <![endif]-->
    <!-- jquery -->
    <script src="{{ asset('/styles/js/jquery-1.11.3.min.js') }} "></script>
    <script src="{{ asset('/styles/js/jquery.cookie.js') }} "></script>
    <!--[if lte IE 9]>
    <script src="{{ asset('/styles/other/jquery.iframe-transport.js') }} "></script>
    <![endif]-->
    <!-- BJUI.all 分模块压缩版 -->
    <script src="{{ asset('/styles/js/bjui-all.min.js') }} "></script>

    <!-- plugins -->
    <!-- swfupload for uploadify && kindeditor -->
    <script src="{{ asset('/styles/plugins/swfupload/swfupload.js') }} "></script>
    <!-- kindeditor -->
    <script src="{{ asset('/styles/plugins/kindeditor_4.1.10/kindeditor-all.min.js') }} "></script>
    <script src="{{ asset('/styles/plugins/kindeditor_4.1.10/lang/zh_CN.js') }}  "></script>
    <!-- colorpicker -->
    <script src="{{ asset('/styles/plugins/colorpicker/js/bootstrap-colorpicker.min.js') }} "></script>
    <!-- ztree -->
    <script src="{{ asset('/styles/plugins/ztree/jquery.ztree.all-3.5.js') }} "></script>
    <!-- nice validate -->
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.js') }} "></script>
    <script src="{{ asset('/styles/plugins/niceValidator/jquery.validator.themes.js') }} "></script>
    <!-- bootstrap plugins -->
    <script src="{{ asset('/styles/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/styles/plugins/bootstrapSelect/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/styles/plugins/bootstrapSelect/defaults-zh_CN.min.js') }} "></script>
    <!-- icheck -->
    <script src="{{ asset('/styles/plugins/icheck/icheck.min.js') }} "></script>
    <!-- dragsort -->
    <script src="{{ asset('/styles/plugins/dragsort/jquery.dragsort-0.5.1.min.js') }} "></script>
    <!-- HighCharts -->
    <script src="{{ asset('/styles/plugins/highcharts/highcharts.js') }} "></script>
    <script src="{{ asset('/styles/plugins/highcharts/highcharts-3d.js') }} "></script>
    <script src="{{ asset('/styles/plugins/highcharts/themes/gray.js') }} "></script>
    <!-- ECharts -->
    <script src="{{ asset('/styles/plugins/echarts/echarts.js') }}"></script>
    <!-- other plugins -->
    <script src="{{ asset('/styles/plugins/other/jquery.autosize.js') }}"></script>
    <link href="{{ asset('/styles/plugins/uploadify/css/uploadify.css') }} " rel="stylesheet">
    <script src="{{ asset('/styles/plugins/uploadify/scripts/jquery.uploadify.min.js') }}  "></script>
    <script src="{{ asset('/styles/plugins/download/jquery.fileDownload.js') }} "></script>

    <!-- init -->
    <script type="text/javascript">
        $(function () {
            BJUI.init({
                JSPATH: "{{ asset('/styles/') }}",         //[可选]框架路径
                PLUGINPATH: "{{ asset('/styles/plugins/') }}", //[可选]插件路径
                loginInfo: {url: 'login_timeout.html', title: '登录', width: 400, height: 200}, // 会话超时后弹出登录对话框
                statusCode: {ok: 200, error: 300, timeout: 301}, //[可选]
                ajaxTimeout: 50000, //[可选]全局Ajax请求超时时间(毫秒)
                pageInfo: {
                    total: 'total',
                    pageCurrent: 'pageCurrent',
                    pageSize: 'pageSize',
                    orderField: 'orderField',
                    orderDirection: 'orderDirection'
                }, //[可选]分页参数
                alertMsg: {displayPosition: 'topcenter', displayMode: 'slide', alertTimeout: 2000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
                keys: {statusCode: 'statusCode', message: 'message'}, //[可选]
                ui: {
                    windowWidth: 0,    //框架可视宽度，0=100%宽，> 600为则居中显示
                    showSlidebar: true, //[可选]左侧导航栏锁定/隐藏
                    clientPaging: true, //[可选]是否在客户端响应分页及排序参数
                    overwriteHomeTab: false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
                },
                debug: true,    // [可选]调试模式 [true|false，默认false]
                theme: 'sky' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
            })

            // main - menu
            $('#bjui-accordionmenu')
                    .collapse()
                    .on('hidden.bs.collapse', function (e) {
                        $(this).find('> .panel > .panel-heading').each(function () {
                            var $heading = $(this), $a = $heading.find('> h4 > a')

                            if ($a.hasClass('collapsed')) $heading.removeClass('active')
                        })
                    })
                    .on('shown.bs.collapse', function (e) {
                        $(this).find('> .panel > .panel-heading').each(function () {
                            var $heading = $(this), $a = $heading.find('> h4 > a')

                            if (!$a.hasClass('collapsed')) $heading.addClass('active')
                        })
                    })

            $(document).on('click', 'ul.menu-items > li > a', function (e) {
                var $a = $(this), $li = $a.parent(), options = $a.data('options').toObj()
                var onClose = function () {
                    $li.removeClass('active')
                }
                var onSwitch = function () {
                    $('#bjui-accordionmenu').find('ul.menu-items > li').removeClass('switch')
                    $li.addClass('switch')
                }

                $li.addClass('active')
                if (options) {
                    options.url = $a.attr('href')
                    options.onClose = onClose
                    options.onSwitch = onSwitch
                    if (!options.title) options.title = $a.text()

                    if (!options.target)
                        $a.navtab(options)
                    else
                        $a.dialog(options)
                }

                e.preventDefault()
            })

            //时钟
            var today = new Date(), time = today.getTime()
            $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
            setInterval(function () {
                today = new Date(today.setSeconds(today.getSeconds() + 1))
                $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
            }, 1000)
        })

        //菜单-事件
        function MainMenuClick(event, treeId, treeNode) {
            event.preventDefault()

            if (treeNode.isParent) {
                var zTree = $.fn.zTree.getZTreeObj(treeId)

                zTree.expandNode(treeNode, !treeNode.open, false, true, true)
                return
            }

            if (treeNode.target && treeNode.target == 'dialog')
                $(event.target).dialog({id: treeNode.tabid, url: treeNode.url, title: treeNode.name})
            else
                $(event.target).navtab({
                    id: treeNode.tabid,
                    url: treeNode.url,
                    title: treeNode.name,
                    fresh: treeNode.fresh,
                    external: treeNode.external
                })
        }
    </script>

</head>
<body>
<!--[if lte IE 7]>
<div id="errorie">
    <div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank"
                                                 href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a
            href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div>
</div>
<![endif]-->
<div id="bjui-window">
    <header id="bjui-header">
        <div class="bjui-navbar-header">
            <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse"
                    data-target="#bjui-navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="bjui-navbar-logo" href="#"><img src="{{ asset('/styles/images/logo.png') }}"></a>
        </div>
        <nav id="bjui-navbar-collapse">
            <ul class="bjui-navbar-right">
                <li class="datetime">
                    <div><span id="bjui-date"></span> <span id="bjui-clock"></span></div>
                </li>
                <li><a href="#">消息 <span class="badge">4</span></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="changepwd.html" data-toggle="dialog" data-id="changepwd_page" data-mask="true"
                               data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span>
                                修改密码&nbsp;</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span>
                                注销登陆</a></li>
                    </ul>
                </li>
                <li></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle theme blue" data-toggle="dropdown" title="切换皮肤"><i
                                class="fa fa-tree"></i></a>
                    <ul class="dropdown-menu" role="menu" id="bjui-themes">
                        <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i
                                        class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                        <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i
                                        class="fa fa-tree"></i> 橘子红了</a></li>
                        <li><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i
                                        class="fa fa-tree"></i> 紫罗兰</a></li>
                        <li class="active"><a href="javascript:;" class="theme_blue" data-toggle="theme"
                                              data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 天空蓝</a></li>
                        <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i
                                        class="fa fa-tree"></i> 绿草如茵</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="bjui-hnav">
            <button type="button" class="btn-default bjui-hnav-more-left" title="导航菜单左移"><i
                        class="fa fa-angle-double-left"></i></button>
            <div id="bjui-hnav-navbar-box">
                <ul id="bjui-hnav-navbar">
                    <li class="active"><a href="javascript:;" data-toggle="slidebar"><i
                                    class="fa fa-check-square-o"></i> 表单元素</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree1" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="check-square-o">
                                <li data-id="1" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    表单元素
                                </li>
                                <li data-id="10" data-pid="1" data-url="form-button.html" data-tabid="form-button"
                                    data-faicon="hand-o-up">按钮
                                </li>
                                <li data-id="11" data-pid="1" data-url="form-input.html" data-tabid="form-input"
                                    data-faicon="terminal">文本框
                                </li>
                                <li data-id="12" data-pid="1" data-url="form-select.html" data-tabid="form-select"
                                    data-faicon="caret-square-o-down">下拉选择框
                                </li>
                                <li data-id="13" data-pid="1" data-url="form-checkbox.html" data-tabid="table"
                                    data-faicon="check-square-o">复选、单选框
                                </li>
                                <li data-id="14" data-pid="1" data-url="form.html" data-tabid="form" data-faicon="list">
                                    表单综合演示
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> 表格</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree2" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="table">
                                <li data-id="2" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    表格
                                </li>
                                <li data-id="20" data-pid="2" data-url="table.html" data-tabid="table"
                                    data-faicon="table">普通表格
                                </li>
                                <li data-id="21" data-pid="2" data-url="table-fixed.html" data-tabid="table-fixed"
                                    data-faicon="list-alt">固定表头表格
                                </li>
                                <li data-id="22" data-pid="2" data-url="table-edit.html" data-tabid="table-edit"
                                    data-faicon="indent">可编辑表格
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> Datagrid(beta)</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree-datagrid" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="table">
                                <li data-id="3" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    datagrid (beta)
                                </li>
                                <li data-id="31" data-pid="3" data-url="datagrid-convertable.html"
                                    data-tabid="datagrid-convertable" data-faicon="table">转换普通表格
                                </li>
                                <li data-id="32" data-pid="3" data-url="datagrid-demo.html" data-tabid="datagrid-demo"
                                    data-faicon="table">完整示例
                                </li>
                                <li data-id="33" data-pid="3" data-url="datagrid-datatype.html"
                                    data-tabid="datagrid-datatype" data-faicon="table">三种数据类型
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 弹出窗口</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree4" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="plane">
                                <li data-id="4" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    弹出窗口
                                </li>
                                <li data-id="40" data-pid="4" data-url="dialog.html" data-tabid="dialog"
                                    data-faicon="plane">弹出窗口
                                </li>
                                <li data-id="41" data-pid="4" data-url="alert.html" data-tabid="alert"
                                    data-faicon="info-circle">信息提示
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-image"></i> 图形报表</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree5" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="image">
                                <li data-id="5" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    图形报表
                                </li>
                                <li data-id="51" data-pid="5" data-url="highcharts.html" data-tabid="chart"
                                    data-faicon="image">Highcharts图表
                                </li>
                                <li data-id="52" data-pid="5" data-url="echarts.html" data-tabid="echarts"
                                    data-faicon="image">ECharts图表
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-coffee"></i> 框架组件</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="coffee">
                                <li data-id="6" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    框架组件
                                </li>
                                <li data-id="61" data-pid="6" data-url="tabs.html" data-tabid="tabs"
                                    data-faicon="columns">选项卡
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 其他插件</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="bug">
                                <li data-id="7" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    其他插件
                                </li>
                                <li data-id="71" data-pid="7" data-url="ztree.html" data-tabid="ztree"
                                    data-faicon="tree">zTree
                                </li>
                                <li data-id="72" data-pid="7" data-url="ztree-select.html" data-tabid="ztree-select"
                                    data-faicon="caret-square-o-down">zTree下拉选择
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-database"></i> 综合应用</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-hnav-tree8" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="database">
                                <li data-id="8" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    综合应用
                                </li>
                                <li data-id="80" data-pid="8" data-url="table-layout.html" data-tabid="table-layout"
                                    data-faicon="refresh">局部刷新1
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-file-word-o"></i> 系统配置</a>
                        <div class="items hide" data-noinit="true">
                            <ul id="bjui-doc-tree-base" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="star-o"
                                data-tit="系统配置">
                                <li data-id="1" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    菜单管理
                                </li>
                                    <li data-id="11" data-pid="1" data-url="{{url('backend/menu')}}" data-fresh="true" data-tabid="menuslist"
                                        data-faicon="caret-right">菜单列表
                                    </li>
                                <li data-id="2" data-pid="0" data-faicon="fa fa-user" data-faicon-close="folder-o">
                                    用户管理
                                </li>
                                    <li data-id="21" data-pid="2" data-url="{{url('backend/admin')}}" data-fresh="true" data-tabid="adminslist"
                                        data-faicon="fa fa-list">用户列表
                                    </li>
                               <li data-id="3" data-pid="0" data-faicon="folder-open-o" data-url='#' data-fresh="true" data-faicon-close="folder-o"
                                   data-faicon="caret-right">角色管理
                               </li>
                                       <li data-id="31" data-pid="3" data-url="{{url('backend/role')}}" data-fresh="true" data-tabid="roleslist"
                                           data-faicon="caret-right">角色列表
                                       </li>
                                       <li data-id="32" data-pid="3" data-url="doc/base/init.html" data-tabid="doc-base"
                                           data-faicon="caret-right">框架初始化
                                       </li>

                                <li data-id="4" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o"
                                        data-faicon="caret-right">权限管理
                                    </li>
                                        <li data-id="41" data-pid="4" data-url="{{url('backend/permission')}}" data-fresh="true" data-tabid="permissionslist"
                                            data-faicon="caret-right">权限列表
                                        </li>
                            </ul>
                            {{--<ul id="bjui-doc-tree-module" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="th" data-tit="框架组件">
                                <li data-id="2" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    标签navtab
                                </li>
                                <li data-id="20" data-pid="2" data-url="doc/navtab/navtab.html" data-tabid="doc-navtab"
                                    data-faicon="caret-right">创建navtab
                                </li>
                                <li data-id="21" data-pid="2" data-url="doc/navtab/navtab-op.html"
                                    data-tabid="doc-navtab" data-faicon="caret-right">参数及方法
                                </li>
                                <li data-id="3" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o"
                                    data-faicon="caret-right">弹窗dialog
                                </li>
                                <li data-id="30" data-pid="3" data-url="doc/dialog/dialog.html" data-tabid="doc-dialog"
                                    data-faicon="caret-right">创建dialog
                                </li>
                                <li data-id="31" data-pid="3" data-url="doc/dialog/dialog-op.html"
                                    data-tabid="doc-dialog" data-faicon="caret-right">参数及方法
                                </li>
                                <li data-id="alertmsg" data-pid="0" data-faicon="folder-open-o"
                                    data-faicon-close="folder-o" data-faicon="caret-right">信息提示alertmsg
                                </li>
                                <li data-id="alertmsg-op" data-pid="alertmsg" data-url="doc/alertmsg/alertmsg.html"
                                    data-tabid="doc-alertmsg" data-faicon="caret-right">提示框alertmsg
                                </li>
                                <li data-id="6" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    表单相关
                                </li>
                                <li data-id="60" data-pid="6" data-url="doc/form/datepicker.html" data-tabid="doc-form"
                                    data-faicon="caret-right">日期选择器
                                </li>
                                <li data-id="61" data-pid="6" data-url="doc/form/spinner.html" data-tabid="doc-form"
                                    data-faicon="caret-right">微调器
                                </li>
                                <li data-id="62" data-pid="6" data-url="doc/form/lookup.html" data-tabid="doc-form"
                                    data-faicon="caret-right">查找带回
                                </li>
                                <li data-id="63" data-pid="6" data-url="doc/form/tags.html" data-tabid="doc-form"
                                    data-faicon="caret-right">自动完成标签
                                </li>
                                <li data-id="64" data-pid="6" data-url="doc/form/upload.html" data-tabid="doc-form"
                                    data-faicon="caret-right">上传组件
                                </li>
                                <li data-id="8" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    右键菜单
                                </li>
                                <li data-id="80" data-pid="8" data-url="doc/other/contextmenu.html"
                                    data-tabid="doc-other" data-faicon="caret-right">右键菜单
                                </li>
                            </ul>
                            <ul id="bjui-doc-tree-ajax" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="spinner"
                                data-tit="Ajax">
                                <li data-id="4" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    Ajax
                                </li>
                                <li data-id="40" data-pid="4" data-url="doc/ajax/callback.html" data-tabid="doc-ajax"
                                    data-faicon="caret-right">回调函数
                                </li>
                                <li data-id="41" data-pid="4" data-url="doc/ajax/form.html" data-tabid="doc-ajax"
                                    data-faicon="caret-right">提交表单
                                </li>
                                <li data-id="42" data-pid="4" data-url="doc/ajax/search.html" data-tabid="doc-ajax"
                                    data-faicon="caret-right">搜索表单
                                </li>
                                <li data-id="43" data-pid="4" data-url="doc/ajax/load.html" data-tabid="doc-ajax"
                                    data-faicon="caret-right">加载(局部刷新)
                                </li>
                                <li data-id="44" data-pid="4" data-url="doc/ajax/action.html" data-tabid="doc-ajax"
                                    data-faicon="caret-right">执行动作
                                </li>
                            </ul>
                            <ul id="bjui-doc-tree-table" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="table"
                                data-tit="表格相关">
                                <li data-id="7" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    普通表格
                                </li>
                                <li data-id="70" data-pid="7" data-url="doc/table/style.html" data-tabid="doc-table"
                                    data-faicon="caret-right">表格样式
                                </li>
                                <li data-id="71" data-pid="7" data-url="doc/table/order.html" data-tabid="doc-table"
                                    data-faicon="caret-right">字段排序
                                </li>
                                <li data-id="72" data-pid="7" data-url="doc/table/paging.html" data-tabid="doc-table"
                                    data-faicon="caret-right">分页组件
                                </li>
                                <li data-id="73" data-pid="7" data-url="doc/table/selected.html" data-tabid="doc-table"
                                    data-faicon="caret-right">行选中操作
                                </li>
                                <li data-id="74" data-pid="7" data-url="doc/table/fixed.html" data-tabid="doc-table"
                                    data-faicon="caret-right">固定表头
                                </li>
                                <li data-id="75" data-pid="7" data-url="doc/table/edit.html" data-tabid="doc-table"
                                    data-faicon="caret-right">可编辑表格
                                </li>
                                <li data-id="datagrid" data-pid="0" data-faicon="folder-open-o"
                                    data-faicon-close="folder-o">Datagrid
                                </li>
                                <li data-id="datagrid-demo" data-pid="datagrid"
                                    data-url="doc/datagrid/datagrid-demo.html" data-tabid="doc-datagrid-demo"
                                    data-faicon="caret-right">datagrid示例
                                </li>
                                <li data-id="datagrid-op" data-pid="datagrid" data-url="doc/datagrid/datagrid-op.html"
                                    data-tabid="doc-datagrid-op" data-faicon="caret-right">datagrid参数
                                </li>
                                <li data-id="datagrid-columns" data-pid="datagrid"
                                    data-url="doc/datagrid/datagrid-columns.html" data-tabid="doc-datagrid-columns"
                                    data-faicon="caret-right">columns参数
                                </li>
                            </ul>
                            <ul id="bjui-doc-tree-chart" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="image"
                                data-tit="图形报表(插件)">
                                <li data-id="5" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">
                                    图形报表(插件)
                                </li>
                                <li data-id="50" data-pid="5" data-url="doc/chart/highcharts.html"
                                    data-tabid="doc-highcharts" data-faicon="caret-right">Highcharts图表
                                </li>
                                <li data-id="50" data-pid="5" data-url="doc/chart/echarts.html" data-tabid="doc-echarts"
                                    data-faicon="caret-right">ECharts图表
                                </li>
                            </ul>
                            <ul id="bjui-doc-tree-other" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick" data-expand-all="true" data-faicon="bug" data-tit="其他插件">
                                <li data-id="other" data-pid="0" data-faicon="folder-open-o"
                                    data-faicon-close="folder-o">其他插件
                                </li>
                                <li data-id="ztree" data-pid="other" data-url="doc/plugin/ztree.html"
                                    data-tabid="doc-ztree" data-faicon="caret-right">zTree
                                </li>
                                <li data-id="icheck" data-pid="other" data-url="doc/plugin/checkbox.html"
                                    data-tabid="doc-icheck" data-faicon="caret-right">复选/单选
                                </li>
                                <li data-id="selectpicker" data-pid="other" data-url="doc/plugin/select.html"
                                    data-tabid="doc-selectpicker" data-faicon="caret-right">下拉选择框
                                </li>
                                <li data-id="nicevalidator" data-pid="other" data-url="doc/plugin/validate.html"
                                    data-tabid="doc-nicevalidator" data-faicon="caret-right">表单验证
                                </li>
                                <li data-id="kindeditor" data-pid="other" data-url="doc/plugin/kindeditor.html"
                                    data-tabid="doc-kindeditor" data-faicon="caret-right">KindEditor
                                </li>
                                <li data-id="ajaxdownload" data-pid="other" data-url="doc/plugin/ajaxdownload.html"
                                    data-tabid="doc-ajaxdownload" data-faicon="caret-right">Ajax Download
                                </li>
                            </ul>--}}
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-cog"></i> 系统设置 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">角色权限</a></li>
                            <li><a href="#">用户列表</a></li>
                            <li class="divider"></li>
                            <li><a href="#">关于我们</a></li>
                            <li class="divider"></li>
                            <li><a href="#">友情链接</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <button type="button" class="btn-default bjui-hnav-more-right" title="导航菜单右移"><i
                        class="fa fa-angle-double-right"></i></button>
        </div>
    </header>
    <div id="bjui-container">
        <div id="bjui-leftside">
            <div id="bjui-sidebar-s">
                <div class="collapse"></div>
            </div>
            <div id="bjui-sidebar">
                <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 导航栏 <i class="fa fa-bars"></i></h2><a
                            href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
                <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu"
                     data-heightbox="#bjui-sidebar" data-offsety="26">
                </div>
            </div>
        </div>
        <div id="bjui-navtab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-url="layout"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent">
                <div class="navtabPage unitBox">
                    <div class="bjui-pageContent" style="background:#FFF;">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="bjui-footer">Copyright &copy; 2013 - 2015　<a href="http://www.cdjinyang.com/" target="_blank">成都锦杨科技</a>　
        <!--
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1252983288'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D1252983288%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
        -->
    </footer>
</div>
</body>
</html>