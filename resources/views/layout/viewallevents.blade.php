@extends('layout.master')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View All Events</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Events Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                       <table style="width: 100%; border-collapse: separate;
    dborder-spacindg: 20px 20px;">
      <tr class="">
        
        <td>title</td>
        <td>banner</td>
        <td>logo</td>
        <td>venue</td>
        <td>start</td>
         <td>end</td>
        <td>date</td>
        <td>description</td>
        <td>state_id</td>
        <td>user_id</td>
        <td>category_id</td>
      </tr>
      @foreach ($query as $query)
      <tr class="">
        <td> {{ $query->title }} </td>
        <td> <img width = "300" height = "300" src=" {{ asset('/images/'.$query->banner) }}"/> </td> 
        <td> <img width = "300" height = "300" src=" {{ asset('/images/'.$query->logo) }}"/> </td> 


         <td> {{ $query-> venue }} </td>
        <td> {{ $query-> start }} </td>
        <td> {{ $query-> end }} </td>
        <td> {{ $query-> date }} </td>
        <td> {{ $query-> description }} </td>
         <td> {{ $query-> state_id }} </td>
        <td> {{ $query-> user_id }} </td>
        <td> {{ $query-> category_id }} </td>

        <td> <a href=""> approve </a></td>
          <td> <a href=" "> declines </a></td>

      </tr>
      @endforeach
    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection