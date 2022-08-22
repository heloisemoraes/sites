var SiteCliente = function(){
    
    var config = {
        urlCRM      : '',
        nomeServico : 'Cliente',
        usuario     : '',
        accesskey   : ''
    };
    
    var templates = {
        'janelaECliente' : '<div class="janela-site-cliente janela-e-cliente">'+
                                '<div class="topo-janela">'+
                                    '<h3 class="titulo-janela">Atendimentos</h3>'+                                    
                                    '<div class="btn-fechar-janela" title="Fechar"></div>'+                                    
                                '</div>'+
                                '<div class="conteudo-janela">'+
                                    '<span class="pergunta">Cliente?</span>'+
                                    '<div class="botoes">'+
                                        '<div class="btn-sim" title="Sim, sou cliente">Sim</div>'+
                                        '<div class="btn-nao" title="N&atilde;o sou cliente">Não</div>'+
                                    '</div>'+
                                '</div>'+
                           '</div>',
                   
        'janelaLogin' : '<div class="janela-site-cliente janela-login">'+
                                '<div class="topo-janela">'+
                                    '<h3 class="titulo-janela">{{nomeServico}}</h3>'+                                    
                                    '<div class="btn-fechar-janela" title="Fechar"></div>'+                                    
                                '</div>'+
                                '<div class="conteudo-janela">'+
                                    '<form method="post" action="{{urlCRM}}/modules/Webforms/capture.php">'+
                                        '<div class="mensagem-erro" style="display: none;"></div>'+
                                        '<label>'+
                                            '<span style="margin-right: 5px;">Login:</span>'+
                                            '<input type="text" name="login" value="" placeholder="usu&aacute;rio" />'+
                                        '</label>'+
                                        '<label>'+
                                            '<span style="margin-right: 5px;">Senha:</span>'+
                                            '<input type="password" name="senha" value="" placeholder="senha" />'+
                                            '<div class="btn-ok" title="OK">OK</div>'+                                    
                                        '</label>'+
                                        '<div class="esqueceu-senha">'+
                                            '<a href="javascript:void(0);" class="link-esqueceu-senha">Esqueceu sua senha?</a>'+
                                        '</div>'+
                                    '</form>'+
                                '</div>'+
                           '</div>',
                   
         'janelaIframe' : '<div class="janela-iframe">'+
                                '<iframe src="{{urlIframe}}" id="iframe-webform"></iframe>'+
                          '</div>'
    }
    
    function init(cfg){
        jQuery.extend(config, cfg);
        
        window.addEventListener("message", receberMensagem, false);
    }
    
    function receberMensagem(evento){
        var chamada = evento.data;
        
        try {
            eval(chamada);
        }
        catch(e){            
            console.log(e);
        }
    }
    
    function getTemplate(nomeTemplate){
        return templates[nomeTemplate]
                    .replace(/\{\{urlCRM\}\}/g, config['urlCRM'])
                    .replace(/\{\{nomeServico\}\}/g, config['nomeServico']);
    }
    
    function perguntar(){
        if(jQuery(".janela-e-cliente").length == 0){
            jQuery("body").append(getTemplate('janelaECliente'));
            jQuery(".janela-e-cliente").dialog({
                dialogClass : "no-close",
                width : 340,
                height : 250,
                modal : true
            });
            jQuery(".janela-e-cliente .btn-sim").click(function(){
                jQuery(".janela-e-cliente").remove();
                telaLogin();
            });
            
            jQuery(".janela-e-cliente .btn-nao").click(function(){
                jQuery(".janela-e-cliente").remove();
                jQuery("body").append(getTemplate('janelaIframe'));
                jQuery(".janela-iframe").dialog({
                    dialogClass : "no-close",
                    width       : 720,
                    height      : 700,
                    modal       : true
                });
                
                jQuery(".janela-iframe").parents(".ui-dialog").position({
                    my : 'top',
                    at : 'top',
                    of : window
                });
                jQuery(".janela-iframe").parents(".ui-dialog").css("margin-top", "40px");

                var urlIframe = getConfig('urlCRM')+'/portal/webform/webformNaoCliente';
                jQuery(".janela-iframe iframe").attr("src", urlIframe);
            });
            
            jQuery(".janela-e-cliente .btn-fechar-janela").click(function(){
                jQuery(".janela-e-cliente").remove();
            });
        }
    }
    
    function getConfig(nome){
        return config[nome];
    }
    
    function telaLogin(msg){
        if(jQuery(".janela-login").length == 0){
            jQuery(".janela-login").remove();
        }        
        
        if(jQuery(".janela-iframe").length >= 0){
            jQuery(".janela-iframe").remove();
        }
        
        jQuery("body").append(getTemplate('janelaLogin'));
        jQuery(".janela-login").dialog({
            dialogClass : "no-close",
            width: 340,
            height: 300,
            modal: true
        });
        
        if(msg !== undefined){
            jQuery(".janela-login .mensagem-erro").attr("style", "").empty().append(msg).fadeIn();
        }

        jQuery(".janela-login .btn-ok").click(function(){

            var username = jQuery(".janela-login input[name=login]").val(),
                password    = jQuery(".janela-login input[name=senha]").val();

            if(username.length <= 0){
                jQuery(".janela-login .mensagem-erro").attr("style", "").empty().append("Login inv&aacute;lido").fadeIn();
                return false;
            }

            jQuery(".janela-login").remove();
            jQuery(".janela-iframe").remove();

            telaWebformCliente(username, password);
        });

        jQuery(".janela-login .btn-fechar-janela").click(function(){
            jQuery(this).parent(".topo-janela").parent(".janela-site-cliente").remove();
        });
    }
    
    function telaWebformCliente(username, password){
        jQuery("body").append(getTemplate('janelaIframe'));
        jQuery(".janela-iframe").dialog({
            dialogClass : "no-close",
            width : 720,
            height : 620,
            modal : true
        });

        var urlIframe = getConfig('urlCRM')+'/portal/site/login?username='+username+'&password='+password+'&usuario='+getConfig('usuario')+'&accesskey='+getConfig('accesskey');                
        jQuery(".janela-iframe iframe").attr("src", urlIframe);  
    }
    
    function telaAtendimentos(username, password){
        jQuery("body").append(getTemplate('janelaIframe'));
        jQuery(".janela-iframe").dialog({
            dialogClass : "no-close",
            width : 820,
            height : 700,
            modal : true
        });

        var urlIframe = getConfig('urlCRM')+'/portal/site/login?username='+username+'&password='+password+'&usuario='+getConfig('usuario')+'&accesskey='+getConfig('accesskey')+'&pagina=listaAtendimentos';                
        jQuery(".janela-iframe iframe").attr("src", urlIframe);            
        jQuery(".ui-widget-overlay").click(function(){
            jQuery(".janela-iframe").remove();
        });        
        
        jQuery(".janela-iframe").parents(".ui-dialog").position({
            my : 'top',
            at : 'top',
            of : window
        });
        jQuery(".janela-iframe").parents(".ui-dialog").css("margin-top", "40px");
    }
    
    function sair(){
        jQuery(".janela-login, .janela-iframe, .janela-e-cliente").remove();
    }
    
    function resizeDialog(selector, width, height){
        jQuery(selector).dialog('option', 'width', width);
        jQuery(selector).dialog('option', 'height', height);
        
        jQuery(".janela-iframe").parents(".ui-dialog").position({
            my : 'top',
            at : 'top',
            of : window
        });
        jQuery(".janela-iframe").parents(".ui-dialog").css("margin-top", "40px");
    }    
    
    
    return {
        init                : init,
        telaLogin           : telaLogin,
        perguntar           : perguntar,
        resizeDialog        : resizeDialog,
        telaAtendimentos    : telaAtendimentos,
        sair                : sair
    }
}();