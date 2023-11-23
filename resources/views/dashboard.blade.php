@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Matrimony</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="signup-form mt-5">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="card-header text-center" style='background-color:#be4d25;color:#fff'>My Information</h3>
                    <table class='table'>
                        <tr>
                            <td>First Name</td>
                            <td> : </td>
                            <td>{{ Auth::user()->first_name }}</td>
                        </tr>
                        <tr>
                            <td>Middle Name</td>
                            <td> : </td>
                            <td>{{ Auth::user()->middle_name }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td> : </td>
                            <td>{{ Auth::user()->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td> : </td>
                            <td>{{ Auth::user()->gender == 1 ? 'Male' : 'Female' }}</td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td> : </td>
                            <td>{{ Auth::user()->dateofbirth }}</td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td> : </td>
                            <td>{{ Auth::user()->contact_number }}</td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td> : </td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Hobby</td>
                            <td> : </td>
                            <td>{{ Auth::user()->hobby }}</td>
                        </tr>
                        <tr>
                            <td>Education</td>
                            <td> : </td>
                            <td>{{ Auth::user()->education }}</td>
                        </tr>
                        <tr>
                            <td>Occupation</td>
                            <td> : </td>
                            <td>{{ Auth::user()->occupation }}</td>
                        </tr>
                        <tr>
                            <td>Annual Income</td>
                            <td> : </td>
                            <td>{{ Auth::user()->annual_income }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!--listing section-->
    <main class="signup-form mt-5">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="card-header text-center" style='background-color:#be4d25;color:#fff'>Your perfect partner could be below</h3>
                    <table class='table'>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Hobby</th>
                        <th>Education</th>
                        <th>Occupation</th>
                        <th>Annual Income</th>
                    </tr>
                    @foreach($list as $l)
                    <tr>
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->username }}</td>
                        <td>{{ $l->gender == 1 ? 'Male' : 'Female' }}</td>
                        <td>{{ $l->contact_number }}</td>
                        <td>{{ $l->email }}</td>
                        <td>{{ $l->hobby }}</td>
                        <td>{{ $l->education }}</td>
                        <td>{{ $l->occupation }}</td>
                        <td>{{ $l->annual_income }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection