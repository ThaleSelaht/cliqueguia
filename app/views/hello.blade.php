@extends('layouts.master')

@section('content')
	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>

	<?php echo Lang::setLocale('en');?>

	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>

	<?php echo Lang::setLocale('es');?>
	
	<?php echo Lang::getLocale();?><br/>
	<?php echo Lang::get('reminders.password');?><br/>
@stop
