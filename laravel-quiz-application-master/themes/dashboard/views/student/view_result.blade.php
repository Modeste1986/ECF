@extends('layouts.student')
@section('title','Result')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Resultat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Quiz</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                <!-- Default box -->
                <!-- /.card -->
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <h2>Information joueur</h2>
                        <table class="table">
                            <tr>
                                <td>Nom : </td>
                                <td>{{ $student_info->name}}</td>
                            </tr>
                            <tr>
                                <td>E-mail : </td>
                                <td>{{ $student_info->email}}</td>
                            </tr>
                            {{-- <tr>
                                <td>DOB : </td>
                                <td>{{ $student_info->dob}}</td>
                            </tr> --}}
                            <tr>
                                <td>Nom Quiz : </td>
                                <td>{{ $exam_info->title}}</td>
                            </tr>
                            <tr>
                                <td>Date Quiz : </td>
                                <td>{{ $exam_info->exam_date}}</td>
                            </tr>
                        </table>
                        <h2>Info Resultat</h2>
                        <table class="table">
                            <tr>
                                <td>Bonne réponses : </td>
                                <td>{{ $result_info->yes_ans}}</td>
                            </tr>
                            <tr>
                                <td>Mauvaise réponses : </td>
                                <td>{{ $result_info->no_ans}}</td>
                            </tr>
                            <tr>
                                <td>Total : </td>
                                <td>{{ $result_info->yes_ans+$result_info->no_ans}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->


 
@endsection
