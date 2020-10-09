

<div>
    <div class="container">
        
         <div class="row">
            <div class="col-xs-12 col-sm-10">
        
            <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="#!">Home</a></li>
                   <li class="active">About Us</li>
               </ul>
            </div>
            <div class="col-xs-12">
               <h3>About Us</h3>
               <hr>
            </div>
            </div>
        
        
        <div id="history" class="row row-content">
            <div class="col-xs-12 col-sm-7">
                <h2>¿Que es Seguro en linea?</h2>
                <p>Seguro en linea es la plataforma en linea desarrollada bajo el goobierno del presidente electo Andres Manuel Lopez Obrador
                    para apoyo de las comunidades que no tienen disponibilidad de un hospital cercano. En esta plataforma podrás desarrollarte
                    en tu ámbito para ayudar a dichas comunidades desde la comunidad de tu casa y en tus tiempos libres -Gobierno Federal.</p>
                <p>{{texto.second|lowercase}}</p>
                
            </div>
          
            
            
            <div class="col-xs-12 col-sm-5">
                <p style="padding:20px;"></p>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informacion que cura</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Fundada el</dt>
                            <dd>15 Jun. 2019</dd>
                            <dt>Mandatario</dt>
                            <dd>Lic Andres Manuel Lopez Obrador</dd>
                            <dt>Presupuesto asignado</dt>
                            <dd>$100,250,375</dd>
                       </dl>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <div class="well">
                    <blockquote>
                        <p>"Servir a las comunidades que mas lo necesitan es realmente una satirfaccion enorme."</p>
                        <footer>Yogi Berra,
                          <cite>Doctor primerizo en la comunidad de netzagualcoyoth, 2018</cite>
                        </footer>
                    </blockquote>
                </div>
                </div>
            
        </div>


        <div id="corporate" class="row row-content">
            <div class="col-xs-12">
                <h2>Lideres de la corporacion</h2>
                <div class="panel-group" id="accordion"
                      role="tablist" aria-multiselectable="true">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingPeter">
                            <h3 class="panel-title">
                                <a role="button" data-toggle="collapse"
                                     data-parent="#accordion" href="#peter"
                                     aria-expanded="true" aria-controls="peter">
                                    Peter Pan <small>Chief Epicurious Officer</small></a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse in"
                             id="peter"    aria-labelledby="headingPeter">
                            <div class="panel-body">
                                <p>{{texto.third|lowercase}}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingDanny">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                     data-parent="#accordion" href="#danny"
                                     aria-expanded="false" aria-controls="danny">
                                    Dhanasekaran Witherspoon <small>Chief Food Officer</small></a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse"
                             id="danny"    aria-labelledby="headingDanny">
                            <div class="panel-body">
                                <p>{{texto.quarter|lowercase}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingAgumbe">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                     data-parent="#accordion" href="#agumbe"
                                     aria-expanded="false" aria-controls="agumbe">
                                    Agumbe Tang <small>Chief Taste Officer</small></a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse"
                             id="agumbe"    aria-labelledby="headingAgumbe">
                            <div class="panel-body">
                                <p>{{texto.fifth|lowercase}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingAlberto">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                     data-parent="#accordion" href="#alberto"
                                     aria-expanded="false" aria-controls="alberto">
                                    Alberto Somayya <small>Executive Chef</small></a>
                            </h3>
                        </div>
                        <div role="tabpanel" class="panel-collapse collapse"
                             id="alberto"    aria-labelledby="headingAlberto">
                            <div class="panel-body">
                                <p> {{texto.sixth|lowercase}} </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                
                
            </div>
             <div>
                <p style="padding:20px;"></p>
            </div>
            
       </div>

        <div id="facts" class="row row-content">
            <div class="col-xs-12 col-sm-9">
                <h2>Facts &amp; Figures</h2>
                <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <td>&nbsp;</td>
                        <th ng-repeat="tabla in tablas">{{tabla.Ano}}</th>
                    </tr>
                    <tr>
                        <th>Doctores</th>
                        <td>bd</td>
                        <td ng-repeat="tabla in tablas">{{tabla.Employees}}</td>
                    </tr>
                    <tr>
                        <th>Enfermeras</th>
                        <td ng-repeat="tabla in tablas">{{tabla.GuestS}}</td>
                    </tr>
                    <tr>
                        <th>Pacientes atendidos</th>
                        <td ng-repeat="tabla in tablas">{{tabla.SpecialEv}}</td>
                    </tr>
                    
                </table>
                </div>
            </div>
            
            
            
             <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
            
            </div>
            
       </div>
        </div>
    </div>
             
    <!--  scrollspy -->
        <nav class="hidden-xs col-sm-2" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="400">
                <li><a href="#history">Our History</a></li>
                <li><a href="#corporate">Corporate</a></li>
                <li><a href="#facts">Facts</a></li>
            </ul>
        </nav>
        <!-- fin del scrollspy-->
    
        </div>
        
        
        
    </div> <!--Fin de container principal -->
        
</div>
