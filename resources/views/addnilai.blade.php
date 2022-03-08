@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Input Nilai Secara Acak</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('nilai') }}">Nilai</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('addjumlah') }}">Add Jumlah</a></li>
                    <li class="breadcrumb-item active">Add Nilai</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Isi data - data dibawah ini dengan benar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('savenilai') }}" id="quickForm">
              @csrf
              <div class="card-body">
                @for ($i = 1; $i <= $jumlah; $i++)
                  <div class="form-group">
                    <label for="nilai">Masukkan Nilai Tugas {{ $i }}</label>
                    <input type="number" name="nilai[{{$i}}]" class="form-control" id="nilai" placeholder="Masukkan Nilai Tugas">
                  </div>
                @endfor
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection