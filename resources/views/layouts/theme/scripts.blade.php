 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
 <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
 <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('assets/js/app.js' ) }}" ></script>
 <script>
     $(document).ready(function() {
         App.init();
     });
 </script>
 <script src="{{ asset('assets/js/custom.js') }}"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->


 <!-- otros plugin video 13 -->
 <script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
 <script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
 <script src="{{asset('plugins/nicescroll/nicescroll.min.js')}}"></script>
 <script src="{{asset('plugins/currency/currency.js')}}"></script>
 
    <script>
        function noty(msg, option =1)
        {
            Snackbar.show({
                text: msg.toUpperCase(),
                actionText:'CERRAR',
                actionTextColor: '#ffff',
                backGroundColor: option ==1 ? '3b#3f5c' : '#e7515a',
                pos:'top_right'
            });
        }
    </script>
     @livewireScripts
    <!--final  otros plugin video 13 -->


    