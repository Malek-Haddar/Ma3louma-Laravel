@extends('layouts.app')

@section('content')

<div class="container ">
<div class="row d-flex">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body d-flex justify-content-around">
                <h5 class="card-title text-uppercase mb-2">المطالب</h5>

                <a class="btn btn-success d-flex justify-content-center" " href="/demand/create" ><i class="fa fa-plus mt-1 ml-1" ></i>
                        إضافة مطلب
                    </a>
            </div>
            <div class="table-responsive ml-3 ">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium">الاسم و اللقب</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">العنوان</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">الهيكل المعني</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">الصيغة المراد بها الحصول على المعلومة</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">المعلومة المطلوبة</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($demands as $demand)
                    <tr>

                      <td>
                          <h5 class="font-medium mb-0">{{ $demand->name }}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{ $demand->adress }}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{ $demand->structure }}</span><br>
                      </td>
                      <td>
                          <span class="text-muted "> {{ $demand->formula }} </span><br>
                      </td>
                      <td>
                          <span class="text-muted"> {{ $demand->information }} </span><br>
                      </td>


                          <form action="{{ route('demand.destroy', $demand->id) }}" method="POST">

                         <td> @csrf @method('delete') <button type="submit" title="delete" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button></form>
                          <a href="{{ route('demand.show', $demand->id) }}" title="show" type="submit" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2 " ><i class="fa fa-eye"></i> </a>
                          <a  href="/demand/{{ $demand->id }}/edit" type="submit" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </a>
                          {{-- <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button> --}}
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>



{{--
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a
            href="/demand/create"
            class="bg-blue-500 hover:bg-blue-300 text-white font-bold py-2 px-8 rounded-full">
            Create Demand
        </a>
    </div>
@endif
<div class="mx-1 mb-4 " >
    <div class="d-flex justify-content-center align-items-center flex-column py- mb-4">
        <h1 class="text-uppercase main_heading"> Recent Blogs</h1>
        <p class="main_heading__para">Welcome to my <span class="text-capitalize bg-dark text-white py-2 px-3"> world of blog</span> </p>
    </div>
    <div class="container-fluid bg-trasparent d-flex pb-2">
        @foreach ($demands as $demand)

        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <div class="col">
            <div class="card h-100 shadow-sm mx-1" style="width:20rem  ">
                   <img class="card-img shadow-lg p-0 mb-1  bg-body rounded" src="{{ Voyager::image( $demand->image ) }}" alt="img">

                  <div class="card-body">
                    <h4 class="card-title">{{ $demand->name }}</h4>
                    <small class="text-muted cat">
                      <i class="far fa-clock text-info"></i> {{  $demand->created_at->diffForHumans() }}
                    </small>
                    <p class="card-text">{{ $demand->adress }}</p>
                </div>

                    <div class="ml-3"> <a href="/demand/{{ $demand->id }}" class="btn btn-info">Read More</a>
                </div>
                  <div class="card-footer align-item-end text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views"> Created : {{  $demand->updated_at    }}
                    </div>

                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

    </div>
 --}}




















@endsection
