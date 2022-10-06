@extends('layouts/login') 
@section('container')
<div class="row">
    <!-- section one -->
    @include('partials/slider')
    <!-- end section one -->

    <!-- section two -->
    <style>
    /*  */
    .two{
        padding-top: 20px;
    }
    .card {
        border-radius: 25px;
        background-color: #b3bb99;
    }
    .form-label {
        color: #2c4a44;
    }
    /* END CSS CARD */

    .btn {
        background-color: #2c4a44;
        color: #ece3d4;
    }
    .btn:hover {
        background-color: #ece3d4;
        border-radius: 30px;
        color: #2c4a44;
    }
  </style>
    <div class="col text-center">
        <section class="two">
            <card class="card mx-auto" style="width: 18rem">
                <div class="card-body">
                    <form id="formtable" method="post" action="/signup-user">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                id="name"
                                required
                                autofocus
                                value="{{ old('name') }}"
                            />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name='email'
                                id="email"
                                required
                                value="{{ old('email') }}"
                            />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @else
                                <div class="form-text">
                                    We'll never share your email with anyone else.
                                </div>
                            @enderror
                        </div>

                        
                        
                        <div class="mb-3">
                            <label for="inputPassword5" class="form-label"
                                >Password</label
                            >
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @else
                            <div id="passwordHelpBlock" class="form-text">
                                Must be 8-20 characters long.
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn" id="#text-button">
                            SIGN UP
                        </button>
                    </form>
                </div>
            </card>
        </section>
    </div>
    <!-- end section two -->
</div>
@endsection
