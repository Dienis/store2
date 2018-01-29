$(document).ready(function(){
  $('#contactform').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('.btn').prop('disabled', true);
      $('.btn span').append('<i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>');
    });

    $.ajax({
      type: 'POST',
      url: '/contactform',
      data: $('#contactform').serialize(),
      beforeSend: function()
      {
        console.log('Старт аякс');
      },
      success: function(data){
        console.log(data);
        $('.btn').prop('disabled', false);
        $('.btn span').remove();
        $('.alert-danger').remove();
        $("#contactform").get(0).reset();
        $( "#contactform" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
      },
      error: function(errors) {
        $( "#contactform" ).append( '<div class="alert alert-danger" role="alert">' +errors.responseJSON.message+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $("input[name*='name']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.name +'</div>');
        $("input[name*='email']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.email +'</div>');
        $("textarea[name*='msg']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.msg +'</div>');

        $('.btn').prop('disabled', false);
        $('.btn span').remove();
      }
    });

/*
    $( document ).ajaxError(function(json) {
      console.log(json);
      $('.btn').prop('disabled', false);
      $('.btn span').remove();
      $('.btn-form').append('<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert"> errors<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    });

    $(document).ajaxSuccess(function(json) {
      console.log(json);
      $('.btn').prop('disabled', false);
      $('.btn span').remove();
      $('.btn-form').append('<div class="alert alert-success alert-dismissible fade show col-md-4" role="alert"> Success!!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      $("#contactform").get(0).reset();
    });*/

  });
});