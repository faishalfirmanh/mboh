<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
    const cobaFetch = ()=>{
      return fetch(`http://jsonplaceholder.typicode.com/posts`)
      .then(res => res.json())
      .then(posts => console.log(posts))
    }
    </script>

  </body>
</html>
