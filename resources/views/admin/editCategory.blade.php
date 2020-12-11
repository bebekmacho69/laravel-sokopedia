@extends('admin.crudPanel')
@section('content')
<div class="row" >
        <div class="col" style="margin-bottom: 100px;">
            <div class="container-fluid" style="background: #d9d9d9;">
                <div class="row">
                    <div class="col" style="padding-bottom: 24px;">
                        <h4 class="text-left">Selected Item</h4>
                        <div class="table-responsive" style="width: 100%;float: left;">
                        @foreach($categories as $c)
                        <form action="/editCategory/update" method="post">
                            {{ csrf_field() }}
                            <!-- hidden id -->
                            <input type="hidden" name="categoryID" value="{{ $c->categoryID }}"> <br/>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 0px;">Category Name</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>   
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"><input type="text" style="width: 120px;margin-right: 0px;margin-left: 0px;" name="categoryName" value="{{ $c->categoryName }}"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                        <td style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;width: 133px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <input class="btn btn-primary" type="submit" style="height: 32px;padding-top: 0px;padding-bottom: 0px;margin-left: 0px;" value="Update">                            
                        </form>
                        @endforeach
                        </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection