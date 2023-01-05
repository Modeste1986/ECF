@extends('layouts.app')
@section('title','Dashboard')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editer Joueurs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Manager Quiz</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Titre</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/edit_students_final')}}" class="database_operation">  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Entrer Nom</label>
                                    {{ csrf_field()}}
                                    <input type="text" value="{{ $students->name}}" required="required" name="name" placeholder="Enter name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Entrer E-mail</label>
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $students->id}}">
                                    <input type="text" value="{{ $students->email}}" required="required" name="email" placeholder="Enter name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Entrer num Mobile</label>
                                    {{ csrf_field()}}
                                    <input type="text" value="{{ $students->mobile_no}}" required="required" name="mobile_no" placeholder="Enter mobile-no" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Select DOB</label>
                                    <input type="date" value="{{ $students->dob}}" required="required" name="dob"  class="form-control">
                                </div>
                            </div> --}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Selectionner Quiz</label>
                                    <select class="form-control" required="required" name="exam">
                                        <option value="">Selectionner</option>
                                        @foreach ($exams as $exam)
                                            <option <?php if($students->exam==$exam['id']){ echo "selected";} ?> value="{{ $exam['id']}}">{{$exam['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">password</label>
                                    <input type="password" required="required" name="password" placeholder="Enter password" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn-primary">Mise-à-jour</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->



 
@endsection
