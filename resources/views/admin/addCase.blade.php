@extends('admin.layouts.app')

@section('content')
    <div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                	<li>
                                    	<i class="icon-home"></i>Добавить кейс
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a href="#">Редактирование</a>
                                    </li>
                                </ul>
                                
                                <h1 id="main-heading">
                                	Добавить кейс
                                </h1>
                            </div>
                            
                            <div id="main-content">
                            	<div class="span6 widget">
										<div class="widget-header">
											<span class="title">Добавление</span>
										</div>
										<div class="widget-content form-container">
											<form id="validate-1" class="vertical-form" method="post" action="{{ route('admin.addCase') }}">
                                                {{ csrf_field() }}
												<div class="control-group @if($errors->first('name'))error @endif">
													<label class="control-label">Название кейса <span class="required">*</span></label>
													<div class="controls">
														<input type="text" name="name" class="span4">
                                                        @if($errors->first('name'))
                                                        <label generated="true" class="error help-block">{{ $errors->first('name') }}</label>
                                                        @endif
													</div>
												</div>
                                                <div class="control-group @if($errors->first('name'))error @endif">
													<label class="control-label">Тип кейса <span class="required">*</span></label>
													<select name="price" id="adminPrices" class="form-control span4">
                                                        <option data-min="10" data-max="200000" data-price="123.00" class="optionPrices" value="5" >Лайки</option>
                                                        <option data-min="5" data-max="1000000" data-price="128.00" class="optionPrices" value="6" >Подписчики</option>
                                                        <option data-min="5" data-max="2000000" data-price="10.00" class="optionPrices" value="7" >Охват</option>
                                                    </select>

												</div>
												<div class="control-group @if($errors->first('price'))error @endif">
													<label class="control-label">Цена за 1 кейс <span class="required">*</span></label>
													<div class="controls">
														<input type="text" name="price" class="span4">
                                                        @if($errors->first('name'))
                                                        <label generated="true" class="error help-block">{{ $errors->first('price') }}</label>
                                                        @endif
													</div>
												</div>
                                                <div class="control-group @if($errors->first('min_count'))error @endif">
													<label class="control-label">Минимальный выигрыш <span class="required">*</span></label>
													<div class="controls">
														<input type="text" name="min_count" class="span4">
                                                        @if($errors->first('min_count'))
                                                        <label generated="true" class="error help-block">{{ $errors->first('min_count') }}</label>
                                                        @endif
													</div>
												</div>
                                                <div class="control-group @if($errors->first('max_count'))error @endif">
													<label class="control-label">Максимальный выйгрыш <span class="required">*</span></label>
													<div class="controls">
														<input type="text" name="max_count" class="span4">
                                                        @if($errors->first('max_count'))
                                                        <label generated="true" class="error help-block">{{ $errors->first('max_count') }}</label>
                                                        @endif
													</div>
												</div>
												
												
												<div class="form-actions">
													<input type="submit" value="Создать" class="btn btn-primary pull-right">
												</div>
											</form>
										</div>
									
									</div>

                            </div>
@endsection