<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>languages</title>
    <link type="text/css" href="{!! url('restful/css/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
      .btn {padding:0px;font-weight:bold}
    </style>

  </head>
  <body>

    
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Language</h3>
        </div>
        <table>
        <th><button><a  href="{{url('create')}}">Thêm</a></button></th>
        </table>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>IN_code</th>
                <th>EN</th>
                <th>VN</th>
                <th>PAGES</th>
                <th>Sửa</th>
                <th>Xóa</th>
                
              </tr>
            </thead>
            <tbody>
            <?php $stt = 0 ?>
              @foreach($data as $dt)
                <tr>
                <?php $stt = $stt + 1 ?>
                  <th scope="row">{{$stt}}</th>
                    <td>{{$dt->in_code}}</td>
                    <td>{{$dt->en}}</td>
                    <td>{{$dt->vn}}</td>
                    <td>{{$dt->pages}}</td>

                    <th><a class="btn btn-primary" href="{{url('edit/'.$dt->id)}}">Sửa</a></th>

                  <th>

                  <a href="{{url('delete/'.$dt->id)}}">Delete</a>
                  </th>
                </tr>
               @endforeach 
            </tbody>
          </table>
          

          <hr>
        </div>
      </div>

    </div>
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
