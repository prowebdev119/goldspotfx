<html>
<head>
<title>Calculator</title>
<link href="style.css" rel="stylesheet" type="text/css">
{literal}
<script>
var colorBlank       = '#FFFFFF';
var colorActive      = '#FFFFFF';
var colorActiveHover = '#FFD39D';
var colorPast        = '#E2E2E2';
var colorToday       = '#FEAE68';
var colorToDate      = '#FFEA00';
var colorPayDate     = '#FBF7CC';

var CurDate = new Date();
CurDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var ToDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var WantDate = new Date(CurDate.getFullYear(), CurDate.getMonth(), CurDate.getDate());
var Percent = 0;
var Amount = 10;
var Diff = 0;
var FirstDay;
var LastDay;
var lastrow = '';

var percents = new Array;
{/literal}
{section name=p loop=$plans}
percents[{$plans[p].i}] = new Array({$plans[p].min_deposit}, {$plans[p].max_deposit}, {$plans[p].percent});
{/section}
var currencyPow = {$currency_pow};
{literal}
paymentperiod = '{/literal}{$type.period}{literal}'; // 'd' - daily, 'w' - weekly, 'bw' - beweekly, 'm' - monthly, 'y' - yearly
var maxdays = {/literal}{$type.q_days+$type.delay}{literal};
if (maxdays == 0) maxdays = 100000;
if (paymentperiod == 'h')
{
  maxperiods = maxdays;
  maxdays = Math.floor(maxdays / 24)+1;
}
var returnprofit = {/literal}{$type.return_profit}{literal};
var returnprofit_percent = {/literal}{$type.return_profit_percent}{literal};
var compound = {/literal}{$type.use_compound}{literal};
var delay = {/literal}{$type.delay}{literal};

function CalculatePercent()
{
  Percent = 0;
  var LastPercent = percents[0][2];
  for (var i = 0; i < percents.length; i++)
  {
    if (Amount < percents[i][0])
    {
      Percent = LastPercent;
    }
    else
    {
      LastPercent = percents[i][2];
      if ((Amount >= percents[i][0]) && ((Amount <= percents[i][1]) || (percents[i][1] == 0)))
      {
        Percent = percents[i][2];
      }
    }
  }
}

function CalculateDiff(row)
{
  var ToDate;
  var Diff;

  if (row)
  {
    var obj = document.getElementById(row);
    tToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

    if (maxdays > 0 && Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
    {
      return new Array(tToDate, -1);
    }

    if (paymentperiod == 'w')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay);
      Diff = Math.floor(Diff / 7) * 7;
      ToDate = new Date(CurDate.getTime() + (Diff+delay) * (24*60*60*1000) + 2*60*60*1000);
      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());

      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay) / 7;
    }
    else if (paymentperiod == 'w-d')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      wd = ToDate.getDay();
      if (wd == 6)
      {
        ToDate = new Date(ToDate.getTime() - (24*60*60*1000) + 2*60*60*1000);
      }
      if (wd == 0)
      {
        ToDate = new Date(ToDate.getTime() - 2 * (24*60*60*1000) + 2*60*60*1000);
      }
      Diff = Math.floor((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay);
      Weeks = Math.floor(Diff / 7);
      if (ToDate.getDay() < CurDate.getDay()+delay % 7) Weeks++;
      Diff -= Weeks * 2;

      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());
    }
    else if (paymentperiod == 'b-w')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay);
      Diff = Math.floor(Diff / 14) * 14;
      ToDate = new Date(CurDate.getTime() + (Diff+delay) * (24*60*60*1000) + 2*60*60*1000);
      ToDate = new Date(ToDate.getFullYear(), ToDate.getMonth(), ToDate.getDate());

      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000) - delay) / 14;
    }
    else if (paymentperiod == 'm')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      var month = ToDate.getMonth()
      if (ToDate.getDate() < day)
      {
        month--;
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(document.data.years.value, month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDate.getMonth() - CurDate.getMonth();
    }
    else if (paymentperiod == '2m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 2) * 2;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 6 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/2);
    }
    else if (paymentperiod == '3m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 3) * 3;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 4 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/3);
    }
    else if (paymentperiod == '6m')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);

      ToDateMonth = ToDate.getMonth();
      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      if (ToDate.getDate() < CurDate.getDate() && ToDate.getDate() < tLastDay)
      {
        ToDateMonth -= 1;
      }
      var cmonths = Math.floor(((ToDate.getFullYear() - CurDate.getFullYear()) * 12 + ToDateMonth - CurDate.getMonth()) / 6) * 6;

      var cyears = Math.floor(cmonths / 12);
      cmonths -= cyears * 12;
      var month = CurDate.getMonth() + cmonths;
      if (month > 11)
      {
        month -= 12;
        cyears++;
      }

      ToDate = new Date(cyears + CurDate.getFullYear(), month, ToDate.getDate());

      tLastDay = GetDaysInMonth(ToDate.getMonth(), ToDate.getFullYear()); 
      var day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, document.data.years.value); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(cyears + CurDate.getFullYear(), month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear()) * 2 + Math.floor((ToDate.getMonth() - CurDate.getMonth())/6);
    }
    else if (paymentperiod == 'y')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      year = (ToDate.getMonth() < CurDate.getMonth()) ? document.data.years.value - 1 : document.data.years.value;

      ToDate = new Date(year, document.data.monthes.value-1, obj.childNodes[0].data);
      tLastDay = GetDaysInMonth(CurDate.getMonth(), year); 
      day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      year = (CurDate.getMonth() == ToDate.getMonth() && ToDate.getDate() < day) ? document.data.years.value - 1 : document.data.years.value;
      month = CurDate.getMonth();
      if (ToDate.getDate() < day)
      {
        tLastDay = GetDaysInMonth(month, year); 
        day = (tLastDay < CurDate.getDate()) ? tLastDay : CurDate.getDate();
      }
      ToDate = new Date(year, month, day);

      Diff = (ToDate.getFullYear() - CurDate.getFullYear());
    }
    else if (paymentperiod == 'h')
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay)*24;
      if (Diff > maxperiods && maxdays > 0) Diff = maxperiods;
    }
    else
    {
      ToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
      Diff = Math.ceil((ToDate.getTime() - CurDate.getTime())/(24*60*60*1000)-delay);
    }

    if (ToDate.getTime() - CurDate.getTime() <= delay*24*60*60*1000)
    {
      ToDate = CurDate;
      Diff = 0;
    }

  }

  if (ToDate)
  {
    return new Array(ToDate, Diff);
  }
}

function CalculateProfit(row) 
{
  if (row)
  {
    obj = document.getElementById(row);
    if (!obj || !obj.childNodes[0].data) return;
    WantDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
  }

  var t = CalculateDiff(row);
  if (t)
  {
    ToDate = t[0];
    Diff = t[1];
  }

  if (Diff < 0)
  {
    return;
  }

  if (row)
  {
    if (lastrow)
    {
      obj = document.getElementById(lastrow);

      if (obj)
      {
        tDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
        tDiff = Math.ceil((tDate.getTime() - CurDate.getTime())/(24*60*60*1000));
        if (tDiff > 0)
        {
          var t = CalculateDiff(lastrow);
          tToDate = t[0];
          tDiff = t[1];
          if (tToDate.getTime() == tDate.getTime())
          {
            obj.style.backgroundColor = colorPayDate;
          }
          else
          {
            obj.style.backgroundColor = colorActive;
          }
        }
      }
    }
    if (ToDate.getTime() != CurDate.getTime() && ToDate.getMonth()+1 == document.data.monthes.value && ToDate.getFullYear() == document.data.years.value)
    {
      point = FirstDay - 1 + ToDate.getDate();
      lastrow = "td"+point;

      obj = document.getElementById("td"+point);
      obj.style.backgroundColor = colorToDate;
      obj.alt = colorToDate;
    }
  }

  document.getElementById('to').childNodes[0].data = WantDate.getMonth()+1 + '/' + WantDate.getDate() + '/' + WantDate.getFullYear();
  document.getElementById('days').childNodes[0].data = Diff;

  Amount = new Number(document.data.amount.value);
  CalculatePercent();

  if (Percent == 0)
  {
    if (Amount < percents[0][0])
    {
      alert('The provided amount is too small. ' + percents[0][0] + ' is the minimum!');
      document.data.amount.value = percents[0][0];
      CalculateProfit(row);
    }
    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
    {
      alert('The provided amount is too large. ' + percents[percents.length-1][1] + ' is the maximum!');
      document.data.amount.value = percents[percents.length-1][1];
      CalculateProfit(row);
    }
    else
    {
      alert('The provided amount does not meet any range.');
    }
    return;
  }

  document.getElementById('percent').childNodes[0].data = Percent + '%';
  var Profit = 0;

  if (compound)
  {
    var CompoundPercent = new Number(document.data.compounding_percent.value);
    CompoundPercent = (CompoundPercent / 100);
    Percent = Percent / 100;
    if ((CompoundPercent > 1) || (CompoundPercent < 0))
    {
      alert('the Compounding Percent should be from 0 to 100.');
      return;
    }
    Deposit = Amount * Math.pow((1 + Percent * CompoundPercent), Diff);

    for (i = 1; i <= Diff; i++)
    {
      Profit += Amount * Math.pow(1 + Percent * CompoundPercent, i-1);
    }

    Profit = Profit * Percent * (1 - CompoundPercent);
  }
  else
  {
    Deposit = Amount;
    Profit = Amount * (Percent/100) * Diff;
  }

  if (returnprofit)
  {
    day = ToDate.getDate();
    if (row)
    {
      obj = document.getElementById(row);
      day = obj.childNodes[0].data;
    }

    tDiff = Math.ceil((WantDate.getTime() - CurDate.getTime())/(24*60*60*1000));
    if (tDiff == maxdays)
    {
      Profit += Deposit*((100-returnprofit_percent)/100);
      Deposit = 0;
    }
  }

  document.getElementById('deposit').childNodes[0].data = Deposit.toFixed(currencyPow);
  document.getElementById('profit').childNodes[0].data = Profit.toFixed(currencyPow);
}

function GetDaysInMonth(Month, Year)
{
  var PrevDate = new Date(Year, Month+1, 0);
  return PrevDate.getDate();
}

function tdUpdateBg(row, flag) 
{
  obj = document.getElementById(row);

  tToDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
  tDiff = Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000));

  if (maxdays > 0 && Math.ceil((tToDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
  {
    tDiff = -1;
  }

  if (obj.childNodes[0].data && tDiff > 0)
  {
    tDate = new Date(document.data.years.value, document.data.monthes.value-1, obj.childNodes[0].data);
    var t = CalculateDiff(row);
    tToDate = t[0];
    tDiff = t[1];

    if (flag)
    {
      obj.alt = obj.style.backgroundColor;
      obj.style.backgroundColor = colorActiveHover;
    }
    else
    {
      if (tToDate.getTime() == tDate.getTime() && tDate.getTime() != ToDate.getTime())
      {
        obj.style.backgroundColor = colorPayDate;
      }
      else
      {
        obj.style.backgroundColor = obj.alt;
      }
    }
  }

}

function PrevMonth()
{
  var Month = document.data.monthes.selectedIndex - 1;
  var Year = document.data.years.value;
  if (Month < 0)
  {
    Month = 11;
    Year--;
  }
  if (Year - CurDate.getFullYear() < 0)
  {
    Month = CurDate.getMonth();
    Year = CurDate.getFullYear();
  }

  document.data.monthes.options[Month].selected = true;
  document.data.years.options[Year - CurDate.getFullYear()].selected = true;
  InitCalendar(Month+1, Year);
}
function NextMonth()
{
  var Month = document.data.monthes.selectedIndex + 1;
  var Year = document.data.years.value;
  if (Month > 11)
  {
    Month = 0;
    Year++;
  }
  if (Year - CurDate.getFullYear() > 5)
  {
    Month = CurDate.getMonth();
    Year = CurDate.getFullYear();
  }

  document.data.monthes.options[Month].selected = true;
  document.data.years.options[Year - CurDate.getFullYear()].selected = true;
  InitCalendar(Month+1, Year);
}

function InitCalendar(Month, Year)
{
  Month--;
  var TDate = new Date(Year, Month, 1);

  FirstDay = TDate.getDay();
  FirstDay++;
  if (FirstDay == 8) FirstDay = 1;
  LastDay = GetDaysInMonth(Month, Year);
  var d, w, obj;

  var aMonth = new Array();
  aMonth[0] = new Array(5);
  aMonth[1] = new Array(5);
  aMonth[2] = new Array(5);
  aMonth[3] = new Array(5);
  aMonth[4] = new Array(5);
  aMonth[5] = new Array(5);
  aMonth[6] = new Array(5);

  var VarDate = 1;
  var DateNum = 1;
  for (w = 0; w < 6; w++) 
  {
    for (d = 0; d < 7; d++)
    {
      if (VarDate < FirstDay)
      {
        VarDate++;
        continue;
      }
      if (DateNum <= LastDay)
      {
        aMonth[w][d] = DateNum;
        VarDate++;
        DateNum++;
      }
      else
      {
        aMonth[w][d] = 'x';
      }
    }
  }
  for (w = 0; w < 6; w++)
  {
    for (d = 0; d < 7; d++)
    {
      point = (7*w)+d+1;

      if (!isNaN(aMonth[w][d]))
      {
        obj = document.getElementById("td"+point);
        if (obj.childNodes.length == 0)
        {
          var txt = document.createTextNode(aMonth[w][d]);
          obj.appendChild(txt);
        }
        else
        {
          obj.childNodes[0].data = aMonth[w][d];
        }
        obj.style.backgroundColor = colorActive;
        obj.style.cursor = 'hand';
      }
      else
      {
        obj = document.getElementById("td"+point);
        if (obj.childNodes.length == 0)
        {
          var txt = document.createTextNode('');
          obj.appendChild(txt);
        }
        else
        {
          obj.childNodes[0].data = '';
        }
        obj.style.backgroundColor = colorBlank;
        obj.style.cursor = '';
      }

      if (!isNaN(aMonth[w][d]))
      {
        tDate = new Date(document.data.years.value, document.data.monthes.value-1, aMonth[w][d]);

        if (tDate.getTime() < CurDate.getTime())
        {
          obj.style.backgroundColor = colorPast;
          obj.style.cursor = '';
        }
        else if (tDate.getTime() == CurDate.getTime())
        {
          obj.style.backgroundColor = colorToday;
          obj.style.cursor = '';
        }
        else if (maxdays > 0 && Math.ceil((tDate.getTime() - CurDate.getTime())/(24*60*60*1000)) > maxdays)
        {
          obj.style.backgroundColor = colorPast;
          obj.style.cursor = '';
        }
        else if (tDate.getTime() == ToDate.getTime())
        {
          obj.style.backgroundColor = colorToDate;
          lastrow = "td"+point;
        }
        else
        {
          var t = CalculateDiff("td"+point);
          tToDate = t[0];
          tDiff = t[1];
          if (tToDate.getTime() == tDate.getTime())
          {
            obj.style.backgroundColor = colorPayDate;
          }
        }
      }
    }
  }
}
function Spend()
{
  if (opener && opener.spendform && opener.spendform.amount)
  {
    opener.spendform.amount.value = document.data.amount.value;
    if (compound && opener.spendform.compound)
    {
      opener.spendform.compound.value = document.data.compounding_percent.value;
    }
    window.close();
  }
  else
  {
    alert('Please, return to the "Make a Deposit" page to Spend!');
  }
}
</script>
{/literal}
</head>
<body>
<form name="data" onsubmit="CalculateProfit(); return false;">
<table cellspacing=1 cellpadding=0 border=0 width=210>
<tr>
  <td><a href="javascript:PrevMonth()">&lt;&lt;</a></td>
  <td align=center>
   <select name="monthes" onchange="{literal}InitCalendar(document.data.monthes.value, document.data.years.value){/literal}" class=inpts>
    <option value=1>Jan</option>
    <option value=2>Feb</option>
    <option value=3>Mar</option>
    <option value=4>Apr</option>
    <option value=5>May</option>
    <option value=6>Jun</option>
    <option value=7>Jul</option>
    <option value=8>Aug</option>
    <option value=9>Sep</option>
    <option value=10>Oct</option>
    <option value=11>Nov</option>
    <option value=12>Dec</option>
   </select>
   <select name="years" onchange="{literal}InitCalendar(document.data.monthes.value, document.data.years.value){/literal}" class=inpts>
   </select>
  </td>
  <td><a href="javascript:NextMonth()">&gt;&gt;</a></td>
</tr>
</table>

<table cellspacing=1 cellpadding=0 border=0 class=calendartable><tr><td class=calendartablebg>
<table cellspacing=1 cellpadding=2 border=0>
  <tr>
   <td class=calendarweek>Sun</td>
   <td class=calendarweek>Mon</td>
   <td class=calendarweek>Tue</td>
   <td class=calendarweek>Wed</td>
   <td class=calendarweek>Thu</td>
   <td class=calendarweek>Fri</td>
   <td class=calendarweek>Sat</td>
  </tr>                 
  <tr>
   <td align="center" id="td1" onMouseOver="tdUpdateBg('td1', 1)" onMouseOut="tdUpdateBg('td1', 0)" onClick="CalculateProfit('td1')"></td>
   <td align="center" id="td2" onMouseOver="tdUpdateBg('td2', 1)" onMouseOut="tdUpdateBg('td2', 0)" onClick="CalculateProfit('td2')"></td>
   <td align="center" id="td3" onMouseOver="tdUpdateBg('td3', 1)" onMouseOut="tdUpdateBg('td3', 0)" onClick="CalculateProfit('td3')"></td>
   <td align="center" id="td4" onMouseOver="tdUpdateBg('td4', 1)" onMouseOut="tdUpdateBg('td4', 0)" onClick="CalculateProfit('td4')"></td>
   <td align="center" id="td5" onMouseOver="tdUpdateBg('td5', 1)" onMouseOut="tdUpdateBg('td5', 0)" onClick="CalculateProfit('td5')"></td>
   <td align="center" id="td6" onMouseOver="tdUpdateBg('td6', 1)" onMouseOut="tdUpdateBg('td6', 0)" onClick="CalculateProfit('td6')"></td>
   <td align="center" id="td7" onMouseOver="tdUpdateBg('td7', 1)" onMouseOut="tdUpdateBg('td7', 0)" onClick="CalculateProfit('td7')"></td>
  </tr>                                                                                             
  <tr>                                                                                              
   <td align="center" id="td8"  onMouseOver="tdUpdateBg('td8', 1)" onMouseOut="tdUpdateBg('td8', 0)"   onClick="CalculateProfit('td8')"></td>
   <td align="center" id="td9"  onMouseOver="tdUpdateBg('td9', 1)" onMouseOut="tdUpdateBg('td9', 0)"   onClick="CalculateProfit('td9')"></td>
   <td align="center" id="td10" onMouseOver="tdUpdateBg('td10', 1)" onMouseOut="tdUpdateBg('td10', 0)" onClick="CalculateProfit('td10')"></td>
   <td align="center" id="td11" onMouseOver="tdUpdateBg('td11', 1)" onMouseOut="tdUpdateBg('td11', 0)" onClick="CalculateProfit('td11')"></td>
   <td align="center" id="td12" onMouseOver="tdUpdateBg('td12', 1)" onMouseOut="tdUpdateBg('td12', 0)" onClick="CalculateProfit('td12')"></td>
   <td align="center" id="td13" onMouseOver="tdUpdateBg('td13', 1)" onMouseOut="tdUpdateBg('td13', 0)" onClick="CalculateProfit('td13')"></td>
   <td align="center" id="td14" onMouseOver="tdUpdateBg('td14', 1)" onMouseOut="tdUpdateBg('td14', 0)" onClick="CalculateProfit('td14')"></td>
  </tr>
  <tr>
   <td align="center" id="td15" onMouseOver="tdUpdateBg('td15', 1)" onMouseOut="tdUpdateBg('td15', 0)" onClick="CalculateProfit('td15')"></td>
   <td align="center" id="td16" onMouseOver="tdUpdateBg('td16', 1)" onMouseOut="tdUpdateBg('td16', 0)" onClick="CalculateProfit('td16')"></td>
   <td align="center" id="td17" onMouseOver="tdUpdateBg('td17', 1)" onMouseOut="tdUpdateBg('td17', 0)" onClick="CalculateProfit('td17')"></td>
   <td align="center" id="td18" onMouseOver="tdUpdateBg('td18', 1)" onMouseOut="tdUpdateBg('td18', 0)" onClick="CalculateProfit('td18')"></td>
   <td align="center" id="td19" onMouseOver="tdUpdateBg('td19', 1)" onMouseOut="tdUpdateBg('td19', 0)" onClick="CalculateProfit('td19')"></td>
   <td align="center" id="td20" onMouseOver="tdUpdateBg('td20', 1)" onMouseOut="tdUpdateBg('td20', 0)" onClick="CalculateProfit('td20')"></td>
   <td align="center" id="td21" onMouseOver="tdUpdateBg('td21', 1)" onMouseOut="tdUpdateBg('td21', 0)" onClick="CalculateProfit('td21')"></td>
  </tr>
  <tr>
   <td align="center" id="td22" onMouseOver="tdUpdateBg('td22', 1)" onMouseOut="tdUpdateBg('td22', 0)" onClick="CalculateProfit('td22')"></td>
   <td align="center" id="td23" onMouseOver="tdUpdateBg('td23', 1)" onMouseOut="tdUpdateBg('td23', 0)" onClick="CalculateProfit('td23')"></td>
   <td align="center" id="td24" onMouseOver="tdUpdateBg('td24', 1)" onMouseOut="tdUpdateBg('td24', 0)" onClick="CalculateProfit('td24')"></td>
   <td align="center" id="td25" onMouseOver="tdUpdateBg('td25', 1)" onMouseOut="tdUpdateBg('td25', 0)" onClick="CalculateProfit('td25')"></td>
   <td align="center" id="td26" onMouseOver="tdUpdateBg('td26', 1)" onMouseOut="tdUpdateBg('td26', 0)" onClick="CalculateProfit('td26')"></td>
   <td align="center" id="td27" onMouseOver="tdUpdateBg('td27', 1)" onMouseOut="tdUpdateBg('td27', 0)" onClick="CalculateProfit('td27')"></td>
   <td align="center" id="td28" onMouseOver="tdUpdateBg('td28', 1)" onMouseOut="tdUpdateBg('td28', 0)" onClick="CalculateProfit('td28')"></td>
  </tr>                                                                                                                              
  <tr>                                                                                                                               
   <td align="center" id="td29" onMouseOver="tdUpdateBg('td29', 1)" onMouseOut="tdUpdateBg('td29', 0)" onClick="CalculateProfit('td29')"></td>
   <td align="center" id="td30" onMouseOver="tdUpdateBg('td30', 1)" onMouseOut="tdUpdateBg('td30', 0)" onClick="CalculateProfit('td30')"></td>
   <td align="center" id="td31" onMouseOver="tdUpdateBg('td31', 1)" onMouseOut="tdUpdateBg('td31', 0)" onClick="CalculateProfit('td31')"></td>
   <td align="center" id="td32" onMouseOver="tdUpdateBg('td32', 1)" onMouseOut="tdUpdateBg('td32', 0)" onClick="CalculateProfit('td32')"></td>
   <td align="center" id="td33" onMouseOver="tdUpdateBg('td33', 1)" onMouseOut="tdUpdateBg('td33', 0)" onClick="CalculateProfit('td33')"></td>
   <td align="center" id="td34" onMouseOver="tdUpdateBg('td34', 1)" onMouseOut="tdUpdateBg('td34', 0)" onClick="CalculateProfit('td34')"></td>
   <td align="center" id="td35" onMouseOver="tdUpdateBg('td35', 1)" onMouseOut="tdUpdateBg('td35', 0)" onClick="CalculateProfit('td35')"></td>
  </tr>                                                                                                                              
  <tr>                                                                                                                               
   <td align="center" id="td36" onMouseOver="tdUpdateBg('td36', 1)" onMouseOut="tdUpdateBg('td36', 0)" onClick="CalculateProfit('td36')"></td>
   <td align="center" id="td37" onMouseOver="tdUpdateBg('td37', 1)" onMouseOut="tdUpdateBg('td37', 0)" onClick="CalculateProfit('td37')"></td>
   <td align="center" id="td38" onMouseOver="tdUpdateBg('td38', 1)" onMouseOut="tdUpdateBg('td38', 0)" onClick="CalculateProfit('td38')"></td>
   <td align="center" id="td39" onMouseOver="tdUpdateBg('td39', 1)" onMouseOut="tdUpdateBg('td39', 0)" onClick="CalculateProfit('td39')"></td>
   <td align="center" id="td40" onMouseOver="tdUpdateBg('td40', 1)" onMouseOut="tdUpdateBg('td40', 0)" onClick="CalculateProfit('td40')"></td>
   <td align="center" id="td41" onMouseOver="tdUpdateBg('td41', 1)" onMouseOut="tdUpdateBg('td41', 0)" onClick="CalculateProfit('td41')"></td>
   <td align="center" id="td42" onMouseOver="tdUpdateBg('td42', 1)" onMouseOut="tdUpdateBg('td42', 0)" onClick="CalculateProfit('td42')"></td>
  </tr>
</table>
</td></tr></table>
{literal}
<script>
document.data.monthes.options[CurDate.getMonth()].selected = true;
for (var i = CurDate.getFullYear(); i < CurDate.getFullYear() + 10; i++)
{
  document.data.years.options[document.data.years.options.length] = new Option(i,i);
}
InitCalendar(CurDate.getMonth()+1, CurDate.getFullYear());
</script>
{/literal}
<table>
<tr>
  <td>From:</td><td><b><script>document.write(CurDate.getMonth()+1 + '/' + CurDate.getDate() + '/' + CurDate.getFullYear())</script></b></td>
</tr>
<tr>
  <td>To:</td><td><b><span id="to">Select in the calendar</span></b></td>
</tr>
<tr>
  <td>{$type.period_name}:</td><td><b><span id="days">N/A</span></b></td>
</tr>
</tr>
  <td>Amount:</td><td nowrap>{$currency_sign} <input type="text" name="amount" value="{$type.min_deposit|number_format:2:".":""}" size=5 class=inpts> <input type="button" value="Calculate" onclick="CalculateProfit()" class=sbmt></td>
</tr>
{if $type.use_compound}
<tr>
  <td>Compounding Percent:</td><td nowrap><input type="text" name="compounding_percent" value="10" size=5 class=inpts> % <input type="button" value="Calculate" onclick="CalculateProfit()" class=sbmt></td>
</tr>
{/if}
<tr>
  <td>Percent:</td><td><b><span id="percent">N/A</span></b></td>
</tr>
<tr>
  <td>Profit {$currency_sign}:</td><td><b><span id="profit">N/A</span></b></td>
</tr>
<tr>
  <td nowrap>Deposit {$currency_sign}:</td><td><b><span id="deposit">N/A</span></b></td>
</tr>

{if $userinfo.logged}
<tr>
  <td><input type="button" value="Spend" onclick="Spend();" class=sbmt></td>
</tr>
{/if}
</table>
<script>
CalculatePercent();
</script>
</form>
</body>
</html>