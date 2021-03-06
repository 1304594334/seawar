@extends('manage.layout.frame')
@section('content')

    <div class="layui-layer-title" style="cursor: move;">添加权限</div>
    <div class="x-body">
        {!! Form::open(['method' => 'POST', 'route' => ['manage.permissions.store'],'class'=>'layui-form']) !!}
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>权限名称
            </label>
            <div class="layui-input-inline">
                <input value="" type="text" id="permission_name" name="permission_name" required="" lay-verify="required" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">
                <span class="x-red">*</span>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>英文名称
            </label>
            <div class="layui-input-inline">
                <input value="" type="text" id="name" name="name" required="" lay-verify="required" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">
                <span class="x-red">*</span>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><span class="x-red">*</span>角色</label>
            <div class="layui-input-block">
                @foreach($roles as $role)
                    <input id="checkbox{{$role->id}}" type="checkbox" name="roles[]" lay-skin="primary" value="{{$role->id}}" title="{{$role->name}}" style="display: none;">
                    <div attr="{{$role->id}}" class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>{{$role->name}}</span><i class="layui-icon"></i></div>
                @endforeach
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label"> </label>
            <button type="submit"  class="layui-btn" lay-filter="add" lay-submit="">修改</button>
            <button type="button"  class="layui-btn" onclick="window.history.go(-1);">返回</button>
        </div>
    </div>
@endsection