@extends('layouts.app')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Edit Supplier</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{route('suppliers.update',$supplier->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="form-control" type="text" value="{{$supplier->name}}" id="name" name="name"  required>
                                </div>
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <div>
                                        <input class="form-control" value="{{$supplier->email}}" type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <div>
                                        <input class="form-control" type="number" value="{{$supplier->phone}}" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{$supplier->city}}" name="city" id="city" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bank Branch</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{$supplier->bank_branch}}" name="bank_branch" id="bank_branch" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{$supplier->shop_name}}" name="shop_name" id="shop_name" required>
                                    </div>
                                </div>
                               <div class="footer-btn">
                                    <a href="{{route('suppliers.index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="bx bx-smile font-size-16 align-middle mr-2"></i>Back
                                    </a>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-check-double font-size-16 align-middle mr-2"></i>Data Save
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Account Holder</label>
                                   <input class="form-control" type="text" value="{{$supplier->account_name}}" name="account_name" id="account_name">
                                </div>
                             
                                <div class="form-group">
                                    <label>Account No</label>
                                    <div>
                                         <input class="form-control" type="number" value="{{$supplier->account_no}}" name="account_no" id="account_no" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{$supplier->bank_name}}" name="bank_name" id="bank_name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <div>
                                        <textarea name="address" id="address" class="form-control" rows="5" required>
                                            {{$supplier->address}}
                                        </textarea>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush