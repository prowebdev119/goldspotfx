    var monthName = new Array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    var hourap = new Array(12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

    var dateObj = new Date();
    var day = dateObj.getDate(), 
        month = dateObj.getMonth(), 
        year = dateObj.getFullYear(), 
        hour = dateObj.getHours(), 
        minutes = dateObj.getMinutes(),
        secundes = dateObj.getSeconds();

    wr_clock();
    // setInterval(wr_clock,1000);


    function dig2(d) {
        return ((d<10)?"0":"")+d;
    }
    function wr_clock(object) {
        $("#clock").html(monthName[month]+' '+day+', '+year+' '+dig2(hour)+':'+dig2(minutes)+':'+dig2(secundes));
        
        secundes++;
        if (secundes>=60)
        {
            secundes=0;
            minutes++;
            if (minutes>=60)
            {
                minutes=0;
                hour++;
                if (hour>=24)
                {
                    hour=0;
                }
            }
        }
    }