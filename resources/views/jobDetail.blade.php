@extends('layouts.app')

@section('content')
<div class="container-fluid px-5 py-3">
     <div class="row pb-3">
          <div class="card w-100">
               <img class="card-img-top"
                    src="https://www.telkom.co.id/data/image_upload/page/1594112773573_compress_PNG%20Logo%20Sekunder%20Telkom.png"
                    alt="Card image cap" height="200px">
               <div class="card-body">
                    <div class="row">
                         <div class="col-md-3 ">
                              <img src="https://www.telkom.co.id/data/image_upload/page/1594112773573_compress_PNG%20Logo%20Sekunder%20Telkom.png"
                                   alt="" width="340px" height="150px">
                         </div>
                         <div class="col">
                              <p class="font-weight-bold m-0 p-0" style="font-size:40px">PT Telkom Indonesia (Persero)
                                   Tbk</p>
                              <p style="font-size:30px">information and communication companies and complete<br />
                                   telecommunication service providers and networks in Indonesia. </p>
                              <div class="row">
                                   <div class="col">
                                        <div class="d-flex justify-content-between">
                                             <p class="text-muted">Location</p>
                                             <p class=" mr-5">Indonesia</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                             <p class="text-muted">Industry</p>
                                             <p class=" mr-5">Telecommunication and Information </p>
                                        </div>
                                   </div>
                                   <div class="col">
                                        <div class="d-flex justify-content-between">
                                             <p class="text-muted">Website</p>
                                             <p class=" mr-5">https://www.telkom.co.id</p>
                                        </div>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-8 p-0 pr-3">
               <div class="card">
                    <div class="card-body">
                         <p class="font-weight-bold" style="font-size:40px">Company Details</p>
                         <p class="font-weight-bold" style="font-size: 30px">Description</p>
                         <hr />
                         <p>PT Telkom Indonesia (Persero) Tbk (Telkom) is a State-Owned Enterprise (SOE) engaged in
                              <br />
                              information and communication technology (ICT) service and telecommunication networks
                              <br />
                              in Indonesia. Telkom’s majority shareholder is the Government of the Republic of Indonesia
                              <br />
                              at 52.09%, while the remaining 47.91% is controlled by the public. Telkom shares are
                              traded <br />
                              on the Indonesia Stock Exchange (IDX) under the code “TLKM” and the New York Stock <br />
                              Exchange (NYSE) with the code “TLK”. </p>

                         <p class="font-weight-bold" style="font-size: 30px">Purpose</p>
                         <hr />
                         <p>Creating a more prosperous and competitive nation and providing the best added value
                              for<br />
                              stakeholders.</p>

                         <p class="font-weight-bold" style="font-size: 30px">Office Address</p>
                         <hr />
                         <p>Wisma Antara 9-10th Floor, JL. Medan Merdeka Selatan, No. 17, Gambir, RT.11/RW.2, Gambir,
                              <br />
                              Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
                    </div>
               </div>

          </div>
          <div class="col-md-4 p-0">
               <div class="card">
                    <div class="card-body">
                         <p class="font-weight-bold" style="font-size:40px">Galery</p>
                         <div class="row">
                              <div class="col px-4">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                                   <img src="{{asset('images/ti-galery.png')}}" class="mx-4 my-2" alt="" width="140px"
                                        height="150px">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row pt-3">
          <div class="col-md-8 p-0 pr-3">
               <div class="card">
                    <div class="card-body">
                         <p class="font-weight-bold" style="font-size: 30px">Jobs</p>
                         <hr />
                         <p class="font-weight-bold" style="color: #79A9F5;font-size:25px">Business Development</p>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection