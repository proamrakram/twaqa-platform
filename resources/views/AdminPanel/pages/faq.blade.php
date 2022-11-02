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
                    <li class="breadcrumb-item pe-3 text-primary"> الاسئلة الشائعة </li>
                </ol>
            </div>

            <form method="post" action="{{ route('admin.pages.update-faq') }}" enctype="multipart/form-data">
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
                                    <input type="text" name="faq_page_title_ar" value="{{$pages['faq_page_title_ar'] ?? ''}}" class="form-control form-control-solid @error('faq_page_title_ar') is-invalid @enderror">
                                    @error('faq_page_title_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="content-page">
                                    <!--begin::Repeater-->
                                    <div class="faq_ar">
                                        <div class="form-group">
                                            <div data-repeater-list="faq_ar">
                                                <?php $i=0;?>
                                                @foreach($faq_ar as $faq)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                            <input type="hidden" class="form-control mb-2 " name="id" value="{{$faq->id}}">

                                                            <input name="question" value="{{$faq->question}}" type="text" class="form-control mb-2 " placeholder="السؤال" />
                                                            @error('faq_ar.'.$i.'.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            
                                                            <br>
                                                            <textarea name="answer" class="form-control " placeholder='الجواب'>{{$faq->answer}}</textarea>
                                                            @error('faq_ar.'.$i.'.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i> حذف
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++;?>
                                                @endforeach
                                                @if($faq_ar->count()==0)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                        <input type="hidden" class="form-control mb-2 " name="id" value="">
<input name="question" type="text" class="form-control mb-2 " placeholder="السؤال" />
                                                            @error('faq_ar.*.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <textarea name="answer" class="form-control " placeholder='الجواب'></textarea>
                                                        @error('faq_ar.*.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror</div>
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
                                    <input type="text" name="faq_page_title_en" value="{{$pages['faq_page_title_en'] ?? ''}}" class="form-control form-control-solid @error('faq_page_title_en') is-invalid @enderror">
                                    @error('faq_page_title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="content-page">
                                    <!--begin::Repeater-->
                                    <div class="faq_en" dir='ltr'>
                                        <div class="form-group">
                                            <div data-repeater-list="faq_en">
                                            <?php $i=0;?>
                                                @foreach($faq_en as $faq)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                            <input type="hidden" class="form-control mb-2 " name="id" value="{{$faq->id}}">
                                                            <input name="question" type="text" value="{{$faq->question}}" class="form-control mb-2 " placeholder="Answer" />
                                                            @error('faq_en.*.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <textarea name="answer" class="form-control " placeholder='Question'>{{$faq->answer}}</textarea>
                                                            @error('faq_en.*.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php $i++;?>
                                                @endforeach
                                                @if($faq_en->count()==0)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                        <input type="hidden" class="form-control mb-2 " name="id" value="">
                                                            <input name="question" type="text"  class="form-control mb-2 " placeholder="Answer" />
                                                            @error('faq_en.'.$i.'.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <br>
                                                            <textarea name="answer" class="form-control " placeholder='Question'></textarea>
                                                            @error('faq_en.'.$i.'.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
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
                                                <i class="la la-plus"></i> Add New
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
                                    <input type="text" name="faq_page_title_sp" value="{{$pages['faq_page_title_sp'] ?? ''}}" class="form-control form-control-solid @error('faq_page_title_sp') is-invalid @enderror">
                                    @error('faq_page_title_sp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="content-page">
                                    <!--begin::Repeater-->
                                    <div class="faq_sp" dir='ltr'>
                                        <div class="form-group">
                                            <div data-repeater-list="faq_sp">
                                            <?php $i=0;?>
                                                @foreach($faq_sp as $faq)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                            <input type="hidden" class="form-control mb-2 " name="id" value="{{$faq->id}}">
                                                            <input name="question" type="text" value="{{$faq->question}}" class="form-control mb-2 " placeholder="Responder" />
                                                            @error('faq_sp.'.$i.'.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            
                                                            <br>
                                                            <textarea name="answer" class="form-control " placeholder='Pregunta'>{{$faq->answer}}</textarea>
                                                            @error('faq_sp.'.$i.'.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                <i class="la la-trash-o"></i> Borrar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>   <?php $i++;?>
                                                @endforeach
                                                @if($faq_sp->count()==0)
                                                <div data-repeater-item class='border mb-2 p-5 rounded'>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-9">
                                                        <input type="hidden" class="form-control mb-2 " name="id" value="">
                                                            <input name="question" type="text"  class="form-control mb-2 " placeholder="Responder" />
                                                            @error('faq_sp.*.question')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                            <textarea name="answer" class="form-control " placeholder='Pregunta'></textarea>
                                                            @error('faq_sp.*.answer')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
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
                                                <i class="la la-plus"></i> Agregar nueva
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
    $('.faq_en').repeater({
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
    $('.faq_sp').repeater({
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
    $('.faq_ar').repeater({
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