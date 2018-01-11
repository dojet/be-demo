<!DOCTYPE html>
<html>
<head>
    <title>Page Title111</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf8" />
    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
    <script src="http://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
</head>

<body>
<script type="text/javascript">
$().ready(function() {
  gettalk('0');

  $('#talk').click(function() {
    var words = prompt('words');
    $.post('/ajax/addtalk', {'words': words});
  });
});

function gettalk(fromid) {
  $.getJSON('/ajax/gettalk', {'fromid': fromid}, function(data) {
      console.log(data);
      var talks = data.data.talks;
      for (tid in talks) {
        talk = talks[tid];
        console.log(talk);
        $('#chatroom').append('<p>' + talk['words'] + '</p>');
      }
      var nextid = data.data.nextid;
      gettalk(nextid + '');
  });
}
</script>
<div id="chatroom" style="height:24em; border: solid 1px #ccc;">

</div>
<div id="talk">
  <button id="addtalk">发言</button>
</div>
</body>
</html>