<div class="col-lg-6">
                    <div class="contact-form">
                    
                        <form id="contact" action="\reservation" method="post">
                   
                        @csrf
                          <div class="row" >
                          @if(Session::has('reservation_created'))
                     <div class="alert alert-success" role="alert">
                       {{Session::get('reservation_created')}}
                     </div>
                     @endif
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                           
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*"  >
                              </fieldset>
                             <span style="color:red">
                               @error('name')
                               {{$message}}
                               @enderror
                             </span>
                            </div>
                           
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address">
                            </fieldset>
                            
                            </div>
                         
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" >
                              </fieldset>
                              <span style="color:red">
                               @error('phone')
                               {{$message}}
                               @enderror
                             </span>
                            </div>
                          
                            <div class="col-md-6 col-sm-12">
                            <input type="number" name="guest" placeholder="Number of Guest" >
                            <span style="color:red"> @error('guest'){{$message}}@enderror</span>
                            </div>
                          
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy" > 
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <input type="time" name="time">
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" value="{{old('message')}}" ></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>