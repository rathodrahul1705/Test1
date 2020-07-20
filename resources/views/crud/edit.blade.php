<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js
">
  <style type="text/css">
    #success_message{ display: none;}
  </style>

  <style type="text/css">
    /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
  </style>
</head>
      <body>
        <div style="display: none;" id="loading_icon" class="loading">Loading&#8230;</div>

                  <div class="container">

                      <form class="well form-horizontal"  id="edit_contact_submit">
                          <fieldset>

                              <!-- Form Name -->
                            <legend>Contact Us Today!</legend>

                              <!-- Text input-->

                              <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>  
                                <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="first_name" placeholder="First Name" class="form-control" value="{{$data->first_name}}" type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- Text input-->

                              <div class="form-group">
                                <label class="col-md-4 control-label" >Last Name</label> 
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="last_name" placeholder="Last Name" class="form-control" value="{{$data->last_name}}" type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="E-Mail Address" class="form-control" value="{{$data->email}}" type="text">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-md-4 control-label">Image</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="image" value="{{$data->image}}" placeholder="Imgae Upload" class="form-control"  type="file">
                                  </div>
                                </div>
                              </div>

                              <!-- Text input-->
                                     
                              <div class="form-group">
                                <label class="col-md-4 control-label">Phone #</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="(845)555-1212" class="form-control" value="{{$data->phone}}" type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- Text input-->
                                    
                              <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="address" value="{{$data->address}}" placeholder="Address" class="form-control" type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- Text input-->
                               
                              <div class="form-group">
                                <label class="col-md-4 control-label">City</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="city" value="{{$data->city}}" placeholder="city" class="form-control"  type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- Select Basic -->
                                 
                              <div class="form-group"> 
                                <label class="col-md-4 control-label">State</label>
                                  <div class="col-md-4 selectContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="state" class="form-control selectpicker" >
                                    <option value=" " >Please select your state</option>
                                    <option>Alabama</option>
                                  </select>
                                </div>
                              </div>
                              </div>

                              <!-- Text input-->

                              <div class="form-group">
                                <label class="col-md-4 control-label">Zip Code</label>  
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="zip" value="{{$data->zip}}" placeholder="Zip Code" class="form-control"  type="text">
                                  </div>
                              </div>
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-md-4 control-label">Website or domain name</label>  
                                 <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <input name="website" placeholder="Website or domain name" class="form-control" value="{{$data->websites}}" type="text">
                                  </div>
                                </div>
                              </div>

                              <!-- radio checks -->
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Do you have hosting?</label>
                                  <div class="col-md-4">
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="hosting" value="yes" /> Yes
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="hosting" value="no" /> No
                                          </label>
                                      </div>
                                  </div>
                              </div>

                              <!-- Text area -->
                                
                              <div class="form-group">
                                <label class="col-md-4 control-label">Project Description</label>
                                  <div class="col-md-4 inputGroupContainer">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        <textarea class="form-control" name="comment" placeholder="Project Description">{{$data->comment}}</textarea>
                                </div>
                                </div>
                              </div>

                              <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label"></label>
                                  <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning" >Send<span class="glyphicon glyphicon-send"></span></button>
                                  </div>
                                </div>

                              </fieldset>
                          </form>
                      </div>
                </div>

    </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>


    <script type="text/javascript">
      $(function() {
          
        $("#edit_contact_submit").on("submit", function(e) {
            e.preventDefault()
          $.ajax({
            url: '{{url("/edit_contact_submit")}}/{{$data->id}}',
            headers:{
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },   
            method: 'POST',
            type: 'JSON',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() {
            $('#loading_icon').show();
            },
            success: function(obj) {
              console.log(obj)
              console.log(obj.status)
              $(".alert-danger").remove();
              if(obj.status ="success") {
                swal({
                          title:'An Contact Added <b style="color:green;">successfully</b>!',
                          type:'success',

                          }).then(e=>{
                          window.location.href = "/contact_data"

                          }).catch(err=>{

                          });
              }

          },
            error: function(obj) {
              if (obj.status == 401) {
                swal(
                  'Warning',
                  'You are not Authorized!',
                  'warning'
                );
              }

              console.log(obj)
              $(".alert-danger").remove();
              console.log(obj.responseJSON.errors)
              $.each(obj.responseJSON.errors, function(key, val) {
                $('.errors').append("<ul style='list-style-type: none;'><li class='alert alert-danger'>"+val+"</li></ul>")
              });
            },
            complete: function() {
              $('#loading_icon').hide();
            }
          }) 
      })       
  })
</script>
</html>