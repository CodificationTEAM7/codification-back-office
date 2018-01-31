@extends ('dashboard')
@section('content')

<div class="box box-widget widget-user">

                      <!-- Add the bg color to the header using any of the bg-* classes -->

    <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username">1er Etage</h3>
                        <!--h5 class="widget-user-desc">Founder &amp; CEO</h5-->
    </div>

    <div class="box-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                      <h5 class="description-header">06-28</h5>
                      <span class="description-text">NUMEROTATION</span>
                </div>
                            <!-- /.description-block -->
            </div>
                          <!-- /.col -->
            <div class="col-sm-4 border-right">
                  <div class="description-block">
                      <h5 class="description-header">22</h5>
                      <span class="description-text">NOMBRE DE CHAMBRES</span>
                  </div>
                            <!-- /.description-block -->
            </div>
                          <!-- /.col -->
            <div class="col-sm-4">
                <div class="description-block">
                      <h5 class="description-header">8</h5>
                      <span class="description-text">NOMBRE DE CHAMBRES LIBRES</span>
                </div>
                            <!-- /.description-block -->
            </div>
                          <!-- /.col -->
        </div>
                        <!-- /.row -->
    </div>
</div>
<div class="row" style="width: 800px">
        <nav class="col-sm-2">
          <div class="box box-widget widget-user-2" >
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua" style="height: 420px; width: 120px">
              <div class="col-md-3 col-sm-4">
                <i class="fa fa-fw fa-mars fa-4x" ></i>
                <br><br>
                <font size="+1">HOMME</font>
              </div>
            </div>
          </div>
        </nav>
        <section class="col-sm-10">

          <div class="row">
            <article class="col-md-10">
              <div class="box box-info" style="height: 400px; width: 530px">
                          <div class="box-header with-border">
                            <h3 class="box-title">Taux d'occupations</h3>

                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>

                            </div>
                          </div>

                          <div class="box-body chart-responsive" >
                            <div class="chart" id="line-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                  <svg height="300" version="1.1" width="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                  <text x="49.515625" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan>
                                  </text>
                                  <path fill="none" stroke="#aaaaaa" d="M62.015625,261H384.703" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                  </path>
                                <text x="49.515625" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">5,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,202H384.703" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">10,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,143H384.703" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">15,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,84H384.703" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="49.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">20,000</tspan>
                                </text>
                                <path fill="none" stroke="#aaaaaa" d="M62.015625,25H384.703" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="325.5112446648271" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2013</tspan>
                                </text>
                                <text x="182.00023752594805" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                  <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan>
                                </text>
                                <path fill="none" stroke="#3c8dbc" d="M62.015625,229.5412C71.02999182478102,229.2108,89.05872547434306,231.5316996375991,98.07309229912408,228.2196C107.0915435674143,224.9059996375991,125.12844610399472,204.50481256544504,134.14689737228494,203.0384C143.0714064398638,201.58726256544503,160.9204245750215,219.34959077592126,169.84493364260038,216.5494C178.76535826667003,213.75049077592126,196.60620751480937,183.4342223639262,205.52663213887902,180.642C214.54099896366006,177.8203723639262,232.5697326132221,191.1594148357871,241.58409943800314,194.094C250.60255070629336,197.02991483578708,268.6394532428738,218.06603979057593,277.657904511164,204.124C286.58241357874283,190.32718979057594,304.43143171390057,91.84221685845799,313.3559407814794,83.1386C322.1783387613285,74.53456685845798,339.82313472102675,125.20334916418592,348.6455327008759,134.89339999999999C357.6598995256569,144.79429916418593,375.68863317521897,154.85015,384.703,161.50240000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                </path>
                                <circle cx="62.015625" cy="229.5412" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                </circle>
                                <circle cx="98.07309229912408" cy="228.2196" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="134.14689737228494" cy="203.0384" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="169.84493364260038" cy="216.5494" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                </circle>
                                <circle cx="205.52663213887902" cy="180.642" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.58409943800314" cy="194.094" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="277.657904511164" cy="204.124" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                </circle>
                                <circle cx="313.3559407814794" cy="83.1386" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="348.6455327008759" cy="134.89339999999999" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="384.703" cy="161.50240000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                </circle>
                              </svg>
                          <div class="morris-hover morris-default-style" style="left: 91.1234px; top: 135px; display: none;">
                            <div class="morris-hover-row-label">2011 Q3</div>
                            <div class="morris-hover-point" style="color: #3c8dbc">
                            Item 1:
                            4,912
                              </div>
                          </div>
                        </div>
                      </div>
                          <!-- /.box-body -->
              </div>

            </article>
            <nav class="col-sm-2">
                <div class="box box-widget widget-user-2" >
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-aqua" style="height: 400px; ; width: 300px" >

                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <font size="+3" >FREE!</font>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">08</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <span class="label label-warning">12</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">13</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">17</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">20</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">21</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">22</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">23</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="label label-warning">25</span>
                          </td>
                        </tr>

                      </tbody></table>
                   </div>
                  </div>
                </div>
            </nav>
          </div>
        </section>
      </div>
      <!--div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-venus"></i> fa-venus</div-->

  
@endsection
