$(document).ready(function(){
    $('select').on('change',function(m){

      var pvalue = $(this).data('previous');
      $('select').not(this).find('option[value = "'+pvalue+'"]').show();

      var value = $(this).val();
      $(this).data('previous',value);
      $('select').not(this).find('option[value="'+value+'"]').hide();
    })



    $('#ex1').prop('disabled',false);
    $('#ex2').change(function(){
      if ($('#ex2').val() == 'CedMicro') {
        $('#ex1').prop('readonly',true);
        $('#ex1').val('');
        $('#ex1').prop('placeholder','Not applicable for CedMicro');
      }else{
       $('#ex1').prop('readonly',false);
        $('#ex1').prop('placeholder','Enter Weigth in KG');
      }
    });
    $('#bt').click(function(e){
        e.preventDefault();
        var a=$('#ex3').val();
        var b=$('#ex1').val();
        var c=$('#ex2').val();
        var d=$('#ex4').val();
        console.log(b);
        if (a == null  || c == null || d == null  || b<0) {
          // console.log('ghfgfj');
          $('#display').html('Please Fill and Correct the Information');
        }else{
        $.ajax({
              url:'../farecalculation.php',
              type: "POST",
              data:$('#formm').serialize(),
              success: function(msg){
                  $('#display').html(msg);
              }
              
          });
       }
      });
    document.querySelector("input").addEventListener("keypress", function (evt) {
if ((evt.which < 48 || evt.which > 57) && evt.which != 46)
{
    evt.preventDefault();
}
});
  });