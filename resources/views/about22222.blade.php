@extends('layouts.app')

@section('content')

@include('templates.navigator')



<h1 style="margin-top: 70px;"></h1>



<section class="secti_vidguk">
    <div class="container">
        <div class="row">
      <h2></h2>
            <button type="button"  class="btn btn-info" data-toggle="collapse" data-target="#feedback">Додати відгук  
            <!-- <span class="glyphicon glyphicon-chevron-down"></span> -->
            <span id="glyphicon" class="glyphicon glyphicon-chevron-left "></span>
          </button><br><br>
            <div id="feedback" class="collapse ">
              
            


                      <form class="form-horizontal" role="form">

                       {{csrf_field ()}}
                          <div class="form-group">
                            
                            <div class="col-lg-12">
                              <input type="text" class="form-control" id="name" placeholder="Ім'я" name="name" required>
                              <p class="error" for='form-control' style="display: none;">не заповнено</p>
                            </div>
                        </div>
                          <div class="form-group">
                            
                            <div class="col-lg-12">          
                              <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                               <p class="error1" for='form-control'  style="display: none;">не заповнено</p>
                            </div>
                          </div>
                          <div class="form-group">        
                            <div class="col-lg-12">

                                <textarea class="form-control message" id="msg" name="msg" required>Відгук</textarea>

                            </div>
                          </div>

                         
                        



          				<label class="btn btn-xs" for="my-file-selector">
          					    <input id="my-file-selector" type="file" style="display:none" name="image" class="file" 
          					    onchange="$('#upload-file-info').html(this.files[0].name)">
          				<span class="glyphicon glyphicon-plus"></span> <u>ваше фото</u>
          					</label>
          					<span class='label label-info' id="upload-file-info"></span>
                          <div class="form-group">        
                            <div class="form_submit">
                              <button type="button" id="submit" class="btn btn-default">відправити</button>
                            </div>
                          </div>
                       </form>


          </div>
          <br>
          <table class="table" >

            <thead class="thead-inverse">
                <tr>
                  <th>Name</th>
                  <th>Massage</th>
                  <th>Photo</th>
                </tr>
            </thead>
            <tbody id="table">
              @foreach($feedback as $feed)
              <tr>
                <td>{!!$feed->name !!}</td>
                <td>{{ $feed->msg }}</td>
                <td>
                  <img src="{{asset("public/images/$feed->image")}}" alt="PHOTO"  width="100"  height="100">
                
                </td>
              </tr>
               @endforeach

            </tbody>
          </table>

 {{ $feedback->links() }}



        </div>
    </div>
</section>
@endsection



@section('script')
<script type="text/javascript">
  
$(document).ready(function(){

    $("#submit").click(function(){

console.log($('.file').val());


      if ( $('#name').val()== "" || $('#email').val()== '') {
        if ($('#name').val()== "") {
              $('.error').show();
        } else {
            $('.error1').show();
        }
      } else {

       

        $.ajax({
          type: 'POST',
          url: 'about_me',
          data: {
            '_token': $('input[name=_token]').val(),
            'name': $('#name').val(),
            'email': $('#email').val(),
            'msg': $('#msg').val(),
            'image': $('.file').val(),
          },
          success: function(data){
            console.log(data);
             $("#table").prepend("<tr><td>"+
                          data.name + '</td><td>' + 
                          data.msg + '</td><td> ' + data.image +' <img src="{{asset("public/images/' + data.image + ' ")}}" alt="PHOTO"  width="100"  height="100"></td></tr>'   );
          }
        });

        $('#name').val('');
        $('#email').val('');
        $('#msg').val('відгук');

        }

    });

      $("#btninfo").click(function(){
        $("#glyphicon").toggleClass("chevron_left");
    });






});



</script>
@endsection