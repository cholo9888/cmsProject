<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  <!-- SweetAlert2 -->
   <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- daterange picker -->
   <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
   <!-- Tempusdominus Bbootstrap 4 -->
   <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- Bootstrap4 Duallistbox -->
   <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed  layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   @include('layouts.nav')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   @include('layouts.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
        @yield('content')
    </section>
  </div>
    <footer class="main-footer">
   @include('layouts.footer')
  </footer>
</div>
<!-- ./wrapper -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- jQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
@if (session('status'))
    <script>
         toastr.success("{{session('status')}}");
    </script>
@endif


<script>
      $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": true,
    });
    $("#example").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
// window.addEventListener("load", window.print());
// var text1 = document.getElementById("capacity");
// var text2 = document.getElementById("nasoro");

// function add_number() {
//    var first_number = parseFloat(text1.value);
//    if (isNaN(first_number)) first_number = 0;
//    var second_number = parseFloat(text2.value);
//    if (isNaN(second_number)) second_number = 0;
//    var result = first_number * second_number;
//    document.getElementById("txtresult").value = result;
// }
  $(function() {
    $("#red,#capacity").on("keydown keyup", redSoil);
	function redSoil() {
	$("#redTonage").val(Number($("#red").val()) * Number($("#capacity").val()));
	$("#grand").val(Number($("#redTonage").val()) + Number($("#nasoro").val()));
	}
});
$(function() {
    $("#redTonage,#nasoro").on("keydown keyup", grand);
	function grand() {
	$("#grand").val(Number($("#redTonage").val()) + Number($("#nasoro").val()));
	// $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
	}
});
//Totol Bench Trip
$(function() {
    $("#b1, #b2, #b3, #b4, #b5, #b6").on("keydown keyup", totalBench);
	function totalBench() {
	$("#totalBench").val(Number($("#b1").val()) + Number($("#b2").val())+ Number($("#b3").val())+ Number($("#b4").val())+ Number($("#b5").val())+ Number($("#b6").val()));
	// $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
    // $("#limestone").val(Number($("#b1").val()) + Number($("#b2").val())+ Number($("#b3").val())+ Number($("#b4").val())+ Number($("#b5").val())+ Number($("#b6").val()) * Number($(#capacity).val()));
    $("#nasoro").val(Number($("#b1").val() * Number($("#capacity").val())) + Number($("#b2").val()* Number($("#capacity").val()))+ Number($("#b3").val()* Number($("#capacity").val()))+ Number($("#b4").val()* Number($("#capacity").val()))+ Number($("#b5").val()* Number($("#capacity").val()))+ Number($("#b6").val()) * Number($("#capacity").val()));
	}
});
//
$(function() {
    $("#totalBench, #red").on("keydown keyup", total);
	function total() {
	$("#total").val(Number($("#totalBench").val()) + Number($("#red").val()));
	// $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
	}
});
//
     $(document).ready(function() {
        //create arrays to store option and values
        var DT1 = [
            {display: "30", value: "30" },
        ];
        var DT2 = [
            {display: "30", value: "30" },
        ];
        var DT3 = [
            {display: "30", value: "30" },
        ];
        var DT4 = [
            {display: "30", value: "30" },
        ];
        var DT5 = [
            {display: "30", value: "30" },
        ];
        var DT6 = [
            {display: "30", value: "30" },
        ];
        var DT7 = [
            {display: "30", value: "30" },
        ];
        var DT8 = [
            {display: "30", value: "30" },
        ];
        var DT9 = [
            {display: "45", value: "45" },
        ];
        var DT10 = [
            {display: "45", value: "45" },
        ];
        var DT11 = [
            {display: "0", value: "0" },
        ];



        //If parent option is changed
        $("#parent_selection").change(function() {
            var parent = $(this).val(); //get option value from parent
            switch(parent){ //using switch compare selected option and populate child
                // case 'continents':
                //     $('#child_selection').attr('disabled', false);
                //     list(continents);
                //     break;
                // case 'oceans':
                //     $('#child_selection').attr('disabled', false);
                //     list(oceans);
                //     break;
                    case 'DT1':
                    $('#child_selection').attr('disabled', false);
                    list(DT1);
                    break;
                    case 'DT2':
                    $('#child_selection').attr('disabled', false);
                    list(DT2);
                    break;
                    case 'DT3':
                    $('#child_selection').attr('disabled', false);
                    list(DT3);
                    break;
                    case 'DT4':
                    $('#child_selection').attr('disabled', false);
                    list(DT4);
                    break;
                    case 'DT5':
                    $('#child_selection').attr('disabled', false);
                    list(DT5);
                    break;
                    case 'DT6':
                    $('#child_selection').attr('disabled', false);
                    list(DT6);
                    break;
                    case 'DT7':
                    $('#child_selection').attr('disabled', false);
                    list(DT7);
                    break;
                    case 'DT8':
                    $('#child_selection').attr('disabled', false);
                    list(DT8);
                    break;
                    case 'DT9':
                    $('#child_selection').attr('disabled', false);
                    list(DT9);
                    break;
                    case 'DT10':
                    $('#child_selection').attr('disabled', false);
                    list(DT10);
                    break;
                default: //default child option is blank
                    // $("#child_selection").html('');
                    // $('#child_selection').attr("disabled", true);
                    $('#child_selection').attr('disabled', false);
                    list(DT11);
                    break;
            }
        });

        //function to populate child select box
        function list(array_list) {
            $("#child_selection").html(""); //reset child options
            $(array_list).each(function (i) { //populate child options
                $("#child_selection").append("<option value='" + array_list[i].value + "'>" + array_list[i].display + "</option>");
            });
        }
    });

     $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    function findProduct(){
    var arr = document.getElementsByClassName('benchTonage');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot *= parseFloat(arr[i].value);
    }
    document.getElementById('bench').value = tot;
}
// function totalTrip(){
//     var arr = document.getElementsByClassName('trips');
//     var tot=0;
//     for(var i=0;i<arr.length;i++){
//         if(parseFloat(arr[i].value))
//             tot += parseFloat(arr[i].value);
//     }
//     document.getElementById('total').value = tot;
// }

function lime(){
    var arr = document.getElementsByClassName('limestone');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('aikambe').value = tot;
}

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    $('#timepickerr').datetimepicker({
      format: 'LT'
    })

  })
</script>
</body>
</html>
