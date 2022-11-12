@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.notifications.index')}}" class="pe-3 text-muted">الاشعارات</a></li>
                    <li class="breadcrumb-item pe-3 text-primary">  تعديل</li>
                </ol>
            </div>        
            <div class="card">
                <div class="card-body fs-6 p-5 text-gray-700">
                <form  method="post" action="{{ route('admin.notifications.update',['id'=>$notification->id]) }}" enctype="multipart/form-data">
                    @csrf
                        
                    <div class="mb-3">
                            <label class="form-label fw-bolder">  عنوان الاشعار </label>
                            <input type="text" name="title" value="{{$notification->title}}" class="form-control form-control-solid @error('title') is-invalid @enderror" >
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bolder">  وصف الاشعار </label>
                            <textarea  name="description" class="form-control form-control-solid @error('description') is-invalid @enderror"  >{{$notification->description}}</textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>                        
                       
                        <div class="mb-3">
                            <label class="form-label fw-bolder">  إلى  </label>
                            <select  name="to"    id="type-dropdown"  class="form-select form-select-solid @error('to') is-invalid @enderror" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                <option></option>
                                <option value="teacher" @if($notification->to=='teacher') selected @endif> معلم  </option>
                                <option value="student"   @if($notification->to=='student') selected @endif>طالب </option>
                            </select>
                            @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bolder">  اختر  </label>
                            <select  name="users[]"   id="users-dropdown"  class="form-select form-select-solid @error('users') is-invalid @enderror" multiple="multiple" data-control="select2" data-dropdown-css-class="w-200px" data-placeholder="اختر .." data-hide-search="true">
                                <option></option>
                                
                                @foreach($users as $user)
                                @if($notification->to == $user->user_type)
                                <option value="{{$user->id}}"   @if(in_array($user->id, (explode(",", $notification->users)))) selected @endif>{{$user->full_name}} </option>
                                @endif
                                @endforeach
                             </select>      
                             @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                      
                        </div>

  
                        <div class="text-end">
                            <button type="submit"  class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder">  حفظ  </button>
                        </div>
                    </form>
                </div>
            </div>    
           
        </div>
    </div>
</div>


@endsection
@section('script')

<script>
$(document).ready(function() {
$('#type-dropdown').on('change', function() {
var type = this.value;
$("#users-dropdown").html('');
$.ajax({
url:"{{url('/admin/get-users-by-type')}}",
type: "POST",
data: {
    type: type,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#users-dropdown').html('<option value="">@lang("adminPanel.users")</option>'); 
$.each(result.users,function(key,value){
    $("#users-dropdown").append('<option value="'+value.id+'">'+value.full_name+'</option>');
}); 
}
});
});   
});
</script>
@endsection

