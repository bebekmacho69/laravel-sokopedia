@extends('layouts.app')

@section('content')
    <div class="row" style="padding-top: 70px;">
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <h1 style="text-align: center;">Transaction History</h1>
                <div class="row" style="background: #e6e6e6;padding-top: 0px;padding-bottom: 60px;border-color: #05ff00;">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Date and time</td>
                                        <td><button class="btn btn-primary" type="button"><a href="/historyDetails">View</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Date and time</td>
                                        <td><button class="btn btn-primary" type="button"><a href="/historyDetails">View</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Date and time</td>
                                        <td><button class="btn btn-primary" type="button"><a href="/historyDetails">View</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Date and time</td>
                                        <td><button class="btn btn-primary" type="button"><a href="/historyDetails">View</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background: rgb(35,35,35);border-color: #05ff00;border-top-style: solid;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"></li>
            </ul>
            <p class="copyright">bebekmacho69 @ 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection