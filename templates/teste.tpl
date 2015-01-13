{include file='include/topo.tpl' } 
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert text-center"><h1>{$teste}</div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-offset-2 ">

            <p>id: {$ass->getId()} Nome: {$ass->getNome()}</p>

            
            {section  name=assunto loop=$assun start=1}
                <p>{$assun[assunto]->getId()} Nome  {$assun[assunto]->getNome()}</p>
            {/section}
        </div>
    </div>
</div>
{include file='include/footer.tpl' }  