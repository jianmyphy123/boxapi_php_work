<?php require_once('dev.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <title>Box File Upload</title>
  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery.form.js"></script> 
  <?php require_once('dev2.php'); ?>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
</head>

<body>

<?php    

?>
<br><br><br><br>
<div class="container">
  <form method="post" name="frmUpload" enctype="multipart/form-data" class="form-horizontal" id="myForm" action="LocalUpload.php">
    <div class="form-group">
      <label class="col-sm-2 control-label">Company Name:</label>
      <div class="col-sm-10">
        <input name="company" type="text" id="company" class="form-control" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Presenters Name:</label>
      <div class="col-sm-10">
        <input name="contact_name" type="text" id="contact_name" class="form-control" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Contact Email Address:</label>
      <div class="col-sm-10">
        <input name="email" type="email" id="email" class="form-control" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Contact Phone Number:</label>
      <div class="col-sm-10">
        <input type="text" name="phone" id="phone" class="form-control" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Are You Webcasting?</label>
      <div class="col-sm-10 radio">
        <label>
          <input type="radio" name="webcasting" value="yes" id="webcasting_0" checked/>
          Yes
        </label>
        <label>
          <input type="radio" name="webcasting" value="no" id="webcasting_1" />
          No
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Other Notes:</label>
      <div class="col-sm-10">
        <textarea name="notes" id="notes" cols="45" rows="5" class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Upload File:</label>
      <div class="col-sm-10">
        <input name="file" type="file" id="file" required/>
      </div>
      
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <div class="g-recaptcha" data-sitekey="6Leh1yQTAAAAAG_W83klRUWXXpDLVNfXJjtfDxaY" data-callback="correctCaptcha"></div>
        <span id="recaptcha-error" style="color:red">You can't leave Captcha Code empty.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <input name="btnUpload" type="submit" value="Upload" class="btn btn-primary" id="btnSubmit"/>
      </div>
    </div>
</div>
<div class="modal fade bs-warning-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModalWarning">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-ok-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModalOK">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Congratulation!</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    
<div class="container" id="alertContainer">
  
</div>
<div class="alert alert-success alert-dismissable fade in hide" id="successAlert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong>
  <p></p>
</div>
<div class="alert alert-danger alert-dismissable fade in hide" id="warningAlert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong>
    <p></p>
  </div>
</body>
<script>
  function correctCaptcha() {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      $('#recaptcha-error').show();
    }
    else {
      $('#recaptcha-error').hide();
    }
  }
  
  
  $(function() {

    $('#btnSubmit').click(function(e) {
      var response = grecaptcha.getResponse();
      if (response.length == 0) {
        return false;
      }
      else {
        var options = { 
          beforeSend: function() { },
          uploadProgress: function(event, position, total, percentComplete) { },
          success: function() { },
          complete: function(response) 
          {
              var res = $.parseJSON(response.responseText);
              var filename = res.filename;
              var location = res.location;
              myAlert('ok', 'Success Uploading File to Local', '<strong>Uploaded File Name</strong>: '+filename+'<br><br><strong>Uploaded File Location</strong>: '+location);
              boxUpload(filename);
          },
          error: function() { alert('Error Uploading File to Local'); }
        }
        $("#myForm").ajaxForm(options);
        sendMail();
      }

      /*
      var options = { 
          beforeSend: function() { },
          uploadProgress: function(event, position, total, percentComplete) { },
          success: function() { },
          complete: function(response) 
          {
              var res = $.parseJSON(response.responseText);
              var filename = res.filename;
              var location = res.location;
              myAlert('ok', 'Success Uploading File to Local', '<strong>Uploaded File Name</strong>: '+filename+'<br><br><strong>Uploaded File Location</strong>: '+location);
              boxUpload(filename);
          },
          error: function() { alert('Error Uploading File to Local'); }
        }
        $("#myForm").ajaxForm(options);
        sendMail();
      */
      
      return false;  
    });

    

    
    

    function sendMail() {
      $.ajax({
        url: 'Mail.php',
        type: 'POST',
        data: $('#myForm').serialize()+"&file="+$('#file')[0].files[0].name,
        success: function(data) {
          var result = $.parseJSON(data);
          if(result.success == true) {
            myAlert('ok', 'Success Sending Email', "Email Sended. <br><strong>Email Address: </strong> "+result.to+"<br>"+result.mail)
          }
          else {
            myAlert('warning', 'Error Sending Email', 'Failed to send email.<br><strong>Email Address </strong>: '+result.to)
          }
        }
      });
    }

    




    function boxUpload(upload_file_name) {
      /*
      $.ajax({
        url: 'https://api.box.com/2.0/folders', 
        data: JSON.stringify({ name: box_upload_location, parent: { id: '0' } }),
        type: 'POST',
        headers: { 'Authorization': 'Bearer '+token },
        success: function(data, status, xhr) {
          var parent_id = data.id;
          
          uploadFileFunction(parent_id);
        },
        error: function(data, status, error) { 
          var parent_id = data.responseJSON.context_info.conflicts[0].id;
          
          uploadFileFunction(parent_id);
        },
        crossDomain : true,
        processData: false,
        contentType: false,
      });
      
      var uploadFileFunction = function(parent_id) {
        var form = new FormData();
        form.append('file', $('#file')[0].files[0],upload_file_name);
        form.append('parent_id', parent_id);
        
        $.ajax({
          url: 'https://upload.box.com/api/2.0/files/content',
          headers: { 'Authorization': 'Bearer '+token },
          crossDomain : true,
          type: 'POST',
          processData: false,
          contentType: false,
          data: form,
          success: function(data) {
            myAlert('ok','Congratulation!', "Successfully file uploaded to box.")
          },
          error: function(data) {
            myAlert('warning', 'Error', "Error uploding file to Box.<br>details: "+data)
          }
        });
      };
      */
      {
          "alg": "RS256",
          "typ": "JWT",
          "kid": "8nkq5s45"
      }





    }



    function openDialog(type, title, body) {
      if(type == 'ok') {
        $('#myModalOK h4.modal-title').html(title);
        $('#myModalOK div.modal-body p').html(body);
        $('#myModalOK').modal('show');
      }
      else if(type == 'warning') {
        $('#myModalWarning h4.modal-title').html(title);
        $('#myModalWarning div.modal-body p').html(body);
        $('#myModalWarning').modal('show');
      }
    }
    function myAlert(type, title, data) {
      if(type == "ok") {
        $('#alertContainer').append('<div class="alert alert-success alert-dismissable fade in">'+
                                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                                        '<strong>'+title+'</strong>'+
                                        '<p>'+data+'</p>'+
                                      '</div>');
      }
      else {
        $('#alertContainer').append('<div class="alert alert-danger alert-dismissable fade in">'+
                                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                                        '<strong>'+title+'</strong>'+
                                        '<p>'+data+'</p>'+
                                      '</div>');
      }
    }
  });
</script>
</html>