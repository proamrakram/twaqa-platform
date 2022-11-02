@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3 text-muted"> الصفحات </a></li>
                    <li class="breadcrumb-item pe-3 text-primary"> اراء العملاء </li>
                </ol>
            </div>
            <form method="post" action="{{ route('admin.pages.update-testimonial') }}" enctype="multipart/form-data">
                @csrf


                <div class="card ">
                    <div class="card-header card-header-stretch justify-content-center">
                        <h3 class="card-title me-8">اللغة</h3>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#paeg_ar">العربية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#paeg_en">الانجليزية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#paeg_sp"> الاسبانية </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="paeg_ar" role="tabpanel">
                                <div class="mb-4">
                                    <label class="form-label fw-bolder"> اسم الصفحة </label>
                                    <input type="text" name="testimonial_page_title_ar" value="{{$pages['testimonial_page_title_ar'] ?? ''}}" class="form-control form-control-solid @error('testimonial_page_title_ar') is-invalid @enderror">
                                    @error('testimonial_page_title_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="content-page">
                                    <!--begin::Repeater-->
                                    <div class="testimonial_ar">
                                        <div class="form-group">
                                            <div data-repeater-list="testimonial_ar">
                                                <?php $i = 0; ?>
                                                @foreach($testimonial_ar as $t)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">

                                                            <input type="hidden" class="form-control mb-2 " name="id" value="{{$t->id}}">
                                                            <input type="text" name="name" class="form-control mb-2 " value="{{$t->name}}" placeholder=" اسم الشخص " />
                                                            @error('testimonial_ar.'.$i.'.name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <br>
                                                            <textarea name="opinion" class="form-control " placeholder='ماذا قال؟'>{{$t->opinion}}</textarea>
                                                            @error('testimonial_ar.'.$i.'.opinion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror

                                                            <div class="row align-items-center mt-2 upload-img">
                                                                <div class="col-md-8">
                                                                    <label for="formFile" class='d-block mb-1'> صورة الشخص </label>
                                                                    <input class="form-control" name="image" type="file" id="formFile">
                                                                    @error('testimonial_ar.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-4 align-self-center">
                                                                    <img src="{{$t->image}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i> حذف
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++; ?>
                                                @endforeach
                                                @if($testimonial_ar->count()==0)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">

                                                            <input type="hidden" class="form-control mb-2 " name="id" value="">
                                                            <input type="text" name="name" class="form-control mb-2 " placeholder=" اسم الشخص " />
                                                            @error('testimonial_ar.'.$i.'.name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <br>
                                                            <textarea name="opinion" class="form-control " placeholder='ماذا قال؟'></textarea>
                                                            @error('testimonial_ar.'.$i.'.opinion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror

                                                            <div class="row align-items-center mt-2 upload-img">
                                                                <div class="col-md-8">
                                                                    <label for="formFile" class='d-block mb-1'> صورة الشخص </label>
                                                                    <input class="form-control" name="image" type="file" id="formFile">
                                                                    @error('testimonial_ar.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-4 align-self-center">
                                                                    <img src="{{asset('assets/media/blank.svg')}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i> حذف
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="form-group mt-5">
                                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                <i class="la la-plus"></i>أضافة جديد
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Repeater-->
                                </div>
                            </div>
                            <!-- End Tab -->

                            <div class="tab-pane fade" id="paeg_en" role="tabpanel" dir='ltr'>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> Page Title </label>
                                    <input type="text" name="testimonial_page_title_en" value="{{$pages['testimonial_page_title_en'] ?? ''}}" class="form-control form-control-solid  @error('testimonial_page_title_en') is-invalid @enderror">
                                    @error('testimonial_page_title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="content-page">
                                <!--begin::Repeater-->
                                <div class="testimonial_en">
                                    <div class="form-group">
                                        <div data-repeater-list="testimonial_en">
                                            <?php $i = 0; ?>
                                            @foreach($testimonial_en as $t)
                                            <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-md-9">
                                                        
                                                    <input type="hidden" class="form-control mb-2 " name="id" value="{{$t->id}}" >
                                                        <input type="text" name="name"  value="{{$t->name}}" class="form-control mb-2 " placeholder=" Name of the person " />
                                                        @error('testimonial_en.'.$i.'.name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    <br>
                                                        <textarea name="opinion" class="form-control " placeholder='What did he say?'>{{$t->opinion}}</textarea>
                                                        @error('testimonial_en.'.$i.'.opinion')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror

                                                        <div class="row align-items-center mt-2 upload-img">
                                                            <div class="col-md-8">
                                                                <label for="formFile" class='d-block mb-1'> person picture </label>
                                                                <input class="form-control" name="image" type="file" id="formFile">
                                                                @error('testimonial_en.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                            </div>
                                                            <div class="col-md-4 align-self-center">
                                                                <img src="{{$t->image}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                            <i class="la la-trash-o"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $i++; ?>
                                            @endforeach
                                            @if($testimonial_en->count()==0)
                                            <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-md-9">
                                                        
                                                    <input type="hidden" class="form-control mb-2 " name="id" >
                                                        <input type="text" name="name" class="form-control mb-2 " placeholder=" Name of the person " />
                                                        @error('testimonial_en.'.$i.'.name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    <br>
                                                        <textarea name="opinion" class="form-control " placeholder='What did he say?'></textarea>
                                                        @error('testimonial_en.'.$i.'.opinion')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror

                                                        <div class="row align-items-center mt-2 upload-img">
                                                            <div class="col-md-8">
                                                                <label for="formFile" class='d-block mb-1'> person picture </label>
                                                                <input class="form-control" name="image" type="file" id="formFile">
                                                                @error('testimonial_en.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                            </div>
                                                            <div class="col-md-4 align-self-center">
                                                                <img src="{{asset('assets/media/blank.svg')}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                            <i class="la la-trash-o"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <i class="la la-plus"></i> Add new
                                        </a>
                                    </div>
                                </div>
                                <!--end::Repeater-->
                            </div>
                        </div>
                        <!-- End Tab -->

                        <div class="tab-pane fade" id="paeg_sp" role="tabpanel" dir='ltr'>
                            <div class="mb-3">
                                <label class="form-label fw-bolder"> Título de la página </label>
                                <input type="text" name="testimonial_page_title_sp" value="{{$pages['testimonial_page_title_sp'] ?? ''}}" class="form-control form-control-solid @error('testimonial_page_title_sp') is-invalid @enderror">
                                @error('testimonial_page_title_sp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <div class="content-page">
                            <!--begin::Repeater-->
                            <div class="testimonial_sp">
                                <div class="form-group">
                                    <div data-repeater-list="testimonial_sp">
                                        <?php $i = 0; ?>
                                        @foreach($testimonial_sp as $t)
                                        <div data-repeater-item class='border mb-2 p-5 rounded'>
                                            <div class="form-group row align-items-center">
                                                <div class="col-md-9">
                                                <input type="hidden" class="form-control mb-2 " value="{{$t->id}}" name="id">
                                                        
                                                    <input type="text" name="name"  value="{{$t->name}}" class="form-control mb-2 " placeholder=" Nombre de la persona " />
                                                    @error('testimonial_sp.'.$i.'.name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    <br>
                                                    <textarea name="opinion" class="form-control " placeholder='¿Que dijo el?'>{{$t->opinion}}</textarea>
                                                    @error('testimonial_sp.'.$i.'.opinion')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    

                                                    <div class="row align-items-center mt-2 upload-img">
                                                        <div class="col-md-8">
                                                            <label for="formFile" class='d-block mb-1'> foto de persona </label>
                                                            <input name="image" class="form-control" type="file" id="formFile">
                                                            @error('testimonial_sp.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                     
                                                        </div>
                                                        <div class="col-md-4 align-self-center">
                                                            <img src="{{$t->image}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i> Borrar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                        @endforeach
                                        @if($testimonial_sp->count()==0)
                                        <div data-repeater-item class='border mb-2 p-5 rounded'>
                                            <div class="form-group row align-items-center">
                                                <div class="col-md-9">
                                                <input type="hidden" class="form-control mb-2 " name="id">
                                                        
                                                    <input type="text" name="name" class="form-control mb-2 " placeholder=" Nombre de la persona " />
                                                    @error('testimonial_sp.'.$i.'.name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    <br>
                                                    <textarea name="opinion" class="form-control " placeholder='¿Que dijo el?'></textarea>
                                                    @error('testimonial_sp.'.$i.'.opinion')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    

                                                    <div class="row align-items-center mt-2 upload-img">
                                                        <div class="col-md-8">
                                                            <label for="formFile" class='d-block mb-1'> foto de persona </label>
                                                            <input name="image" class="form-control" type="file" id="formFile">
                                                            @error('testimonial_sp.'.$i.'.image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                     
                                                        </div>
                                                        <div class="col-md-4 align-self-center">
                                                            <img src="{{asset('assets/media/blank.svg')}}" class=' border rounded w-80px h-80px' style='object-fit: contain'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i> Borrar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group mt-5">
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                        <i class="la la-plus"></i> Agregar nuevo
                                    </a>
                                </div>
                            </div>
                            <!--end::Repeater-->
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <div class="text-center bg-white border rounded p-5 mt-3">
        <button type="submit" class="px-20  w-50  btn btn-primary btn-hover-rise me-5 fw-bolder"> حفظ </button>
    </div>

    </form>

</div>
</div>
</div>
@endsection


@section('script')

<script>
    $('.testimonial_ar').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
    $('.testimonial_en').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
    $('.testimonial_sp').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
</script>
@endsection