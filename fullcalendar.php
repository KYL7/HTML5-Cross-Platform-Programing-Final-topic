<head>
<meta charset='utf-8' />
<link href='./fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='./fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='./fullcalendar/lib/moment.min.js'></script>
<script src='./fullcalendar/lib/jquery.min.js'></script>
<script src='./fullcalendar/fullcalendar.min.js'></script>
<script>
  var today=new Date();
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      defaultDate: today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: '天使藝廊藝文活動',
          url: 'http://www.society.taichung.gov.tw/dfevent/index-1.asp?Parser=10,4,21,,,,7170',
          start: '2018-01-27',
          end: '2018-02-01'
        },
        {
          title: '東勢老人會月例會',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-03'
        },
        {
          title: '卡拉OK歡唱',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-06'
        },
        {
          title: '義剪服務',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-11'
        },
        {
          title: '卡拉OK歡唱',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-13'
        },
        {
          title: '義剪服務',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-15'
        },
        {
          title: '卡拉OK歡唱',
           url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-20'
        },
        {
          title: '『揮毫迎新春』活動',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-25'
        },
        {
          title: '卡拉OK歡唱',
          url: 'http://www.society.taichung.gov.tw/df_ufiles/sub04/1%E6%9C%88%E6%B4%BB%E5%8B%95%E7%89%B9%E8%A8%8A.pdf',
          start: '2018-01-27'
        }
      ]
    });
  });
</script>
</head>
<div id='calendar'></div>

