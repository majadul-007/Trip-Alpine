@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <!-- <th>traveluser Id</th> -->
        <th>PASSWORD</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>

        <th>ACTION</th>
    </tr>
    @foreach ($travelusers as $traveluser)
    <tr>
        <td>{{$traveluser->name}}</td>
        <!-- <td>{{$traveluser->traveluser_id}}</td> -->
    <td>{{$traveluser->password}}</td>
    <td>{{$traveluser->email}}</td>
    <td>{{$traveluser->address}}</td>
    
    <td>{{$traveluser->phone}}</td>
    <td><a href="/myprofile/{{$traveluser->id}}">Details</a></td>

    </tr>
    @endforeach

</table>



