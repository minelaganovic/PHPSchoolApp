@extends('front.layouts.layoutadmin')
@section('content')
<div class="section-1">
<h1><i class="fa fa-share" aria-hidden="true"></i> Registrovani Korisnici:</h1>
    <table>
        <thead style="background-color:#ff663b">
        <tr>
          <th>ID</th>
          <th>Ime</th>
          <th>Prezime</th>
          <th>Email</th>
          <th>Kontakt</th>
          <th>ZemljaRođenja</th>
          <th>MestoRođenja</th>
          <th>DatumRođenja</th>
          <th>JMBG</th>
          <th>Tip Zahteva</th>
          <th colspan="2">Aktivnost Admina</th>
        </tr>
        </thead>
        @foreach ($user as $ur)
        <tr>
          <td>{{$ur['id']}}</td>
          <td>{{$ur['firstname']}}</td>
          <td>{{$ur['lastname']}}</td>
          <td>{{$ur['email']}}</td>
          <td>{{$ur['contact']}}</td>
          <td>{{$ur['countryofbirth']}}</td>
          <td>{{$ur['placeofbirth']}}</td>
          <td>{{$ur['dateofbirth']}}</td>
          <td>{{$ur['jmbg']}}</td>
          <td>{{$ur['tip']}}</td>
          <td>
            <form action="AcceptR" method="POST">
              <a style="color:#ff663b;" title="Prihvati zahtev!" href="{{"adminpage/".$ur['id']}}"> <i class="fa fa-check-circle" style="font-size: 30px; padding-right:20px;" aria-hidden="true"></i></a>
              @csrf
            </form></td><td>
            <label for="modal-switch" title="Odbij zahtev!" role="button" data-toggle="modal" data-target="#deleteUserModal"><i class="fa fa-times-circle" style="font-size: 30px; padding-top:5px;" aria-hidden="true"></i></label>
          </td>
        @endforeach
      </table>
      <br>
      <div style="background-color: #ff653b68" class="pure-css-bootstrap-modal">
        <input type="checkbox" id="modal-switch"/>
        <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <label class="modal-backdrop fade" for="modal-switch"></label>
            <div class="modal-dialog" role="document">
                <form  action="DeclineR" method="POST">
                  @csrf
                  <div class="modal-content">
                      <div class="modal-body">
                        <label for="modal-switch" class="close" data-dismiss="modal" aria-label="Close" style="display:flex;color:#ff663b; align-items: center;">
                          <span aria-hidden="true">
                               &times;
                          </span>
                        </label>
                        <label>Da li stvarno želite da odbijte zahtev?</label>
                      </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger">
                            <a href="{{"adminpage/".$ur['id']}}">Odbij zahtev</a>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <h1><i class="fa fa-users" aria-hidden="true"></i> Korisnici Aplikacije:</h1>
        <div>
        <table>
          <thead style="background-color:#ff663b">
          <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Kontak</th>
            <th>ZemljaRođenja</th>
            <th>MestoRođenja</th>
            <th>DatumRođenja</th>
            <th>JMBG</th>
            <th>VrstaKorisnika</th>
            <th>Aktivnost Admina</th>
          </tr>
          </thead>
          @foreach ($users as $ur)
          <tr>
           <td>{{$ur['id']}}</td>
           <td>{{$ur['firstname']}}</td>
           <td>{{$ur['lastname']}}</td>
           <td>{{$ur['email']}}</td>
           <td>{{$ur['contact']}}</td>
           <td>{{$ur['countryofbirth']}}</td>
           <td>{{$ur['placeofbirth']}}</td>
           <td>{{$ur['dateofbirth']}}</td>
           <td>{{$ur['jmbg']}}</td>
           <td>{{$ur['tip']}}</td>
           <td>
            <form action="{{route('deleteUser',$ur->id)}}" method="POST">
              @csrf
              @method('delete')
              <button style="color:#ff663b; background-color:black; border-radius:10px;" title="Obrisi Korisnika!"> <i class="fa fa-trash" style="font-size: 30px;" aria-hidden="true"></i></button>
            </form>
          </td>
          </tr>
          @endforeach
        </table>
        </div>
</div>
@endsection
