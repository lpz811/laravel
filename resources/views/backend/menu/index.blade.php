<meta name="_token" content="{!! csrf_token() !!}"/>

<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="{{ url('backend/permission/search')}}" method="POST">
        @include('backend.common.formHeader')
        <div class="bjui-searchBar">
            <label>菜单名称：</label>
            <input type="text" id="pername" value="{{isset($search['name'])?$search['name']:''}}" name="search[name]"   class="form-control" size="10">&nbsp;
            <label>菜单路由：</label>
            <input type="text" id="pertype" value="{{isset($search['type'])?$search['type']:''}}" name="search[type]"     class="form-control" size="10">&nbsp;
            <label>是否显示：</label>
            <input type="text" id="perdisplay" value="{{isset($search['display_name'])?$search['display_name']:''}}" name="search[display_name]"     class="form-control" size="10">&nbsp;
            <label>权限描述：</label>
            <input type="text" id="perdes" value="{{isset($search['description'])?$search['description']:''}}" name="search[description]"    class="form-control" size="10">&nbsp;

            <button type="submit" class="btn-default" onclick="checkSearch();" data-icon="search">模糊查询</button>
            &nbsp;
            <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('permissionslist', true);"
               data-icon="undo">清空查询</a>

            <button type="button" class="btn-blue btn" data-icon="fa-plus" data-width='530' data-toggle="dialog" data-id="addrole"  data-fresh="true" data-url="{{route('backend.permission.create')}}" data-title="添加新用户">添加新权限</button>

            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn-default dropdown-toggle" data-toggle="dropdown" data-icon="glyphicon-star">
                        批量操作<span class="caret"></span></button>
                    <ul class="dropdown-menu right" role="menu">
                        <li><a href="{{URL::to('backend/admin/selectdelete')}}" data-toggle="doajaxchecked" data-type='post'data-confirm-msg="确定要删除选中项吗？"
                               data-idname="ids" data-group="ids">删除选中</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table data-toggle="tablefixed" data-width="100%" data-nowrap="true" style='font-size:30px'>
        <thead>
        <tr>
            <th width="26"><input type="checkbox" class="checkboxCtrl" data-group="ids" data-toggle="icheck"></th>
            <th data-order-field="id">ID</th>
            <th data-order-field="data_id">DATA_ID</th>
            <th data-order-field="parent_id">PARAENT_ID</th>
            <th data-order-field="tab_id">TAB_ID</th>
            <th data-order-field="icon">菜单打开时图标</th>
            <th data-order-field="icon_close">菜单关闭时图标</th>
            <th data-order-field="data_fresh">菜单打开时是否刷新页面</th>
            <th data-order-field="name">菜单名称</th>
            <th data-order-field="route">菜单地址</th>
            <th data-order-field="description">菜单描述</th>
            <th data-order-field="sort">菜单排序</th>
            <th data-order-field="hide">是否显示</th>
            <th width="100">操作</th>
        </tr>
        </thead>

        <tbody>
            @foreach($data['info'] as $item)
                <tr data-id="{{$item->id}}">
                    <td><input type="checkbox" name="ids" data-toggle="icheck" value="{{$item->id}}"></td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->data_id}}</td>
                    <td>{{$item->parent_id}}</td>
                    <td>{{$item->tab_id}}</td>
                    <td>{{$item->icon}}</td>
                    <td>{{$item->icon_close}}</td>
                    <td>{{$item->data_fresh}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->route}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->sort}}</td>
                    <td>{{$item->hide}}</td>

                    <td>
                        @if(Auth::user()->id == $item->id || Auth::user()->is_super_admin==1)
                            <a href="{{route('backend.admin.edit',['id'=>$item->id])}}" class="btn btn-green"
                               data-toggle="dialog" data-id="editadmin"     data-title="编辑-{{$item->name}} 用户">编辑</a>
                            <a href="{{URL::to('backend/admin/'.$item->id)}}" class="btn btn-red" data-toggle="doajax"
                               data-confirm-msg="确定要删除{{$item->email}}用户？"  data-type="delete">删除</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.common.formFooter')

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    function checkSearch() {
        var pername = $('#pername').val();
        var pertype = $('#pertype').val();
        var perdisplay = $('#perdisplay').val();
        var perdes = $('#perdes').val();
        if (pername==''&&pertype==''&&perdisplay==''&&perdes=='') {
            $(this).alertmsg('error', '搜索字段不能为空')
            return false;
        }
        return true;
    }
</script>