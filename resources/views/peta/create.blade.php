@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-md-12">
        @if($errors->first())
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4><i class="icon fa fa-times"></i> Alert!</h4>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="col-md-8 col-md-offset-2">
        <h1>buat pesanan</h1>
        <br>
        <div class="box box-success">
            <div class="box-body">
                <form role="form" method="post" action="{{url('petas')}}">

                    {{csrf_field()}}
                    <!-- textarea -->
                    <div class="form-group">
                        <label>ID Karyawan</label>
                        <textarea class="form-control" rows="4" placeholder="Enter description" name="id_karyawan"></textarea>
                    </div>

                        <div class="form-group">
                            <label>deskripsi pesanan</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description" name="deskripsi_pesanan"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Jumlah pesanan</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description" name="jumlah_pesanan"></textarea>
                        </div>

                        <div class="form-group">
                            <label>tujuan</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description" name="tujuan"></textarea>
                        </div>

                        <div class="form-group">
                            <label>prioritas</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description" name="prioritas"></textarea>
                        </div>

                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" value="Input pesanan">
                    </div>

                </form>
            </div>
        </div>

        <a href="#" class="btn btn-default">Back</a>

    </div>
</div>
    @endsection