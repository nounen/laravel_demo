@extends('layouts.adminlte_app')

@component('layouts.adminlte_header')
    <h1>高价收车, 上门评估</h1>
    <div>仅限闽D车</div>
@endcomponent

@section('content')
<div class="row">
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">车主姓名:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">性别:</label>

                <div class="col-xs-10">
                    <div class="radio col-xs-6 text-center">
                        <label>
                            <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">男
                        </label>
                    </div>
                    <div class="radio col-xs-6 text-center">
                        <label>
                            <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">女
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">手机号码:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">品牌车型:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="text">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">期望售价:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="text">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">预约时间:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="date">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">预约地点:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="text">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center" style="border: none;">
            <button type="submit" class="btn btn-info">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
@endsection