<!-- jquery latest version -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- bootstrap JS -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel JS -->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<!-- bootstrap select JS -->
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
<!-- magnific popup JS -->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- jquery-ui JS -->
<script src="{{ asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
<!-- wow JS -->
<script src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
<!-- bxslider JS -->
<script src="{{ asset('assets/frontend/js/jquery.bxslider.min.js')}}"></script>
<!-- counterup JS -->
<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/waypoints.min.js')}}"></script>
<!-- slick JS -->
<script src="{{ asset('assets/frontend/js/slick.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{ asset('assets/frontend/js/jquery.meanmenu.js')}}"></script>
<!-- plugins JS -->
<script src="{{ asset('assets/frontend/js/plugins.js')}}"></script>
<!-- main JS -->
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>

<script type="text/javascript">
    $('#localization').change(function() {
        var localization = $('#localization').val();
        var url = "{{url('/locale')}}/" + localization;
        
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            location.reload(true);
        });

    });
</script>


<script>
    $(function() {
        var url = "{{url('/menu-items')}}";
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            var language = $('#localization').val();
			
			console.log(language);

            var $service_items = $('.service_items');
            var $project_items = $('.project_items');

            $service_items.empty();
            $project_items.empty();

            if (language == 'en') {
                for (var i = 0; i < data.services.length; i++) {
                    $service_items.append('<li><a href="{{url("service/show")}}/' + data.services[i]['id'] + '">' + data.services[i]['name_en'] + '</a></li>');
                }
                for (var j = 0; j < data.projectTypes.length; j++) {
                    $project_items.append('<li><a href="{{url("project/type/show")}}/' + data.projectTypes[j]['id'] + '">' + data.projectTypes[j]['name_en'] + '</a></li>');
                }

            } else {
                for (var i = 0; i < data.services.length; i++) {
                    $service_items.append('<li><a href="{{url("service/show")}}/' + data.services[i]['id'] + '">' + data.services[i]['name_bn'] + '</a></li>');
                }
                for (var j = 0; j < data.projectTypes.length; j++) {
                    $project_items.append('<li><a href="{{url("project/type/show")}}/' + data.projectTypes[j]['id'] + '">' + data.projectTypes[j]['name_bn'] + '</a></li>');
                }
            }

        });
    });
</script>

@stack('js')