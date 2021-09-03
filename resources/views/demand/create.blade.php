@extends('layouts.app')

@section('content')
<div class="container">
    <h2> مطلب </h2>
    <form action="/demand"
    method="POST"
    enctype="multipart/form-data">
    @csrf

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">الاسم و اللقب (او التسمية الاحتماعية) </label>
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
            <label for="adress">العنوان (او المقر الاجتماعي  ) </label>
            <input type="text" name="adress" class="form-control" placeholder="" id="adress">
          </div>


        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">

          <div class="form-group">
            <label for="structure">الهيكل المعني</label>
            <input type="text" name="structure" class="form-control" id="structure" placeholder="">
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->


      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="formula">الصيغة المراد بها الحصول على المعلومة  </label>
            <input type="text" name="formula" class="form-control" id="formula" placeholder=" ">
          </div>
        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">
          <div class="form-group">
            <label for="information">المعلومة المطلوبة</label>
            <input type="text" name="information" class="form-control" id="information" placeholder="">
          </div>

        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->



      <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
  </div>
  @endsection
