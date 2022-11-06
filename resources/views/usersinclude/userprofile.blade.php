@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')


    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3 ml-auto">
                    <h2 class="section-title text-justify">My Profile</h2>
                    <form action="{{route('myprofile', $traveluser->id)}}" class="contact-form" method="POST" data-aos="fade-up" data-aos-delay="200">
                    {{method_field('post')}}
                        @csrf
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                <input type="text" name="id" value="{{$traveluser->id}}" class="form-control" readonly>
                                    <label class="text-black" for="fname">User Name</label>
                                    <input type="text" name="name" value="{{$traveluser->email}}" class="form-control" id="fname">
                                    @error("name")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Email address</label>
                                    <input type="email" name="email" value="{{$traveluser->email}}" class="form-control" id="email">
                                    @error("email")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black">Password</label>
                                    <input type="password" name="password" value="{{$traveluser->password}}" class="form-control">
                                    @error("password")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Confirm Password</label>
                                    <input type="password" value="{{$traveluser->password}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Address</label>
                                    <input name="address" value="{{$traveluser->address}}" class="form-control">
                                    @error("address")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Phone Number</label>
                                    <input name="phone" value="{{$traveluser->phone}}" class="form-control" id="phone">
                                    @error("phone")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
            <!-- <div class="form-group">
              <label class="text-black" for="message">Message</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
            </div>  -->

                        <button type="submit" class="btn btn-success">Update Profile</button>
                        <!-- <button type="submit" class="btn btn-danger">Delete My Account</button> -->
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    @include('usersinclude.usersfooter')

</body>

</html>