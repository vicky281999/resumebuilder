<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class='fullscreenDiv'>
    <div class="center" style="position: absolute;
                               color: blueviolet;
                               font-weight: 200;
    width: 100px;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-left: -50px;
    margin-top: -25px; ">Comming Soon.....</div>
</div>
    <script>
$.ajax({
  url: "https://api.github.com/users/rathishsekar/repos",
  jsonp: true,
  method: "GET",
  dataType: "json",
  success: function(res) {
    console.log(res)
  }
});
        </script>
</html>
