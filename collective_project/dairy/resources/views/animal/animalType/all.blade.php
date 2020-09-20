@extends('layout')

@section('title')
  Animal Types
@endsection

@section('content')

<div class="row">
       <div class="col-md-12">
         <!-- Default box -->

           <div class="card">
             @if (session('status'))
               <div class="alert alert-success">
                 {{ session('status')}}
               </div>
             @endif
             <div class="card-header">
               <h3 class="card-title">All Animal Types</h3>

               <div class="card-tools">
                 <a href="{{URL::to('/animals/type/add')}}" class="btn btn-primary small btn-sm"> <span style="color:white;">Add<i class="fas fa-plus"></span></i></a>
               </div>


             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">
               <table class="table">
                 <thead>
                   <tr>
                     <th style="width: 10%">#</th>
                     <th>Name</th>
                     <th class="text-center">Photo</th>
                     <th style="width: 20%">Total Breeds</th>
                     <th>Actions</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($animalTypes as $type)
                   <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{ucwords($type->name)}}</td>
                     <td align="center"><img class="rounded img-fluid img-thumbnail" style="width:20%" src="{{URL::to($type->photo)}}" alt="{{ucwords($type->name)}}" ></td>
                     <td><span class="badge bg-purple">{{count($type->breeds)}}</span></td>
                     <td>
                       <a href="{{URL::to('animals/type/edit')}}{{'/'.$type->animalTypeId}}" class="fas fa-edit" title="Edit {{ucwords($type->name)}}"></a>

                       <a data-title="Are you sure you want to delete this?" href="{{URL::to('animals/type/delete')}}{{'/'.$type->animalTypeId}}" class="fas fa-trash delBtn" title="Delete {{ucwords($type->name)}}"></a>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->

           <!-- /.card -->

         <!-- /.card -->
       </div>
     </div>

@endsection

@section('scripts')
  <script src="{{URL::to('example2/plugins/jquery-confirm/dist/jquery-confirm.min.js')}}"></script>
  <script type="text/javascript">
      $('a.delBtn').confirm({
         content: "...",
      });
      

  </script>
@endsection

@section('styles')
  <link rel="stylesheet" href="{{URL::to('example2/plugins/jquery-confirm/dist/jquery-confirm.min.css')}}">

@endsection
