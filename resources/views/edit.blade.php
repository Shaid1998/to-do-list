@extends('layouts.main')
@section('content')

<div class="container">
  <h2><center>To do list</center></h2>

  <div class="container">

    <form action="/submit_edit">
      
      <button type="submit" class="btn btn-primary right action_submit">update</button>

      <div class="clearfix"></div>
      
      <div class="form-group">
        <label for="usr">Target:</label>
        <input type="text" class="form-control" id="usr" name="target">
      </div>
      <div class="form-group">
        <label for="pwd">Ranking:</label>
        <input type="number" class="form-control" id="pwd" name="ranking">
      </div>
      
    </form>
  </div>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Target</th>
        <th>Rank</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <tr>
        <td>To do list....To do list....To do list....To do list....To do list....To do list....</td>
        <td>01</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
    </tbody>
  </table>

  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
  

  @endsection


