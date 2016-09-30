
@inject('mainPresenter','App\Presenters\Backend\MainPresenter')
{!! $mainPresenter->renderSidebar($menus) !!}




{{--
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
                    data-faicon="fa fa-list">菜单列表
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
                    data-faicon="fa fa-list">角色列表
                </li>

                <li data-id="4" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o"
                    data-faicon="caret-right">权限管理
                </li>
                <li data-id="41" data-pid="4" data-url="{{url('backend/permission')}}" data-fresh="true" data-tabid="permissionslist"
                    data-faicon="fa fa-list">权限列表
                </li>
                <li data-id="5" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o"
                    data-faicon="caret-right">操作管理
                </li>
                <li data-id="51" data-pid="5" data-url="{{url('backend/action')}}" data-fresh="true" data-tabid="actionslist"
                    data-faicon="fa fa-list">操作列表
                </li>
            </ul>
            --}}
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
            </ul>--}}{{--

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
</ul>--}}
