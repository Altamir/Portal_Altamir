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
            <p>{$user->getNome()}</p>
        </div>
    </div>
</div>
{include file='include/footer.tpl' }