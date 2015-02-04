{include file='include/topo.tpl' } 
<div class="container">
    {if $test != ''}
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1>{$test}</h1>
                </div>
            </div>
        </div>
    {/if}  
    <!--Curiculo-->
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sobre</h3>
                </div>
                <div class="panel-body"> 
                    <!--Dados Pessoais-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 pull-right">
                            <img class="img-responsive img-circle "  src="{$user->getFoto()}" alt="Foto do {$user->getNome()}" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <div class="panel panel-default">                            
                                <div class="panel-body">                                
                                    <h3>Dados Pessoais</h3><hr>
                                    <h4>Nome <small>{$user->getNome()} {$user->getSobrenome()}</small></h4> 
                                    <h4>Email <small>{$user->getEmail()}</small></h4>
                                    <h4>Endereço <small>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-default" data-toggle="modal" id="btEnde" data-target="#myModal">
                                                Av Farrapos...
                                            </button></small></h4>
                                    <h4>Telefone <small>(51) 8149-3024</small></h4>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <!--Formacao-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <h3>Formação</h3><hr>                                                                   
                                    <h4>Graduação em Analise e Desenvolvimento de Sistemas  –<small> Universidade UniRitter Cursando 5º semestre em 2015/1</small></h4>
                                    <h4>Ensino técnico Informática – <small>Escola de Educação Profissional Alcides Maya 2º semestre em 2012</small></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cursos-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-body">                               
                                    <hr><h3>Cursos</h3><hr>
                                    <h4>2013 -<small> Curso de PHP Orientado a objetos – Treina Web</small></h4>
                                    <h4>2013 -<small> Curso de Java Básico JSE - Treina Web</small></h4>
                                    <h4>2012 -<small> Students to Business Beginner – Centro de Inovação Microsoft-PUCRS</small></h4>
                                    <h4>2012 -<small> MTA: Networking Fundamentals</small></h4>                   
                                    <h4>2011 -<small> Curso de Departamento Pessoal – Cursos 24 Horas</small></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Experencia Proficional-->
                    <div class="row">
                        <div class="col-xs-12"> 
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <h3>Experência Profissional</h3><hr>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4>Empresa<small> Agência Nacional de Transportes Terrestres (ANTT)</small></h4>
                                            <h4>Cargo<small> Técnico Informática (Estagiário)</small></h4>
                                            <h4>Período<small> Junho de 2014 - Novembro 2014</small></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4>Empresa<small> Restaurante Sakura</small></h4>
                                            <h4>Cargo<small> Garçom / Atendente</small></h4>
                                            <h4>Período<small> outubro/2011 - Atual</small></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4>Empresa<small>Café do Lago</small></h4>
                                            <h4>Cargo<small> Maître / Coordenador Operacional</small></h4>
                                            <h4>Período<small> Dezembro/2008 a junho/2011</small></h4>
                                        </div>
                                    </div> 
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div> 
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Meu Endereço</h4>
                </div>
                <div class="modal-body">
                    <div id="mapa"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                   
                </div>
            </div>
        </div>
    </div>
</div>                                    
{literal}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModal').on('shown.bs.modal', function () {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(new google.maps.LatLng(-33.8688, 151.2195));
            });
        });

        var map;

        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(-29.756200185902156, -57.08757859271242)
            };

            map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
{/literal}
{include file='include/footer.tpl' }