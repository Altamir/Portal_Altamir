        <script src='https://www.google.com/recaptcha/api.js'></script>
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Entre em Contato com nós.</legend>

                        <div class="form-group">                    
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nome" class="form-control">
                            </div>
                        </div>                       

                        <div class="form-group">                   
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                    
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Telefone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                    
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Digite a sua mensagem, ela será respondida em ate 3 dias." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcooAATAAAAAL09ajns1nMq4UZjJYB4t2fWjSA8" data-callback="retornoRecaptcha"></div>
                            
                            <div class="col-md-8 text-right">
                                <button type="submit" id='btnEnviar' class="btn btn-primary btn-lg" disabled="">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
