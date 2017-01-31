    $('#input_partnername').on('change', function() {
        if (this.value == '5'){
            $("#usergeo").show();
            $("#resourcename").hide();
            $("#templatename").hide();
            $("#paidlink").hide();
            $("#numemailspicker").show();
            $("#timezonepicker").show();
            $("#datetimepcr").show();
            $("#fbuttons").show();
        } else if (this.value != 1) {
            $("#usergeo").show();
            $("#resourcename").show();
            $("#templatename").show();
            $("#numemailspicker").show();
            $("#timezonepicker").show();
            $("#datetimepcr").show();
            $("#paidlink").show();
            $("#fbuttons").show();
        } else {
            $("#usergeo").hide();
            $("#resourcename").hide();
            $("#templatename").hide();
            $("#numemailspicker").hide();
            $("#timezonepicker").hide();
            $("#datetimepcr").hide();
            $("#paidlink").hide();
            $("#fbuttons").hide();
        }
    }).trigger("change")

    $('.form_datetime').datetimepicker({
        //language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

    $('.form_date').datetimepicker({
        language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

    $('.form_time').datetimepicker({
        language:  'uk',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });