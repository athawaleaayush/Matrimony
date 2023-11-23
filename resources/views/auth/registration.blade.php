@extends('app')
@extends('layouts.menu')
@section('content')
<main class="signup-form mt-5">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registration</h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="First Name" id="first_name" class="form-control" name="first_name"
                                    required autofocus>
                                @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Middle Name" id="middle_name" class="form-control" name="middle_name"
                                    required autofocus>
                                @if ($errors->has('middle_name'))
                                <span class="text-danger">{{ $errors->first('middle_name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Last Name" id="last_name" class="form-control" name="last_name"
                                    required autofocus>
                                @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <select class="form-control" id='gender' name="gender" required>
                                    <option>Select Gender</option>
                                    <option value='1'>Male</option>
                                    <option value='2'>Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="date" placeholder="Date Of Birth" id="dateofbirth" class="form-control" name="dateofbirth"
                                    required autofocus>
                                @if ($errors->has('dateofbirth'))
                                <span class="text-danger">{{ $errors->first('dateofbirth') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Contact number" id="contact_number" class="form-control"
                                    name="contact_number" required autofocus>
                                @if ($errors->has('contact_number'))
                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Hobbies" id="hobby" class="form-control" name="hobby" required autofocus>
                                @if ($errors->has('hobby'))
                                <span class="text-danger">{{ $errors->first('hobby') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Education" id="education" class="form-control" name="education" required autofocus>
                                @if ($errors->has('education'))
                                <span class="text-danger">{{ $errors->first('education') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="occupation" id="occupation" class="form-control" name="occupation" required autofocus>
                                @if ($errors->has('occupation'))
                                <span class="text-danger">{{ $errors->first('occupation') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="annual_income" id="annual_income" class="form-control" name="annual_income" required autofocus>
                                @if ($errors->has('annual_income'))
                                <span class="text-danger">{{ $errors->first('annual_income') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block" style='background-color:#be4d25;color:#fff'>Sign up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection 

