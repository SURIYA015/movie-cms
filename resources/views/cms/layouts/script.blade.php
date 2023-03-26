
<!-- All Jquery -->
   <script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
   <!-- Bootstrap popper Core JavaScript -->
   {{-- <script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script> --}}
   <!-- Bootstrap tether Core JavaScript -->
   <script src="{{asset('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- slimscrollbar scrollbar JavaScript -->
   <script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
   <!--Wave Effects -->
   <script src="{{asset('dist/js/waves.js')}}"></script>
   <!--Menu sidebar -->
   <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
   <!--Custom JavaScript -->
   <script src="{{asset('dist/js/custom.min.js')}}"></script>
   <!--Custom JavaScript -->
   <!-- <script src="{{asset('../assets/node_modules/raphael/raphael-min.js')}}"></script> -->
   <!--raphael JavaScript -->
   <!-- <script src="{{asset('../assets/node_modules/morrisjs/morris.min.js')}}"></script> -->
   <!--sparkline JavaScript -->
   <!-- <script src="{{asset('../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script> -->
   <!-- Popup message jquery -->
   <script src="{{asset('../assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <!-- Google Recpatcha-->
   {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
   <!-- Chart JS -->
   <!-- <script src="{{asset('dist/js/dashboard1.js')}}"></script> -->
   <!-- <script src="{{asset('dist/js/dashboard4.js')}}"></script> -->

   <!--tinyEditor-->
   <script src="{{asset('assets/node_modules/tinymce/tinymce.min.js')}}"></script>
   {{-- <script src="{{asset('assets/node_modules/app/app.js')}}"></script> --}}
   <!--tagiput-->
   <script src="{{ asset('assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
   
   <script src="{{asset('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
   <!-- <link rel="stylesheet" href="{{asset('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/> -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/js/bootstrap-multiselect.js" integrity="sha512-5EvDL79fM8WJcOk77QpsZ8DawGlSfbOZ/ycRPz0bxRgtiOFEMj8taAoqmm7AR4p2N+A6VBLg/Ar30L8qbPw1pQ==" crossorigin="anonymous"></script> -->
  
    <!-- Chart JS -->
    <!-- <script src="dist/js/dashboard4.js"></script> -->
   <!-- <script>

      $(document).ready(function() {
         $('input.date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY hh:mm A', minDate: new Date() });
      });

   </script>
     -->

     <script>
      @if(Session::get('alert-type') =="success")
              @if(Session::has('message'))
                  toastr.success("{{Session::get('message')}}");
              @endif
          @elseif(Session::get('alert-type') =="info")
              @if(Session::has('message'))
                  toastr.info("{{Session::get('message')}}");
              @endif
          @elseif(Session::get('alert-type') == "error")
              @if(Session::has('message'))
                  toastr.error("{{Session::get('message')}}");
              @endif
          @else
              @if(Session::has('message'))
                  toastr.warning("{{Session::get('message')}}");
              @endif
          @endif
  </script>
  <script>
      $(document).ready(function() {
      
                  if ($("#mymce").length > 0) {
                      tinymce.init({
                          selector: "textarea#mymce",
                              theme: "modern",
                              height: 300,
                              plugins: [
                                  "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                                  "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                                  "save table contextmenu directionality emoticons template paste textcolor"
                              ],
                              templates: [
                                  {
                                      title:'paragraph',
                                      url: '{{url('template/product.html')}}'
                                  }
                          ],
                          content_css:[
                              "{{url('/css/custom.css')}}",
                              "{{url('/css/style.min.css')}}",
                          ],
                          toolbar: "paste |insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                      });
                  }
              });
  </script>
  <script>
      $('#search-form').submit(function() {
  
          });
          $(document).on('focusout', '#search_field', function() {
              $('#search_field').css({
                  borderRadius: "15px 15px 15px 15px"
              });
          });
          
          $(document).on('keydown', '#search_field', function() {
              $("#search_field").autocomplete({
              source: function(request, response) {
                  $('#search_field').css({
                  borderRadius: "15px 15px 15px 15px"
              });
                  $.get("{{url('productsearch')}}", {
                      'name': $("#search_field").val()
                      }).done(function(data, status) {
                      if (data.length > 0) {
                          $('#search_field').css({
                              borderRadius: "15px 15px 0px 0px"
                          });
                      } else {
                          $('#search_field').css({
                              borderRadius: "15px 15px 15px 15px"
                          });
                      }
                      response($.map(data, function(item) {
                      return {
                                  label: item.name,
                                  value: item.name
                              };
                          }));
                      });
                  }
              });
          });
  </script>