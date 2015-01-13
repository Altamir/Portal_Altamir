{include file='include/topo.tpl' } 
<div class="container">    
    <div class="row">
        <div class="col-xs-offset-2 ">

            <img  class="img-responsive" src="{$img_cons}" alt="Site em construção" /> 

        </div>        
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                {section name=iten loop=$secoes}
                    {if $secoes[iten]->getTag() eq 'link'}
                    <a class="btn btn-primary btn-lg " href="{$secoes[iten]->getCorpo()}">GitHub</a>
                    {else}
                    <p>{$secoes[iten]->getCorpo()}</p>  
                    {/if}                       
                {/section}
                </div>
            </div>
        </div>
    </div>
</div>
{include file='include/footer.tpl' }  