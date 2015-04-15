$(document).ready(function() {
    function startTime() {
        var today=new Date();
        var d=today.getDate();
        var m= today.getMonth() + 1;
        var y=today.getFullYear();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = d+"/"+m+"/"+y+" "+h+":"+m+":"+s;
        var t = setTimeout(function(){startTime()},500);
    }

    function checkTime(i) {
        if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    
    var foo = $('#foo');

    function updateTime() {
        var now = new Date();
        var date = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(); 
        foo.val(date.toString());        
    }

    updateTime();
    setInterval(updateTime, 1000); // 5 * 1000 miliseconds
});
    
    
});
/*
$(document).ready( function() {
    $.fn.setNow = function (onlyBlank) {
        var now = new Date($.now())
        , year
        , month
        , date
        , hours
        , minutes
        , seconds
        , formattedDateTime
        ;

        year = now.getFullYear();
        month = now.getMonth().toString().length === 1 ? '0' + (now.getMonth() + 1).toString() : now.getMonth() + 1;
        date = now.getDate().toString().length === 1 ? '0' + (now.getDate()).toString() : now.getDate();
        hours = now.getHours().toString().length === 1 ? '0' + now.getHours().toString() : now.getHours();
        minutes = now.getMinutes().toString().length === 1 ? '0' + now.getMinutes().toString() : now.getMinutes();
        seconds = now.getSeconds().toString().length === 1 ? '0' + now.getSeconds().toString() : now.getSeconds();

        formattedDateTime = year + '-' + month + '-' + date + 'T' + hours + ':' + minutes + ':' + seconds;

        if ( onlyBlank === true && $(this).val() ) {
            return this;
        }

        $(this).val(formattedDateTime);

        return this;
    }
    function startTime() {
        var today=new Date();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h+":"+m+":"+s;
        var t = setTimeout(function(){startTime()},500);
    }

    function checkTime(i) {
        if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    


});