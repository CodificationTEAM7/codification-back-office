@extends ('dashboard')
@section('content')
<div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-navy">
              <!-- <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              /.widget-user-image -->
              <h3 class="widget-user-username">Pavillon A</h3>
              <h5 class="widget-user-desc">Reubeuss</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
               <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

              <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
                    </ul>
                    <div class="info-box bg-navy">
                            <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Taux d'occupation</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    70%
                                </span>
                           </div>
                    <!-- /.info-box-content -->
                    </div>
          <!-- /.info-box-->
          <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                <a href="voirdetails">
                Voir détails
               </a>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Modifier
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Supprimer
              </button>

        </div>
        </div>

            </div>
          </div>
<!-- =========================================================== -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <!-- <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              /.widget-user-image -->
              <h3 class="widget-user-username">Pavillon B</h3>
              <h5 class="widget-user-desc">Almadies</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
               <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

              <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
                    </ul>
                    <div class="info-box bg-aqua">
                            <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Taux d'occupation</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    70%
                                </span>
                           </div>
                    <!-- /.info-box-content -->
                    </div>
          <!-- /.info-box-->
          <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                <a href="voirdetails">
                Voir détails
               </a>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Modifier
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Supprimer
              </button>

        </div>
        </div>

            </div>
          </div>
  <!-- =========================================================== -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-maroon">
        <!-- <div class="widget-user-image">
          <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        /.widget-user-image -->
        <h3 class="widget-user-username">Pavillon C</h3>
        <h5 class="widget-user-desc">Banlieue</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
          <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
         <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

        <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
              </ul>
              <div class="info-box bg-maroon">
                      <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">Taux d'occupation</span>
                          <span class="info-box-number">41,410</span>

                          <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                          </div>
                          <span class="progress-description">
                              70%
                          </span>
                     </div>
              <!-- /.info-box-content -->
              </div>
    <!-- /.info-box-->
    <div class="box-body">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
          <a href="voirdetails">
          Voir détails
         </a>
        </button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
          Modifier
        </button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
          Supprimer
        </button>

    </div>
    </div>

        </div>
      </div>


        <!-- /.widget-user -->
        </div>
  <!-- =========================================================== -->  <!-- =========================================================== -->
  <div class="row">
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-yellow">
                <!-- <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                /.widget-user-image -->
                <h3 class="widget-user-username">Pavillon A</h3>
                <h5 class="widget-user-desc">Reubeuss</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
                  <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
                 <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

                <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
                      </ul>
                      <div class="info-box bg-yellow">
                              <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></i></span>

                              <div class="info-box-content">
                                  <span class="info-box-text">Taux d'occupation</span>
                                  <span class="info-box-number">41,410</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                      70%
                                  </span>
                             </div>
                      <!-- /.info-box-content -->
                      </div>
            <!-- /.info-box-->
            <div class="box-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  <a href="voirdetails">
                  Voir détails
                 </a>
                </button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                  Modifier
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                  Supprimer
                </button>

          </div>
              </div>
            </div>
          </div>
          <!-- =========================================================== -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-teal">
                <!-- <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                /.widget-user-image -->
                <h3 class="widget-user-username">Pavillon A</h3>
                <h5 class="widget-user-desc">Reubeuss</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
                  <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
                 <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

                <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
                      </ul>
                      <div class="info-box bg-teal">
                              <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></i></span>

                              <div class="info-box-content">
                                  <span class="info-box-text">Taux d'occupation</span>
                                  <span class="info-box-number">41,410</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                      70%
                                  </span>
                             </div>
                      <!-- /.info-box-content -->
                      </div>
            <!-- /.info-box-->
            <div class="box-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  <a href="voirdetails">
                  Voir détails
                 </a>
                </button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                  Modifier
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                  Supprimer
                </button>

          </div>
              </div>
            </div>
          </div>
          <!-- =========================================================== -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-purple">
                <!-- <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                /.widget-user-image -->
                <h3 class="widget-user-username">Pavillon A</h3>
                <h5 class="widget-user-desc">Reubeuss</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Nombre d'étages <span class="pull-right badge bg-blue">31</span></a></li>
                  <li><a href="#">Nombre de chambres <span class="pull-right badge bg-aqua">5</span></a></li>
                 <li><a href="#">Nombre d'occupants <span class="pull-right badge bg-green">12</span></a></li>

                <!--  <div class="col-md-3 col-sm-6 col-xs-12"></div>-->
                      </ul>
                      <div class="info-box bg-purple">
                              <span class="info-box-icon"><i class="fa fa-fw fa-line-chart"></i></i></span>

                              <div class="info-box-content">
                                  <span class="info-box-text">Taux d'occupation</span>
                                  <span class="info-box-number">41,410</span>

                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                      70%
                                  </span>
                             </div>
                      <!-- /.info-box-content -->
                      </div>
            <!-- /.info-box-->
            <div class="box-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  <a href="voirdetails">
                  Voir détails
                 </a>
                </button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                  Modifier
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                  Supprimer
                </button>

          </div>
              </div>
            </div>
          </div>
</div>
@endsection
