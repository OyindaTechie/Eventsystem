@extends('layout.master')

@section('content')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Category Form </h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              
             
                  </div>
                  <div class="x_content">
                    <br />
                    <form enctype="multipart/form-data" class="form-horizontal form-label-left"  method="post" action="/processcategoryform">
                      {{ csrf_field() }}
                      
                      </div>
                   
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">category name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control col-md-10" name= "name" >
                            <option> Sport </option>
                            <option> Music</option>
                            <option> Nollywood </option>
                            
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Description </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control col-md-10" name="description">    </textarea> 
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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

        @endsection
        <!-- /page content -->

        <!-- footer content -->
   

    <!-- jQuery -->
    
	
  </body>
</html>
