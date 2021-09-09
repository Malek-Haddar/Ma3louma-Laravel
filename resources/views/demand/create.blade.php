@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="d-flex justify-content-center""> مطلب </h2>
    <form action="/demand"
    method="POST"
    enctype="multipart/form-data">
    @csrf

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name" class="d-flex">الاسم و اللقب (او التسمية الاحتماعية) </label>
            <input type="text" value="{{ old('name')}}" name="name" class="form-control" placeholder="" id="name">
            @error('name')
                {{$message}}
            @enderror
          </div>
        </div>
        <!--  col-md-6   -->
        </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="adress" class="d-flex">العنوان (او المقر الاجتماعي  ) </label>
            <input type="text" name="adress" class="form-control" placeholder="" id="adress">
          </div>


        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">

          <div class="form-group">
            <label for="structure" class="d-flex"> الهيكل المعني</label>
            <input type="text" name="structure" class="form-control" id="structure" placeholder="">
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->


      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="formula" class="d-flex"> الصيغة المراد بها الحصول على المعلومة  </label>
            <select type="text" class="form-control" name="formula" id="formula" required>
                <option disabled selected> -الإختيار- </option>
                <option value="نسخة ورقية">نسخة ورقية</option>
                <option value="نسخة الكترونية"> نسخة الكترونية </option>
                <option value="مقتطف من المعلومة">مقتطف من المعلومة </option>
                <option value="الاطلاع على المعلومة على عين المكان "> الاطلاع على المعلومة على عين المكان  </option>
            </select>          </div>
        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">
          <div class="form-group">
            <label for="information" class="d-flex">المعلومة المطلوبة</label>
            <input type="text" name="information" class="form-control" id="information" placeholder="">

          </div>

        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->



      <button type="submit" class="btn btn-primary mt-4">إرسال</button>
    </form>
  </div>
  @endsection
