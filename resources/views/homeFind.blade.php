@extends('layouts.app')

@section('content')
<div class="container-fluid">

     <div class="row px-5 py-3">
          <div class="col-md-5">
               <input id="email" type="email" placeholder="username"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus style="background-color: #C2E2F5;">
          </div>
          <div class="col-md-5">
               <input id="email" type="email" placeholder="username"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus style="background-color: #C2E2F5;">
          </div>
          <div class="col-md-2">
               <button type="submit" class="btn btn-light btn-block text-white"
                    style="background-color: #4B7BF5;font-weight:bold">
                    {{ __('FIND') }}
               </button>
          </div>
     </div>
     <div class="row px-5 py-3">
          <div class="col-md-5 p-3">
               <div class="card" style="background-color:#C2E2F5">
                    <div class="card-body">
                         <h4 class="font-weight-bold">Search Filter</h4>
                         <hr />
                         <h5 class="font-weight-bold">Job Type</h5>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="full-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   Full-Time
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="part-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   Part-Time
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="internship" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   Less than a year
                              </label>
                         </div>
                         <hr />
                         <h5 class="font-weight-bold">Experience</h5>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="full-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   1-3 Years
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="part-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   3-5 Years
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="internship" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   More than 5 Years
                              </label>
                         </div>
                         <hr />
                         <h5 class="font-weight-bold">Age</h5>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="full-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   18-25 Years Old
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="part-time" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                   25-40 Years Old
                              </label>
                         </div>
                         <hr />
                         <h5 class="font-weight-bold">Expected Salary</h5>
                         <input type="text" class="form-control w-50" placeholder="IDR">
                    </div>
               </div>
          </div>
          <div class="col-md-7 p-3">
               {{-- tempat content ketika search --}}
          </div>
     </div>
</div>
@endsection