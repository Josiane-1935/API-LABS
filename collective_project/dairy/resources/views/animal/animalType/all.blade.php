@extends('layout')

@section('title')
  Animal Types
@endsection

@section('content')

<div class="row">
       <div class="col-md-12">
         <!-- Default box -->

           <div class="card">
             <div class="card-header">
               <h3 class="card-title">All Animal Types</h3>


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
                       <a href="#" class="fas fa-edit" title="Edit {{ucwords($type->name)}}">

                       <a href="#" class="fas fa-trash" title="Delete {{ucwords($type->name)}}">
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
