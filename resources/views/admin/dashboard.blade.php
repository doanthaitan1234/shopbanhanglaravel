@extends('admin_layout')
@section('admin_content')
<?php
		$message= Session::get('message');
		if($message){
			echo '<span class ="text_alert">'.$message.'</span>';
			Session::put('message', NULL);
		}
	?>
@endsection