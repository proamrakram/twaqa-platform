@extends('partials.layout')
@section('title') تواقة - لوحة التحكم @endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="d-flex align-items-center justify-content-between mb-3">
                <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                    <li class="breadcrumb-item pe-3 "><a href="#" class="pe-3 text-muted">الرئيسية</a></li>
                    <li class="breadcrumb-item pe-3"><a href="{{route('admin.lessons.index')}}" class="pe-3 text-muted"> الحلقات </a></li>
                    <li class="breadcrumb-item pe-3 text-primary">تغيير الحالة</li>
                </ol>
            </div>
            <form method="post" action="{{ route('admin.lessons.update-status',['id'=>$lesson->id])  }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">


                            <div class="row price mb-4 mt-2 g-2">
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <label for="floatingInputValue"> المعلم : {{$lesson->teacher->name}} </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="teacher_status" id="teacher-dropdown" class="form-select   @error('teacher_status') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected> أختر الحالة </option>
                                            @foreach($statuses as $status)
                                            <option  value="{{$status->id}}"> {{$status->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('teacher_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="floatingInputValue"> الحالة </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row price mb-4 mt-2 g-2">
                            <label for="floatingInputValue">الطلاب </label>
                           <?php $students = explode(",", $lesson->course->students) ?>
                            @foreach($students as $student)
                            <?php $s = \App\Models\User::find($student); ?>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <label for="floatingInputValue"> الطالب : {{$s->name}} </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="student_statuses[{{$student}}][]" id="teacher-dropdown" class="form-select   @error('student_statuses') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected> أختر الحالة </option>

                                            @foreach($statuses as $status)
                                            <option  value="{{$status->id}}"> {{$status->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('student_statuses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="floatingInputValue"> الحالة </label>
                                    </div>
                                </div><div class="col-md-3"></div>
@endforeach
                            </div>


                        </div>
                    </div>
                </div>

                <button type="submit" class="px-20  mt-5 btn btn-primary btn-hover-rise me-5 fw-bolder"> تعديل </button>
            </form>


        </div>
    </div>
</div>
@endsection

@section('script')

<script>

</script>
@endsection