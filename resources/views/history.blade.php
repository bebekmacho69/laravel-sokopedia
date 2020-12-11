@extends('layouts.app')

@section('content')
    <div class="row" style="padding-top: 70px; margin-bottom:100%;">
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
                                @foreach($transactions as $t)
                                    <tr>
                                        <td>{{ $t->created_at }}</td>
                                        <td>
                                            <a class="btn btn-primary" type="button" href="/history/get/{{ $t->transactionID }}">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-xl-flex justify-content-xl-center" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="btn-group d-xl-flex justify-content-xl-center" role="group" style="width: 186px;">
						{{ $transactions->links() }}
					</div>
				</div>
            </div>
        </div>
    </div>
@endsection