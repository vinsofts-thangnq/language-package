<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link type="text/css" href="{!! url('restful/css/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
  </head>
  <body>

    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <table>
            <th><h3 class="panel-title">Thêm </h3><th>
            <th><button><a href="{!! url('index') !!}">Home</a></button><th>
          </table>
        </div>
        <div class="panel-body">

          <form method="POST" action="{{ url('create') }}" name="frmAdd">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
              <label for="lblHoTen">in_code</label>
              <input type="text" class="form-control" name="txt1" />
            </div>
            <div class="form-group">
              <label for="lblToan">en</label>
              <input type="text" class="form-control" name="txt2" />
            </div>
            <div class="form-group">
              <label for="lblLy">vn</label>
              <input type="text" class="form-control" name="txt3" />
            </div>
            <div class="form-group">
              <label for="lblHoa">pages</label>
              <input type="text" class="form-control" name="txt4" />
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>