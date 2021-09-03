@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mt-2 text-xl text-gray-700 pt-8 pb-10 leading-8 font-light" ></div>
                    <a href="/demand" <i class="fa fa-undo" >
                        Go back
                    </a> </div>
                    <h5 class="card-title text-uppercase ml-4">Manage Demands</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">adress</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">structure</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">formula</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td class="pl-4">1</td>
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
                              <span class="text-muted"> {{ $demand->formula }} </span><br>
                          </td>
                          <td>
                              <span class="text-muted"> {{ $demand->information }} </span><br>
                          </td>



                        </tr>
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

  @endsection
