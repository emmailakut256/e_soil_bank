@extends('site.EmployeeS')
@section('title')VOUNCHER @endsection
@section('content')
    <div class="app-title">
        <div>
           <h1><i class="fa fa-briefcase"></i><b>WELCOME TO E-SOIL DATA BANK</b></h1>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
    </div>
    @include('admin.partials.flash')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="tile">
                <h3 class="tile-title">PLEASE SELECT THE TIME YOU WISH TO BE ACCESSING OUR DATA</h3>
                
                <form action="{{ route('site.Dashboard.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body row">

                        <div class='col-md-6' style='margin-left:140px'>
                        
                          <div class="form-group">
                            
                            <label for="PERIOD">REQUEST FOR VOUNCHER:</label>
                            <select  name="PERIODss" id="PERIODss" class="form-control @error('PERIOD') is-invalid @enderror">
                              <option value="0">Select a copoun period</option>
                              @foreach($employees_vouc as $employees)
                              
                              <option value="{{$employees->id}}">{{$employees->CATEGORY}}</option>
                            @endforeach
                             
                            

                              </select>
                              @error('PERIOD')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              
                              
                          </div>                      
                         
                            <br>
                            <div class="form-group">
                              <label class="control-label" for="price">VOUNCHER PRICE(UGX:) </label>
                              <input
                              class="form-control @error('price') is-invalid @enderror"
                              type="text"
                              placeholder="VOUNCHER PRICE (UGX:)"
                              id="price"
                              name="price"
                              value=""
                              readOnly
                              />
                              <div class="invalid-feedback active">
                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                              </div>
                            </div>
                          </div>
                         
                    <div class="tile-footer">
                    <div style='margin-left:200px;'>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>SUBMIT</button>
                        &nbsp;&nbsp;&nbsp;
                        <strong> Have vouncher? <a href="{{route('site.Client_vouncher.create')}}">click here</a></strong>
                        <!-- <a class="btn btn-secondary" href="{{ route('site.Employees.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
                     
        $("#PERIODss").select2({
        placeholder: "Select a period",
        allowClear: true
        });
                  
                  
          $("#PERIODss").on('select2:select',function(e){
            selc = e.target.value;
            console.log(selc);
            $.get('/Client_baseds?selc=' + selc,function(data){

            $.each(data,function(index, selected_price){
              console.log(selected_price.PRICE);

            $("#price").val(selected_price.PRICE);

 });
});
});

  </script> 
                          
@endsection
@push('scripts')

@endpush
