@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		    <div class='col-md-10  '>
		    	<div class='card mt-2'>
		    		<div class='card-header'>网站信息</div>
		    		<!-- <div class='ca'></div>/ -->
		    		<p class='text-danger'>网站配置信息除<span class='text-primary'>banner图</span>默认存放在配置文件中，暂不支持修改，如需修改请联系站长【2197486242@qq.com】</p>
		        <form id='form' action="/zyadmin/webset" method='post' enctype="multipart/form-data">
		        	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		        	<div class='form-group row'>
		        		<label for='webname' class='col-sm-2 col-form-label'>网站名称</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webname" readonly placeholder="20字以内">
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webtitle'>网站标题</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webtitle" readonly placeholder="6字以内">
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webtitle'>首页图</label>
		        		<div class='col-sm-10'>
		        			<input type="file" name="banner">
		        		</div>
		        	</div>
		      
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webkey'>站点关键字</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webkey" readonly placeholder="5字左右用逗号隔开">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webdesc'>站点描述</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webdesc" readonly placeholder="80到160字以内">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webright'>版权信息</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webright" readonly placeholder="待添加">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webnec'>联系我</label>
		        		<div class='col-sm-10'>
		        			<input type="email" class='form-control' name="webnec" readonly placeholder="email">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webnum'>网站备案号</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webnum" readonly placeholder="待添加">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webip'>后台ip白名单</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="webip" readonly placeholder="ip地址以逗号隔开">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='weblogin'>后台登录限制</label>
		        		<div class='col-sm-10'>
		        			<input type="text" class='form-control' name="weblogin" readonly placeholder="数字，不要太小">
		        			
		        		</div>
		        	</div>
		        	<div class='form-group row'>
		        		<label class='col-sm-2 col-form-label' for='webcount'>统计代码</label>
		        		<div class='col-sm-10'>
		        			<!-- <input type="text" class='form-control' name="webcount"> -->
		        			<textarea class='form-control' name='webcount' readonly placeholder="待添加"></textarea>
		        			
		        		</div>

		        	</div>
		        	<div class='form-group row'>
		        		<div class='col-sm-10 '>
		        			<label class='col-sm-2 col-form-label' > </label>
		        			<input type="submit" value='保存' class='btn btn-primary' name="">
		        		    <input type="reset" value='取消' class='btn btn-secondary' name="">
		        			
		        		</div>
		        		

		        	</div>

		        </form>
		        </div>
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
@section('scripts')
@endsection
@endsection