@extends('layouts.master')

@section('content')
   <div class="col-xl-12 col-md-24 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        Dibuat
                      <span class="badge badge-primary">{{$artikel -> created_at}}</span>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <h1>judul: {{$artikel -> judul}}</h1>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$artikel -> isi}}</div>
                      Diperbarui
                      <span class="badge badge-primary">{{$artikel -> updated_at}}</span>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection