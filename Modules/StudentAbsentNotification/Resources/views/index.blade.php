@extends('backEnd.master')
@section('title')
    @lang('lang.time') @lang('lang.setup')
@endsection
@section('mainContent')
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('lang.time_setup')</h1>
            <div class="bc-pages">
                <a href="{{route('dashboard')}}">@lang('lang.dashboard')</a>
                <a href="#">@lang('lang.student_information')</a>
                <a href="#">@lang('lang.time_setup')</a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        @if(isset($online_exam))
         @if(userPermission(239))
                       
        <div class="row">
            <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                <a href="{{route('online-exam')}}" class="primary-btn small fix-gr-bg">
                    <span class="ti-plus pr-2"></span>
                    @lang('lang.add')
                </a>
            </div>
        </div>
        @endif
        @endif
       
          <div class="row">
              <div class="col-lg-10">
              </div>
              <div class="col-lg-2">
                <a class="primary-btn fix-gr-bg" data-toggle="modal" data-target="#commandModal"
                    href="#">Cron Command
                </a>
              </div>
          </div>

          <div class="modal fade admin-query" id="commandModal" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Cron Jobs Command</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="text-center">
                            <h4><code>artisan absent_notification:sms</code> </h4>
                           
                        </div>

                        <div class="mt-40 d-flex ">
                            Example: <code>/opt/cpanel/ea-php74/root/usr/bin/php /home/[HOSTING_USERNAME]/public_html/artisan absent_notification:sms > /dev/null 2>&1</code>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-20">
           

            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h3 class="mb-30">@if(isset($editData))
                                    @lang('lang.edit')
                                @else
                                    @lang('lang.add')
                                @endif
                                @lang('lang.time_setup')
                            </h3>
                        </div>
                        @if(isset($editData))
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'absent_time_setup_update', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        
                        <input type="hidden" name="id" value="{{$editData->id}}">
                        @else
                         @if(userPermission(239))
                        {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'absent_time_setup',
                        'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        @endif
                        @endif
                        <input type="hidden" name="url" id="url" value="{{URL::to('/')}}">
                        <div class="white-box">
                            <div class="add-visitor">
                       
                         
                           
                                
                             
                                <div class="row no-gutters input-right-icon mt-25">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input time form-control{{ $errors->has('start_time') ? ' is-invalid' : '' }}" type="text" name="start_time" value="{{isset($editData)? $editData->time_from: old('start_time')}}">
                                            <label>@lang('lang.start_time')*</label>
                                            <span class="focus-border"></span>
                                            @if ($errors->has('start_time'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('start_time') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="" type="button">
                                            <i class="ti-timer"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row no-gutters input-right-icon d-none mt-25">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input class="primary-input time  form-control{{ $errors->has('end_time') ? ' is-invalid' : '' }}" type="text" name="end_time"  value="{{isset($editData)? $editData->time_to: old('end_time')}}">
                                                <label>@lang('lang.end_time')</label>
                                                <span class="focus-border"></span>
                                                @if ($errors->has('end_time'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('end_time') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="" type="button">
                                                <i class="ti-timer"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mt-25">
                                        <div class="col-lg-12" >
                                            <select class="w-100 bb niceSelect form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"  name="active_status">
                                                <option data-display="@lang('lang.status') *" value="">@lang('lang.status')  *</option>
                                                <option value="1" {{isset($editData)? ($editData->active_status == 1? 'selected' : ''):"" }} >@lang('lang.active')</option>
                                                <option value="0" {{isset($editData)? ($editData->active_status == 0? 'selected' : ''):"" }}>@lang('lang.pending')</option>
                                            </select>
                                            @if ($errors->has('active_status'))
                                                <span class="invalid-feedback invalid-select d-block" role="alert">
                                                    <strong>{{ $errors->first('active_status') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            
                                
                                <div class="row mt-40">
                                    <div class="col-lg-12 text-center">
                                         <button class="primary-btn fix-gr-bg" data-toggle="tooltip" title="">
                                            <span class="ti-check"></span>
                                            @if(isset($editData))
                                                @lang('lang.update')
                                            @else
                                                @lang('lang.save')
                                            @endif
                                            @lang('lang.time_setup')
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="url" value="{{Request::url()}}">
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 no-gutters">
                        <div class="main-title">
                            
                            <h3 class="mb-0">@lang('lang.time_setup') @lang('lang.list')</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <table id="table_id" class="display school-table" cellspacing="0" width="100%">

                            <thead>
                                <tr>
                                    <th>@lang('lang.time')</th>
                                    {{-- <th>@lang('lang.end_time')</th> --}}
                                    <th>@lang('lang.Status')</th>
                                    <th>@lang('lang.action')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($setups as $item)
                                    <tr>
                                        <td>{{@$item->time_from}}</td>
                                        {{-- <td>{{@$item->time_to}}</td> --}}
                                        <td>
                                            @if ($item->active_status==1)
                                                @lang('lang.active')
                                            @else
                                                @lang('lang.pending')
                                                
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                    @lang('lang.select')
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('absent_time_edit', [$item->id])}}">@lang('lang.edit')</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#deleteStudentTypeModal{{$item->id}}"
                                                        href="#">@lang('lang.delete')</a>
                                                    </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade admin-query" id="deleteStudentTypeModal{{$item->id}}" >
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">@lang('lang.delete') @lang('lang.time_setup')</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h4>@lang('lang.are_you_sure_to_delete')</h4>
                                                    </div>
                                                    <div class="mt-40 d-flex justify-content-between">
                                                        <button type="button" class="primary-btn tr-bg" data-dismiss="modal">@lang('lang.cancel')</button>
                                                        <a href="{{route('time_setup_delete', [$item->id])}}"><button class="primary-btn fix-gr-bg" type="submit">@lang('lang.delete')</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
