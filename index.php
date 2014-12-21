<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Test 23:06</title>
  <link rel="stylesheet" href="assets/css/layout.css?v=1.0">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="assets/js/script.js"></script>
</head>
<body>
    <ul id="start"></ul>
    <ul id="results"></ul>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.0/mustache.min.js"></script>
    <script type="mustache/x-tmpl" id="matches_tmpl">
     <table>
          <tr>
            <th>#Pos</th>
            <th>Model</th>
            <th>Price</th>
            <th>Image</th>
          </tr>
          {{#matches}}
          <tr>
          <td>{{pos}}</td>
          <td title="{{continent}}">{{model}}</td>
          <td>{{price}}</td>
          <td>{{image}}</td>
          </tr>
          {{/matches}}
          <tr id='last'>
          <td></td>
          <td></td>
          <td>{{#sum}}{{sum}}{{/sum}}</td>
          <td></td>
          </tr>
     </table>
      {{^matches}}
            No matches found
      {{/matches}}
    </script>
    <p>
        <input type="radio" name="match_type" value="0"/> all | 
        <input type="radio" name="match_type" value="1"/> show only asian cars | 
        <input type="radio" name="match_type" value="2"/> show only american cars,
    </p>
</body>
</html>