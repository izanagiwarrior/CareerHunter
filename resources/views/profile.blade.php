@extends('layouts.app')

@section('content')
<div class="container-fluid">
     <form action="" method="POST">
          @csrf
          <div class="row">
               <div class="col-md-1">
                    <div style="background-color:#d2d2d2; width:100px; border-radius:50%; height:100px" class="mb-3">
                    </div>
                    <input type="file" style="width:90px; margin-left:6px">
               </div>
               <div class="col-md-4">
                    <h2 class="font-weight-bold">{{Auth::user()->name}}</h2>
                    <div>
                         <label for="" class="font-weight-bold">Phone</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;width:200px">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Birthday</label>
                         <input id="password" type="date" class="form-control @error('password') is-invalid @enderror"
                              name="password" required autocomplete="current-password"
                              style="background-color: #C2E2F5;width:200px">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Location</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;width:200px">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Email</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;width:200px">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Gender</label>
                         <div class="form-group">
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                   <label class="form-check-label" for="inlineRadio1">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                   <label class="form-check-label" for="inlineRadio2">Male</label>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </form>
     <div class="row pt-5">
          <div class="col">
               <h2 class="font-weight-bold">PROFILE INFORMATION</h2>
               <form action="" method="POST">
                    @csrf
                    <div>
                         <label for="" class="font-weight-bold">About Me</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Education</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Work Experience</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Skills</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Resume</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div>
                         <label for="" class="font-weight-bold">Organizational Experience</label>
                         <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password" style="background-color: #C2E2F5;">
                    </div>
                    <div class="text-center">
                         <button type="submit" class="btn btn-primary px-3 mt-4 font-weight-bold">Simpan</button>
                    </div>
               </form>
          </div>
     </div>
</div>
@endsection