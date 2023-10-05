@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" style="padding-top:100px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  
                </div>
                <div class="card-body">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    <div>
                    @livewire('dependent-select') 
                     {{-- calling the render function which is in Http.Livewire.Customer and then it displays the view  --}}
                  </div>
                </div>
            </div>
        </div>
    </div>



@endsection

    
