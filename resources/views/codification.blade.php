@extends ('dashboard')
@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Personnes ayant codifié</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>LOGEMENT</th>
                </tr>
                <tr>
                  <td>Doe</td>
                  <td>John</td>
                  <td>
                    <span class="label label-success">37</span>
                    <span class="label label-warning">B</span>
                    <span class="label label-primary">2éme étage</span>
                  </td>
                </tr>
                <tr>
                  <td>Doe</td>
                  <td>John</td>
                  <td>
                    <span class="label label-success">37</span>
                    <span class="label label-warning">B</span>
                    <span class="label label-primary">2éme étage</span>
                  </td>
                </tr>
                <tr>
                  <td>Doe</td>
                  <td>John</td>
                  <td>
                    <span class="label label-success">37</span>
                    <span class="label label-warning">B</span>
                    <span class="label label-primary">2éme étage</span>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
