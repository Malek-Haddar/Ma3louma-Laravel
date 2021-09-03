@extends('layouts.app')

@section('content')
<div class="container">
    <h2> مطلب </h2>
    <form action="/demand/{{ $demand->id }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">الاسم و اللقب (او التسمية الاحتماعية) </label>
            <input type="text" value="{{ old('name' , isset($demand->name) ? $demand->name : '') }}" name="name" class="form-control" placeholder="" id="name">
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
            <input type="text" value="{{ $demand->adress }}" name="adress" class="form-control" placeholder="" id="adress">
            @error('adress')
            {{$message}}
        @enderror
        </div>


        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">

          <div class="form-group">
            <label for="structure">الهيكل المعني</label>
            <input type="text" value="{{ $demand->structure }}" name="structure" class="form-control" id="structure" placeholder=" ">
            @error('structure')
                {{$message}}
            @enderror
        </div>
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->


      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="formula">الصيغة المراد بها الحصول على المعلومة  </label>
            <input type="text" value="{{ $demand->formula }}" name="formula" class="form-control" id="formula" placeholder=" ">
            @error('formula')
                {{$message}}
            @enderror
        </div>
        </div>
        <!--  col-md-6   -->

        <div class="col-md-6">
          <div class="form-group">
            <label for="information">المعلومة المطلوبة</label>
            <input type="text" value="{{ $demand->information }}" name="information" class="form-control" id="information" placeholder="">
            @error('information')
                {{$message}}
            @enderror
        </div>

        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->



      <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
  </div>
  @endsection
