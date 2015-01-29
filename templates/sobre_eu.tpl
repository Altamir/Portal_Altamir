{include file='include/topo.tpl' } 
<div class="container">
    {if $test != ''}
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1>{$test}
                </div>
            </div>
        </div>
    {/if}  
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sobre</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <h3>Dados Pessoais</h3><hr>
                            <h4>Nome <small>{$user->getNome()} {$user->getSobrenome()}</small></h4> 
                            <h4>Email <small>{$user->getEmail()}</small></h4>
                            <h4>Endereço <small>veja no mapa</small></h4>
                            <h4>Telefone <small>(51) 8149-3024</small></h4>
                            <hr><h3>Formação</h3><hr>
                            <h4>Graduação em Analise e Desenvolvimento de Sistemas  – Universidade UniRitter<small> Cursando 5º semestre em 2015/1</small></h4>
                            <h4>Ensino técnico Informática – Escola de Educação Profissional Alcides Maya <small>2º semestre em 2012</small></h4>
                        </div>
                        <div class="col-xs-5">
                            <img class="img-responsive img-circle" src="{$user->getFoto()}" alt="Foto do {$user->getNome()}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{include file='include/footer.tpl' }