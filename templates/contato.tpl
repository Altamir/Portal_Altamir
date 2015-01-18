{include file='include/topo.tpl' } 
<div class="container">
    {if $test != ''}
        {if $test eq 'Aparentemente você é um robô, que pena!'}
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1>{$test}
                    </div>
                </div>
            </div> 
        {else}
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1>{$test}
                    </div>
                </div>
            </div> 
        {/if}

    {/if} 
    <div class="row">
        {include file='include/form_contato.tpl'}
    </div>
    <div class="row">
        <div class="col-xs-offset-2 ">

            <img  class="img-responsive" src="{$img_cons}" alt="Site em construção" /> 

        </div>
    </div>   
</div>
{literal}
    <script>
        var retornoRecaptcha = function (obj) {
            $("#btnEnviar").prop("disabled", false);
        }
    </script>
{/literal}
{include file='include/footer.tpl' }  